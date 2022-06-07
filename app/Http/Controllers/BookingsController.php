<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingsController extends Controller
{
    public function bookingsEngagement()
    {
        return view('bookings-engagement');
    }
    public function bookingsEvents()
    {
        return view('bookings-events');
    }
    public function bookingsPortraits()
    {
        return view('bookings-portraits');
    }
    public function bookingsFamilies()
    {
        return view('bookings-families');
    }
}
