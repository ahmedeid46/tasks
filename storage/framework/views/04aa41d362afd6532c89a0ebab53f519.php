<!-- ROW START -->
<div class="row">

    <?php if(!$company->approved && global_setting()->company_need_approval): ?>
        <div class="col-md-12">
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.alert','data' => ['type' => 'danger']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'danger']); ?>
                <div class="d-flex justify-content-between align-items-center f-15">
                    <?php echo app('translator')->get('superadmin.companies.companyNeedApproval'); ?>

                    <?php if (isset($component)) { $__componentOriginalcf8d12533ff890e0d6573daf32b7618d = $component; } ?>
<?php $component = App\View\Components\Forms\ButtonPrimary::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.button-primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\ButtonPrimary::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'approve-company','data-company-id' => ''.e($company->id).'']); ?>
                        <?php echo app('translator')->get('app.approve'); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcf8d12533ff890e0d6573daf32b7618d)): ?>
<?php $component = $__componentOriginalcf8d12533ff890e0d6573daf32b7618d; ?>
<?php unset($__componentOriginalcf8d12533ff890e0d6573daf32b7618d); ?>
<?php endif; ?>

                </div>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        </div>
    <?php endif; ?>

    <!--  USER CARDS START -->
    <div class="col-md-6 col-xl-4 mb-4 mb-xl-0 mb-lg-4 mb-md-0">
        <div class="row">

            <div class="col-md-12">
                <div class="card border-0 b-shadow-4">
                    <div class="card-horizontal align-items-center">
                        <div class="card-img">
                            <img class="" src="<?php echo e($company->logo_url); ?>" alt="">
                        </div>
                        <div class="card-body border-0 pl-0">

                            <div class="row">
                                <div class="col-10">
                                    <h4 class="card-title f-15 f-w-500 text-darkest-grey mb-0">
                                        <?php echo e($company->company_name); ?>

                                    </h4>
                                </div>
                                <div class="col-2 text-right">
                                    <div class="dropdown">
                                        <button class="btn f-14 px-0 py-0 text-dark-grey dropdown-toggle"
                                                type="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                            <i class="fa fa-ellipsis-h"></i>
                                        </button>

                                        <div
                                            class="dropdown-menu dropdown-menu-right border-grey rounded b-shadow-4 p-0"
                                            aria-labelledby="dropdownMenuLink" tabindex="0">
                                            <a class="dropdown-item openRightModal"
                                               href="<?php echo e(route('superadmin.companies.edit', $company->id)); ?>"><?php echo app('translator')->get('app.edit'); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="card-text f-11 text-lightest mb-0"><?php echo app('translator')->get('app.createdOn'); ?> :
                                <?php echo e($company->created_at->timezone(global_setting()->timezone)->translatedFormat(global_setting()->date_format . ' ' . global_setting()->time_format)); ?>

                            </p>
                            <p class="card-text f-11 text-lightest"><?php echo app('translator')->get('app.lastLogin'); ?>

                                <?php if(!is_null($company->last_login)): ?>
                                    <?php echo e($company->last_login->timezone(global_setting()->timezone)->translatedFormat(global_setting()->date_format . ' ' . global_setting()->time_format)); ?>

                                <?php else: ?>
                                    --
                                <?php endif; ?>
                            </p>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
    <!--  USER CARDS END -->

    <!--  USER CARDS START -->
    <div class="col-md-6 col-xl-4 mb-4 mb-xl-0 mb-lg-4 mb-md-0">
        <?php if($company->user): ?>
            <?php if (isset($component)) { $__componentOriginal005edb83c42c88a7ec0f9a9df790def6 = $component; } ?>
