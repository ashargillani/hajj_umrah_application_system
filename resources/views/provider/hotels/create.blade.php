@extends('provider.layout.provider-main')
@section('page-content')
    <div class="container-fluid margin-left-right-10">
        <div class="new-package-page-form">
            <form action="{{ route('hotels.store') }}" method="POST">
                {{ csrf_field() }}
                <fieldset>
                    <legend align="center">Add New Hotel</legend>
                    <div class="form-group row">
                        <label for="hotelName" class="col-sm-4 col-form-label">Hotel Name</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="hotelName" name="hotelName" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="hotelAddress" class="col-sm-4 col-form-label">Hotel Address</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="hotelAddress" name="hotelAddress" placeholder="Address">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="hotelStars" class="col-sm-4 col-form-label">What are the stars of the hotel?</label>
                        <div class="col-sm-4">
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

                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" name="submitBtn" class="btn btn-success" style="float:right;">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection