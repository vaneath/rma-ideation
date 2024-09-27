@extends('layouts.rma')
@section('title')
    @lang('translation.dashboards')
@endsection
@section('css')
    <link href="{{ URL::asset('build/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('build/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Customer Survey Records</h5>
                </div>
                <div class="card-body">
                    <table id="model-datatables" class="table table-bordered nowrap table-striped align-middle"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th class="text-center align-middle">No.</th>
                                <th class="text-center align-middle">District</th>
                                <th class="text-center align-middle">Driving Purpose</th>
                                <th class="text-center align-middle">Driving Frequency</th>
                                <th class="text-center align-middle">Favorite Car Feature</th>
                                <th class="text-center align-middle">Car Fuel</th>
                                <th class="text-center align-middle">Car Type</th>
                                <th class="text-center align-middle">Car Make</th>
                                <th class="text-center align-middle">Car Model</th>
                                <th class="text-center align-middle">Car Color</th>
                                <th class="text-center align-middle">Car Year</th>
                                <th class="text-center align-middle">Review Status</th>
                                <th class="text-center align-middle">Submitted at</th>
                                <th class="text-center align-middle">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($records as $record)
                                <tr class="text-center">
                                    <td>{{ $record->id }}</td>
                                    <td>{{ $record->district }}</td>
                                    <td>{{ $record->driving_purpose }}</td>
                                    <td>{{ $record->driving_frequency }}</td>
                                    <td>{{ $record->favorite_car_feature }}</td>
                                    <td>{{ $record->car_fuel }}</td>
                                    <td>{{ $record->car_type }}</td>
                                    <td>{{ $record->car_make }}</td>
                                    <td>{{ $record->car_model }}</td>
                                    <td>{{ $record->car_color }}</td>
                                    <td>{{ $record->car_year }}</td>
                                    <td>
                                        @if ($record->review_status == 'Pending')
                                            <span class="badge bg-warning">Pending</span>
                                        @elseif ($record->review_status == 'Approved')
                                            <span class="badge bg-success">Approved</span>
                                        @elseif ($record->review_status == 'Rejected')
                                            <span class="badge bg-danger">Rejected</span>
                                        @endif
                                    </td>
                                    <td>{{ $record->created_at }}</td>
                                    <td>
                                        <div class="dropdown d-inline-block">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a href="{{ route('records.show', $record) }}" class="dropdown-item"><i
                                                            class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a>
                                                </li>
                                                <li><a class="dropdown-item edit-item-btn"><i
                                                            class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                        Edit</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <!-- apexcharts -->
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/jsvectormap/maps/world-merc.js') }}"></script>
    <script src="{{ URL::asset('build/libs/swiper/swiper-bundle.min.js') }}"></script>
    <!-- dashboard init -->
    <script src="{{ URL::asset('build/js/pages/dashboard-ecommerce.init.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
