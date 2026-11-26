<?php /** 13 Specialisations: an 18-tile grid; on phones each tile opens to show its line. @var array $s */ ?>
<section class="sec" id="specialisations" aria-labelledby="spec-title">
  <div class="wrap">
    <header class="sec-head sec-head--split rv">
      <div>
        <p class="kicker"><?= e($s['kicker']) ?> <span class="pill"><?= e($s['badge']) ?></span></p>
        <h2 class="h2" id="spec-title"><?= e($s['title']) ?></h2>
      </div>
      <p class="lead"><?= e($s['lead']) ?></p>
    </header>
    <ol class="specs rv">
      <?php foreach ($s['items'] as $i => $it): ?>
        <li class="spec">
          <button class="spec__btn" type="button" aria-expanded="false">
            <span class="spec__n"><?= nn($i + 1) ?></span><span class="spec__t"><?= e($it[0]) ?></span><span class="spec__pm" aria-hidden="true"></span>
          </button>
          <p class="spec__d"><?= e($it[1]) ?></p>
        </li>
      <?php endforeach; ?>
    </ol>
    <div class="foot-row rv">
      <p><?= e($s['detail']) ?></p>
      <a class="btn btn--green" href="<?= e(apply_href()) ?>"><?= e($s['cta']) ?><?= icon('arrow') ?></a>
    </div>
  </div>
</section>
