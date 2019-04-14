@extends('provider.layout.provider-main')
@section('page-breadcrumb')
    <li><i class="fa fa-home"></i><a href="{{ route('provider.dashboard') }}">Dashboard</a></li>
    <li><a href="{{ route('hotels.index') }}">Hotels</a></li>
    <li><a href="#">Update Hotel</a></li>
@endsection
@section('page-content')
    <div class="panel-form">
        <div class="row">
            <div class="col-xs-12 col-sm-8">
                <h2><i class="fa fa-bed" aria-hidden="true"></i> &nbsp;Hotel</h2>
                <label>Add New Hotel</label>
                <hr />
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                <div class="panel-body">
                    <form action={{ route('hotels.update', $hotel)}} method="POST">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <fieldset>
                            <div class="form-group row">
                                <label for="hotelName" class="col-sm-2 col-form-label">Hotel Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="hotelName" name="hotelName" value = {{$hotel->name}}>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="hotelAddress" class="col-sm-2 col-form-label">Hotel Address</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="hotelAddress" name="hotelAddress" value = {{$hotel->address}}>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="hotelStars" class="col-sm-2 col-form-label">What are the stars of the hotel?</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="hotelStars" id="hotelStars">
                                        <option selected disabled>Hotel Stars</option>
                                        <option value="2">2 Star</option>
                                        <option value="3">3 Star</option>
                                        <option value="4">4 Star</option>
                                        <option value="5">5 Star</option>
                                        <option value="6">6 Star</option>
                                    </select>
                                </div>
                            </div>

                        </fieldset>

                        <div class="form-group row m-20-top">
                            <div class="col-sm-12">
                                <button type="submit" name="submitBtn" class="btn btn-primary pull-right"><i class="fa fa-pencil-square-o">&nbsp;</i>Update Hotel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

