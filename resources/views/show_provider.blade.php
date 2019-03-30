@extends('layout.master')
@section('header-additional-links')
    <link href="{{ asset('css/breadcrumbs.css') }}" rel="stylesheet">
@endsection
@section('page-content')
    <a href="{{route('provider.index')}}" class="btn btn-default" style="margin:10px">GO BACK</a>
    <div class="container" style="padding:20px">
        <h1>Name: {{$user->name}}</h1>
        <h1>Email: {{$user->email}}</h1>
        <h3>Created Date: {{$user->created_at}}</h3>
        <hr>
        <a href="{{ route('provider.edit', $user) }}" class="btn btn-success">Edit</a>
        <form action="{{route('provider.delete', $user)}}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" name="deleteBtn" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection