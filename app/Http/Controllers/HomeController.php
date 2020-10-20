<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function __construct()
    {
        $icon = 'pe-7s-graph icon-gradient bg-ripe-malin';
        // Sharing is caring
        View::share('icon', $icon);
    }

    public function index($date = null)
    {
        $title = 'Homepage';

        return view('home', compact('title'));
    }
}
