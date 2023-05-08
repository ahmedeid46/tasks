<!-- HEADER START -->
<header class="main-header clearfix bg-white" id="header">


    <!-- NAVBAR LEFT(MOBILE MENU COLLAPSE) START-->
    <div class="navbar-left float-left d-flex align-items-center">
        <?php if (isset($component)) { $__componentOriginal000fcba1c6c5a1e4a2897e45738ec35e = $component; } ?>
<?php $component = App\View\Components\AppTitle::resolve(['pageTitle' => __($pageTitle)] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppTitle::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'd-none d-lg-flex']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal000fcba1c6c5a1e4a2897e45738ec35e)): ?>
<?php $component = $__componentOriginal000fcba1c6c5a1e4a2897e45738ec35e; ?>
<?php unset($__componentOriginal000fcba1c6c5a1e4a2897e45738ec35e); ?>
<?php endif; ?>

        <div class="d-block d-lg-none menu-collapse cursor-pointer position-relative" onclick="openMobileMenu()">
            <div class="mc-wrap">
                <div class="mcw-line"></div>
                <div class="mcw-line center"></div>
                <div class="mcw-line"></div>
            </div>
        </div>

        <?php if($checkListCompleted < $checkListTotal && App::environment('codecanyon')): ?>
            <div class="ml-3 d-none d-lg-block d-md-block">
                <span class="f-12 mb-1"><a href="<?php echo e(route('superadmin.checklist')); ?>" class="text-lightest ">
                        <?php echo app('translator')->get('modules.accountSettings.setupProgress'); ?></a>
                    <span class="float-right"><?php echo e($checkListCompleted); ?>/<?php echo e($checkListTotal); ?></span>
                </span>
                <div class="progress" style="height: 5px; width: 150px">
                    <div class="progress-bar bg-primary" role="progressbar"
                         style="width: <?php echo e(($checkListCompleted / $checkListTotal) * 100); ?>%;" aria-valuenow="25"
                         aria-valuemin="0" aria-valuemax="100">&nbsp;
                    </div>
                </div>
            </div>
        <?php endif; ?>

    </div>

    <!-- NAVBAR LEFT(MOBILE MENU COLLAPSE) END-->
    <!-- NAVBAR RIGHT(SEARCH, ADD, NOTIFICATION, LOGOUT) START-->
    <div class="page-header-right float-right d-flex align-items-center justify-content-end">

        <ul>
            <!-- Sticky Note START -->
            <li data-toggle="tooltip" data-placement="top" title="<?php echo e(__('modules.accountSettings.clearCache')); ?>"
                class="d-none d-sm-block cursor-pointer clear-cache">
                <div class="d-flex align-items-center">
                    <span class="d-block header-icon-box">
                        <i class="fa fa-eraser f-16 text-dark-grey"></i>
                    </span>
                </div>
            </li>
            <!-- Sticky Note START -->
            <li data-toggle="tooltip" data-placement="top" title="<?php echo e(__('app.menu.stickyNotes')); ?>"
                class="d-none d-sm-block">
                <div class="d-flex align-items-center">
                    <a href="<?php echo e(route('sticky-notes.index')); ?>" class="d-block header-icon-box openRightModal">
                        <i class="fa fa-sticky-note f-16 text-dark-grey"></i>
                    </a>
                </div>
            </li>
            <!-- Sticky Note END -->
            <!-- ADD START -->
            <li data-toggle="tooltip" data-placement="top" title="<?php echo e(__('app.createNew')); ?>">
                <div class="add_box dropdown">
                    <a class="d-block dropdown-toggle header-icon-box" type="link" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-plus-circle f-16 text-dark-grey"></i>
                    </a>
                    <!-- DROPDOWN - INFORMATION -->
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink" tabindex="0">

                        <a class="dropdown-item f-14 text-dark openRightModal"
                           href="<?php echo e(route('superadmin.companies.create')); ?>">
                            <i class="fa fa-plus f-w-500 mr-2 f-11"></i>
                            <?php echo app('translator')->get('app.add'); ?> <?php echo app('translator')->get('superadmin.company'); ?>
                        </a>

                        <a class="dropdown-item f-14 text-dark openRightModal"
                           href="<?php echo e(route('superadmin.packages.create')); ?>">
                            <i class="fa fa-plus f-w-500 mr-2 f-11"></i>
                            <?php echo app('translator')->get('app.add'); ?> <?php echo app('translator')->get('superadmin.menu.packages'); ?>
                        </a>
                        <a class="dropdown-item f-14 text-dark openRightModal"
                           href="<?php echo e(route('superadmin.superadmin.create')); ?>">
                            <i class="fa fa-plus f-w-500 mr-2 f-11"></i>
                            <?php echo app('translator')->get('app.add'); ?> <?php echo app('translator')->get('superadmin.menu.superAdmin'); ?>
                        </a>
                    </div>

                </div>
            </li>
            <!-- NOTIFICATIONS START -->
            <li title="<?php echo e(__('app.newNotifications')); ?>">
                <div class="notification_box dropdown">
                    <a class="d-block dropdown-toggle header-icon-box show-user-notifications" type="link"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-bell f-16 text-dark-grey"></i>
                        <?php if($unreadNotificationCount > 0): ?>
                            <span
                                class="badge badge-primary unread-notifications-count active-timer-count position-absolute"><?php echo e($unreadNotificationCount); ?></span>
                        <?php endif; ?>
                    </a>
                    <!-- DROPDOWN - INFORMATION -->
                    <div
                        class="dropdown-menu dropdown-menu-right notification-dropdown border-0 shadow-lg py-0 bg-additional-grey"
                        tabindex="0">
                        <div
                            class="d-flex px-3 justify-content-between align-items-center border-bottom-grey py-1 bg-white">
                            <div class="___class_+?50___">
                                <p class="f-14 mb-0 text-dark f-w-500"><?php echo app('translator')->get('app.newNotifications'); ?></p>
                            </div>
                            <?php if($unreadNotificationCount > 0): ?>
                                <div class="f-12 ">
                                    <a href="javascript:;"
                                       class="text-dark-grey mark-notification-read"><?php echo app('translator')->get('app.markRead'); ?></a> |
                                    <a href="<?php echo e(route('all-notifications')); ?>"
                                       class="text-dark-grey"><?php echo app('translator')->get('app.showAll'); ?></a>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div id="notification-list">

                        </div>

                        <?php if($unreadNotificationCount > 6): ?>
                            <div class="d-flex px-3 pb-1 pt-2 justify-content-center bg-additional-grey">
                                <a href="<?php echo e(route('all-notifications')); ?>"
                                   class="text-darkest-grey f-13"><?php echo app('translator')->get('app.showAll'); ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </li>
            <!-- NOTIFICATIONS END -->
            <!-- LOGOUT START -->
            <li data-toggle="tooltip" data-placement="top" title="<?php echo e(__('app.logout')); ?>">
                <div class="logout_box">
                    <a class="d-block header-icon-box" href="javascript:;" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="fa fa-power-off f-16 text-dark-grey"></i>
                    </a>
                </div>
            </li>
            <!-- LOGOUT END -->
        </ul>
    </div>
    <!-- NAVBAR RIGHT(SEARCH, ADD, NOTIFICATION, LOGOUT) START-->
