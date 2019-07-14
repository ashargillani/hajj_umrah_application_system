@extends('provider.layout.provider-main')
@section('page-breadcrumb')
    <li><i class="fa fa-home"></i><a href="{{ route('provider.dashboard') }}">Dashboard</a></li>
    <li><a href="{{ route('message.index') }}">Messages</a></li>
@endsection
@section('page-content')
    <div class="panel-form">
        <div class="row">
            <div class="col-xs-12 col-sm-8">
                <h2><i class="fa fa-envelope " aria-hidden="true"></i> &nbsp;Messages</h2>
                <label>Messages sent up-till now</label>
                <hr />
            </div>
            <div class="col-xs-12 col-sm-4 text-center">
                <a href="{{ route('message.create') }}">
                    <button type="button" class="btn btn-primary margin-top-20">
                        <i class="fa fa-plus"></i>
                        Send Message To Admin
                    </button>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                @include('provider.layout.partials.message')
                <div id="dataTableContainer" class="data-table-container table-responcive">
                    <div class="panel-body">
                        <table id="table_id" class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Subject</th>
                                <th>Body</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Read</th>
                                <th>Details</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($messages) >= 1)
                                @foreach($messages as $message)
                                    <tr {{ ($message->seen_by_admin) ? ' ' : ' class=unread-message' }}>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $message->subject }}</td>
                                        <td>{{ $message->body }}</td>
                                        <td>{{ $message->created_at }}</td>
                                        <td>{{ $message->updated_at }}</td>
                                        <td>{{ ($message->seen_by_admin) ? 'True' : 'False' }}</td>
                                        <td>
                                            <a href="{{ route('message.show', ['message' => $message]) }}">
                                                <button class="btn btn-info"><i class="fa fa-info"> </i> Details</button>
                                            </a>
                                        </td>
                                        <td>
                                            <form action="{{route('message.destroy', $message)}}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" name="deleteBtn" class="btn btn-danger"><i class="fa fa-trash"> </i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="9" class="text-center">
                                        <h4 class="label-info">No Messages have been sent up-till now !</h4>
                                    </td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('additional-scripts')
    <script src="{{ asset('js/datatables.min.js') }}" type="text/javascript"></script>
    @include('provider.layout.partials.datatables')
@endsection