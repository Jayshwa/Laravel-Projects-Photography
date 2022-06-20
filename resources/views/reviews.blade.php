@extends('layouts.head')
@section('content')
<div class="container my-5" style="font-family: 'Quicksand', sans-serif;">
	<h1 class="text-center display-2 text-black noselect text-responsive">JOSHUA YOUNG</h1>
	<h2 class="text-center display-3 text-black noselect text-responsive">PHOTOGRAPHY</h2>
</div>
<!--Events Carousel-->
<div id="carousel-example" class="carousel slide reviews review-section pb-5 col-lg-12 col-md-12 col-sm-12 col-xs-12" data-ride="carousel">
  <div class="carousel-inner">
	<!--ITEM-->

    <div class="item active reviews-container">
      <div class="testimony-caption reviews-item">
		<p class="testimonial">"We had a fantastic family shoot with Josh. We chose an outside shoot and had the best time: The children loved him and he made us feel so relaxed. The pictures were amazing and we’re so pleased with them.Thanks Josh!"</p>
		<p class="overview"><b>James & Hester</b>, Family Shoot</p>
      </div>
    </div>
	<!--Item End-->
	<!--ITEM-->
    <div class="item">
		<div class="testimony-caption reviews-item">
			<p class="testimonial">"Easily one of the best experiences I’ve ever had with a photographer, Josh is super personable and very talented at what he does. He always makes sure everyone is comfortable and having a good time. He is energetic, engaging, extremely creative and I couldn’t be more happy with the final photographs."</p>
			<p class="overview"><b>Damares</b>, Events & portraits shoot</p>
		</div>
    </div>
	<!--Item End-->
	<!--ITEM-->
	<div class="item">
		<div class="testimony-caption reviews-item">
			<p class="testimonial">"Josh is so lovely and such a talented photographer. He was really flexible and patient with our dog and our baby. Thank you for our wonderful family pictures. We really appreciate it."</p>
			<p class="overview"><b>Doreen</b>, Family Shoot</p>
		</div>
    </div>
	<!--Item End-->
	<!--ITEM-->
	<div class="item">
		<div class="testimony-caption reviews-item">
		<p class="testimonial">"Josh has photographed a number of events with us in Leicester and has been fantastic. He has a great eye for catching a moment and is discreet enough not to draw attention to himself in the process. He is personable, communicable, and the photos he produced for us were excellent! I couldn't recommend him enough and would love to keep working with him in the future!"</p>
		<p class="overview"><b>Josh & Alice</b>, Events Shoot</p>
		</div>
    </div>
	<!--Item End-->
	<!--ITEM-->
	<div class="item">
		<div class="testimony-caption reviews-item">
		<p class="testimonial">"Josh is such a great photographer! He really captures the emotion of the moment. He's very considerate at events and manages to capture great candid moments whilst respecting the envrionment and blending in to the background."</p>
		<p class="overview"><b>Steph</b>, Events Shoot</p>
		</div>
    </div>
	<!--Item End-->
	<!--ITEM-->
	<div class="item">
		<div class="testimony-caption reviews-item">
		<p class="testimonial">"Josh came to take some publicity shots for our toddler groups. He spent time to understand the brief and confirmed it as he went along checking we liked the first intial shots. He was very professional and personable seeking permission from the parents and took some imaginative photos which the parents loved.  Where possible he also tried to be inconspicuous and wait for the natural poses to occur."</p>
		<p class="overview"><b>Sharon</b>, Events Shoot</p>
		</div>
    </div>
	<!--Item End-->
	<!--ITEM-->
	<div class="item">
		<div class="testimony-caption reviews-item">
		<p class="testimonial">"Josh came to our home and made taking pictures of our family a really fun experience. He took every opportunity to find great shots and was really patient with our three small children. We really appreciate his attention to detail alongside a willingness to be flexible and spontaneous."</p>
		<p class="overview"><b>David & Hannah</b>, Family Shoot</p>
		</div>
    </div>
	<!--Item End-->
    </div>
		<!--Chevron-->
		<a class="left carousel-control reviews" href="#carousel-example" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
	</a>
	<!--Chevron End-->
	<!--Chevron-->
  	<a class="right carousel-control reviews" href="#carousel-example" data-slide="next">
   		<span class="glyphicon glyphicon-chevron-right"></span>
  	</a>
	<!--Chevron End-->
  </div>
  
</div>
<!--End of Events Carousel-->
@endsection
@include('contact')