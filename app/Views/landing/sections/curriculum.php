<?php
/** 17 What you'll learn: a question index; each answer opens in place. @var array $s */
$specs = $page->section('specialisations')['items'] ?? [];
?>
<section class="sec sec--lav" id="curriculum" aria-labelledby="curr-title">
  <div class="wrap curr">
    <header class="curr__head rv">
      <h2 class="h2 h2--xl" id="curr-title"><?= e($s['title']) ?></h2>
      <p class="lead"><?= e($s['lead']) ?></p>
      <a class="btn btn--green" href="<?= e(apply_href()) ?>"><?= e($s['cta']) ?><?= icon('arrow') ?></a>
    </header>
    <div class="qi rv" data-accordion>
      <?php foreach ($s['questions'] as $i => $q): $open = $i === 0; $id = 'qi-' . ($i + 1); ?>
        <div class="qi__item<?= $open ? ' is-open' : '' ?>">
          <h3 class="qi__h">
            <button class="qi__q" type="button" aria-expanded="<?= $open ? 'true' : 'false' ?>" aria-controls="<?= $id ?>">
              <span class="qi__n"><?= nn($i + 1) ?></span><span class="qi__t"><?= e($q['q']) ?></span><span class="pm" aria-hidden="true"></span>
            </button>
          </h3>
          <div class="qi__a" id="<?= $id ?>" role="region"><div><div class="qi__body">
            <?php if (($q['type'] ?? '') === 'semesters'): ?>
              <ol class="sems">
                <?php foreach ($s['semesters'] as $k => $sem): ?>
                  <li class="sem"><span><?= e($sem[0]) ?></span><b><?= e($sem[1]) ?></b><p><?= e($sem[2]) ?></p></li>
                <?php endforeach; ?>
              </ol>
              <p><?= rich($q['a']) ?></p>
            <?php elseif (($q['type'] ?? '') === 'specialisations'): ?>
              <p><?= rich($q['a']) ?></p>
              <p class="field18"><?php foreach ($specs as $k => $sp): ?><span><?= e($sp[0]) ?></span><?php endforeach; ?></p>
              <a class="textlink" href="#specialisations"><?= e($q['link']) ?><?= icon('arrow') ?></a>
            <?php else: ?>
              <p><?= rich($q['a']) ?></p>
            <?php endif; ?>
          </div></div></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
