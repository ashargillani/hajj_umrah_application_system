@extends('provider.layout.provider-main')
@section('page-content')
    <div class="container-fluid margin-left-right-10">
        <div class="new-package-page-form">
            <form action="{{ route('provider.profile_update', $data['user']) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <fieldset>
                    <legend align="center">Update Profile</legend>
                    <div class="form-group row">
                        <label for="name" class="col-sm-4 col-form-label">Name</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="name" name="name" value = {{ $data['user']->name}} readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-4">
                            <input type="email" class="form-control" id="email" name="email" value = {{ $data['user']->email}} readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="orgName" class="col-sm-4 col-form-label">Organization Name</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="orgName" name="orgName" value = {{ $data['provider']->organizationName}} >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phoneNumber" class="col-sm-4 col-form-label">Phone Number</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" value = {{ $data['provider']->phoneNumber}} >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="city" class="col-sm-4 col-form-label">City</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="city" name="city" value = {{ $data['provider']->city}} >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="address" class="col-sm-4 col-form-label">Address</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="address" name="address" value = {{ $data['provider']->address}} >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="oldPassword" class="col-sm-4 col-form-label">Old Password</label>
                        <div class="col-sm-4">
                            <input type="password" class="form-control" id="oldPassword" name="oldPassword" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="newPassword" class="col-sm-4 col-form-label">New Password</label>
                        <div class="col-sm-4">
                            <input type="password" class="form-control" id="newPassword" name="newPassword" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="confirmPassword" class="col-sm-4 col-form-label">Confirm New Password</label>
                        <div class="col-sm-4">
                            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" >
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