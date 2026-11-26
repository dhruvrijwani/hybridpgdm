<?php /** GenWe Playbook, from the client's Figma: illustrated pillar cards in a carousel. @var array $s */ ?>
<section class="sec playbook" id="playbook" aria-labelledby="playbook-title" data-carousel>
  <div class="wrap">
    <header class="playbook__head rv">
      <div>
        <h2 class="h2 h2--xl" id="playbook-title"><?= e($s['title']) ?></h2>
        <p class="lead"><?= e($s['lead']) ?></p>
      </div>
      <div class="car-nav car-nav--purple">
        <button class="car-btn" type="button" data-dir="-1" aria-label="Previous pillar"><?= icon('arrow-left') ?></button>
        <button class="car-btn" type="button" data-dir="1" aria-label="Next pillar"><?= icon('arrow') ?></button>
      </div>
    </header>
  </div>
  <div class="playbook__rail">
    <div class="playbook__track car-track" tabindex="0" aria-label="GenWe Playbook pillars">
      <?php foreach ($s['pillars'] as $p): ?>
        <article class="pb-card" tabindex="0">
          <img class="pb-card__grid" src="<?= asset('img/tri-grid.svg') ?>" alt="" width="336" height="389" loading="lazy">
          <img class="pb-card__char" src="<?= asset('img/' . $p['char']) ?>" alt="" width="140" height="200" loading="lazy">
          <div class="pb-card__body">
            <h3><?= e($p['name']) ?></h3>
            <ul class="pb-card__tags"><?php foreach ($p['tags'] as $t): ?><li><?= e($t) ?></li><?php endforeach; ?></ul>
            <p class="pb-card__text"><?= e($p['text']) ?></p>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="wrap"><?= $this->partial('partials/cta', ['label' => $s['cta']]) ?></div>
</section>