<?php $component = App\View\Components\Cards\User::resolve(['image' => $company->user->image_url] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.user'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Cards\User::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <div class="row">
                    <div class="col-12">
                        <h4 class="card-title f-15 f-w-500 text-darkest-grey mb-0">
                            <?php echo e(ucfirst($company->user->salutation) . ' ' . mb_ucfirst($company->user->name)); ?>

                            <?php if(global_setting()->email_verification): ?>
                                <?php if(is_null($company->user->email_verified_at)): ?>
                                    <i class="fa fa-times-circle text-red" data-toggle="tooltip"
                                       data-original-title="<?php echo app('translator')->get('superadmin.notVerifiedEmail'); ?>"></i>
                                <?php else: ?>
                                    <i class="fa fa-check-circle text-blue" data-toggle="tooltip"
                                       data-original-title="<?php echo app('translator')->get('superadmin.verifiedEmail'); ?>"></i>
                                <?php endif; ?>
                            <?php endif; ?>
                        </h4>
                    </div>
                </div>
                <p class="f-13 font-weight-normal text-dark-grey mb-1">
                    <?php echo e($company->user->company->company_name); ?>

                </p>
                <p class="card-text f-12 text-lightest"><?php echo app('translator')->get('app.lastLogin'); ?>

                    <?php if(!is_null($company->user->last_login)): ?>
                        <?php echo e($company->user->last_login->timezone(global_setting()->timezone)->translatedFormat(global_setting()->date_format . ' ' . global_setting()->time_format)); ?>

                    <?php else: ?>
                        --
                    <?php endif; ?>
                </p>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal005edb83c42c88a7ec0f9a9df790def6)): ?>
<?php $component = $__componentOriginal005edb83c42c88a7ec0f9a9df790def6; ?>
<?php unset($__componentOriginal005edb83c42c88a7ec0f9a9df790def6); ?>
<?php endif; ?>
        <?php else: ?>
            <?php if (isset($component)) { $__componentOriginal005edb83c42c88a7ec0f9a9df790def6 = $component; } ?>
<?php $component = App\View\Components\Cards\User::resolve(['image' => 'https://www.gravatar.com/avatar/noimage.png?s=200&d=mp'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.user'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Cards\User::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <div class="card-text f-12 text-lightest m-t-5">There is no active company admin for this company</div>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal005edb83c42c88a7ec0f9a9df790def6)): ?>
<?php $component = $__componentOriginal005edb83c42c88a7ec0f9a9df790def6; ?>
<?php unset($__componentOriginal005edb83c42c88a7ec0f9a9df790def6); ?>
<?php endif; ?>
        <?php endif; ?>
    </div>
    <!--  USER CARDS END -->

    <!--  WIDGETS START -->
    <div class="col-xl-4 col-md-12">
        <?php if (isset($component)) { $__componentOriginalbc9540fa671f26a0f8028a5a8d8f93e9 = $component; } ?>
<?php $component = App\View\Components\Cards\Data::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.data'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Cards\Data::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <div class="row">
                <div class="col-12">
                    <h4 class="card-title f-15 f-w-500 text-darkest-grey mb-1">
                        <?php echo app('translator')->get('superadmin.package'); ?>: <?php echo e($company->package->name); ?>

                    </h4>
                </div>
            </div>
            <p class="card-text f-12 text-lightest mb-2">
                <?php echo app('translator')->get('superadmin.licenceExpiresOn'); ?>
                <?php if(!is_null($company->licence_expire_on)): ?>
                    <span class="font-weight-bold">
                        <?php echo e(\Carbon\Carbon::parse($company->licence_expire_on)->timezone(global_setting()->timezone)->translatedFormat(global_setting()->date_format)); ?>

                    </span>
                    <em>(<?php echo e(\Carbon\Carbon::parse($company->licence_expire_on)->diffForHumans()); ?>)</em>
                <?php else: ?>
                    --
                <?php endif; ?>
            </p>
            <p class="card-text d-flex justify-content-between f-12 text-lightest">
                <a href="<?php echo e(route('superadmin.companies.edit_package', [$company->id])); ?>"
                   class="btn btn-primary rounded f-12 px-2 py-1 openRightModal">
                    <i class="fa fa-edit mr-1"></i> <?php echo app('translator')->get('app.update'); ?> <?php echo app('translator')->get('superadmin.package'); ?>
                </a>
                <button type="button" id="login-as-company"
                        class="btn btn-outline-secondary rounded f-12 ml-2 py-1">
                    <i class="fa fa-sign-in-alt mr-1"></i> <?php echo app('translator')->get('superadmin.superadmin.loginAsCompany'); ?>
                </button>
            </p>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbc9540fa671f26a0f8028a5a8d8f93e9)): ?>
<?php $component = $__componentOriginalbc9540fa671f26a0f8028a5a8d8f93e9; ?>
<?php unset($__componentOriginalbc9540fa671f26a0f8028a5a8d8f93e9); ?>
<?php endif; ?>
    </div>
    <!--  WIDGETS END -->
</div>
<!-- ROW END -->

<!-- ROW START -->
<div class="row mt-4">
    <div class="col-xl-8 col-lg-7 col-md-6 mb-4 mb-xl-0 mb-lg-4">
        <?php if (isset($component)) { $__componentOriginalbc9540fa671f26a0f8028a5a8d8f93e9 = $component; } ?>
