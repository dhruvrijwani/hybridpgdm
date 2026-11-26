<?php /** 14 Legacy: one wide visual that moves from heritage to today. @var array $s */ ?>
<section class="sec" id="legacy" aria-labelledby="legacy-title">
  <div class="wrap">
    <div class="legacy rv">
      <img class="legacy__past" src="<?= asset('img/' . $s['past']['src']) ?>" alt="<?= e($s['past']['alt']) ?>" loading="lazy" width="1600" height="900">
      <img class="legacy__now" src="<?= asset('img/' . $s['now']['src']) ?>" alt="<?= e($s['now']['alt']) ?>" loading="lazy" width="1600" height="900">
      <div class="legacy__era" aria-hidden="true"><span>Heritage</span><i></i><span>Today</span></div>
      <div class="legacy__copy">
        <p class="kicker kicker--lime"><?= e($s['kicker']) ?></p>
        <h2 id="legacy-title"><?= e($s['title']) ?></h2>
        <p class="legacy__overlay"><?= e($s['overlay']) ?></p>
        <p class="legacy__text"><?= e($s['text']) ?></p>
      </div>
    </div>
    <ul class="legacy__proof rv">
      <?php foreach ($s['proof'] as $p): ?><li><b><?= e($p['value']) ?></b><span><?= e($p['text']) ?></span></li><?php endforeach; ?>
    </ul>
    <div class="foot-row rv">
      <b><?= e($s['closing']) ?></b>
      <a class="btn btn--green" href="<?= e(apply_href()) ?>"><?= e($s['cta']) ?><?= icon('arrow') ?></a>
    </div>
  </div>
</section>
