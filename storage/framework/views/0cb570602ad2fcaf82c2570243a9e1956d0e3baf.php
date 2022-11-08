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
    <style>
        [x-cloak] {
        display: none;
        }
    </style>
    
    <div class="overflow-auto h-screen pb-28 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
		<div class="flex flex-col flex-wrap sm:flex-row ">
            <div class="p-4 relative h-full w-full bg-white rounded-2xl shadow-lg white:bg-gray-800 white:border-gray-700">
                <div class="flex justify-between pb-4 bg-white white:bg-gray-900">
                    <div> 
                        <h2 class="uppercase font-semibold py-2">Employee List</h2>
                    </div>
                    <div class="flex">
                        <a href=""  class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                            </svg>
                            <span>Add New</span>
                        </a>
                    </div>
                </div>
                
                <!-- component -->
                <div class=""></div>
                
                <div class=" overflow-x-auto overflow-y-hidden hover:overflow-y-auto h-100 relative max-h-100 pt-2 pr-2 pl-2 mt-3 md:pt-0 md:pr-0 md:pl-0 sm:rounded-2xl ">
                    
                    <table class="w-screen text-sm text-left text-gray-500 white:text-gray-400 ">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 white:bg-gray-700 white:text-gray-400 sticky top-0  z-1">
                            <tr>
                                <th scope="col" width="12%" class="py-3 px-3">
                                    Employee No.
                                </th>
                                <th scope="col" width="30%" class="py-3 px-3 sticky left-0 z-1  bg-gray-50">
                                    Employee Name
                                </th>
                                <th scope="col" width="15%" class="py-3 px-3">
                                    Location
                                </th>
                                <?php $__currentLoopData = $hmo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $h): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <th scope="col" class="py-3 px-3">
                                    <?php echo e($h->level_description); ?>

                                </th>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <th scope="col" class="py-3 px-3">Pag-Ibig Rate</th>
                                <th scope="col" class="py-3 px-3">Hourly Rate</th>
                                <th scope="col" class="py-3 px-3">Daily Rate</th>
                                <th scope="col" class="py-3 px-3">Monthly Rate</th>
                                <th scope="col" class="py-3 px-3">Salary Type</th>
                                <th scope="col" class="py-3 px-6 bg-gray-50 sticky right-0" width="5%" align="center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                    </svg>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $employeelist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $el): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600 ">
                                <td class="py-4 px-3 h-20">
                                    <?php echo e($el->emp_num); ?>

                                </td>
                                <td scope="row" class="flex items-center py-4 px-3 font-medium text-gray-900 whitespace-nowrap white:text-white sticky left-0 bg-white">
                                    
                                    <span class="w-10 h-10 py-1.5 px-2 rounded-full text-white bg-yellow-500 text-center text-lg font-bold ">S</span>
                                    <div class="pl-3">
                                        <div class="text-base font-semibold"> <?php echo e($el->full_name); ?></div>
                                        <span class="font-normal text-gray-500"><?php echo e($el->dept_name); ?></span>
                                    </div>  
                                </td>
                                <td>
                                    <div class="pl-3">
                                        <div class="text-sm font-semibold"></div>
                                        <span class="font-normal text-gray-500"><?php echo e($el->location_name); ?></span>
                                    </div>  
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                       
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                       
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        
                                    </div>
                                </td>
                                <td class="py-4 px-6 bg-white sticky right-0 " align="center">
                                    <a href="<?php echo e(route('emp.edit', $el->id)); ?>" class="" title="Update">
                                        <div class="py-2 px-2 text-xs font-medium text-center text-white transition-colors bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                                <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                                <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                            </svg>
                                        </div>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php endif; ?><?php /**PATH C:\xampp\htdocs\payroll_system\resources\views/employees/index.blade.php ENDPATH**/ ?>