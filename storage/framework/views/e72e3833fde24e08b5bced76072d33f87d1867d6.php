<?php $helperClass = app('PowerComponents\LivewirePowerGrid\Helpers\Helpers'); ?>
<div class="w-full md:w-auto">
    <div class="sm:flex sm:flex-row">
        <?php $__currentLoopData = $headers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $action): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="sm:mr-2 w-auto">
                <?php echo $__env->renderWhen($action->can, 'livewire-powergrid::components.actions-header', [
                    'action' => $action
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\payroll_system\vendor\power-components\livewire-powergrid\src\Providers/../../resources/views/components/frameworks/tailwind/header/actions.blade.php ENDPATH**/ ?>