<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
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
                        <div x-data="{ modelOpen: false }">
                            <button @click="modelOpen =!modelOpen" class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                                </svg>
                                <span>Add New</span>
                            </button>
                    
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
                                        class="inline-block w-full max-w-2xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-2xl shadow-xl 2xl:max-w-2xl"
                                    >
                                        <div class="flex items-center justify-between space-x-4 px-2">
                                            <h1 class="text-xl font-medium text-gray-800 ">Add New Employee</h1>
                    
                                            <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            </button>
                                        </div>
                    
                                        <form class="mt-5">
                                            <div class="px-2">
                                                <label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Employee Name</label>
                                                <input type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                            </div>
                                            
                                            <div class="flex ">
                                                <div class="mt-4 w-full px-2">
                                                    <label class="block text-sm text-gray-700 capitalize white:text-gray-200">Employee Number</label>
                                                    <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                </div>
                                                <div class="mt-4 w-full px-2">
                                                    <label class="block text-sm text-gray-700 capitalize white:text-gray-200">Employee Type</label>
                                                    <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                </div>
                                            </div>

                                            <div class="flex ">
                                                <div class="mt-4 w-full px-2">
                                                    <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                                        Location
                                                    </label>
                                                    <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                </div>
                                                <div class="mt-4 w-full px-2">
                                                    <label for="email" class="block text-sm text-gray-700 capitalize white:text-gray-200">Department</label>
                                                    <input type="email" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                </div>
                                            </div>
                                            
                                            <div class="flex ">
                                                <div class="mt-4 w-full px-2">
                                                    <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                                        Number Of Dependents
                                                    </label>
                                                    <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                </div>
                                                <div class="mt-4 w-full px-2">
                                                    <label for="email" class="block text-sm text-gray-700 capitalize white:text-gray-200">Hourly Rate</label>
                                                    <input type="email" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                </div>
                                            </div>
                                            <div class="flex ">
                                                <div class="mt-4 w-full px-2">
                                                    <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                                        Daily Rate
                                                    </label>
                                                    <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                </div>
                                                <div class="mt-4 w-full px-2">
                                                    <label for="email" class="block text-sm text-gray-700 capitalize white:text-gray-200">Monthly Rate</label>
                                                    <input type="email" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                </div>
                                            </div>

                                            <div class="mt-4 px-2">
                                                <label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Salary Type</label>
                                                <input type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                            </div>

                                            <div class="flex justify-end mt-6 px-2">
                                                <button type="button" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl w-full white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                                    Save
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('employee-table', [])->html();
<<<<<<< HEAD
} elseif ($_instance->childHasBeenRendered('Hijae0n')) {
    $componentId = $_instance->getRenderedChildComponentId('Hijae0n');
    $componentTag = $_instance->getRenderedChildComponentTagName('Hijae0n');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Hijae0n');
} else {
    $response = \Livewire\Livewire::mount('employee-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('Hijae0n', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
=======
} elseif ($_instance->childHasBeenRendered('5bLLFBi')) {
    $componentId = $_instance->getRenderedChildComponentId('5bLLFBi');
    $componentTag = $_instance->getRenderedChildComponentTagName('5bLLFBi');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('5bLLFBi');
} else {
    $response = \Livewire\Livewire::mount('employee-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('5bLLFBi', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
>>>>>>> c270d29172ef8ec66a9ea9c294f6e7c999536dc7
}
echo $html;
?>
                <!-- component -->
                <div class=""></div>
                
                <div class=" hover:overflow-x-auto overflow-x-hidden hover:overflow-y-auto overflow-y-hidden h-100 max-h-100 pt-2 pr-2 pl-2 mt-3 md:pt-0 md:pr-0 md:pl-0 ">
                    
                    <table class="relative max-h-100 text-sm text-left text-gray-500 white:text-gray-400" width="150%">
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
                                <th scope="col" class="py-3 px-3">
                                    Dependents
                                </th>
                                <th scope="col" class="py-3 px-3">Hourly Rate</th>
                                <th scope="col" class="py-3 px-3">Daily Rate</th>
                                <th scope="col" class="py-3 px-3">Monthly Rate</th>
                                <th scope="col" class="py-3 px-3">Salary Type</th>
                                <th scope="col" class="py-3 px-6 bg-gray-50" width="5%" align="center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                    </svg>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600 ">
                                <td class="py-4 px-3 h-20">
                                    2022-0010
                                </td>
                                <td scope="row" class="flex items-center py-4 px-3 font-medium text-gray-900 whitespace-nowrap white:text-white sticky left-0 bg-white">
                                    
                                    <span class="w-10 h-10 py-1.5 px-2 rounded-full text-white bg-yellow-500 text-center text-lg font-bold ">S</span>
                                    <div class="pl-3">
                                        <div class="text-base font-semibold">Neil Sims</div>
                                        <span class="font-normal text-gray-500">IT Department</span>
                                    </div>  
                                </td>
                                <td>
                                    <div class="pl-3">
                                        <div class="text-sm font-semibold"></div>
                                        <span class="font-normal text-gray-500">Bacolod Office</span>
                                    </div>  
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        999
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        999
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        999
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        999
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        Daily
                                    </div>
                                </td>
                                <td class="py-4 px-6 bg-white " align="center">
                                    <div x-data="{ updateModal: false }">
                                        <button @click="updateModal =!updateModal" class="py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" title="Update">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                                <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                                <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                            </svg>
                                        </button>
                                
                                        <div x-show="updateModal" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                            <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                                                <div x-cloak @click="updateModal = false"  
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
                                                    class="inline-block w-full max-w-2xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-2xl shadow-xl 2xl:max-w-2xl"
                                                >
                                                    <div class="flex items-center justify-between space-x-4 px-2">
                                                        <h1 class="text-xl font-medium text-gray-800 ">Update Employee</h1>
                                
                                                        <button @click="updateModal = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                
                                                    <form class="mt-5">
                                                        <div class="px-2">
                                                            <label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Employee Name</label>
                                                            <input type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                        </div>
                                                        
                                                        <div class="flex ">
                                                            <div class="mt-4 w-full px-2">
                                                                <label class="block text-sm text-gray-700 capitalize white:text-gray-200">Employee Number</label>
                                                                <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                            <div class="mt-4 w-full px-2">
                                                                <label class="block text-sm text-gray-700 capitalize white:text-gray-200">Employee Type</label>
                                                                <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                        </div>
                    
                                                        <div class="flex ">
                                                            <div class="mt-4 w-full px-2">
                                                                <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                                                    Location
                                                                </label>
                                                                <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                            <div class="mt-4 w-full px-2">
                                                                <label for="email" class="block text-sm text-gray-700 capitalize white:text-gray-200">Department</label>
                                                                <input type="email" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="flex ">
                                                            <div class="mt-4 w-full px-2">
                                                                <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                                                    Number Of Dependents
                                                                </label>
                                                                <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                            <div class="mt-4 w-full px-2">
                                                                <label for="email" class="block text-sm text-gray-700 capitalize white:text-gray-200">Hourly Rate</label>
                                                                <input type="email" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                        </div>
                                                        <div class="flex ">
                                                            <div class="mt-4 w-full px-2">
                                                                <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                                                    Daily Rate
                                                                </label>
                                                                <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                            <div class="mt-4 w-full px-2">
                                                                <label for="email" class="block text-sm text-gray-700 capitalize white:text-gray-200">Monthly Rate</label>
                                                                <input type="email" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                        </div>
                    
                                                        <div class="mt-4 px-2">
                                                            <label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Salary Type</label>
                                                            <input type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                        </div>
                    
                                                        <div class="flex justify-end mt-6 px-2">
                                                            <button type="button" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl w-full white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                                                Update
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600 ">
                                <td class="py-4 px-3 h-20">
                                    2022-0010
                                </td>
                                <td scope="row" class="flex items-center py-4 px-3 font-medium text-gray-900 whitespace-nowrap white:text-white sticky left-0 bg-white">
                                    <span class="w-10 h-10 py-1.5 px-2 rounded-full text-white bg-green-500 text-center text-lg font-bold">R</span>
                                    
                                    <div class="pl-3">
                                        <div class="text-base font-semibold">Neil Sims</div>
                                        <span class="font-normal text-gray-500">IT Department</span>
                                    </div>  
                                </td>
                                <td>
                                    <div class="pl-3">
                                        <div class="text-sm font-semibold"></div>
                                        <span class="font-normal text-gray-500">Bacolod Office</span>
                                    </div>  
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        999
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        999
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        999
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        999
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        Daily
                                    </div>
                                </td>
                                <td class="py-4 px-6 bg-white " align="center">
                                    <div x-data="{ updateModal: false }">
                                        <button @click="updateModal =!updateModal" class="py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" title="Update">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                                <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                                <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                            </svg>
                                        </button>
                                
                                        <div x-show="updateModal" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                            <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                                                <div x-cloak @click="updateModal = false"  
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
                                                    class="inline-block w-full max-w-2xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-2xl shadow-xl 2xl:max-w-2xl"
                                                >
                                                    <div class="flex items-center justify-between space-x-4 px-2">
                                                        <h1 class="text-xl font-medium text-gray-800 ">Update Employee</h1>
                                
                                                        <button @click="updateModal = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                
                                                    <form class="mt-5">
                                                        <div class="px-2">
                                                            <label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Employee Name</label>
                                                            <input type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                        </div>
                                                        
                                                        <div class="flex ">
                                                            <div class="mt-4 w-full px-2">
                                                                <label class="block text-sm text-gray-700 capitalize white:text-gray-200">Employee Number</label>
                                                                <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                            <div class="mt-4 w-full px-2">
                                                                <label class="block text-sm text-gray-700 capitalize white:text-gray-200">Employee Type</label>
                                                                <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                        </div>
                    
                                                        <div class="flex ">
                                                            <div class="mt-4 w-full px-2">
                                                                <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                                                    Location
                                                                </label>
                                                                <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                            <div class="mt-4 w-full px-2">
                                                                <label for="email" class="block text-sm text-gray-700 capitalize white:text-gray-200">Department</label>
                                                                <input type="email" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="flex ">
                                                            <div class="mt-4 w-full px-2">
                                                                <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                                                    Number Of Dependents
                                                                </label>
                                                                <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                            <div class="mt-4 w-full px-2">
                                                                <label for="email" class="block text-sm text-gray-700 capitalize white:text-gray-200">Hourly Rate</label>
                                                                <input type="email" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                        </div>
                                                        <div class="flex ">
                                                            <div class="mt-4 w-full px-2">
                                                                <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                                                    Daily Rate
                                                                </label>
                                                                <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                            <div class="mt-4 w-full px-2">
                                                                <label for="email" class="block text-sm text-gray-700 capitalize white:text-gray-200">Monthly Rate</label>
                                                                <input type="email" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                        </div>
                    
                                                        <div class="mt-4 px-2">
                                                            <label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Salary Type</label>
                                                            <input type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                        </div>
                    
                                                        <div class="flex justify-end mt-6 px-2">
                                                            <button type="button" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl w-full white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                                                Update
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600 ">
                                <td class="py-4 px-3 h-20">
                                    2022-0010
                                </td>
                                <td scope="row" class="flex items-center py-4 px-3 font-medium text-gray-900 whitespace-nowrap white:text-white sticky left-0 bg-white">
                                    <span class="w-10 h-10 py-1.5 px-2 rounded-full text-white bg-green-500 text-center text-lg font-bold">R</span>
                                    
                                    <div class="pl-3">
                                        <div class="text-base font-semibold">Neil Sims</div>
                                        <span class="font-normal text-gray-500">IT Department</span>
                                    </div>  
                                </td>
                                <td>
                                    <div class="pl-3">
                                        <div class="text-sm font-semibold"></div>
                                        <span class="font-normal text-gray-500">Bacolod Office</span>
                                    </div>  
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        999
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        999
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        999
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        999
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        Daily
                                    </div>
                                </td>
                                <td class="py-4 px-6 bg-white " align="center">
                                    <div x-data="{ updateModal: false }">
                                        <button @click="updateModal =!updateModal" class="py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" title="Update">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                                <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                                <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                            </svg>
                                        </button>
                                
                                        <div x-show="updateModal" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                            <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                                                <div x-cloak @click="updateModal = false"  
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
                                                    class="inline-block w-full max-w-2xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-2xl shadow-xl 2xl:max-w-2xl"
                                                >
                                                    <div class="flex items-center justify-between space-x-4 px-2">
                                                        <h1 class="text-xl font-medium text-gray-800 ">Update Employee</h1>
                                
                                                        <button @click="updateModal = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                
                                                    <form class="mt-5">
                                                        <div class="px-2">
                                                            <label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Employee Name</label>
                                                            <input type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                        </div>
                                                        
                                                        <div class="flex ">
                                                            <div class="mt-4 w-full px-2">
                                                                <label class="block text-sm text-gray-700 capitalize white:text-gray-200">Employee Number</label>
                                                                <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                            <div class="mt-4 w-full px-2">
                                                                <label class="block text-sm text-gray-700 capitalize white:text-gray-200">Employee Type</label>
                                                                <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                        </div>
                    
                                                        <div class="flex ">
                                                            <div class="mt-4 w-full px-2">
                                                                <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                                                    Location
                                                                </label>
                                                                <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                            <div class="mt-4 w-full px-2">
                                                                <label for="email" class="block text-sm text-gray-700 capitalize white:text-gray-200">Department</label>
                                                                <input type="email" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="flex ">
                                                            <div class="mt-4 w-full px-2">
                                                                <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                                                    Number Of Dependents
                                                                </label>
                                                                <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                            <div class="mt-4 w-full px-2">
                                                                <label for="email" class="block text-sm text-gray-700 capitalize white:text-gray-200">Hourly Rate</label>
                                                                <input type="email" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                        </div>
                                                        <div class="flex ">
                                                            <div class="mt-4 w-full px-2">
                                                                <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                                                    Daily Rate
                                                                </label>
                                                                <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                            <div class="mt-4 w-full px-2">
                                                                <label for="email" class="block text-sm text-gray-700 capitalize white:text-gray-200">Monthly Rate</label>
                                                                <input type="email" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                        </div>
                    
                                                        <div class="mt-4 px-2">
                                                            <label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Salary Type</label>
                                                            <input type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                        </div>
                    
                                                        <div class="flex justify-end mt-6 px-2">
                                                            <button type="button" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl w-full white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                                                Update
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600 ">
                                <td class="py-4 px-3 h-20">
                                    2022-0010
                                </td>
                                <td scope="row" class="flex items-center py-4 px-3 font-medium text-gray-900 whitespace-nowrap white:text-white sticky left-0 bg-white">
                                    
                                    <span class="w-10 h-10 py-1.5 px-2 rounded-full text-white bg-yellow-500 text-center text-lg font-bold">S</span>
                                    <div class="pl-3">
                                        <div class="text-base font-semibold">Neil Sims</div>
                                        <span class="font-normal text-gray-500">IT Department</span>
                                    </div>  
                                </td>
                                <td>
                                    <div class="pl-3">
                                        <div class="text-sm font-semibold"></div>
                                        <span class="font-normal text-gray-500">Bacolod Office</span>
                                    </div>  
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        999
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        999
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        999
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        999
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        Daily
                                    </div>
                                </td>
                                <td class="py-4 px-6 bg-white " align="center">
                                    <div x-data="{ updateModal: false }">
                                        <button @click="updateModal =!updateModal" class="py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" title="Update">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                                <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                                <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                            </svg>
                                        </button>
                                
                                        <div x-show="updateModal" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                            <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                                                <div x-cloak @click="updateModal = false"  
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
                                                    class="inline-block w-full max-w-2xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-2xl shadow-xl 2xl:max-w-2xl"
                                                >
                                                    <div class="flex items-center justify-between space-x-4 px-2">
                                                        <h1 class="text-xl font-medium text-gray-800 ">Update Employee</h1>
                                
                                                        <button @click="updateModal = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                
                                                    <form class="mt-5">
                                                        <div class="px-2">
                                                            <label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Employee Name</label>
                                                            <input type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                        </div>
                                                        
                                                        <div class="flex ">
                                                            <div class="mt-4 w-full px-2">
                                                                <label class="block text-sm text-gray-700 capitalize white:text-gray-200">Employee Number</label>
                                                                <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                            <div class="mt-4 w-full px-2">
                                                                <label class="block text-sm text-gray-700 capitalize white:text-gray-200">Employee Type</label>
                                                                <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                        </div>
                    
                                                        <div class="flex ">
                                                            <div class="mt-4 w-full px-2">
                                                                <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                                                    Location
                                                                </label>
                                                                <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                            <div class="mt-4 w-full px-2">
                                                                <label for="email" class="block text-sm text-gray-700 capitalize white:text-gray-200">Department</label>
                                                                <input type="email" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="flex ">
                                                            <div class="mt-4 w-full px-2">
                                                                <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                                                    Number Of Dependents
                                                                </label>
                                                                <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                            <div class="mt-4 w-full px-2">
                                                                <label for="email" class="block text-sm text-gray-700 capitalize white:text-gray-200">Hourly Rate</label>
                                                                <input type="email" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                        </div>
                                                        <div class="flex ">
                                                            <div class="mt-4 w-full px-2">
                                                                <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                                                    Daily Rate
                                                                </label>
                                                                <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                            <div class="mt-4 w-full px-2">
                                                                <label for="email" class="block text-sm text-gray-700 capitalize white:text-gray-200">Monthly Rate</label>
                                                                <input type="email" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                        </div>
                    
                                                        <div class="mt-4 px-2">
                                                            <label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Salary Type</label>
                                                            <input type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                        </div>
                    
                                                        <div class="flex justify-end mt-6 px-2">
                                                            <button type="button" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl w-full white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                                                Update
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600 ">
                                <td class="py-4 px-3 h-20">
                                    2022-0010
                                </td>
                                <td scope="row" class="flex items-center py-4 px-3 font-medium text-gray-900 whitespace-nowrap white:text-white sticky left-0 bg-white">
                                    
                                    <span class="w-10 h-10 py-1.5 px-2 rounded-full text-white bg-yellow-500 text-center text-lg font-bold">S</span>
                                    <div class="pl-3">
                                        <div class="text-base font-semibold">Neil Sims</div>
                                        <span class="font-normal text-gray-500">IT Department</span>
                                    </div>  
                                </td>
                                <td>
                                    <div class="pl-3">
                                        <div class="text-sm font-semibold"></div>
                                        <span class="font-normal text-gray-500">Bacolod Office</span>
                                    </div>  
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        999
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        999
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        999
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        999
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        Daily
                                    </div>
                                </td>
                                <td class="py-4 px-6 bg-white " align="center">
                                    <div x-data="{ updateModal: false }">
                                        <button @click="updateModal =!updateModal" class="py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" title="Update">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                                <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                                <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                            </svg>
                                        </button>
                                
                                        <div x-show="updateModal" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                            <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                                                <div x-cloak @click="updateModal = false"  
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
                                                    class="inline-block w-full max-w-2xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-2xl shadow-xl 2xl:max-w-2xl"
                                                >
                                                    <div class="flex items-center justify-between space-x-4 px-2">
                                                        <h1 class="text-xl font-medium text-gray-800 ">Update Employee</h1>
                                
                                                        <button @click="updateModal = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                
                                                    <form class="mt-5">
                                                        <div class="px-2">
                                                            <label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Employee Name</label>
                                                            <input type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                        </div>
                                                        
                                                        <div class="flex ">
                                                            <div class="mt-4 w-full px-2">
                                                                <label class="block text-sm text-gray-700 capitalize white:text-gray-200">Employee Number</label>
                                                                <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                            <div class="mt-4 w-full px-2">
                                                                <label class="block text-sm text-gray-700 capitalize white:text-gray-200">Employee Type</label>
                                                                <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                        </div>
                    
                                                        <div class="flex ">
                                                            <div class="mt-4 w-full px-2">
                                                                <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                                                    Location
                                                                </label>
                                                                <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                            <div class="mt-4 w-full px-2">
                                                                <label for="email" class="block text-sm text-gray-700 capitalize white:text-gray-200">Department</label>
                                                                <input type="email" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="flex ">
                                                            <div class="mt-4 w-full px-2">
                                                                <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                                                    Number Of Dependents
                                                                </label>
                                                                <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                            <div class="mt-4 w-full px-2">
                                                                <label for="email" class="block text-sm text-gray-700 capitalize white:text-gray-200">Hourly Rate</label>
                                                                <input type="email" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                        </div>
                                                        <div class="flex ">
                                                            <div class="mt-4 w-full px-2">
                                                                <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                                                    Daily Rate
                                                                </label>
                                                                <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                            <div class="mt-4 w-full px-2">
                                                                <label for="email" class="block text-sm text-gray-700 capitalize white:text-gray-200">Monthly Rate</label>
                                                                <input type="email" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                        </div>
                    
                                                        <div class="mt-4 px-2">
                                                            <label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Salary Type</label>
                                                            <input type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                        </div>
                    
                                                        <div class="flex justify-end mt-6 px-2">
                                                            <button type="button" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl w-full white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                                                Update
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600 ">
                                <td class="py-4 px-3 h-20">
                                    2022-0010
                                </td>
                                <td scope="row" class="flex items-center py-4 px-3 font-medium text-gray-900 whitespace-nowrap white:text-white sticky left-0 bg-white">
                                    <span class="w-10 h-10 py-1.5 px-2 rounded-full text-white bg-green-500 text-center text-lg font-bold">R</span>
                                    
                                    <div class="pl-3">
                                        <div class="text-base font-semibold">Neil Sims</div>
                                        <span class="font-normal text-gray-500">IT Department</span>
                                    </div>  
                                </td>
                                <td>
                                    <div class="pl-3">
                                        <div class="text-sm font-semibold"></div>
                                        <span class="font-normal text-gray-500">Bacolod Office</span>
                                    </div>  
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        999
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        999
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        999
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        999
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        Daily
                                    </div>
                                </td>
                                <td class="py-4 px-6 bg-white " align="center">
                                    <div x-data="{ updateModal: false }">
                                        <button @click="updateModal =!updateModal" class="py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" title="Update">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                                <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                                <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                            </svg>
                                        </button>
                                
                                        <div x-show="updateModal" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                            <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                                                <div x-cloak @click="updateModal = false"  
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
                                                    class="inline-block w-full max-w-2xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-2xl shadow-xl 2xl:max-w-2xl"
                                                >
                                                    <div class="flex items-center justify-between space-x-4 px-2">
                                                        <h1 class="text-xl font-medium text-gray-800 ">Update Employee</h1>
                                
                                                        <button @click="updateModal = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                
                                                    <form class="mt-5">
                                                        <div class="px-2">
                                                            <label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Employee Name</label>
                                                            <input type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                        </div>
                                                        
                                                        <div class="flex ">
                                                            <div class="mt-4 w-full px-2">
                                                                <label class="block text-sm text-gray-700 capitalize white:text-gray-200">Employee Number</label>
                                                                <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                            <div class="mt-4 w-full px-2">
                                                                <label class="block text-sm text-gray-700 capitalize white:text-gray-200">Employee Type</label>
                                                                <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                        </div>
                    
                                                        <div class="flex ">
                                                            <div class="mt-4 w-full px-2">
                                                                <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                                                    Location
                                                                </label>
                                                                <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                            <div class="mt-4 w-full px-2">
                                                                <label for="email" class="block text-sm text-gray-700 capitalize white:text-gray-200">Department</label>
                                                                <input type="email" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="flex ">
                                                            <div class="mt-4 w-full px-2">
                                                                <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                                                    Number Of Dependents
                                                                </label>
                                                                <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                            <div class="mt-4 w-full px-2">
                                                                <label for="email" class="block text-sm text-gray-700 capitalize white:text-gray-200">Hourly Rate</label>
                                                                <input type="email" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                        </div>
                                                        <div class="flex ">
                                                            <div class="mt-4 w-full px-2">
                                                                <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                                                    Daily Rate
                                                                </label>
                                                                <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                            <div class="mt-4 w-full px-2">
                                                                <label for="email" class="block text-sm text-gray-700 capitalize white:text-gray-200">Monthly Rate</label>
                                                                <input type="email" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                        </div>
                    
                                                        <div class="mt-4 px-2">
                                                            <label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Salary Type</label>
                                                            <input type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                        </div>
                    
                                                        <div class="flex justify-end mt-6 px-2">
                                                            <button type="button" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl w-full white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                                                Update
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600 ">
                                <td class="py-4 px-3 h-20">
                                    2022-0010
                                </td>
                                <td scope="row" class="flex items-center py-4 px-3 font-medium text-gray-900 whitespace-nowrap white:text-white sticky left-0 bg-white">
                                    <span class="w-10 h-10 py-1.5 px-2 rounded-full text-white bg-green-500 text-center text-lg font-bold">R</span>
                                    
                                    <div class="pl-3">
                                        <div class="text-base font-semibold">Neil Sims</div>
                                        <span class="font-normal text-gray-500">IT Department</span>
                                    </div>  
                                </td>
                                <td>
                                    <div class="pl-3">
                                        <div class="text-sm font-semibold"></div>
                                        <span class="font-normal text-gray-500">Bacolod Office</span>
                                    </div>  
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        999
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        999
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        999
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        999
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        Daily
                                    </div>
                                </td>
                                <td class="py-4 px-6 bg-white " align="center">
                                    <div x-data="{ updateModal: false }">
                                        <button @click="updateModal =!updateModal" class="py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" title="Update">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                                <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                                <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                            </svg>
                                        </button>
                                
                                        <div x-show="updateModal" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                            <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                                                <div x-cloak @click="updateModal = false"  
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
                                                    class="inline-block w-full max-w-2xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-2xl shadow-xl 2xl:max-w-2xl"
                                                >
                                                    <div class="flex items-center justify-between space-x-4 px-2">
                                                        <h1 class="text-xl font-medium text-gray-800 ">Update Employee</h1>
                                
                                                        <button @click="updateModal = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                
                                                    <form class="mt-5">
                                                        <div class="px-2">
                                                            <label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Employee Name</label>
                                                            <input type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                        </div>
                                                        
                                                        <div class="flex ">
                                                            <div class="mt-4 w-full px-2">
                                                                <label class="block text-sm text-gray-700 capitalize white:text-gray-200">Employee Number</label>
                                                                <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                            <div class="mt-4 w-full px-2">
                                                                <label class="block text-sm text-gray-700 capitalize white:text-gray-200">Employee Type</label>
                                                                <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                        </div>
                    
                                                        <div class="flex ">
                                                            <div class="mt-4 w-full px-2">
                                                                <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                                                    Location
                                                                </label>
                                                                <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                            <div class="mt-4 w-full px-2">
                                                                <label for="email" class="block text-sm text-gray-700 capitalize white:text-gray-200">Department</label>
                                                                <input type="email" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="flex ">
                                                            <div class="mt-4 w-full px-2">
                                                                <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                                                    Number Of Dependents
                                                                </label>
                                                                <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                            <div class="mt-4 w-full px-2">
                                                                <label for="email" class="block text-sm text-gray-700 capitalize white:text-gray-200">Hourly Rate</label>
                                                                <input type="email" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                        </div>
                                                        <div class="flex ">
                                                            <div class="mt-4 w-full px-2">
                                                                <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                                                    Daily Rate
                                                                </label>
                                                                <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                            <div class="mt-4 w-full px-2">
                                                                <label for="email" class="block text-sm text-gray-700 capitalize white:text-gray-200">Monthly Rate</label>
                                                                <input type="email" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                        </div>
                    
                                                        <div class="mt-4 px-2">
                                                            <label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Salary Type</label>
                                                            <input type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                        </div>
                    
                                                        <div class="flex justify-end mt-6 px-2">
                                                            <button type="button" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl w-full white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                                                Update
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600 ">
                                <td class="py-4 px-3 h-20">
                                    2022-0010
                                </td>
                                <td scope="row" class="flex items-center py-4 px-3 font-medium text-gray-900 whitespace-nowrap white:text-white sticky left-0 bg-white">
                                    
                                    <span class="w-10 h-10 py-1.5 px-2 rounded-full text-white bg-yellow-500 text-center text-lg font-bold">S</span>
                                    <div class="pl-3">
                                        <div class="text-base font-semibold">Neil Sims</div>
                                        <span class="font-normal text-gray-500">IT Department</span>
                                    </div>  
                                </td>
                                <td>
                                    <div class="pl-3">
                                        <div class="text-sm font-semibold"></div>
                                        <span class="font-normal text-gray-500">Bacolod Office</span>
                                    </div>  
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        999
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        999
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        999
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        999
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        Daily
                                    </div>
                                </td>
                                <td class="py-4 px-6 bg-white " align="center">
                                    <div x-data="{ updateModal: false }">
                                        <button @click="updateModal =!updateModal" class="py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" title="Update">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                                <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                                <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                            </svg>
                                        </button>
                                
                                        <div x-show="updateModal" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                            <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                                                <div x-cloak @click="updateModal = false"  
                                                    x-transition:enter="transition ease-out duration-300 transform"
                                                    x-transition:enter-start="opacity-0" 
                                                    x-transition:enter-end="opacity-100"
                                                    x-transition:leave="transition ease-in duration-200 transform"
                                                    x-transition:leave-start="opacity-100" 
                                                    x-transition:leave-end="opacity-0"
                                                    class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"
                                                ></div>
                                
                                                <div x-cloak x-show="modelOpen" 
                                                    x-transition:enter="transition ease-out duration-300 transform"
                                                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                                                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                                    x-transition:leave="transition ease-in duration-200 transform"
                                                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                                                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                    class="inline-block w-full max-w-2xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-2xl shadow-xl 2xl:max-w-2xl"
                                                >
                                                    <div class="flex items-center justify-between space-x-4 px-2">
                                                        <h1 class="text-xl font-medium text-gray-800 ">Update Employee</h1>
                                
                                                        <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                
                                                    <form class="mt-5">
                                                        <div class="px-2">
                                                            <label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Employee Name</label>
                                                            <input type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                        </div>
                                                        
                                                        <div class="flex ">
                                                            <div class="mt-4 w-full px-2">
                                                                <label class="block text-sm text-gray-700 capitalize white:text-gray-200">Employee Number</label>
                                                                <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                            <div class="mt-4 w-full px-2">
                                                                <label class="block text-sm text-gray-700 capitalize white:text-gray-200">Employee Type</label>
                                                                <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                        </div>
                    
                                                        <div class="flex ">
                                                            <div class="mt-4 w-full px-2">
                                                                <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                                                    Location
                                                                </label>
                                                                <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                            <div class="mt-4 w-full px-2">
                                                                <label for="email" class="block text-sm text-gray-700 capitalize white:text-gray-200">Department</label>
                                                                <input type="email" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="flex ">
                                                            <div class="mt-4 w-full px-2">
                                                                <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                                                    Number Of Dependents
                                                                </label>
                                                                <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                            <div class="mt-4 w-full px-2">
                                                                <label for="email" class="block text-sm text-gray-700 capitalize white:text-gray-200">Hourly Rate</label>
                                                                <input type="email" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                        </div>
                                                        <div class="flex ">
                                                            <div class="mt-4 w-full px-2">
                                                                <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                                                    Daily Rate
                                                                </label>
                                                                <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                            <div class="mt-4 w-full px-2">
                                                                <label for="email" class="block text-sm text-gray-700 capitalize white:text-gray-200">Monthly Rate</label>
                                                                <input type="email" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                        </div>
                    
                                                        <div class="mt-4 px-2">
                                                            <label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Salary Type</label>
                                                            <input type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                        </div>
                    
                                                        <div class="flex justify-end mt-6 px-2">
                                                            <button type="button" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl w-full white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                                                Update
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
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
<?php endif; ?><?php /**PATH C:\xampp\htdocs\payroll_system\resources\views/masterfile/employee_list.blade.php ENDPATH**/ ?>