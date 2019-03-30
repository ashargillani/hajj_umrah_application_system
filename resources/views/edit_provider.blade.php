@extends('provider.layout.provider-main')
@section('page-content')
    <div class="container-fluid margin-left-right-10">
        <div class="new-package-page-form">
            <form action="{{ route('provider.update', $user) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <fieldset>
                    <legend align="center">Add New Provider</legend>
                    <div class="form-group row">
                        <label for="name" class="col-sm-4 col-form-label">Name</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="name" name="name" value = {{$user->name}}>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-4">
                            <input type="email" class="form-control" id="email" name="email" value = {{$user->email}}>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-4 col-form-label">Password</label>
                        <div class="col-sm-4">
                            <input type="password" class="form-control" id="password" name="password" value = {{$user->password}}>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="confirmPassword" class="col-sm-4 col-form-label">Confirm Password</label>
                        <div class="col-sm-4">
                            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" value = {{$user->password}}>
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