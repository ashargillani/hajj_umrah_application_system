@extends('provider.layout.provider-main')
@section('page-breadcrumb')
    <li><i class="fa fa-home"></i><a href="{{ route('provider.dashboard') }}">Dashboard</a></li>
    <li><a href="{{ route('journey.index') }}">Journeys</a></li>
@endsection
@section('page-content')
    <div class="panel-form">
        <div class="row">
            <div class="col-xs-12 col-sm-8">
                <h2><i class="fa fa-bus" aria-hidden="true"></i> &nbsp;Journeys</h2>
                <label>Journeys added uptill now</label>
                <hr />
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
                                <th>Customer Name</th>
                                <th>Package Class</th>
                                <th>Package Type</th>
                                <th>Route</th>
                                <th>Total Days</th>
                                <th>Prefferred Budget</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Details</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($journeys) >= 1)
                                @foreach($journeys as $journey)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $journey->user->name }}</td>
                                        <td>{{ $journey->package_class }}</td>
                                        <td>{{ $journey->package_type }}</td>
                                        <td>{{ $journey->route }}</td>
                                        <td>{{ $journey->total_days }}</td>
                                        <td>{{ $journey->prefferred_budget }}</td>
                                        <td>{{ $journey->created_at }}</td>
                                        <td>{{ $journey->updated_at }}</td>
                                        <td>
                                            <a href="{{ route('journey.page1.details', ['journey' => $journey]) }}">
                                                <button class="btn btn-info">Details</button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="9" class="text-center">
                                        <h4 class="label-info">No Journeys have been added uptill now !</h4>
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