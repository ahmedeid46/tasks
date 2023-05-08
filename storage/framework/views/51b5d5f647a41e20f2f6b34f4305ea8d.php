<?php if (isset($component)) { $__componentOriginalbc9540fa671f26a0f8028a5a8d8f93e9 = $component; } ?>
<?php $component = App\View\Components\Cards\Data::resolve(['title' => __('superadmin.dashboard.registrationsChart')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.data'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Cards\Data::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('action', null, []); ?> 
        <?php if (isset($component)) { $__componentOriginal67cd5dc9866c6185ad92d933c387fa86 = $component; } ?>
<?php $component = App\View\Components\Forms\Select::resolve(['fieldName' => 'registration_year','fieldId' => 'registration_year'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Select::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <option
                <?php echo e((request()->year ==  now(global_setting()->timezone)->year) ? 'selected' : ''); ?> value="<?php echo e(now(global_setting()->timezone)->year); ?>"><?php echo e(now(global_setting()->timezone)->year); ?></option>
            <option
                <?php echo e((request()->year ==  now(global_setting()->timezone)->subYear()->year) ? 'selected' : ''); ?> value="<?php echo e(now(global_setting()->timezone)->subYear()->year); ?>"><?php echo e(now(global_setting()->timezone)->subYear()->year); ?></option>
            <option
                <?php echo e((request()->year ==  now(global_setting()->timezone)->subYears(2)->year) ? 'selected' : ''); ?> value="<?php echo e(now(global_setting()->timezone)->subYears(2)->year); ?>"><?php echo e(now(global_setting()->timezone)->subYears(2)->year); ?></option>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal67cd5dc9866c6185ad92d933c387fa86)): ?>
<?php $component = $__componentOriginal67cd5dc9866c6185ad92d933c387fa86; ?>
<?php unset($__componentOriginal67cd5dc9866c6185ad92d933c387fa86); ?>
<?php endif; ?>
     <?php $__env->endSlot(); ?>
    <?php if (isset($component)) { $__componentOriginal186b6b67364273b38dd03324ee751423 = $component; } ?>
<?php $component = App\View\Components\BarChart::resolve(['chartData' => $registrationsChart,'spaceRatio' => 0.5] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bar-chart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\BarChart::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'task-chart2','height' => '300']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal186b6b67364273b38dd03324ee751423)): ?>
<?php $component = $__componentOriginal186b6b67364273b38dd03324ee751423; ?>
<?php unset($__componentOriginal186b6b67364273b38dd03324ee751423); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbc9540fa671f26a0f8028a5a8d8f93e9)): ?>
<?php $component = $__componentOriginalbc9540fa671f26a0f8028a5a8d8f93e9; ?>
<?php unset($__componentOriginalbc9540fa671f26a0f8028a5a8d8f93e9); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\worksuite\resources\views/super-admin/dashboard/charts.blade.php ENDPATH**/ ?>