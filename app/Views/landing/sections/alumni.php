<?php /** 15 Alumfluencers: quotes and figures from the current live page. @var array $s */ ?>
<section class="sec sec--lav" id="alumni" aria-labelledby="alumni-title">
  <div class="wrap">
    <header class="sec-head rv">
      <h2 class="h2" id="alumni-title"><?= e($s['title']) ?></h2>
      <p class="lead"><?= e($s['lead']) ?></p>
    </header>
    <ul class="alum rv" tabindex="0" aria-label="Alumni quotes">
      <?php foreach ($s['quotes'] as $q): ?>
        <li class="alum__card">
          <?= icon('quote', 'alum__q') ?>
          <blockquote><?= e($q['quote']) ?></blockquote>
          <div class="alum__who">
            <img src="<?= asset('img/' . $q['img']) ?>" alt="" width="48" height="48" loading="lazy">
            <p><b><?= e($q['name']) ?></b><span><?= e($q['role']) ?></span></p>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
    <p class="swipe-hint"><?= icon('swipe') ?>Swipe for more</p>
    <div class="growth rv">
      <h3><?= e($s['growth_title']) ?></h3>
      <ul>
        <?php foreach ($s['growth'] as $g): ?><li><b><?= e($g['value']) ?></b><span>Students</span><p><?= e($g['text']) ?></p></li><?php endforeach; ?>
      </ul>
    </div>
    <?= $this->partial('partials/cta', ['label' => $s['cta']]) ?>
  </div>
</section>
