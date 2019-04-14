@extends('provider.layout.provider-main')
@section('page-breadcrumb')
    <li><i class="fa fa-home"></i><a href="{{ route('provider.dashboard') }}">Dashboard</a></li>
    <li><a href="{{ route('flights.index') }}">Flights</a></li>
    <li><a href="#">View Flight</a></li>
@endsection
@section('page-content')
    <a href="{{route('flights.index')}}" class="btn btn-default" style="margin:10px">GO BACK</a>

    <div class="container" style="padding:20px">
        <h1>{{$flight->airlineName}}</h1>
    </div>
    <hr>
    <a href="{{ route('flights.edit', $flight) }}" class="btn btn-success">Edit</a>
    <form action="{{route('flights.destroy', $flight)}}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit" name="deleteBtn" class="btn btn-danger">Delete</button>
    </form>
@endsection