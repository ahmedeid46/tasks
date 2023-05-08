<section class="cta-section position-relative">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-12 mb-30">
                <h3 class="mb-4"><?php echo e($trFrontDetail->cta_title); ?></h3>
                <p class="mr-lg-5 pr-lg-5 mb-0"><?php echo e($trFrontDetail->cta_detail); ?></p>
            </div>
            <?php if($setting->enable_register == true): ?>
            <div class="col-lg-3 offset-lg-1 text-lg-right col-12 mb-30">
                <a href="<?php echo e(route('front.signup.index')); ?>" class="btn btn-custom btn-lg wow pulse" data-wow-delay="0.4s">
                    <?php echo e($frontMenu->get_start); ?></a>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php /**PATH C:\laragon\www\worksuite\resources\views/super-admin/saas/section/cta.blade.php ENDPATH**/ ?>