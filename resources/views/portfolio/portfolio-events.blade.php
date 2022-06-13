@extends('layouts.head')
<!-- Gallery -->
@section('events')
@auth
    @include('navbar-logged-in')
@endauth

@guest
    @include('navbar-logged-out')
@endguest
<div class="row">
    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
      <img
        src="{{asset('images/events/EventsOne.jpg')}}"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Boat on Calm Water"
      />
  
      <img
        src="{{asset('images/events/EventsThree.jpg')}}"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Wintry Mountain Landscape"
      />
    </div>
  
    <div class="col-lg-4 mb-4 mb-lg-0">
      <img
      src="{{asset('images/events/EventsTwo.jpg')}}"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Mountains in the Clouds"
      />
  
      <img
      src="{{asset('images/events/EventsFour.jpg')}}"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Boat on Calm Water"
      />
    </div>
  
    <div class="col-lg-4 mb-4 mb-lg-0">
      <img
      src="{{asset('images/events/EventsFive.jpg')}}"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Waves at Sea"
      />
  
      <img
      src="{{asset('images/events/EventsSix.jpg')}}"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Yosemite National Park"
      />
    </div>
  </div>
  @endsection
  <!-- Gallery -->