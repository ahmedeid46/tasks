<!-- START Header -->
<header class="header position-relative">
    <!-- START Navigation -->
    <div class="navigation-bar" id="affix">
        <div class="container">
            <nav class="navbar navbar-expand-lg p-0">
                <a class="logo" href="<?php echo e(route('front.home')); ?>">
                    <div class="d-flex align-items-center">
                        <img class="mr-2 rounded logo-default" style="max-height: 32px;" src="<?php echo e(global_setting()->logo_front_url); ?>" alt="Logo"/>
                    </div>
                </a>
                <button class="navbar-toggler border-0 p-0" type="button" data-toggle="collapse"
                        data-target="#theme-navbar" aria-controls="theme-navbar" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-lines"></span>
                </button>

                <div class="collapse navbar-collapse" id="theme-navbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('front.home')); ?>"><?php echo e($frontMenu->home); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('front.feature')); ?>"><?php echo e($frontMenu->feature); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('front.pricing')); ?>"><?php echo e($frontMenu->price); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('front.contact')); ?>"><?php echo e($frontMenu->contact); ?></a>
                        </li>
                        <?php $__currentLoopData = $footerSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $footerSetting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if (! ($footerSetting->type == 'footer')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(!is_null($footerSetting->external_link) ? $footerSetting->external_link : route('front.page', $footerSetting->slug)); ?>"><?php echo e($footerSetting->name); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </ul>
                    <div class="my-3 my-lg-0">
                        <?php if(auth()->guard()->guest()): ?>
                            <a href="<?php echo e(module_enabled('Subdomain') ? route('front.workspace') : route('login')); ?>" class="btn btn-border shadow-none"><?php echo e($frontMenu->login); ?></a>
                            <?php if($global->enable_register): ?>
                                <a href="<?php echo e(route('front.signup.index')); ?>" class="btn btn-menu-signup shadow-none ml-2"><?php echo e($frontMenu->get_start); ?></a>
                            <?php endif; ?>
                        <?php else: ?>
                            <a href="<?php echo e(module_enabled('Subdomain') ? (user()->is_superadmin ? \App\Providers\RouteServiceProvider::SUPER_ADMIN_HOME : \App\Providers\RouteServiceProvider::HOME) : route('login')); ?>" class="btn btn-border shadow-none px-3 py-1">
                               <?php if(isset(user()->image_url)): ?>  <img src="<?php echo e(user()->image_url); ?>" class="rounded" width="25" alt="<?php echo app('translator')->get('superadmin.myAccount'); ?>"> <?php endif; ?> <?php echo app('translator')->get('superadmin.myAccount'); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- END Navigation -->
</header>
<!-- END Header -->
<?php /**PATH C:\laragon\www\worksuite\resources\views/super-admin/sections/saas/saas_header.blade.php ENDPATH**/ ?>