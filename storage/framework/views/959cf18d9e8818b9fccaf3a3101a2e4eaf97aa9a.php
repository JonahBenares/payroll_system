<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="overflow-auto h-screen pb-28 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
        <div class="flex flex-col flex-wrap sm:flex-row ">
            <div class="p-4 relative h-full w-full text-center  bg-white rounded-lg shadow-lg white:bg-gray-800 white:border-gray-700">
                <div class="flex justify-between pb-4 bg-white white:bg-gray-900">
                    <div > 
                        <h2 class="uppercase font-semibold py-2">Schedule</h2>
                    </div>
                    <div class="flex">
                        <a href="<?php echo e(route('shiftschedule.create')); ?>" type="button" >
                            <div class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                <span>Add Schedule</span>
<<<<<<< HEAD
=======
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
                                            <h1 class="text-xl font-medium text-gray-800 ">Add New Schedule</h1>
                    
                                            <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            </button>
                                        </div>
                    
                                        <form class="mt-5">

                                      
                                            <div class="flex ">
                                                <div class="mt-4 w-full px-2">
                                                    <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                                       Month
                                                    </label>
                                                    <select type="text" name="month" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                        <option value=""></option>
                                                        <option value="1">January</option>
                                                        <option value="2">February</option>
                                                        <option value="3">March</option>
                                                        <option value="4">April</option>
                                                        <option value="5">May</option>
                                                        <option value="6">June</option>
                                                        <option value="7">July</option>
                                                        <option value="8">August</option>
                                                        <option value="9">September</option>
                                                        <option value="10">October</option>
                                                        <option value="11">November</option>
                                                        <option value="12">December</option>
                                                    </select>
                                                </div>
                                                <div class="mt-4 w-full px-2">
                                                    <label for="year" class="block text-sm text-gray-700 capitalize white:text-gray-200">Year</label>
                                                    <?php $current_year = date("Y") ?>
                                                    <select type="text" name="year" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                        <option value=""></option>
                                                        <?php for($x=2022;$x<=$current_year;$x++): ?>
                                                            <option value="<?php echo e($x); ?>"><?php echo e($x); ?></option>
                                                        <?php endfor; ?>
                                                    </select>
                                                </div>
                                            </div>
                                        
                                            <div class="mt-4 px-2">
                                                <label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Schedule Type</label>
                                                <select type="text" id="sched_type" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                    <option value="" selected>Select Type</option>
                                                    <option value="regular" >Regular</option>
                                                    <option value="shifting" >Shifting</option>
                                                </select>
                                            </div>
                                            
                                            <div class="flex ">
                                                <div class="mt-4 w-full px-2">
                                                    <label class="block text-sm text-gray-700 capitalize white:text-gray-200">Schedule Name</label>
                                                    <select type="text" name="schedule" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                        <option value=""></option>
                                                        <?php $__currentLoopData = $schedule; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($sc->id); ?>"><?php echo e($sc->schedule_code . " - " . $sc->time_in . " to " . $sc->time_out); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div> 
                                            <div class="hidden" id="regulars">
                                                <div class="flex ">
                                                    <div class="mt-4 w-full px-2">
                                                        <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                                            Rest Day 1
                                                        </label>
                                                        <select type="text" name="rest_day1" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            <option value=""></option>
                                                            <option value="Sunday">Sunday</option>
                                                            <option value="Monday">Monday</option>
                                                            <option value="Tuesday">Tuesday</option>
                                                            <option value="Wednesday">Wednesday</option>
                                                            <option value="Thursday">Thursday</option>
                                                            <option value="Friday">Friday</option>
                                                            <option value="Saturday">Saturday</option>
                                                        </select>
                                                    </div>
                                                    <div class="mt-4 w-full px-2">
                                                        <label for="email" class="block text-sm text-gray-700 capitalize white:text-gray-200">Rest Day 2</label>
                                                        <select type="text" name="rest_day2" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            <option value=""></option>
                                                            <option value="Sunday">Sunday</option>
                                                            <option value="Monday">Monday</option>
                                                            <option value="Tuesday">Tuesday</option>
                                                            <option value="Wednesday">Wednesday</option>
                                                            <option value="Thursday">Thursday</option>
                                                            <option value="Friday">Friday</option>
                                                            <option value="Saturday">Saturday</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div x-data="{show: false}">
                                                    <div class="flex ">
                                                        <div class="mt-4 w-full px-2 flex">
                                                            <div class="flex items-center">
                                                                <input checked id="checked-checkbox" id="alternating" type="checkbox"  x-model="show" value="" class=" w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                                                <label for="checked-checkbox" class="ml-2 text-sm font-medium text-gray-900 white:text-gray-300">Alternate Schedule</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="" x-show="show">
                                                        <div class="mt-4 px-2">
                                                            <label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Which Rest Day</label>
                                                            <select class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                                <option value="">Rest Day 1</option>
                                                            </select>   
                                                        </div>
                                                        <div class="mt-4 px-2">
                                                            <label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Alternate Week</label>
                                                            <select class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                                <option value="">1,3,5</option>
                                                                <option value="">2,4</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label class=" px-2 mt-4 block text-sm text-gray-700 capitalize white:text-gray-200">
                                                    Add Employee
                                                </label>
                                                <div class="flex ">
                                                    <div class="w-full px-2">
                                                        <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                    </div>
                                                    <div class="px-2">
                                                        <button type="button" class="mt-3 py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" title="Add Employee"> 
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                                            </svg>      
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hidden" id="shiftings">
                                                <div class="flex ">
                                                    <div class="mt-4 w-full px-2">
                                                        <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                                            Employee
                                                        </label>
                                                        <select class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            <option value="" selected>Select Employee</option>
                                                        </select>
                                                    </div>
                                                    <div class="px-2 pt-9">
                                                        <button type="button" class="mt-3 py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" title="Add Employee"> 
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                                            </svg>      
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="flex ">
                                                    <div class="mt-4 w-full px-2">
                                                        <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                                            Rest Day 1
                                                        </label>
                                                        <input type="date" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                    </div>
                                                    <div class="mt-4 w-full px-2">
                                                        <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                                            Rest Day 2
                                                        </label>
                                                        <input type="date" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                    </div>
                                                    <div class="mt-4 w-full px-2">
                                                        <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                                            Rest Day 3
                                                        </label>
                                                        <input type="date" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                    </div>
                                                </div>
                                                <div class="flex ">
                                                    <div class="mt-4 w-full px-2">
                                                        <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                                            Employee
                                                        </label>
                                                        <select class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            <option value="" selected>Select Employee</option>
                                                        </select>
                                                    </div>
                                                    <div class="px-2 pt-9">
                                                        <button type="button" class="mt-3 py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" title="Add Employee"> 
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                                            </svg>      
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="flex ">
                                                    <div class="mt-4 w-full px-2">
                                                        <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                                            Rest Day 1
                                                        </label>
                                                        <input type="date" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                    </div>
                                                    <div class="mt-4 w-full px-2">
                                                        <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                                            Rest Day 2
                                                        </label>
                                                        <input type="date" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                    </div>
                                                    <div class="mt-4 w-full px-2">
                                                        <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                                            Rest Day 3
                                                        </label>
                                                        <input type="date" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="flex justify-end mt-6 px-2">
                                                <button type="button" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl w-full white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                                    Save
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
>>>>>>> b652b1b4b89b91cedc1c1618fac4aa85e0d47379
                            </div>
                        </a>
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 white:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                            </div>
                            <input type="text" id="table-search-users" class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-2xl border border-gray-300 focus:ring-blue-500 focus:border-blue-500 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500" placeholder="Search for Employee">
                        </div>
                    </div>
                </div>
                <hr>    
                <div class="flex justify-center pb-1 pt-2 bg-white white:bg-gray-900">
                    <div class="mx-2 text-left">
                        <select class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 w-60">
                            <option value="" selected>Select Month</option>
                            <option value="">January</option>
                            <option value="">February</option>
                            <option value="">March</option>
                            <option value="">April</option>
                            <option value="">May</option>
                            <option value="">June</option>
                            <option value="">July</option>
                            <option value="">August</option>
                            <option value="">September</option>
                            <option value="">October</option>
                            <option value="">November</option>
                            <option value="">December</option>
                        </select>
                    </div>
                    <div class="mx-2 text-left">
                        <select class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 w-60">
                            <option value="" selected>Select Year</option>
                            <option value="">2022</option>
                            <option value="">2022</option>
                            <option value="">2022</option>
                            <option value="">2022</option>
                            <option value="">2022</option>
                            <option value="">2022</option>
                            <option value="">2022</option>
                            <option value="">2022</option>
                            <option value="">2022</option>
                            <option value="">2022</option>
                        </select>
                    </div>
                    <div class="mx-2 pt-3 text-left">
                        <button class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                            <span>Generate</span>
                        </button>
                    </div>
                </div>
                <div class="w-full overflow-x-auto overflow-y-hidden hover:overflow-y-auto  relative  pt-2 pr-2 pl-2 mt-3 md:pt-0 md:pr-0 md:pl-0 h-96 ">
                    <table class="text-sm text-left text-gray-500 white:text-gray-400 border border-gray-200 border-collapse" width="200%">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 white:bg-gray-700 white:text-gray-400 sticky top-0 z-20">
                            <tr>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 bg-gray-50 sticky left-0 z-10" rowspan="2" width="6%">Employee</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200  bg-gray-50 " rowspan="2" width="5%">Position</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">1</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">2</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">3</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">4</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">5</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">6</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">7</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">8</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">9</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">10</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">11</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">12</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">13</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">14</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">15</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">16</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">17</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">18</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">19</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">20</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">21</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">22</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">23</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">24</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">25</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">26</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">27</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">28</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">29</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">30</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">31</td>
                            </tr>
                            <tr>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >M</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >T</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >W</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >T</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >F</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >S</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >S</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >M</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >T</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >W</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >T</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >F</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >S</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >S</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >M</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >T</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >W</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >T</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >F</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >S</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >S</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >M</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >T</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >W</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >T</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >F</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >S</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >S</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >F</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >S</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >S</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-1 px-1 border border-gray-200 bg-white sticky left-0 z-10" >Crizeal Precious Claire Alingasa Hilado</td>
                                <td class="py-1 px-1 border border-gray-200 bg-white sticky left-0">System Implementer</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">1</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">2</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">3</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">4</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">5</td>
                                <td class="py-1 px-1 border border-gray-200 text-center bg-blue-300"></td>
                                <td class="py-1 px-1 border border-gray-200 text-center bg-yellow-300"></td>
                                <td class="py-1 px-1 border border-gray-200 text-center">8</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">9</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">10</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">11</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">12</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">13</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">14</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">15</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">16</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">17</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">18</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">19</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">20</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">21</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">22</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">23</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">24</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">25</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">26</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">27</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">28</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">29</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">30</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">31</td>
                            </tr>
                            <tr>
                                <td class="py-1 px-1 border border-gray-200 bg-white sticky left-0 z-10" >Crizeal Precious Claire Alingasa Hilado</td>
                                <td class="py-1 px-1 border border-gray-200 bg-white sticky left-0">System Implementer</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">1</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">2</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">3</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">4</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">5</td>
                                <td class="py-1 px-1 border border-gray-200 text-center bg-blue-300"></td>
                                <td class="py-1 px-1 border border-gray-200 text-center bg-yellow-300"></td>
                                <td class="py-1 px-1 border border-gray-200 text-center">8</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">9</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">10</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">11</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">12</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">13</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">14</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">15</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">16</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">17</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">18</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">19</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">20</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">21</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">22</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">23</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">24</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">25</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">26</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">27</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">28</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">29</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">30</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">31</td>
                            </tr>
                            <tr>
                                <td class="py-1 px-1 border border-gray-200 bg-white sticky left-0 z-10" >Crizeal Precious Claire Alingasa Hilado</td>
                                <td class="py-1 px-1 border border-gray-200 bg-white sticky left-0">System Implementer</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">1</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">2</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">3</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">4</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">5</td>
                                <td class="py-1 px-1 border border-gray-200 text-center bg-blue-300"></td>
                                <td class="py-1 px-1 border border-gray-200 text-center bg-yellow-300"></td>
                                <td class="py-1 px-1 border border-gray-200 text-center">8</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">9</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">10</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">11</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">12</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">13</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">14</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">15</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">16</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">17</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">18</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">19</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">20</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">21</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">22</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">23</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">24</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">25</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">26</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">27</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">28</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">29</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">30</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">31</td>
                            </tr>
                            <tr>
                                <td class="py-1 px-1 border border-gray-200 bg-white sticky left-0 z-10" >Crizeal Precious Claire Alingasa Hilado</td>
                                <td class="py-1 px-1 border border-gray-200 bg-white sticky left-0">System Implementer</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">1</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">2</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">3</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">4</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">5</td>
                                <td class="py-1 px-1 border border-gray-200 text-center bg-blue-300"></td>
                                <td class="py-1 px-1 border border-gray-200 text-center bg-yellow-300"></td>
                                <td class="py-1 px-1 border border-gray-200 text-center">8</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">9</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">10</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">11</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">12</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">13</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">14</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">15</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">16</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">17</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">18</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">19</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">20</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">21</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">22</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">23</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">24</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">25</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">26</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">27</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">28</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">29</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">30</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">31</td>
                            </tr>
                            <tr>
                                <td class="py-1 px-1 border border-gray-200 bg-white sticky left-0 z-10" >Crizeal Precious Claire Alingasa Hilado</td>
                                <td class="py-1 px-1 border border-gray-200 bg-white sticky left-0">System Implementer</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">1</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">2</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">3</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">4</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">5</td>
                                <td class="py-1 px-1 border border-gray-200 text-center bg-blue-300"></td>
                                <td class="py-1 px-1 border border-gray-200 text-center bg-yellow-300"></td>
                                <td class="py-1 px-1 border border-gray-200 text-center">8</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">9</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">10</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">11</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">12</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">13</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">14</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">15</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">16</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">17</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">18</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">19</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">20</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">21</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">22</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">23</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">24</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">25</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">26</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">27</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">28</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">29</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">30</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">31</td>
                            </tr>
                            <tr>
                                <td class="py-1 px-1 border border-gray-200 bg-white sticky left-0 z-10" >Crizeal Precious Claire Alingasa Hilado</td>
                                <td class="py-1 px-1 border border-gray-200 bg-white sticky left-0">System Implementer</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">1</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">2</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">3</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">4</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">5</td>
                                <td class="py-1 px-1 border border-gray-200 text-center bg-blue-300"></td>
                                <td class="py-1 px-1 border border-gray-200 text-center bg-yellow-300"></td>
                                <td class="py-1 px-1 border border-gray-200 text-center">8</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">9</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">10</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">11</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">12</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">13</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">14</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">15</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">16</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">17</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">18</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">19</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">20</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">21</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">22</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">23</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">24</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">25</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">26</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">27</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">28</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">29</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">30</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">31</td>
                            </tr>
                            <tr>
                                <td class="py-1 px-1 border border-gray-200 bg-white sticky left-0 z-10" >Crizeal Precious Claire Alingasa Hilado</td>
                                <td class="py-1 px-1 border border-gray-200 bg-white sticky left-0">System Implementer</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">1</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">2</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">3</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">4</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">5</td>
                                <td class="py-1 px-1 border border-gray-200 text-center bg-blue-300"></td>
                                <td class="py-1 px-1 border border-gray-200 text-center bg-yellow-300"></td>
                                <td class="py-1 px-1 border border-gray-200 text-center">8</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">9</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">10</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">11</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">12</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">13</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">14</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">15</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">16</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">17</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">18</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">19</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">20</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">21</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">22</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">23</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">24</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">25</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">26</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">27</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">28</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">29</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">30</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">31</td>
                            </tr>
                            <tr>
                                <td class="py-1 px-1 border border-gray-200 bg-white sticky left-0 z-10" >Crizeal Precious Claire Alingasa Hilado</td>
                                <td class="py-1 px-1 border border-gray-200 bg-white sticky left-0">System Implementer</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">1</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">2</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">3</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">4</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">5</td>
                                <td class="py-1 px-1 border border-gray-200 text-center bg-blue-300"></td>
                                <td class="py-1 px-1 border border-gray-200 text-center bg-yellow-300"></td>
                                <td class="py-1 px-1 border border-gray-200 text-center">8</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">9</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">10</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">11</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">12</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">13</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">14</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">15</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">16</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">17</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">18</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">19</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">20</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">21</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">22</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">23</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">24</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">25</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">26</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">27</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">28</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">29</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">30</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">31</td>
                            </tr>
                            <tr>
                                <td class="py-1 px-1 border border-gray-200 bg-white sticky left-0 z-10" >Crizeal Precious Claire Alingasa Hilado</td>
                                <td class="py-1 px-1 border border-gray-200 bg-white sticky left-0">System Implementer</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">1</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">2</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">3</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">4</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">5</td>
                                <td class="py-1 px-1 border border-gray-200 text-center bg-blue-300"></td>
                                <td class="py-1 px-1 border border-gray-200 text-center bg-yellow-300"></td>
                                <td class="py-1 px-1 border border-gray-200 text-center">8</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">9</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">10</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">11</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">12</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">13</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">14</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">15</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">16</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">17</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">18</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">19</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">20</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">21</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">22</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">23</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">24</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">25</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">26</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">27</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">28</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">29</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">30</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">31</td>
                            </tr>
                            <tr>
                                <td class="py-1 px-1 border border-gray-200 bg-white sticky left-0 z-10" >Crizeal Precious Claire Alingasa Hilado</td>
                                <td class="py-1 px-1 border border-gray-200 bg-white sticky left-0">System Implementer</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">1</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">2</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">3</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">4</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">5</td>
                                <td class="py-1 px-1 border border-gray-200 text-center bg-blue-300"></td>
                                <td class="py-1 px-1 border border-gray-200 text-center bg-yellow-300"></td>
                                <td class="py-1 px-1 border border-gray-200 text-center">8</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">9</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">10</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">11</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">12</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">13</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">14</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">15</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">16</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">17</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">18</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">19</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">20</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">21</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">22</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">23</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">24</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">25</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">26</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">27</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">28</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">29</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">30</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">31</td>
                            </tr>
                            <tr>
                                <td class="py-1 px-1 border border-gray-200 bg-white sticky left-0 z-10" >Crizeal Precious Claire Alingasa Hilado</td>
                                <td class="py-1 px-1 border border-gray-200 bg-white sticky left-0">System Implementer</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">1</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">2</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">3</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">4</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">5</td>
                                <td class="py-1 px-1 border border-gray-200 text-center bg-blue-300"></td>
                                <td class="py-1 px-1 border border-gray-200 text-center bg-yellow-300"></td>
                                <td class="py-1 px-1 border border-gray-200 text-center">8</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">9</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">10</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">11</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">12</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">13</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">14</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">15</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">16</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">17</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">18</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">19</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">20</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">21</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">22</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">23</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">24</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">25</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">26</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">27</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">28</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">29</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">30</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">31</td>
                            </tr>
                            <tr>
                                <td class="py-1 px-1 border border-gray-200 bg-white sticky left-0 z-10" >Crizeal Precious Claire Alingasa Hilado</td>
                                <td class="py-1 px-1 border border-gray-200 bg-white sticky left-0">System Implementer</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">1</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">2</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">3</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">4</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">5</td>
                                <td class="py-1 px-1 border border-gray-200 text-center bg-blue-300"></td>
                                <td class="py-1 px-1 border border-gray-200 text-center bg-yellow-300"></td>
                                <td class="py-1 px-1 border border-gray-200 text-center">8</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">9</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">10</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">11</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">12</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">13</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">14</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">15</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">16</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">17</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">18</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">19</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">20</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">21</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">22</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">23</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">24</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">25</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">26</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">27</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">28</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">29</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">30</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">31</td>
                            </tr>
                            <tr>
                                <td class="py-1 px-1 border border-gray-200 bg-white sticky left-0 z-10" >Crizeal Precious Claire Alingasa Hilado</td>
                                <td class="py-1 px-1 border border-gray-200 bg-white sticky left-0">System Implementer</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">1</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">2</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">3</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">4</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">5</td>
                                <td class="py-1 px-1 border border-gray-200 text-center bg-blue-300"></td>
                                <td class="py-1 px-1 border border-gray-200 text-center bg-yellow-300"></td>
                                <td class="py-1 px-1 border border-gray-200 text-center">8</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">9</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">10</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">11</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">12</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">13</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">14</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">15</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">16</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">17</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">18</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">19</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">20</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">21</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">22</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">23</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">24</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">25</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">26</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">27</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">28</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">29</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">30</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">31</td>
                            </tr>
                            <tr>
                                <td class="py-1 px-1 border border-gray-200 bg-white sticky left-0 z-10" >Crizeal Precious Claire Alingasa Hilado</td>
                                <td class="py-1 px-1 border border-gray-200 bg-white sticky left-0">System Implementer</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">1</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">2</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">3</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">4</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">5</td>
                                <td class="py-1 px-1 border border-gray-200 text-center bg-blue-300"></td>
                                <td class="py-1 px-1 border border-gray-200 text-center bg-yellow-300"></td>
                                <td class="py-1 px-1 border border-gray-200 text-center">8</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">9</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">10</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">11</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">12</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">13</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">14</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">15</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">16</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">17</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">18</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">19</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">20</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">21</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">22</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">23</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">24</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">25</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">26</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">27</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">28</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">29</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">30</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">31</td>
                            </tr>
                            <tr>
                                <td class="py-1 px-1 border border-gray-200 bg-white sticky left-0 z-10" >Crizeal Precious Claire Alingasa Hilado</td>
                                <td class="py-1 px-1 border border-gray-200 bg-white sticky left-0">System Implementer</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">1</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">2</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">3</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">4</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">5</td>
                                <td class="py-1 px-1 border border-gray-200 text-center bg-blue-300"></td>
                                <td class="py-1 px-1 border border-gray-200 text-center bg-yellow-300"></td>
                                <td class="py-1 px-1 border border-gray-200 text-center">8</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">9</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">10</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">11</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">12</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">13</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">14</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">15</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">16</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">17</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">18</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">19</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">20</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">21</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">22</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">23</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">24</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">25</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">26</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">27</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">28</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">29</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">30</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">31</td>
                            </tr>
                            <tr>
                                <td class="py-1 px-1 border border-gray-200 bg-white sticky left-0 z-10" >Crizeal Precious Claire Alingasa Hilado</td>
                                <td class="py-1 px-1 border border-gray-200 bg-white sticky left-0">System Implementer</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">1</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">2</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">3</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">4</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">5</td>
                                <td class="py-1 px-1 border border-gray-200 text-center bg-blue-300"></td>
                                <td class="py-1 px-1 border border-gray-200 text-center bg-yellow-300"></td>
                                <td class="py-1 px-1 border border-gray-200 text-center">8</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">9</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">10</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">11</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">12</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">13</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">14</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">15</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">16</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">17</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">18</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">19</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">20</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">21</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">22</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">23</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">24</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">25</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">26</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">27</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">28</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">29</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">30</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">31</td>
                            </tr>
                            <tr>
                                <td class="py-1 px-1 border border-gray-200 bg-white sticky left-0 z-10" >Crizeal Precious Claire Alingasa Hilado</td>
                                <td class="py-1 px-1 border border-gray-200 bg-white sticky left-0">System Implementer</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">1</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">2</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">3</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">4</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">5</td>
                                <td class="py-1 px-1 border border-gray-200 text-center bg-blue-300"></td>
                                <td class="py-1 px-1 border border-gray-200 text-center bg-yellow-300"></td>
                                <td class="py-1 px-1 border border-gray-200 text-center">8</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">9</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">10</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">11</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">12</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">13</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">14</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">15</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">16</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">17</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">18</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">19</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">20</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">21</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">22</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">23</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">24</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">25</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">26</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">27</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">28</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">29</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">30</td>
                                <td class="py-1 px-1 border border-gray-200 text-center">31</td>
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
<?php endif; ?>



<?php /**PATH C:\xampp\htdocs\payroll_system\resources\views/shift_sched/index.blade.php ENDPATH**/ ?>