<script defer src="<?php echo e(asset('saas/js/cookieconsent.js')); ?>"></script>
<script>
    window.addEventListener('load', function () {

        // obtain plugin
        var cc = initCookieConsent();

        // run plugin with your configuration
        cc.run({
            current_lang: 'en',
            autoclear_cookies: true,

            // mode: 'opt-in'                          // default: 'opt-in'; value: 'opt-in' or 'opt-out'
            // delay: 0,                               // default: 0
            // auto_language: '',                      // default: null; could also be 'browser' or 'document'
            // autorun: true,                          // default: true
            // force_consent: false,                   // default: false
            // hide_from_bots: true,                   // default: true
            remove_cookie_tables: true,             // default: false
            cookie_name: "<?php echo e(addslashes(strtolower(str()->slug(global_setting()->global_app_name)).'_cc_cookie')); ?>",               // default: 'cc_cookie'
            // cookie_expiration: 182,                 // default: 182 (days)
            // cookie_necessary_only_expiration: 182   // default: disabled
            // cookie_domain: location.hostname,       // default: current domain
            // cookie_path: '/',                       // default: root
            // cookie_same_site: 'Lax',                // default: 'Lax'
            // use_rfc_cookie: false,                  // default: false
            // revision: 0,                            // default: 0// default: false
            page_scripts: true,                        // default: false
            gui_options: {
                consent_modal: {
                    layout: 'box',               // box/cloud/bar
                    position: 'bottom right',     // bottom/middle/top + left/right/center
                    transition: 'slide',           // zoom/slide
                    swap_buttons: true            // enable to invert buttons
                },
                settings_modal: {
                    layout: 'box',                 // box/bar
                    position: 'right',           // left/right
                    transition: 'zoom'            // zoom/slide
                }
            },
            languages: {
                'en': {
                    consent_modal: {
                        title: "<?php echo app('translator')->get('cookie.title'); ?>",
                        description: '<?php echo app('translator')->get("cookie.description"); ?><button type="button" data-cc="c-settings" class="cc-link"><?php echo app('translator')->get("cookie.letMeChoose"); ?></button>',
                        primary_btn: {
                            text: "<?php echo app('translator')->get('cookie.acceptAll'); ?>",
                            role: 'accept_all'              // 'accept_selected' or 'accept_all'
                        },
                        secondary_btn: {
                            text: "<?php echo app('translator')->get('cookie.acceptNecessary'); ?>",
                            role: 'accept_necessary'        // 'settings' or 'accept_necessary'
                        }
                    },
                    settings_modal: {
                        title: "<?php echo app('translator')->get('cookie.cookiePreferences'); ?>",
                        save_settings_btn: "<?php echo app('translator')->get('cookie.saveSettings'); ?>",
                        accept_all_btn: "<?php echo app('translator')->get('cookie.acceptAll'); ?>",
                        reject_all_btn: "<?php echo app('translator')->get('cookie.acceptNecessary'); ?>",
                        close_btn_label: "<?php echo app('translator')->get('app.close'); ?>",
                        cookie_table_headers: [
                            {col1: 'Name'},
                            {col2: 'Domain'},
                            {col3: 'Expiration'},
                            {col4: 'Description'}
                        ],
                        blocks: [
                            {
                                title: '<?php echo e(__('cookie.cookieUsage')); ?> 📢',
                                description: '<?php echo e(__('cookie.cookieUsageDescription')); ?>'
                            }, {
                                title: '<?php echo e(__('cookie.strictlyNecessaryCookies')); ?>',
                                description: '<?php echo e(__('cookie.strictlyNecessaryCookiesDescription')); ?>',
                                toggle: {
                                    value: 'necessary',
                                    enabled: true,
                                    readonly: true          // cookie categories with readonly=true are all treated as "necessary cookies"
                                }
                            }, {
                                title: '<?php echo e(__('cookie.performanceAnalyticsCookies')); ?>',
                                description: '<?php echo e(__('cookie.performanceAnalyticsCookiesDescription')); ?>',
                                toggle: {
                                    value: 'analytics',     // your cookie category
                                    enabled: false,
                                    readonly: false
                                },
                                cookie_table: [             // list of all expected cookies
                                    {
                                        col1: '^_ga',       // match all cookies starting with "_ga"
                                        col2: 'google.com',
                                        col3: '2 years',
                                        col4: 'description ...',
                                        is_regex: true
                                    },
                                    {
                                        col1: '_gid',
                                        col2: 'google.com',
                                        col3: '1 day',
                                        col4: 'description ...',
                                    }
                                ]
                            }, {
                                title: '<?php echo e(__('cookie.advertisementTitle')); ?>',
                                description: '<?php echo e(__('cookie.advertisementTitleDescription')); ?>',
                                toggle: {
                                    value: 'targeting',
                                    enabled: false,
                                    readonly: false
                                }
                            }, {
                                title: '<?php echo e(__('cookie.moreInformation')); ?>',
                                description: '<?php echo e(__('cookie.moreInformationDescription')); ?> <a class="cc-link" href="<?php echo e(route('front.contact')); ?>"><?php echo e($frontMenu->contact); ?></a>.',
                            }
                        ]
                    }
                }
            }
        });
    });
</script>
<?php /**PATH C:\laragon\www\worksuite\resources\views/super-admin/sections/cookie-consent.blade.php ENDPATH**/ ?>