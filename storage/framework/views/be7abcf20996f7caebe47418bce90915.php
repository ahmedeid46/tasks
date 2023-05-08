<?php $__env->startPush('datatable-styles'); ?>
    <?php echo $__env->make('sections.datatable_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('filter-section'); ?>

    <?php if (isset($component)) { $__componentOriginald1a72e1108842d163a80559e15f530b4 = $component; } ?>
<?php $component = App\View\Components\Filters\FilterBox::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filters.filter-box'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Filters\FilterBox::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
         <!-- DATE START -->
         <div class="select-box d-flex pr-2 border-right-grey border-right-grey-sm-0">
            <p class="mb-0 pr-2 f-14 text-dark-grey d-flex align-items-center"><?php echo app('translator')->get('app.duration'); ?></p>
            <div class="select-status d-flex">
                <input type="text" class="position-relative text-dark form-control my-2 text-left f-14  p-1 border-additional-grey"
                    id="datatableRange" placeholder="<?php echo app('translator')->get('placeholders.dateRange'); ?>">
            </div>
        </div>
        <!-- DATE END -->

        <!-- SEARCH BY TASK START -->
        <div class="task-search d-flex py-1 pr-lg-3 px-lg-2 px-md-2 px-0 border-right-grey align-items-center">
            <form class="w-100 mr-1 mr-lg-0 mr-md-1 ml-md-1 ml-0 ml-lg-0">
                <div class="input-group bg-grey rounded">
                    <div class="input-group-prepend">
                        <span class="input-group-text border-0 bg-additional-grey">
                            <i class="fa fa-search f-13 text-dark-grey"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control f-14 p-1 border-additional-grey" id="search-text-field"
                           placeholder="<?php echo app('translator')->get('app.startTyping'); ?>">
                </div>
            </form>
        </div>
        <!-- SEARCH BY TASK END -->

        <!-- RESET START -->
        <div class="select-box d-flex py-1 px-lg-2 px-md-2 px-0">
            <?php if (isset($component)) { $__componentOriginal5e57c6582b8a883148a28bb7ee46d2ad = $component; } ?>
<?php $component = App\View\Components\Forms\ButtonSecondary::resolve(['icon' => 'times-circle'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.button-secondary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\ButtonSecondary::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'btn-xs d-none','id' => 'reset-filters']); ?>
                <?php echo app('translator')->get('app.clearFilters'); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5e57c6582b8a883148a28bb7ee46d2ad)): ?>
<?php $component = $__componentOriginal5e57c6582b8a883148a28bb7ee46d2ad; ?>
<?php unset($__componentOriginal5e57c6582b8a883148a28bb7ee46d2ad); ?>
<?php endif; ?>
        </div>
        <!-- RESET END -->

        <!-- MORE FILTERS START -->
        <?php if (isset($component)) { $__componentOriginala4acb898aa829ce2204627839760187d = $component; } ?>
<?php $component = App\View\Components\Filters\MoreFilterBox::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filters.more-filter-box'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Filters\MoreFilterBox::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

            <div class="more-filter-items">
                <label class="f-14 text-dark-grey mb-12 text-capitalize"
                       for="package"><?php echo app('translator')->get('superadmin.package'); ?></label>
                <div class="select-filter mb-4">
                    <div class="select-others">
                        <select class="form-control select-picker" id="package" data-live-search="true"
                                data-container="body" data-size="8">
                            <option value="all"><?php echo app('translator')->get('app.all'); ?></option>
                            <?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($package->id); ?>"><?php echo e(ucwords($package->name)); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="more-filter-items">
                <label
                    class="f-14 text-dark-grey mb-12 text-capitalize"><?php echo app('translator')->get('superadmin.package'); ?> <?php echo app('translator')->get('modules.invoices.type'); ?></label>
                <div class="select-filter mb-4">
                    <div class="select-others">
                        <select class="form-control select-picker" id="type" data-style="form-control">
                            <option value="all"><?php echo app('translator')->get('app.all'); ?></option>
                            <option value="monthly"><?php echo app('translator')->get('app.monthly'); ?></option>
                            <option value="annual"><?php echo app('translator')->get('app.annually'); ?></option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="more-filter-items">
                <label
                    class="f-14 text-dark-grey mb-12 text-capitalize"><?php echo app('translator')->get('app.status'); ?></label>
                <div class="select-filter mb-4">
                    <div class="select-others">
                        <select class="form-control select-picker" id="company-status" data-style="form-control">
                            <option value="all"><?php echo app('translator')->get('app.all'); ?></option>
                            <option value="active"><?php echo app('translator')->get('app.active'); ?></option>
                            <option value="inactive"><?php echo app('translator')->get('app.inactive'); ?></option>
                            <option value="license_expired"><?php echo app('translator')->get('superadmin.dashboard.licenseExpired'); ?></option>
                        </select>
                    </div>
                </div>
            </div>

            <?php if(global_setting()->company_need_approval): ?>

                <div class="more-filter-items">
                    <label
                        class="f-14 text-dark-grey mb-12 text-capitalize"><?php echo app('translator')->get('app.approved'); ?></label>
                    <div class="select-filter mb-4">
                        <div class="select-others">
                            <select class="form-control select-picker" id="approved-status" data-style="form-control">
                                <option value="all"><?php echo app('translator')->get('app.all'); ?></option>
                                <option value="1"><?php echo app('translator')->get('app.yes'); ?></option>
                                <option value="0"><?php echo app('translator')->get('app.no'); ?></option>
                            </select>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala4acb898aa829ce2204627839760187d)): ?>
