<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title> <?php echo e(__(isset($seoDetail) ? $seoDetail->seo_title : $pageTitle)); ?> | <?php echo e(global_setting()->global_app_name); ?></title>

    <meta name="description" content="<?php echo e(isset($seoDetail) ? $seoDetail->seo_description : ''); ?>">
    <meta name="author" content="<?php echo e(isset($seoDetail) ? $seoDetail->seo_author : ''); ?>">
    <meta name="keywords" content="<?php echo e(isset($seoDetail) ? $seoDetail->seo_keywords : ''); ?>">

    <meta property="og:title" content="<?php echo e(isset($seoDetail) ? $seoDetail->seo_title : ''); ?>">
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="<?php echo e(url('/')); ?>">
    <meta property="og:site_name" content="<?php echo e(global_setting()->global_app_name); ?>"/>
    <meta property="og:description" content="<?php echo e(isset($seoDetail) ? $seoDetail->seo_description : ''); ?>">
    <meta property="og:image" content="<?php echo e(isset($seoDetail) ? $seoDetail->og_image_url : ''); ?>"/>

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(global_setting()->favicon_url); ?>">
    <meta name="msapplication-TileImage" content="<?php echo e(global_setting()->favicon_url); ?>">

    <!-- Bootstrap CSS -->
    <link type="text/css" rel="stylesheet" media="all" href="<?php echo e(asset('saas/vendor/bootstrap/css/bootstrap.min.css')); ?>">
    <link type="text/css" rel="stylesheet" media="all" href="<?php echo e(asset('saas/vendor/animate-css/animate.min.css')); ?>">
    <link type="text/css" rel="stylesheet" media="all" href="<?php echo e(asset('saas/vendor/slick/slick.css')); ?>">
    <link type="text/css" rel="stylesheet" media="all" href="<?php echo e(asset('saas/vendor/slick/slick-theme.css')); ?>">
    <link type="text/css" rel="stylesheet" media="all" href="<?php echo e(asset('saas/fonts/flaticon/flaticon.css')); ?>">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="<?php echo e(asset('vendor/css/bootstrap-icons.css')); ?>">
    <!-- Template CSS -->
    <link type="text/css" rel="stylesheet" media="all" href="<?php echo e(asset('saas/css/main.css')); ?>">
    <!-- Template Font Family  -->

    <link type="text/css" rel="stylesheet" media="all"
          href="<?php echo e(asset('saas/vendor/material-design-iconic-font/css/material-design-iconic-font.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('saas/css/cookieconsent.css')); ?>" media="print" onload="this.media='all'">

    <script src="https://www.google.com/recaptcha/api.js"></script>
    <style>

        <?php echo $frontDetail->custom_css_theme_two; ?>

        :root {
            --main-color: <?php echo e($frontDetail->primary_color); ?>;
            --main-home-background: <?php echo e($frontDetail->background_color); ?>;
        }

        /*To be removed to next 3.6.8 update. Added so as cached main.css to show background image on load*/
        .section-hero .banner::after {
            position: absolute;
            content: '';
            left: 0;
            top: 0;
            z-index: -1;
            width: 100%;
            height: 100%;
            background-color: #CDDCDC;
            background-image: radial-gradient(at 50% 100%, rgba(255,255,255,0.50) 0%, rgba(0,0,0,0.50) 100%), linear-gradient(to bottom, rgba(255,255,255,0.25) 0%, rgba(0,0,0,0.25) 100%);
            background-blend-mode: screen, overlay;
            opacity: 0.95;
            padding-bottom: 400px;
        }

        .help-block {
            color: #8a1f11 !important;
        }

        .login-box h5 {
            padding: 35px 40px 15px;
            font-size: 21px;
            text-align: center;
            font-weight: 600;
        }

        @media (max-width: 767px) {
            .login-box form {
                padding: 10px;
            }

            .input-group-text {
                font-size: 13px;
            }

            .login-box h5 {
                padding: 35px 15px 15px;
                font-size: 21px;
                text-align: center;
                font-weight: 600;
            }
        }
    </style>

    <?php if($frontDetail->homepage_background != 'default'): ?>

        <?php if($frontDetail->homepage_background == 'image' || $frontDetail->homepage_background == 'image_and_color'): ?>
        <style>
            .section-hero .banner {
                background: url("<?php echo e($frontDetail->background_image_url); ?>") center center/cover no-repeat !important;
            }
        </style>
        <?php endif; ?>
        <?php if($frontDetail->homepage_background == 'image'): ?>
            <style>
                .section-hero .banner::after {
                    background-color: unset !important;
                }
            </style>
        <?php endif; ?>

        <?php if($frontDetail->homepage_background == 'color' || $frontDetail->homepage_background == 'image_and_color'): ?>
            <style>
                .section-hero .banner::after {
                    background-color: <?php echo e($frontDetail->background_color); ?> !important;
                }
                .breadcrumb-section {
                    background-color: <?php echo e($frontDetail->background_color); ?>30 !important;
                }
            </style>
        <?php endif; ?>

    <?php endif; ?>

    <?php $__currentLoopData = $frontWidgets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(!is_null($item->header_script)): ?>
            <?php echo $item->header_script; ?>

        <?php endif; ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php echo $__env->yieldPushContent('head-script'); ?>

</head>

<body id="home">

    <?php echo $__env->make('super-admin.sections.saas.saas_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('header-section'); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('super-admin.saas.section.cta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('super-admin.sections.saas.saas_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Scripts -->
    <script src="<?php echo e(asset('saas/vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('saas/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('saas/vendor/slick/slick.min.js')); ?>"></script>
    <script src="<?php echo e(asset('saas/vendor/wowjs/wow.min.js')); ?>"></script>
    <script src="<?php echo e(asset('saas/js/main.js')); ?>"></script>
    <script src="<?php echo e(asset('front/plugin/froiden-helper/helper.js')); ?>"></script>

    <!-- Global Required JS -->
    <?php $__currentLoopData = $frontWidgets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(!is_null($item->footer_script)): ?>
            <?php echo $item->footer_script; ?>

        <?php endif; ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php echo $__env->yieldPushContent('footer-script'); ?>

    <?php if ($__env->exists('super-admin.sections.cookie-consent')) echo $__env->make('super-admin.sections.cookie-consent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\laragon\www\worksuite\resources\views/super-admin/layouts/saas-app.blade.php ENDPATH**/ ?>