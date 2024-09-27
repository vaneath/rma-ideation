<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.dashboards'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('build/libs/jsvectormap/css/jsvectormap.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(URL::asset('build/libs/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="card p-3">
            <div class="card-header d-flex align-items-center mb-3">
                <h5 class="card-title mb-0 flex-grow-1">New Discount</h5>
            </div>
            <form action="<?php echo e(route('discounts.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="section_id" value="<?php echo e(request()->query('section_id')); ?>">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="nameInput" class="form-label">Name</label>
                            <input type="text" class="form-control" id="nameInput" name="name"
                                placeholder="Enter discount name">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="imageUrlInput" class="form-label">Image Url</label>
                            <input type="text" class="form-control" id="imageUrlInput" name="image_url"
                                placeholder="Image Url">
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="typeInput" class="form-label">Type</label>
                            <select class="form-control" id="typeInput" name="type">
                                <option value="percent">Percent</option>
                                <option value="fixed">Fixed</option>
                            </select>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="valueInput" class="form-label">Value</label>
                            <input type="number" class="form-control" id="valueInput" name="value"
                                placeholder="Enter discount value">
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="pointCostInput" class="form-label">Point Cost</label>
                            <input type="number" class="form-control" id="pointCostInput" name="point_cost"
                                placeholder="Enter point cost">
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="quantityInput" class="form-label">Quantity</label>
                            <input type="number" class="form-control" id="quantityInput" name="quantity"
                                placeholder="Enter quantity">
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="descriptionInput" class="form-label mb-2">Description</label>
                            <textarea class="form-control" id="descriptionInput" name="description" placeholder="Enter description" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <!--end row-->
                <button type="submit" class="btn btn-primary">Create Discount</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <!-- apexcharts -->
    <script src="<?php echo e(URL::asset('build/libs/apexcharts/apexcharts.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/jsvectormap/js/jsvectormap.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/jsvectormap/maps/world-merc.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/swiper/swiper-bundle.min.js')); ?>"></script>
    <!-- dashboard init -->
    <script src="<?php echo e(URL::asset('build/js/pages/dashboard-ecommerce.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/js/app.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.rma', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vaneath/projects/rma-ideation/resources/views/discounts/create.blade.php ENDPATH**/ ?>