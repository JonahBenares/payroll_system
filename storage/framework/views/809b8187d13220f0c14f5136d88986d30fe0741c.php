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
                        <h2 class="uppercase font-semibold py-2">REQUEST FOR DISBURSEMENT</h2>
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
                <form class="items-center" method="GET" > 
                    <div class="flex justify-center pb-1 pt-2 bg-white white:bg-gray-900 space-x-1">
                        
                        <div class="">
                            <select name="allowance_id" id="allowance_dropdown" class="text-sm block w-80 px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 ">
                                <option value="" selected>-Select Allowance-</option>
                                <?php $__currentLoopData = $allowance; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $all): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($all->id); ?>"><?php echo e($all->allowance_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="">
                        <select  name="period" id="period_dropdown" class="text-sm block w-80 px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 ">
                        </select>
                        </div>
                        <div>
                            <button type="submit" class="flex items-center justify-center px-3 py-2 mt-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">Filter</button>
                        </div>
                    </div>
                </form>
                <form class="items-center" method="POST" action="<?php echo e(route('rfdreport.update',$allowance_id)); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <?php $__currentLoopData = $head; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $h): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="flex justify-between space-x-40 w-full my-5">
                        <div class="space-y-1 w-8/12">
                            <div class="flex justify-between space-x-2">
                                <p class="text-sm text-sm w-24 text-left">Company:</p>
                                <input name="company" required type="text" class="px-0 text-sm bg-transparent border-0 text-left py-0 border-b border-gray-300 w-full">
                            </div>
                            <div class="flex justify-between space-x-2">
                                <p class="text-sm text-sm w-24 text-left">Pay To:</p>
                                <input name="pay_to"  type="text" class="px-0 text-sm bg-transparent border-0 text-left py-0 border-b border-gray-300 w-full" value="<?php echo e(getCompanyName($h->bu_id) . ' Employees as follows:'); ?>">
                            </div>
                            <div class="flex justify-between space-x-2">
                                <p class="text-sm text-sm w-40 text-left">Period Covered:</p>
                                <input type="text" class="px-0 text-sm bg-transparent border-0 text-left py-0 border-b border-gray-300 w-full" value="<?php echo e(date('M j, Y',strtotime($h->from_date)) .' to ' . date('M j, Y',strtotime($h->to_date))); ?>">
                            </div>
                        </div>
                        <div class="space-y-1 w-4/12">
                            <div class="flex justify-between space-x-2">
                                <p class="text-sm text-sm w-24 text-right">APV:</p>
                                <input name="apv_no" required type="text" class="px-0 text-sm bg-transparent border-0 text-left py-0 border-b border-gray-300 w-full">
                            </div>
                            <div class="flex justify-between space-x-2">
                                <p class="text-sm text-sm w-24 text-right">Date:</p>
                                <input name="rfd_date" required type="date" class="px-0 text-sm bg-transparent border-0 text-left py-0 border-b border-gray-300 w-full">
                            </div>
                            <div class="flex justify-between space-x-2">
                                <p class="text-sm text-sm w-24 text-right">Due Date:</p>
                                <input name="due_date" required type="date" class="px-0 text-sm bg-transparent border-0 text-left py-0 border-b border-gray-300 w-full">
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class=" hover:overflow-x-auto overflow-x-hidden h-100 max-h-100 pt-2 pr-2 pl-2 mt-3 md:pt-0 md:pr-0 md:pl-0 ">
                        <table class="text-sm text-left text-gray-500 white:text-gray-400 border border-gray-200 border-collapse w-full">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 white:bg-gray-700 white:text-gray-400">
                                <tr class="">
                                    <th scope="col" class="py-2 px-2 text-center" width="3%">
                                        #
                                    </th>
                                    <th scope="col" class="py-2 px-2" width="27%">
                                        Particular 
                                    </th>
                                    <th scope="col" class="py-2 px-2" width="26%">
                                        Name
                                    </th>
                                    <th scope="col" class="py-2 px-2 text-center" width="10%">
                                        Rate/Day
                                    </th>
                                    <th scope="col" class="py-2 px-2" width="20%"> 
                                        Remarks
                                    </th>
                                    <th scope="col" class="py-2 px-2 text-center" width="14%">
                                        Amount
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $x=1;
                                $total = array(); ?>
                                <?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $det): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($det->total_allowance > 0): ?>
                                    <?php $total[] = $det->total_allowance; ?>
                                <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                                    <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white text-center">
                                        <?php echo e($x); ?>

                                    </td>
                                    <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                        <input type="text" class="px-0 w-full text-sm bg-transparent border-0 text-left" value="<?php echo e($allowance_name); ?>">
                                    </td>
                                    <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                        <input type="text" class="px-0 w-full text-sm bg-transparent border-0 text-left" value="<?php echo e(getEmployeeName($det->employee_id)); ?>">
                                    </td>
                                    <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                        <input type="text" class="w-full text-sm bg-transparent border-0 text-center" value="<?php echo e(number_format($det->allowance_amount,2)); ?>">
                                    </td>
                                    <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                        <input type="text" name="remarks[]" class="w-full text-sm bg-transparent border-0 text-left">
                                    </td>
                                    <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                        <input type="text" class="w-full text-sm bg-transparent border-0 text-right" value="<?php echo e(number_format($det->total_allowance,2)); ?>">
                                        
                                    </td>
                                </tr>
                                <input type="hidden" name="allowance_detail_id[]" value="<?php echo e($det->id); ?>">
                                <?php $x++ ?>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <tr class="bg-yellow-50 border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                                    <td class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white text-center"></td>
                                    <td class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center"></td>
                                    <td class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center"></td>
                                    <td class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center"></td>
                                    <td colspan="2" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                        <div class="flex justify-between w-full space-x-5">
                                            <p class="font-base text-base">Total: </p>
                                            <input type="text" class="bg-transparent border-0 w-full font-bold text-base bg-transparent border-0 text-right p-0" value="<?php echo e(number_format(array_sum($total),2)); ?>">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <input type="hidden" name="counter" value="<?php echo e($x); ?>">
                       
                            <button type="submit" class="flex w-full items-center justify-center px-3 py-2 mt-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">Save and Print RFD</button>
                        </a>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function () {

        $('#allowance_dropdown').on('change', function () {
            var allowanceid = this.value;
          
            $("#period_dropdown").html('');
            $.ajax({
                url: "<?php echo e(url('api/fetch-period')); ?>",
                type: "POST",
                data: {
                    allowanceid: allowanceid,
                    _token: '<?php echo e(csrf_token()); ?>'
                },
                dataType: 'json',
                success: function (result) {
                    $('#period_dropdown').html('<option value="">-- Select Period --</option>');
                    $.each(result.period, function (key, value) {
                        $("#period_dropdown").append('<option value="' + value
                            .id + '">'+ value.from_date + ' to ' + value.to_date + ' (' + value.bu_name + ') </option>');
                    });
                   
                }
            });
        });
    });

</script><?php /**PATH C:\xampp\htdocs\payroll_system\resources\views/rfd_report/index.blade.php ENDPATH**/ ?>