<?php

namespace App\Http\Controllers;

use App\Models\Shot;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    public function index()
    {

        // dd(Shot::all());
        return view('feed')->with([
            'shots' => Shot::all()
        ]);
    }
}
