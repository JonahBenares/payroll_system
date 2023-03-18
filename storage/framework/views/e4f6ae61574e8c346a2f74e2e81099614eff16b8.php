<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?php echo e(URL::asset('js/myjs.js')); ?>"></script>
<script>
    $(document).ready(function() {
        var counter = document.getElementById("counter").value;  
        var deduction_ids = document.getElementById("deduction_ids").value; 
        var less_ids = document.getElementById("less_ids").value; 

    
        var adjustment_ids = document.getElementById("adjustment_ids").value; 
        for(var x=1;x<counter;x++){
            let sum_deductions_outside=0;
            let sum_less_outside=0;
            let sum_adjustment_outside=0;
        
            var salary = document.getElementById("salary_"+x).innerHTML; 

            

            var ded = deduction_ids.split("_");
            ded.forEach(function(dedids) {
                var ded_val = parseFloat(document.getElementById("deductions_"+dedids+"_"+x).value);  
                sum_deductions_outside+=ded_val;
            });


            var ls = less_ids.split("_");
            ls.forEach(function(lsids) {
                var less_val = parseFloat(document.getElementById("less_gp_"+lsids+"_"+x).value);  
                sum_less_outside+=less_val;
            });


            var adj = adjustment_ids.split("_");
            adj.forEach(function(adjids) {
                var adj_val = parseFloat(document.getElementById("adjustment_"+adjids+"_"+x).value);  
                sum_adjustment_outside+=adj_val;
            });

            document.getElementById("sum_deductions_"+x).innerHTML = sum_deductions_outside;
            document.getElementById("sum_lessgp_outside_"+x).innerHTML = sum_less_outside;
            document.getElementById("sum_deductions_outside_"+x).innerHTML = sum_deductions_outside;
            document.getElementById("sum_adjustment_"+x).innerHTML = sum_adjustment_outside;
            document.getElementById("sum_adjustment_outside_"+x).innerHTML = sum_adjustment_outside;

        var gross = (parseFloat(salary) + parseFloat(sum_adjustment_outside)) - parseFloat(sum_less_outside);
        var netpay = parseFloat(gross) - parseFloat(sum_deductions_outside);

            document.getElementById("gross_"+x).innerHTML = gross;
            document.getElementById("netpay_"+x).innerHTML = netpay;
        }
    });
