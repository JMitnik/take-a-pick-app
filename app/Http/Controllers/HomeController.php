<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Inertia\Inertia;
use Inertia\Response;

class HomeController extends Controller
{
    public function __invoke(): Response
    {
        return Inertia::render('Dashboard/DashboardPage', [
          'title' => 'Dashboard',
        ]);
    }
}
