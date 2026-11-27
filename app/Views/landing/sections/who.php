<?php /** 06 Who should apply: "You are GenWe". @var array $s */ ?>
<section class="sec sec--lime" id="who" aria-labelledby="who-title">
  <div class="wrap">
    <header class="sec-head rv">
      <p class="kicker"><?= e($s['kicker']) ?></p>
      <h2 class="h2" id="who-title"><?= e($s['title']) ?></h2>
    </header>
    <ul class="who rv" tabindex="0" aria-label="Who the programme is for">
      <?php foreach ($s['personas'] as $i => $p): ?>
        <li class="who__card who__card--<?= e($p['tone']) ?>">
          <div class="who__pic">
            <img src="<?= asset('img/' . $p['img']) ?>" alt="" width="520" height="640" loading="lazy">
          </div>
          <div class="who__text">
            <span class="who__n"><?= nn($i + 1) ?></span>
            <h3><?= e($p['title']) ?></h3>
            <p><?= e($p['text']) ?></p>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
    <p class="swipe-hint"><?= icon('swipe') ?>Swipe to see all five</p>
    <?= $this->partial('partials/cta', ['label' => 'Apply Now']) ?>
  </div>
</section>
