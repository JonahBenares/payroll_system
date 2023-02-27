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
    <style>
        [x-cloak] {
        display: none;
        }
    </style>
    
    <div class="overflow-auto h-screen pb-28 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
		<div class="flex flex-col flex-wrap sm:flex-row ">
            <div class="relative h-full w-full bg-white rounded-lg shadow-lg white:bg-gray-800 white:border-gray-700">
                <div class="flex justify-between pr-4 pl-4 pt-4 rounded-t-lg ">
                    <div> 
                        <h2 class="uppercase font-semibold py-2">Employee List <small class="border-l-2 px-1">Update Employee</small></h2>
                    </div>
                    <div class="flex">
                        <a href="<?php echo e(route('emp.index')); ?>"type="button">
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
                    
                    <!-- component -->
                    <?php $__currentLoopData = $employeedata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                    <form method="POST" action ="<?php echo e(route('emp.update', $e)); ?>" >
                        <?php echo method_field('PUT'); ?>
                        <?php echo csrf_field(); ?>
                        <div class="flex justify-between space-x-2 mt-4">
                            <div class=" w-8/12">
                                <label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Employee Name</label>
                                <input type="text" name="full_name" value="<?php echo e($e->full_name); ?>" disabled class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            </div>
                            <div class="flex w-4/12 pt-8">
                                <input class="w-6 h-6 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500" name="supervisory" id="supervisory"  type="checkbox" value="1" <?php echo e((( $e->supervisory==1 ) ? "checked" : "")); ?> >
                                <label for="default-checkbox" class="block ml-2 text-sm text-gray-700 capitalize white:text-gray-200">Supervisor</label>
                            </div>
                        </div>
                        
                        <div class="flex justify-between space-x-2 mt-4">
                            <div class="w-full">
                                <label class="block text-sm text-gray-700 capitalize white:text-gray-200">Employee Number</label>
                                <input type="text" name="emp_num" value="<?php echo e($e->emp_num); ?>" disabled class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            </div>
                            <div class="w-full">
                                <label class="block text-sm text-gray-700 capitalize white:text-gray-200">Employee Type</label>
                                <input  disabled  class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            </div>
                            <div class="w-full">
                                <label for="department" class="block text-sm text-gray-700 capitalize white:text-gray-200">Department</label>
                                <input type="text" name="department" value="<?php echo e($e->dept_name); ?>" disabled class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            </div>
                        </div>

                        <div class="flex justify-between space-x-2 mt-4">
                            <div class="w-full">
                                <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                    Location
                                </label>
                                <input name="location" value="<?php echo e($e->location_name); ?>" disabled class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            </div>
                            <div class="w-full">
                                <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                    Salary Type
                                </label>
                                <select name="salary_type" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                    <option value="">--Select Salary Type--</option>
                                    <option value="Monthly" <?php echo e((($e->salary_type == 'Monthly') ? "selected" : "")); ?>>Monthly</option>
                                    <option value="Daily" <?php echo e((($e->salary_type == 'Daily') ? " selected" : "")); ?>>Daily</option>
                                </select>
                            </div>
                            <div class="w-full">
                                <label for="email" class="block text-sm text-gray-700 capitalize white:text-gray-200">Accounting Entry</label>
                                <select name="accounting_entry_id" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                    <option value="" selected>--Select Accounting Entry--</option>
                                    <?php $__currentLoopData = $accent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $acc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($acc->id); ?>" <?php echo e((($acc->id == $e->accounting_entry_id) ? "selected" : "")); ?>><?php echo e($acc->description); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="flex justify-between space-x-2 mt-4">
                            <div class="w-full">
                                <label for="hourly_rate" class="block text-sm text-gray-700 capitalize white:text-gray-200">Hourly Rate</label>
                                <input type="text" name="hourly_rate" value="<?php echo e($e->hourly_rate); ?>" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            </div>
                            <div class="w-full">
                                <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                    Daily Rate
                                </label>
                                <input type="text" name="daily_rate" value="<?php echo e($e->daily_rate); ?>" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            </div>
                            <div class="w-full">
                                <label for="monthly_rate" class="block text-sm text-gray-700 capitalize white:text-gray-200">Monthly Rate</label>
                                <input type="text" name="monthly_rate" value="<?php echo e($e->monthly_rate); ?>" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            </div>
                        </div>

                        <hr class="my-8">
                        <div class="w-full">
                            <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                HMO Dependents
                            </label>
                            <div class="flex justify-between space-x-2">
                                <?php for($c=0;$c < count($data); $c++): ?>
                                    <input type="number" name="<?php echo e('dependent_'.$data[$c]['id']); ?>" value="<?php echo e($data[$c]['no_of_dependent']); ?>" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40"> 
                                <?php endfor; ?>
                            </div>
                        </div>
                            
                        
                        <div class="flex justify-end mt-6">
                            <button type="submit" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl w-full white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                Update
                            </button>
                        </div>
                    </form>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div> 
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\payroll_system\resources\views/employees/edit.blade.php ENDPATH**/ ?>