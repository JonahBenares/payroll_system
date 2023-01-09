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
                        <h2 class="uppercase font-semibold py-2">Overall Overtime
                            <?php if(!empty($date_from) && !empty($date_to)): ?>
                                (<?php echo e("Date From: ".date('F d,Y',strtotime($date_from))." - Date To: ".date('F d,Y',strtotime($date_to))); ?>)
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
                <form class="items-center" action="<?php echo e(route('filter_overallot')); ?>" method="POST"> 
                    <?php echo csrf_field(); ?>
                    <div class="flex justify-center pb-1 pt-2 bg-white white:bg-gray-900 space-x-4">
                        <div class="py-4 text-sm">Date From:</div>
                        <div>
                            <input type="date" name="date_from" class="text-sm block px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 ">
                        </div>
                        <div class="py-4 text-sm">Date to:</div>
                        <div>
                            <input type="date" name="date_to" class="text-sm block px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 ">
                        </div>
                        <div>
                            <button type="submit" class="flex items-center justify-center px-3 py-2 mt-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">Filter</button>
                        </div>
                    </div>
<<<<<<< HEAD
                </form>
                <div class=" hover:overflow-x-auto overflow-x-hidden h-100 max-h-100 pt-2 pr-2 pl-2 mt-3 md:pt-0 md:pr-0 md:pl-0 border">
                    <table class="text-sm text-left text-gray-500 white:text-gray-400 border-collapse w-full">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 white:bg-gray-700 white:text-gray-400">
                            <tr class="">
                                <th scope="col" class="border-gray-200 border py-2 px-2 " width="25%">
                                    Employee Name
                                </th>
                                <th scope="col" class="border-gray-200 border py-2 px-2" align="center" width="15%">
                                    Overtime Date
                                </th>
                                <th scope="col" class="border-gray-200 border py-2 px-2" align="center" width="15%">
                                    Overtime Type
                                </th>
                                <th scope="col" class="border-gray-200 border py-2 px-2" align="center" width="15%">
                                    No HRS
                                </th>
                                <th scope="col" class="border-gray-200 border py-2 px-2" align="right" width="15%">
                                    Amount
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($overtime_report)): ?>
                                <?php 
                                    $data2 = array();
                                    $x=0;
                                    foreach($overtime_report as $value) {
                                        $key = $value['personal_id'];
                                        if(!isset($data2[$key])) {
                                            $data2[$key] = array(
                                                'full_name' => $value['full_name'],
                                                'overtime_date' => array(),
                                                'overtime_type' => array(),
                                                'overtime_sum' => array(),
                                                'overtime_amount' => array(),
                                                'RD_HR' => $value['RD_HR'],
                                                'SH_HR' => $value['SH_HR'],
                                                'SH_RD_HR' => $value['SH_RD_HR'],
                                                'RH_HR' => $value['RH_HR'],
                                                'RH_RD_HR' => $value['RH_RD_HR'],
                                                'reg_day_np_hr' => $value['reg_day_np_hr'],
                                                'reg_np_ot_hr' => $value['reg_np_ot_hr'],
                                                'SH_RD_NP_HR' => $value['SH_RD_NP_HR'],
                                                'SH_OT_NP_HR' => $value['SH_OT_NP_HR'],
                                                'SH_RD_OT_NP_HR' => $value['SH_RD_OT_NP_HR'],
                                                'RH_NP_HR' => $value['RH_NP_HR'],
                                                'RH_RD_NP_HR' => $value['RH_RD_NP_HR'],
                                                'RH_RD_OT_NP_HR' => $value['RH_RD_OT_NP_HR'],
                                                'RH_OT_NP_HR' => $value['RH_OT_NP_HR'],
                                                'reg_day_hr' => $value['reg_day_hr'],
                                                'RD_SH_NP_HR' => $value['RD_SH_NP_HR'],
                                                'RD_SH_NP_OT_HR' => $value['RD_SH_NP_OT_HR'],
                                            );
                                        }
                                        $data2[$key]['overtime_date'][] = $value['overtime_date'];
                                        if($value['reg_day_hr']!=0){
                                            $data2[$key]['overtime_type'][]='Regular Working Days';
                                        }else if($value['RD_HR']!=0){
                                            $data2[$key]['overtime_type'][]='Rest Day Duty';
                                        }else if($value['SH_HR']!=0){
                                            $data2[$key]['overtime_type'][]='Special Holiday';
                                        }else if($value['SH_RD_HR']!=0){
                                            $data2[$key]['overtime_type'][]='Special Holiday on Rest Day';
                                        }else if($value['RH_HR']!=0){
                                            $data2[$key]['overtime_type'][]='Regular Holiday';
                                        }else if($value['RH_RD_HR']!=0){
                                            $data2[$key]['overtime_type'][]='Regular Holiday on Rest Day';
                                        }else if($value['reg_day_np_hr']!=0){
                                                $data2[$key]['overtime_type'][]='Regular Working Night Premium';
                                        }else if($value['reg_np_ot_hr']!=0){
                                                $data2[$key]['overtime_type'][]='Regular Working Night Premium Overtime';
                                        }else if($value['SH_RD_NP_HR']!=0){
                                            $data2[$key]['overtime_type'][]='Special Holiday on Rest Day Night Premium';
                                        }else if($value['SH_OT_NP_HR']!=0){
                                            $data2[$key]['overtime_type'][]='Special Holiday Night Premium Overtime';
                                        }else if($value['SH_RD_OT_NP_HR']!=0){
                                            $data2[$key]['overtime_type'][]='Special Holiday on Rest Day Night Premium Overtime';
                                        }else if($value['RH_NP_HR']!=0){
                                            $data2[$key]['overtime_type'][]='Regular Holiday Night Premium';
                                        }else if($value['RH_OT_NP_HR']!=0){
                                            $data2[$key]['overtime_type'][]='Regular Holiday Night Premium Overtime';
                                        }else if($value['RH_RD_NP_HR']!=0){
                                            $data2[$key]['overtime_type'][]='Regular Holiday on Rest Day Night Premium';
                                        }else if($value['RH_RD_OT_NP_HR']!=0){
                                            $data2[$key]['overtime_type'][]='Regular Holiday on Rest Day Night Premium Overtime';
                                        }else if($value['RD_SH_NP_HR']!=0){
                                            $data2[$key]['overtime_type'][]='Rest Day / Special Holiday Night Premium';
                                        }else if($value['RD_SH_NP_OT_HR']!=0){
                                            $data2[$key]['overtime_type'][]='Rest Day / Special Holiday Night Premium Overtime';
                                        }
                                        $data2[$key]['overtime_sum'][] = $overtime_sum[$x]." hr/s";
                                        $data2[$key]['overtime_amount'][] = $overtime_amount[$x];
                                        $x++;
                                    }
                                ?>
                                <?php $__currentLoopData = $data2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ort): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                                        <td scope="row" class="align-top border border-gray-200 align-top text-sm text-left py-2 px-2 text-gray-900 whitespace-nowrap white:text-white" align="center">
                                            <?php echo e($ort['full_name']); ?>

                                        </td>
                                        <td scope="row" class="align-top border border-gray-200  py-2 px-2 text-gray-900 whitespace-nowrap white:text-white" align="center">
                                            <p><?php echo implode("<br />",$ort['overtime_date']); ?></p>
                                        </td>
                                        <td scope="row" class="align-top border border-gray-200 py-2 px-2 text-gray-900 whitespace-nowrap white:text-white" align="center">
                                            <p>
                                            <?php echo implode("<br />",$ort['overtime_type']); ?>

                                            </p>
                                        </td>
                                        <td scope="row" class="align-top border border-gray-200 py-2 px-2 text-gray-900 whitespace-nowrap white:text-white" align="center">
                                            <p><?php echo implode("<br />",$ort['overtime_sum']); ?></p>
                                        </td>
                                        <td scope="row" class="text-right  align-top border border-gray-200 py-2 px-2 text-gray-900 whitespace-nowrap white:text-white" align="center">
                                            <p><?php echo implode("<br />",$ort['overtime_amount']); ?></p>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
