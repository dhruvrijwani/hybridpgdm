<?php /** 02 Proof points (Figma). @var array $s */ ?>
<section class="proof" aria-label="Welingkar in numbers">
  <div class="wrap">
    <ul class="proof__band">
      <?php foreach ($s as $p): ?>
        <li class="proof__item">
          <b class="proof__n"><span data-count="<?= e($p['value']) ?>"><?= e($p['value']) ?></span><?= e($p['suffix']) ?></b>
          <span class="proof__l"><?= e($p['label']) ?></span>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
