@extends('provider.layout.provider-main')
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