</header>
<!-- HEADER END -->

<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
    <?php echo csrf_field(); ?>
</form>

<script>
    $(document).ready(function () {

        $('.show-user-notifications').click(function () {
            const openStatus = $(this).attr('aria-expanded');

            if (typeof openStatus == "undefined" || openStatus == "false") {

                const token = '<?php echo e(csrf_token()); ?>';
                $.easyAjax({
                    type: 'POST',
                    url: "<?php echo e(route('show_notifications')); ?>",
                    container: "#notification-list",
                    blockUI: true,
                    data: {
                        '_token': token
                    },
                    success: function (data) {
                        if (data.status === 'success') {
                            $('#notification-list').html(data.html);
                        }
                    }
                });

            }

        });

        $('.mark-notification-read').click(function () {
            const token = '<?php echo e(csrf_token()); ?>';
            $.easyAjax({
                type: 'POST',
                url: "<?php echo e(route('mark_notification_read')); ?>",
                blockUI: true,
                data: {
                    '_token': token
                },
                success: function (data) {
                    if (data.status === 'success') {
                        $('#notification-list').html('');
                        $('.unread-notifications-count').remove();
                        window.location.reload();
                    }
                }
            });
        });

        $('.clear-cache').click(function () {
            $.easyAjax({
                type: 'GET',
                url: "<?php echo e(route('superadmin.superadmin.clear-cache')); ?>",
                blockUI: true,
                success: function (data) {
                    if (data.status === 'success') {
                        window.location.reload();
                    }
                }
            });
        });

    });
</script>
<?php /**PATH C:\laragon\www\worksuite\resources\views/super-admin/sections/topbar.blade.php ENDPATH**/ ?>