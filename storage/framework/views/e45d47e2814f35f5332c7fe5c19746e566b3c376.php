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
        <div class="flex flex-col flex-wrap sm:flex-row">
            <div class="p-4 relative h-full w-full text-center bg-white rounded-2xl shadow-lg white:bg-gray-800 white:border-gray-700">
                <div class="flex justify-between  pb-4 bg-white white:bg-gray-900">
                    <div > 
                        <h2 class="uppercase font-semibold py-2">Deduction Rate <small class="border-l-2 px-1">Update</small></h2>
                    </div>
                    <div class="flex">
                        <a href="<?php echo e(route('deductions.index')); ?>"  class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                            <span>Show List</span>
                        </a>
                    </div>
                </div>
                <?php if(Session::has('success')): ?>
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                        <span class="block sm:inline"><?php echo e(Session::get('success')); ?></span>
                    </div>
                <?php endif; ?>
                <?php if(Session::has('fail')): ?>
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <span class="block sm:inline"><?php echo e(Session::get('fail')); ?></span>
                    </div>
                <?php endif; ?>
                <form action="<?php echo e(route('deductions.update',$deduction->id)); ?>" method='POST' class="mt-5">
                <?php echo csrf_field(); ?>

                    <?php echo method_field("PATCH"); ?>
                    <div class="px-2">
                        <label for="" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Deduction Name</label>
                        <select name="payslip_info_id" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                        <option value="">Select Deduction</option>
                        <?php $__currentLoopData = $payslip; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($p->id); ?>" <?php echo e(($p->id  == $deduction->payslip_info_id) ? 'selected' : ''); ?>><?php echo e($p->description); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    
                    <div class="flex ">
                        <div class="mt-4 w-full px-2">
                            <label class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Frequency</label>
                            <!-- <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40"> -->
                            <select name="deduction_frequency" id="frequency" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                <option value="0">--Select Frequency--</option>
                                <option value="1" <?php echo e(($deduction->deduction_frequency  == 1) ? 'selected' : ''); ?>>Once a month</option>
                                <option value="2" <?php echo e(($deduction->deduction_frequency  == 2) ? 'selected' : ''); ?>>Twice a month</option>
                            </select>
                        </div>
                    <?php if($deduction->deduction_frequency == 1): ?>
                        <div class="mt-4 w-full px-2 hidden" id="period">
                            <label class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Deduction Period</label>
                            <!-- <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40"> -->
                            <select name="deduction_period" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                <option value="">--Select Deduction Period--</option>
                                <?php $__currentLoopData = $cutoff; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($c->id); ?>" <?php echo e(($c->id  == $deduction->deduction_period) ? 'selected' : ''); ?>><?php echo e($c->cutoff_type); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    <?php endif; ?>
                    </div> 
                    <div class="flex justify-end mt-6 px-2">
                        <button type="submit" value="Save" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl w-full white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                            Update
                        </button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
    <script>
    document.getElementById('frequency').addEventListener("change", function (e) {
                if (e.target.value === '0' || e.target.value === '2') {
                    document.getElementById('period').style.display = 'none';
                } else {
                    document.getElementById('period').style.display = 'block';
                }
            });
    </script>
    
        
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\payroll_system\resources\views/deduct/edit.blade.php ENDPATH**/ ?>