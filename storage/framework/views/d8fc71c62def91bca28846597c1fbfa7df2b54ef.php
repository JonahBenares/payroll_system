<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
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
<<<<<<< HEAD
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
=======
>>>>>>> bec47f8f7c35b16bcc36d408b7d386b71344bdef
    <div class="overflow-auto h-screen pb-28 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
        <div class="flex flex-col flex-wrap sm:flex-row ">
            <div class="p-4 relative h-full w-full text-center bg-white rounded-2xl shadow-lg white:bg-gray-800 white:border-gray-700">
                <div class="flex justify-between  pb-4 bg-white white:bg-gray-900">
                    <div > 
                        <h2 class="uppercase font-semibold py-2">Allowance Rates <small class="border-l-2 px-1">Add New</small></h2>
                    </div>
                    <div class="flex">
                        <a href="<?php echo e(route('allowancerate.index')); ?>"  class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                            <span>Show List</span>
                        </a>
                
                    </div>
                </div>
                <form class="mt-5">
<<<<<<< HEAD
                    <?php echo csrf_field(); ?>
=======
>>>>>>> bec47f8f7c35b16bcc36d408b7d386b71344bdef
                    <div class="flex flex-row justify-between">
                        <div class="px-3 w-3/4">
                            <span class="block w-full text-left">Allowance Name</span>
                        </div>
                        <div class="px-3 w-1/4">
                            <span class="block w-full text-left">Rate</span>
                        </div>
                        <div class="px-3 w-14 test-left">
                            <span class="block w-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>
                            </span>
                        </div>
                    </div>
<<<<<<< HEAD
                    <div class="flex flex-row justify-between appends" id="appends0">
                        <div class="px-3 w-3/4">
                            <select onchange="fetchRates()" name="allowance_name[]" id="allowance_name" class=" w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                <option value="">--Select Allowance Name--</option>
                                <?php $__currentLoopData = $allowance; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($a->id); ?>"><?php echo e($a->allowance_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="px-3 w-1/4">
                            <input type="text" name="allowance_rate[]" id="allowance_rate" class=" w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                        </div>
                        <div class="px-3 w-14 addmoreappend">
                            <button id="btn_allowance" class="flex items-center justify-center px-2 py-2 mt-3 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50 addAllowance" style="display:none;">
=======
                    <div class="flex flex-row justify-between">
                        <div class="px-3 w-3/4">
                            <!-- <input type="text" class=" w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40"> -->
                            <select class=" w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                <option value="">--Select Allowance Name--</option>
                                <option value="Cash Allowance">Cash Allowance</option>
                                <option value="Clothing Allowance">Clothing Allowance</option>
                                <option value="House Rent Allowance">House Rent Allowance</option>
                                <option value="Meal and Transportation Allowance">Meal and Transportation Allowance</option>
                                <option value="Uniform Allowance">Uniform Allowance</option>
                            </select>
                        </div>
                        <div class="px-3 w-1/4">
                            <input type="text" class=" w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                        </div>
                        <div class="px-3 w-14">
                            <button class="flex items-center justify-center px-2 py-2 mt-3 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
>>>>>>> bec47f8f7c35b16bcc36d408b7d386b71344bdef
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                  </svg>
                            </button>
<<<<<<< HEAD
                            <button class="flex items-center justify-center px-2 py-2 mt-3 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50 addAllowance">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                  </svg>
=======
                        </div>
                    </div>
                    <div class="flex flex-row justify-between">
                        <div class="px-3 w-3/4">
                            <select class=" w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                <option value="">--Select Allowance Name--</option>
                                <option value="Cash Allowance">Cash Allowance</option>
                                <option value="Clothing Allowance">Clothing Allowance</option>
                                <option value="House Rent Allowance">House Rent Allowance</option>
                                <option value="Meal and Transportation Allowance">Meal and Transportation Allowance</option>
                                <option value="Uniform Allowance">Uniform Allowance</option>
                            </select>
                        </div>
                        <div class="px-3 w-1/4">
                            <input type="text" class=" w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                        </div>
                        <div class="px-3 w-14">
                            <button class="flex items-center justify-center px-2 py-2 mt-3 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-500 rounded-2xl white:bg-red-600 white:hover:bg-red-700 white:focus:bg-red-700 hover:bg-red-600 focus:outline-none focus:bg-red-500 focus:ring focus:ring-red-300 focus:ring-opacity-50">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                  </svg>
                                  
                            </button>
                        </div>
                    </div>
                    <div class="flex flex-row justify-between">
                        <div class="px-3 w-3/4">
                            <select class=" w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                <option value="">--Select Allowance Name--</option>
                                <option value="Cash Allowance">Cash Allowance</option>
                                <option value="Clothing Allowance">Clothing Allowance</option>
                                <option value="House Rent Allowance">House Rent Allowance</option>
                                <option value="Meal and Transportation Allowance">Meal and Transportation Allowance</option>
                                <option value="Uniform Allowance">Uniform Allowance</option>
                            </select>
                        </div>
                        <div class="px-3 w-1/4">
                            <input type="text" class=" w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                        </div>
                        <div class="px-3 w-14">
                            <button class="flex items-center justify-center px-2 py-2 mt-3 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-500 rounded-2xl white:bg-red-600 white:hover:bg-red-700 white:focus:bg-red-700 hover:bg-red-600 focus:outline-none focus:bg-red-500 focus:ring focus:ring-red-300 focus:ring-opacity-50">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                  </svg>
                                  
                            </button>
                        </div>
                    </div>
                    <div class="flex flex-row justify-between">
                        <div class="px-3 w-3/4">
                            <select class=" w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                <option value="">--Select Allowance Name--</option>
                                <option value="Cash Allowance">Cash Allowance</option>
                                <option value="Clothing Allowance">Clothing Allowance</option>
                                <option value="House Rent Allowance">House Rent Allowance</option>
                                <option value="Meal and Transportation Allowance">Meal and Transportation Allowance</option>
                                <option value="Uniform Allowance">Uniform Allowance</option>
                            </select>
                        </div>
                        <div class="px-3 w-1/4">
                            <input type="text" class=" w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                        </div>
                        <div class="px-3 w-14">
                            <button class="flex items-center justify-center px-2 py-2 mt-3 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-500 rounded-2xl white:bg-red-600 white:hover:bg-red-700 white:focus:bg-red-700 hover:bg-red-600 focus:outline-none focus:bg-red-500 focus:ring focus:ring-red-300 focus:ring-opacity-50">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                  </svg>
                                  
>>>>>>> bec47f8f7c35b16bcc36d408b7d386b71344bdef
                            </button>
                        </div>
                    </div>
                    <div class="flex justify-end mt-6 px-2">
<<<<<<< HEAD
                        <input type="hidden" name="personal_id" value="<?php echo e($_GET['personal_id']); ?>">
                        <input type="hidden" name="employee_id" value="<?php echo e($_GET['employee_id']); ?>">
=======
>>>>>>> bec47f8f7c35b16bcc36d408b7d386b71344bdef
                        <button type="button" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl w-full white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                            Save
                        </button>
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
<<<<<<< HEAD

=======
>>>>>>> bec47f8f7c35b16bcc36d408b7d386b71344bdef
<?php /**PATH C:\xampp\htdocs\payroll_system\resources\views/all_rates/create.blade.php ENDPATH**/ ?>