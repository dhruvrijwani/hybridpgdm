<?php /** @var array $c */ $home = url('/'); $isHome = $isHome ?? false; ?>
<header class="hdr" id="top">
  <div class="wrap hdr__in">
    <a class="hdr__logo" href="<?= $isHome ? '#top' : e($home) ?>">
      <img src="<?= asset('img/logo-weschool.svg') ?>" alt="S.P. Mandali’s WeSchool, Welingkar Education" width="168" height="43">
    </a>
    <nav class="hdr__nav" id="site-nav" aria-label="Page sections">
      <?php foreach ($c['nav'] as $item): ?>
        <a href="<?= e($isHome ? $item['href'] : $home . $item['href']) ?>"><?= e($item['label']) ?></a>
      <?php endforeach; ?>
      <a class="hdr__nav-phone" href="tel:<?= e(config('phone_primary')) ?>"><?= icon('phone') ?>Call 1800 547 8003</a>
    </nav>
    <div class="hdr__right">
      <a class="hdr__phone" href="tel:<?= e(config('phone_primary')) ?>"><?= icon('phone') ?><span>1800 547 8003</span></a>
      <a class="btn btn--green btn--sm" href="<?= e($isHome ? apply_href() : $home . apply_href()) ?>">Apply Now</a>
      <button class="hdr__burger" type="button" aria-expanded="false" aria-controls="site-nav" aria-label="Open menu">
        <?= icon('menu', 'i i--open') ?><?= icon('close', 'i i--close') ?>
      </button>
    </div>
  </div>
</header>
