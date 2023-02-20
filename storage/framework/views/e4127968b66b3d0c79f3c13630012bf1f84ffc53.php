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
    <div class="p-4 relative h-full w-full text-center my-10 bg-white rounded-lg shadow-lg white:bg-gray-800 white:border-gray-700">
        <div class="flex justify-between pb-2 bg-white white:bg-gray-900">
            <div > 
                <h2 class="uppercase font-semibold py-2">Change Schedule <small class="border-l-2 px-1">Update</small></h2>
            </div>
            <div class="flex">
                <a href="<?php echo e(route('changeSched.index')); ?>" type="button">
                    <div class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white transition-colors duration-200 transform bg-indigo-500 rounded-3xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                        <span>Show List</span>
                    </div>
                </a>
            </div>
        </div>
        <?php if(!empty($change_schedule)): ?>
            <?php $__currentLoopData = $change_schedule; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php 
                $exp=explode('-',$cs->month_year);
                $year=$exp[0];
                $month=$exp[1];
            ?>
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
            <form action="<?php echo e(route('changeSched.update',$cs->id)); ?>" method='POST'>
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="flex justify-between space-x-2">
                    <div class="mt-4 w-6/12">
                        <label for="date_applied" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Date Applied</label>
                        <input type="date" name="date_applied" id="date_applied" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40" value='<?php echo e($cs->date_applied); ?>'>
                    </div>
                    <div class="mt-4 w-6/12">
                        <label for="employee" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Employee</label>
                        <select name="employee" id="employee" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            <option value="">--Select Name--</option>
                            <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($e->id); ?>" <?php echo e(($cs->employee_id!='0') ? (($e->id==$cs->employee_id) ? 'selected' : '') : ''); ?>><?php echo e($e->full_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="flex justify-between space-x-2">
                    <div class="mt-4 w-3/12">
                        <label for="month" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Month</label>
                        <select name="month" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40" required>
                            <option value="" selected>Select Month</option>
                            <option value="01" <?php echo e((!empty($month)) ? ($month=='01') ? 'selected' : '' : ''); ?>>January</option>
                            <option value="02" <?php echo e((!empty($month)) ? ($month=='02') ? 'selected' : '' : ''); ?>>February</option>
                            <option value="03" <?php echo e((!empty($month)) ? ($month=='03') ? 'selected' : '' : ''); ?>>March</option>
                            <option value="04" <?php echo e((!empty($month)) ? ($month=='04') ? 'selected' : '' : ''); ?>>April</option>
                            <option value="05" <?php echo e((!empty($month)) ? ($month=='05') ? 'selected' : '' : ''); ?>>May</option>
                            <option value="06" <?php echo e((!empty($month)) ? ($month=='06') ? 'selected' : '' : ''); ?>>June</option>
                            <option value="07" <?php echo e((!empty($month)) ? ($month=='07') ? 'selected' : '' : ''); ?>>July</option>
                            <option value="08" <?php echo e((!empty($month)) ? ($month=='08') ? 'selected' : '' : ''); ?>>August</option>
                            <option value="09" <?php echo e((!empty($month)) ? ($month=='09') ? 'selected' : '' : ''); ?>>September</option>
                            <option value="10" <?php echo e((!empty($month)) ? ($month=='10') ? 'selected' : '' : ''); ?>>October</option>
                            <option value="11" <?php echo e((!empty($month)) ? ($month=='11') ? 'selected' : '' : ''); ?>>November</option>
                            <option value="12" <?php echo e((!empty($month)) ? ($month=='12') ? 'selected' : '' : ''); ?>>December</option>
                        </select>
                    </div>
                    <div class="mt-4 w-3/12">
                        <label for="year" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Year</label>
                        <select name="year" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40" required>
                            <option value="">Select Year</option>
                            <?php
                                $years=date('Y');
                            ?>
                            <?php for($y=2015;$y<=$years;$y++): ?>
                                <option value="<?php echo e($y); ?>"  <?php echo e((!empty($year)) ? ($year==$y) ? 'selected' : '' : ''); ?>><?php echo e($y); ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                    <div class="mt-4 w-6/12">
                        <label for="schedule_code" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">New Schedule</label>
                        <select name="schedule_code" id="schedule_code" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            <option value="">--Select Schedule--</option>
                            <?php $__currentLoopData = $schedule; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($s->id); ?>" <?php echo e(($cs->schedule_code==$s->id) ? 'selected' : ''); ?>><?php echo e($s->schedule_code); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="flex justify-between space-x-2">
                    <div class="mt-4 w-6/12">
                        <label for="start_date" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Start Date</label>
                        <input type="date" name="start_date" id="start_date" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40" value='<?php echo e($cs->start_date); ?>'>
                    </div>
                    <div class="mt-4 w-6/12">
                        <label for="end_date" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">End Date</label>
                        <input type="date" name="end_date" id="end_date" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40" value='<?php echo e($cs->end_date); ?>'>
                    </div>
                </div>
                <div class="flex justify-end mt-6">
                    <button type="submit" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl w-full white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                        Update
                    </button>
                </div>
            </form>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div> 
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\payroll_system\resources\views/change_sched/edit.blade.php ENDPATH**/ ?>