<?php $component = App\View\Components\Cards\Data::resolve(['title' => __('modules.client.companyDetails')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.data'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Cards\Data::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <?php if (isset($component)) { $__componentOriginalfc012cd47eee5094db538668bc6edefd = $component; } ?>
<?php $component = App\View\Components\Cards\DataRow::resolve(['label' => __('modules.accountSettings.companyEmail'),'value' => $company->company_email] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.data-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Cards\DataRow::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfc012cd47eee5094db538668bc6edefd)): ?>
<?php $component = $__componentOriginalfc012cd47eee5094db538668bc6edefd; ?>
<?php unset($__componentOriginalfc012cd47eee5094db538668bc6edefd); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalfc012cd47eee5094db538668bc6edefd = $component; } ?>
<?php $component = App\View\Components\Cards\DataRow::resolve(['label' => __('modules.accountSettings.companyPhone'),'value' => $company->company_phone] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.data-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Cards\DataRow::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfc012cd47eee5094db538668bc6edefd)): ?>
<?php $component = $__componentOriginalfc012cd47eee5094db538668bc6edefd; ?>
<?php unset($__componentOriginalfc012cd47eee5094db538668bc6edefd); ?>
<?php endif; ?>

            <div class="col-12 px-0 pb-3 d-lg-flex d-md-flex d-block">
                <p class="mb-0 text-lightest f-14 w-30 text-capitalize"><?php echo e(__('modules.accountSettings.companyWebsite')); ?></p>
                <p class="mb-0 text-dark-grey f-14 w-70 text-wrap"><a href="<?php echo e($company->website); ?>"
                                                                      target="_blank"> <?php echo e($company->website); ?></a></p>
            </div>

            <?php if (isset($component)) { $__componentOriginalfc012cd47eee5094db538668bc6edefd = $component; } ?>
<?php $component = App\View\Components\Cards\DataRow::resolve(['label' => __('modules.accountSettings.companyAddress'),'value' => isset($company->defaultAddress) ? $company->defaultAddress->address : '--','html' => 'true'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.data-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Cards\DataRow::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfc012cd47eee5094db538668bc6edefd)): ?>
<?php $component = $__componentOriginalfc012cd47eee5094db538668bc6edefd; ?>
<?php unset($__componentOriginalfc012cd47eee5094db538668bc6edefd); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalfc012cd47eee5094db538668bc6edefd = $component; } ?>
<?php $component = App\View\Components\Cards\DataRow::resolve(['label' => __('modules.accountSettings.defaultCurrency'),'value' => $company->currency->currency_code . ' (' . $company->currency->currency_symbol . ')'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.data-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Cards\DataRow::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfc012cd47eee5094db538668bc6edefd)): ?>
<?php $component = $__componentOriginalfc012cd47eee5094db538668bc6edefd; ?>
<?php unset($__componentOriginalfc012cd47eee5094db538668bc6edefd); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalfc012cd47eee5094db538668bc6edefd = $component; } ?>
<?php $component = App\View\Components\Cards\DataRow::resolve(['label' => __('modules.accountSettings.defaultTimezone'),'value' => $company->timezone] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.data-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Cards\DataRow::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfc012cd47eee5094db538668bc6edefd)): ?>
<?php $component = $__componentOriginalfc012cd47eee5094db538668bc6edefd; ?>
<?php unset($__componentOriginalfc012cd47eee5094db538668bc6edefd); ?>
<?php endif; ?>
            <?php if(module_enabled('Subdomain')): ?>
                <?php if (isset($component)) { $__componentOriginalfc012cd47eee5094db538668bc6edefd = $component; } ?>
