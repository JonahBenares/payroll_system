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
                <div class="flex space-x-2 pb-5">
                    <a href="<?php echo e(route('otOffice.index')); ?>" class="hover:bg-blue-300 bg-blue-500 text-sm px-5 py-1 rounded-2xl text-white font-bold">OT Office</a>
                    <a href="<?php echo e(route('otSite.index')); ?>" class="hover:bg-emerald-200 hover:text-white  bg-gray-100  text-sm px-6 py-1 rounded-2xl text-gray-300 font-bold">OT Site</a>
                </div>
                <form action="<?php echo e(route('filter_otoffice')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="flex justify-between space-x-4 w-full my-1">
                        
                        <div class="space-y-1 w-7/12">
                            <div class="flex justify-between space-x-2">
                                <p class="text-sm w-24 text-left">Name:</p>
                                <select name="employee" id="employee" class="px-0 text-sm bg-transparent border-0 text-left py-0 border-b border-gray-300 w-full">
                                    <option value="">--Select Name--</option>
                                    <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($e->id); ?>" <?php echo e((!empty($employee_id)) ? (($e->id==$employee_id) ? 'selected' : '') : ''); ?>><?php echo e($e->full_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <!-- <input type="text" class="px-0 text-sm bg-transparent border-0 text-left py-0 border-b border-gray-300 w-full"> -->
                            </div>
                            <div class="flex justify-between space-x-2">
                                <p class="text-sm w-24 text-left">Designation:</p>
                                <input type="text" id="designation" class="px-0 text-sm bg-transparent border-0 text-left py-0 border-b border-gray-300 w-full" value="<?php echo e((!empty($designation_disp)) ? $designation_disp : ''); ?>" readonly>
                            </div>
                        </div>
                        <div class="space-y-1 w-5/12">
                            <div class="flex justify-between space-x-2">
                                <p class="text-sm w-24 text-right">Period:</p>
                                <select name="month" class="px-0 text-sm bg-transparent border-0 text-left py-0 border-b border-gray-300 w-full" required>
                                    <option value="" selected>Select Month</option>
                                    <option value="01" <?php echo e((isset($_POST['month'])) ? ($_POST['month']=='01') ? 'selected' : '' : ''); ?>>January</option>
                                    <option value="02" <?php echo e((isset($_POST['month'])) ? ($_POST['month']=='02') ? 'selected' : '' : ''); ?>>February</option>
                                    <option value="03" <?php echo e((isset($_POST['month'])) ? ($_POST['month']=='03') ? 'selected' : '' : ''); ?>>March</option>
                                    <option value="04" <?php echo e((isset($_POST['month'])) ? ($_POST['month']=='04') ? 'selected' : '' : ''); ?>>April</option>
                                    <option value="05" <?php echo e((isset($_POST['month'])) ? ($_POST['month']=='05') ? 'selected' : '' : ''); ?>>May</option>
                                    <option value="06" <?php echo e((isset($_POST['month'])) ? ($_POST['month']=='06') ? 'selected' : '' : ''); ?>>June</option>
                                    <option value="07" <?php echo e((isset($_POST['month'])) ? ($_POST['month']=='07') ? 'selected' : '' : ''); ?>>July</option>
                                    <option value="08" <?php echo e((isset($_POST['month'])) ? ($_POST['month']=='08') ? 'selected' : '' : ''); ?>>August</option>
                                    <option value="09" <?php echo e((isset($_POST['month'])) ? ($_POST['month']=='09') ? 'selected' : '' : ''); ?>>September</option>
                                    <option value="10" <?php echo e((isset($_POST['month'])) ? ($_POST['month']=='10') ? 'selected' : '' : ''); ?>>October</option>
                                    <option value="11" <?php echo e((isset($_POST['month'])) ? ($_POST['month']=='11') ? 'selected' : '' : ''); ?>>November</option>
                                    <option value="12" <?php echo e((isset($_POST['month'])) ? ($_POST['month']=='12') ? 'selected' : '' : ''); ?>>December</option>
                                </select>
                                <select name="year" class="px-0 text-sm bg-transparent border-0 text-left py-0 border-b border-gray-300 w-full" required>
                                    <option value="">Select Year</option>
                                    <?php
                                        $years=date('Y');
                                    ?>
                                    <?php for($y=2015;$y<=$years;$y++): ?>
                                        <option value="<?php echo e($y); ?>" <?php echo e((isset($_POST['year'])) ? ($_POST['year']==$y) ? 'selected' : '' : ''); ?>><?php echo e($y); ?></option>
                                    <?php endfor; ?>
                                </select>
                                <select name="period" class="px-0 text-sm bg-transparent border-0 text-left py-0 border-b border-gray-300 w-full" required>
                                    <!-- <option value="" selected>Period</option> -->
                                    <option value="">--Select Period--</option>
                                    <?php $__currentLoopData = $cutoff; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($ca->cutoff_type); ?>" <?php echo e((isset($_POST['period'])) ? ($_POST['period']==$ca->cutoff_type) ? 'selected' : '' : ''); ?>><?php echo e($ca->cutoff_type); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="flex justify-between space-x-2">
                                <input type="submit" class="flex items-center justify-center px-2 py-2 mx-2 space-x-2 text-base tracking-wide text-white transition-colors duration-200 transform bg-indigo-500 rounded-3xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50 w-full" value="Filter">
                            </div>
                        </div>
                    </div>
                </form>
                <form action="<?php echo e(route('otOffice.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class=" hover:overflow-x-auto overflow-x-hidden h-100 max-h-100 pt-2 pr-2 pl-2 mt-3 md:pt-0 md:pr-0 md:pl-0 ">
                        <table class="border border-gray-300 text-sm w-full">
                            <tr>
                                <td class="border border-gray-300 px-2 text-left" width="40%">Regular Working Days</td>
                                <td class="border border-gray-300 px-2 text-right text-xs" width="20%"> <?php echo e((!empty($daily_rate)) ? number_format($daily_rate,2) : '0.00'); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs" width="20%"></td>
                                <td class="border border-gray-300 px-2 text-right text-xs" width="20%"><?php echo e((!empty($salary)) ? number_format($salary,2) : '0.00'); ?></td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">Rest Day</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> <?php echo e((!empty($restday)) ? number_format($restday,2) : '0.00'); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e((!empty($RD)) ? number_format($RD,2) : ''); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e((!empty($RD)) ? number_format($restday * $RD,2) : ''); ?></td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">Special Holiday</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> <?php echo e((!empty($special_holiday)) ? number_format($special_holiday,2) : '0.00'); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e((!empty($ins_shot)) ? number_format($ins_shot,2) : ''); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e((!empty($ins_shot)) ? number_format($special_holiday * $ins_shot,2) : ''); ?></td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">Special Holiday falling on RD</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> <?php echo e((!empty($special_holiday_restday)) ? number_format($special_holiday_restday,2) : '0.00'); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e((!empty($ins_shrdot)) ? number_format($ins_shrdot,2) : ''); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e((!empty($ins_shrdot)) ? number_format($special_holiday_restday * $ins_shrdot,2) : ''); ?></td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">Regular Holiday</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e((!empty($regular_holiday)) ? number_format($regular_holiday,2) : '0.00'); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e((!empty($ins_rhot)) ? number_format($ins_rhot,2) : ''); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e((!empty($ins_rhot)) ? number_format($regular_holiday * $ins_rhot,2) : ''); ?></td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">Regular Holiday falling on Restday</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e((!empty($reg_holiday_rd)) ? number_format($reg_holiday_rd,2) : '0.00'); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e((!empty($ins_rhrdot)) ? number_format($ins_rhrdot,2) : ''); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e((!empty($ins_rhrdot)) ? number_format($reg_holiday_rd * $ins_rhrdot,2) : ''); ?></td>
                            </tr>
                            <tr class="bg-gray-200">
                                <td class="border border-gray-300 px-2 text-left font-bold">Gross Pay</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> </td>
                                <td class="border border-gray-300 px-2 text-right text-xs"></td>
                                <td class="border border-gray-300 px-2 text-right font-bold">
                                    <?php
                                        if(!empty($daily_rate)){ 
                                            $total_rd=$restday * $RD;
                                            $total_sh=$special_holiday * $ins_shot;
                                            $total_shrd=$special_holiday_restday * $ins_shrdot;
                                            $total_rh=$regular_holiday * $ins_rhot;
                                            $total_rhrd=$reg_holiday_rd * $ins_rhrdot;
                                            $total_sum=$salary + $total_rd + $total_sh + $total_shrd + $total_rh + $total_rhrd;
                                            echo number_format($total_sum,2);
                                        } 
                                    ?>   
                                </td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">Absences</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e((!empty($daily_rate)) ? number_format($daily_rate,2) : '0.00'); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e((!empty($absence_count)) ? number_format($absence_count,2) : ''); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e((!empty($absence_count)) ? number_format($daily_rate * $absence_count,2) : ''); ?></td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">Undertime</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e((!empty($daily_rate)) ? number_format($daily_rate,2) : '0.00'); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e((!empty($daily_rate)) ? number_format($undertime_disp / 8,2) : ''); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e((!empty($daily_rate)) ? number_format($daily_rate*($undertime_disp / 8),2) : ''); ?></td>
                            </tr>
                            <tr>
                                <?php 
                                    if(!empty($daily_rate)){ 
                                        $tardiness_rate=$daily_rate/8;
                                    }
                                ?>
                                <td class="border border-gray-300 px-2 text-left">Tardiness</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e((!empty($daily_rate)) ? number_format($daily_rate/8,2) : '0.00'); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e((!empty($daily_rate)) ? number_format($tardy_disp,2) : '0.00'); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e((!empty($daily_rate)) ? number_format($tardiness_rate*$tardy_disp,2) : '0.00'); ?></td>
                            </tr>
                            <tr class="bg-gray-200">
                                <td class="border border-gray-300 px-2 text-left font-bold">Total</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> </td>
                                <td class="border border-gray-300 px-2 text-right text-xs"></td>
                                <td class="border border-gray-300 px-2 text-right font-bold">
                                    <?php 
                                        if(!empty($daily_rate)){ 
                                            $total_absent=$daily_rate * $absence_count;
                                            $total_undertime=$daily_rate*($undertime_disp / 8);
                                            $total_tardiness=$tardiness_rate*$tardy_disp;
                                            $total_aut=$total_absent + $total_undertime + $total_tardiness;
                                            echo number_format($total_aut,2);
                                        }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">Adjustments</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"></td>
                                <td class="border border-gray-300 px-2 text-right text-xs">
                                    
                                </td>
                            </tr>
                            <?php 
                                $total_amnt=array(); 
                            ?>
                            <?php if(!empty($adjustment_count) && $adjustment_count!=0): ?>
                                <?php 
                                    $x=1;        
                                ?>
                                <?php $__currentLoopData = $adjustment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php 
                                        if($adj->amount=='0' && $adj->days_hr=='0'){
                                            $total_amnt[]=$adj->total_amount; 
                                        }
                                    ?>
                                    <tr class="appendsadj" id="appendsadj0">
                                        <td class="border border-gray-300 text-left">
                                            <div id='loader<?php echo e($x); ?>'>
                                                <input type="hidden" name="adjustment_det_id[]" id='adjustment_det_id<?php echo e($x); ?>' class="text-sm p-0 w-full border-0 px-2 adjustment_det_id" value="<?php echo e((!empty($adj->id)) ? $adj->id : '0'); ?>">
                                            </div>
                                            <input type="text" name="description[]" class="text-sm p-0 w-full border-0 px-2" value="<?php echo e((!empty($adj->description)) ? $adj->description : ''); ?>">
                                        </td>
                                        <td class="border border-gray-300  text-right ">
                                            <input type="text" name="amount[]" id="amount" class="text-xs p-0 w-full border-0 px-2 text-right amount" value="<?php echo e(($adj->amount!='0') ? ((!empty($adj->amount)) ? $adj->amount : '') : ''); ?>" onchange="calculateAdjustment()">
                                        </td>
                                        <td class="border border-gray-300 px-2 text-right text-xs">
                                            <input type="text" name="days_hr[]" id="days_hr" class="text-xs p-0 w-full border-0 px-2 text-right days_hr" value="<?php echo e(($adj->days_hr!='0') ? ((!empty($adj->days_hr)) ? $adj->days_hr : '') : ''); ?>" onchange="calculateAdjustment()">
                                        </td>
                                        <td class="border border-gray-300 px-2 text-right text-xs flex justify-between space-x-1 addmoreappendadj">
                                            <input type="text" name="total_amount[]" id="total_amount" class="text-xs p-0 w-full border-0 px-2 text-right total_amount" value="<?php echo e($adj->total_amount); ?>" onkeyup="calculateAdjustment()" <?php echo e(($adj->amount=='0' && $adj->days_hr=='0' && $adj->total_amount!='0') ? 'style=background:#17f3f3;' : ''); ?>>
                                            <button class="text-sm bg-blue-600 text-white round-md p-1 addAdjustment">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                            <a id="delete_func<?php echo e($x); ?>" href="<?php echo e(route('destroyed',['id'=>$adj->id,'emp_id'=>$adj->employee_id])); ?>" class="flex items-center justify-center px-1 py-1 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-500 white:bg-red-600 white:hover:bg-1red-700 white:focus:bg-red-700 hover:bg-red-600 focus:outline-none focus:bg-red-500 focus:ring focus:ring-red-300 focus:ring-opacity-50 delete_func" title="Delete" onclick="return confirm('Are you sure you want to delete this record?');">
                                                <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-5 h-5'><path stroke-linecap='round' stroke-linejoin='round' d='M6 18L18 6M6 6l12 12' /></svg>   
                                            </a>
                                        </td>
                                    </tr>
                                <?php $x++; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <tr class="appendsadj" id="appendsadj0">
                                    <td class="border border-gray-300 text-left">
                                        <input type="text" name="description[]" class="text-sm p-0 w-full border-0 px-2">
                                    </td>
                                    <td class="border border-gray-300  text-right ">
                                        <input type="text" name="amount[]" id="amount" class="text-xs p-0 w-full border-0 px-2 text-right amount" onchange="calculateAdjustment()">
                                    </td>
                                    <td class="border border-gray-300 px-2 text-right text-xs">
                                        <input type="text" name="days_hr[]" id="days_hr" class="text-xs p-0 w-full border-0 px-2 text-right days_hr" onchange="calculateAdjustment()">
                                    </td>
                                    <td class="border border-gray-300 px-2 text-right text-xs flex justify-between space-x-1 addmoreappendadj">
                                        <input type="text" name="total_amount[]" id="total_amount" class="text-xs p-0 w-full border-0 px-2 text-right total_amount" onkeyup="calculateAdjustment()">
                                        <button class="text-sm bg-blue-600 text-white round-md p-1 addAdjustment">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                            <?php endif; ?>
                            <tr class="bg-gray-200">
                                <td class="border border-gray-300 px-2 text-left font-bold">TOTAL Adjustment</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> </td>
                                <td class="border border-gray-300 px-2 text-right text-xs"></td>
                                <td class="border border-gray-300 px-2 text-right font-bold" id="overall_adjustment"><?php echo e((!empty($adjustment_count) && $adjustment_count!=0) ? number_format(array_sum($total_amnt),2) : '0.00'); ?></td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left text-xs font-bold" colspan="4">OVERTIME</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">Reg OT rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e(!empty($reg_otcalc) ? number_format($reg_otcalc,2) : ''); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e(!empty($ins_regot) ? number_format($ins_regot,2) : ''); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e(!empty($ins_regot) ? number_format($reg_otcalc*$ins_regot,2) : ''); ?></td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">RD2 OT rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e(!empty($restday) ? number_format($restday,2) : ''); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e(!empty($RD) ? number_format($RD,2) : ''); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e(!empty($RD) ? number_format($restday*$RD,2) : ''); ?></td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">SH OT rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e(!empty($sh_otcalc) ? number_format($sh_otcalc,2) : ''); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e(!empty($ins_shot) ? number_format($ins_shot,2) : ''); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e(!empty($ins_shot) ? number_format($sh_otcalc*$ins_shot,2) : ''); ?></td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">SH on RD2 OT rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e(!empty($special_holiday_restday) ? number_format($special_holiday_restday,2) : ''); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e(!empty($ins_shrdot) ? number_format($ins_shrdot,2) : ''); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e(!empty($ins_shrdot) ? number_format($special_holiday_restday*$ins_shrdot,2) : ''); ?></td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">RH OT rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e(!empty($regular_holiday) ? number_format($regular_holiday,2) : ''); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e(!empty($ins_rhot) ? number_format($ins_rhot,2) : ''); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e(!empty($ins_rhot) ? number_format($regular_holiday*$ins_rhot,2) : ''); ?></td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">RH on RD2 OT rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e((!empty($reg_holiday_rd)) ? number_format($reg_holiday_rd,2) : '0.00'); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e((!empty($ins_rhrdot)) ? number_format($ins_rhrdot,2) : ''); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e((!empty($ins_rhrdot)) ? number_format($ins_rhrdot * $reg_holiday_rd,2) : ''); ?></td>
                            </tr>
                            <tr class="bg-gray-200">
                                <td class="border border-gray-300 px-2 text-left font-bold">Total Overtime</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> </td>
                                <td class="border border-gray-300 px-2 text-right text-xs"></td>
                                <td class="border border-gray-300 px-2 text-right font-bold">
                                    <?php 
                                        if(!empty($daily_rate)){ 
                                            $total_regot=$reg_otcalc*$ins_regot;
                                            $total_rd2ot=$restday*$RD;
                                            $total_shot=$sh_otcalc*$ins_shot;
                                            $total_shrd2ot=$special_holiday_restday*$ins_shrdot;
                                            $total_rhot=$regular_holiday*$ins_rhot;
                                            $total_rhrd2ot=$ins_rhrdot * $reg_holiday_rd;
                                            $total_overtime=$total_regot + $total_rd2ot + $total_shot + $total_shrd2ot + $total_rhot + $total_rhrd2ot;
                                            echo number_format($total_overtime,2);
                                        }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left text-xs font-bold" colspan="4">NIGHT SHIFT PREMIUM</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">Reg NP Rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e(!empty($reg_np) ? number_format($reg_np,2) : ''); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e(!empty($ins_regnpot) ? number_format($ins_regnpot,2) : ''); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e(!empty($ins_regnpot) ? number_format($reg_np * $ins_regnpot,2) : ''); ?></td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">Reg NP OT Rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e(!empty($reg_np_ot) ? number_format($reg_np_ot,2) : ''); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e(!empty($ins_regnp2ot) ? number_format($ins_regnp2ot,2) : ''); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e(!empty($ins_regnp2ot) ? number_format($reg_np_ot * $ins_regnp2ot,2) : ''); ?></td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">RD2 / SH NP Rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e(!empty($rdsh_np) ? number_format($rdsh_np,2) : ''); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e(!empty($ins_rdshot) ? number_format($ins_rdshot,2) : ''); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e(!empty($ins_rdshot) ? number_format($rdsh_np * $ins_rdshot,2) : ''); ?></td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">RD2 / SH NP OT Rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e(!empty($rdsh_np_ot) ? number_format($rdsh_np_ot,2) : ''); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e(!empty($ins_rdsh2ot) ? number_format($ins_rdsh2ot,2) : ''); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e(!empty($ins_rdsh2ot) ? number_format($rdsh_np_ot * $ins_rdsh2ot,2) : ''); ?></td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">SH on RD2 NP rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e(!empty($shrd_np) ? number_format($shrd_np,2) : ''); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e(!empty($ins_shrdnp) ? number_format($ins_shrdnp,2) : ''); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e(!empty($ins_shrdnp) ? number_format($shrd_np * $ins_shrdnp,2) : ''); ?></td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">SH on RD2 NP OT rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e(!empty($shrd_np_ot) ? number_format($shrd_np_ot,2) : ''); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e(!empty($ins_shrdnpot) ? number_format($ins_shrdnpot,2) : ''); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e(!empty($ins_shrdnpot) ? number_format($shrd_np_ot * $ins_shrdnpot,2) : ''); ?></td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">RH NP RATE</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e(!empty($rh_np) ? number_format($rh_np,2) : ''); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e(!empty($ins_rhnpot) ? number_format($ins_rhnpot,2) : ''); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e(!empty($ins_rhnpot) ? number_format($rh_np * $ins_rhnpot,2) : ''); ?></td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">RH NP OT Rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e(!empty($rh_np_ot) ? number_format($rh_np_ot,2) : ''); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e(!empty($ins_rhnp2ot) ? number_format($ins_rhnp2ot,2) : ''); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e(!empty($ins_rhnp2ot) ? number_format($rh_np_ot * $ins_rhnp2ot,2) : ''); ?></td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">RH on RD2 NP Rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e(!empty($rhrd_np) ? number_format($rhrd_np,2) : ''); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e(!empty($ins_rhrdotnp) ? number_format($ins_rhrdotnp,2) : ''); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e(!empty($ins_rhrdotnp) ? number_format($rhrd_np * $ins_rhrdotnp,2) : ''); ?></td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">RH on RD2 NP OT Rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e(!empty($rhrd_np_ot) ? number_format($rhrd_np_ot,2) : ''); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e(!empty($ins_rhrd2ot) ? number_format($ins_rhrd2ot,2) : ''); ?></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"><?php echo e(!empty($ins_rhrd2ot) ? number_format($rhrd_np_ot * $ins_rhrd2ot,2) : ''); ?></td>
                            </tr>

                            <tr class="bg-gray-200">
                                <td class="border border-gray-300 px-2 text-left font-bold">Total Night Premium  </td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> </td>
                                <td class="border border-gray-300 px-2 text-right text-xs"></td>
                                <td class="border border-gray-300 px-2 text-right font-bold">
                                    <?php
                                        if(!empty($daily_rate)){ 
                                            $total_regnp=$reg_np * $ins_regnpot;
                                            $total_regnpot=$reg_np_ot * $ins_regnp2ot;
                                            $total_rdsh=$rdsh_np * $ins_rdshot;
                                            $total_rdshot=$rdsh_np_ot * $ins_rdsh2ot;
                                            $total_shrdnp=$shrd_np * $ins_shrdnp;
                                            $total_shrdnpot=$shrd_np_ot * $ins_shrdnpot;
                                            $total_rhnp=$rh_np * $ins_rhnpot;
                                            $total_rhnpot=$rh_np_ot * $ins_rhnp2ot;
                                            $total_rhrdnp=$rhrd_np * $ins_rhrdotnp;
                                            $total_rhrdnpot=$rhrd_np_ot * $ins_rhrd2ot;
                                            $total_nightpremium=$total_regnp + $total_regnpot + $total_rdsh + $total_rdshot + $total_shrdnp + $total_shrdnpot + $total_rhnp + $total_rhnpot + $total_rhrdnp + $total_rhrdnpot;
                                            echo number_format($total_nightpremium,2);
                                        }
                                    ?>
                                </td>
                            </tr>
                            <tr class="bg-yellow-200">
                                <td class="border border-gray-300 px-2 text-left font-bold">TOTAL OT & NP</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> </td>
                                <td class="border border-gray-300 px-2 text-right text-xs"></td>
                                <td class="border border-gray-300 px-2 text-right font-bold">
                                    <?php 
                                        if(!empty($daily_rate)){ 
                                            $total_otnp=$total_overtime + $total_nightpremium;
                                            echo number_format($total_otnp,2);
                                        }
                                    ?>
                                </td>
                            </tr>
                            <tr class="bg-orange-200">
                                <td class="border border-gray-300 px-2 text-left font-bold">TOTAL COMPUTATION</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> </td>   
                                <td class="border border-gray-300 px-2 text-right text-xs"></td>
                                <td class="border border-gray-300 px-2 text-right text-base font-bold"><?php echo e((!empty($daily_rate)) ? number_format($total_sum + $total_overtime + $total_nightpremium + array_sum($total_amnt) + $total_aut,2) : '0.00'); ?></td>
                            </tr>
                        </table>
                        <input type="hidden" id="counterY" name="counterY">
                        <input type='hidden' id="counter" name="counter" value="<?php echo e((!empty($adjustment_count)) ? $adjustment_count : '0'); ?>">
                        <input type="hidden" name="location_id" value="<?php echo e((!empty($location_id)) ? $location_id : ''); ?>">
                        <input type="hidden" name="personal_id" value="<?php echo e((!empty($personal_id)) ? $personal_id : ''); ?>">
                        <input type="hidden" name="employee_id" value="<?php echo e((!empty($_POST['employee'])) ? $_POST['employee'] : ''); ?>">
                        <input type="hidden" name="period_type" value="<?php echo e((!empty($_POST['period'])) ? $_POST['period'] : ''); ?>">
                        <input type="hidden" name="month_year" value="<?php echo e((!empty($_POST['month']) && !empty($_POST['year'])) ? $_POST['year']."-".$_POST['month'] : ''); ?>">
                        <input type="submit" class="flex items-center justify-center px-2 py-2 mt-5 text-base tracking-wide text-white transition-colors duration-200 transform bg-indigo-500 rounded-3xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50 w-full" value="Save">
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
<?php /**PATH C:\xampp\htdocs\payroll_system\resources\views/ot_office/index.blade.php ENDPATH**/ ?>