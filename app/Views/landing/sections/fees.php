<?php /** 18 Fees and eligibility (shown above "Build to evolve"). @var array $s */ ?>
<section class="sec sec--lav" id="fees" aria-labelledby="fees-title">
  <div class="wrap">
    <header class="sec-head sec-head--split rv">
      <h2 class="h2" id="fees-title"><?= e($s['title']) ?></h2>
      <p class="lead lead--strong"><?= e($s['programme']) ?></p>
    </header>
    <div class="fees rv">
      <div class="elig">
        <h3><?= e($s['eligibility']['title']) ?></h3>
        <ul>
          <?php foreach ($s['eligibility']['points'] as $pt): ?><li><?= icon('tick') ?><span><?= e($pt) ?></span></li><?php endforeach; ?>
        </ul>
        <p class="elig__note"><?= e($s['eligibility']['note']) ?></p>
        <a class="btn btn--green" href="<?= e(apply_href()) ?>"><?= e($s['cta']) ?><?= icon('arrow') ?></a>
      </div>
      <div class="plans">
        <div class="plans__two">
          <?php foreach ($s['options'] as $i => $o): ?>
            <div class="plan<?= $i === 0 ? ' plan--one' : '' ?>">
              <span class="plan__k"><?= e($o['label']) ?></span>
              <?php if (isset($o['price'])): ?>
                <b class="plan__price"><?= e($o['price']) ?></b>
              <?php else: ?>
                <div class="plan__years"><?php foreach ($o['years'] as $y): ?><div><span><?= e($y[0]) ?></span><b><?= e($y[1]) ?></b></div><?php endforeach; ?></div>
              <?php endif; ?>
              <p><?= e($o['text']) ?></p>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="pcp">
          <h4><?= e($s['pcp']['title']) ?><small><?= e($s['pcp']['name']) ?></small></h4>
          <?php foreach ($s['pcp']['lines'] as $l): ?><p><b><?= e($l[0]) ?></b><?= e($l[1]) ?></p><?php endforeach; ?>
        </div>
        <div class="pay">
          <?php foreach ($s['methods'] as $m): ?>
            <div><span class="pay__ic"><?= icon($m['icon'], 'ic') ?></span><p><b><?= e($m['title']) ?></b><?= e($m['text']) ?></p></div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    <div class="seo-note"><?php foreach ($s['seo'] as $p): ?><p><?= e($p) ?></p><?php endforeach; ?></div>
  </div>
</section>
