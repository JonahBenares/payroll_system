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
                        <h2 class="uppercase font-semibold py-2">Upload Allowance</h2>
                    </div>
                    <div class="flex">
                        <div x-data="{ modelOpen: false }">
                            <a href="#" @click="modelOpen =!modelOpen" type="button" >
                                <div class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white transition-colors duration-200 transform bg-emerald-500 rounded-3xl white:bg-emerald-600 white:hover:bg-emerald-700 white:focus:bg-emerald-700 hover:bg-emerald-600 focus:outline-none focus:bg-emerald-500 focus:ring focus:ring-emerald-300 focus:ring-opacity-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15M9 12l3 3m0 0l3-3m-3 3V2.25" />
                                    </svg>                                      
                                    <span>Download</span>
                                </div>
                            </a>
<<<<<<< HEAD
                    
                            <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
=======
                          
                                <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
>>>>>>> 2b184794fb6d0d94523550d520ca7221e2309eba
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
                                        <div class="flex items-center justify-between space-x-4">
                                            <h1 class="text-xl font-medium text-gray-800 ">Download Allowance Format</h1>
                                            <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            </button>
                                        </div>
<<<<<<< HEAD
=======
                                    
>>>>>>> 2b184794fb6d0d94523550d520ca7221e2309eba
                                        <form method="POST" action="<?php echo e(route('export-allowance')); ?>">
                                            <?php echo csrf_field(); ?>
                                        <div class="flex justify-between space-x-2 my-5">
                                            <div class="w-1/2">
                                                <label for="" class="text-sm">Date From:</label>
                                                <input type="date" name="from" class="text-left text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-3xl focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                            </div>
                                            <div class="w-1/2">
                                                <label for="" class="text-sm">Date To:</label>
                                                <input type="date" name="to" class="text-left text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-3xl focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                            </div>
                                        </div>
                                        <div class="my-2">
                                            <button type="submit" class="flex items-center justify-center px-3 py-2 text-sm tracking-wide text-white transition-colors duration-200 transform bg-emerald-500 rounded-3xl white:bg-emerald-600 white:hover:bg-emerald-700 white:focus:bg-emerald-700 hover:bg-emerald-600 focus:outline-none focus:bg-emerald-500 focus:ring focus:ring-emerald-300 focus:ring-opacity-50 w-full" >Download</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <label for="table-search" class="sr-only">Search</label>
<<<<<<< HEAD
                        <form class="flex items-center">   
                            <label for="simple-search" class="sr-only">Search</label>
=======
<<<<<<< HEAD
                       
                        <label for="simple-search" class="sr-only">Search</label>
=======
                        <form class="flex items-center">   
                            <label for="simple-search" class="sr-only">Search</label>
>>>>>>> 2b184794fb6d0d94523550d520ca7221e2309eba
>>>>>>> d70a7c8ec4bc9e6a7b0c7c7276d5f94475f75ca7
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
<<<<<<< HEAD
                        </form>
                    </div>
                   
                </div>
                <form class="items-center" method="POST" action="<?php echo e(route('import')); ?>" enctype="multipart/form-data">   
                    <?php echo csrf_field(); ?>    
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
=======
<<<<<<< HEAD
                       
=======
                        </form>
>>>>>>> 2b184794fb6d0d94523550d520ca7221e2309eba
                    </div>
                   
                </div>
<<<<<<< HEAD
                <form class="flex items-center" method="POST" action="<?php echo e(route('import')); ?>" enctype="multipart/form-data">   
                        <?php echo csrf_field(); ?>    
>>>>>>> d70a7c8ec4bc9e6a7b0c7c7276d5f94475f75ca7
                <div class="flex justify-between mb-5"> 
                    <div class="flex justify-center pb-1 pt-2 bg-white white:bg-gray-900 space-x-2">
                        <div class="">
                            <input type="date" name="from" class="text-sm block  px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 ">
                        </div>
                        <div class="">
                            <input type="date" name="to" class="text-sm block px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 ">
                        </div>
<<<<<<< HEAD
                        <div class="">
                        <select name="allowance_id" class="text-sm block w-52 px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 ">
=======
                        <div class="mx-2 text-left">
                        <select name="allowance_id" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 ">
