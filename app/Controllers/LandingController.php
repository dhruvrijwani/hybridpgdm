<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;
use App\Models\LandingPage;

/** Serves the Hybrid PGDM landing page and its thank-you page. */
final class LandingController extends Controller
{
    public function index(): string
    {
        $page = LandingPage::load('hybrid-pgdm');

        return $this->view('landing/index', [
            'page'   => $page,
            'c'      => $page->all(),
            'isHome' => true,
        ]);
    }

    /** Where the CRM can send people after a successful enquiry (good for ad conversion tracking). */
    public function thankYou(): string
    {
        $page = LandingPage::load('hybrid-pgdm');

        return $this->view('landing/thank-you', [
            'page'  => $page,
            'c'     => $page->all(),
            'title' => 'Thank you | Welingkar 360° Hybrid PGDM',
        ]);
    }
}