</script>
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
            <div class="p-4 relative h-full w-full text-center bg-white rounded-2xl shadow-lg white:bg-gray-800 white:border-gray-700">
                <div class="flex justify-between pb-4 bg-white white:bg-gray-900">
                    <div > 
                        <h2 class="uppercase font-semibold py-2">Generate Payslip (Salary)</h2>
                    </div>
                    <div class="flex">
                        <a href="<?php echo e(route('printBulkSalary')); ?>" class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-lime-500 rounded-2xl white:bg-lime-600 white:hover:bg-lime-700 white:focus:bg-lime-700 hover:bg-lime-600 focus:outline-none focus:bg-lime-500 focus:ring focus:ring-lime-300 focus:ring-opacity-50">
                            <span>Print Bulk</span>
                        </a>
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 white:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                            </div>
                            <input type="text" id="table-search-users" class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-2xl border border-gray-300 focus:ring-blue-500 focus:border-blue-500 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500" placeholder="Search">
                        </div>
                    </div>
                </div>
                <form method='GET'>
                    <div class="flex justify-center pb-1 pt-2 bg-white white:bg-gray-900">
                        <div class="mx-2 text-left">
                            <select name="month" required class="block text-sm w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 w-60">
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
                        <?php $curr_year = date("Y"); ?>
                        <div class="mx-2 text-left">
                            <select name="year" required class="block text-sm w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 w-60">
                                <option value="" selected>Select Year</option>
                                <?php for($x=2022; $x<=$curr_year;$x++): ?>
                                <option value="<?php echo e($x); ?>"><?php echo e($x); ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                        <div class="mx-2 text-left">
                            <select name="cutoff" required class="block text-sm w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 w-60">
                                <option value="" selected>Period</option>
                                <?php $__currentLoopData = $cutoff; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $co): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($co->cutoff_type); ?>"><?php echo e($co->cutoff_type); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="mx-2 pt-2 text-left">
                            <button type="submit" class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                <span>Generate</span>
                            </button>
                        </div>
                    </div>
                </form>
                <?php $month_year = $filters['year']."-".$filters['month']; ?>
                <?php if(!empty($filters['month'])): ?>
                <div class="flex justify-center space-x-2">
                    <a href="<?php echo e(route('rd_computation',['month'=>$filters['month'],'year'=>$filters['year'],'cutoff'=>$filters['cutoff']])); ?>" class="flex items-center justify-center px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                        <span>Rest Day</span>
                    </a>

                    <a href="<?php echo e(route('holiday_computation',['month'=>$filters['month'],'year'=>$filters['year'],'cutoff'=>$filters['cutoff']])); ?>" class="flex items-center justify-center px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                        <span>Holiday</span>
                    </a>
                    <a href="<?php echo e(route('adjustment_computation',['month'=>$filters['month'],'year'=>$filters['year'],'cutoff'=>$filters['cutoff']])); ?>" class="flex items-center justify-center px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                        <span>Night Premium</span>
                    </a>
                </div>

                <div class="flex mt-5 uppercase">
                    <p class="text-left text-md uppercase text-gray-600 pt-2 leading-none"><span class="font-bold pr-1"></span><?php echo e(date("F Y",strtotime($month_year))); ?> <span class="text-xs">- <?php echo e($filters['cutoff']); ?> </span></p>
                </div>
                <?php endif; ?>
                <div class="overflow-x-auto overflow-y-hidden hover:overflow-y-auto h-64 relative pt-2 pr-2 pl-2 mt-3 md:pt-0 md:pr-0 md:pl-0 sm:rounded-2xl border border-yellow-500">
                    <div class="sticky top-0 bg-yellow-500 w-full z-20 text-left px-5 text-md py-2 text-white">The following employees have incomplete logs:</div>
                    <table  class="w-full text-sm text-left text-gray-500 white:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 white:bg-gray-700 white:text-gray-400 sticky top-10 z-10">
                            <tr class="">
                                <th class="py-2 px-6" width="23%">
                                    Name
                                </th>
                                <th class="py-2 px-6" width="16%">
                                    Date
                                </th>
                                <th class="py-2 px-6" width="9%">
                                    Log Type
                                </th>
                                <th class="py-2 px-6" width="1%" align="center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                    </svg>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-2 px-6">Jonah Benares</td>
                                <td class="py-2 px-6">Jan 10, 2023</td>
                                <td class="py-2 px-6"></td>
                                <td class="py-2 px-6" align="center">
                                    <button class="flex items-center justify-center px-3 py-1 mx-2 space-x-2 text-xs tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                        File
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-2 px-6">Jonah Benares</td>
                                <td class="py-2 px-6">Jan 10, 2023</td>
                                <td class="py-2 px-6"></td>
                                <td class="py-2 px-6" align="center">
                                    <button class="flex items-center justify-center px-3 py-1 mx-2 space-x-2 text-xs tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                        File
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-2 px-6">Jonah Benares</td>
                                <td class="py-2 px-6">Jan 10, 2023</td>
                                <td class="py-2 px-6"></td>
                                <td class="py-2 px-6" align="center">
                                    <button class="flex items-center justify-center px-3 py-1 mx-2 space-x-2 text-xs tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                        File
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-2 px-6">Jonah Benares</td>
                                <td class="py-2 px-6">Jan 10, 2023</td>
                                <td class="py-2 px-6"></td>
                                <td class="py-2 px-6" align="center">
                                    <button class="flex items-center justify-center px-3 py-1 mx-2 space-x-2 text-xs tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                        File
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-2 px-6">Jonah Benares</td>
                                <td class="py-2 px-6">Jan 10, 2023</td>
                                <td class="py-2 px-6"></td>
                                <td class="py-2 px-6" align="center">
                                    <button class="flex items-center justify-center px-3 py-1 mx-2 space-x-2 text-xs tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                        File
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="sticky bottom-0 bg-gray-100 w-full z-20 text-left px-5 text-sm py-2 flex justify-center space-x-2">
                        <button class="py-1 px-2 bg-gray-500 text-white rounded-2xl w-40 hover:bg-gray-600">Skip</button>
                        <button class="py-1 px-2 bg-blue-500 text-white rounded-2xl w-40 hover:bg-blue-600">Proceed</button>
                    </div>
                </div>
                <div class="overflow-x-auto overflow-y-hidden hover:overflow-y-auto h-100 relative max-h-100 pt-2 pr-2 pl-2 mt-3 md:pt-0 md:pr-0 md:pl-0 sm:rounded-2xl">
                    <table class="w-full text-sm text-left text-gray-500 white:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 white:bg-gray-700 white:text-gray-400 sticky top-0 z-10">
                            <tr class="">
                                <th scope="col" class="py-3 px-6" width="23%">
                                    Employee Name
                                </th>
                                <th scope="col" class="py-3 px-6" width="16%">
                                    Basic Salary
                                </th>
                                <th scope="col" class="py-3 px-6" width="9%">
                                    Adjustments
                                </th>
                                <th scope="col" class="py-3 px-6" width="9%">
                                    Less
                                </th><th scope="col" class="py-3 px-6" width="9%">
                                    Gross
                                </th>
                                <th scope="col" class="py-3 px-6" width="9%">
                                    Deductions
                                </th>
                                <th scope="col" class="py-3 px-6" width="9%">
                                    Net Pay
                                </th>
                                <th scope="col" class="py-3 px-6" width="10%" align="center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                    </svg>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                          
                            <?php $x=1; ?>
                            <?php $__currentLoopData = $employee_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php  $sum_outside = "sum_adjustment_outside_".$x; 
                            $salary ="salary_".$x; ?>
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    <?php echo e($emp['name']); ?>

                                </td>
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    <span id="<?php echo e($salary); ?>"><?php echo e(getSalary('Monthly', $emp['id'])/2); ?></span>
                                </td>
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    <div x-data="{ modelOpen: false }">
                                        <a href="#" @click="modelOpen =!modelOpen" class="my-1 py-2 " title="Update">
                                              <span id="<?php echo e($sum_outside); ?>">0</span>
                                        </a>
                                
                                        <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                            <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                                                <div x-cloak @click="modelOpen = false"  
                                                    x-transition:enter="transition ease-out duration-300 transform"
                                                    x-transition:enter-start="opacity-0" 
                                                    x-transition:enter-end="opacity-100"
                                                    x-transition:leave="transition ease-in duration-200 transform"
                                                    x-transition:leave-start="opacity-100" 
                                                    x-transition:leave-end="opacity-0"
                                                    class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"
                                                ></div>
                                
                                                <div x-cloak
                                                    x-transition:enter="transition ease-out duration-300 transform"
                                                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                                                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                                    x-transition:leave="transition ease-in duration-200 transform"
                                                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                                                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                    class="inline-block w-full max-w-lg p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl lg:max-w-lg"
                                                >
                                                    <div class="flex items-center justify-between space-x-4 px-2">
                                                        <h1 class="text-xl font-medium text-gray-800 "><?php echo e($emp['name']); ?> </h1>
                                
                                                        <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                
                                                    <table class="w-full text-sm text-left">
                                                        <tr class="bg-white border-b">
                                                            <td colspan="2" class="py-2 px-2 font-medium text-base text-gray-500 whitespace-nowrap ">Adjustments</td>
                                                        </tr>
                                                        <?php $__currentLoopData = $payslipinfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($pi->pay_type == 1): ?>
                                                        <tr class="bg-white border-b">
                                                            <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap "><?php echo e($pi->description); ?></td>
                                                                <?php if($pi->editable == 1): ?>
                                                                <td align="right"><input type="text" name="adjustment_<?php echo e($pi->id); ?>_<?php echo e($x); ?>" id="adjustment_<?php echo e($pi->id); ?>_<?php echo e($x); ?>" onblur = "salary_computation('adjustment',<?php echo e($pi->id); ?>)" value="0" class="text-right bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" ></td>
                                                                <?php else: ?>
                                                                <td align="right">
                                                                    <input type="text" name="adjustment_<?php echo e($pi->id); ?>_<?php echo e($x); ?>" id="adjustment_<?php echo e($pi->id); ?>_<?php echo e($x); ?>" class="border-0 text-right" disabled value="0">
                                                                    <input type="hidden" name="payslip_id_<?php echo e($pi->id); ?>" value="<?php echo e($pi->id); ?>">
                                                                   
                                                                </td>
                                                                <?php endif; ?>
                                                        </tr>
                                                            <?php endif; ?>
                                                          
                                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                         <?php 
                                                         $sum_name = "sum_adjustment_".$x;
                                                         ?>
                                                         <input type="hidden" name="adjustment_ids" id="adjustment_ids" value="<?php echo e($adj_ids); ?>">
                                                      
                                                        <tr class="bg-white border-b text-lg bg-yellow-200">
                                                            <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap ">Total</td>
                                                            <td align="right"><b><span id="<?php echo e($sum_name); ?>"></span></b></td>
                                                        </tr>
                                                    </table>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <?php  $sum_lessgp_outside = "sum_lessgp_outside_".$x; ?>
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    <div x-data="{ modelOpen: false }">
                                        <a href="#" @click="modelOpen =!modelOpen" class="my-1 py-2 " id="<?php echo e($sum_lessgp_outside); ?>" title="Update">
                                              0
                                        </a>
                                
                                        <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                            <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                                                <div x-cloak @click="modelOpen = false"  
                                                    x-transition:enter="transition ease-out duration-300 transform"
                                                    x-transition:enter-start="opacity-0" 
                                                    x-transition:enter-end="opacity-100"
                                                    x-transition:leave="transition ease-in duration-200 transform"
                                                    x-transition:leave-start="opacity-100" 
                                                    x-transition:leave-end="opacity-0"
                                                    class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"
                                                ></div>
                                
                                                <div x-cloak
                                                    x-transition:enter="transition ease-out duration-300 transform"
                                                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                                                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                                    x-transition:leave="transition ease-in duration-200 transform"
                                                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                                                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                    class="inline-block w-full max-w-lg p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl lg:max-w-lg"
                                                >
                                                    <div class="flex items-center justify-between space-x-4 px-2">
                                                        <h1 class="text-xl font-medium text-gray-800 "><?php echo e($emp['name']); ?></h1>
                                
                                                        <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <table class="w-full text-sm text-left">
                                                        <tr class="bg-white border-b">
                                                            <td colspan="2" class="py-2 px-2 font-medium text-base text-gray-500 whitespace-nowrap ">Less</td>
                                                        </tr>
                                                        <?php $__currentLoopData = $payslipinfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($pi->pay_type == 2): ?>
                                                        <tr class="bg-white border-b">
                                                            <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap "><?php echo e($pi->description); ?></td>
                                                                <?php if($pi->editable == 1): ?>
                                                                <td align="right"><input type="text" name="less_gp_<?php echo e($pi->id); ?>_<?php echo e($x); ?>"  id="less_gp_<?php echo e($pi->id); ?>_<?php echo e($x); ?>"  value="0" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="00" required></td>
                                                                <?php else: ?>
                                                                <td><input type="text" name="less_gp_<?php echo e($pi->id); ?>_<?php echo e($x); ?>"  id="less_gp_<?php echo e($pi->id); ?>_<?php echo e($x); ?>" class="border-0 text-right" disabled value="0"></td>
                                                                <input type="hidden" name="payslip_id_<?php echo e($pi->id); ?>" value="<?php echo e($pi->id); ?>">
                                                                <?php endif; ?>
                                                        </tr>
                                                            <?php endif; ?>
                                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <?php $sum_lessgp = "sum_lessgp_".$x; ?>
                                                        <input type="hidden" name="less_ids" id="less_ids" value="<?php echo e($less_ids); ?>">
                                                        <tr class="bg-white border-b text-lg bg-yellow-200">
                                                            <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap ">Total</td>
                                                            <td align="right"><b><span id="<?php echo e($sum_lessgp); ?>"></span></b></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <?php $sum_deductions_name = "sum_deductions_outside_".$x;
                                    $gross = "gross_".$x;  ?>
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    <span id="<?php echo e($gross); ?>">0</span>
                                </td>
                                
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    <div x-data="{ modelOpen: false }">
                                        <a href="#" @click="modelOpen =!modelOpen" id="<?php echo e($sum_deductions_name); ?>" class="my-1  py-2" title="Update">
                                            
                                        </a>
                                
                                        <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                            <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                                                <div x-cloak @click="modelOpen = false"  
                                                    x-transition:enter="transition ease-out duration-300 transform"
                                                    x-transition:enter-start="opacity-0" 
                                                    x-transition:enter-end="opacity-100"
                                                    x-transition:leave="transition ease-in duration-200 transform"
                                                    x-transition:leave-start="opacity-100" 
                                                    x-transition:leave-end="opacity-0"
                                                    class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"
                                                ></div>
                                
                                                <div x-cloak
                                                    x-transition:enter="transition ease-out duration-300 transform"
                                                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                                                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                                    x-transition:leave="transition ease-in duration-200 transform"
                                                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                                                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                    class="inline-block w-full max-w-lg p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl lg:max-w-lg"
                                                >
                                                    <div class="flex items-center justify-between space-x-4 px-2">
                                                        <h1 class="text-xl font-medium text-gray-800 "><?php echo e($emp['name']); ?></h1>
                                
                                                        <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <table class="w-full text-sm text-left">
                                                        <tr class="bg-white border-b">
                                                            <td colspan="2" class="py-2 px-2 font-medium text-base text-gray-500 whitespace-nowrap ">Deductions</td>
                                                        </tr>
                                                        <?php $__currentLoopData = $payslipinfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($pi->pay_type == 3): ?>
                                                                <?php $deduc_sched = checkDeductionSchedule($pi->id); ?>
                                                                <?php if($deduc_sched==$cutoff_type || $deduc_sched == ""): ?>
                                                                    <tr class="bg-white border-b">
                                                                        <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap "><?php echo e($pi->description); ?></td>
                                                                            <?php if($pi->editable == 1): ?>
                                                                            <td align="right"><input type="text" name="deductions_<?php echo e($pi->id); ?>_<?php echo e($x); ?>" id="deductions_<?php echo e($pi->id); ?>_<?php echo e($x); ?>" onblur = "salary_computation('deductions',<?php echo e($pi->id); ?>)" value='0' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm text-right rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required></td>
                                                                            <?php else: ?>
                                                                            <td><input type="text" name="deductions_<?php echo e($pi->id); ?>_<?php echo e($x); ?>" id="deductions_<?php echo e($pi->id); ?>_<?php echo e($x); ?>" class="border-0 w-full text-right" disabled value="<?php echo e(getDeductionRate($emp['personal_id'], $pi->id)); ?>"></td>
                                                                            <input type="hidden" name="payslip_id_<?php echo e($pi->id); ?>" value="<?php echo e($pi->id); ?>">
                                                                            <?php endif; ?>
                                                                    </tr>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <?php $sum_deduc_name = "sum_deductions_".$x; ?>
                                                         <input type="hidden" name="deduction_ids" id="deduction_ids" value="<?php echo e($deduction_ids); ?>">
                                                         <tr class="bg-white border-b text-lg bg-yellow-200">
                                                            <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap ">Total</td>
                                                            <td align="right"><b><span id="<?php echo e($sum_deduc_name); ?>"></span></b></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <?php $net_pay = "netpay_".$x; ?>
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    <span id="<?php echo e($net_pay); ?>"></span>
                                </td>
                                <td class="py-3 px-6 justify-center flex" align="center">
                                    <a href="<?php echo e(route('payrollsalary.show', '1')); ?>" class="" title="Update">
                                        <div class="py-2 px-2 text-xs font-medium text-center text-white transition-colors bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                        </div>
                                    </a>
                                    <button class="mx-1 py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-emerald-500 rounded-2xl white:bg-emerald-600 white:hover:bg-emerald-700 white:focus:bg-emerald-700 hover:bg-emerald-600 focus:outline-none focus:bg-emerald-500 focus:ring focus:ring-emerald-300 focus:ring-opacity-50" title="Update"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                                          </svg>
                                    </button>
                                </td>
                            </tr>
                            <?php $x++ ?>
                           
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <input type='hidden' name='counter' id='counter' value="<?php echo e($x); ?>">
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

<?php /**PATH C:\xampp\htdocs\payroll_system\resources\views/payroll_salary/index.blade.php ENDPATH**/ ?>