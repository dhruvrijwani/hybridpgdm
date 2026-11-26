<?php /** @var array $c */ $ct = $c['contact']; ?>
<footer class="ftr">
  <div class="wrap ftr__in">
    <div class="ftr__brand">
      <img src="<?= asset('img/logo-weschool-white.svg') ?>" alt="S.P. Mandali’s WeSchool, Welingkar Education" width="168" height="43" loading="lazy">
      <p>Welingkar Institute of Management Development &amp; Research<br>360° Hybrid PGDM</p>
    </div>
    <div class="ftr__contact">
      <b><?= e($ct['title']) ?></b>
      <?php foreach ($ct['phones'] as $ph): ?>
        <a href="tel:<?= e($ph) ?>"><?= icon('phone') ?><?= e($ph) ?></a>
      <?php endforeach; ?>
      <a href="mailto:<?= e($ct['email']) ?>"><?= icon('mail') ?><?= e($ct['email']) ?></a>
    </div>
    <p class="ftr__legal">© <?= date('Y') ?> Welingkar Institute of Management Development &amp; Research. All rights reserved. AICTE approved.</p>
  </div>
</footer>
