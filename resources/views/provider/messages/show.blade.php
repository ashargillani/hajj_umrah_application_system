@extends('provider.layout.provider-main')
@section('page-breadcrumb')
    <li><i class="fa fa-home"></i><a href="{{ route('provider.dashboard') }}">Dashboard</a></li>
    <li><a href="{{ route('message.index') }}">Messages</a></li>
    <li><a href="#">Message Details</a></li>
@endsection
@section('page-content')
    <div class="panel-form">
        <div class="row">
            <div class="col-xs-12 col-sm-8">
                <h2><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;Message</h2>
                <label>Message sent to admin</label>
                <hr />
            </div>
            <div class="col-xs-12 col-sm-4">
                <form action="{{route('message.destroy', $message)}}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" name="deleteBtn" class="btn btn-danger pull-right">
                        <span class="fa fa-trash"> </span> Delete
                    </button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                <div class="panel-body">
                    <form>
                        <fieldset>
                            <legend>Message Details</legend>
                            <div class="form-group row">
                                <label for="subject" class="col-sm-2 col-form-label">Subject</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Email Subject" value = {{$message->subject}}>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="body" class="col-sm-2 col-form-label">Body</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="body" name="body" rows="10" readonly>{{$message->body}}</textarea>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 2%">
            <div class="col-xs-12 col-sm-8">
                <h2><i class="fa fa-paperclip" aria-hidden="true"></i> &nbsp;Attached Files</h2>
                <label>Files attached to the message</label>
                <hr />
            </div>
        </div>
        <div class="panel-body">
            <div class="row">
                @foreach($message->attachments as $attachment)
                <div class="col-md-4">
                    <div class="thumbnail">
                        <a href="{{ URL::to('/') }}/provider_message_attachments/{{ $attachment->filename }}">
                            <img src="{{ URL::to('/') }}/provider_message_attachments/{{ $attachment->filename }}" alt="Lights" style="width:100%">
                            <div class="caption">
                                <p>{{ $attachment->filename }}</p>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <hr>
    </div>
@endsection