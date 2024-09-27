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
                            <a href="{{ route('discounts.create', ['section_id' => $section->id]) }}" id="addRow"
                                class="btn btn-primary">
                                New Discount
                            </a>
                        </div>
                    </div>

                    <div class="row m-3">
                        @foreach ($section->discounts as $discount)
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card shadow-lg h-100">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-2">
                                            <h4 class="card-title mb-0 me-3">{{ $discount->name }}</h4>
                                            <span class="badge bg-warning fs-12 px-3 py-2">
                                                @if ($discount->type == 'percent')
                                                    {{ $discount->value }}% OFF
                                                @elseif ($discount->type == 'fixed')
                                                    {{ $discount->value }}$ OFF
                                                @endif
                                            </span>
                                        </div>
                                        <h6 class="card-subtitle font-14 text-success">{{ $discount->point_cost }} points
                                        </h6>
                                    </div>
                                    <img class="img-fluid mx-auto object-fit-cover" src="{{ $discount->image_url }}"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">{{ $discount->description }}</p>
                                    </div>
                                    <div class="card-footer d-flex justify-content-end">
                                        <a href="{{ route('discounts.edit', $discount) }}"
                                            class="btn btn-primary me-2">Edit <i
                                                class="ri-edit-line align-middle ms-1 lh-1"></i></a>
                                        <form action="{{ route('discounts.destroy', $discount->id) }}" method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this discount?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete <i
                                                    class="ri-delete-bin-line align-middle ms-1 lh-1"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
