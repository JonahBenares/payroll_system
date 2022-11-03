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
            <div class="p-4 relative h-full w-full text-center bg-white rounded-2xl shadow-lg white:bg-gray-800 white:border-gray-700">
                <div class="flex justify-between  pb-4 bg-white white:bg-gray-900">
                    <div > 
                        <h2 class="uppercase font-semibold py-2">OverTime List</h2>
                    </div>
                    <div class="flex">
                        <a href="<?php echo e(route('ot.index')); ?>"  class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                            <span>Show List</span>
                        </a>
                    </div>
                </div>
                <form action="">
                    <div class="flex justify-between pt-4">
                        <div class="w-1/2 px-2">
                            <h6 class="font-semibold border-b ">No. of Days Worked</h6>
                            <div class="flex justify-between mt-2">
                                <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">REG DAY:</label>
                                <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-56 p-2">
                            </div>
                            <div class="flex justify-between mt-2">
                                <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RD 2:</label>
                                <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-56 p-2">
                            </div>
                            <div class="flex justify-between mt-2">
                                <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">SH:</label>
                                <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-56 p-2">
                            </div>
                            <div class="flex justify-between mt-2">
                                <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">SH on RD:</label>
                                <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-56 p-2">
                            </div>
                            <div class="flex justify-between mt-2">
                                <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">Reg Hol:</label>
                                <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-56 p-2">
                            </div>
                            <div class="flex justify-between mt-2">
                                <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RH on RD 2:</label>
                                <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-56 p-2">
                            </div>
                        </div>
                        <div class="w-1/2 px-2 border-l">
                            <h6 class="font-semibold border-b">Night Premium</h6>
                            <div class="flex justify-between mt-2">
                                <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">REG NP:</label>
                                <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                            </div>
                            <div class="flex justify-between mt-2">
                                <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">REG NP OT:</label>
                                <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                            </div>
                            <div class="flex justify-between mt-2">
                                <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RD2/SH NP:</label>
                                <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                            </div>
                            <div class="flex justify-between mt-2">
                                <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RD2/SH NP OT:</label>
                                <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                            </div>
                            <div class="flex justify-between mt-2">
                                <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RH NP:</label>
                                <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                            </div>
                            <div class="flex justify-between mt-2">
                                <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RH NP OT:</label>
                                <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                            </div>
                            <div class="flex justify-between mt-2">
                                <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RH on RD2 NP:</label>
                                <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                            </div>
                            <div class="flex justify-between mt-2">
                                <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RH on RD2 NP OT:</label>
                                <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
    </div>

    
        
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\payroll_system\resources\views/overtime/create.blade.php ENDPATH**/ ?>