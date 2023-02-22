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
				<div class="flex justify-between pr-4 pl-4 pt-4 rounded-t-lg">
					<div > 
						<h2 class="uppercase font-semibold py-2">Holidays <small class="border-l-2 px-1">Update</small></h2>
                    </div>
                    <div class="flex">
                        <a href="<?php echo e(route('holiday.index')); ?>" type="button">
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
                    <form  action="<?php echo e(route('holiday.update',$holiday->id)); ?>" method='POST'>
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="flex justify-between space-x-2 ">
                            <div class=" w-full">
                                <label for="" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Holiday Name</label>
                                <input type="text" name="holiday_name" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40"  value="<?php echo e($holiday->holiday_name); ?>">
                            </div>
                            <div class=" w-full">
                                <label for="" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Holiday Type</label>
                                <select name="holiday_type" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">  
                                    <option value="" selected>-Select Type-</option>
                                    <option value="Regular" <?php echo e(($holiday->holiday_type=='Regular') ? 'selected' : ''); ?>>Regular</option>
                                    <option value="Special" <?php echo e(($holiday->holiday_type=='Special') ? 'selected' : ''); ?>>Special</option>
                                    <option value="Double" <?php echo e(($holiday->holiday_type=='Double') ? 'selected' : ''); ?>>Double</option>
                                </select>
                                <!-- <input type="text" name="holiday_type" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40"  value="<?php echo e($holiday->holiday_type); ?>"> -->
                            </div>
                        </div>
                        <div class="flex justify-between space-x-2 mt-4">
                            <div class="w-full">
                                <label for="" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Date</label>
                                <input type="date" name="holiday_date" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40" value="<?php echo e($holiday->holiday_date); ?>">
                            </div>
                            <div class="flex justify-between space-x-2 w-full">
                                <div class="w-full">
                                    <label class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Year</label>
                                    <select type="text" name="calendar_year" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                        <option value=""> -- Select Year -- </option>
                                        <?php echo e($year=date('Y',strtotime('+3 year'))); ?>

                                        <?php echo e($last= date('Y')-2); ?>

                                        <?php for($x=$last;$x<=$year;$x++): ?>
                                        <option <?php echo e(($x==$holiday->calendar_year) ? 'selected' : ''); ?> value="<?php echo e($x); ?>"> <?php echo e($x); ?> </option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                                <div class="w-full">
                                    <label class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Rate</label>
                                    <input type="text" onkeypress="return isNumberKey(this, event)" name="holiday_rate" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40" value="<?php echo e($holiday->holiday_rate); ?>">
                                </div>
                            </div> 
                        </div>

                        <input type="hidden" name="id" value="<?php echo e($holiday->id); ?>">
                        <div class="flex justify-end mt-6 ">
                            <button type="submit" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-3xl w-full white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                Update
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
<script>
    function isNumberKey(txt, evt){
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode == 46) {
            //Check if the text already contains the . character
            if (txt.value.indexOf('.') === -1) {
                return true;
            } else {
                return false;
            }
        } else {
            if (charCode > 31
                && (charCode < 48 || charCode > 57))
                return false;
        }
        return true;
    }
</script><?php /**PATH C:\xampp\htdocs\payroll_system\resources\views/holidays/edit.blade.php ENDPATH**/ ?>