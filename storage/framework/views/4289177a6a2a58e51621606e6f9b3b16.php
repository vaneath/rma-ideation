<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.dashboards'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('build/libs/jsvectormap/css/jsvectormap.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(URL::asset('build/libs/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 class="card-title mb-0 fs-24">Sections</h2>
                <a href="<?php echo e(route('sections.create')); ?>" class="btn btn-primary">New Section</a>
            </div>
        </div>
        <?php $__currentLoopData = $sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <div class="flex-grow-1">
                            <h5 class="card-title mb-0"><?php echo e($section->name); ?></h5>
                            <p class="card-text text-muted"><?php echo e($section->description); ?></p>
                        </div>
                        <div>
                            <a href="<?php echo e(route('discounts.create', ['section_id' => $section->id])); ?>" id="addRow"
                                class="btn btn-primary">
                                New Discount
                            </a>
                        </div>
                    </div>

                    <div class="row m-3">
                        <?php $__currentLoopData = $section->discounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $discount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card shadow-lg h-100">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-2">
                                            <h4 class="card-title mb-0 me-3"><?php echo e($discount->name); ?></h4>
                                            <span class="badge bg-warning fs-12 px-3 py-2">
                                                <?php if($discount->type == 'percent'): ?>
                                                    <?php echo e($discount->value); ?>% OFF
                                                <?php elseif($discount->type == 'fixed'): ?>
                                                    <?php echo e($discount->value); ?>$ OFF
                                                <?php endif; ?>
                                            </span>
                                        </div>
                                        <h6 class="card-subtitle font-14 text-success"><?php echo e($discount->point_cost); ?> points
                                        </h6>
                                    </div>
                                    <img class="img-fluid mx-auto object-fit-cover" src="<?php echo e($discount->image_url); ?>"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text"><?php echo e($discount->description); ?></p>
                                    </div>
                                    <div class="card-footer d-flex justify-content-end">
                                        <a href="<?php echo e(route('discounts.edit', $discount)); ?>"
                                            class="btn btn-primary me-2">Edit <i
                                                class="ri-edit-line align-middle ms-1 lh-1"></i></a>
                                        <form action="<?php echo e(route('discounts.destroy', $discount->id)); ?>" method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this discount?');">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-danger">Delete <i
                                                    class="ri-delete-bin-line align-middle ms-1 lh-1"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            <!--end col-->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php echo $__env->make('layouts.rma', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vaneath/projects/rma-ideation/resources/views/sections/index.blade.php ENDPATH**/ ?>