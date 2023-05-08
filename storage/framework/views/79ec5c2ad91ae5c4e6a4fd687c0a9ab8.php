<?php if(global_setting()->system_update == 1 &&  (in_array('admin', user_roles())|| user()->is_superadmin)): ?>
    <?php
        $updateVersionInfo = \Froiden\Envato\Functions\EnvatoUpdate::updateVersionInfo();
    ?>
    <?php if(isset($updateVersionInfo['lastVersion'])): ?>
        <div class="col-md-12">
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.alert','data' => ['type' => 'info']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'info']); ?>
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <i class="fa fa-gift"></i> <?php echo app('translator')->get('modules.update.newUpdate'); ?> <span
                            class="badge badge-success"><?php echo e($updateVersionInfo['lastVersion']); ?></span>
                    </div>
                    <div>
                        <?php if (isset($component)) { $__componentOriginaldbb84df4c3a5cbdd95fb35d18ba6410f = $component; } ?>
<?php $component = App\View\Components\Forms\LinkPrimary::resolve(['link' => route('update-settings.index'),'icon' => 'arrow-right'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.link-primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\LinkPrimary::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <?php echo app('translator')->get('modules.update.updateNow'); ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldbb84df4c3a5cbdd95fb35d18ba6410f)): ?>
<?php $component = $__componentOriginaldbb84df4c3a5cbdd95fb35d18ba6410f; ?>
<?php unset($__componentOriginaldbb84df4c3a5cbdd95fb35d18ba6410f); ?>
<?php endif; ?>
                    </div>

                </div>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        </div>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\worksuite\resources\views/dashboard/update-message-dashboard.blade.php ENDPATH**/ ?>