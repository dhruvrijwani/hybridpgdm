<?php /** 08 Why choose (cards that stack while scrolling) + programme highlights grid. @var array $s */ ?>
<section class="sec sec--lav" id="why" aria-labelledby="why-title">
  <div class="wrap">
    <header class="sec-head sec-head--split rv">
      <h2 class="h2" id="why-title"><?= e($s['title']) ?></h2>
      <p class="lead"><?= e($s['lead']) ?></p>
    </header>
    <div class="stack">
      <?php foreach ($s['cards'] as $i => $card): ?>
        <article class="stack__card<?= $i === count($s['cards']) - 1 ? ' stack__card--last' : '' ?>" style="--i:<?= $i ?>">
          <span class="stack__n"><?= nn($i + 1) ?></span>
          <div class="stack__body"><h3><?= e($card['title']) ?></h3><p><?= e($card['text']) ?></p></div>
          <span class="stack__ic"><?= icon($card['icon'], 'ic') ?></span>
        </article>
      <?php endforeach; ?>
    </div>

    <div class="hl rv">
      <div class="hl__head">
        <h3><?= e($s['highlights_title']) ?></h3>
        <a class="btn btn--green hl__cta" href="<?= e(apply_href()) ?>"><?= e($s['cta']) ?><?= icon('arrow') ?></a>
      </div>
      <ul class="hl__grid">
        <?php foreach ($s['highlights'] as $i => $h): ?>
          <li class="hl__item">
            <div class="hl__top"><span class="hl__ic"><?= icon($h['icon'], 'ic') ?></span><span class="hl__n"><?= nn($i + 1) ?></span></div>
            <h4><?= e($h['title']) ?></h4>
            <p><?= e($h['text']) ?></p>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>
