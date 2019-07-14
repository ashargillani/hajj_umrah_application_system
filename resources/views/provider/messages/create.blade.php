@extends('provider.layout.provider-main')
@section('page-breadcrumb')
    <li><i class="fa fa-home"></i><a href="{{ route('provider.dashboard') }}">Dashboard</a></li>
    <li><a href="{{ route('message.index') }}">Messages</a></li>
    <li><a href="{{ route('message.create') }}">Send Message To Admin</a></li>
@endsection
@section('page-content')
    <div class="panel-form">
        <div class="row">
            <div class="col-xs-12 col-sm-8">
                <h2><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;Message</h2>
                <label>Send New Message to Admin</label>
                <hr />
            </div>
        </div>
        @if (count($errors) > 0)
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li></ul>
                @endforeach
        @endif
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                <div class="panel-body">
                    <form action="{{ route('message.store') }}" enctype="multipart/form-data" method="POST">
                        {{ csrf_field() }}
                        <fieldset>
                            <div class="form-group row">
                                <label for="subject" class="col-sm-2 col-form-label">Subject</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Message Subject">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="body" class="col-sm-2 col-form-label">Body</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="body" name="body" rows="10" placeholder="Message Body"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <label for="attachments" class="col-sm-2 col-form-label">Attachments</label>
                                <div class="form-group col-sm-10">
                                    <input type="file" class="form-control" name="attachments[]" accept="application/msword, application/vnd.ms-excel, text/plain, application/pdf, image/*" multiple>
                                </div>
                            </div>
                        </fieldset>

                        <div class="form-group row m-20-top">
                            <div class="col-sm-12">
                                <button type="submit" name="submitBtn" class="btn btn-primary pull-right"><i class="fa fa-send">&nbsp;</i>Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

