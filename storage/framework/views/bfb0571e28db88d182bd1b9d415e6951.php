<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.dashboards'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('build/libs/jsvectormap/css/jsvectormap.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(URL::asset('build/libs/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo e(route('records.store')); ?>" method="POST" class="form-steps" autocomplete="off">
                        <?php echo csrf_field(); ?>
                        <?php if($errors->has('error')): ?>
                            <div class="alert alert-danger">
                                <?php echo e($errors->first('error')); ?>

                            </div>
                        <?php endif; ?>
                        <input type="hidden" name="user_id" value="<?php echo e(auth()->user()->id); ?>">
                        <div class="text-center pt-3 pb-4 mb-1 d-flex justify-content-center">
                            <img src="<?php echo e(URL::asset('build/images/rma.png')); ?>" class="card-logo" alt="RMA"
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
                                            <select class="form-control <?php $__errorArgs = ['district'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                id="district-input" name="district" required>
                                                <option value="Daun Penh"
                                                    <?php echo e(old('district') == 'Daun Penh' ? 'selected' : ''); ?>>Daun Penh
                                                </option>
                                                <option value="Chamkar Mon"
                                                    <?php echo e(old('district') == 'Chamkar Mon' ? 'selected' : ''); ?>>Chamkar Mon
                                                </option>
                                                <option value="Tuol Kork"
                                                    <?php echo e(old('district') == 'Tuol Kork' ? 'selected' : ''); ?>>Tuol Kork
                                                </option>
                                                <option value="Prampi Makara"
                                                    <?php echo e(old('district') == 'Prampi Makara' ? 'selected' : ''); ?>>Prampi Makara
                                                </option>
                                                <option value="Dangkao"
                                                    <?php echo e(old('district') == 'Dangkao' ? 'selected' : ''); ?>>Dangkao</option>
                                                <option value="Mean Chey"
                                                    <?php echo e(old('district') == 'Mean Chey' ? 'selected' : ''); ?>>Mean Chey
                                                </option>
                                                <option value="Russey Keo"
                                                    <?php echo e(old('district') == 'Russey Keo' ? 'selected' : ''); ?>>Russey Keo
                                                </option>
                                                <option value="Sen Sok"
                                                    <?php echo e(old('district') == 'Sen Sok' ? 'selected' : ''); ?>>Sen Sok</option>
                                                <option value="Pur Senchey"
                                                    <?php echo e(old('district') == 'Pur Senchey' ? 'selected' : ''); ?>>Pur Senchey
                                                </option>
                                                <option value="Chbar Ampov"
                                                    <?php echo e(old('district') == 'Chbar Ampov' ? 'selected' : ''); ?>>Chbar Ampov
                                                </option>
                                                <option value="Boeng Keng Kang"
                                                    <?php echo e(old('district') == 'Boeng Keng Kang' ? 'selected' : ''); ?>>Boeng Keng
                                                    Kang</option>
                                                <option value="Chroy Changvar"
                                                    <?php echo e(old('district') == 'Chroy Changvar' ? 'selected' : ''); ?>>Chroy
                                                    Changvar</option>
                                            </select>
                                            <?php $__errorArgs = ['district'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div><!-- end col -->

                                    <!-- Driving Purpose -->
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="driving-purpose-input" class="form-label">Driving Purpose <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-control <?php $__errorArgs = ['driving_purpose'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                id="driving-purpose-input" name="driving_purpose" required>
                                                <option value="Work/School"
                                                    <?php echo e(old('driving_purpose') == 'Work/School' ? 'selected' : ''); ?>>
                                                    Work/School</option>
                                                <option value="Travel"
                                                    <?php echo e(old('driving_purpose') == 'Travel' ? 'selected' : ''); ?>>Travel
                                                </option>
                                                <option value="Vacation"
                                                    <?php echo e(old('driving_purpose') == 'Vacation' ? 'selected' : ''); ?>>Vacation
                                                </option>
                                                <option value="Shopping"
                                                    <?php echo e(old('driving_purpose') == 'Shopping' ? 'selected' : ''); ?>>Shopping
                                                </option>
                                                <option value="Family Trip"
                                                    <?php echo e(old('driving_purpose') == 'Family Trip' ? 'selected' : ''); ?>>Family
                                                    Trip</option>
                                                <option value="Pick Up"
                                                    <?php echo e(old('driving_purpose') == 'Pick Up' ? 'selected' : ''); ?>>Pick Up
                                                </option>
                                                <option value="Delivery"
                                                    <?php echo e(old('driving_purpose') == 'Delivery' ? 'selected' : ''); ?>>Delivery
                                                </option>
                                                <option value="Other"
                                                    <?php echo e(old('driving_purpose') == 'Other' ? 'selected' : ''); ?>>Other
                                                </option>
                                            </select>
                                            <?php $__errorArgs = ['driving_purpose'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div> <!-- end col -->

                                    <!-- Driving Frequency -->
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="driving-frequency-input" class="form-label">Driving Frequency <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-control <?php $__errorArgs = ['driving_frequency'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                id="driving-frequency-input" name="driving_frequency" required>
                                                <option value="Daily"
                                                    <?php echo e(old('driving_frequency') == 'Daily' ? 'selected' : ''); ?>>Daily
                                                </option>
                                                <option value="Once in a week"
                                                    <?php echo e(old('driving_frequency') == 'Once in a week' ? 'selected' : ''); ?>>
                                                    Once in a week</option>
                                                <option value="Several times a week"
                                                    <?php echo e(old('driving_frequency') == 'Several times a week' ? 'selected' : ''); ?>>
                                                    Several times a week</option>
                                                <option value="A few times per month"
                                                    <?php echo e(old('driving_frequency') == 'A few times per month' ? 'selected' : ''); ?>>
                                                    A few times per month</option>
                                                <option value="Rarely"
                                                    <?php echo e(old('driving_frequency') == 'Rarely' ? 'selected' : ''); ?>>Rarely
                                                </option>
                                            </select>
                                            <?php $__errorArgs = ['driving_frequency'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div> <!-- end col -->

                                    <!-- Favorite Car Feature -->
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="favorite-car-feature-input" class="form-label">Favorite Car
                                                Feature <span class="text-danger">*</span></label>
                                            <select
                                                class="form-control <?php $__errorArgs = ['favorite_car_feature'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                id="favorite-car-feature-input" name="favorite_car_feature" required>
                                                <option value="Color"
                                                    <?php echo e(old('favorite_car_feature') == 'Color' ? 'selected' : ''); ?>>Color
                                                </option>
                                                <option value="Speed"
                                                    <?php echo e(old('favorite_car_feature') == 'Speed' ? 'selected' : ''); ?>>Speed
                                                </option>
                                                <option value="Fuel Efficiency"
                                                    <?php echo e(old('favorite_car_feature') == 'Fuel Efficiency' ? 'selected' : ''); ?>>
                                                    Fuel Efficiency</option>
                                                <option value="Comfort"
                                                    <?php echo e(old('favorite_car_feature') == 'Comfort' ? 'selected' : ''); ?>>
                                                    Comfort</option>
                                                <option value="Safety"
                                                    <?php echo e(old('favorite_car_feature') == 'Safety' ? 'selected' : ''); ?>>Safety
                                                </option>
                                                <option value="Technology"
                                                    <?php echo e(old('favorite_car_feature') == 'Technology' ? 'selected' : ''); ?>>
                                                    Technology</option>
                                            </select>
                                            <?php $__errorArgs = ['favorite_car_feature'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
                                            <select class="form-control <?php $__errorArgs = ['car_fuel'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                id="car-fuel-input" name="car_fuel" required>
                                                <option value="Gasoline"
                                                    <?php echo e(old('car_fuel') == 'Gasoline' ? 'selected' : ''); ?>>Gasoline</option>
                                                <option value="Diesel"
                                                    <?php echo e(old('car_fuel') == 'Diesel' ? 'selected' : ''); ?>>
                                                    Diesel</option>
                                                <option value="Electric"
                                                    <?php echo e(old('car_fuel') == 'Electric' ? 'selected' : ''); ?>>Electric</option>
                                                <option value="Hybrid"
                                                    <?php echo e(old('car_fuel') == 'Hybrid' ? 'selected' : ''); ?>>
                                                    Hybrid</option>
                                            </select>
                                            <?php $__errorArgs = ['car_fuel'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div><!-- end col -->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="car-type-input" class="form-label">Car Type <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-control <?php $__errorArgs = ['car_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                id="car-type-input" name="car_type" required>
                                                <option value="Sedan" <?php echo e(old('car_type') == 'Sedan' ? 'selected' : ''); ?>>
                                                    Sedan</option>
                                                <option value="SUV" <?php echo e(old('car_type') == 'SUV' ? 'selected' : ''); ?>>
                                                    SUV</option>
                                                <option value="Truck" <?php echo e(old('car_type') == 'Truck' ? 'selected' : ''); ?>>
                                                    Truck</option>
                                                <option value="Van" <?php echo e(old('car_type') == 'Van' ? 'selected' : ''); ?>>
                                                    Van</option>
                                                <option value="Sports"
                                                    <?php echo e(old('car_type') == 'Sports' ? 'selected' : ''); ?>>Sports</option>
                                            </select>
                                            <?php $__errorArgs = ['car_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div><!-- end col -->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="car-make-input" class="form-label">Car Make <span
                                                    class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control <?php $__errorArgs = ['car_make'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                id="car-make-input" name="car_make" value="<?php echo e(old('car_make')); ?>"
                                                placeholder="Toyota" required>
                                            <?php $__errorArgs = ['car_make'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div><!-- end col -->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="car-model-input" class="form-label">Car Model <span
                                                    class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control <?php $__errorArgs = ['car_model'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                id="car-model-input" name="car_model" value="<?php echo e(old('car_model')); ?>"
                                                placeholder="Prius" required>
                                            <?php $__errorArgs = ['car_model'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div><!-- end col -->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="car-year-input" class="form-label">Car Year <span
                                                    class="text-danger">*</span></label>
                                            <input type="number" min="1886" max="2025"
                                                class="form-control <?php $__errorArgs = ['car_year'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                id="car-year-input" name="car_year" value="<?php echo e(old('car_year')); ?>"
                                                placeholder="2010" required>
                                            <?php $__errorArgs = ['car_year'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div><!-- end col -->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="car-color-input" class="form-label">Car Color <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-control <?php $__errorArgs = ['car_color'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                id="car-color-input" name="car_color" required>
                                                <option value="Black"
                                                    <?php echo e(old('car_color') == 'Black' ? 'selected' : ''); ?>>Black</option>
                                                <option value="White"
                                                    <?php echo e(old('car_color') == 'White' ? 'selected' : ''); ?>>White</option>
                                                <option value="Silver"
                                                    <?php echo e(old('car_color') == 'Silver' ? 'selected' : ''); ?>>Silver</option>
                                                <option value="Red" <?php echo e(old('car_color') == 'Red' ? 'selected' : ''); ?>>
                                                    Red</option>
                                                <option value="Blue" <?php echo e(old('car_color') == 'Blue' ? 'selected' : ''); ?>>
                                                    Blue</option>
                                                <option value="Green"
                                                    <?php echo e(old('car_color') == 'Green' ? 'selected' : ''); ?>>Green</option>
                                                <option value="Yellow"
                                                    <?php echo e(old('car_color') == 'Yellow' ? 'selected' : ''); ?>>Yellow</option>
                                                <option value="Orange"
                                                    <?php echo e(old('car_color') == 'Orange' ? 'selected' : ''); ?>>Orange</option>
                                                <option value="Purple"
                                                    <?php echo e(old('car_color') == 'Purple' ? 'selected' : ''); ?>>Purple</option>
                                                <option value="Brown"
                                                    <?php echo e(old('car_color') == 'Brown' ? 'selected' : ''); ?>>Brown</option>
                                                <option value="Gray" <?php echo e(old('car_color') == 'Gray' ? 'selected' : ''); ?>>
                                                    Gray</option>
                                                <option value="Pink" <?php echo e(old('car_color') == 'Pink' ? 'selected' : ''); ?>>
                                                    Pink</option>
                                            </select>
                                            <?php $__errorArgs = ['car_color'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('build/libs/apexcharts/apexcharts.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/jsvectormap/js/jsvectormap.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/jsvectormap/maps/world-merc.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/swiper/swiper-bundle.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/js/pages/dashboard-ecommerce.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/js/app.js')); ?>"></script>

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.rma', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vaneath/projects/rma-ideation/resources/views/records/create.blade.php ENDPATH**/ ?>