<?php $component = App\View\Components\Cards\DataRow::resolve(['label' => 'Subdomain','value' => $company->sub_domain] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.data-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Cards\DataRow::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfc012cd47eee5094db538668bc6edefd)): ?>
<?php $component = $__componentOriginalfc012cd47eee5094db538668bc6edefd; ?>
<?php unset($__componentOriginalfc012cd47eee5094db538668bc6edefd); ?>
<?php endif; ?>
            <?php endif; ?>

            <div class="col-12 px-0 pb-3 d-block d-lg-flex d-md-flex">
                <p class="mb-0 text-lightest f-14 w-30 d-inline-block text-capitalize">
                    <?php echo app('translator')->get('app.status'); ?></p>
                <p class="mb-0 text-dark-grey f-14 w-70">
                    <?php if($company->status == 'active'): ?>
                        <i class="fa fa-circle mr-1 text-dark-green f-10"></i>
                    <?php else: ?>
                        <i class="fa fa-circle mr-1 text-red f-10"></i>
                    <?php endif; ?>
                    <?php echo e(ucwords(str_replace('_', ' ', $company->status))); ?>

                </p>
            </div>

            <?php if(global_setting()->company_need_approval): ?>
                <div class="col-12 px-0 pb-3 d-block d-lg-flex d-md-flex">
                    <p class="mb-0 text-lightest f-14 w-30 d-inline-block text-capitalize">
                        <?php echo app('translator')->get('app.approved'); ?></p>
                    <p class="mb-0 text-dark-grey f-14 w-70">
                        <?php if($company->approved == 1): ?>
                            <i class="fa fa-circle mr-1 text-dark-green f-10"></i> <?php echo app('translator')->get('app.yes'); ?>
                        <?php else: ?>
                            <i class="fa fa-circle mr-1 text-red f-10"></i> <?php echo app('translator')->get('app.no'); ?>
                        <?php endif; ?>
                    </p>
                </div>
            <?php endif; ?>

            <?php if(!is_null($company->approved_by)): ?>
                <div class="col-12 px-0 pb-3 d-block d-lg-flex d-md-flex">
                    <p class="mb-0 text-lightest f-14 w-30 d-inline-block text-capitalize">
                        <?php echo app('translator')->get('superadmin.companies.approvedChangedBy'); ?></p>

                    <div class="media align-items-center mw-250">
                        <img src="<?php echo e($company->approvalBy->image_url); ?>" class="mr-2 taskEmployeeImg rounded-circle"
                             alt="<?php echo e($company->approvalBy->name); ?>"
                             title="<?php echo e($company->approvalBy->userBadge()); ?>">

                        <div class="media-body <?php echo e($company->approvalBy->status); ?>">

                            <h5 class="mb-0 f-12">
                                <?php echo $company->approvalBy->userBadge(); ?>

                            </h5>
                        </div>
                    </div>

                </div>
            <?php endif; ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbc9540fa671f26a0f8028a5a8d8f93e9)): ?>
<?php $component = $__componentOriginalbc9540fa671f26a0f8028a5a8d8f93e9; ?>
<?php unset($__componentOriginalbc9540fa671f26a0f8028a5a8d8f93e9); ?>
<?php endif; ?>
    </div>
    <div class="col-xl-4 col-lg-7 col-md-6 mb-4 mb-xl-0 mb-lg-4">
        <?php
            $storage = __('superadmin.notUsed');
            if ($company->file_storage_count && $company->file_storage_sum_size) {
                if ($company->package->storage_unit == 'mb') {
                    $storage = \App\Models\SuperAdmin\Package::bytesToMB($company->file_storage_sum_size) . ' ' . __('superadmin.mb');
                } else {
                    $storage = \App\Models\SuperAdmin\Package::bytesToGB($company->file_storage_sum_size)  . ' ' . __('superadmin.gb');
                }
            }

            $maxStorage = __('superadmin.unlimited');
            if ($company->package->max_storage_size != -1) {
                $maxStorage = $company->package->max_storage_size . ' ' . strtoupper($company->package->storage_unit);
            }
        ?>
        <?php if (isset($component)) { $__componentOriginalbc9540fa671f26a0f8028a5a8d8f93e9 = $component; } ?>
