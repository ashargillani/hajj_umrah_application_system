@extends('provider.layout.provider-main')
@section('page-content')
    <a href="{{route('hotels.index')}}" class="btn btn-default" style="margin:10px">GO BACK</a>

    <div class="container" style="padding:20px">
        <h1>{{$hotel->name}}</h1>
        <h1>{{$hotel->address}}</h1>
        <h1>{{$hotel->stars}}</h1>
    </div>
    <hr>
    <a href="{{ route('hotels.edit', $hotel) }}" class="btn btn-success">Edit</a>
    <form action="{{route('hotels.destroy', $hotel)}}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit" name="deleteBtn" class="btn btn-danger">Delete</button>
    </form>
@endsection