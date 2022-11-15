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
                        <h2 class="uppercase font-semibold py-2">Upload Allowance</h2>
                    </div>
                    <div class="flex">
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 white:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                            </div>
                            <input type="text" id="table-search-users" class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-2xl border border-gray-300 focus:ring-blue-500 focus:border-blue-500 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500" placeholder="Search ">
                        </div>
                    </div>
                </div>
                <div class="flex justify-between mb-5"> 
                    <div class="flex justify-center pb-1 pt-2 bg-white white:bg-gray-900">
                        <div class="mx-2 text-left">
                            <input type="date" class="block  px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 ">
                        </div>
                        <div class="mx-2 text-left">
                            <input type="date" class="block px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 ">
                        </div>
                        <div class="mx-2 text-left">
                        <select class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 ">
                            <option value="" selected>Allowance Description</option>
                            <option value="">Cash Allowance</option>
                            <option value="">Clothing Allowance</option>
                            <option value="">House Rent Allowance</option>
                            <option value="">Meal and Transportation Allowance</option>
                            <option value="">Uniform Allowance</option>
                        </select>
                        </div>
                    </div>
                    <div class="flex justify-center pb-1 pt-2 bg-white white:bg-gray-900">
                        <div class="mx-2 text-left">
                            <input type="file" class="block w-full px-1 py-1 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 w-60">
                        </div>
                        <div class="mx-2 text-left">
                            <button class="flex items-center justify-center px-3 py-2 mx-2 mt-3 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">Upload</button>
                        </div>
                    </div>
                </div>
                <div class=" hover:overflow-x-auto overflow-x-hidden h-100 max-h-100 pt-2 pr-2 pl-2 mt-3 md:pt-0 md:pr-0 md:pl-0 border">
                    <table class="text-sm text-left text-gray-500 white:text-gray-400 border border-gray-200 border-collapse">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 white:bg-gray-700 white:text-gray-400">
                            <tr class="">
                                <th scope="col" class="py-2 px-2 w-1/4">
                                    Employee Name
                                </th>
                                <th scope="col" class="py-2 px-2" align="center">
                                    D1 
                                </th>
                                <th scope="col" class="py-2 px-2" align="center">
                                    D2 
                                </th>
                                <th scope="col" class="py-2 px-2" align="center">
                                    D3 
                                </th>
                                <th scope="col" class="py-2 px-2" align="center">
                                    D4 
                                </th>
                                <th scope="col" class="py-2 px-2" align="center">
                                    D5 
                                </th>
                                <th scope="col" class="py-2 px-2" align="center">
                                    D6 
                                </th>
                                <th scope="col" class="py-2 px-2" align="center">
                                    D7
                                </th>
                                <th scope="col" class="py-2 px-2" width="15%">
                                    Total Days
                                </th>
                                <th scope="col" class="py-2 px-2" width="15%">
                                    Allowance Amount
                                </th>
                                <th scope="col" class="py-2 px-2" width="15%">
                                    OT
                                </th>
                                <th scope="col" class="py-2 px-2" width="15%">
                                    Total Amount
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    Jonah May Benares
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <div x-data="{ tooltip: false }" class=" z-30 inline-flex">
                                        <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                            5 
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            14:00 - 14:05
                                            </div>
                                            <svg class="absolute z-10 w-6 h-6 text-white transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <div x-data="{ tooltip: false }" class=" z-30 inline-flex">
                                        <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                            5 
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            14:00 - 14:05
                                            </div>
                                            <svg class="absolute z-10 w-6 h-6 text-white transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <div x-data="{ tooltip: false }" class=" z-30 inline-flex">
                                        <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                            5 
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            14:00 - 14:05
                                            </div>
                                            <svg class="absolute z-10 w-6 h-6 text-white transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <div x-data="{ tooltip: false }" class=" z-30 inline-flex">
                                        <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                            5 
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            14:00 - 14:05
                                            </div>
                                            <svg class="absolute z-10 w-6 h-6 text-white transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <div x-data="{ tooltip: false }" class=" z-30 inline-flex">
                                        <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                            5 
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            14:00 - 14:05
                                            </div>
                                            <svg class="absolute z-10 w-6 h-6 text-white transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <div x-data="{ tooltip: false }" class=" z-30 inline-flex">
                                        <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                            5 
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            14:00 - 14:05
                                            </div>
                                            <svg class="absolute z-10 w-6 h-6 text-white transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <div x-data="{ tooltip: false }" class=" z-30 inline-flex">
                                        <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                            5 
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            14:00 - 14:05
                                            </div>
                                            <svg class="absolute z-10 w-6 h-6 text-white transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500 ">
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500 ">
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500 ">
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500 ">
                                </td>
                            </tr>
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    Suzzette Molina
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <div x-data="{ tooltip: false }" class=" z-30 inline-flex">
                                        <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                            5 
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            14:00 - 14:05
                                            </div>
                                            <svg class="absolute z-10 w-6 h-6 text-white transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <div x-data="{ tooltip: false }" class=" z-30 inline-flex">
                                        <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                            5 
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            14:00 - 14:05
                                            </div>
                                            <svg class="absolute z-10 w-6 h-6 text-white transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <div x-data="{ tooltip: false }" class=" z-30 inline-flex">
                                        <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                            5 
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            14:00 - 14:05
                                            </div>
                                            <svg class="absolute z-10 w-6 h-6 text-white transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <div x-data="{ tooltip: false }" class=" z-30 inline-flex">
                                        <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                            5 
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            14:00 - 14:05
                                            </div>
                                            <svg class="absolute z-10 w-6 h-6 text-white transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <div x-data="{ tooltip: false }" class=" z-30 inline-flex">
                                        <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                            5 
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            14:00 - 14:05
                                            </div>
                                            <svg class="absolute z-10 w-6 h-6 text-white transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <div x-data="{ tooltip: false }" class=" z-30 inline-flex">
                                        <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                            5 
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            14:00 - 14:05
                                            </div>
                                            <svg class="absolute z-10 w-6 h-6 text-white transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <div x-data="{ tooltip: false }" class=" z-30 inline-flex">
                                        <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                            5 
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            14:00 - 14:05
                                            </div>
                                            <svg class="absolute z-10 w-6 h-6 text-white transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500 ">
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500 ">
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500 ">
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500 ">
                                </td>
                                
                            </tr>
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    Sydney Austria
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <div x-data="{ tooltip: false }" class=" z-30 inline-flex">
                                        <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                            5 
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            14:00 - 14:05
                                            </div>
                                            <svg class="absolute z-10 w-6 h-6 text-white transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <div x-data="{ tooltip: false }" class=" z-30 inline-flex">
                                        <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                            5 
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            14:00 - 14:05
                                            </div>
                                            <svg class="absolute z-10 w-6 h-6 text-white transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <div x-data="{ tooltip: false }" class=" z-30 inline-flex">
                                        <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                            5 
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            14:00 - 14:05
                                            </div>
                                            <svg class="absolute z-10 w-6 h-6 text-white transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <div x-data="{ tooltip: false }" class=" z-30 inline-flex">
                                        <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                            5 
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            14:00 - 14:05
                                            </div>
                                            <svg class="absolute z-10 w-6 h-6 text-white transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <div x-data="{ tooltip: false }" class=" z-30 inline-flex">
                                        <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                            5 
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            14:00 - 14:05
                                            </div>
                                            <svg class="absolute z-10 w-6 h-6 text-white transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <div x-data="{ tooltip: false }" class=" z-30 inline-flex">
                                        <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                            5 
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            14:00 - 14:05
                                            </div>
                                            <svg class="absolute z-10 w-6 h-6 text-white transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <div x-data="{ tooltip: false }" class=" z-30 inline-flex">
                                        <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                            5 
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            14:00 - 14:05
                                            </div>
                                            <svg class="absolute z-10 w-6 h-6 text-white transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500 ">
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500 ">
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500 ">
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500 ">
                                </td>
                            </tr>
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    Solenn De Leon
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <div x-data="{ tooltip: false }" class=" z-30 inline-flex">
                                        <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                            5 
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            14:00 - 14:05
                                            </div>
                                            <svg class="absolute z-10 w-6 h-6 text-white transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <div x-data="{ tooltip: false }" class=" z-30 inline-flex">
                                        <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                            5 
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            14:00 - 14:05
                                            </div>
                                            <svg class="absolute z-10 w-6 h-6 text-white transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <div x-data="{ tooltip: false }" class=" z-30 inline-flex">
                                        <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                            5 
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            14:00 - 14:05
                                            </div>
                                            <svg class="absolute z-10 w-6 h-6 text-white transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <div x-data="{ tooltip: false }" class=" z-30 inline-flex">
                                        <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                            5 
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            14:00 - 14:05
                                            </div>
                                            <svg class="absolute z-10 w-6 h-6 text-white transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <div x-data="{ tooltip: false }" class=" z-30 inline-flex">
                                        <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                            5 
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            14:00 - 14:05
                                            </div>
                                            <svg class="absolute z-10 w-6 h-6 text-white transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <div x-data="{ tooltip: false }" class=" z-30 inline-flex">
                                        <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                            5 
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            14:00 - 14:05
                                            </div>
                                            <svg class="absolute z-10 w-6 h-6 text-white transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <div x-data="{ tooltip: false }" class=" z-30 inline-flex">
                                        <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                            5 
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            14:00 - 14:05
                                            </div>
                                            <svg class="absolute z-10 w-6 h-6 text-white transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500 ">
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500 ">
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500 ">
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500 ">
                                </td>
                            </tr>
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    Celine Tigbaliwana
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <div x-data="{ tooltip: false }" class=" z-30 inline-flex">
                                        <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                            5 
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            14:00 - 14:05
                                            </div>
                                            <svg class="absolute z-10 w-6 h-6 text-white transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <div x-data="{ tooltip: false }" class=" z-30 inline-flex">
                                        <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                            5 
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            14:00 - 14:05
                                            </div>
                                            <svg class="absolute z-10 w-6 h-6 text-white transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <div x-data="{ tooltip: false }" class=" z-30 inline-flex">
                                        <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                            5 
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            14:00 - 14:05
                                            </div>
                                            <svg class="absolute z-10 w-6 h-6 text-white transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <div x-data="{ tooltip: false }" class=" z-30 inline-flex">
                                        <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                            5 
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            14:00 - 14:05
                                            </div>
                                            <svg class="absolute z-10 w-6 h-6 text-white transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <div x-data="{ tooltip: false }" class=" z-30 inline-flex">
                                        <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                            5 
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            14:00 - 14:05
                                            </div>
                                            <svg class="absolute z-10 w-6 h-6 text-white transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <div x-data="{ tooltip: false }" class=" z-30 inline-flex">
                                        <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                            5 
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            14:00 - 14:05
                                            </div>
                                            <svg class="absolute z-10 w-6 h-6 text-white transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <div x-data="{ tooltip: false }" class=" z-30 inline-flex">
                                        <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                            5 
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            14:00 - 14:05
                                            </div>
                                            <svg class="absolute z-10 w-6 h-6 text-white transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500 ">
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500 ">
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500 ">
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500 ">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <button class="flex items-center w-full justify-center px-3 py-2 mx-2 mt-3 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">Save</button>
            </div>
            
        </div>
    </div>

    
        
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\payroll_system\resources\views/upload/index.blade.php ENDPATH**/ ?>