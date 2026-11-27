<?php /** 05 Recognition: the rank is the headline, seals sit around it. @var array $s */ ?>
<section class="sec" id="recognition" aria-labelledby="acc-title">
  <div class="wrap">
    <header class="sec-head rv"><h2 class="h2" id="acc-title"><?= e($s['title']) ?></h2></header>
    <div class="acc rv">
      <div class="acc__ranks">
        <?php foreach ($s['ranks'] as $i => $r): ?>
          <div class="acc__rank acc__rank--<?= $i + 1 ?>">
            <span class="acc__hash">#</span><b class="acc__num"><?= e($r['value']) ?></b>
            <span class="acc__label"><?= e($r['label']) ?></span>
          </div>
        <?php endforeach; ?>
        <p class="acc__source">By
          <?php foreach ($s['rank_source'] as $i => $src): ?><?= $i ? '<span>and</span>' : '' ?><img class="acc__src-logo acc__src-logo--<?= $i + 1 ?>" src="<?= asset('img/' . $src['logo']) ?>" alt="<?= e($src['name']) ?>" loading="lazy"><?php endforeach; ?>
        </p>
      </div>
      <ul class="acc__seals">
        <?php foreach ($s['seals'] as $seal): ?>
          <li class="acc__seal" tabindex="0">
            <span class="acc__logo"><img src="<?= asset('img/' . $seal['logo']) ?>" alt="" width="64" height="64" loading="lazy"></span>
            <span class="acc__name"><?= e($seal['name']) ?></span>
            <b class="acc__status"><?= e($seal['status']) ?></b>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
    <?= $this->partial('partials/cta', ['label' => $s['cta']]) ?>
  </div>
</section>
