@extends('layout.master')
@section('header-additional-links')
    <link href="{{ asset('css/breadcrumbs.css') }}" rel="stylesheet">
@endsection
@section('page-content')
    <div class="container" style="margin-top:20px">
        <h1 align="center">Providers</h1>
        @if(count($users) >= 1)
            @foreach($users as $user)
                <div class="container">
                    <div class="well">
                        <h2><a href="{{ route('provider.show', $user) }}">Name: {{$user->name}} </a></h2>
                        <p>{{$user->email}}</p>
                    </div>
                </div>
                <hr>
            @endforeach
        @else
            <p>No Packages Found.</p>
        @endif
    </div>
@endsection