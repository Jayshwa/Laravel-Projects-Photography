@extends('layouts.head')
@section('book-families')
<!--Carousel-->
<div id="carousel-example" class="carousel slide " data-ride="carousel">

  <div class="carousel-inner">
    <div class="item active">
      <a href="#"><img src="{{asset('/images/Leonie.jpg')}}" /></a>
      <div class="carousel-caption">
      <div class="container my-5" style="font-family: 'Quicksand', sans-serif;">
        <h1 class="text-center display-2 text-black noselect">JOSHUA YOUNG</h1>
        <h2 class="text-center display-3 text-black noselect">PHOTOGRAPHY</h2>
      </div>
      </div>
    </div>
    <div class="item">
      <a href="#"><img src="{{asset('/images/home-top.jpg')}}" /></a>
      <div class="carousel-caption">
      <div class="container my-5" style="font-family: 'Quicksand', sans-serif;">
        <h1 class="text-center display-2 text-black noselect">JOSHUA YOUNG</h1>
        <h2 class="text-center display-3 text-black noselect">PHOTOGRAPHY</h2>
      </div>
      </div>
    </div>
    <div class="item">
      <a href="#"><img src="{{asset('/images/home-bottom.jpg')}}" /></a>
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
        <h5 class="py-3">Families</h5>
        <p class="">
        Capture those special candid moments with your family by booking a family photo shoot in your own home or at a location to suit you.
        
        Pictures taken at home or on location say so much about you and your family, telling a story of who you are for years to come.
        </p>

        <h5 class="py-3">Prices</h5>
        <p class="">
        All shoots start at £75 for a one to two hour shoot with a minimum of 50-75 high resolution, individually edited images for you to print or share online.
        </p>
    </div>
</div>
@include('contact')
@endsection