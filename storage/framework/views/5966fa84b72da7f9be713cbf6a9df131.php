<?php if($trFrontDetail->client_title ||$trFrontDetail->client_detail || $frontClients->count()>0): ?>
    <div class="clients bg-light">
        <div class="container">
            <div class="row align-items-center">
                <?php if($trFrontDetail->client_title ||$trFrontDetail->client_detail): ?>
                    <div class="col-12 mb-30 text-center">
                        <p class="c-blue mb-2"><?php echo e($trFrontDetail->client_title); ?></p>
                        <h4><?php echo e($trFrontDetail->client_detail); ?></h4>

                    </div>
                <?php endif; ?>
                <?php if($frontClients->count()>0): ?>
                    <div class="col-12">
                        <div class="client-slider" id="client-slider">
                            <?php $__currentLoopData = $frontClients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $frontClient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="client-img">
                                    <div class="img-holder">
                                        <img src="<?php echo e($frontClient->image_url); ?>" alt="partner">
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php /**PATH C:\laragon\www\worksuite\resources\views/super-admin/saas/section/client.blade.php ENDPATH**/ ?>