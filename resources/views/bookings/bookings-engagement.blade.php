@extends('layouts.head')
@section('book-engagements')
<div class="container my-5" style="font-family: 'Quicksand', sans-serif;">
    <h1 class="text-center display-2 text-black noselect">JOSHUA YOUNG</h1>
    <h2 class="text-center display-3 text-black noselect">PHOTOGRAPHY</h2>
</div>
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
        <h5 class="py-3">Engagement Shoot</h5>
        <p class="">
        Congratulations on your engagement! This is such a special occasion and one that you want to remember for years to come. I would love to help you treasure this beautiful day for years to come!<br/><br/>

        Engagement shoots are a great way to get you comfortable for photos on the big day and a beautiful opportunity to spend the day together celebrating  each other.<br/><br/>

        Leicestershire has many great locations where we can capture some beautiful shots that encapsulate something of you and your personality whether it's for wedding invites, personal print outs, or that perfect post to tell your friends on social media.<br/><br/>

        Don't be afraid to suggest other locations however if you have something else in mind. Let's talk about how we can make your dream photos a reality.
        </p>

        <h5 class="py-3">Prices</h5>
        <p class="">
        All shoots start at £75 for a one to two hour shoot at up to two locations. Relaxed, natural photos at a place that means something to you or where you feel comfortable.<br/><br/>

        Individually edited, high-resolution images for you to print or share online.<br/><br/>

        A minimum of 50 high quality images but often there are many more.
        </p>
    </div>
</div>
@include('contact')
@endsection