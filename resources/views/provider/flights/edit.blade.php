@extends('provider.layout.provider-main')
@section('page-breadcrumb')
    <li><i class="fa fa-home"></i><a href="{{ route('provider.dashboard') }}">Dashboard</a></li>
    <li><a href="{{ route('flights.index') }}">Flights</a></li>
    <li><a href="#">Update Flight</a></li>
@endsection
@section('page-content')
    <div class="panel-form">
        <div class="row">
            <div class="col-xs-12 col-sm-8">
                <h2><i class="fa fa-plane" aria-hidden="true"></i> &nbsp;Flight</h2>
                <label>Update Flight</label>
                <hr />
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                <div class="panel-body">
                    <form action={{ route('flights.update', $flight)}} method="POST">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <fieldset>
                            <div class="form-group row">
                                <label for="airlineName" class="col-sm-2 col-form-label">Airline Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="airlineName" name="airlineName" value = {{$flight->airlineName}}>
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-group row m-20-top">
                            <div class="col-sm-12">
                                <button type="submit" name="submitBtn" class="btn btn-primary pull-right"><i class="fa fa-pencil-square-o">&nbsp;</i>Update Flight</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

