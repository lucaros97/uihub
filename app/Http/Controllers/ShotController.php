<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShotController extends Controller
{
    public function upload()
    {
        return view('shots/upload');       
    }
}
