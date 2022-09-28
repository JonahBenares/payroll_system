<x-app-layout>
    <x-slot name="header"></x-slot>
    <style>
        [x-cloak] {
        display: none;
        }
    </style>
    <div class="p-4 relative h-full w-full text-center my-10 bg-white rounded-2xl shadow-lg white:bg-gray-800 white:border-gray-700">
        <div class="flex justify-between pb-4 bg-white white:bg-gray-900">
            <div > 
                <h2 class="uppercase font-semibold py-2">Schedule</h2>
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
                            <div x-cloak @click="modelOpen = false" x-show="modelOpen" 
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
                                            Submit
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 white:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                    </div>
                    <input type="text" id="table-search-users" class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-2xl border border-gray-300 focus:ring-blue-500 focus:border-blue-500 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500" placeholder="Search for Employee">
                </div>
            </div>
        </div>

        <div class="flex justify-between pb-4 bg-white white:bg-gray-900">
            <input type="text" >
        </div>
        <!-- component -->
        
        <div class=" hover:overflow-x-auto overflow-x-hidden h-100 max-h-100 pt-2 pr-2 pl-2 mt-3 md:pt-0 md:pr-0 md:pl-0 border" style="width: 1100px">
            <table class="text-sm text-left text-gray-500 white:text-gray-400 border border-gray-200 border-collapse" width="200%">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 white:bg-gray-700 white:text-gray-400 sticky top-0 z-10">
                    <tr>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 sticky left-0 bg-gray-50" width="12%" rowspan="2">Employee Name</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200" width="10%" rowspan="2">Position</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">1</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">2</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">3</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">4</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">5</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">6</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">7</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">8</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">9</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">10</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">11</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">12</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">13</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">14</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">15</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">16</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">17</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">18</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">19</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">20</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">21</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">22</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">23</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">24</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">25</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">26</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">27</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">28</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">29</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">30</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">31</th>
                    </tr>
                    <tr>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">MON</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">TUE</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">WED</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">THU</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">FRI</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">SAT</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">SUN</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">MON</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">TUE</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">WED</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">THU</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">FRI</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">SAT</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">SUN</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">MON</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">TUE</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">WED</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">THU</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">FRI</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">SAT</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">SUN</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">MON</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">TUE</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">WED</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">THU</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">FRI</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">SAT</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">SUN</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">MON</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">TUE</th>
                        <th class="py-2 px-2 bg-gray-50 border border-gray-200 text-center" width="2%">WED</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-2 px-2 border-t border-l border-b border-gray-200 sticky left-0 bg-white">IT Department</td>
                        <td class="py-2 px-2 border-t border-r border-b border-gray-200" colspan="32"></td>
                    </tr>
                    <tr>
                        <td class="py-2 px-2 border border-gray-200 sticky left-0 bg-white" >Crizeal Precious Claire Alingasa Hilado</td>
                        <td class="py-2 px-2 border border-gray-200" >System Implementer</td>
                        <td class="py-2 px-2 text-center border border-gray-200">1</td>
                        <td class="py-2 px-2 text-center border border-gray-200">2</td>
                        <td class="py-2 px-2 text-center border border-gray-200">3</td>
                        <td class="py-2 px-2 text-center border border-gray-200">4</td>
                        <td class="py-2 px-2 text-center border border-gray-200">5</td>
                        <td class="py-2 px-2 text-center border border-gray-200 bg-blue-300"></td>
                        <td class="py-2 px-2 text-center border border-gray-200 bg-yellow-300"></td>
                        <td class="py-2 px-2 text-center border border-gray-200">8</td>
                        <td class="py-2 px-2 text-center border border-gray-200">9</td>
                        <td class="py-2 px-2 text-center border border-gray-200">10</td>
                        <td class="py-2 px-2 text-center border border-gray-200">11</td>
                        <td class="py-2 px-2 text-center border border-gray-200">12</td>
                        <td class="py-2 px-2 text-center border border-gray-200">13</td>
                        <td class="py-2 px-2 text-center border border-gray-200">14</td>
                        <td class="py-2 px-2 text-center border border-gray-200">15</td>
                        <td class="py-2 px-2 text-center border border-gray-200">16</td>
                        <td class="py-2 px-2 text-center border border-gray-200">17</td>
                        <td class="py-2 px-2 text-center border border-gray-200">18</td>
                        <td class="py-2 px-2 text-center border border-gray-200">19</td>
                        <td class="py-2 px-2 text-center border border-gray-200">20</td>
                        <td class="py-2 px-2 text-center border border-gray-200">21</td>
                        <td class="py-2 px-2 text-center border border-gray-200">22</td>
                        <td class="py-2 px-2 text-center border border-gray-200">23</td>
                        <td class="py-2 px-2 text-center border border-gray-200">24</td>
                        <td class="py-2 px-2 text-center border border-gray-200">25</td>
                        <td class="py-2 px-2 text-center border border-gray-200">26</td>
                        <td class="py-2 px-2 text-center border border-gray-200">27</td>
                        <td class="py-2 px-2 text-center border border-gray-200">28</td>
                        <td class="py-2 px-2 text-center border border-gray-200">29</td>
                        <td class="py-2 px-2 text-center border border-gray-200">30</td>
                        <td class="py-2 px-2 text-center border border-gray-200">31</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-2 border border-gray-200 sticky left-0 bg-white" >Crizeal Precious Claire Alingasa Hilado</td>
                        <td class="py-2 px-2 border border-gray-200" >System Implementer</td>
                        <td class="py-2 px-2 text-center border border-gray-200">1</td>
                        <td class="py-2 px-2 text-center border border-gray-200">2</td>
                        <td class="py-2 px-2 text-center border border-gray-200">3</td>
                        <td class="py-2 px-2 text-center border border-gray-200">4</td>
                        <td class="py-2 px-2 text-center border border-gray-200">5</td>
                        <td class="py-2 px-2 text-center border border-gray-200 bg-blue-300"></td>
                        <td class="py-2 px-2 text-center border border-gray-200 bg-yellow-300"></td>
                        <td class="py-2 px-2 text-center border border-gray-200">8</td>
                        <td class="py-2 px-2 text-center border border-gray-200">9</td>
                        <td class="py-2 px-2 text-center border border-gray-200">10</td>
                        <td class="py-2 px-2 text-center border border-gray-200">11</td>
                        <td class="py-2 px-2 text-center border border-gray-200">12</td>
                        <td class="py-2 px-2 text-center border border-gray-200">13</td>
                        <td class="py-2 px-2 text-center border border-gray-200">14</td>
                        <td class="py-2 px-2 text-center border border-gray-200">15</td>
                        <td class="py-2 px-2 text-center border border-gray-200">16</td>
                        <td class="py-2 px-2 text-center border border-gray-200">17</td>
                        <td class="py-2 px-2 text-center border border-gray-200">18</td>
                        <td class="py-2 px-2 text-center border border-gray-200">19</td>
                        <td class="py-2 px-2 text-center border border-gray-200">20</td>
                        <td class="py-2 px-2 text-center border border-gray-200">21</td>
                        <td class="py-2 px-2 text-center border border-gray-200">22</td>
                        <td class="py-2 px-2 text-center border border-gray-200">23</td>
                        <td class="py-2 px-2 text-center border border-gray-200">24</td>
                        <td class="py-2 px-2 text-center border border-gray-200">25</td>
                        <td class="py-2 px-2 text-center border border-gray-200">26</td>
                        <td class="py-2 px-2 text-center border border-gray-200">27</td>
                        <td class="py-2 px-2 text-center border border-gray-200">28</td>
                        <td class="py-2 px-2 text-center border border-gray-200">29</td>
                        <td class="py-2 px-2 text-center border border-gray-200">30</td>
                        <td class="py-2 px-2 text-center border border-gray-200">31</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-2 border border-gray-200 sticky left-0 bg-white" >Crizeal Precious Claire Alingasa Hilado</td>
                        <td class="py-2 px-2 border border-gray-200" >System Implementer</td>
                        <td class="py-2 px-2 text-center border border-gray-200">1</td>
                        <td class="py-2 px-2 text-center border border-gray-200">2</td>
                        <td class="py-2 px-2 text-center border border-gray-200">3</td>
                        <td class="py-2 px-2 text-center border border-gray-200">4</td>
                        <td class="py-2 px-2 text-center border border-gray-200">5</td>
                        <td class="py-2 px-2 text-center border border-gray-200 bg-blue-300"></td>
                        <td class="py-2 px-2 text-center border border-gray-200 bg-yellow-300"></td>
                        <td class="py-2 px-2 text-center border border-gray-200">8</td>
                        <td class="py-2 px-2 text-center border border-gray-200">9</td>
                        <td class="py-2 px-2 text-center border border-gray-200">10</td>
                        <td class="py-2 px-2 text-center border border-gray-200">11</td>
                        <td class="py-2 px-2 text-center border border-gray-200">12</td>
                        <td class="py-2 px-2 text-center border border-gray-200">13</td>
                        <td class="py-2 px-2 text-center border border-gray-200">14</td>
                        <td class="py-2 px-2 text-center border border-gray-200">15</td>
                        <td class="py-2 px-2 text-center border border-gray-200">16</td>
                        <td class="py-2 px-2 text-center border border-gray-200">17</td>
                        <td class="py-2 px-2 text-center border border-gray-200">18</td>
                        <td class="py-2 px-2 text-center border border-gray-200">19</td>
                        <td class="py-2 px-2 text-center border border-gray-200">20</td>
                        <td class="py-2 px-2 text-center border border-gray-200">21</td>
                        <td class="py-2 px-2 text-center border border-gray-200">22</td>
                        <td class="py-2 px-2 text-center border border-gray-200">23</td>
                        <td class="py-2 px-2 text-center border border-gray-200">24</td>
                        <td class="py-2 px-2 text-center border border-gray-200">25</td>
                        <td class="py-2 px-2 text-center border border-gray-200">26</td>
                        <td class="py-2 px-2 text-center border border-gray-200">27</td>
                        <td class="py-2 px-2 text-center border border-gray-200">28</td>
                        <td class="py-2 px-2 text-center border border-gray-200">29</td>
                        <td class="py-2 px-2 text-center border border-gray-200">30</td>
                        <td class="py-2 px-2 text-center border border-gray-200">31</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-2 border border-gray-200 sticky left-0 bg-white" >Crizeal Precious Claire Alingasa Hilado</td>
                        <td class="py-2 px-2 border border-gray-200" >System Implementer</td>
                        <td class="py-2 px-2 text-center border border-gray-200">1</td>
                        <td class="py-2 px-2 text-center border border-gray-200">2</td>
                        <td class="py-2 px-2 text-center border border-gray-200">3</td>
                        <td class="py-2 px-2 text-center border border-gray-200">4</td>
                        <td class="py-2 px-2 text-center border border-gray-200">5</td>
                        <td class="py-2 px-2 text-center border border-gray-200 bg-blue-300"></td>
                        <td class="py-2 px-2 text-center border border-gray-200 bg-yellow-300"></td>
                        <td class="py-2 px-2 text-center border border-gray-200">8</td>
                        <td class="py-2 px-2 text-center border border-gray-200">9</td>
                        <td class="py-2 px-2 text-center border border-gray-200">10</td>
                        <td class="py-2 px-2 text-center border border-gray-200">11</td>
                        <td class="py-2 px-2 text-center border border-gray-200">12</td>
                        <td class="py-2 px-2 text-center border border-gray-200">13</td>
                        <td class="py-2 px-2 text-center border border-gray-200">14</td>
                        <td class="py-2 px-2 text-center border border-gray-200">15</td>
                        <td class="py-2 px-2 text-center border border-gray-200">16</td>
                        <td class="py-2 px-2 text-center border border-gray-200">17</td>
                        <td class="py-2 px-2 text-center border border-gray-200">18</td>
                        <td class="py-2 px-2 text-center border border-gray-200">19</td>
                        <td class="py-2 px-2 text-center border border-gray-200">20</td>
                        <td class="py-2 px-2 text-center border border-gray-200">21</td>
                        <td class="py-2 px-2 text-center border border-gray-200">22</td>
                        <td class="py-2 px-2 text-center border border-gray-200">23</td>
                        <td class="py-2 px-2 text-center border border-gray-200">24</td>
                        <td class="py-2 px-2 text-center border border-gray-200">25</td>
                        <td class="py-2 px-2 text-center border border-gray-200">26</td>
                        <td class="py-2 px-2 text-center border border-gray-200">27</td>
                        <td class="py-2 px-2 text-center border border-gray-200">28</td>
                        <td class="py-2 px-2 text-center border border-gray-200">29</td>
                        <td class="py-2 px-2 text-center border border-gray-200">30</td>
                        <td class="py-2 px-2 text-center border border-gray-200">31</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-2 border border-gray-200 sticky left-0 bg-white" >Crizeal Precious Claire Alingasa Hilado</td>
                        <td class="py-2 px-2 border border-gray-200" >System Implementer</td>
                        <td class="py-2 px-2 text-center border border-gray-200">1</td>
                        <td class="py-2 px-2 text-center border border-gray-200">2</td>
                        <td class="py-2 px-2 text-center border border-gray-200">3</td>
                        <td class="py-2 px-2 text-center border border-gray-200">4</td>
                        <td class="py-2 px-2 text-center border border-gray-200">5</td>
                        <td class="py-2 px-2 text-center border border-gray-200 bg-blue-300"></td>
                        <td class="py-2 px-2 text-center border border-gray-200 bg-yellow-300"></td>
                        <td class="py-2 px-2 text-center border border-gray-200">8</td>
                        <td class="py-2 px-2 text-center border border-gray-200">9</td>
                        <td class="py-2 px-2 text-center border border-gray-200">10</td>
                        <td class="py-2 px-2 text-center border border-gray-200">11</td>
                        <td class="py-2 px-2 text-center border border-gray-200">12</td>
                        <td class="py-2 px-2 text-center border border-gray-200">13</td>
                        <td class="py-2 px-2 text-center border border-gray-200">14</td>
                        <td class="py-2 px-2 text-center border border-gray-200">15</td>
                        <td class="py-2 px-2 text-center border border-gray-200">16</td>
                        <td class="py-2 px-2 text-center border border-gray-200">17</td>
                        <td class="py-2 px-2 text-center border border-gray-200">18</td>
                        <td class="py-2 px-2 text-center border border-gray-200">19</td>
                        <td class="py-2 px-2 text-center border border-gray-200">20</td>
                        <td class="py-2 px-2 text-center border border-gray-200">21</td>
                        <td class="py-2 px-2 text-center border border-gray-200">22</td>
                        <td class="py-2 px-2 text-center border border-gray-200">23</td>
                        <td class="py-2 px-2 text-center border border-gray-200">24</td>
                        <td class="py-2 px-2 text-center border border-gray-200">25</td>
                        <td class="py-2 px-2 text-center border border-gray-200">26</td>
                        <td class="py-2 px-2 text-center border border-gray-200">27</td>
                        <td class="py-2 px-2 text-center border border-gray-200">28</td>
                        <td class="py-2 px-2 text-center border border-gray-200">29</td>
                        <td class="py-2 px-2 text-center border border-gray-200">30</td>
                        <td class="py-2 px-2 text-center border border-gray-200">31</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-2 border border-gray-200 sticky left-0 bg-white" >Crizeal Precious Claire Alingasa Hilado</td>
                        <td class="py-2 px-2 border border-gray-200" >System Implementer</td>
                        <td class="py-2 px-2 text-center border border-gray-200">1</td>
                        <td class="py-2 px-2 text-center border border-gray-200">2</td>
                        <td class="py-2 px-2 text-center border border-gray-200">3</td>
                        <td class="py-2 px-2 text-center border border-gray-200">4</td>
                        <td class="py-2 px-2 text-center border border-gray-200">5</td>
                        <td class="py-2 px-2 text-center border border-gray-200 bg-blue-300"></td>
                        <td class="py-2 px-2 text-center border border-gray-200 bg-yellow-300"></td>
                        <td class="py-2 px-2 text-center border border-gray-200">8</td>
                        <td class="py-2 px-2 text-center border border-gray-200">9</td>
                        <td class="py-2 px-2 text-center border border-gray-200">10</td>
                        <td class="py-2 px-2 text-center border border-gray-200">11</td>
                        <td class="py-2 px-2 text-center border border-gray-200">12</td>
                        <td class="py-2 px-2 text-center border border-gray-200">13</td>
                        <td class="py-2 px-2 text-center border border-gray-200">14</td>
                        <td class="py-2 px-2 text-center border border-gray-200">15</td>
                        <td class="py-2 px-2 text-center border border-gray-200">16</td>
                        <td class="py-2 px-2 text-center border border-gray-200">17</td>
                        <td class="py-2 px-2 text-center border border-gray-200">18</td>
                        <td class="py-2 px-2 text-center border border-gray-200">19</td>
                        <td class="py-2 px-2 text-center border border-gray-200">20</td>
                        <td class="py-2 px-2 text-center border border-gray-200">21</td>
                        <td class="py-2 px-2 text-center border border-gray-200">22</td>
                        <td class="py-2 px-2 text-center border border-gray-200">23</td>
                        <td class="py-2 px-2 text-center border border-gray-200">24</td>
                        <td class="py-2 px-2 text-center border border-gray-200">25</td>
                        <td class="py-2 px-2 text-center border border-gray-200">26</td>
                        <td class="py-2 px-2 text-center border border-gray-200">27</td>
                        <td class="py-2 px-2 text-center border border-gray-200">28</td>
                        <td class="py-2 px-2 text-center border border-gray-200">29</td>
                        <td class="py-2 px-2 text-center border border-gray-200">30</td>
                        <td class="py-2 px-2 text-center border border-gray-200">31</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-2 border border-gray-200 sticky left-0 bg-white" >Crizeal Precious Claire Alingasa Hilado</td>
                        <td class="py-2 px-2 border border-gray-200" >System Implementer</td>
                        <td class="py-2 px-2 text-center border border-gray-200">1</td>
                        <td class="py-2 px-2 text-center border border-gray-200">2</td>
                        <td class="py-2 px-2 text-center border border-gray-200">3</td>
                        <td class="py-2 px-2 text-center border border-gray-200">4</td>
                        <td class="py-2 px-2 text-center border border-gray-200">5</td>
                        <td class="py-2 px-2 text-center border border-gray-200 bg-blue-300"></td>
                        <td class="py-2 px-2 text-center border border-gray-200 bg-yellow-300"></td>
                        <td class="py-2 px-2 text-center border border-gray-200">8</td>
                        <td class="py-2 px-2 text-center border border-gray-200">9</td>
                        <td class="py-2 px-2 text-center border border-gray-200">10</td>
                        <td class="py-2 px-2 text-center border border-gray-200">11</td>
                        <td class="py-2 px-2 text-center border border-gray-200">12</td>
                        <td class="py-2 px-2 text-center border border-gray-200">13</td>
                        <td class="py-2 px-2 text-center border border-gray-200">14</td>
                        <td class="py-2 px-2 text-center border border-gray-200">15</td>
                        <td class="py-2 px-2 text-center border border-gray-200">16</td>
                        <td class="py-2 px-2 text-center border border-gray-200">17</td>
                        <td class="py-2 px-2 text-center border border-gray-200">18</td>
                        <td class="py-2 px-2 text-center border border-gray-200">19</td>
                        <td class="py-2 px-2 text-center border border-gray-200">20</td>
                        <td class="py-2 px-2 text-center border border-gray-200">21</td>
                        <td class="py-2 px-2 text-center border border-gray-200">22</td>
                        <td class="py-2 px-2 text-center border border-gray-200">23</td>
                        <td class="py-2 px-2 text-center border border-gray-200">24</td>
                        <td class="py-2 px-2 text-center border border-gray-200">25</td>
                        <td class="py-2 px-2 text-center border border-gray-200">26</td>
                        <td class="py-2 px-2 text-center border border-gray-200">27</td>
                        <td class="py-2 px-2 text-center border border-gray-200">28</td>
                        <td class="py-2 px-2 text-center border border-gray-200">29</td>
                        <td class="py-2 px-2 text-center border border-gray-200">30</td>
                        <td class="py-2 px-2 text-center border border-gray-200">31</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-2 border border-gray-200 sticky left-0 bg-white" >Crizeal Precious Claire Alingasa Hilado</td>
                        <td class="py-2 px-2 border border-gray-200" >System Implementer</td>
                        <td class="py-2 px-2 text-center border border-gray-200">1</td>
                        <td class="py-2 px-2 text-center border border-gray-200">2</td>
                        <td class="py-2 px-2 text-center border border-gray-200">3</td>
                        <td class="py-2 px-2 text-center border border-gray-200">4</td>
                        <td class="py-2 px-2 text-center border border-gray-200">5</td>
                        <td class="py-2 px-2 text-center border border-gray-200 bg-blue-300"></td>
                        <td class="py-2 px-2 text-center border border-gray-200 bg-yellow-300"></td>
                        <td class="py-2 px-2 text-center border border-gray-200">8</td>
                        <td class="py-2 px-2 text-center border border-gray-200">9</td>
                        <td class="py-2 px-2 text-center border border-gray-200">10</td>
                        <td class="py-2 px-2 text-center border border-gray-200">11</td>
                        <td class="py-2 px-2 text-center border border-gray-200">12</td>
                        <td class="py-2 px-2 text-center border border-gray-200">13</td>
                        <td class="py-2 px-2 text-center border border-gray-200">14</td>
                        <td class="py-2 px-2 text-center border border-gray-200">15</td>
                        <td class="py-2 px-2 text-center border border-gray-200">16</td>
                        <td class="py-2 px-2 text-center border border-gray-200">17</td>
                        <td class="py-2 px-2 text-center border border-gray-200">18</td>
                        <td class="py-2 px-2 text-center border border-gray-200">19</td>
                        <td class="py-2 px-2 text-center border border-gray-200">20</td>
                        <td class="py-2 px-2 text-center border border-gray-200">21</td>
                        <td class="py-2 px-2 text-center border border-gray-200">22</td>
                        <td class="py-2 px-2 text-center border border-gray-200">23</td>
                        <td class="py-2 px-2 text-center border border-gray-200">24</td>
                        <td class="py-2 px-2 text-center border border-gray-200">25</td>
                        <td class="py-2 px-2 text-center border border-gray-200">26</td>
                        <td class="py-2 px-2 text-center border border-gray-200">27</td>
                        <td class="py-2 px-2 text-center border border-gray-200">28</td>
                        <td class="py-2 px-2 text-center border border-gray-200">29</td>
                        <td class="py-2 px-2 text-center border border-gray-200">30</td>
                        <td class="py-2 px-2 text-center border border-gray-200">31</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-2 border border-gray-200 sticky left-0 bg-white" >Crizeal Precious Claire Alingasa Hilado</td>
                        <td class="py-2 px-2 border border-gray-200" >System Implementer</td>
                        <td class="py-2 px-2 text-center border border-gray-200">1</td>
                        <td class="py-2 px-2 text-center border border-gray-200">2</td>
                        <td class="py-2 px-2 text-center border border-gray-200">3</td>
                        <td class="py-2 px-2 text-center border border-gray-200">4</td>
                        <td class="py-2 px-2 text-center border border-gray-200">5</td>
                        <td class="py-2 px-2 text-center border border-gray-200 bg-blue-300"></td>
                        <td class="py-2 px-2 text-center border border-gray-200 bg-yellow-300"></td>
                        <td class="py-2 px-2 text-center border border-gray-200">8</td>
                        <td class="py-2 px-2 text-center border border-gray-200">9</td>
                        <td class="py-2 px-2 text-center border border-gray-200">10</td>
                        <td class="py-2 px-2 text-center border border-gray-200">11</td>
                        <td class="py-2 px-2 text-center border border-gray-200">12</td>
                        <td class="py-2 px-2 text-center border border-gray-200">13</td>
                        <td class="py-2 px-2 text-center border border-gray-200">14</td>
                        <td class="py-2 px-2 text-center border border-gray-200">15</td>
                        <td class="py-2 px-2 text-center border border-gray-200">16</td>
                        <td class="py-2 px-2 text-center border border-gray-200">17</td>
                        <td class="py-2 px-2 text-center border border-gray-200">18</td>
                        <td class="py-2 px-2 text-center border border-gray-200">19</td>
                        <td class="py-2 px-2 text-center border border-gray-200">20</td>
                        <td class="py-2 px-2 text-center border border-gray-200">21</td>
                        <td class="py-2 px-2 text-center border border-gray-200">22</td>
                        <td class="py-2 px-2 text-center border border-gray-200">23</td>
                        <td class="py-2 px-2 text-center border border-gray-200">24</td>
                        <td class="py-2 px-2 text-center border border-gray-200">25</td>
                        <td class="py-2 px-2 text-center border border-gray-200">26</td>
                        <td class="py-2 px-2 text-center border border-gray-200">27</td>
                        <td class="py-2 px-2 text-center border border-gray-200">28</td>
                        <td class="py-2 px-2 text-center border border-gray-200">29</td>
                        <td class="py-2 px-2 text-center border border-gray-200">30</td>
                        <td class="py-2 px-2 text-center border border-gray-200">31</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-2 border border-gray-200 sticky left-0 bg-white" >Crizeal Precious Claire Alingasa Hilado</td>
                        <td class="py-2 px-2 border border-gray-200" >System Implementer</td>
                        <td class="py-2 px-2 text-center border border-gray-200">1</td>
                        <td class="py-2 px-2 text-center border border-gray-200">2</td>
                        <td class="py-2 px-2 text-center border border-gray-200">3</td>
                        <td class="py-2 px-2 text-center border border-gray-200">4</td>
                        <td class="py-2 px-2 text-center border border-gray-200">5</td>
                        <td class="py-2 px-2 text-center border border-gray-200 bg-blue-300"></td>
                        <td class="py-2 px-2 text-center border border-gray-200 bg-yellow-300"></td>
                        <td class="py-2 px-2 text-center border border-gray-200">8</td>
                        <td class="py-2 px-2 text-center border border-gray-200">9</td>
                        <td class="py-2 px-2 text-center border border-gray-200">10</td>
                        <td class="py-2 px-2 text-center border border-gray-200">11</td>
                        <td class="py-2 px-2 text-center border border-gray-200">12</td>
                        <td class="py-2 px-2 text-center border border-gray-200">13</td>
                        <td class="py-2 px-2 text-center border border-gray-200">14</td>
                        <td class="py-2 px-2 text-center border border-gray-200">15</td>
                        <td class="py-2 px-2 text-center border border-gray-200">16</td>
                        <td class="py-2 px-2 text-center border border-gray-200">17</td>
                        <td class="py-2 px-2 text-center border border-gray-200">18</td>
                        <td class="py-2 px-2 text-center border border-gray-200">19</td>
                        <td class="py-2 px-2 text-center border border-gray-200">20</td>
                        <td class="py-2 px-2 text-center border border-gray-200">21</td>
                        <td class="py-2 px-2 text-center border border-gray-200">22</td>
                        <td class="py-2 px-2 text-center border border-gray-200">23</td>
                        <td class="py-2 px-2 text-center border border-gray-200">24</td>
                        <td class="py-2 px-2 text-center border border-gray-200">25</td>
                        <td class="py-2 px-2 text-center border border-gray-200">26</td>
                        <td class="py-2 px-2 text-center border border-gray-200">27</td>
                        <td class="py-2 px-2 text-center border border-gray-200">28</td>
                        <td class="py-2 px-2 text-center border border-gray-200">29</td>
                        <td class="py-2 px-2 text-center border border-gray-200">30</td>
                        <td class="py-2 px-2 text-center border border-gray-200">31</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-2 border border-gray-200 sticky left-0 bg-white" >Crizeal Precious Claire Alingasa Hilado</td>
                        <td class="py-2 px-2 border border-gray-200" >System Implementer</td>
                        <td class="py-2 px-2 text-center border border-gray-200">1</td>
                        <td class="py-2 px-2 text-center border border-gray-200">2</td>
                        <td class="py-2 px-2 text-center border border-gray-200">3</td>
                        <td class="py-2 px-2 text-center border border-gray-200">4</td>
                        <td class="py-2 px-2 text-center border border-gray-200">5</td>
                        <td class="py-2 px-2 text-center border border-gray-200 bg-blue-300"></td>
                        <td class="py-2 px-2 text-center border border-gray-200 bg-yellow-300"></td>
                        <td class="py-2 px-2 text-center border border-gray-200">8</td>
                        <td class="py-2 px-2 text-center border border-gray-200">9</td>
                        <td class="py-2 px-2 text-center border border-gray-200">10</td>
                        <td class="py-2 px-2 text-center border border-gray-200">11</td>
                        <td class="py-2 px-2 text-center border border-gray-200">12</td>
                        <td class="py-2 px-2 text-center border border-gray-200">13</td>
                        <td class="py-2 px-2 text-center border border-gray-200">14</td>
                        <td class="py-2 px-2 text-center border border-gray-200">15</td>
                        <td class="py-2 px-2 text-center border border-gray-200">16</td>
                        <td class="py-2 px-2 text-center border border-gray-200">17</td>
                        <td class="py-2 px-2 text-center border border-gray-200">18</td>
                        <td class="py-2 px-2 text-center border border-gray-200">19</td>
                        <td class="py-2 px-2 text-center border border-gray-200">20</td>
                        <td class="py-2 px-2 text-center border border-gray-200">21</td>
                        <td class="py-2 px-2 text-center border border-gray-200">22</td>
                        <td class="py-2 px-2 text-center border border-gray-200">23</td>
                        <td class="py-2 px-2 text-center border border-gray-200">24</td>
                        <td class="py-2 px-2 text-center border border-gray-200">25</td>
                        <td class="py-2 px-2 text-center border border-gray-200">26</td>
                        <td class="py-2 px-2 text-center border border-gray-200">27</td>
                        <td class="py-2 px-2 text-center border border-gray-200">28</td>
                        <td class="py-2 px-2 text-center border border-gray-200">29</td>
                        <td class="py-2 px-2 text-center border border-gray-200">30</td>
                        <td class="py-2 px-2 text-center border border-gray-200">31</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-2 border border-gray-200 sticky left-0 bg-white" >Crizeal Precious Claire Alingasa Hilado</td>
                        <td class="py-2 px-2 border border-gray-200" >System Implementer</td>
                        <td class="py-2 px-2 text-center border border-gray-200">1</td>
                        <td class="py-2 px-2 text-center border border-gray-200">2</td>
                        <td class="py-2 px-2 text-center border border-gray-200">3</td>
                        <td class="py-2 px-2 text-center border border-gray-200">4</td>
                        <td class="py-2 px-2 text-center border border-gray-200">5</td>
                        <td class="py-2 px-2 text-center border border-gray-200 bg-blue-300"></td>
                        <td class="py-2 px-2 text-center border border-gray-200 bg-yellow-300"></td>
                        <td class="py-2 px-2 text-center border border-gray-200">8</td>
                        <td class="py-2 px-2 text-center border border-gray-200">9</td>
                        <td class="py-2 px-2 text-center border border-gray-200">10</td>
                        <td class="py-2 px-2 text-center border border-gray-200">11</td>
                        <td class="py-2 px-2 text-center border border-gray-200">12</td>
                        <td class="py-2 px-2 text-center border border-gray-200">13</td>
                        <td class="py-2 px-2 text-center border border-gray-200">14</td>
                        <td class="py-2 px-2 text-center border border-gray-200">15</td>
                        <td class="py-2 px-2 text-center border border-gray-200">16</td>
                        <td class="py-2 px-2 text-center border border-gray-200">17</td>
                        <td class="py-2 px-2 text-center border border-gray-200">18</td>
                        <td class="py-2 px-2 text-center border border-gray-200">19</td>
                        <td class="py-2 px-2 text-center border border-gray-200">20</td>
                        <td class="py-2 px-2 text-center border border-gray-200">21</td>
                        <td class="py-2 px-2 text-center border border-gray-200">22</td>
                        <td class="py-2 px-2 text-center border border-gray-200">23</td>
                        <td class="py-2 px-2 text-center border border-gray-200">24</td>
                        <td class="py-2 px-2 text-center border border-gray-200">25</td>
                        <td class="py-2 px-2 text-center border border-gray-200">26</td>
                        <td class="py-2 px-2 text-center border border-gray-200">27</td>
                        <td class="py-2 px-2 text-center border border-gray-200">28</td>
                        <td class="py-2 px-2 text-center border border-gray-200">29</td>
                        <td class="py-2 px-2 text-center border border-gray-200">30</td>
                        <td class="py-2 px-2 text-center border border-gray-200">31</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-2 border border-gray-200 sticky left-0 bg-white" >Crizeal Precious Claire Alingasa Hilado</td>
                        <td class="py-2 px-2 border border-gray-200" >System Implementer</td>
                        <td class="py-2 px-2 text-center border border-gray-200">1</td>
                        <td class="py-2 px-2 text-center border border-gray-200">2</td>
                        <td class="py-2 px-2 text-center border border-gray-200">3</td>
                        <td class="py-2 px-2 text-center border border-gray-200">4</td>
                        <td class="py-2 px-2 text-center border border-gray-200">5</td>
                        <td class="py-2 px-2 text-center border border-gray-200 bg-blue-300"></td>
                        <td class="py-2 px-2 text-center border border-gray-200 bg-yellow-300"></td>
                        <td class="py-2 px-2 text-center border border-gray-200">8</td>
                        <td class="py-2 px-2 text-center border border-gray-200">9</td>
                        <td class="py-2 px-2 text-center border border-gray-200">10</td>
                        <td class="py-2 px-2 text-center border border-gray-200">11</td>
                        <td class="py-2 px-2 text-center border border-gray-200">12</td>
                        <td class="py-2 px-2 text-center border border-gray-200">13</td>
                        <td class="py-2 px-2 text-center border border-gray-200">14</td>
                        <td class="py-2 px-2 text-center border border-gray-200">15</td>
                        <td class="py-2 px-2 text-center border border-gray-200">16</td>
                        <td class="py-2 px-2 text-center border border-gray-200">17</td>
                        <td class="py-2 px-2 text-center border border-gray-200">18</td>
                        <td class="py-2 px-2 text-center border border-gray-200">19</td>
                        <td class="py-2 px-2 text-center border border-gray-200">20</td>
                        <td class="py-2 px-2 text-center border border-gray-200">21</td>
                        <td class="py-2 px-2 text-center border border-gray-200">22</td>
                        <td class="py-2 px-2 text-center border border-gray-200">23</td>
                        <td class="py-2 px-2 text-center border border-gray-200">24</td>
                        <td class="py-2 px-2 text-center border border-gray-200">25</td>
                        <td class="py-2 px-2 text-center border border-gray-200">26</td>
                        <td class="py-2 px-2 text-center border border-gray-200">27</td>
                        <td class="py-2 px-2 text-center border border-gray-200">28</td>
                        <td class="py-2 px-2 text-center border border-gray-200">29</td>
                        <td class="py-2 px-2 text-center border border-gray-200">30</td>
                        <td class="py-2 px-2 text-center border border-gray-200">31</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-2 border border-gray-200 sticky left-0 bg-white" >Crizeal Precious Claire Alingasa Hilado</td>
                        <td class="py-2 px-2 border border-gray-200" >System Implementer</td>
                        <td class="py-2 px-2 text-center border border-gray-200">1</td>
                        <td class="py-2 px-2 text-center border border-gray-200">2</td>
                        <td class="py-2 px-2 text-center border border-gray-200">3</td>
                        <td class="py-2 px-2 text-center border border-gray-200">4</td>
                        <td class="py-2 px-2 text-center border border-gray-200">5</td>
                        <td class="py-2 px-2 text-center border border-gray-200 bg-blue-300"></td>
                        <td class="py-2 px-2 text-center border border-gray-200 bg-yellow-300"></td>
                        <td class="py-2 px-2 text-center border border-gray-200">8</td>
                        <td class="py-2 px-2 text-center border border-gray-200">9</td>
                        <td class="py-2 px-2 text-center border border-gray-200">10</td>
                        <td class="py-2 px-2 text-center border border-gray-200">11</td>
                        <td class="py-2 px-2 text-center border border-gray-200">12</td>
                        <td class="py-2 px-2 text-center border border-gray-200">13</td>
                        <td class="py-2 px-2 text-center border border-gray-200">14</td>
                        <td class="py-2 px-2 text-center border border-gray-200">15</td>
                        <td class="py-2 px-2 text-center border border-gray-200">16</td>
                        <td class="py-2 px-2 text-center border border-gray-200">17</td>
                        <td class="py-2 px-2 text-center border border-gray-200">18</td>
                        <td class="py-2 px-2 text-center border border-gray-200">19</td>
                        <td class="py-2 px-2 text-center border border-gray-200">20</td>
                        <td class="py-2 px-2 text-center border border-gray-200">21</td>
                        <td class="py-2 px-2 text-center border border-gray-200">22</td>
                        <td class="py-2 px-2 text-center border border-gray-200">23</td>
                        <td class="py-2 px-2 text-center border border-gray-200">24</td>
                        <td class="py-2 px-2 text-center border border-gray-200">25</td>
                        <td class="py-2 px-2 text-center border border-gray-200">26</td>
                        <td class="py-2 px-2 text-center border border-gray-200">27</td>
                        <td class="py-2 px-2 text-center border border-gray-200">28</td>
                        <td class="py-2 px-2 text-center border border-gray-200">29</td>
                        <td class="py-2 px-2 text-center border border-gray-200">30</td>
                        <td class="py-2 px-2 text-center border border-gray-200">31</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-2 border border-gray-200 sticky left-0 bg-white" >Crizeal Precious Claire Alingasa Hilado</td>
                        <td class="py-2 px-2 border border-gray-200" >System Implementer</td>
                        <td class="py-2 px-2 text-center border border-gray-200">1</td>
                        <td class="py-2 px-2 text-center border border-gray-200">2</td>
                        <td class="py-2 px-2 text-center border border-gray-200">3</td>
                        <td class="py-2 px-2 text-center border border-gray-200">4</td>
                        <td class="py-2 px-2 text-center border border-gray-200">5</td>
                        <td class="py-2 px-2 text-center border border-gray-200 bg-blue-300"></td>
                        <td class="py-2 px-2 text-center border border-gray-200 bg-yellow-300"></td>
                        <td class="py-2 px-2 text-center border border-gray-200">8</td>
                        <td class="py-2 px-2 text-center border border-gray-200">9</td>
                        <td class="py-2 px-2 text-center border border-gray-200">10</td>
                        <td class="py-2 px-2 text-center border border-gray-200">11</td>
                        <td class="py-2 px-2 text-center border border-gray-200">12</td>
                        <td class="py-2 px-2 text-center border border-gray-200">13</td>
                        <td class="py-2 px-2 text-center border border-gray-200">14</td>
                        <td class="py-2 px-2 text-center border border-gray-200">15</td>
                        <td class="py-2 px-2 text-center border border-gray-200">16</td>
                        <td class="py-2 px-2 text-center border border-gray-200">17</td>
                        <td class="py-2 px-2 text-center border border-gray-200">18</td>
                        <td class="py-2 px-2 text-center border border-gray-200">19</td>
                        <td class="py-2 px-2 text-center border border-gray-200">20</td>
                        <td class="py-2 px-2 text-center border border-gray-200">21</td>
                        <td class="py-2 px-2 text-center border border-gray-200">22</td>
                        <td class="py-2 px-2 text-center border border-gray-200">23</td>
                        <td class="py-2 px-2 text-center border border-gray-200">24</td>
                        <td class="py-2 px-2 text-center border border-gray-200">25</td>
                        <td class="py-2 px-2 text-center border border-gray-200">26</td>
                        <td class="py-2 px-2 text-center border border-gray-200">27</td>
                        <td class="py-2 px-2 text-center border border-gray-200">28</td>
                        <td class="py-2 px-2 text-center border border-gray-200">29</td>
                        <td class="py-2 px-2 text-center border border-gray-200">30</td>
                        <td class="py-2 px-2 text-center border border-gray-200">31</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-2 border border-gray-200 sticky left-0 bg-white" >Crizeal Precious Claire Alingasa Hilado</td>
                        <td class="py-2 px-2 border border-gray-200" >System Implementer</td>
                        <td class="py-2 px-2 text-center border border-gray-200">1</td>
                        <td class="py-2 px-2 text-center border border-gray-200">2</td>
                        <td class="py-2 px-2 text-center border border-gray-200">3</td>
                        <td class="py-2 px-2 text-center border border-gray-200">4</td>
                        <td class="py-2 px-2 text-center border border-gray-200">5</td>
                        <td class="py-2 px-2 text-center border border-gray-200 bg-blue-300"></td>
                        <td class="py-2 px-2 text-center border border-gray-200 bg-yellow-300"></td>
                        <td class="py-2 px-2 text-center border border-gray-200">8</td>
                        <td class="py-2 px-2 text-center border border-gray-200">9</td>
                        <td class="py-2 px-2 text-center border border-gray-200">10</td>
                        <td class="py-2 px-2 text-center border border-gray-200">11</td>
                        <td class="py-2 px-2 text-center border border-gray-200">12</td>
                        <td class="py-2 px-2 text-center border border-gray-200">13</td>
                        <td class="py-2 px-2 text-center border border-gray-200">14</td>
                        <td class="py-2 px-2 text-center border border-gray-200">15</td>
                        <td class="py-2 px-2 text-center border border-gray-200">16</td>
                        <td class="py-2 px-2 text-center border border-gray-200">17</td>
                        <td class="py-2 px-2 text-center border border-gray-200">18</td>
                        <td class="py-2 px-2 text-center border border-gray-200">19</td>
                        <td class="py-2 px-2 text-center border border-gray-200">20</td>
                        <td class="py-2 px-2 text-center border border-gray-200">21</td>
                        <td class="py-2 px-2 text-center border border-gray-200">22</td>
                        <td class="py-2 px-2 text-center border border-gray-200">23</td>
                        <td class="py-2 px-2 text-center border border-gray-200">24</td>
                        <td class="py-2 px-2 text-center border border-gray-200">25</td>
                        <td class="py-2 px-2 text-center border border-gray-200">26</td>
                        <td class="py-2 px-2 text-center border border-gray-200">27</td>
                        <td class="py-2 px-2 text-center border border-gray-200">28</td>
                        <td class="py-2 px-2 text-center border border-gray-200">29</td>
                        <td class="py-2 px-2 text-center border border-gray-200">30</td>
                        <td class="py-2 px-2 text-center border border-gray-200">31</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-2 border border-gray-200 sticky left-0 bg-white" >Crizeal Precious Claire Alingasa Hilado</td>
                        <td class="py-2 px-2 border border-gray-200" >System Implementer</td>
                        <td class="py-2 px-2 text-center border border-gray-200">1</td>
                        <td class="py-2 px-2 text-center border border-gray-200">2</td>
                        <td class="py-2 px-2 text-center border border-gray-200">3</td>
                        <td class="py-2 px-2 text-center border border-gray-200">4</td>
                        <td class="py-2 px-2 text-center border border-gray-200">5</td>
                        <td class="py-2 px-2 text-center border border-gray-200 bg-blue-300"></td>
                        <td class="py-2 px-2 text-center border border-gray-200 bg-yellow-300"></td>
                        <td class="py-2 px-2 text-center border border-gray-200">8</td>
                        <td class="py-2 px-2 text-center border border-gray-200">9</td>
                        <td class="py-2 px-2 text-center border border-gray-200">10</td>
                        <td class="py-2 px-2 text-center border border-gray-200">11</td>
                        <td class="py-2 px-2 text-center border border-gray-200">12</td>
                        <td class="py-2 px-2 text-center border border-gray-200">13</td>
                        <td class="py-2 px-2 text-center border border-gray-200">14</td>
                        <td class="py-2 px-2 text-center border border-gray-200">15</td>
                        <td class="py-2 px-2 text-center border border-gray-200">16</td>
                        <td class="py-2 px-2 text-center border border-gray-200">17</td>
                        <td class="py-2 px-2 text-center border border-gray-200">18</td>
                        <td class="py-2 px-2 text-center border border-gray-200">19</td>
                        <td class="py-2 px-2 text-center border border-gray-200">20</td>
                        <td class="py-2 px-2 text-center border border-gray-200">21</td>
                        <td class="py-2 px-2 text-center border border-gray-200">22</td>
                        <td class="py-2 px-2 text-center border border-gray-200">23</td>
                        <td class="py-2 px-2 text-center border border-gray-200">24</td>
                        <td class="py-2 px-2 text-center border border-gray-200">25</td>
                        <td class="py-2 px-2 text-center border border-gray-200">26</td>
                        <td class="py-2 px-2 text-center border border-gray-200">27</td>
                        <td class="py-2 px-2 text-center border border-gray-200">28</td>
                        <td class="py-2 px-2 text-center border border-gray-200">29</td>
                        <td class="py-2 px-2 text-center border border-gray-200">30</td>
                        <td class="py-2 px-2 text-center border border-gray-200">31</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-2 border border-gray-200 sticky left-0 bg-white" >Crizeal Precious Claire Alingasa Hilado</td>
                        <td class="py-2 px-2 border border-gray-200" >System Implementer</td>
                        <td class="py-2 px-2 text-center border border-gray-200">1</td>
                        <td class="py-2 px-2 text-center border border-gray-200">2</td>
                        <td class="py-2 px-2 text-center border border-gray-200">3</td>
                        <td class="py-2 px-2 text-center border border-gray-200">4</td>
                        <td class="py-2 px-2 text-center border border-gray-200">5</td>
                        <td class="py-2 px-2 text-center border border-gray-200 bg-blue-300"></td>
                        <td class="py-2 px-2 text-center border border-gray-200 bg-yellow-300"></td>
                        <td class="py-2 px-2 text-center border border-gray-200">8</td>
                        <td class="py-2 px-2 text-center border border-gray-200">9</td>
                        <td class="py-2 px-2 text-center border border-gray-200">10</td>
                        <td class="py-2 px-2 text-center border border-gray-200">11</td>
                        <td class="py-2 px-2 text-center border border-gray-200">12</td>
                        <td class="py-2 px-2 text-center border border-gray-200">13</td>
                        <td class="py-2 px-2 text-center border border-gray-200">14</td>
                        <td class="py-2 px-2 text-center border border-gray-200">15</td>
                        <td class="py-2 px-2 text-center border border-gray-200">16</td>
                        <td class="py-2 px-2 text-center border border-gray-200">17</td>
                        <td class="py-2 px-2 text-center border border-gray-200">18</td>
                        <td class="py-2 px-2 text-center border border-gray-200">19</td>
                        <td class="py-2 px-2 text-center border border-gray-200">20</td>
                        <td class="py-2 px-2 text-center border border-gray-200">21</td>
                        <td class="py-2 px-2 text-center border border-gray-200">22</td>
                        <td class="py-2 px-2 text-center border border-gray-200">23</td>
                        <td class="py-2 px-2 text-center border border-gray-200">24</td>
                        <td class="py-2 px-2 text-center border border-gray-200">25</td>
                        <td class="py-2 px-2 text-center border border-gray-200">26</td>
                        <td class="py-2 px-2 text-center border border-gray-200">27</td>
                        <td class="py-2 px-2 text-center border border-gray-200">28</td>
                        <td class="py-2 px-2 text-center border border-gray-200">29</td>
                        <td class="py-2 px-2 text-center border border-gray-200">30</td>
                        <td class="py-2 px-2 text-center border border-gray-200">31</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-2 border border-gray-200 sticky left-0 bg-white" >Crizeal Precious Claire Alingasa Hilado</td>
                        <td class="py-2 px-2 border border-gray-200" >System Implementer</td>
                        <td class="py-2 px-2 text-center border border-gray-200">1</td>
                        <td class="py-2 px-2 text-center border border-gray-200">2</td>
                        <td class="py-2 px-2 text-center border border-gray-200">3</td>
                        <td class="py-2 px-2 text-center border border-gray-200">4</td>
                        <td class="py-2 px-2 text-center border border-gray-200">5</td>
                        <td class="py-2 px-2 text-center border border-gray-200 bg-blue-300"></td>
                        <td class="py-2 px-2 text-center border border-gray-200 bg-yellow-300"></td>
                        <td class="py-2 px-2 text-center border border-gray-200">8</td>
                        <td class="py-2 px-2 text-center border border-gray-200">9</td>
                        <td class="py-2 px-2 text-center border border-gray-200">10</td>
                        <td class="py-2 px-2 text-center border border-gray-200">11</td>
                        <td class="py-2 px-2 text-center border border-gray-200">12</td>
                        <td class="py-2 px-2 text-center border border-gray-200">13</td>
                        <td class="py-2 px-2 text-center border border-gray-200">14</td>
                        <td class="py-2 px-2 text-center border border-gray-200">15</td>
                        <td class="py-2 px-2 text-center border border-gray-200">16</td>
                        <td class="py-2 px-2 text-center border border-gray-200">17</td>
                        <td class="py-2 px-2 text-center border border-gray-200">18</td>
                        <td class="py-2 px-2 text-center border border-gray-200">19</td>
                        <td class="py-2 px-2 text-center border border-gray-200">20</td>
                        <td class="py-2 px-2 text-center border border-gray-200">21</td>
                        <td class="py-2 px-2 text-center border border-gray-200">22</td>
                        <td class="py-2 px-2 text-center border border-gray-200">23</td>
                        <td class="py-2 px-2 text-center border border-gray-200">24</td>
                        <td class="py-2 px-2 text-center border border-gray-200">25</td>
                        <td class="py-2 px-2 text-center border border-gray-200">26</td>
                        <td class="py-2 px-2 text-center border border-gray-200">27</td>
                        <td class="py-2 px-2 text-center border border-gray-200">28</td>
                        <td class="py-2 px-2 text-center border border-gray-200">29</td>
                        <td class="py-2 px-2 text-center border border-gray-200">30</td>
                        <td class="py-2 px-2 text-center border border-gray-200">31</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div> 
</x-app-layout>
