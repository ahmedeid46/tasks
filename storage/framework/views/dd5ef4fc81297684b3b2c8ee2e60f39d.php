<?php if(!user()->is_superadmin): ?>
<?php if(count($userCompanies) > 1): ?>
    <hr class="my-1">
    <?php $__currentLoopData = $userCompanies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="javascript:;" class="dropdown-item align-items-center f-15 text-dark choose-workspace py-2"
            data-user-id="<?php echo e($value->id); ?>" data-company-id="<?php echo e($value->company->id); ?>">
            <div class="d-flex bd-highlight">
                <div class="bd-highlight align-self-center">
                    <img src="<?php echo e($value->company->logo_url); ?>" class="border height-35 width-35 rounded" />
                </div>
                <div class="mr-auto px-3 bd-highlight align-self-center text-truncate">
                    <span class="heading-h5"><?php echo e(ucfirst($value->company->company_name)); ?></span>
                </div>
                <?php if(company()->id == $value->company->id): ?>
                    <div class="text-right bd-highlight align-self-center">
                        <i class="bi bi-check2"></i>
                    </div>
                <?php endif; ?>
            </div>
        </a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<script>
    $('.choose-workspace').click(function() {

        var url = "<?php echo e(route('superadmin.superadmin.choose_workspace')); ?>";
        var token = "<?php echo e(csrf_token()); ?>";
        var userId = $(this).data('user-id');
        var companyId = $(this).data('company-id');

        $.easyAjax({
            url: url,
            container: '#body',
            type: "POST",
            blockUI: true,
            data: {
                user_id : userId,
                company_id : companyId,
                _token: token
            },
            success: function(response) {
                if (response.status == 'success') {
                    window.location.href = response.redirect_url;
                }
            }
        })
    });
</script>
<?php endif; ?>
<?php /**PATH C:\laragon\www\worksuite\resources\views/super-admin/sections/choose-company.blade.php ENDPATH**/ ?>