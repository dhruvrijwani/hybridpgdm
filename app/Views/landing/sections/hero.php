<?php
/**
 * 01 Hero, from the client's Figma ("Landing page final" › "Final Design"), without the black outlines.
 * The illustration follows the Figma frame point for point: the student, the triangle lattice
 * (vectorised from the Figma artwork), the three programme tags and the three triangles on the right.
 * @var array $s
 */
$crm = config('crm');
$tri = @file_get_contents(APP_ROOT . '/public/assets/img/tri-cluster.svg') ?: '';
$tri = preg_replace('/^<svg /', '<svg class="hero__tri" preserveAspectRatio="none" aria-hidden="true" focusable="false" ', $tri);
?>
<section class="hero" id="apply" aria-labelledby="hero-title">
  <div class="wrap hero__grid">

    <div class="hero__top">
      <h1 class="hero__label" id="hero-title"><?= e($s['label']) ?></h1>
      <p class="hero__title">
        <img class="hero__wordmark" src="<?= asset('img/genwe-wordmark.svg') ?>" alt="<?= e($s['h1']) ?>" width="521" height="70">
        <span class="hero__sub"><?= e($s['sub']) ?></span>
      </p>
    </div>

    <div class="hero__visual" aria-hidden="true">
      <span class="hero__shadow"></span><span class="hero__shadow hero__shadow--2"></span>
      <img class="hero__student" src="<?= asset('img/hero-student.webp') ?>" alt="" width="860" height="1207" fetchpriority="high">
      <?= $tri ?>
      <img class="hero__mark" src="<?= asset('img/tri-right.svg') ?>" alt="" width="56" height="62">
      <ul class="hero__tags">
        <?php foreach ($s['tags'] as $i => $tag): ?>
          <li class="tag tag--<?= $i + 1 ?>"><span><?= e($tag) ?></span><svg class="tag__arrow" viewBox="0 0 138 117" preserveAspectRatio="none" focusable="false"><path class="tag__ghost" d="M35 2.5V114.5L132 58.5Z"/><path d="M16 0V117L117.3 58.5Z"/></svg></li>
        <?php endforeach; ?>
      </ul>
    </div>

    <div class="hero__body">
      <ul class="hero__chips" aria-label="Programme facts">
        <?php foreach ($s['chips'] as $chip): ?><li><?= icon('tick') ?><?= e($chip) ?></li><?php endforeach; ?>
      </ul>
      <div class="hmm-card">
        <div class="hmm-card__logos">
          <img src="<?= asset('img/logo-harvard-business-impact.webp') ?>" alt="Harvard Business Impact" width="48" height="56">
          <span class="hmm-card__sep" aria-hidden="true"></span>
          <img src="<?= asset('img/logo-harvard-managementor.webp') ?>" alt="Harvard ManageMentor" width="146" height="59">
        </div>
        <p class="hmm-card__foot"><?= e($s['harvard']) ?></p>
      </div>
      <ul class="hero__trust">
        <?php foreach ($s['trust'] as $t): ?>
          <li><img src="<?= asset('img/' . $t['logo']) ?>" alt="<?= e($t['alt']) ?>" width="48" height="48"><span><?= e($t['text']) ?></span></li>
        <?php endforeach; ?>
      </ul>
    </div>

    <div class="hero__form" id="enquire">
      <div class="form-card">
        <div id="<?= e($crm['form_id']) ?>" class="form-card__crm"><script src="<?= e($crm['script_src']) ?>"></script></div>
        <p class="form-card__fallback">Loading the enquiry form…<small>Or call <a href="tel:<?= e(config('phone_primary')) ?>">1800 547 8003</a></small></p>
      </div>
    </div>

    <!-- under the logos on desktop and tablet, under the form on phones (placed by the grid) -->
    <div class="hero__cta">
      <a class="btn btn--green" href="<?= e(apply_href()) ?>"><?= e($s['cta']) ?></a>
      <a class="btn btn--purple" href="<?= e(brochure_href()) ?>"<?= config('brochure_url') ? ' download' : '' ?>><?= icon('download') ?><?= e($s['cta_alt']) ?></a>
    </div>
  </div>
</section>
