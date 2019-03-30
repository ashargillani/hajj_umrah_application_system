@extends('provider.layout.provider-main')
@section('page-content')
    <div class="panel-form">
        <div class="row">
            <div class="col-xs-12 col-sm-8">
                <h2><i class="fa fa-gift" aria-hidden="true"></i> &nbsp;Packages</h2>
                <label>Packages added uptill now</label>
                <hr />
            </div>
            <div class="col-xs-12 col-sm-4 text-center">
                <a href="{{ route('packages.create') }}">
                    <button type="button" class="btn btn-primary margin-top-20">
                        <i class="fa fa-plus"></i>
                        Add New Package
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
                                <th>Class</th>
                                <th>Total Days</th>
                                <th>Stars</th>
                                <th>Price</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($packages) >= 1)
                                @foreach($packages as $package)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $package->class }}</td>
                                        <td>{{ $package->totalDays }}</td>
                                        <td>{{ $package->packageStars }}</td>
                                        <td>{{ $package->price }}</td>
                                        <td>{{ $package->created_at }}</td>
                                        <td>{{ $package->updated_at }}</td>
                                        <td>
                                            <a href="{{ route('packages.update', ['package' => $package]) }}">
                                                <button class="btn btn-info">Edit</button>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('packages.destroy', ['package' => $package]) }}">
                                                <button class="btn btn-danger">Delete</button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="9" class="text-center">
                                        <h4 class="label-info">No Packages have been added uptill now !</h4>
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