=======
                <form class="items-center" method="POST" action="<?php echo e(route('import')); ?>" enctype="multipart/form-data">   
                    <?php echo csrf_field(); ?>    
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
                <div class="flex justify-between mb-5"> 
                    <div class="flex justify-center pb-1 pt-2 bg-white white:bg-gray-900 space-x-2">
                        <div class="">
                            <input type="date" name="from" class="text-sm block  px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 ">
                        </div>
                        <div class="">
                            <input type="date" name="to" class="text-sm block px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 ">
                        </div>
                        <div class="">
                        <select name="allowance_id" class="text-sm block w-52 px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 ">
>>>>>>> 2b184794fb6d0d94523550d520ca7221e2309eba
>>>>>>> d70a7c8ec4bc9e6a7b0c7c7276d5f94475f75ca7
                            <option value="" selected>Allowance</option>
                            <?php $__currentLoopData = $allowances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($a->id); ?>"><?php echo e($a->allowance_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        </div>
                    </div>
<<<<<<< HEAD
                    <div class="flex justify-center pb-1 pt-2 bg-white white:bg-gray-900 space-x-1">
                        <div class="text-left">
                            <input type="file" name="allowance" class="text-sm block w-full px-1 py-1 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 w-60">
                        </div>
                        <div class=" text-left">
                            <button type="submit" class="flex items-center justify-center px-3 py-2 mt-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">Upload</button>
=======
<<<<<<< HEAD
                    <div class="flex justify-center pb-1 pt-2 bg-white white:bg-gray-900">
                        <div class="mx-2 text-left">
                            <input type="file" name="allowance" class="text-sm block w-full px-1 py-1 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 w-60">
                        </div>
                        <div class="mx-2 text-left">
                            <button type="submit" class="flex items-center justify-center px-3 py-2 mx-2 mt-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">Upload</button>
=======
                    <div class="flex justify-center pb-1 pt-2 bg-white white:bg-gray-900 space-x-1">
                        <div class="text-left">
                            <input type="file" name="allowance" class="text-sm block w-full px-1 py-1 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 w-60">
                        </div>
                        <div class=" text-left">
                            <button type="submit" class="flex items-center justify-center px-3 py-2 mt-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">Upload</button>
>>>>>>> 2b184794fb6d0d94523550d520ca7221e2309eba
>>>>>>> d70a7c8ec4bc9e6a7b0c7c7276d5f94475f75ca7
                        </div>
                    </div>
                </div>
                </form>
<<<<<<< HEAD
=======

                <form method="POST" action="<?php echo e(route('uploadallowance.store')); ?>">
                <?php echo csrf_field(); ?>
<<<<<<< HEAD
=======
>>>>>>> 2b184794fb6d0d94523550d520ca7221e2309eba
>>>>>>> d70a7c8ec4bc9e6a7b0c7c7276d5f94475f75ca7
                <div class=" hover:overflow-x-auto overflow-x-hidden h-100 max-h-100 pt-2 pr-2 pl-2 mt-3 md:pt-0 md:pr-0 md:pl-0 border">
                    <table class="text-sm text-left text-gray-500 white:text-gray-400 border-collapse">
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
                                <th scope="col" class="py-2 px-2" align="center" width="10%">
                                    Total Days
                                </th>
                                <th scope="col" class="py-2 px-2" align="center" width="20%">
                                    Allowance Amount
                                </th>
                                <th scope="col" class="py-2 px-2" align="center" width="15%">
                                    Overtime
                                </th>
                                <th scope="col" class="py-2 px-2" align="center" width="15%">
                                    Total Amount
                                </th>
                            </tr>
                        </thead>
                        <tbody>
<<<<<<< HEAD
                           <?php $total_days=0 ?>
=======
                           <?php $total_days=0;
                           $ot_amount=0;
                           $counter = 1; ?>
>>>>>>> 2b184794fb6d0d94523550d520ca7221e2309eba
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $all): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $d1 = getTimeDiff($all['d1_in'],$all['d1_out']) ?>
                                <?php $d2 = getTimeDiff($all['d2_in'],$all['d2_out']) ?>
                                <?php $d3 = getTimeDiff($all['d3_in'],$all['d3_out']) ?>
                                <?php $d4 = getTimeDiff($all['d4_in'],$all['d4_out']) ?>
                                <?php $d5 = getTimeDiff($all['d5_in'],$all['d5_out']) ?>
                                <?php $d6 = getTimeDiff($all['d6_in'],$all['d6_out']) ?>
                                <?php $d7 = getTimeDiff($all['d7_in'],$all['d7_out']) ?>