<?php $component = $__componentOriginala4acb898aa829ce2204627839760187d; ?>
<?php unset($__componentOriginala4acb898aa829ce2204627839760187d); ?>
<?php endif; ?>
        <!-- MORE FILTERS END -->
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald1a72e1108842d163a80559e15f530b4)): ?>
<?php $component = $__componentOriginald1a72e1108842d163a80559e15f530b4; ?>
<?php unset($__componentOriginald1a72e1108842d163a80559e15f530b4); ?>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!-- CONTENT WRAPPER START -->
    <div class="content-wrapper">

        <!-- Add Task Export Buttons Start -->
        <div class="d-block d-lg-flex d-md-flex justify-content-between action-bar dd">
            <div id="table-actions" class="flex-grow-1 align-items-center">
                <?php if (isset($component)) { $__componentOriginaldbb84df4c3a5cbdd95fb35d18ba6410f = $component; } ?>
<?php $component = App\View\Components\Forms\LinkPrimary::resolve(['link' => route('superadmin.companies.create'),'icon' => 'plus'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.link-primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\LinkPrimary::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mr-3 openRightModal float-left mb-2 mb-lg-0 mb-md-0']); ?>
                    <?php echo app('translator')->get('app.add'); ?>
                    <?php echo app('translator')->get('superadmin.company'); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldbb84df4c3a5cbdd95fb35d18ba6410f)): ?>
