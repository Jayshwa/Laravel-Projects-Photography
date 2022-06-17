@extends('layouts.head')
@section('book-events')
<!--Carousel-->
<div id="carousel-example" class="carousel slide " data-ride="carousel">

  <div class="carousel-inner">
    <!--Item-->
    <div class="item active">
      <a href="#"><img src="{{asset('/images/events/EventsThree.jpg')}}" /></a>
      <div class="carousel-caption">
      <div class="container my-5" style="font-family: 'Quicksand', sans-serif;">
        <h1 class="text-center display-2 text-black noselect">JOSHUA YOUNG</h1>
        <h2 class="text-center display-3 text-black noselect">PHOTOGRAPHY</h2>
      </div>
      </div>
    </div>
    <!--Item-->
    <div class="item">
      <a href="#"><img src="{{asset('/images/events/EventsOne.jpg')}}" /></a>
      <div class="carousel-caption">
      <div class="container my-5" style="font-family: 'Quicksand', sans-serif;">
        <h1 class="text-center display-2 text-black noselect">JOSHUA YOUNG</h1>
        <h2 class="text-center display-3 text-black noselect">PHOTOGRAPHY</h2>
      </div>
      </div>
    </div>
    <!--Item-->
    <div class="item">
      <a href="#"><img src="{{asset('/images/events/EventsSix.jpg')}}" /></a>
      <div class="carousel-caption">
      <div class="container my-5" style="font-family: 'Quicksand', sans-serif;">
        <h1 class="text-center display-2 text-black noselect">JOSHUA YOUNG</h1>
        <h2 class="text-center display-3 text-black noselect">PHOTOGRAPHY</h2>
      </div>
      </div>
    </div>
    <!--Item-->
    <div class="item">
      <a href="#"><img src="{{asset('/images/events/EventsOne.jpg')}}" /></a>
      <div class="carousel-caption">
      <div class="container my-5" style="font-family: 'Quicksand', sans-serif;">
        <h1 class="text-center display-2 text-black noselect">JOSHUA YOUNG</h1>
        <h2 class="text-center display-3 text-black noselect">PHOTOGRAPHY</h2>
      </div>
      </div>
    </div>
  </div>

  <a class="left carousel-control" href="#carousel-example" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
<!--End of Carousel-->
<div class="strip my-5">
    <div class="container w-50 my-5 py-3" style="font-family: 'Quicksand', sans-serif;">
        <h5 class="py-3">Events</h5>
        <p class="">
        Looking to capture the energy and vibe of your event? I love helping to tell a story of those powerful and meaningful events. Whatever you need those shots for, whether it's for social media, a portfolio, publicity or something else I would love to you communicate who you are and what you are about with the rest of the world!
        </p>

        <h5 class="py-3">Prices</h5>
        <p class="">
        All shoots start at £75 for a one to two hour shoot with a minimum of 50-75 high resolution, individually edited images for you to print or share online.
        Please do get in touch to ask about further details.
        </p>
    </div>
</div>
@include('contact')
@endsection
