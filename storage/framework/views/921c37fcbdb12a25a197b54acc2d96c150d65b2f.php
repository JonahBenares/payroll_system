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
                <div class="flex justify-between  pb-4 bg-white white:bg-gray-900">
                    <div > 
                        <h2 class="uppercase font-semibold py-2">
                            ot List
                            <?php if(!empty($month)): ?>
                                <?php 
                                    $monthName = date('F', mktime(0, 0, 0, $month, 10));
                                ?>
                                (<?php echo e(date('F',strtotime($monthName))." ".$year." | ".$exp_period); ?>)
                            <?php endif; ?>
                        </h2>
                    </div>
                    <div class="flex">
                        <label for="table-search" class="sr-only">Search</label>
                        <form class="flex items-center">   
                            <label for="simple-search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                                </div>
                                <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 px-3 py-2 rounded-l-2xl" placeholder="Search" required>
                            </div>
                            <button type="submit" class="px-2 py-2 text-sm font-medium text-white border border-gray-300 bg-gray-300 rounded-r-2xl hover:bg-gray-400 hover:border hover:border-gray-400 focus:outline-none focus:bg-gray-500 focus:ring focus:ring-gray-300 focus:ring-opacity-50 ">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                <span class="sr-only">Search</span>
                            </button>
                        </form>
                    </div>
                </div>
                <form action="<?php echo e(route('filter_overtime')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="flex justify-center pb-1 pt-2 bg-white white:bg-gray-900">
                        <div class="mx-2 text-left">
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
                            </select>
                        </div>
                        <div class="mx-2 text-left">
                            <select name="year" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 w-60" required>
                                <option value="">Select Year</option>
                                <?php
                                    $years=date('Y');
                                ?>
                                <?php for($y=2015;$y<=$years;$y++): ?>
                                    <option value="<?php echo e($y); ?>"><?php echo e($y); ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                        <div class="mx-2 text-left">
                            <select name="period" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 w-60" required>
                                <!-- <option value="" selected>Period</option> -->
                                <option value="">--Select Period--</option>
                                <?php $__currentLoopData = $cutoff; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($ca->cutoff_type."|".$ca->cutoff_start."-".$ca->cutoff_end); ?>"><?php echo e($ca->cutoff_type); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="mx-2 pt-2 text-left">
                            <button type="submit" class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-3xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                <span>Generate</span>
                            </button>
                        </div>
                    </div>
                </form>
                <div class="flex mt-5 uppercase">
                    <p class="text-left text-lg uppercase text-gray-600 pt-2 leading-none"><span class="font-bold pr-1">March</span>2022</p>
                </div>
                <div class="flex space-x-1 uppercase">
                    <p class="text-sm">Period </p>
                </div>
                <div class="overflow-x-auto overflow-y-hidden hover:overflow-y-auto h-100 relative max-h-100 pt-2 pr-2 pl-2 mt-3 md:pt-0 md:pr-0 md:pl-0 sm:rounded-2xl">
                    <table class="w-full text-sm text-left text-gray-500 white:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 white:bg-gray-700 white:text-gray-400 sticky top-0 z-10">
                            <tr class="">
                                <th scope="col" class="py-3 px-6" width="30%">
                                    Employee Name
                                </th>
                                <th scope="col" class="py-3 px-6" width="20%">
                                    Tentative OT Hours
                                </th>
                                <th scope="col" class="py-3 px-6" width="20%">
                                    OT Hours
                                </th>
                                <th scope="col" class="py-3 px-6" width="15%">
                                    Amount
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($timekeeping)): ?>
                            <?php 
                                $x=0;
                            ?>
                            <?php $__currentLoopData = $timekeeping; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $data2 = array();
                                    foreach($timedate AS $value){
                                        if($value->personal_id==$e->personal_id){
                                            $key = date('Y-m-d',strtotime($value->recorded_time));
                                            if(!isset($data2[$key])) {   
                                                $data2[$key] = array(
                                                    'personal_id'=>$value->personal_id,
                                                    'time_in'=>$value->time_in,
                                                    'rec_time'=>$value->recorded_time,
                                                    'schedule_type'=>$value->schedule_type,
                                                    'recorded_time' => array(),
                                                );
                                            }        
                                            $data2[$key]['recorded_time'][] = date('Y-m-d H:i',strtotime($value->recorded_time)).",";  
                                        }
                                    }
                                    $total_hours=[];
                                    $total_min=[];
                                    $overall_time=[];
                                    $y=0;
                                ?>
                                <?php $__currentLoopData = $data2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $logs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        if($logs['schedule_type']=='Regular'){
                                            $exp=implode("",$logs['recorded_time']);
                                            $exp_time = explode(',', $exp); 
                                            $timecheck=date('Hi',strtotime($logs['time_in']));
                                            if(date('Hi',strtotime($exp_time[0]))>=$timecheck){
                                                $timedisp=$exp_time[0];
                                            }else {
                                                $timedisp=date('Y-m-d',strtotime($exp_time[0]))." ".$logs['time_in'];
                                            }
                                            $date1 = new DateTime($timedisp);
                                            $date2 = new DateTime($exp_time[1]);
                                            $interval = $date2->diff($date1);
                                            $hours   = $interval->format('%h'); 
                                            $minutes = $interval->format('%i');
                                            if($hours>=9 && $minutes>=30){
                                                $total_hours[]=$interval->format("%h")*60 - 540;
                                                $total_min[]=$interval->format("%i");
                                            }else if($hours>=10){
                                                $total_hours[]=$interval->format("%h")*60 - 540;
                                                $total_min[]=$interval->format("%i");
                                            }
                                            
                                        }else if($logs['schedule_type']=='Shifting'){
                                            $timein_shift = date('H:i',strtotime(getMintimein($logs['schedule_type'],$logs['rec_time'],$logs['personal_id'])));
                                            $intime = date('Hi',strtotime(getMintimein($logs['schedule_type'],$logs['rec_time'],$logs['personal_id'])));
                                            $intimemax = date('H',strtotime(getMaxtimein($logs['schedule_type'],$logs['rec_time'],$logs['personal_id'])));

                                            $timeout_shift = date('Y-m-d H:i',strtotime(getMintimeout($logs['schedule_type'],$logs['rec_time'],$logs['personal_id'])));
                                            $outtime = date('Hi',strtotime(getMintimeout($logs['schedule_type'],$logs['rec_time'],$logs['personal_id'])));
                                            $outtimemax = date('Hi',strtotime(getMaxtimeout($logs['schedule_type'],$logs['rec_time'],$logs['personal_id'])));

                                            $exp=implode("",$logs['recorded_time']);
                                            $exp_time = explode(',', $exp);
                                            $nightHoursPerDay=0;
                                            if($intime<='0600' && ($intime<='1359' || $intime<='1459')) { 
                                                $timein=$exp_time[0];
                                                $timeout=$exp_time[1];
                                                $sched_time=date('Y-m-d',strtotime($timein)).' 06:00';
                                            }else if(($intime>='1359' || $intime>='1459') && $intime<='2200' && $exp_time[1]!='') { 
                                                $timein=$exp_time[0];
                                                $timeout=$exp_time[1];
                                                $sched_time=date('Y-m-d',strtotime($timein)).' 14:00';
                                            }else if($intimemax<='22' || $intime<='0600') { 
                                                if($exp_time[0]!='' && $exp_time[1]==''){
                                                    $timein=$exp_time[0];
                                                    $timeout=$timeout_shift;
                                                    if($timeout!='00:00'){
                                                        if(date('Hi',strtotime($timein))<='0600' || date('Hi',strtotime($timein))<='0659'){
                                                            $sched_time=date('Y-m-d',strtotime($timein)).' 06:00';
                                                        }else{
                                                            $sched_time=date('Y-m-d',strtotime($timein)).' 22:00';
                                                        }
                                                        $nightHoursPerDay = date('H',strtotime($timeout)) + ( 24 - date('H',strtotime($sched_time)));
                                                    }else{
                                                        $sched_time='00-00-0000 00:00';
                                                    }
                                                }else if($exp_time[0]!='' && $exp_time[1]!='' && $intimemax>='06' && $outtimemax>='2200'){
                                                    $timein=$exp_time[0];
                                                    $timeout=$exp_time[1];
                                                    if($timeout!='00:00'){
                                                        if(date('Hi',strtotime($timein))<='0600' || date('Hi',strtotime($timein))<='0659'){
                                                            $sched_time=date('Y-m-d',strtotime($timein)).' 06:00';
                                                        }else{
                                                            $sched_time=date('Y-m-d',strtotime($timein)).' 14:00';
                                                        }
                                                    }else{
                                                        $sched_time='00:00';
                                                    }
                                                }else{
                                                    if((date('Hi',strtotime($exp_time[1]))<='1359' || date('Hi',strtotime($exp_time[1]))<='1459')){
                                                        $timein=$exp_time[0];
                                                        $timeout=$exp_time[1];
                                                    }else{
                                                        $timein=$exp_time[1];
                                                        $timeout=$timeout_shift;
                                                    }
                                                    if($timeout!='00:00'){
                                                        if(date('Hi',strtotime($timein))<='0600' || date('Hi',strtotime($timein))<='0659'){
                                                            $sched_time=date('Y-m-d',strtotime($timein)).' 06:00';
                                                        }else if(date('Hi',strtotime($timein))<='1359' || date('Hi',strtotime($timein))<='1459'){
                                                            $sched_time=date('Y-m-d',strtotime($timein)).' 14:00';
                                                        }else{
                                                            $sched_time=date('Y-m-d',strtotime($timein)).' 22:00';
                                                        }
                                                        $nightHoursPerDay = date('H',strtotime($timeout)) + ( 24 - date('H',strtotime($sched_time)));
                                                    }else{
                                                        $sched_time='00-00-0000 00:00';
                                                    }
                                                }
                                            }
                                            
                                            if(date('Hi',strtotime($timein))<='0615' && date('Hi',strtotime($timein))<='1459'){
                                                $timedisp=$sched_time;
                                            }else if(date('Hi',strtotime($timein))>='0615' && date('Hi',strtotime($timein))<='1400' && date('Hi',strtotime($timein))<='2259'){
                                                $timedisp=$timein;
                                            }

                                            if(date('Hi',strtotime($timein))<='1415' && date('Hi',strtotime($timein))>='0659'){
                                                $timedisp=$sched_time;
                                            }else if(date('Hi',strtotime($timein))>='1415' && (date('Hi',strtotime($timein))>='2159' || date('Hi',strtotime($timein))>='2259')){
                                                $timedisp=$timein;
                                            }

                                            if((date('Hi',strtotime($timein))<='2159' || date('Hi',strtotime($timein))<='2259') && date('Hi',strtotime($timein))>='1459'){
                                                $timedisp=$sched_time;
                                            }else if((date('Hi',strtotime($timein))>='2159' || date('Hi',strtotime($timein))>='2259')){
                                                $timedisp=$timein;
                                            }
                                            $date1 = DateTime::createFromFormat('Y-m-d H:i', $timedisp);
                                            $date2 = DateTime::createFromFormat('Y-m-d H:i', $timeout);
                                            $interval = $date1->diff($date2);
                                            $hours    = $interval->h;
                                            $minutes = $interval->i;
                                            if($hours>=8 && $minutes>=30){
                                                $total_hours[]=$interval->h * 60 - 480;
                                                $total_min[]=$interval->i;
                                            }else if($hours>=10){
                                                $total_hours[]=$interval->h * 60 - 480;
                                                $total_min[]=$interval->i;
                                            }
                                        }
                                        $y++;
                                    ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php 
                                    $total_calculation = array_sum($total_hours) + array_sum($total_min);
                                ?>
                                <?php if(!empty($total_min)): ?>
                                    <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                                        <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                            <?php echo e($e->full_name); ?>

                                        </td>
                                        <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                            <a target='_blank' href="<?php echo e(route('ot.create',['employee_id' => $e->id,'personal_id' => $e->personal_id,'month_year' => $year."-".$month, 'period' => $exp_period])); ?>"  class="my-1  py-2" title="Update">
                                                <?php echo e(number_format(round(abs($total_calculation) / 60,2),2)." hr/s."); ?>

                                            </a> 
                                        </td>
                                        <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                            <?php echo e($overtime_sum[$x]." hr/s."); ?>

                                        </td>
                                        <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                            <?php if($overtime_amount[$x]!=null): ?>
                                                <?php echo e(number_format($overtime_amount[$x],2)); ?>

                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                                <?php 
                                    $x++;
                                ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
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
<?php /**PATH C:\xampp\htdocs\payroll_system\resources\views/overtime/index.blade.php ENDPATH**/ ?>