=======
                    <div class="flex mt-5 uppercase">
                        <p class="text-left text-lg uppercase text-gray-600 pt-2 leading-none"><span class="font-semibold pr-1">June 12, 2022 - June 20, 2022</span></p>
                    </div>
                    <div class=" hover:overflow-x-auto overflow-x-hidden h-100 max-h-100 pt-2 pr-2 pl-2 mt-3 md:pt-0 md:pr-0 md:pl-0 border">
                        <table class="text-sm text-left text-gray-500 white:text-gray-400 border-collapse w-full">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 white:bg-gray-700 white:text-gray-400">
                                <tr class="">
                                    <th scope="col" class="border-gray-200 border py-2 px-2 " width="25%">
                                        Employee Name
                                    </th>
                                    <th scope="col" class="border-gray-200 border py-2 px-2" align="center" width="15%">
                                        Overtime Date
                                    </th>
                                    <th scope="col" class="border-gray-200 border py-2 px-2" align="center" width="15%">
                                        Overtime Type
                                    </th>
                                    <th scope="col" class="border-gray-200 border py-2 px-2" align="center" width="15%">
                                        No HRS
                                    </th>
                                    <th scope="col" class="border-gray-200 border py-2 px-2" align="right" width="15%">
                                        Amount
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                                    <td scope="row" class="border border-gray-200 align-top text-sm text-left py-2 px-2 text-gray-900 whitespace-nowrap white:text-white" align="center">
                                        Stephine Severino
                                    </td>
                                    <td scope="row" class="align-top border border-gray-200 py-2 px-2 text-gray-900 whitespace-nowrap white:text-white" align="center">
                                        <p>2022-01-23</p>
                                        <p>2022-01-23</p>
                                        <p>2022-01-23</p>
                                    </td>
                                    <td scope="row" class="align-top border border-gray-200  py-2 px-2 text-gray-900 whitespace-nowrap white:text-white" align="center">
                                        <p>Regular Holiday</p>
                                        <p>Special Holiday</p>
                                        <p>RH - RO</p>
                                    </td>
                                    <td scope="row" class="align-top border border-gray-200 py-2 px-2 text-gray-900 whitespace-nowrap white:text-white" align="center">
                                        <p>1</p>
                                        <p>1</p>
                                        <p>2</p>
                                    </td>
                                    <td scope="row" class="text-right  align-top border border-gray-200 py-2 px-2 text-gray-900 whitespace-nowrap white:text-white" align="center">
                                        <p>200</p>
                                        <p>300</p>
                                        <p>800</p>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                                    <td scope="row" class="align-top border border-gray-200 align-top text-sm text-left py-2 px-2 text-gray-900 whitespace-nowrap white:text-white" align="center">
                                        Jason Flor
                                    </td>
                                    <td scope="row" class="align-top border border-gray-200  py-2 px-2 text-gray-900 whitespace-nowrap white:text-white" align="center">
                                        <p>2022-01-23</p>
                                    </td>
                                    <td scope="row" class="align-top border border-gray-200 py-2 px-2 text-gray-900 whitespace-nowrap white:text-white" align="center">
                                        <p>Regular Holiday</p>
                                    </td>
                                    <td scope="row" class="align-top border border-gray-200 py-2 px-2 text-gray-900 whitespace-nowrap white:text-white" align="center">
                                        <p>1</p>
                                    </td>
                                    <td scope="row" class="text-right  align-top border border-gray-200 py-2 px-2 text-gray-900 whitespace-nowrap white:text-white" align="center">
                                        <p>200</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    </div>
            </form>
>>>>>>> 3e753acb0025d61adc50a2b09c5fc216b33281fc
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?> 
<?php /**PATH C:\xampp\htdocs\payroll_system\resources\views/overallOT/index.blade.php ENDPATH**/ ?>