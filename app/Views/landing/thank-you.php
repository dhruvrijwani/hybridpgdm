<?php
/** Thank-you page after an enquiry. Point the CRM form's "redirect after submit" here to count ad conversions. */
$this->layout('layouts/main');
$t = $c['thank_you'];
?>
<section class="thanks">
  <div class="wrap thanks__in">
    <img src="<?= asset('img/char-wesupport.svg') ?>" alt="" width="143" height="200">
    <h1 class="h2"><?= e($t['title']) ?></h1>
    <p class="lead"><?= e($t['text']) ?></p>
    <div class="hero__cta">
      <a class="btn btn--purple" href="<?= e(brochure_href() === '#enquire' ? url('/') : brochure_href()) ?>"><?= icon('download') ?>Download Brochure</a>
      <a class="btn btn--outline" href="<?= e(url('/')) ?>">Back to the programme</a>
    </div>
  </div>
</section>
