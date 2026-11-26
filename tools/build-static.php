<?php
declare(strict_types=1);

/*
 * Builds a static copy of the landing page in dist/ (HTML + assets), for review links
 * or hosts without PHP. The live site should run the PHP app; this is only a snapshot.
 *
 * Run from the project folder:   php tools/build-static.php
 */

define('STATIC_EXPORT', true);
require dirname(__DIR__) . '/app/bootstrap.php';

use App\Controllers\LandingController;
use App\Controllers\ErrorController;

$_SERVER['REQUEST_URI'] = '/';
$_SERVER['SCRIPT_NAME'] = '/index.php';

$dist = APP_ROOT . '/dist';
if (is_dir($dist)) {
    $it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dist, FilesystemIterator::SKIP_DOTS), RecursiveIteratorIterator::CHILD_FIRST);
    foreach ($it as $f) {
        $f->isDir() ? rmdir($f->getPathname()) : unlink($f->getPathname());
    }
}
@mkdir($dist, 0775, true);

$pages = [
    'index.html'     => [new LandingController(), 'index'],
    'thank-you.html' => [new LandingController(), 'thankYou'],
    '404.html'       => [new ErrorController(), 'notFound'],
];
foreach ($pages as $file => $action) {
    file_put_contents($dist . '/' . $file, call_user_func($action));
    echo "wrote dist/{$file}\n";
}

// copy public/assets -> dist/assets
$src = APP_ROOT . '/public/assets';
$n = 0;
$it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($src, FilesystemIterator::SKIP_DOTS), RecursiveIteratorIterator::SELF_FIRST);
foreach ($it as $f) {
    $target = $dist . '/assets/' . substr(str_replace('\\', '/', $f->getPathname()), strlen(str_replace('\\', '/', $src)) + 1);
    if ($f->isDir()) {
        @mkdir($target, 0775, true);
    } else {
        @mkdir(dirname($target), 0775, true);
        copy($f->getPathname(), $target);
        $n++;
    }
}
echo "copied {$n} asset files\n";
