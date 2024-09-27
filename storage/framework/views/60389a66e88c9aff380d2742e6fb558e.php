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
                            <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="text-center">
                                    <td><?php echo e($record->id); ?></td>
                                    <td><?php echo e($record->district); ?></td>
                                    <td><?php echo e($record->driving_purpose); ?></td>
                                    <td><?php echo e($record->driving_frequency); ?></td>
                                    <td><?php echo e($record->favorite_car_feature); ?></td>
                                    <td><?php echo e($record->car_fuel); ?></td>
                                    <td><?php echo e($record->car_type); ?></td>
                                    <td><?php echo e($record->car_make); ?></td>
                                    <td><?php echo e($record->car_model); ?></td>
                                    <td><?php echo e($record->car_color); ?></td>
                                    <td><?php echo e($record->car_year); ?></td>
                                    <td>
                                        <?php if($record->review_status == 'Pending'): ?>
                                            <span class="badge bg-warning">Pending</span>
                                        <?php elseif($record->review_status == 'Approved'): ?>
                                            <span class="badge bg-success">Approved</span>
                                        <?php elseif($record->review_status == 'Rejected'): ?>
                                            <span class="badge bg-danger">Rejected</span>
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo e($record->created_at); ?></td>
                                    <td>
                                        <div class="dropdown d-inline-block">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a href="<?php echo e(route('records.show', $record)); ?>" class="dropdown-item"><i
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
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
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

<?php echo $__env->make('layouts.rma', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vaneath/projects/rma-ideation/resources/views/records/index.blade.php ENDPATH**/ ?>