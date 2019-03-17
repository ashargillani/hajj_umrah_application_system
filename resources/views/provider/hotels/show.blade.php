@extends('layout.master')
@section('header-additional-links')
    <link href="{{ asset('css/breadcrumbs.css') }}" rel="stylesheet">
@endsection
@section('page-content')
    <a href="{{url('provider/hotels')}}" class="btn btn-default" style="margin:10px">GO BACK</a>

    <div class="container" style="padding:20px">
        <h1>{{$packageHotel->name}}</h1>
        <h1>{{$packageHotel->address}}</h1>
        <h1>{{$packageHotel->stars}}</h1>
    </div>
    <hr>
    <a href="/provider/hotels/{{$packageHotel->id}}/edit" class="btn btn-success">Edit</a>
    <form action="provider/hotels/{{ $packageHotel->id }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit" name="deleteBtn" class="btn btn-danger">Delete</button>
    </form>
@endsection