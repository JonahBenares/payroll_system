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
            <div class="p-4 relative h-full w-full text-center bg-white rounded-lg shadow-lg white:bg-gray-800 white:border-gray-700">
                <div class="flex justify-between pb-2 bg-white white:bg-gray-900">
                    <div > 
                        <h2 class="uppercase font-semibold py-2">Employee Deduction <small class="border-l-2 px-1">Update</small></h2>
                    </div>
                    <div class="flex">
                        <a href="<?php echo e(route('empDeduction.index')); ?>" type="button">
                            <div class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white transition-colors duration-200 transform bg-indigo-500 rounded-3xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                <span>Show List</span>
                            </div>
                        </a>
                    </div>
                </div>
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
                <div class="flex flex-row justify-between">
                    <div class="px-1 w-6/12">
                        <span class="block w-full text-left">Deduciton Name</span>
                    </div>
                    <div class="px-1 w-5/12">
                        <span class="block w-full text-left">Rate</span>
                    </div>
                    <div class="px-1 w-1/12 text-center">
                        Action
                    </div>
                </div>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" id='show_alert' role="alert" style="display:none">
                    <span class="block sm:inline" id="alerterror"></span>
                </div>
                <?php $x=1; ?>
                <?php $__currentLoopData = $deductions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <form action="<?php echo e(route('empDeduction.update',$ar->employee_id)); ?>" method='POST'>
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="flex flex-row justify-between appends" id="appends0">
                        <div class="px-1 w-6/12">
                            <select name="description[]" id="description<?php echo e($x); ?>" class="text-sm w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 description" onchange='check_duplicate_info()'>
                                <option value="">--Select Deduction Name--</option>
                                <?php $__currentLoopData = $info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($a->id); ?>" <?php echo e(($a->id==$ar->payslip_info_id) ? 'selected' : ''); ?>><?php echo e($a->description); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="px-1 w-5/12">
                            <input type="text" onkeypress="return isNumberKey(this, event)" name="employee_rate[]" id="employee_rate<?php echo e($x); ?>" class="text-sm w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 employee_rate" value="<?php echo e($ar->employee_rate); ?>">
                        </div>
                        <div class="px-1 w-1/12 addmoreappend flex justify-center space-x-1">
                            <input type="hidden" name="employee_id" id="employee_id" value="<?php echo e($ar->employee_id); ?>">
                            <input type="hidden" name="personal_id" id="personal_id" value="<?php echo e($ar->personal_id); ?>">
                            <input type="hidden" name="employee_deduction_id[]" id="employee_deduction_id" value="<?php echo e($ar->id); ?>">


                            <button class="flex items-center justify-center my-2 py-2 px-2 text-xs tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50 addInfo">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                  </svg>
                            </button>
                            <a id="delete_func<?php echo e($x); ?>" href="<?php echo e(route('delete_info',['id'=>$ar->id,'emp_id'=>$ar->employee_id])); ?>" class="flex items-center justify-center px-2 py-2  my-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-500 rounded-2xl white:bg-red-600 white:hover:bg-red-700 white:focus:bg-red-700 hover:bg-red-600 focus:outline-none focus:bg-red-500 focus:ring focus:ring-red-300 focus:ring-opacity-50 delete_func" title="Delete" onclick="return confirm('Are you sure you want to delete this record?');">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>   
                            </a>
                        </div>
                    </div>
                    <?php $x++; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="flex justify-end mt-6 px-2">
                        <input type="hidden" name="count" id="count" value="<?php echo e($count); ?>">
                        <input type='hidden' name='counterX' id='counterX'>
                        <button type="submit" id="save_button" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl w-full white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                            Update
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
<?php /**PATH C:\xampp\htdocs\payroll_system\resources\views/emp_deduction/edit.blade.php ENDPATH**/ ?>