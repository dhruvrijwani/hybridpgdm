<?php
/** Section-ending call to action. Hidden on phones, where the bottom bar always offers Apply. */
$label = $label ?? 'Apply Now';
$class = $class ?? '';
?>
<div class="cta-row <?= e($class) ?>">
  <a class="btn btn--green" href="<?= e(apply_href()) ?>"><?= e($label) ?><?= icon('arrow') ?></a>
</div>
