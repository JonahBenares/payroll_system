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
                <h2 class="uppercase font-semibold py-2">Change Schedule <small class="border-l-2 px-1">Add New</small></h2>
            </div>
            <div class="flex">
                <a href="<?php echo e(route('changeSched.index')); ?>" type="button">
                    <div class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white transition-colors duration-200 transform bg-indigo-500 rounded-3xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                        <span>Show List</span>
                    </div>
                </a>
            </div>
        </div>
        <form  method="post" >
            <div class="flex justify-between space-x-2">
                <div class="mt-4 w-6/12">
                    <label for="email" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Date Applied</label>
                    <input type="date" name="cutoff_start" id="cutoff_start" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                </div>
                <div class="mt-4 w-6/12">
                    <label for="email" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Employee</label>
<<<<<<< HEAD
                    <select type="text" name="cutoff_start" id="cutoff_start" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
=======
                    <select name="employee" id="employee" class="px-0 text-sm bg-transparent border-0 text-left py-0 border-b border-gray-300 w-full">
                        <option value="">--Select Name--</option>
                        <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($e->id); ?>" <?php echo e((!empty($employee_id)) ? (($e->id==$employee_id) ? 'selected' : '') : ''); ?>><?php echo e($e->full_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
>>>>>>> 2dd0f06f19af7ba0492856a26b7e3ec0deb7fb2c
                    </select>
                </div>
            </div>
            <div class="flex justify-between space-x-2">
                <div class="mt-4 w-3/12">
                    <label for="email" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Month</label>
<<<<<<< HEAD
                    <select type="text" name="cutoff_start" id="cutoff_start" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
=======
                    <select name="month" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 w-60" required>
                        <option value="" selected>Select Month</option>
                        <option value="01">January</option>
                        <option value="02">February</option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                        <option value="05">May</option>
                        <option value="06">June</option>
                        <option value="07">July</option>
                        <option value="08">August</option>
                        <option value="09">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
>>>>>>> 2dd0f06f19af7ba0492856a26b7e3ec0deb7fb2c
                    </select>
                </div>
                <div class="mt-4 w-3/12">
                    <label for="email" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Year</label>
<<<<<<< HEAD
                    <select type="text" name="cutoff_start" id="cutoff_start" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
=======
                    <select name="year" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 w-60" required>
                        <option value="">Select Year</option>
                        <?php
                            $year=date('Y');
                        ?>
                        <?php for($y=2015;$y<=$year;$y++): ?>
                            <option value="<?php echo e($y); ?>"><?php echo e($y); ?></option>
                        <?php endfor; ?>
>>>>>>> 2dd0f06f19af7ba0492856a26b7e3ec0deb7fb2c
                    </select>
                </div>
                <div class="mt-4 w-6/12">
                    <label for="email" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">New Schedule</label>
                    <select type="text" name="cutoff_start" id="cutoff_start" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                    </select>
                </div>
            </div>
            <div class="flex justify-between space-x-2">
                <div class="mt-4 w-6/12">
                    <label for="email" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Start Date</label>
                    <input type="date" name="cutoff_start" id="cutoff_start" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                </div>
                <div class="mt-4 w-6/12">
                    <label for="email" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">End Date</label>
                    <input type="date" name="cutoff_start" id="cutoff_start" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                </div>
            </div>
            <div class="flex justify-end mt-6">
                <button type="submit" value="Save" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl w-full white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                    Submit
                </button>
            </div>
        </form>
    </div> 
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\payroll_system\resources\views/change_sched/create.blade.php ENDPATH**/ ?>