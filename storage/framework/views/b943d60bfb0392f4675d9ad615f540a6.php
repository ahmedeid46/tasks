<?php if(!empty($featureWithImages)): ?>
    <!-- START Saas Features -->
    <?php $__currentLoopData = $featureWithImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <section class="saas-features overflow-hidden">
            <div class="container">
                <?php if($loop->iteration % 2 == 0): ?>
                    <div class="sp-100">
                        <div class="row align-items-center">
                            <div class="col-lg-6 order-lg-1 wow fadeIn  d-lg-block" data-wow-delay="0.2s">
                                <div class="mock-img">
                                    <img src="<?php echo e($value->image_url); ?>" alt="mockup">
                                </div>
                            </div>
                            <div class="col-lg-6 pl-lg-5 order-lg-2">
                                <h3><?php echo e($value->title); ?></h3>
                                <p><?php echo $value->description; ?></p>
                            </div>
                        </div>
                    </div>

                <?php else: ?>
                    <div class="sp-100">
                        <div class="row align-items-center">
                            <div class="col-lg-6 pr-lg-5">
                                <h3><?php echo e($value->title); ?></h3>
                                <p><?php echo $value->description; ?></p>
                            </div>
                            <div class="col-lg-6 wow fadeIn  d-lg-block" data-wow-delay="0.2s">
                                <div class="mock-img">
                                    <img src="<?php echo e($value->image_url); ?>" alt="mockup">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<!-- END Saas Features -->
<?php if(sizeof($featureWithIcons) > 0): ?>
    <!-- START Features -->
    <section class="features bg-light sp-100-70">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="sec-title mb-60">
                        <h3><?php echo e($trFrontDetail->feature_title); ?></h3>
                        <p><?php echo e($trFrontDetail->feature_description); ?></p>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php $__currentLoopData = $featureWithIcons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $featureWithIcon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6 col-12 mb-30 wow fadeIn" data-wow-delay="0.2s">
                        <div class="feature-box bg-white br-5 text-center">
                            <span class="align-items-center d-inline-flex icon justify-content-center mx-auto">
                                <i class="<?php echo e($featureWithIcon->icon); ?>"></i>
                            </span>
                            <h5><?php echo e($featureWithIcon->title); ?></h5>
                            <p><?php echo $featureWithIcon->description; ?></p>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <!-- END Features -->
<?php endif; ?>

<?php /**PATH C:\laragon\www\worksuite\resources\views/super-admin/saas/section/feature.blade.php ENDPATH**/ ?>