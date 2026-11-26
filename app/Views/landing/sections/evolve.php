<?php /** 10 Build to evolve: a four-step progression on purple. @var array $s */ ?>
<section class="sec sec--purple evolve" id="evolve" aria-labelledby="evolve-title">
  <div class="evolve__tri" aria-hidden="true"></div>
  <div class="wrap">
    <header class="sec-head rv">
      <p class="kicker kicker--lime"><?= e($s['kicker']) ?></p>
      <h2 class="h2 h2--xl" id="evolve-title"><?= e($s['title']) ?></h2>
      <p class="lead"><?= e($s['lead']) ?></p>
    </header>
    <ol class="evolve__steps rv">
      <?php foreach ($s['points'] as $i => $p): ?>
        <li class="evolve__step">
          <span class="evolve__k"><?= nn($i + 1) ?></span>
          <h3><?= e($p['title']) ?></h3>
          <p><?= e($p['text']) ?></p>
        </li>
      <?php endforeach; ?>
    </ol>
    <div class="evolve__close rv">
      <p><?= e($s['closing']) ?></p>
      <a class="btn btn--green" href="<?= e(apply_href()) ?>"><?= e($s['cta']) ?><?= icon('arrow') ?></a>
    </div>
  </div>
</section>
