@extends('provider.layout.provider-main')
@section('page-breadcrumb')
    <li><i class="fa fa-home"></i><a href="{{ route('provider.dashboard') }}">Dashboard</a></li>
    <li><a href="{{ route('provider.index') }}">Providers</a></li>
@endsection
@section('page-content')
    <div class="panel-form">
        <div class="row">
            <div class="col-xs-12 col-sm-8">
                <h2><i class="fa fa-bed" aria-hidden="true"></i> &nbsp;Provider</h2>
                <label>About Me</label>
                <hr />
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                <div class="panel-body">
                    <form action="{{ route('provider.store-about-me', $provider) }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <fieldset>
                            <div class="form-group row">
                                <label for="providerDetails" class="col-sm-2 col-form-label">Provider Details</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="providerDetails" name="providerDetails" rows="10" value={{$provider->provider_details}}></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="providerEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="providerEmail" name="providerEmail" value = {{$provider->provider_email}}>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phoneNumber" class="col-sm-2 col-form-label">Phone Number</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" value = {{$provider->phoneNumber}}>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="filename" class="col-sm-2 col-form-label">Add Images</label>
                                <div class="col-sm-10">
                                    <div class="input-group control-group increment" >
                                        <input type="file" name="filename[]" id="filename[]" multiple class="form-control">
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <div class="form-group row m-20-top">
                            <div class="col-sm-12">
                                <button type="submit" name="submitBtn" class="btn btn-primary pull-right"><i class="fa fa-plus">&nbsp;</i>Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

