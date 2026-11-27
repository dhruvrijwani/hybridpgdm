<?php
/**
 * SEO copy at the very end of the page, above the footer (client feedback, November 2026).
 * The paragraphs and the client's keyword list live in the content file under 'seo'.
 * @var array $s
 */
$paras = $s['paras'] ?? [];
$keywords = array_filter($s['keywords'] ?? []);
if (!$paras && !$keywords) return;
?>
<section class="seo-foot" aria-label="Comparing management programmes">
  <div class="wrap">
    <?php foreach ($paras as $p): ?><p><?= e($p) ?></p><?php endforeach; ?>
    <?php if ($keywords): ?>
      <ul class="seo-foot__kw"><?php foreach ($keywords as $k): ?><li><?= e($k) ?></li><?php endforeach; ?></ul>
    <?php endif; ?>
  </div>
</section>
