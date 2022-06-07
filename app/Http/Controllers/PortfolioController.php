<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function portfolioEngagement()
    {
        return view('portfolio-engagement');
    }
    public function portfolioEvents()
    {
        return view('portfolio-events');
    }
    public function portfolioPortraits()
    {
        return view('portfolio-portraits');
    }
    public function portfolioFamilies()
    {
        return view('portfolio-families');
    }
}
