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
                <div class="flex justify-between  pb-2 bg-white white:bg-gray-900">
                    <div > 
                        <h2 class="uppercase font-semibold py-2">OverTime 
                            <?php if(isset($_GET['employee_id'])): ?>
                                (<?php echo e(date('Y F',strtotime($_GET['month_year']))." | ".$_GET['period']); ?>)
                            <?php endif; ?>
                        </h2>
                    </div>
                    <div class="flex">
                        <a href="<?php echo e(route('ot.index')); ?>"  type="button">
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
                <form action="<?php echo e(route('ot.store')); ?>" method="POST" >
                    <?php echo csrf_field(); ?>
                        <div class="flex justify-center">
                            <div class="w-6/12">
                                <label for="" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200 px-2   w-60">Overtime Date: </label>
                                <div class="px-2 flex justify-between">
                                    <select id="overtime_date" name="overtime_date" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40" onchange="getRecordedtime('<?php echo e($_GET['personal_id']); ?>')">
                                        <option value=''>--Select Overtime Date--</option>
                                        <?php $__currentLoopData = $timedate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php 
                                                $hours=date('H',strtotime($d->total_time));
                                                $minutes=date('i',strtotime($d->total_time));
                                            ?>
                                            <?php if($d->schedule_type=='regular'): ?>{
                                                <?php if($hours>=9 && $minutes>=30): ?>
                                                <option value='<?php echo e($d->log_date); ?>'><?php echo e(date('F d,Y',strtotime($d->log_date ))); ?></option>
                                                <?php elseif($hours>=10): ?>
                                                <option value='<?php echo e($d->log_date); ?>'><?php echo e(date('F d,Y',strtotime($d->log_date ))); ?></option>
                                                <?php endif; ?>
                                            <?php else: ?> if($d->schedule_type=='shifting')
                                                <?php if($hours>=8 && $minutes>=30): ?>
                                                <option value='<?php echo e($d->log_date); ?>'><?php echo e(date('F d,Y',strtotime($d->log_date ))); ?></option>
                                                <?php elseif($hours>=10): ?>
                                                <option value='<?php echo e($d->log_date); ?>'><?php echo e(date('F d,Y',strtotime($d->log_date ))); ?></option>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-left px-4 mt-6 text-sm"> 
                            <p class="text-base uppercase name font-bold" id="name"></p>
                        </div>
                        <div class="flex justify-between pb-2 px-2 bg-amber-50 rounded-2xl text-sm">
                            <div class="w-6/12 text-left px-2 mt-2">
                               <div class="flex justify-between">
                                    <div class="w-1/2">Time In: <span id='timein'></span></div>
                                    <div class="w-1/2">Time Out: <span id='timeout'></span></div>
                               </div>
                            </div>
                            <div class="w-6/12 text-left px-2 mt-2">
                                <div class="">
                                    Number of Hours: <span id="no_hrs"></span>
                                </div>
                            </div>
                            <div class="w-6/12 text-left px-2 mt-2">
                                <div class="">
                                    Holiday: <span id="holidays"></span>
                                </div>
                            </div>
                            <span id="showTime"></span>
                        </div>
                        <!-- <div class="px-2 flex justify-between">
                            <span id="showTime"></span>
                        </div> -->
                        <div id="loadpage">
                            <div class="flex justify-between pt-4 space-x-5">
                                <div class="w-1/2 px-2 bg-amber-50 px-5 pb-5 rounded-2xl">
                                    <h6 class="font-semibold border-b py-2">No. of Hours Worked</h6>
                                    <div class="flex justify-between mt-2">
                                        <label for="reg_day" class="block py-1 pt-2 pr-3 text-sm font-medium text-gray-700 ">REG DAY:</label>
                                        <input type="text" onkeypress="return isNumberKey(this, event)" name="reg_day" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-56 h-9 text-right" value='<?php echo e((!empty($get_data->reg_day_hr)) ? $get_data->reg_day_hr : '0'); ?>'>
                                    </div>
                                    <div class="flex justify-between mt-2">
                                        <label for="rd2" class="block py-1 pt-2 pr-3 text-sm font-medium text-gray-700 ">RD 2:</label>
                                        <input type="text" onkeypress="return isNumberKey(this, event)" name="rd2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-56 h-9 text-right" value='<?php echo e((!empty($get_data->RD_HR)) ? $get_data->RD_HR : '0'); ?>'>
                                    </div>
                                    <div class="flex justify-between mt-2">
                                        <label for="sh" class="block py-1 pt-2 pr-3 text-sm font-medium text-gray-700 ">SH:</label>
                                        <input type="text" onkeypress="return isNumberKey(this, event)" name="sh" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-56 h-9 text-right" value='<?php echo e((!empty($get_data->SH_HR)) ? $get_data->SH_HR : '0'); ?>'>
                                    </div>
                                    <div class="flex justify-between mt-2">
                                        <label for="sh_rd" class="block py-1 pt-2 pr-3 text-sm font-medium text-gray-700 ">SH on RD:</label>
                                        <input type="text" onkeypress="return isNumberKey(this, event)" name="sh_rd" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-56 h-9 text-right" value='<?php echo e((!empty($get_data->SH_RD_HR)) ? $get_data->SH_RD_HR : '0'); ?>'>
                                    </div>
                                    <div class="flex justify-between mt-2">
                                        <label for="reg_hol" class="block py-1 pt-2 pr-3 text-sm font-medium text-gray-700 ">Reg Hol:</label>
                                        <input type="text" onkeypress="return isNumberKey(this, event)" name="reg_hol" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-56 h-9 text-right" value='<?php echo e((!empty($get_data->RH_HR)) ? $get_data->RH_HR : '0'); ?>'>
                                    </div>
                                    <div class="flex justify-between mt-2">
                                        <label for="rh_rd" class="block py-1 pt-2 pr-3 text-sm font-medium text-gray-700 ">RH on RD 2:</label>
                                        <input type="text" onkeypress="return isNumberKey(this, event)" name="rh_rd" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-56 h-9 text-right" value='<?php echo e((!empty($get_data->RH_RD_HR)) ? $get_data->RH_RD_HR : '0'); ?>'>
                                    </div>
                                </div>
                                <div class="w-1/2 px-2 bg-amber-50 px-5 pb-5 rounded-2xl">
                                    <h6 class="font-semibold border-b py-2">Night Premium</h6>
                                    <div class="flex justify-between mt-2">
                                        <label for="reg_np" class="block py-1 pt-2 pr-3 text-sm font-medium text-gray-700 ">REG NP:</label>
                                        <input type="text" onkeypress="return isNumberKey(this, event)" name="reg_np" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-48 p-2" value='<?php echo e((!empty($get_data->reg_day_np_hr)) ? $get_data->reg_day_np_hr : '0'); ?>'>
                                    </div>
                                    <div class="flex justify-between mt-2">
                                        <label for="regnp_ot" class="block py-1 pt-2 pr-3 text-sm font-medium text-gray-700 ">REG NP OT:</label>
                                        <input type="text" onkeypress="return isNumberKey(this, event)" name="regnp_ot" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-48 p-2" value='<?php echo e((!empty($get_data->reg_np_ot_hr)) ? $get_data->reg_np_ot_hr : '0'); ?>'>
                                    </div>
                                    <div class="flex justify-between mt-2">
                                        <label for="regsh_np" class="block py-1 pt-2 pr-3 text-sm font-medium text-gray-700 ">RD2/SH NP:</label>
                                        <input type="text" onkeypress="return isNumberKey(this, event)" name="regsh_np" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-48 p-2" value='<?php echo e((!empty($get_data->RD_SH_NP_HR)) ? $get_data->RD_SH_NP_HR : '0'); ?>'>
                                    </div>
                                    <div class="flex justify-between mt-2">
                                        <label for="rd2sh_ot" class="block py-1 pt-2 pr-3 text-sm font-medium text-gray-700 ">RD2/SH NP OT:</label>
                                        <input type="text" onkeypress="return isNumberKey(this, event)" name="rd2sh_ot" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-48 p-2" value='<?php echo e((!empty($get_data->RD_SH_NP_OT_HR)) ? $get_data->RD_SH_NP_OT_HR : '0'); ?>'>
                                    </div>
                                    <div class="flex justify-between mt-2">
                                        <label for="shonrd2_np" class="block py-1 pt-2 pr-3 text-sm font-medium text-gray-700 ">SH on RD2 NP:</label>
                                        <input type="text" onkeypress="return isNumberKey(this, event)" name="shonrd2_np" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-48 p-2" value='<?php echo e((!empty($get_data->SH_RD_NP_HR)) ? $get_data->SH_RD_NP_HR : '0'); ?>'>
                                    </div>
                                    <div class="flex justify-between mt-2">
                                        <label for="shonrd2_npot" class="block py-1 pt-2 pr-3 text-sm font-medium text-gray-700 ">SH on RD2 NP OT:</label>
                                        <input type="text" onkeypress="return isNumberKey(this, event)" name="shonrd2_npot" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-48 p-2" value='<?php echo e((!empty($get_data->SH_RD_OT_NP_HR)) ? $get_data->SH_RD_OT_NP_HR : '0'); ?>'>
                                    </div>
                                    <div class="flex justify-between mt-2">
                                        <label for="rh_np" class="block py-1 pt-2 pr-3 text-sm font-medium text-gray-700 ">RH NP:</label>
                                        <input type="text" onkeypress="return isNumberKey(this, event)" name="rh_np" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-48 p-2" value='<?php echo e((!empty($get_data->RH_NP_HR)) ? $get_data->RH_NP_HR : '0'); ?>'>
                                    </div>
                                    <div class="flex justify-between mt-2">
                                        <label for="rhnp_ot" class="block py-1 pt-2 pr-3 text-sm font-medium text-gray-700 ">RH NP OT:</label>
                                        <input type="text" onkeypress="return isNumberKey(this, event)" name="rhnp_ot" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-48 p-2" value='<?php echo e((!empty($get_data->RH_OT_NP_HR)) ? $get_data->RH_OT_NP_HR : '0'); ?>'>
                                    </div>
                                    <div class="flex justify-between mt-2">
                                        <label for="rhrd2_np" class="block py-1 pt-2 pr-3 text-sm font-medium text-gray-700 ">RH on RD2 NP:</label>
                                        <input type="text" onkeypress="return isNumberKey(this, event)" name="rhrd_np" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-48 p-2" value='<?php echo e((!empty($get_data->RH_RD_NP_HR)) ? $get_data->RH_RD_NP_HR : '0'); ?>'>
                                    </div>
                                    <div class="flex justify-between mt-2">
                                        <label for="rhrd2_ot" class="block py-1 pt-2 pr-3 text-sm font-medium text-gray-700 ">RH on RD2 NP OT:</label>
                                        <input type="text" onkeypress="return isNumberKey(this, event)" name="rhrd2_ot" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-48 p-2" value='<?php echo e((!empty($get_data->RH_RD_OT_NP_HR)) ? $get_data->RH_RD_OT_NP_HR : '0'); ?>'>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <input type="hidden" name="ot_head_id" id="ot_head_id">
                    <input type="hidden" name="employee_id" id="employee_id" value="<?php echo e($_GET['employee_id']); ?>">
                    <input type="hidden" name="personal_id" id="personal_id" value="<?php echo e($_GET['personal_id']); ?>">
                    <input type="hidden" name="month_year" id="month_year" value="<?php echo e($_GET['month_year']); ?>">
                    <input type="hidden" name="period" id="period" value="<?php echo e($_GET['period']); ?>">
                    <input type="hidden" name="overtimedate" id="overtimedate" value="<?php echo e((isset($_GET['overtimedate'])) ? $_GET['overtimedate'] : ''); ?>">
                    <input type='submit' class="flex items-center justify-center my-4 px-3 py-2  space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50 w-full" value='Save'>
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