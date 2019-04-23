@extends('provider.layout.provider-main')
@section('page-breadcrumb')
    <li><i class="fa fa-home"></i><a href="{{ route('provider.dashboard') }}">Dashboard</a></li>
    <li><a href="{{ route('hotels.index') }}">Hotels</a></li>
    <li><a href="#">Hotel Details</a></li>
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
                    <form>
                        <fieldset>
                            <div class="form-group row">
                                <label for="hotelName" class="col-sm-2 col-form-label">Hotel Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="hotelName" name="hotelName" value = {{$hotel->name}} readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="hotelAddress" class="col-sm-2 col-form-label">Hotel Address</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="hotelAddress" name="hotelAddress" value = {{$hotel->address}} readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="hotelStars" class="col-sm-2 col-form-label">Hotel Stars</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="hotelStars" name="hotelStars" value = {{$hotel->stars}} readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                @foreach($hotel->pictures as $picture)
                                    <div class="col-md-4">
                                        <div class="thumbnail">
                                            <a href="{{ asset('images/hotels/' . $picture->filename) }}">
                                                <img src="{{ asset('images/hotels/' . $picture->filename) }}">
                                                <div class="caption">
                                                    <p>Hotel Image</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <hr>
        <a href="{{ route('hotels.edit', $hotel) }}" class="btn btn-success">Edit</a>
        <form action="{{route('hotels.destroy', $hotel)}}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" name="deleteBtn" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection