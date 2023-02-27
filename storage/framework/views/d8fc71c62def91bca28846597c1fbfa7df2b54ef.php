<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?>  <?php $__env->endSlot(); ?>
    <!-- component -->
    <style>
        [x-cloak] {
        display: none;
        }
    </style>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <div class="overflow-auto h-screen pb-28 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
        <div class="flex flex-col flex-wrap sm:flex-row ">
            <div class="relative h-full w-full text-center bg-white rounded-lg shadow-lg white:bg-gray-800 white:border-gray-700">
                <div class="flex justify-between pr-4 pl-4 pt-4 rounded-t-lg">
                    <div > 
                        <h2 class="uppercase font-semibold py-2">Allowance Rates <small class="border-l-2 px-1">Add New</small></h2>
                    </div>
                    <div class="flex">
                        <a href="<?php echo e(route('allowancerate.index')); ?>" type="button">
                            <div class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white transition-colors duration-200 transform bg-blue-500 rounded-3xl white:bg-blue-600 white:hover:bg-blue-700 white:focus:bg-blue-700 hover:bg-blue-600 focus:outline-none focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                                <span>Show List</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="p-4">
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" id='show_alert' role="alert" style="display:none">
                        <span class="block sm:inline" id="alerterror"></span>
                    </div>
                    <form action="<?php echo e(route('allowancerate.store')); ?>" method='POST'>
                        <?php echo csrf_field(); ?>
                        <div class="flex flex-row justify-between">
                            <div class="px-1 w-6/12">
                                <span class="block w-full text-left">Allowance Name</span>
                            </div>
                            <div class="px-3 w-5/12">
                                <span class="block w-full text-left">Rate</span>
                            </div>
                            <div class="px-3 w-1/12 text-center">
                                Action
                            </div>
                        </div>
                        <div class="flex flex-row justify-between appends" id="appends0">
                            <div class="px-1 w-6/12">
                                <select name="allowance_name[]" id="allowance_name1" class="text-sm w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 allowance_name" onchange='check_duplicate()'>
                                    <option value="">--Select Allowance Name--</option>
                                    <?php $__currentLoopData = $allowance; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($a->id); ?>"><?php echo e($a->allowance_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="px-1 w-5/12">
                                <input type="text" onkeypress="return isNumberKey(this, event)" name="allowance_rate[]" id="allowance_rate1" class="text-sm w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 allowance_rate">
                            </div>
                            <div class="px-1 w-1/12 addmoreappend flex justify-center space-x-1">
                                <button class="flex items-center justify-center my-2 py-2 px-2 text-xs tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-500 rounded-2xl white:bg-blue-600 white:hover:bg-blue-700 white:focus:bg-blue-700 hover:bg-blue-600 focus:outline-none focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-50 addAllowance disableadd">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="flex justify-end mt-6 ">
                            <input type="hidden" name="personal_id" value="<?php echo e((isset($_GET['personal_id'])) ? $_GET['personal_id'] : '0'); ?>">
                            <input type="hidden" name="employee_id" value="<?php echo e((isset($_GET['employee_id'])) ? $_GET['employee_id'] : '0'); ?>">
                            <button type="submit" id="save_button" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-500 rounded-2xl w-full white:bg-blue-600 white:hover:bg-blue-700 white:focus:bg-blue-700 hover:bg-blue-600 focus:outline-none focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>

<?php /**PATH C:\xampp\htdocs\payroll_system\resources\views/all_rates/create.blade.php ENDPATH**/ ?>