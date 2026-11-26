<?php /** 19 FAQ. Questions and answers are also published as FAQPage structured data. @var array $s */ $ct = $c['contact']; ?>
<section class="sec" id="faq" aria-labelledby="faq-title">
  <div class="wrap faq">
    <div class="faq__side rv">
      <h2 class="h2" id="faq-title"><?= e($s['title']) ?></h2>
      <p class="lead"><?= e($s['lead']) ?></p>
      <div class="faq__help">
        <b><?= e($ct['title']) ?></b>
        <?php foreach ($ct['phones'] as $ph): ?><a href="tel:<?= e($ph) ?>"><?= icon('phone') ?><?= e($ph) ?></a><?php endforeach; ?>
        <a href="mailto:<?= e($ct['email']) ?>"><?= icon('mail') ?><?= e($ct['email']) ?></a>
      </div>
      <a class="btn btn--green faq__cta" href="<?= e(apply_href()) ?>">Apply Now<?= icon('arrow') ?></a>
    </div>
    <div class="faq__list rv" data-accordion>
      <?php foreach ($s['items'] as $i => $f): $open = $i === 0; $id = 'faq-' . ($i + 1); ?>
        <div class="ac<?= $open ? ' is-open' : '' ?>">
          <h3 class="ac__h">
            <button class="ac__q" type="button" aria-expanded="<?= $open ? 'true' : 'false' ?>" aria-controls="<?= $id ?>">
              <span><small><?= e($f['cat']) ?></small><?= e($f['q']) ?></span><span class="pm" aria-hidden="true"></span>
            </button>
          </h3>
          <div class="ac__a" id="<?= $id ?>" role="region"><div><?php foreach ((array) $f['a'] as $p): ?><p><?= rich($p) ?></p><?php endforeach; ?></div></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
