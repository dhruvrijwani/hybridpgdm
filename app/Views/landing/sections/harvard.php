<?php /** 04 Harvard ManageMentor. @var array $s */ ?>
<section class="sec sec--lav" id="harvard" aria-labelledby="harvard-title">
  <div class="wrap hbp">
    <div class="hbp__intro rv">
      <div class="hbp__logos">
        <img src="<?= asset('img/logo-harvard-business-impact.webp') ?>" alt="Harvard Business Impact" width="56" height="65" loading="lazy">
        <span aria-hidden="true"></span>
        <img src="<?= asset('img/logo-harvard-managementor.webp') ?>" alt="Harvard ManageMentor" width="180" height="73" loading="lazy">
      </div>
      <p class="kicker"><?= e($s['kicker']) ?></p>
      <h2 class="h2" id="harvard-title"><?= e($s['title']) ?></h2>
      <p class="lead"><?= rich($s['intro']) ?></p>
      <div class="hbp__42" aria-hidden="true">
        <b>42</b>
        <div class="hbp__grid"><?= str_repeat('<i></i>', 42) ?></div>
        <span>Harvard ManageMentor® certification courses</span>
      </div>
    </div>
    <ul class="hbp__points rv">
      <?php foreach ($s['points'] as $p): ?>
        <li>
          <span class="hbp__ic"><?= icon($p['icon'], 'ic') ?></span>
          <div><h3><?= e($p['title']) ?></h3><p><?= e($p['text']) ?></p></div>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
