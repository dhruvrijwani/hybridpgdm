<?php
/**
 * The landing page: renders each section in the order set in the content file.
 * @var App\Core\View $this
 * @var App\Models\LandingPage $page
 */
$this->layout('layouts/main');
foreach ($page->sections() as $key) {
    echo $this->partial('landing/sections/' . $key, ['s' => $page->section($key), 'isHome' => true]);
}
