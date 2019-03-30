@extends('layout.master')
@section('header-additional-links')
    <link href="{{ asset('css/breadcrumbs.css') }}" rel="stylesheet">
@endsection
@section('page-content')
    <div class="container" style="margin-top:20px">
        <h1 align="center">Flights</h1>
        @if(count($flights) >= 1)
            @foreach($flights as $flight)
                <div class="well">
                    <h3><a href="{{ route('flights.show', $flight) }}"> {{$flight->airlineName}} </a></h3>
                </div>
                <hr>
            @endforeach
        @else
            <p>No Hotels Found.</p>
        @endif
    </div>
@endsection