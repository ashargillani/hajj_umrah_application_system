@extends('layout.master')
@section('header-additional-links')
    <link href="{{ asset('css/breadcrumbs.css') }}" rel="stylesheet">
@endsection
@section('page-content')
    <a href="{{route('packages.index')}}" class="btn btn-default" style="margin:10px">GO BACK</a>
    <div class="container" style="padding:20px">
        <h1>Class: {{$package->class}}</h1>
        <h3>Days: {{$package->totalDays}}</h3>
        <h3>Stars: {{$package->packageStars}}</h3>
        <h3>Departure Date: {{$package->departureDate}}</h3>
        <h3>Arrival Date: {{$package->arrivalDate}}</h3>
        <h2>Price: {{$package->price}}</h2>
        <p>
            <b>Avaialble Features:</b> {{($package->visa == 1)?' Visa ':''}}
            {{($package->draft == 1)?' Draft ':''}}
            {{($package->food == 1)?' Food ':''}}
            {{($package->qurbani == 1)?' Qurbani ':''}}
            {{($package->transfers == 1)?' Transfers ':''}}
            {{($package->ziyaarah == 1)?' Ziyaarah ':''}}
        </p>
        <hr>
        <a href="{{ route('packages.edit', $package) }}" class="btn btn-success">Edit</a>
        <form action="{{route('packages.destroy', $package)}}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" name="deleteBtn" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection