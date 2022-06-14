@extends('layouts.head')
@section('content')
<h1 class="display-3 text-center">{{ Auth::user()->created_at }}</h1>
@endsection