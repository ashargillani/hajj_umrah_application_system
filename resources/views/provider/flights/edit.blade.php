@extends('provider.layout.provider-main')
@section('page-content')
    <div class="container-fluid margin-left-right-10">
        <div class="new-package-page-form">
            <form action={{ route('flights.update', $flight)}} method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <fieldset>
                    <legend align="center">Edit Flight</legend>
                    <div class="form-group row">
                        <label for="airlineName" class="col-sm-4 col-form-label">Hotel Name</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="airlineName" name="airlineName" value = {{$flight->airlineName}}>
                        </div>
                    </div>
                </fieldset>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" name="submitBtn" class="btn btn-success" style="float:right;">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection