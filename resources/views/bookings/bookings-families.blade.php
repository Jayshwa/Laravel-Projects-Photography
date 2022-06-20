@extends('layouts.head')
@section('book-families')
<div class="container title-strip-carousel" style="font-family: 'Quicksand', sans-serif;">
	<h1 class="text-center display-2 text-white noselect text-responsive-carousel">JOSHUA YOUNG</h1>
	<h1 class="text-center display-3 text-white noselect text-responsive-carousel">PHOTOGRAPHY</h1>
</div>
<!--Carousel-->
<div id="carousel-example" class="carousel slide col-lg-12 col-md-12 col-sm-12 col-xs-12" data-ride="carousel">

  <div class="carousel-inner">
    <!--Item-->
    <div class="item active" style="height: 50vh;">
      <a href="#"><img src="{{ asset('/images/Leonie.jpg') }}" /></a>
      <div class="carousel-caption">
      </div>
    </div>
    <!--Item-->
    <div class="item" style="height: 50vh;">
      <a href="#"><img src="{{ asset('/images/events/Events (1).jpg') }}" /></a>
      <div class="carousel-caption">
      <div class="container my-5" style="font-family: 'Quicksand', sans-serif;">
      </div>
      </div>
    </div>
    <!--Item-->
    <div class="item" style="height: 50vh;">
      <a href="#"><img src="{{ asset('/images/events/Events (1).jpg') }}" /></a>
      <div class="carousel-caption">
      <div class="container my-5" style="font-family: 'Quicksand', sans-serif;">
      </div>
      </div>
    </div>
    <!--Item-->
    <div class="item" style="height: 50vh;">
      <a href="#"><img src="{{ asset('/images/events/Events (1).jpg') }}" /></a>
      <div class="carousel-caption">
      <div class="container my-5" style="font-family: 'Quicksand', sans-serif;">
      </div>
      </div>
    </div>
  </div>

  <a class="left carousel-control" style="height: 50vh; background:none;" href="#carousel-example" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" style="height: 50vh; background:none;" href="#carousel-example" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
<!--End of Carousel-->
<div class="strip">
    <div class="container w-75 py-3" style="font-family: 'Quicksand', sans-serif;">
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