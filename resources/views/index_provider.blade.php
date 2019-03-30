@extends('provider.layout.provider-main')
@section('page-content')
    <div class="panel-form">
        <div class="row">
            <div class="col-xs-12 col-sm-8">
                <h2><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;Providers</h2>
                <label>Providers that you have added uptill now</label>
                <hr />
            </div>
            <div class="col-xs-12 col-sm-4 text-center">
                <a href="{{ route('provider.create') }}">
                    <button type="button" class="btn btn-primary margin-top-20">
                        <i class="fa fa-plus"></i>
                        Add New Provider
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
                                    <th>User Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($users) >= 1)
                                    @foreach($users as $user)
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>PackageProvider</td>
                                        <td>{{ $user->created_at }}</td>
                                        <td>{{ $user->updated_at }}</td>
                                        <td>
                                            <a href="{{ route('provider.update', ['user' => $user]) }}">
                                                <button class="btn btn-info">Edit</button>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('provider.delete', ['user' => $user]) }}">
                                                <button class="btn btn-danger">Delete</button>
                                            </a>
                                        </td>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="9" class="text-center">
                                            <h4 class="label-info">No providers have been added uptill now !</h4>
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