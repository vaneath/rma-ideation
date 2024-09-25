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
        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1 overflow-hidden">
                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> My Point</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">
                                <span class="counter-value" data-target="165">0</span> points
                            </h4>
                            <a href="" class="text-decoration-underline">Get more points</a>
                        </div>
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-primary-subtle rounded fs-3">
                                <i class="bx bx-wallet text-primary"></i>
                            </span>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        {{-- Foods and Beverages --}}
        <div class="mt-3">
            <h5 class="mb-0 pb-1 mb-3 text-muted">Foods & Beverages</h5>
            <div class="overflow-auto">
                <div class="d-flex gap-3">
                    <!-- Card 1 -->
                    <div class="card col-xl-3 col-md-6" style="min-width: 15rem;">
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
                        <div class="card-footer">
                            <a href="javascript:void(0);" class="card-link link-success">Favorite <i
                                    class="ri-bookmark-line align-middle ms-1 lh-1"></i></a>
                            <a href="javascript:void(0);" class="card-link link-secondary">Read More <i
                                    class="ri-arrow-right-s-line ms-1 align-middle lh-1"></i></a>
                        </div>
                    </div>
                    <div class="card col-xl-3 col-md-6" style="min-width: 15rem;">
                        <div class="card-body">
                            <h4 class="card-title mb-2">Dairy Queen</h4>
                            <h6 class="card-subtitle font-14 text-success">50 points</h6>
                        </div>
                        <img class="img-fluid d-block mx-auto" src="{{ URL::asset('build/images/small/img-4.jpg') }}"
                            alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Objectively pursue diverse catalysts for change for interoperable
                                meta-services. Distinctively re-engineer revolutionary meta-services.</p>
                        </div>
                        <div class="card-footer">
                            <a href="javascript:void(0);" class="card-link link-success">Favorite <i
                                    class="ri-bookmark-line align-middle ms-1 lh-1"></i></a>
                            <a href="javascript:void(0);" class="card-link link-secondary">Read More <i
                                    class="ri-arrow-right-s-line ms-1 align-middle lh-1"></i></a>
                        </div>
                    </div>
                    <!-- Add more cards as needed -->
                </div>
            </div>
        </div>

        {{-- Car Services --}}
        <div class="mt-3">
            <h5 class="mb-0 pb-1 mb-3 text-muted">Car Services</h5>
            <div class="overflow-auto">
                <div class="d-flex gap-3">
                    <!-- Card 1 -->
                    <div class="card col-xl-3 col-md-6" style="min-width: 15rem">
                        <div class="card-body">
                            <h4 class="card-title mb-2">Total Energies</h4>
                            <h6 class="card-subtitle font-14 text-success">70 points</h6>
                        </div>
                        <img class="img-fluid d-block mx-auto" src="{{ URL::asset('build/images/total.png') }}"
                            width="100" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">TotalEnergies is a global integrated energy company that produces and
                                markets energies: oil and biofuels, natural gas and green gas.</p>
                        </div>
                        <div class="card-footer">
                            <a href="javascript:void(0);" class="card-link link-success">Favorite <i
                                    class="ri-bookmark-line align-middle ms-1 lh-1"></i></a>
                            <a href="javascript:void(0);" class="card-link link-secondary">Read More <i
                                    class="ri-arrow-right-s-line ms-1 align-middle lh-1"></i></a>
                        </div>
                    </div>
                    <div class="card col-xl-3 col-md-6" style="min-width: 15rem">
                        <div class="card-body">
                            <h4 class="card-title mb-2">Dairy Queen</h4>
                            <h6 class="card-subtitle font-14 text-success">50 points</h6>
                        </div>
                        <img class="img-fluid" src="{{ URL::asset('build/images/small/img-4.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Objectively pursue diverse catalysts for change for interoperable
                                meta-services. Distinctively re-engineer revolutionary meta-services.</p>
                        </div>
                        <div class="card-footer">
                            <a href="javascript:void(0);" class="card-link link-success">Favorite <i
                                    class="ri-bookmark-line align-middle ms-1 lh-1"></i></a>
                            <a href="javascript:void(0);" class="card-link link-secondary">Read More <i
                                    class="ri-arrow-right-s-line ms-1 align-middle lh-1"></i></a>
                        </div>
                    </div>
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
