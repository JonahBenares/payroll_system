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
                <div class="flex justify-between  pb-4 bg-white white:bg-gray-900">
                    <div > 
                        <h2 class="uppercase font-semibold py-2 flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>
                            <span class="ml-2"> Glenda Paternal </span>
                        </h2>
                    </div>
                    <div class="flex">
                        <a href="<?php echo e(route('leavefailure.index')); ?>"  class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                            <span>Show List</span>
                        </a>
                    </div>
                </div>
                <form class="mt-5">
                    <div class="overflow-x-auto relative">
                        <table class="w-full text-sm text-left text-gray-500 white:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 white:bg-gray-700 white:text-gray-400">
                                <tr>
                                    <th scope="col" class="py-3 px-3" width="4%">
                                        <input type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                    </th>
                                    <th scope="col" class="py-3 px-3" width="25%">
                                        Date
                                    </th>
                                    <th scope="col" class="py-3 px-3" width="25%">
                                        Date Filed
                                    </th>
                                    <th scope="col" class="py-3 px-3" width="16%" align="center">
                                        With Pay
                                    </th>
                                    <th scope="col" class="py-3 px-3" width="10%">
                                        Percentage
                                    </th>
                                    <th scope="col" class="py-3 px-3" width="20%">
                                        Type
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700">
                                    <td class="py-3 px-3">
                                        <input type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                    </td>
                                    <td class="py-3 px-3">
                                        September 23, 2022
                                    </td>
                                    <td class="py-3 px-3">
                                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 text-right">  
                                    </td>
                                    <td class="py-3 px-3" align="center">
                                        <input type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                    </td>
                                    <td class="py-3 px-3" align="center">
                                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 text-right">
                                    </td>
                                    <td class="py-3 px-3">
                                        Absent
                                    </td>
                                </tr>
                                <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700">
                                    <td class="py-3 px-3">
                                        <input type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                    </td>
                                    <td class="py-3 px-3">
                                        September 26, 2022
                                    </td>
                                    <td class="py-3 px-3">
                                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 text-right">  
                                    </td>
                                    <td class="py-3 px-3" align="center">
                                        <input type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                    </td>
                                    <td class="py-3 px-3" align="center">
                                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 text-right">
                                    </td>
                                    <td class="py-3 px-3">
                                        Absent
                                    </td>
                                </tr>
                                <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700">
                                    <td class="py-3 px-3">
                                        <input type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                    </td>
                                    <td class="py-3 px-3">
                                        October 13, 2022
                                    </td>
                                    <td class="py-3 px-3">
                                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 text-right">  
                                    </td>
                                    <td class="py-3 px-3" align="center">
                                        <input type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                    </td>
                                    <td class="py-3 px-3" align="center">
                                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 text-right">
                                    </td>
                                    <td class="py-3 px-3">
                                        Failure To Log In/Out
                                    </td>
                                </tr>
                                <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700">
                                    <td class="py-3 px-3">
                                        <input type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                    </td>
                                    <td class="py-3 px-3">
                                        October 17, 2022
                                    </td>
                                    <td class="py-3 px-3">
                                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 text-right">  
                                    </td>
                                    <td class="py-3 px-3" align="center">
                                        <input type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                    </td>
                                    <td class="py-3 px-3" align="center">
                                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 text-right">
                                    </td>
                                    <td class="py-3 px-3">
                                        Undertime/Tardiness
                                    </td>
                                </tr>
                                <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700">
                                    <td class="py-3 px-3">
                                        <input type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                    </td>
                                    <td class="py-3 px-3">
                                        October 19, 2022
                                    </td>
                                    <td class="py-3 px-3">
                                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 text-right">  
                                    </td>
                                    <td class="py-3 px-3" align="center">
                                        <input type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                    </td>
                                    <td class="py-3 px-3" align="center">
                                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 text-right">
                                    </td>
                                    <td class="py-3 px-3">
                                        Undertime/Tardiness
                                    </td>
                                </tr>
                                <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700">
                                    <td class="py-3 px-3">
                                        <input type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                    </td>
                                    <td class="py-3 px-3">
                                        October 24, 2022
                                    </td>
                                    <td class="py-3 px-3">
                                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 text-right">  
                                    </td>
                                    <td class="py-3 px-3" align="center">
                                        <input type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                    </td>
                                    <td class="py-3 px-3" align="center">
                                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 text-right">
                                    </td>
                                    <td class="py-3 px-3">
                                        Undertime/Tardiness
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="flex justify-end mt-6 px-2">
                        <button type="button" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl w-full white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                            Filed
                        </button>
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
<?php /**PATH C:\xampp\htdocs\payroll_system\resources\views/leave/create.blade.php ENDPATH**/ ?>