<?php $component = App\View\Components\Cards\Data::resolve(['title' => __('app.statistics'),'padding' => 'false'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.data'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Cards\Data::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <?php if (isset($component)) { $__componentOriginal7d9f6e0b9001f5841f72577781b2d17f = $component; } ?>
<?php $component = App\View\Components\Table::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Table::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'table-hover']); ?>
                <tr>
                    <td class="pl-20"><?php echo app('translator')->get('app.menu.employees'); ?></td>
                    <td
                        class="text-right pr-20 <?php echo e($company->employees_count >= $company->package->max_employees ? 'text-danger' : ''); ?>">
                        <?php echo e($company->employees_count . ' / ' . $company->package->max_employees); ?></td>
                </tr>
                <tr>
                    <td class="pl-20"><?php echo app('translator')->get('superadmin.storage'); ?></td>
                    <td class="text-right pr-20"><?php echo e($storage . ' / ' . $maxStorage); ?></td>
                </tr>
                <tr>
                    <td class="pl-20"><?php echo app('translator')->get('app.menu.clients'); ?></td>
                    <td class="text-right pr-20"><?php echo e($company->clients_count); ?></td>
                </tr>
                <tr>
                    <td class="pl-20"><?php echo app('translator')->get('app.menu.invoices'); ?></td>
                    <td class="text-right pr-20"><?php echo e($company->invoices_count); ?></td>
                </tr>
                <tr>
                    <td class="pl-20"><?php echo app('translator')->get('app.menu.estimates'); ?></td>
                    <td class="text-right pr-20"><?php echo e($company->estimates_count); ?></td>
                </tr>
                <tr>
                    <td class="pl-20"><?php echo app('translator')->get('app.menu.projects'); ?></td>
                    <td class="text-right pr-20"><?php echo e($company->projects_count); ?></td>
                </tr>
                <tr>
                    <td class="pl-20"><?php echo app('translator')->get('app.menu.tasks'); ?></td>
                    <td class="text-right pr-20"><?php echo e($company->tasks_count); ?></td>
                </tr>
                <tr>
                    <td class="pl-20"><?php echo app('translator')->get('app.menu.leads'); ?></td>
                    <td class="text-right pr-20"><?php echo e($company->leads_count); ?></td>
                </tr>
                <tr>
                    <td class="pl-20"><?php echo app('translator')->get('app.menu.orders'); ?></td>
                    <td class="text-right pr-20"><?php echo e($company->orders_count); ?></td>
                </tr>
                <tr>
                    <td class="pl-20"><?php echo app('translator')->get('app.menu.tickets'); ?></td>
                    <td class="text-right pr-20"><?php echo e($company->tickets_count); ?></td>
                </tr>
                <tr>
                    <td class="pl-20"><?php echo app('translator')->get('app.menu.contracts'); ?></td>
                    <td class="text-right pr-20"><?php echo e($company->contracts_count); ?></td>
                </tr>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7d9f6e0b9001f5841f72577781b2d17f)): ?>
<?php $component = $__componentOriginal7d9f6e0b9001f5841f72577781b2d17f; ?>
<?php unset($__componentOriginal7d9f6e0b9001f5841f72577781b2d17f); ?>
<?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbc9540fa671f26a0f8028a5a8d8f93e9)): ?>
<?php $component = $__componentOriginalbc9540fa671f26a0f8028a5a8d8f93e9; ?>
<?php unset($__componentOriginalbc9540fa671f26a0f8028a5a8d8f93e9); ?>
<?php endif; ?>
    </div>

</div>
<!-- ROW END -->


<script>
    $('body').on('click', '#login-as-company', function () {
        Swal.fire({
            title: "<?php echo app('translator')->get('messages.sweetAlertTitle'); ?>",
            text: "<?php echo app('translator')->get('superadmin.loginInfo'); ?>",
            icon: 'warning',
            showCancelButton: true,
            focusConfirm: false,
            confirmButtonText: "<?php echo app('translator')->get('app.login'); ?>",
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
                const url = "<?php echo e(route('superadmin.companies.login_as_company', $company->id)); ?>";

                const token = "<?php echo e(csrf_token()); ?>";

                $.easyAjax({
                    type: 'POST',
                    url: url,
                    blockUI: true,
                    data: {
                        '_token': token
                    },
                    success: function (response) {
                        if (response.status == "success") {
                            location.href = "<?php echo e(route('dashboard')); ?>"
                        }
                    }
                });
            }
        });
    });

    $('body').on('click', '.approve-company', function() {
        var companyId = $(this).data('company-id');

        Swal.fire({
            title: "<?php echo app('translator')->get('messages.sweetAlertTitle'); ?>",
            icon: 'warning',
            showCancelButton: true,
            focusConfirm: false,
            confirmButtonText: "<?php echo app('translator')->get('app.approve'); ?>",
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
                var url = "<?php echo e(route('superadmin.companies.approve_company')); ?>";

                var token = "<?php echo e(csrf_token()); ?>";

                $.easyAjax({
                    type: 'POST',
                    url: url,
                    blockUI: true,
                    data: {
                        '_token': token,
                        'companyId': companyId
                    },
                    success: function(response) {
                        if (response.status == "success") {
                            window.location.reload();
                        }
                    }
                });
            }
        });
    });
</script>
<?php /**PATH C:\laragon\www\worksuite\resources\views/super-admin/companies/ajax/show.blade.php ENDPATH**/ ?>