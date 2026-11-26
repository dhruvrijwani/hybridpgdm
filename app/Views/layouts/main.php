<?php
/**
 * Page shell: <head>, header, footer, scripts.
 * @var App\Models\LandingPage $page
 * @var array $c        all content
 * @var string $content the rendered page body
 */
$meta  = $c['meta'];
$title = $title ?? $meta['title'];
$canon = (string) config('canonical_url');
$gtm   = (string) config('gtm_id');
$isHome = $isHome ?? false;

$schema = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        [
            '@type' => 'CollegeOrUniversity',
            '@id'   => 'https://www.welingkar.org/#org',
            'name'  => 'Welingkar Institute of Management Development & Research (WeSchool)',
            'alternateName' => 'WeSchool',
            'url'   => 'https://www.welingkar.org/',
            'telephone' => '+91-' . config('phone_primary'),
        ],
        [
            '@type' => 'Course',
            'name'  => 'Welingkar 360° Hybrid PGDM',
            'description' => $c['programme']['intro'],
            'provider' => ['@id' => 'https://www.welingkar.org/#org'],
            'educationalCredentialAwarded' => 'PGDM (Specialization) Hybrid Certification',
            'timeRequired' => 'P2Y',
            'offers' => ['@type' => 'Offer', 'price' => '126000', 'priceCurrency' => 'INR', 'category' => 'Programme fee at enrolment'],
            'hasCourseInstance' => ['@type' => 'CourseInstance', 'courseMode' => 'Blended'],
        ],
    ],
];
if ($isHome) {
    $schema['@graph'][] = [
        '@type' => 'FAQPage',
        'mainEntity' => array_map(function ($f) {
            return ['@type' => 'Question', 'name' => $f['q'], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f['a']]];
        }, $page->faqForSchema()),
    ];
}
?><!doctype html>
<html lang="en-IN" class="no-js">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title><?= e($title) ?></title>
<meta name="description" content="<?= e($meta['description']) ?>">
<?php if ($canon !== ''): ?><link rel="canonical" href="<?= e($canon) ?>">
<?php endif; ?>
<meta name="theme-color" content="#583972">
<meta property="og:type" content="website">
<meta property="og:title" content="<?= e($title) ?>">
<meta property="og:description" content="<?= e($meta['description']) ?>">
<?php if ($canon !== ''): ?><meta property="og:url" content="<?= e($canon) ?>">
<meta property="og:image" content="<?= e(rtrim($canon, '/') . '/' . $meta['og_image']) ?>">
<?php endif; ?>
<meta name="twitter:card" content="summary_large_image">
<link rel="icon" href="<?= asset('img/favicon-32.png') ?>" sizes="32x32">
<link rel="apple-touch-icon" href="<?= asset('img/favicon-180.png') ?>">
<?php if (!defined('STATIC_EXPORT')): ?><link rel="preload" href="<?= asset('fonts/Inter-latin.woff2', false) ?>" as="font" type="font/woff2" crossorigin><?php endif; ?>
<?php if ($isHome): ?>
<link rel="preload" href="<?= asset('img/hero-student.webp') ?>" as="image" fetchpriority="high">
<link rel="preconnect" href="https://eeconfigstaticfiles.blob.core.windows.net" crossorigin>
<?php endif; ?>
<link rel="stylesheet" href="<?= asset('css/main.css') ?>">
<?php if ($gtm !== ''): ?>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','<?= e($gtm) ?>');</script>
<?php endif; ?>
<script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG) ?></script>
</head>
<body class="<?= $isHome ? 'is-home' : 'is-inner' ?><?= config('show_placeholders') ? ' show-ph' : '' ?>">
<?php if ($gtm !== ''): ?><noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= e($gtm) ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><?php endif; ?>
<a class="skip" href="#main">Skip to content</a>
<?= $this->partial('partials/icons') ?>
<?= $this->partial('partials/header') ?>
<main id="main">
<?= $content ?>
</main>
<?= $this->partial('partials/footer') ?>
<?php if ($isHome): ?><?= $this->partial('partials/mobile-bar') ?><?php endif; ?>
<script src="<?= asset('js/main.js') ?>" defer></script>
</body>
</html>
