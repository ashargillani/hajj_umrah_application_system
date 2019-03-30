@extends('provider.layout.provider-main')
@section('page-content')
    <div class="container-fluid margin-left-right-10">
        <div class="new-package-page-form">
            <form action="{{ route('flights.store') }}" method="POST">
                {{ csrf_field() }}
                <fieldset>
                    <legend align="center">Add New Flight</legend>
                    <div class="form-group row">
                        <label for="airlineName" class="col-sm-4 col-form-label">Airline Name</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="airlineName" name="airlineName" placeholder="Name">
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