<?php foreach($attributes->onlyProps([
    'theme' => '',
    'inline' => null,
    'date' => null,
    'column' => null,
    'tableName' => null,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'theme' => '',
    'inline' => null,
    'date' => null,
    'column' => null,
    'tableName' => null,
]); ?>
<?php foreach (array_filter(([
    'theme' => '',
    'inline' => null,
    'date' => null,
    'column' => null,
    'tableName' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php
    $tableName = \Illuminate\Support\Str::kebab($tableName);
    $customConfig = [];
    if (data_get($date, 'config')) {
        foreach (data_get($date, 'config') as $key => $value) {
            $customConfig[$key] = $value;
        }
    }
?>
<div wire:ignore x-data="pgFlatPickr({
        dataField: '<?php echo e($date['dataField']); ?>',
        tableName: '<?php echo e($tableName); ?>',
        filterKey: 'enabledFilters.date_picker.<?php echo e($date['dataField']); ?>',
        label: '<?php echo e($date['label']); ?>',
        locale: <?php echo e(json_encode(config('livewire-powergrid.plugins.flatpickr.locales.'.app()->getLocale()))); ?>,
        onlyFuture: <?php echo e(json_encode(data_get($customConfig, 'only_future', false))); ?>,
        noWeekEnds: <?php echo e(json_encode(data_get($customConfig, 'no_weekends', false))); ?>,
        customConfig: <?php echo e(json_encode($customConfig)); ?>

    })">
    <div class="<?php echo e($theme->baseClass); ?>" style="<?php echo e($theme->baseStyle); ?>">
        <?php if(!$inline): ?>
            <label for="input_<?php echo e(data_get($date, 'field')); ?>"
                   class="text-gray-700 dark:text-gray-300">
                <?php echo e(data_get($date, 'label')); ?>

            </label>
        <?php endif; ?>
        <form autocomplete="off">
            <input id="input_<?php echo e(data_get($date, 'field')); ?>"
                   x-ref="rangeInput"
                   autocomplete="off"
                   data-field="<?php echo e(data_get($date, 'dataField')); ?>"
                   style="<?php echo e($theme->inputStyle); ?> <?php echo e(data_get($column, 'headerStyle')); ?>"
                   class="power_grid <?php echo e($theme->inputClass); ?> <?php echo e(data_get($column, 'headerClass')); ?>"
                   type="text"
                   readonly
                   placeholder="<?php echo e(trans('livewire-powergrid::datatable.placeholders.select')); ?>"
                   wire:model="filters.input_date_picker.<?php echo e(data_get($date, 'dataField')); ?>">
        </form>
    </div>
</div>

<?php /**PATH C:\xampp\htdocs\payroll_system\vendor\power-components\livewire-powergrid\src\Providers/../../resources/views/components/frameworks/tailwind/filters/date-picker.blade.php ENDPATH**/ ?>