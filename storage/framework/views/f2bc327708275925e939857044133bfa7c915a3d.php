<?php if(count($enabledFilters)): ?>
    <div class="w-full pt-3 mb-3">
        <?php if(count($enabledFilters) > 1): ?>
            <span
                class="cursor-pointer inline-flex rounded-full items-center py-0.5 pl-2.5 pr-1 mr-1 text-sm font-medium bg-slate-500 text-white white:bg-slate-600 white:text-slate-200">
              <?php echo e(trans('livewire-powergrid::datatable.buttons.clear_all_filters')); ?>

              <button type="button"
                      wire:click.prevent="clearAllFilters"
                      class="flex-shrink-0 ml-0.5 h-4 w-4 rounded-full inline-flex items-center justify-center text-white white:text-slate-200 hover:bg-slate-400 hover:text-slate-500 focus:outline-none focus:bg-slate-500 focus:text-slate-300 white:focus:text-slate-500">
                <svg class="h-2 w-2" stroke="currentColor" fill="none" viewBox="0 0 8 8">
                  <path stroke-linecap="round" stroke-width="1.5" d="M1 1l6 6m0-6L1 7"/>
                </svg>
              </button>
            </span>
        <?php endif; ?>
        <?php $__currentLoopData = $enabledFilters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field => $filter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <span
                class="cursor-pointer border border-slate-200 inline-flex rounded-full items-center py-0.5 pl-2.5 pr-1 text-sm font-medium bg-slate-100 text-slate-700 white:bg-slate-600 white:text-slate-300">
              <?php echo e($filter['label']); ?>

              <button type="button"
                      wire:click.prevent="clearFilter('<?php echo e($field); ?>')"
                      class="flex-shrink-0 ml-0.5 h-4 w-4 rounded-full inline-flex items-center justify-center text-slate-600 white:text-slate-300 hover:bg-slate-200 hover:text-slate-500 focus:outline-none focus:bg-slate-500 focus:text-slate-200 white:hover:bg-slate-300 white:hover:text-slate-500">
                <svg class="h-2 w-2" stroke="currentColor" fill="none" viewBox="0 0 8 8">
                  <path stroke-linecap="round" stroke-width="1.5" d="M1 1l6 6m0-6L1 7"/>
                </svg>
              </button>
            </span>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\payroll_system\vendor\power-components\livewire-powergrid\src\Providers/../../resources/views/components/frameworks/tailwind/header/enabled-filters.blade.php ENDPATH**/ ?>