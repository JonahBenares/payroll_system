<x-app-layout>
    <x-slot name="header"></x-slot>
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
                        <h2 class="uppercase font-semibold py-2">OverTime List</h2>
                    </div>
                    <div class="flex">
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 white:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                            </div>
                            <input type="text" id="table-search-users" class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-2xl border border-gray-300 focus:ring-blue-500 focus:border-blue-500 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500" placeholder="Search">
                        </div>
                    </div>
                </div>
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
                            <option value="">2018</option>
                            <option value="">2019</option>
                            <option value="">2020</option>
                            <option value="">2021</option>
                            <option value="">2022</option>
                        </select>
                    </div>
                    <div class="mx-2 text-left">
                        <select class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 w-60">
                            <option value="" selected>Period</option>
                            <option value="">MID</option>
                            <option value="">EOM</option>
                        </select>
                    </div>
                    <div class="mx-2 pt-3 text-left">
                        <button class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                            <span>Generate</span>
                        </button>
                    </div>
                </div>
                <div class="overflow-x-auto overflow-y-hidden hover:overflow-y-auto h-100 relative max-h-100 pt-2 pr-2 pl-2 mt-3 md:pt-0 md:pr-0 md:pl-0 sm:rounded-2xl">
                    <table class="w-full text-sm text-left text-gray-500 white:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 white:bg-gray-700 white:text-gray-400 sticky top-0 z-10">
                            <tr class="">
                                <th scope="col" class="py-3 px-6" width="30%">
                                    Employee Name
                                </th>
                                <th scope="col" class="py-3 px-6" width="20%">
                                    OT Hours
                                </th>
                                <th scope="col" class="py-3 px-6" width="15%">
                                    Amount
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    Kylie Garapal
                                </td>
                                
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    <div x-data="{ modelOpen: false }">
                                        <a href="#" @click="modelOpen =!modelOpen" class="my-1  py-2" title="Update">
                                              55
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
                                                    class="inline-block w-full max-w-3xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl "
                                                >
                                                    <div class="flex items-center justify-between space-x-4 px-2">
                                                        <h1 class="text-xl font-medium text-gray-800 ">Kylie Garapal </h1>
                                
                                                        <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <form action="">
                                                        <div class="flex justify-between pt-4">
                                                            <div class="w-1/2 px-2">
                                                                <h6 class="font-semibold border-b ">No. of Days Worked</h6>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">REG DAY:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-56 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RD 2:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-56 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">SH:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-56 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">SH on RD:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-56 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">Reg Hol:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-56 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RH on RD 2:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-56 p-2">
                                                                </div>
                                                            </div>
                                                            <div class="w-1/2 px-2 border-l">
                                                                <h6 class="font-semibold border-b">Night Premium</h6>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">REG NP:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">REG NP OT:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RD2/SH NP:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RD2/SH NP OT:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RH NP:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RH NP OT:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RH on RD2 NP:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RH on RD2 NP OT:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </td>
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    150
                                </td>
                            </tr>
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    Terence Dipasucat
                                </td>
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    <div x-data="{ modelOpen: false }">
                                        <a href="#" @click="modelOpen =!modelOpen" class="my-1  py-2" title="Update">
                                              55
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
                                                    class="inline-block w-full max-w-3xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl "
                                                >
                                                    <div class="flex items-center justify-between space-x-4 px-2">
                                                        <h1 class="text-xl font-medium text-gray-800 ">Terence Dipasucat</h1>
                                
                                                        <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <form action="">
                                                        <div class="flex justify-between pt-4">
                                                            <div class="w-1/2 px-2">
                                                                <h6 class="font-semibold border-b ">No. of Days Worked</h6>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">REG DAY:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-56 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RD 2:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-56 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">SH:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-56 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">SH on RD:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-56 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">Reg Hol:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-56 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RH on RD 2:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-56 p-2">
                                                                </div>
                                                            </div>
                                                            <div class="w-1/2 px-2 border-l">
                                                                <h6 class="font-semibold border-b">Night Premium</h6>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">REG NP:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">REG NP OT:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RD2/SH NP:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RD2/SH NP OT:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RH NP:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RH NP OT:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RH on RD2 NP:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RH on RD2 NP OT:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </td>
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    250
                                </td>
                            </tr>
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    Martina Bagsik
                                </td>
                                
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    <div x-data="{ modelOpen: false }">
                                        <a href="#" @click="modelOpen =!modelOpen" class="my-1  py-2" title="Update">
                                              55
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
                                                    class="inline-block w-full max-w-3xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl "
                                                >
                                                    <div class="flex items-center justify-between space-x-4 px-2">
                                                        <h1 class="text-xl font-medium text-gray-800 ">Martina Bagsik</h1>
                                
                                                        <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <form action="">
                                                        <div class="flex justify-between pt-4">
                                                            <div class="w-1/2 px-2">
                                                                <h6 class="font-semibold border-b ">No. of Days Worked</h6>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">REG DAY:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-56 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RD 2:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-56 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">SH:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-56 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">SH on RD:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-56 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">Reg Hol:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-56 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RH on RD 2:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-56 p-2">
                                                                </div>
                                                            </div>
                                                            <div class="w-1/2 px-2 border-l">
                                                                <h6 class="font-semibold border-b">Night Premium</h6>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">REG NP:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">REG NP OT:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RD2/SH NP:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RD2/SH NP OT:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RH NP:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RH NP OT:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RH on RD2 NP:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RH on RD2 NP OT:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </td>
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    50
                                </td>
                            </tr>
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    Edgardo Hidalgo
                                </td>
                                
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    <div x-data="{ modelOpen: false }">
                                        <a href="#" @click="modelOpen =!modelOpen" class="my-1  py-2" title="Update">
                                              55
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
                                                    class="inline-block w-full max-w-3xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl "
                                                >
                                                    <div class="flex items-center justify-between space-x-4 px-2">
                                                        <h1 class="text-xl font-medium text-gray-800 ">Edgardo Hidalgo</h1>
                                
                                                        <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <form action="">
                                                        <div class="flex justify-between pt-4">
                                                            <div class="w-1/2 px-2">
                                                                <h6 class="font-semibold border-b ">No. of Days Worked</h6>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">REG DAY:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-56 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RD 2:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-56 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">SH:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-56 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">SH on RD:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-56 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">Reg Hol:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-56 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RH on RD 2:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-56 p-2">
                                                                </div>
                                                            </div>
                                                            <div class="w-1/2 px-2 border-l">
                                                                <h6 class="font-semibold border-b">Night Premium</h6>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">REG NP:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">REG NP OT:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RD2/SH NP:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RD2/SH NP OT:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RH NP:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RH NP OT:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RH on RD2 NP:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RH on RD2 NP OT:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </td>
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    100
                                </td>
                            </tr>
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    Lhea Flores
                                </td>
                                
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    <div x-data="{ modelOpen: false }">
                                        <a href="#" @click="modelOpen =!modelOpen" class="my-1  py-2" title="Update">
                                              55
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
                                                    class="inline-block w-full max-w-3xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl "
                                                >
                                                    <div class="flex items-center justify-between space-x-4 px-2">
                                                        <h1 class="text-xl font-medium text-gray-800 ">Lhea Flores</h1>
                                
                                                        <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <form action="">
                                                        <div class="flex justify-between pt-4">
                                                            <div class="w-1/2 px-2">
                                                                <h6 class="font-semibold border-b ">No. of Days Worked</h6>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">REG DAY:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-56 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RD 2:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-56 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">SH:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-56 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">SH on RD:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-56 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">Reg Hol:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-56 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RH on RD 2:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-56 p-2">
                                                                </div>
                                                            </div>
                                                            <div class="w-1/2 px-2 border-l">
                                                                <h6 class="font-semibold border-b">Night Premium</h6>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">REG NP:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">REG NP OT:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RD2/SH NP:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RD2/SH NP OT:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RH NP:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RH NP OT:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RH on RD2 NP:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                                                                </div>
                                                                <div class="flex justify-between mt-2">
                                                                    <label for="first_name" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RH on RD2 NP OT:</label>
                                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </td>
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    200
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>

    
        
</x-app-layout>
