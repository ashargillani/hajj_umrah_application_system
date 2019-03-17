@extends('layout.master')
@section('header-additional-links')
    <link href="{{ asset('css/breadcrumbs.css') }}" rel="stylesheet">
@endsection
@section('page-content')
    <div class="container" style="margin-top:20px">
        <h1 align="center">Hotels</h1>
        @if(count($hotels) >= 1)
            @foreach($hotels as $hotel)
                <div class="well">
                    <h3><a href="/provider/hotels/{{$hotel->id}}/edit"> {{$hotel->name}} </a></h3>
                    <small>Address: {{$hotel->address}}</small>
                    <p>{{$hotel->stars}} Stars</p>
                </div>
                <hr>
            @endforeach
        @else
            <p>No Hotels Found.</p>
        @endif
    </div>
@endsection