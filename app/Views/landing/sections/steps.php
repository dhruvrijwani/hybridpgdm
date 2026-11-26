<?php /** 16 Admission: four steps. @var array $s */ ?>
<section class="sec" id="admission" aria-labelledby="steps-title">
  <div class="wrap">
    <header class="sec-head rv"><h2 class="h2" id="steps-title"><?= e($s['title']) ?></h2></header>
    <ol class="steps rv">
      <?php foreach ($s['items'] as $i => $st): ?>
        <li class="step">
          <div class="step__top"><span class="step__n"><?= nn($i + 1) ?></span><span class="step__ic"><?= icon($st['icon'], 'ic') ?></span></div>
          <h3><?= e($st['title']) ?></h3>
          <p><?= e($st['text']) ?></p>
        </li>
      <?php endforeach; ?>
    </ol>
    <div class="foot-row rv">
      <p class="journey"><?php foreach ($s['journey'] as $i => $j): ?><?= $i ? '<i aria-hidden="true">' . icon('tri') . '</i>' : '' ?><span><?= e($j) ?></span><?php endforeach; ?></p>
      <a class="btn btn--green" href="<?= e(apply_href()) ?>"><?= e($s['cta']) ?><?= icon('arrow') ?></a>
    </div>
  </div>
</section>
