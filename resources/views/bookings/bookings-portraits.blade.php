@extends('layouts.head')
@section('book-portraits')
@auth
    @include('navbar-logged-in')
@endauth

@guest
    @include('navbar-logged-out')
@endguest
@endsection