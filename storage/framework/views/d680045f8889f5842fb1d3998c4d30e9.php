<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.dashboards'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('build/libs/jsvectormap/css/jsvectormap.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(URL::asset('build/libs/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1 overflow-hidden">
                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> My Points</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">
                                <span class="counter-value" data-target="165"><?php echo e(auth()->user()->points); ?></span> points
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

        <?php if(auth()->user()->records->isEmpty()): ?>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary">
                    <div class="card-body p-0">
                        <div class="alert alert-success rounded-top alert-solid alert-label-icon border-0 rounded-0 m-0 d-flex align-items-center"
                            role="alert">
                            <i class="ri-error-warning-line label-icon"></i>
                            <div class="flex-grow-1 text-truncate">
                                Earn you up to 100 points
                            </div>
                        </div>

                        <div class="row align-items-end p-3">
                            <p class="fs-16 text-white mr-3">
                                Doing this quick survey will earn you up to
                                <b>100points</b>
                                <i class="mdi mdi-arrow-right"></i>
                            </p>
                            <div class="mt-3 d-flex justify-content-end">
                                <a href="<?php echo e(route('records.create')); ?>" class="btn btn-info">Start Survey</a>
                            </div>
                        </div>
                    </div> <!-- end card-body-->
                </div>
            </div> <!-- end col-->
        <?php endif; ?>

        <?php if(auth()->user()->hasNullSpecificColumns()): ?>
            <div class="col-xl-3 col-md-6">
                <div class="card text-center p-3">
                    <div class="card-body">
                        <img src="<?php echo e(URL::asset('build/images/giftbox.png')); ?>" alt="">
                        <div class="mt-4">
                            <h5>Profile Completion</h5>
                            <p class="text-muted lh-base">Complete your profile to get 30 points.</p>
                            <a href="/pages-profile-settings" class="bg-primary text-white px-3 py-2 rounded-pill">
                                Complete Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php $__currentLoopData = $sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="mt-3">
                <div class="mb-3">
                    <h5 class="fs-16 mb-0 pb-1"><?php echo e($section->name); ?></h5>
                    <p class="mb-0 pb-1 mb-3 text-muted"><?php echo e($section->description); ?></p>
                </div>
                <div class="overflow-auto">
                    <div class="d-flex gap-3">
                        <?php $__currentLoopData = $section->discounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $discount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="card col-xl-3 col-md-6" style="min-width: 15rem;">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-2 gap-3">
                                        <h4 class="card-title"><?php echo e($discount->name); ?></h4>
                                        <span class="badge bg-warning fs-12 px-3 py-2">
                                            <?php if($discount->type == 'percent'): ?>
                                                <?php echo e($discount->value); ?>% OFF
                                            <?php elseif($discount->type == 'fixed'): ?>
                                                <?php echo e($discount->value); ?>$ OFF
                                            <?php endif; ?>
                                        </span>
                                    </div>
                                    <h6 class="card-subtitle font-14 text-success"><?php echo e($discount->point_cost); ?> points</h6>
                                </div>
                                <img class="img-fluid mx-auto object-fit-cover" src="<?php echo e($discount->image_url); ?>"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text"><?php echo e($discount->description); ?></p>
                                </div>
                                <div class="card-footer">
                                    <a href="javascript:void(0);" class="card-link link-success">Favorite <i
                                            class="ri-bookmark-line align-middle ms-1 lh-1"></i></a>
                                    <a href="javascript:void(0);" class="card-link link-secondary">Redeem <i
                                            class="ri-arrow-right-s-line ms-1 align-middle lh-1"></i></a>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
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

<?php echo $__env->make('layouts.rma', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vaneath/projects/rma-ideation/resources/views/wallets.blade.php ENDPATH**/ ?>