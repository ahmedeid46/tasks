
<div class="media align-items-center mw-250">
    <?php if(!is_null($company)): ?>
        <a href="<?php echo e(route('superadmin.companies.show', [$company->id])); ?>" class="position-relative">
            <img src="<?php echo e($company->logo_url); ?>" class="mr-2  taskEmployeeImg rounded"
                alt="<?php echo e($company->company_name); ?>" title="<?php echo e($company->company_name); ?>">
        </a>
        <div class="media-body">
            <h5 class="mb-0 f-12">
                <a href="<?php echo e(route('superadmin.companies.show', [$company->id])); ?>"  class="text-darkest-grey"><?php echo e(ucfirst($company->company_name)); ?></a>
            </h5>

            <?php if(module_enabled('Subdomain')): ?>
                <p class="mb-0 f-12 text-dark-grey">
                    <a href="http://<?php echo e($company->sub_domain); ?>"  class="text-dark-grey" target="_blank"><?php echo e($company->sub_domain); ?></a>
                </p>
             <?php endif; ?>
        </div>
    <?php else: ?>
        --
    <?php endif; ?>
</div>
<?php /**PATH C:\laragon\www\worksuite\resources\views/components/company.blade.php ENDPATH**/ ?>