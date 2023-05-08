<?php $__env->startPush('datatable-styles'); ?>
    <?php echo $__env->make('sections.datatable_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('filter-section'); ?>
    <!-- FILTER START -->
    <!-- PROJECT HEADER STARTmplete -->
    <div class="d-flex filter-box project-header bg-white">

        <div class="mobile-close-overlay w-100 h-100" id="close-client-overlay"></div>
        <div class="project-menu d-lg-flex" id="mob-client-detail">

            <a class="d-none close-it" href="javascript:;" id="close-client-detail">
                <i class="fa fa-times"></i>
            </a>

            <?php if (isset($component)) { $__componentOriginal4b0c45ee1a38bb46a01c2a25edd749ab = $component; } ?>
<?php $component = App\View\Components\Tab::resolve(['href' => route('superadmin.companies.show', $company->id),'text' => __('superadmin.company') . ' ' . __('app.details')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tab'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Tab::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'company']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4b0c45ee1a38bb46a01c2a25edd749ab)): ?>
<?php $component = $__componentOriginal4b0c45ee1a38bb46a01c2a25edd749ab; ?>
<?php unset($__componentOriginal4b0c45ee1a38bb46a01c2a25edd749ab); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginal4b0c45ee1a38bb46a01c2a25edd749ab = $component; } ?>
<?php $component = App\View\Components\Tab::resolve(['href' => route('superadmin.companies.show', $company->id).'?tab=billing','ajax' => 'false','text' => __('superadmin.menu.billing')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tab'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Tab::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'billing']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4b0c45ee1a38bb46a01c2a25edd749ab)): ?>
<?php $component = $__componentOriginal4b0c45ee1a38bb46a01c2a25edd749ab; ?>
<?php unset($__componentOriginal4b0c45ee1a38bb46a01c2a25edd749ab); ?>
<?php endif; ?>
        </div>

        <a class="mb-0 d-block d-lg-none text-dark-grey ml-auto mr-2 border-left-grey"
            onclick="openClientDetailSidebar()"><i class="fa fa-ellipsis-v "></i></a>

    </div>
    <!-- FILTER END -->
    <!-- PROJECT HEADER END -->

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <div class="content-wrapper border-top-0 client-detail-wrapper">
        <?php echo $__env->make($view, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        $("body").on("click", ".ajax-tab", function(event) {
            event.preventDefault();

            $('.project-menu .p-sub-menu').removeClass('active');
            $(this).addClass('active');


            const requestUrl = this.href;

            $.easyAjax({
                url: requestUrl,
                blockUI: true,
                container: ".content-wrapper",
                historyPush: true,
                success: function(response) {
                    if (response.status == "success") {
                        $('.content-wrapper').html(response.html);
                        init('.content-wrapper');
                    }
                }
            });
        });

    </script>
    <script>
        const activeTab = "<?php echo e($activeTab); ?>";
        $('.project-menu .' + activeTab).addClass('active');

    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\worksuite\resources\views/super-admin/companies/show.blade.php ENDPATH**/ ?>