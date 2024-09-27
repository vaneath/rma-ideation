<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.dashboards'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('build/libs/jsvectormap/css/jsvectormap.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(URL::asset('build/libs/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="product-content mt-2">
            <div class="d-flex align-items-center mb-3">
                <h5 class="fs-24 mb-0">Record Number <span class="text-primary"><?php echo e($record->id); ?></span></h5>
                <div class="fs-16 ms-3">
                    <?php if($record->review_status == 'Pending'): ?>
                        <span class="badge bg-warning">Pending</span>
                    <?php elseif($record->review_status == 'Approved'): ?>
                        <span class="badge bg-success">Approved</span>
                    <?php elseif($record->review_status == 'Rejected'): ?>
                        <span class="badge bg-danger">Rejected</span>
                    <?php endif; ?>
                </div>
            </div>
            <nav>
                <ul class="nav nav-tabs nav-tabs-custom nav-success" id="nav-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="nav-speci-tab" data-bs-toggle="tab" href="#nav-speci" role="tab"
                            aria-controls="nav-speci" aria-selected="true">Personal Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-detail-tab" data-bs-toggle="tab" href="#nav-detail" role="tab"
                            aria-controls="nav-detail" aria-selected="false">Vehicle Information</a>
                    </li>
                </ul>
            </nav>
            <div class="tab-content border border-top-0 p-4" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-speci" role="tabpanel" aria-labelledby="nav-speci-tab">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <tbody>
                                <tr>
                                    <th scope="row" style="width: 200px;">
                                        District</th>
                                    <td><?php echo e($record->district); ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"">
                                        Driving Purpose</th>
                                    <td><?php echo e($record->driving_purpose); ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"">
                                        Driving Frequency</th>
                                    <td><?php echo e($record->driving_frequency); ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"">
                                        Favorite Car Feature</th>
                                    <td><?php echo e($record->favorite_car_feature); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-detail" role="tabpanel" aria-labelledby="nav-detail-tab">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <tbody>
                                <tr>
                                    <th scope="row" style="width: 200px;">
                                        Car fuel</th>
                                    <td><?php echo e($record->car_fuel); ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"">
                                        Car Type</th>
                                    <td><?php echo e($record->car_type); ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"">
                                        Car Make</th>
                                    <td><?php echo e($record->car_make); ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"">
                                        Car Model</th>
                                    <td><?php echo e($record->car_model); ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"">
                                        Car Color</th>
                                    <td><?php echo e($record->car_color); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <?php if($record->review_status === 'Pending'): ?>
            <div class="mt-4 col-xl-4">
                <form action="<?php echo e(route('records.updateStatus', $record->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="form-group">
                        <label for="score">Data Quality Score:</label>
                        <select name="score" id="score" class="form-control">
                            <?php for($i = 1; $i <= 10; $i++): ?>
                                <option value="<?php echo e($i * 10); ?>"><?php echo e($i * 10); ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                    <div class="mt-3">
                        <button type="submit" name="action" value="approve" class="btn btn-success">Approve</button>
                        <button type="submit" name="action" value="reject" class="btn btn-danger">Reject</button>
                    </div>
                </form>
            </div>
    </div>
    <?php endif; ?>
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

<?php echo $__env->make('layouts.rma', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vaneath/projects/rma-ideation/resources/views/records/show.blade.php ENDPATH**/ ?>