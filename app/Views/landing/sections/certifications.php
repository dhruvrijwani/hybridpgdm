<?php /** 12 Two certifications: Year 1 to Year 2. @var array $s */ ?>
<section class="sec sec--lav" id="certifications" aria-labelledby="cert-title">
  <div class="wrap">
    <header class="sec-head rv">
      <h2 class="h2" id="cert-title"><?= e($s['title']) ?></h2>
      <p class="lead"><?= e($s['lead']) ?></p>
    </header>
    <div class="certs rv">
      <?php foreach ($s['years'] as $i => $y): ?>
        <?php if ($i === 1): ?><span class="certs__link" aria-hidden="true"><?= icon('arrow') ?></span><?php endif; ?>
        <article class="cert<?= $i === 1 ? ' cert--y2' : '' ?>">
          <div class="cert__y"><small>Year</small><?= e($y['year']) ?></div>
          <h3><?= e($y['title']) ?></h3>
          <p><?= e($y['text']) ?></p>
          <span class="cert__fmt"><?= e($y['format']) ?></span>
        </article>
      <?php endforeach; ?>
    </div>
    <div class="foot-row rv">
      <div><b><?= e($s['milestone']) ?></b><p><?= e($s['condition']) ?></p></div>
      <a class="btn btn--green" href="<?= e(apply_href()) ?>"><?= e($s['cta']) ?><?= icon('arrow') ?></a>
    </div>
  </div>
</section>
