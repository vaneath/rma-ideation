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
        <div class="card p-3">
            <div class="card-header d-flex align-items-center mb-3">
                <h5 class="card-title mb-0 flex-grow-1">Edit Discount</h5>
            </div>
            <form action="{{ route('discounts.update', $discount->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="nameInput" class="form-label">Name</label>
                            <input type="text" class="form-control" id="nameInput" name="name"
                                value="{{ $discount->name }}" placeholder="Enter discount name">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="imageUrlInput" class="form-label">Image Url</label>
                            <input type="text" class="form-control" id="imageUrlInput" name="image_url"
                                value="{{ $discount->image_url }}" placeholder="Image Url">
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="typeInput" class="form-label">Type</label>
                            <select class="form-control" id="typeInput" name="type">
                                <option value="percent" @if ($discount->type == 'percent') selected @endif>Percent</option>
                                <option value="fixed" @if ($discount->type == 'fixed') selected @endif>Fixed</option>
                            </select>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="valueInput" class="form-label">Value</label>
                            <input type="number" class="form-control" id="valueInput" name="value"
                                value="{{ $discount->value }}" placeholder="Enter discount value">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="pointCostInput" class="form-label">Point Cost</label>
                            <input type="number" class="form-control" id="pointCostInput" name="point_cost"
                                value="{{ $discount->point_cost }}" placeholder="Enter point cost">
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="quantityInput" class="form-label">Quantity</label>
                            <input type="number" class="form-control" id="quantityInput" name="quantity"
                                value="{{ $discount->quantity }}" placeholder="Enter quantity">
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="descriptionInput" class="form-label mb-2">Description</label>
                            <textarea class="form-control" id="descriptionInput" name="description" placeholder="Enter description" rows="3">{{ $discount->description }}</textarea>
                        </div>
                    </div>
                </div>
                <!--end row-->
                <button type="submit" class="btn btn-primary">Update Discount</button>
            </form>
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
