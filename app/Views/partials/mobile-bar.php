<div class="mbar" aria-label="Quick actions">
  <a class="mbar__call" href="tel:<?= e(config('phone_primary')) ?>" aria-label="Call admissions"><?= icon('phone') ?></a>
  <a class="btn btn--outline" href="<?= e(brochure_href()) ?>"<?= config('brochure_url') ? ' download' : '' ?>>Brochure</a>
  <a class="btn btn--green" href="<?= e(apply_href()) ?>">Apply Now</a>
</div>
