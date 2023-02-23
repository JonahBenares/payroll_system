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
    
    <div class="overflow-auto h-screen pb-28 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
        <div class="flex flex-col flex-wrap sm:flex-row ">
            <div class="relative h-full w-full text-center bg-white rounded-lg shadow-lg white:bg-gray-800 white:border-gray-700">
                <div class="flex justify-between pr-4 pl-4 pt-4 rounded-t-lg ">
                    <div > 
                        <h2 class="uppercase font-semibold py-2">Allowance <small class="border-l-2 px-1">Add New</small></h2>
                    </div>
                    <div class="flex">
                        <a href="<?php echo e(route('allowance.index')); ?>" type="button">
                            <div class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white transition-colors duration-200 transform bg-blue-500 rounded-3xl white:bg-blue-600 white:hover:bg-blue-700 white:focus:bg-blue-700 hover:bg-blue-600 focus:outline-none focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                                <span>Show List</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="p-4">
                    <?php if(Session::has('success')): ?>
                        <div class="mb-5 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                            <span class="block sm:inline"><?php echo e(Session::get('success')); ?></span>
                        </div>
                    <?php endif; ?>
                    <?php if(Session::has('fail')): ?>
                        <div class="mb-5 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <span class="block sm:inline"><?php echo e(Session::get('fail')); ?></span>
                        </div>
                    <?php endif; ?>
                    <form action="<?php echo e(route('allowance.store')); ?>" method='POST'>
                        <?php echo csrf_field(); ?>
                        <div class="flex justify-between space-x-2">
                            <div class="w-full">
                                <label for="" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Allowance Name</label>
                                <input type="text" name="allowance_name" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            </div>
                            <div class="w-full">
                                <label for="" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Default Rate</label>
                                <input type="text" onkeypress="return isNumberKey(this, event)" name="allowance_rate" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            </div>
                        </div>
                        <div class="flex justify-end mt-6 ">
                            <button type="submit" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-500 rounded-2xl w-full white:bg-blue-600 white:hover:bg-blue-700 white:focus:bg-blue-700 hover:bg-blue-600 focus:outline-none focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
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
<?php endif; ?><?php /**PATH C:\xampp\htdocs\payroll_system\resources\views/allowances/create.blade.php ENDPATH**/ ?>