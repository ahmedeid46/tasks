<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('super-admin.saas.section.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('super-admin.saas.section.client', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('super-admin.saas.section.feature', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('super-admin.saas.section.testimonial', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('footer-script'); ?>
    <script>
        $(document).ready(function () {
            const maxHeight = Math.max(...$('.planNameHead').map(function () {
                return $(this).height();
            }));

            $('.planNameHead').height(Math.round(maxHeight)).next('.planNameTitle').height(Math.round(maxHeight - 28));
        });

        function planShow(type) {
            $('#monthlyPlan').toggle(type === 'monthly');
            $('#annualPlan').toggle(type !== 'monthly');
        }

    </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('super-admin.layouts.saas-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\worksuite\resources\views/super-admin/saas/home.blade.php ENDPATH**/ ?>