<?php foreach($attributes->onlyProps([
    'theme' => '',
    'inline' => null,
    'number' => null,
    'column' => '',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'theme' => '',
    'inline' => null,
    'number' => null,
    'column' => '',
]); ?>
<?php foreach (array_filter(([
    'theme' => '',
    'inline' => null,
    'number' => null,
    'column' => '',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div>
    <?php if(filled($number)): ?>
        <div class="<?php if(!$inline): ?> p-2 <?php endif; ?>">
            <?php if(!$inline): ?>
                <label class="text-gray-700 dark:text-gray-300"><?php echo e(data_get($number, 'label')); ?></label>
            <?php endif; ?>
            <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                'sm:flex w-full' => !$inline,
                'flex flex-col' => $inline,
                ]) ?>">
                <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                        'pl-0 pt-1 w-full sm:pr-3 sm:w-1/2' => !$inline,
                    ]) ?>">
                    <input
                        wire:model.debounce.800ms="filters.number.<?php echo e(data_get($number, 'dataField')); ?>.start"
                        wire:input.debounce.800ms="filterNumberStart('<?php echo e(data_get($number, 'dataField')); ?>', $event.target.value, '<?php echo e(data_get($number, 'label')); ?>')"
                        style="<?php echo e($theme->inputStyle); ?> <?php echo e(data_get($column, 'headerStyle')); ?>"
                        type="text"
                        class="power_grid <?php echo e($theme->inputClass); ?> <?php echo e(data_get($column, 'headerClass')); ?>"
                        placeholder="<?php echo e(__('Min')); ?>">
                </div>
                <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                        'pl-0 pt-1 w-full sm:w-1/2' => !$inline,
                        'mt-1' => $inline,
                    ]) ?>">
                    <input
                        wire:model.debounce.800ms="filters.number.<?php echo e(data_get($number, 'dataField')); ?>.end"
                        wire:input.debounce.800ms="filterNumberEnd('<?php echo e(data_get($number, 'dataField')); ?>',$event.target.value, '<?php echo e(data_get($number, 'label')); ?>')"
                        <?php if($inline): ?> style="<?php echo e($theme->inputStyle); ?> <?php echo e(data_get($column, 'headerStyle')); ?>" <?php endif; ?>
                        type="text"
                        class="power_grid <?php echo e($theme->inputClass); ?> <?php echo e(data_get($column, 'headerClass')); ?>"
                        placeholder="<?php echo e(__('Max')); ?>">
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\payroll_system\vendor\power-components\livewire-powergrid\src\Providers/../../resources/views/components/frameworks/tailwind/filters/number.blade.php ENDPATH**/ ?>