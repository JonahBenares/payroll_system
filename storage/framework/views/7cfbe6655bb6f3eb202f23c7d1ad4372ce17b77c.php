<div x-data="{ open: false }"
     @click.outside="open = false">
    <button @click.prevent="open = ! open"
            class="block bg-slate-50 text-slate-700 border border-slate-300 rounded py-1.5 px-3 leading-tight
                   focus:outline-none focus:bg-white focus:border-slate-600 white:border-slate-500 white:bg-slate-700
                   2xl:white:placeholder-slate-300 white:text-slate-200 white:text-slate-300">
        <div class="flex">
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'livewire-powergrid::components.icons.download','data' => ['class' => 'h-6 w-6 text-slate-500 white:text-slate-300']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('livewire-powergrid::icons.download'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-6 w-6 text-slate-500 white:text-slate-300']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        </div>
    </button>

    <div x-show="open"
         x-cloak
         x-transition:enter="transform duration-200"
         x-transition:enter-start="opacity-0 scale-90"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transform duration-200"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-90"
         class="mt-2 w-auto bg-white shadow-xl absolute z-10 white:bg-slate-600">

        <?php if(in_array('excel', data_get($setUp, 'exportable.type'))): ?>
            <div class="flex px-4 py-2 text-slate-400 white:text-slate-300">
                <span class="w-12"><?php echo app('translator')->get('Excel'); ?></span>
                <a x-on:click="$wire.call('exportToXLS'); open = false"
                   href="#"
                   class="px-2 block text-slate-800 hover:bg-slate-50 hover:text-black-300 white:text-slate-200 white:hover:bg-slate-700 rounded">
                    <?php echo app('translator')->get('livewire-powergrid::datatable.labels.all'); ?>
                </a>
                <?php if($checkbox): ?>
                    <a x-on:click="$wire.call('exportToXLS', true); open = false"
                       href="#"
                       class="px-2 block text-slate-800 hover:bg-slate-50 hover:text-black-300 white:text-slate-200 white:hover:bg-slate-700 rounded">
                        <?php echo app('translator')->get('livewire-powergrid::datatable.labels.selected'); ?>
                    </a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <?php if(in_array('csv', data_get($setUp, 'exportable.type'))): ?>
            <div class="flex px-4 py-2 text-slate-400 white:text-slate-300">
                <span class="w-12"><?php echo app('translator')->get('Csv'); ?></span>
                <a x-on:click="$wire.call('exportToCsv'); open = false" href="#"
                   class="px-2 block text-slate-800 hover:bg-slate-50 hover:text-black-300 white:text-slate-200 white:hover:bg-slate-700 rounded">
                    <?php echo app('translator')->get('livewire-powergrid::datatable.labels.all'); ?>
                </a>
                <?php if($checkbox): ?>
                    <a x-on:click="$wire.call('exportToCsv', true); open = false" href="#"
                       class="px-2 block text-slate-800 hover:bg-slate-50 hover:text-black-300 white:text-slate-200 white:hover:bg-slate-700 rounded">
                        <?php echo app('translator')->get('livewire-powergrid::datatable.labels.selected'); ?>
                    </a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\payroll_system\vendor\power-components\livewire-powergrid\src\Providers/../../resources/views/components/frameworks/tailwind/header/export.blade.php ENDPATH**/ ?>