<?php $component = $__componentOriginaldbb84df4c3a5cbdd95fb35d18ba6410f; ?>
<?php unset($__componentOriginaldbb84df4c3a5cbdd95fb35d18ba6410f); ?>
<?php endif; ?>
            </div>

            <?php if(global_setting()->company_need_approval): ?>
                <div class="btn-group ml-0 ml-lg-3 ml-md-3" role="group">
                    <a href="<?php echo e(route('superadmin.companies.index')); ?>" class="btn btn-secondary f-14 btn-active show-clients"><?php echo app('translator')->get('app.showAll'); ?></a>

                    <a href="javascript:;" class="btn btn-secondary f-14 show-unverified">
                        <?php if($unapprovedCount > 0): ?>
                            <span class="badge badge-primary"><?php echo e($unapprovedCount); ?></span>
                        <?php endif; ?>
                        <?php echo app('translator')->get('superadmin.companies.unapproved'); ?>
                    </a>
                </div>
            <?php endif; ?>

        </div>
        <!-- Add Task Export Buttons End -->

        <!-- Task Box Start -->
        <div class="d-flex flex-column w-tables rounded mt-3 bg-white">

            <?php echo $dataTable->table(['class' => 'table table-hover border-0 w-100']); ?>


        </div>
        <!-- Task Box End -->
    </div>
    <!-- CONTENT WRAPPER END -->

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>

    <?php echo $__env->make('sections.datatable_js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script>
        $('#datatableRange').on('apply.daterangepicker', (event, picker) => {
            cb(picker.startDate, picker.endDate);
            $('#datatableRange').val(picker.startDate.format('<?php echo e(companyOrGlobalSetting()->moment_date_format); ?>') +
                ' <?php echo app('translator')->get("app.to"); ?> ' + picker.endDate.format(
                    '<?php echo e(companyOrGlobalSetting()->moment_date_format); ?>'));
        });

        $('#datatableRange2').on('apply.daterangepicker', (event, picker) => {
            cb(picker.startDate, picker.endDate);
            $('#datatableRange2').val(picker.startDate.format('<?php echo e(companyOrGlobalSetting()->moment_date_format); ?>') +
                ' <?php echo app('translator')->get("app.to"); ?> ' + picker.endDate.format(
                    '<?php echo e(companyOrGlobalSetting()->moment_date_format); ?>'));
        });

        function cb(start, end) {
            $('#datatableRange, #datatableRange2').val(start.format('<?php echo e(companyOrGlobalSetting()->moment_date_format); ?>') +
                ' <?php echo app('translator')->get("app.to"); ?> ' + end.format(
                    '<?php echo e(companyOrGlobalSetting()->moment_date_format); ?>'));
            $('#reset-filters, #reset-filters-2').removeClass('d-none');

        }
        $('#companies-table').on('preXhr.dt', function (e, settings, data) {
            var dateRangePicker = $('#datatableRange').data('daterangepicker');
            var startDate = $('#datatableRange').val();

            if (startDate == '') {
                startDate = null;
                endDate = null;
            } else {
                startDate = dateRangePicker.startDate.format('<?php echo e(global_setting()->moment_date_format); ?>');
                endDate = dateRangePicker.endDate.format('<?php echo e(global_setting()->moment_date_format); ?>');
            }

            const packageName = $('#package').val();
            const type = $('#type').val();
            const companyStatus = $('#company-status').val();
            const approveStatus = $('#approved-status').val();
            const searchText = $('#search-text-field').val();

            data['startDate'] = startDate;
            data['endDate'] = endDate;
            data['package'] = packageName;
            data['type'] = type;
            data['companyStatus'] = companyStatus;
            data['approveStatus'] = approveStatus;
            data['searchText'] = searchText;
        });
        const showTable = () => {
            window.LaravelDataTables["companies-table"].draw();
        }

        $('#package, #type, #search-text-field, #company-status, #approved-status')
            .on('change keyup', function () {
                if ($('#type').val() !== "all") {
                    $('#reset-filters').removeClass('d-none');
                } else if ($('#package').val() !== "all") {
                    $('#reset-filters').removeClass('d-none');
                } else if ($('#company-status').val() !== "all") {
                    $('#reset-filters').removeClass('d-none');
                } else if ($('#approved-status').val() !== "all") {
                    $('#reset-filters').removeClass('d-none');
                } else if ($('#search-text-field').val() !== "") {
                    $('#reset-filters').removeClass('d-none');
                } else {
                    $('#reset-filters').addClass('d-none');
                }
                showTable();
            });

        $('#reset-filters').click(function () {
            $('#filter-form')[0].reset();
            $('.filter-box .select-picker').selectpicker("refresh");
            $('#reset-filters').addClass('d-none');
            $('.show-clients').addClass('btn-active');
            $('.show-unverified').removeClass('btn-active');
            showTable();
        });

        $('.show-unverified').click(function() {
            $('#approved-status').val('0');

            $('#approved-status').selectpicker('refresh');
            $(this).addClass('btn-active');
            $('#reset-filters').removeClass('d-none');
            showTable();
        });

        $('body').on('click', '.delete-table-row', function () {
            const id = $(this).data('company-id');
            Swal.fire({
                title: "<?php echo app('translator')->get('messages.sweetAlertTitle'); ?>",
                text: "<?php echo app('translator')->get('messages.recoverRecord'); ?>",
                icon: 'warning',
                showCancelButton: true,
                focusConfirm: false,
                confirmButtonText: "<?php echo app('translator')->get('messages.confirmDelete'); ?>",
                cancelButtonText: "<?php echo app('translator')->get('app.cancel'); ?>",
                customClass: {
                    confirmButton: 'btn btn-primary mr-3',
                    cancelButton: 'btn btn-secondary'
                },
                showClass: {
                    popup: 'swal2-noanimation',
                    backdrop: 'swal2-noanimation'
                },
                buttonsStyling: false
            }).then((result) => {
                if (result.isConfirmed) {
                    var url = "<?php echo e(route('superadmin.companies.destroy', ':id')); ?>";
                    url = url.replace(':id', id);

                    var token = "<?php echo e(csrf_token()); ?>";

                    $.easyAjax({
                        type: 'POST',
                        url: url,
                        blockUI: true,
                        data: {
                            '_token': token,
                            '_method': 'DELETE'
                        },
                        success: function (response) {
                            if (response.status === "success") {
                                showTable();
                            }
                        }
                    });
                }
            });
        });

        <?php if(module_enabled('Subdomain')): ?>
            $('body').on('click', '.domain-params', function () {
            const company_id = $(this).data('company-id');
            const company_url = $(this).data('company-url');

            Swal.fire({
                title: "<?php echo app('translator')->get('messages.sweetAlertTitle'); ?>",
                html: `You want to notify company admins about company Login URL <br> Company URL: <a  target="_blank" href="${company_url}"><b>${company_url}</b></a>`,
                icon: 'warning',
                showCancelButton: true,
                focusConfirm: false,
                confirmButtonText: "Yes, Notify it!",
                cancelButtonText: "<?php echo app('translator')->get('app.cancel'); ?>",
                customClass: {
                    confirmButton: 'btn btn-primary mr-3',
                    cancelButton: 'btn btn-secondary'
                },
                showClass: {
                    popup: 'swal2-noanimation',
                    backdrop: 'swal2-noanimation'
                },
                buttonsStyling: false
            }).then((result) => {
                if (result.isConfirmed) {
                    const token = "<?php echo e(csrf_token()); ?>";

                    $.easyAjax({
                        type: 'POST',
                        container: '#companies-table',
                        blockUI: true,
                        url: "<?php echo e(route('notify.domain')); ?>",
                        data: {'_token': token, 'company_id': company_id},
                    });
                }
            });

        });
        <?php endif; ?>

        $('.btn-group .btn-secondary').click(function() {
            $('.btn-secondary').removeClass('btn-active');
            $(this).addClass('btn-active');
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\worksuite\resources\views/super-admin/companies/index.blade.php ENDPATH**/ ?>