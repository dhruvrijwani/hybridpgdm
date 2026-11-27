<?php
/** 01 Hero, from the client's Figma ("Landing page final"), without the black outlines. @var array $s */
$crm = config('crm');
$tri = @file_get_contents(APP_ROOT . '/public/assets/img/tri-cluster.svg') ?: '';
$tri = preg_replace('/^<svg /', '<svg class="hero__tri" aria-hidden="true" focusable="false" ', $tri);
?>
<section class="hero" id="apply" aria-labelledby="hero-title">
  <div class="wrap hero__grid">

    <div class="hero__top">
      <h1 class="hero__label" id="hero-title"><?= e($s['label']) ?></h1>
      <p class="hero__title">
        <img class="hero__wordmark" src="<?= asset('img/genwe-wordmark.svg') ?>" alt="<?= e($s['h1']) ?>" width="493" height="65">
        <span class="hero__sub"><?= e($s['sub']) ?></span>
      </p>
    </div>

    <div class="hero__visual" aria-hidden="true">
      <?= $tri ?>
      <span class="hero__shadow"></span>
      <img class="hero__student" src="<?= asset('img/hero-student.webp') ?>" alt="" width="860" height="1207" fetchpriority="high">
      <svg class="hero__mark" viewBox="0 0 54 60"><use href="#i-tri" x="27" y="0" width="27" height="30"/><use href="#i-tri" x="27" y="30" width="27" height="30"/><use href="#i-tri" x="0" y="15" width="28" height="31"/></svg>
      <ul class="hero__tags">
        <?php foreach ($s['tags'] as $i => $tag): ?>
          <li class="tag tag--<?= $i + 1 ?>"><span><?= e($tag) ?></span></li>
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
          <li><img src="<?= asset('img/' . $t['logo']) ?>" alt="<?= e($t['alt']) ?>" width="34" height="34"><span><?= e($t['text']) ?></span></li>
        <?php endforeach; ?>
      </ul>
      <div class="hero__cta">
        <a class="btn btn--green" href="<?= e(apply_href()) ?>"><?= e($s['cta']) ?></a>
        <a class="btn btn--purple" href="<?= e(brochure_href()) ?>"<?= config('brochure_url') ? ' download' : '' ?>><?= icon('download') ?><?= e($s['cta_alt']) ?></a>
      </div>
    </div>

    <div class="hero__form" id="enquire">
      <div class="form-card">
        <div id="<?= e($crm['form_id']) ?>" class="form-card__crm"><script src="<?= e($crm['script_src']) ?>"></script></div>
        <p class="form-card__fallback">Loading the enquiry form…<small>Or call <a href="tel:<?= e(config('phone_primary')) ?>">1800 547 8003</a></small></p>
      </div>
    </div>

    <p class="hero__seo"><?= e($s['seo_note']) ?></p>
  </div>
</section>
