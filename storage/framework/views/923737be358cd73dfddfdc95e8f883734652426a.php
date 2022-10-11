<?php foreach($attributes->onlyProps([
    'theme' => '',
    'enabledFilters' => [],
    'column' => null,
    'inline' => null,
    'inputText' => null,
    'inputTextOptions' => [],
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'theme' => '',
    'enabledFilters' => [],
    'column' => null,
    'inline' => null,
    'inputText' => null,
    'inputTextOptions' => [],
]); ?>
<?php foreach (array_filter(([
    'theme' => '',
    'enabledFilters' => [],
    'column' => null,
    'inline' => null,
    'inputText' => null,
    'inputTextOptions' => [],
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div>
    <?php
        $field = data_get($inputText, 'dataField') ?? data_get($inputText, 'field');
    ?>
    <?php if(filled($inputText)): ?>
        <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
            'p-2' => !$inline,
            $theme->baseClass,
        ]) ?>" style="<?php echo e($theme->baseStyle); ?>">
            <?php if(!$inline): ?>
                <label class="text-gray-700 dark:text-gray-300"><?php echo e(data_get($inputText, 'label')); ?></label>
            <?php endif; ?>
            <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                'sm:flex w-full' => !$inline,
                'flex flex-col' => $inline,
                ]) ?>">
                <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                        'pl-0 pt-1 w-full sm:pr-3 sm:w-1/2' => !$inline,
                    ]) ?>">
                    <div class="relative">
                        <select class="power_grid <?php echo e($theme->selectClass); ?> <?php echo e(data_get($column, 'headerClass')); ?>"
                                style="<?php echo e(data_get($column, 'headerStyle')); ?>"
                                wire:model.lazy="filters.input_text_options.<?php echo e($field); ?>"
                                wire:input.lazy="filterInputTextOptions('<?php echo e($field); ?>', $event.target.value, '<?php echo e(data_get($inputText, 'label')); ?>')">
                            <?php $__currentLoopData = $inputTextOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($key); ?>"><?php echo e(trans($value)); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-slate-700">
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'livewire-powergrid::components.icons.down','data' => ['class' => 'w-4 h-4 dark:text-gray-300']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('livewire-powergrid::icons.down'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 dark:text-gray-300']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                        'pl-0 pt-1 w-full sm:w-1/2' => !$inline,
                        'mt-1' => $inline,
                    ]) ?>">
                    <input
                        data-id="<?php echo e($field); ?>"
                        <?php if(isset($enabledFilters[$field]['disabled']) && boolval($enabledFilters[$field]['disabled']) === true): ?> disabled <?php else: ?>
                        wire:model.debounce.800ms="filters.input_text.<?php echo e($field); ?>"
                        wire:input.debounce.800ms="filterInputText('<?php echo e($field); ?>', $event.target.value, '<?php echo e(data_get($inputText, 'label')); ?>')"
                        <?php endif; ?>
                        type="text"
                        class="power_grid <?php echo e($theme->inputClass); ?>"
                        placeholder="<?php echo e(empty($column)?data_get($inputText, 'label'):($column->placeholder?:$column->title)); ?>" />
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\payroll_system\vendor\power-components\livewire-powergrid\src\Providers/../../resources/views/components/frameworks/tailwind/filters/input-text.blade.php ENDPATH**/ ?>