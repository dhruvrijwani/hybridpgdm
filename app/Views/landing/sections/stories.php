<?php /** 09 Impact stories: an editorial grid. Stories are placeholders until Welingkar supplies them. @var array $s */ ?>
<section class="sec" id="stories" aria-labelledby="stories-title">
  <div class="wrap">
    <header class="sec-head rv">
      <h2 class="h2" id="stories-title"><?= e($s['title']) ?></h2>
      <p class="lead lead--strong"><?= e($s['lead']) ?></p>
    </header>
    <div class="stories rv">
      <?php foreach ($s['items'] as $i => $st): ?>
        <article class="story<?= $i === 0 ? ' story--lead' : '' ?><?= !empty($st['placeholder']) ? ' ph' : '' ?>"<?= !empty($st['placeholder']) ? ' data-ph="Placeholder story"' : '' ?>>
          <img src="<?= asset('img/' . $st['img']) ?>" alt="" loading="lazy" width="900" height="600">
          <span class="story__title"><?= e($st['title']) ?></span>
          <?php if (!empty($st['video'])): ?>
            <a class="story__play" href="<?= e($st['video']) ?>" target="_blank" rel="noopener"><span><?= icon('play-s') ?></span><em>Watch story</em></a>
          <?php else: ?>
            <span class="story__play"><span><?= icon('play-s') ?></span><em>Watch story</em></span>
          <?php endif; ?>
          <div class="story__body">
            <blockquote>“<?= e($st['quote']) ?>”</blockquote>
            <p class="story__who"><b><?= e($st['name']) ?></b><?= e($st['role']) ?></p>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
    <?= $this->partial('partials/cta', ['label' => $s['cta']]) ?>
  </div>
</section>
