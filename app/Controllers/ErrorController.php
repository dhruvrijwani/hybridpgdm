<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;
use App\Models\LandingPage;

final class ErrorController extends Controller
{
    public function notFound(): string
    {
        $page = LandingPage::load('hybrid-pgdm');
        return $this->view('errors/404', ['page' => $page, 'c' => $page->all()]);
    }
}
