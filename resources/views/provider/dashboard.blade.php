@extends('provider.layout.provider-main')
@section('page-breadcrumb')
    <li><i class="fa fa-home"></i><a href="{{ route('provider.dashboard') }}">Dashboard</a></li>
@endsection
@section('page-content')
    <div class="panel-form">
        <div class="row">
            <div class="col-sm-4" >
                <div class="well text-center ">
                    <h1 class="card-count">{{ $providerCount }}</h1>
                    <h1 class="card-icon"><span class="fa fa-object-group"></span></h1>
                    <h4 class="card-description">Providers</h4>
                </div>
            </div>
            <div class="col-sm-4" >
                <div class="well text-center ">
                    <h1 class="card-count">{{ $packagesCount }}</h1>
                    <h1 class="card-icon"><span class="fa fa-gift"></span></h1>
                    <h4 class="card-description">Packages</h4>
                </div>
            </div>
            <div class="col-sm-4" >
                <div class="well text-center ">
                    <h1 class="card-count">{{ $hotelsCount }}</h1>
                    <h1 class="card-icon"><span class="fa fa-hotel"></span></h1>
                    <h4 class="card-description">Hotels</h4>
                </div>
            </div>
            <div class="col-sm-4" >
                <div class="well text-center ">
                    <h1 class="card-count">{{ $flightCount }}</h1>
                    <h1 class="card-icon"><span class="fa fa-plane"></span></h1>
                    <h4 class="card-description">Flight Information</h4>
                </div>
            </div>
            <div class="col-sm-4" >
                <div class="well text-center ">
                    <h1 class="card-count">5</h1>
                    <h1 class="card-icon"><span class="fa fa-users"></span></h1>
                    <h4 class="card-description">Online Users</h4>
                </div>
            </div>
            <div class="col-sm-4" >
                <div class="well text-center ">
                    <h1 class="card-count">10</h1>
                    <h1 class="card-icon"><span class="fa fa-dollar"></span></h1>
                    <h4 class="card-description">Packages Bought</h4>
                </div>
            </div>
        </div>
    </div>
@endsection