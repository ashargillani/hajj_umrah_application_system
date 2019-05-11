@extends('provider.layout.provider-main')
@section('page-breadcrumb')
    <li><i class="fa fa-home"></i><a href="{{ route('provider.dashboard') }}">Dashboard</a></li>
    <li><a href="{{ route('mails.index') }}">Mails</a></li>
@endsection
@section('page-content')
    <div class="panel-form">
        <div class="row">
            <div class="col-xs-12 col-sm-8">
                <h2><i class="fa fa-envelope " aria-hidden="true"></i> &nbsp;Mails</h2>
                <label>Mails added uptill now</label>
                <hr />
            </div>
            <div class="col-xs-12 col-sm-4 text-center">
                <a href="{{ route('mails.create') }}">
                    <button type="button" class="btn btn-primary margin-top-20">
                        <i class="fa fa-plus"></i>
                        Add New Mail
                    </button>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                @include('provider.layout.partials.message')
                <div id="dataTableContainer" class="data-table-container table-responcive">
                    <div class="panel-body">
                        <table id="table_id" class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Subject</th>
                                <th>Body</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Details</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($mails) >= 1)
                                @foreach($mails as $mail)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $mail->subject }}</td>
                                        <td>{{ $mail->body }}</td>
                                        <td>{{ $mail->created_at }}</td>
                                        <td>{{ $mail->updated_at }}</td>
                                        <td>
                                            <a href="{{ route('mails.show', ['mail' => $mail]) }}">
                                                <button class="btn btn-info">Details</button>
                                            </a>
                                        </td>
                                        @if(Auth::user()->hasRole('admin'))
                                            <td>
                                                <a href="{{ route('mails.edit', ['mail' => $mail]) }}">
                                                    <button class="btn btn-info">Edit</button>
                                                </a>
                                            </td>
                                            <td>
                                                <form action="{{route('mails.destroy', $mail)}}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit" name="deleteBtn" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="9" class="text-center">
                                        <h4 class="label-info">No Mails have been added uptill now !</h4>
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