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
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('records.store') }}" method="POST" class="form-steps" autocomplete="off">
                        @csrf
                        @if ($errors->has('error'))
                            <div class="alert alert-danger">
                                {{ $errors->first('error') }}
                            </div>
                        @endif
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <div class="text-center pt-3 pb-4 mb-1 d-flex justify-content-center">
                            <img src="{{ URL::asset('build/images/rma.png') }}" class="card-logo" alt="RMA"
                                height="17">
                        </div>

                        <!-- Navigation between steps -->
                        <div class="step-arrow-nav mb-4">
                            <ul class="nav nav-pills custom-nav nav-justified" role="tablist">
                                <li class="nav-item d-flex align-items-center justify-content-center" role="presentation">
                                    <button class="nav-link active" id="personal-info-tab" data-bs-toggle="pill"
                                        data-bs-target="#personal-info" type="button" role="tab"
                                        aria-controls="personal-info" aria-selected="true">
                                        Personal Information
                                    </button>
                                </li>
                                <li class="nav-item d-flex align-items-center justify-content-center" role="presentation">
                                    <button class="nav-link disabled" id="car-info-tab" data-bs-toggle="pill"
                                        data-bs-target="#car-info" type="button" role="tab" aria-controls="car-info"
                                        aria-selected="false">
                                        Vehicle Information
                                    </button>
                                </li>
                            </ul>
                        </div>

                        <!-- Step content -->
                        <div class="tab-content">
                            <!-- Personal Information -->
                            <div class="tab-pane fade show active" id="personal-info" role="tabpanel"
                                aria-labelledby="personal-info-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="district-input" class="form-label">District <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-control @error('district') is-invalid @enderror"
                                                id="district-input" name="district" required>
                                                <option value="Daun Penh"
                                                    {{ old('district') == 'Daun Penh' ? 'selected' : '' }}>Daun Penh
                                                </option>
                                                <option value="Chamkar Mon"
                                                    {{ old('district') == 'Chamkar Mon' ? 'selected' : '' }}>Chamkar Mon
                                                </option>
                                                <option value="Tuol Kork"
                                                    {{ old('district') == 'Tuol Kork' ? 'selected' : '' }}>Tuol Kork
                                                </option>
                                                <option value="Prampi Makara"
                                                    {{ old('district') == 'Prampi Makara' ? 'selected' : '' }}>Prampi Makara
                                                </option>
                                                <option value="Dangkao"
                                                    {{ old('district') == 'Dangkao' ? 'selected' : '' }}>Dangkao</option>
                                                <option value="Mean Chey"
                                                    {{ old('district') == 'Mean Chey' ? 'selected' : '' }}>Mean Chey
                                                </option>
                                                <option value="Russey Keo"
                                                    {{ old('district') == 'Russey Keo' ? 'selected' : '' }}>Russey Keo
                                                </option>
                                                <option value="Sen Sok"
                                                    {{ old('district') == 'Sen Sok' ? 'selected' : '' }}>Sen Sok</option>
                                                <option value="Pur Senchey"
                                                    {{ old('district') == 'Pur Senchey' ? 'selected' : '' }}>Pur Senchey
                                                </option>
                                                <option value="Chbar Ampov"
                                                    {{ old('district') == 'Chbar Ampov' ? 'selected' : '' }}>Chbar Ampov
                                                </option>
                                                <option value="Boeng Keng Kang"
                                                    {{ old('district') == 'Boeng Keng Kang' ? 'selected' : '' }}>Boeng Keng
                                                    Kang</option>
                                                <option value="Chroy Changvar"
                                                    {{ old('district') == 'Chroy Changvar' ? 'selected' : '' }}>Chroy
                                                    Changvar</option>
                                            </select>
                                            @error('district')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div><!-- end col -->

                                    <!-- Driving Purpose -->
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="driving-purpose-input" class="form-label">Driving Purpose <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-control @error('driving_purpose') is-invalid @enderror"
                                                id="driving-purpose-input" name="driving_purpose" required>
                                                <option value="Work/School"
                                                    {{ old('driving_purpose') == 'Work/School' ? 'selected' : '' }}>
                                                    Work/School</option>
                                                <option value="Travel"
                                                    {{ old('driving_purpose') == 'Travel' ? 'selected' : '' }}>Travel
                                                </option>
                                                <option value="Vacation"
                                                    {{ old('driving_purpose') == 'Vacation' ? 'selected' : '' }}>Vacation
                                                </option>
                                                <option value="Shopping"
                                                    {{ old('driving_purpose') == 'Shopping' ? 'selected' : '' }}>Shopping
                                                </option>
                                                <option value="Family Trip"
                                                    {{ old('driving_purpose') == 'Family Trip' ? 'selected' : '' }}>Family
                                                    Trip</option>
                                                <option value="Pick Up"
                                                    {{ old('driving_purpose') == 'Pick Up' ? 'selected' : '' }}>Pick Up
                                                </option>
                                                <option value="Delivery"
                                                    {{ old('driving_purpose') == 'Delivery' ? 'selected' : '' }}>Delivery
                                                </option>
                                                <option value="Other"
                                                    {{ old('driving_purpose') == 'Other' ? 'selected' : '' }}>Other
                                                </option>
                                            </select>
                                            @error('driving_purpose')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div> <!-- end col -->

                                    <!-- Driving Frequency -->
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="driving-frequency-input" class="form-label">Driving Frequency <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-control @error('driving_frequency') is-invalid @enderror"
                                                id="driving-frequency-input" name="driving_frequency" required>
                                                <option value="Daily"
                                                    {{ old('driving_frequency') == 'Daily' ? 'selected' : '' }}>Daily
                                                </option>
                                                <option value="Once in a week"
                                                    {{ old('driving_frequency') == 'Once in a week' ? 'selected' : '' }}>
                                                    Once in a week</option>
                                                <option value="Several times a week"
                                                    {{ old('driving_frequency') == 'Several times a week' ? 'selected' : '' }}>
                                                    Several times a week</option>
                                                <option value="A few times per month"
                                                    {{ old('driving_frequency') == 'A few times per month' ? 'selected' : '' }}>
                                                    A few times per month</option>
                                                <option value="Rarely"
                                                    {{ old('driving_frequency') == 'Rarely' ? 'selected' : '' }}>Rarely
                                                </option>
                                            </select>
                                            @error('driving_frequency')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div> <!-- end col -->

                                    <!-- Favorite Car Feature -->
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="favorite-car-feature-input" class="form-label">Favorite Car
                                                Feature <span class="text-danger">*</span></label>
                                            <select
                                                class="form-control @error('favorite_car_feature') is-invalid @enderror"
                                                id="favorite-car-feature-input" name="favorite_car_feature" required>
                                                <option value="Color"
                                                    {{ old('favorite_car_feature') == 'Color' ? 'selected' : '' }}>Color
                                                </option>
                                                <option value="Speed"
                                                    {{ old('favorite_car_feature') == 'Speed' ? 'selected' : '' }}>Speed
                                                </option>
                                                <option value="Fuel Efficiency"
                                                    {{ old('favorite_car_feature') == 'Fuel Efficiency' ? 'selected' : '' }}>
                                                    Fuel Efficiency</option>
                                                <option value="Comfort"
                                                    {{ old('favorite_car_feature') == 'Comfort' ? 'selected' : '' }}>
                                                    Comfort</option>
                                                <option value="Safety"
                                                    {{ old('favorite_car_feature') == 'Safety' ? 'selected' : '' }}>Safety
                                                </option>
                                                <option value="Technology"
                                                    {{ old('favorite_car_feature') == 'Technology' ? 'selected' : '' }}>
                                                    Technology</option>
                                            </select>
                                            @error('favorite_car_feature')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div> <!-- end col -->
                                </div><!-- end row -->

                                <div class="d-flex align-items-start gap-3 mt-4">
                                    <button type="button" class="btn btn-success btn-label right ms-auto nexttab"
                                        data-nexttab="#car-info-tab">
                                        <i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>
                                        Go to Car Information
                                    </button>
                                </div>
                            </div>
                            <!-- end Personal Information -->

                            <!-- Car Information -->
                            <div class="tab-pane fade" id="car-info" role="tabpanel" aria-labelledby="car-info-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="car-fuel-input" class="form-label">Car Fuel <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-control @error('car_fuel') is-invalid @enderror"
                                                id="car-fuel-input" name="car_fuel" required>
                                                <option value="Gasoline"
                                                    {{ old('car_fuel') == 'Gasoline' ? 'selected' : '' }}>Gasoline</option>
                                                <option value="Diesel"
                                                    {{ old('car_fuel') == 'Diesel' ? 'selected' : '' }}>
                                                    Diesel</option>
                                                <option value="Electric"
                                                    {{ old('car_fuel') == 'Electric' ? 'selected' : '' }}>Electric</option>
                                                <option value="Hybrid"
                                                    {{ old('car_fuel') == 'Hybrid' ? 'selected' : '' }}>
                                                    Hybrid</option>
                                            </select>
                                            @error('car_fuel')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div><!-- end col -->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="car-type-input" class="form-label">Car Type <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-control @error('car_type') is-invalid @enderror"
                                                id="car-type-input" name="car_type" required>
                                                <option value="Sedan" {{ old('car_type') == 'Sedan' ? 'selected' : '' }}>
                                                    Sedan</option>
                                                <option value="SUV" {{ old('car_type') == 'SUV' ? 'selected' : '' }}>
                                                    SUV</option>
                                                <option value="Truck" {{ old('car_type') == 'Truck' ? 'selected' : '' }}>
                                                    Truck</option>
                                                <option value="Van" {{ old('car_type') == 'Van' ? 'selected' : '' }}>
                                                    Van</option>
                                                <option value="Sports"
                                                    {{ old('car_type') == 'Sports' ? 'selected' : '' }}>Sports</option>
                                            </select>
                                            @error('car_type')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div><!-- end col -->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="car-make-input" class="form-label">Car Make <span
                                                    class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control @error('car_make') is-invalid @enderror"
                                                id="car-make-input" name="car_make" value="{{ old('car_make') }}"
                                                placeholder="Toyota" required>
                                            @error('car_make')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div><!-- end col -->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="car-model-input" class="form-label">Car Model <span
                                                    class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control @error('car_model') is-invalid @enderror"
                                                id="car-model-input" name="car_model" value="{{ old('car_model') }}"
                                                placeholder="Prius" required>
                                            @error('car_model')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div><!-- end col -->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="car-year-input" class="form-label">Car Year <span
                                                    class="text-danger">*</span></label>
                                            <input type="number" min="1886" max="2025"
                                                class="form-control @error('car_year') is-invalid @enderror"
                                                id="car-year-input" name="car_year" value="{{ old('car_year') }}"
                                                placeholder="2010" required>
                                            @error('car_year')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div><!-- end col -->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="car-color-input" class="form-label">Car Color <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-control @error('car_color') is-invalid @enderror"
                                                id="car-color-input" name="car_color" required>
                                                <option value="Black"
                                                    {{ old('car_color') == 'Black' ? 'selected' : '' }}>Black</option>
                                                <option value="White"
                                                    {{ old('car_color') == 'White' ? 'selected' : '' }}>White</option>
                                                <option value="Silver"
                                                    {{ old('car_color') == 'Silver' ? 'selected' : '' }}>Silver</option>
                                                <option value="Red" {{ old('car_color') == 'Red' ? 'selected' : '' }}>
                                                    Red</option>
                                                <option value="Blue" {{ old('car_color') == 'Blue' ? 'selected' : '' }}>
                                                    Blue</option>
                                                <option value="Green"
                                                    {{ old('car_color') == 'Green' ? 'selected' : '' }}>Green</option>
                                                <option value="Yellow"
                                                    {{ old('car_color') == 'Yellow' ? 'selected' : '' }}>Yellow</option>
                                                <option value="Orange"
                                                    {{ old('car_color') == 'Orange' ? 'selected' : '' }}>Orange</option>
                                                <option value="Purple"
                                                    {{ old('car_color') == 'Purple' ? 'selected' : '' }}>Purple</option>
                                                <option value="Brown"
                                                    {{ old('car_color') == 'Brown' ? 'selected' : '' }}>Brown</option>
                                                <option value="Gray" {{ old('car_color') == 'Gray' ? 'selected' : '' }}>
                                                    Gray</option>
                                                <option value="Pink" {{ old('car_color') == 'Pink' ? 'selected' : '' }}>
                                                    Pink</option>
                                            </select>
                                            @error('car_color')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div><!-- end col -->
                                </div><!-- end row -->

                                <div class="d-flex align-items-start gap-3 mt-4">
                                    <button type="button" class="btn btn-light btn-label previestab"
                                        data-previous="#personal-info-tab">
                                        <i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i>
                                        Back
                                    </button>

                                    <button type="submit" class="btn btn-success btn-label right ms-auto">
                                        <i class="ri-check-line label-icon align-middle fs-16 ms-2"></i>
                                        Submit
                                    </button>
                                </div>
                            </div>
                            <!-- end Car Information -->
                        </div>
                    </form>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/jsvectormap/maps/world-merc.js') }}"></script>
    <script src="{{ URL::asset('build/libs/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/pages/dashboard-ecommerce.init.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>

    <!-- Script to handle tab navigation -->
    <script>
        function validateTab(tabId) {
            const currentTab = document.querySelector(tabId);
            const requiredFields = currentTab.querySelectorAll('[required]');
            let allFilled = true;

            requiredFields.forEach(field => {
                if (!field.value) {
                    allFilled = false;
                    field.classList.add('is-invalid');
                } else {
                    field.classList.remove('is-invalid');
                }
            });

            return allFilled;
        }

        document.querySelectorAll('.nexttab').forEach(button => {
            button.addEventListener('click', (e) => {
                const currentTabId = `#${e.currentTarget.closest('.tab-pane').id}`;
                if (validateTab(currentTabId)) {
                    const nextTab = e.currentTarget.getAttribute('data-nexttab');
                    const nextTabElement = document.querySelector(nextTab);
                    const tab = new bootstrap.Tab(nextTabElement);
                    tab.show();
                    document.querySelector(nextTab).classList.remove('disabled');
                }
            });
        });

        document.querySelectorAll('.previestab').forEach(button => {
            button.addEventListener('click', (e) => {
                const previousTab = e.currentTarget.getAttribute('data-previous');
                const previousTabElement = document.querySelector(previousTab);
                const tab = new bootstrap.Tab(previousTabElement);
                tab.show();
            });
        });

        document.querySelectorAll('.nav-link').forEach(tab => {
            tab.addEventListener('click', (e) => {
                const targetTabId = e.currentTarget.getAttribute('data-bs-target');
                const currentTabId = `#${document.querySelector('.tab-pane.active').id}`;
                if (!validateTab(currentTabId)) {
                    e.preventDefault();
                    e.stopPropagation();
                }
            });
        });
    </script>
@endsection
