<?php

namespace App\Http\Controllers;

use App\Http\Middleware\SetSessionLifetime;

class DashboardController extends Controller
{


    public function index()
    {
        return view('backend.dashboard.index');
    }
}
