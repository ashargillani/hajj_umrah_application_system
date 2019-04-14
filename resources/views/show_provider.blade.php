@extends('provider.layout.provider-main')
@section('page-breadcrumb')
    <li><i class="fa fa-home"></i><a href="{{ route('provider.dashboard') }}">Dashboard</a></li>
    <li><a href="{{ route('provider.index') }}">Provider</a></li>
    <li><a href="">Show Provider</a></li>
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