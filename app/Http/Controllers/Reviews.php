<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Reviews extends Controller
{
    public function index()
    {
        return view('reviews');
    }
}
