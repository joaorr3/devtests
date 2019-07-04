@extends('welcome')

@section('title', 'Laravel')

@section('content')

    @if (session()->has('error'))
        {{session()->pull('error')}}
    @endif

    <div class="links">
        <a href="/protected">Protected</a>
    </div>

@endsection
