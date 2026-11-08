<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home', [
            'title' => config('portfolio.site.title'),
            'description' => config('portfolio.site.description'),
        ]);
    }
}