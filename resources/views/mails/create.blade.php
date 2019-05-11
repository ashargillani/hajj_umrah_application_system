@extends('provider.layout.provider-main')
@section('page-breadcrumb')
    <li><i class="fa fa-home"></i><a href="{{ route('provider.dashboard') }}">Dashboard</a></li>
    <li><a href="{{ route('mails.index') }}">Mails</a></li>
    <li><a href="{{ route('mails.create') }}">Add Mail</a></li>
@endsection
@section('page-content')
    <div class="panel-form">
        <div class="row">
            <div class="col-xs-12 col-sm-8">
                <h2><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;Mail</h2>
                <label>Add New Flight</label>
                <hr />
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                <div class="panel-body">
                    <form action="{{ route('mails.store') }}" method="POST">
                        {{ csrf_field() }}
                        <fieldset>
                            <div class="form-group row">
                                <label for="subject" class="col-sm-2 col-form-label">Subject</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Email Subject">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="body" class="col-sm-2 col-form-label">Body</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="body" name="body" rows="10"></textarea>
                                </div>
                            </div>
                        </fieldset>

                        <div class="form-group row m-20-top">
                            <div class="col-sm-12">
                                <button type="submit" name="submitBtn" class="btn btn-primary pull-right"><i class="fa fa-plus">&nbsp;</i>Add Mail</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

