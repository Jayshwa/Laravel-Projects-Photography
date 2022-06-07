@extends('layouts.head')

@section('content')
@include('navbar')
<div class="fixed-top home-parallax-top noselect"></div>
<div class="container my-5 title-strip" style="font-family: 'Quicksand', sans-serif;">
    <h1 class="text-center display-2 text-white noselect">JOSHUA YOUNG</h1>
    <h2 class="text-center display-3 text-white noselect">PHOTOGRAPHY</h2>
</div>
<div class="strip my-5">
    <div class="container w-50 my-5 py-3" style="font-family: 'Quicksand', sans-serif;">
        <h5 class="py-3">LEICESTERSHIRE PHOTOGRAPHER</h5>
        <h3>Telling your story</h3>
        <p class="">
            I'm a Leicestershire based photographer with a passion for capturing moments and communicating stories through imagery.<br/><br/>

            Photography is hugely stylistic and when it comes to events my approach is generally to be as discrete as possible so that I can effectively capture those amazing candid moments that matter most and tell the genuine story as it unfolds.<br/><br/>
        
            If you want to see more about my work and how I see the world through my lens then please do take a look at my portfolio and if you have any questions or want to know more about my approach then please do get in touch..</p>
    </div>
</div>
<div class="fixed-bottom home-parallax-bottom"></div>
@include('contact')
@endsection

