@extends('provider.layout.provider-main')
@section('page-content')
    <div class="panel-form">
        <div class="row">
            <div class="col-xs-12 col-sm-8">
                <h2><i class="fa fa-bed" aria-hidden="true"></i> &nbsp;Hotels</h2>
                <label>Hotels added uptill now</label>
                <hr />
            </div>
            <div class="col-xs-12 col-sm-4 text-center">
                <a href="{{ route('hotels.create') }}">
                    <button type="button" class="btn btn-primary margin-top-20">
                        <i class="fa fa-plus"></i>
                        Add New Hotel
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
                                <th>Name</th>
                                <th>Stars</th>
                                <th>Address</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($hotels) >= 1)
                                @foreach($hotels as $hotel)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $hotel->name }}</td>
                                        <td>{{ $hotel->stars }}</td>
                                        <td>{{ $hotel->address }}</td>
                                        <td>{{ $hotel->created_at }}</td>
                                        <td>{{ $hotel->updated_at }}</td>
                                        <td>
                                            <a href="{{ route('hotels.update', ['hotel' => $hotel]) }}">
                                                <button class="btn btn-info">Edit</button>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('hotels.destroy', ['hotel' => $hotel]) }}">
                                                <button class="btn btn-danger">Delete</button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="9" class="text-center">
                                        <h4 class="label-info">No Hotels have been added uptill now !</h4>
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