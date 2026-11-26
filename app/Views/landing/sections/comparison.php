<?php /** 07 MBA vs PGDM: bands where the PGDM side gains weight going down. @var array $s */ ?>
<section class="sec" id="mba-vs-pgdm" aria-labelledby="vs-title">
  <div class="wrap">
    <header class="sec-head rv">
      <h2 class="h2" id="vs-title"><?= e($s['title']) ?></h2>
      <p class="lead"><?= e($s['lead']) ?></p>
    </header>
    <div class="vs rv" role="table" aria-label="MBA compared with PGDM">
      <div class="vs__head" role="row"><span role="columnheader"><span class="sr-only">Area</span></span><span role="columnheader">MBA</span><span role="columnheader">PGDM</span></div>
      <?php foreach ($s['rows'] as $i => $r): ?>
        <div class="vs__row vs__row--<?= $i + 1 ?>" role="row">
          <h3 class="vs__label" role="rowheader"><span><?= e($r['label']) ?></span><?= icon('arrow', 'i vs__arrow') ?></h3>
          <p class="vs__cell vs__cell--mba" role="cell"><b>MBA</b><?= e($r['mba']) ?></p>
          <p class="vs__cell vs__cell--pgdm" role="cell"><b>PGDM</b><?= e($r['pgdm']) ?></p>
        </div>
      <?php endforeach; ?>
      <div class="vs__final">
        <span><?= e($s['approach_label']) ?></span>
        <p><?= e($s['approach']) ?></p>
      </div>
    </div>
    <div class="vs__after rv">
      <p><?= rich($s['context']) ?></p>
      <p class="vs__close"><?= e($s['closing']) ?></p>
    </div>
    <?= $this->partial('partials/cta', ['label' => $s['cta']]) ?>
  </div>
</section>
