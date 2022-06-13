@extends('layouts.head')
@section('content')
@auth
    @include('navbar-logged-in')
@endauth
@guest
    @include('navbar-logged-out')
@endguest
<h1 class="display-3 text-center">{{ Auth::user()->created_at }}</h1>
@endsection