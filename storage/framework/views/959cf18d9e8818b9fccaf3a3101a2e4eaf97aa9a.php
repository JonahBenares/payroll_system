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