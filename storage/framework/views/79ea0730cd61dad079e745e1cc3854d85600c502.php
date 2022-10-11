<?php if($queues && $showExporting): ?>

    <?php if($batchExporting && !$batchFinished): ?>
        <div wire:poll="updateExportProgress"
             class="w-full my-3 px-4 rounded bg-slate-100 py-3 text-center">
            <div class="white:text-slate-300"><?php echo e(trans('livewire-powergrid::datatable.export.exporting')); ?></div>
            <span class="font-normal text-xs"><?php echo e($batchProgress); ?>%</span>
            <div
                class="bg-emerald-500 rounded h-1 text-center"
                style="width: <?php echo e($batchProgress); ?>%; transition: width 300ms;">
            </div>
        </div>
    <?php endif; ?>

    <?php if($batchFinished): ?>
        <div class="w-full my-3 white:bg-slate-800">
            <div x-data={show:true} class="rounded-top">
                <div class="px-4 py-3 rounded-md cursor-pointer bg-slate-100 shadow white:bg-slate-600"
                     x-on:click="show =!show">
                    <div class="flex justify-between">
                        <button
                            class="appearance-none text-left text-base font-medium text-slate-500 focus:outline-none white:text-slate-300"
                            type="button">
                            ⚡ <?php echo e(trans('livewire-powergrid::datatable.export.completed')); ?>

                        </button>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'livewire-powergrid::components.icons.chevron-double-down','data' => ['class' => 'w-5 text-slate-400 white:text-slate-200']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('livewire-powergrid::icons.chevron-double-down'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 text-slate-400 white:text-slate-200']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    </div>
                </div>
                <div x-show="show"
                     class="border-l border-b border-r border-slate-200 white:border-slate-600 px-2 py-4 white:border-0 white:bg-slate-700">
                    <?php $__currentLoopData = $exportedFiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="flex w-full p-2">
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'livewire-powergrid::components.icons.download','data' => ['class' => 'w-5 text-slate-700 white:text-slate-300 mr-3']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('livewire-powergrid::icons.download'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 text-slate-700 white:text-slate-300 mr-3']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            <a class="cursor-pointer text-slate-600 white:text-slate-300"
                               wire:click="downloadExport('<?php echo e($file); ?>')">
                                <?php echo e($file); ?>

                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\payroll_system\vendor\power-components\livewire-powergrid\src\Providers/../../resources/views/components/frameworks/tailwind/header/batch-exporting.blade.php ENDPATH**/ ?>