<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingsController extends Controller
{
    public function bookingsEngagement()
    {
        return view('bookings.bookings-engagement');
    }
    public function bookingsEvents()
    {
        return view('bookings.bookings-events');
    }
    public function bookingsPortraits()
    {
        return view('bookings.bookings-portraits');
    }
    public function bookingsFamilies()
    {
        return view('bookings.bookings-families');
    }
}
