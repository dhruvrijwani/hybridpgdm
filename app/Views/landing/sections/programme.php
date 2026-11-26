<?php
/**
 * 03 Programme: the photograph stands on its own; the eight features are equal tiles
 * that alternate white and purple (client feedback, November 2026).
 * @var array $s
 */
?>
<section class="sec" id="programme" aria-labelledby="programme-title">
  <div class="wrap">
    <header class="sec-head sec-head--split rv">
      <h2 class="h2" id="programme-title"><?= e($s['title']) ?></h2>
      <p class="lead"><?= e($s['intro']) ?></p>
    </header>
    <div class="feat rv">
      <figure class="feat__photo">
        <img src="<?= asset('img/' . $s['image']['src']) ?>" alt="<?= e($s['image']['alt']) ?>" width="1280" height="720" loading="lazy">
      </figure>
      <?php foreach ($s['features'] as $i => $f): ?>
        <article class="feat__tile <?= $i % 2 ? 'feat__tile--purple' : 'feat__tile--white' ?>">
          <span class="feat__n"><?= nn($i + 1) ?></span>
          <span class="feat__ic"><?= icon($f['icon'], 'ic') ?></span>
          <h3><?= e($f['title']) ?></h3>
          <p><?= e($f['text']) ?></p>
        </article>
      <?php endforeach; ?>
    </div>
    <?= $this->partial('partials/cta', ['label' => $s['cta']]) ?>
  </div>
</section>
