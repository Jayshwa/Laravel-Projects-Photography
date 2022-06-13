@extends('layouts.head')
@section('content')
@auth
    @include('navbar-logged-in')
    @if(auth()->user()->role == 1)
       <div>i am Admin</div>
       <h1 class="display-3 text-center">{{ Auth::user()->created_at }}</h1>
    @endif
@endauth
@guest
    @include('navbar-logged-out')
@endguest
@endsection