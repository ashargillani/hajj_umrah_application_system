@extends('provider.layout.provider-main')
@section('page-content')
    <div class="container" style="margin-top:20px">
        <h1 align="center">Packages</h1>
        @if(count($packages) >= 1)
            @foreach($packages as $package)
                <div class="container">
                    <div class="well">
                        <h2><a href="{{ route('packages.show', $package) }}"> {{$package->class}} Class </a></h2>
                        <p>{{$package->packageStars}} Stars</p>
                        <h3>Price: {{$package->price}}</h3>
                    </div>
                </div>
                <hr>
            @endforeach
        @else
            <p>No Packages Found.</p>
        @endif
    </div>
@endsection