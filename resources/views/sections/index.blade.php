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
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 class="card-title mb-0 fs-24">Sections</h2>
                <a href="{{ route('sections.create') }}" class="btn btn-primary">New Section</a>
            </div>
        </div>
        @foreach ($sections as $section)
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <div class="flex-grow-1">
                            <h5 class="card-title mb-0">{{ $section->name }}</h5>
                            <p class="card-text text-muted">{{ $section->description }}</p>
                        </div>
                        <div>
                            <button id="addRow" class="btn btn-primary">Add New Section</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card col-xl-3 col-md-6 shadow-lg" style="min-width: 15rem;">
                            <div class="card-body">
                                <h4 class="card-title mb-2">Pizza Company</h4>
                                <h6 class="card-subtitle font-14 text-success">70 points</h6>
                            </div>
                            <img class="img-fluid mx-auto" src="{{ URL::asset('build/images/pizza.jpg') }}" width="100"
                                alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">The Pizza Company is superior in all aspects – taste, store design and
                                    ambience, comfort, home delivery area coverage, variety of pizza crusts, sauces.</p>
                            </div>
                            <div class="card-footer d-flex justify-content-end">
                                <a href="#" class="btn btn-primary me-2">Edit <i
                                        class="ri-edit-line align-middle ms-1 lh-1"></i></a>
                                <button class="btn btn-danger">Delete <i
                                        class="ri-delete-bin-line align-middle ms-1 lh-1"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
        @endforeach
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
