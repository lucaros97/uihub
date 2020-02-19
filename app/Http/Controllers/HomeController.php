<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard()
    {
        return Inertia::render('Home/Index');
    }
}