<<<<<<< HEAD
                                <?php if($d1!=0){
=======
                                <?php 
                                 
                                if($d1!=0){
>>>>>>> 2b184794fb6d0d94523550d520ca7221e2309eba
                                    $total_days++;
                                    } if($d2!=0){
                                    $total_days++;
                                    }if($d3!=0){
                                    $total_days++;
                                    }if($d4!=0){
                                    $total_days++;
                                    }if($d5!=0){
                                    $total_days++;
                                    }if($d6!=0){
                                    $total_days++;
                                    }if($d7!=0){
                                    $total_days++;
                                    }
<<<<<<< HEAD
=======

                                    if($d1 >= 14){
                                    $ot_amount+=50;
                                    } if($d2>=14){
                                    $ot_amount+=50;
                                    }if($d3>=14){
                                    $ot_amount+=50;
                                    }if($d4>=14){
                                    $ot_amount+=50;
                                    }if($d5>=14){
                                    $ot_amount+=50;
                                    }if($d6>=14){
                                    $ot_amount+=50;
                                    }if($d7>=14){
                                    $ot_amount+=50;
                                    }

                                    $total_amount = ($total_days * $all['rate'])+$ot_amount;
>>>>>>> 2b184794fb6d0d94523550d520ca7221e2309eba
                                ?>
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                 <?php echo e($all['fullname']); ?>

                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <div x-data="{ tooltip: false }" class=" z-30 inline-flex">
                                        <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                            <?php echo e($d1); ?>

                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                           <?php echo e($all['d1_in'] . " - " . $all['d1_out']); ?>

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
<<<<<<< HEAD
                                        <?php echo e(getTimeDiff($all['d2_in'],$all['d2_out'])); ?>
=======
                                        <?php echo e($d2); ?>
>>>>>>> 2b184794fb6d0d94523550d520ca7221e2309eba

                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            <?php echo e($all['d2_in'] . " - " . $all['d2_out']); ?>

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
<<<<<<< HEAD
                                        <?php echo e(getTimeDiff($all['d3_in'],$all['d3_out'])); ?> 
=======
                                        <?php echo e($d3); ?> 
>>>>>>> 2b184794fb6d0d94523550d520ca7221e2309eba
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            <?php echo e($all['d3_in'] . " - " . $all['d3_out']); ?>

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
<<<<<<< HEAD
                                        <?php echo e(getTimeDiff($all['d4_in'],$all['d4_out'])); ?>  
=======
                                        <?php echo e($d4); ?>  
>>>>>>> 2b184794fb6d0d94523550d520ca7221e2309eba
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            <?php echo e($all['d4_in'] . " - " . $all['d4_out']); ?>

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
<<<<<<< HEAD
                                        <?php echo e(getTimeDiff($all['d5_in'],$all['d5_out'])); ?>   
=======
                                        <?php echo e($d5); ?>   
>>>>>>> 2b184794fb6d0d94523550d520ca7221e2309eba
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            <?php echo e($all['d5_in'] . " - " . $all['d5_out']); ?>

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
<<<<<<< HEAD
                                        <?php echo e(getTimeDiff($all['d6_in'],$all['d6_out'])); ?>  
=======
                                        <?php echo e($d6); ?>  
>>>>>>> 2b184794fb6d0d94523550d520ca7221e2309eba
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            <?php echo e($all['d6_in'] . " - " . $all['d6_out']); ?>

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
<<<<<<< HEAD
                                        <?php echo e(getTimeDiff($all['d7_in'],$all['d7_out'])); ?>
=======
                                        <?php echo e($d7); ?>
>>>>>>> 2b184794fb6d0d94523550d520ca7221e2309eba

                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            <?php echo e($all['d7_in'] . " - " . $all['d7_out']); ?>

                                            </div>
                                            <svg class="absolute z-10 w-6 h-6 text-white transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
<<<<<<< HEAD
                                    <input type="text" name="total_days" value="<?php echo e($total_days); ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500 ">
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <input type="text"  name="rate" value="<?php echo e($all['rate']); ?>"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500 ">
=======
                                    <input type="text" id="total_days_<?php echo e($counter); ?>" name="total_days[]" onblur="autocalculate(<?php echo e($counter); ?>)" value="<?php echo e($total_days); ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500 ">
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <input type="text" id="rate_<?php echo e($counter); ?>" name="rate[]" value="<?php echo e($all['rate']); ?>" onblur="autocalculate(<?php echo e($counter); ?>)" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500 text-right">
<<<<<<< HEAD
=======
>>>>>>> 2b184794fb6d0d94523550d520ca7221e2309eba
>>>>>>> d70a7c8ec4bc9e6a7b0c7c7276d5f94475f75ca7
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <input type="text" id="ot_amount_<?php echo e($counter); ?>" name="ot_amount[]" value="<?php echo e($ot_amount); ?>" onblur="autocalculate(<?php echo e($counter); ?>)" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500 text-right">
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <input type="text" id="total_amount_<?php echo e($counter); ?>" name="total_amount[]" value="<?php echo e($total_amount); ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500 text-right">
                                </td>
                            </tr>
<<<<<<< HEAD
                            <?php $total_days=0 ?>
=======
                            <input type="hidden" name="employee_id[]" value="<?php echo e($all['emp_id']); ?>">
                            <input type="hidden" name="personal_id[]" value="<?php echo e($all['personal_id']); ?>">
                            <input type="hidden" name="day1[]" value="<?php echo e($all['d1_in'] . '-' . $all['d1_out']); ?>">
                            <input type="hidden" name="day2[]" value="<?php echo e($all['d2_in'] . '-' . $all['d2_out']); ?>">
                            <input type="hidden" name="day3[]" value="<?php echo e($all['d3_in'] . '-' . $all['d3_out']); ?>">
                            <input type="hidden" name="day4[]" value="<?php echo e($all['d4_in'] . '-' . $all['d4_out']); ?>">
                            <input type="hidden" name="day5[]" value="<?php echo e($all['d5_in'] . '-' . $all['d5_out']); ?>">
                            <input type="hidden" name="day6[]" value="<?php echo e($all['d6_in'] . '-' . $all['d6_out']); ?>">
                            <input type="hidden" name="day7[]" value="<?php echo e($all['d7_in'] . '-' . $all['d7_out']); ?>">
                            <input type="hidden" name="d1[]" value="<?php echo e($d1); ?>">
                            <input type="hidden" name="d2[]" value="<?php echo e($d2); ?>">
                            <input type="hidden" name="d3[]" value="<?php echo e($d3); ?>">
                            <input type="hidden" name="d4[]" value="<?php echo e($d4); ?>">
                            <input type="hidden" name="d5[]" value="<?php echo e($d5); ?>">
                            <input type="hidden" name="d6[]" value="<?php echo e($d6); ?>">
                            <input type="hidden" name="d7[]" value="<?php echo e($d7); ?>">
                            <?php $total_days=0; $ot_amount=0; $counter++; ?>
>>>>>>> 2b184794fb6d0d94523550d520ca7221e2309eba
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <input type="hidden" id="counter" name="counter" value="<?php echo e($counter); ?>">          
                    <input type="hidden" name="date_from" value="<?php echo e($post_data['from']); ?>">
                    <input type="hidden" name="date_to" value="<?php echo e($post_data['to']); ?>">
                    <input type="hidden" name="allowance_name" value="<?php echo e($post_data['allowance_id']); ?>">
                </div>
                <button class="flex items-center w-full justify-center px-3 py-2 mt-3 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">Save</button>
             </form>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
<script>  
  
    function autocalculate(counter){
   
         var total_days= document.getElementById('total_days_'+counter).value;
     
        var rate= document.getElementById('rate_'+counter).value
        var ot_amount= document.getElementById('ot_amount_'+counter).value

        var total_amount = (parseInt(total_days) * parseFloat(rate)) + parseFloat(ot_amount);
      
        document.getElementById('total_amount_'+counter).value = total_amount;

}

</script>  
<?php /**PATH C:\xampp\htdocs\payroll_system\resources\views/upload/index.blade.php ENDPATH**/ ?>