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
                        <h2 class="uppercase font-semibold py-2">Leave/Failure to Login List</h2>
                    </div>
                    <div class="flex">
                        {{-- <div x-data="{ modelOpen: false }">
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
                                        class="inline-block w-full max-w-4xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-2xl shadow-xl 2xl:max-w-2xl"
                                    >
                                        <div class="flex items-center justify-between space-x-4 px-2">
                                            <h1 class="text-xl font-medium text-gray-800 ">Add New Allowance</h1>
                    
                                            <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            </button>
                                        </div>
                    
                                        <form class="mt-5">
                                            <div class="px-2">
                                                <label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Allowance Name</label>
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
                        </div> --}}
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
                                <th scope="col" class="py-3 px-6">
                                    Employee Name
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Absences
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Failure to Log In/out
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Undertime/Tardiness
                                </th>
                                <th scope="col" class="py-3 px-6" width="5%" align="center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                    </svg>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    Glenda Paternal
                                </td>
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    2
                                </td>
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    1
                                </td>
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    3
                                </td>
                                <td class="py-3 px-6 justify-between flex" align="center">
                                    <div x-data="{ modelOpen: false }">
                                        <button @click="modelOpen =!modelOpen" class="py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" title="Update"> 
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                              </svg>
                                              
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
                                                    class="inline-block w-full max-w-4xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-2xl shadow-xl 2xl:max-w-2xl"
                                                >
                                                    <div class="flex items-center justify-between space-x-4 px-2">
                                                        <h1 class="text-xl font-medium text-gray-800 ">Glenda Paternal</h1>
                                
                                                        <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <form class="mt-5">
                                                        <div class="overflow-x-auto relative">
                                                            <table class="w-full text-sm text-left text-gray-500 white:text-gray-400">
                                                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 white:bg-gray-700 white:text-gray-400">
                                                                    <tr>
                                                                        <th scope="col" class="py-3 px-3" width="4%">
                                                                            <input type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                                                        </th>
                                                                        <th scope="col" class="py-3 px-3" width="20%">
                                                                            Date
                                                                        </th>
                                                                        <th scope="col" class="py-3 px-3" width="20%">
                                                                            Date Filed
                                                                        </th>
                                                                        <th scope="col" class="py-3 px-3" width="16%" align="center">
                                                                            With Pay
                                                                        </th>
                                                                        <th scope="col" class="py-3 px-3" width="10%">
                                                                            Percentage
                                                                        </th>
                                                                        <th scope="col" class="py-3 px-3" width="30%">
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
                                                                            September 23, 2022
                                                                        </td>
                                                                        <td class="py-3 px-3" align="center">
                                                                            <input type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                                                        </td>
                                                                        <td class="py-3 px-3" align="center">
                                                                            29%
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
                                                                            September 26, 2022
                                                                        </td>
                                                                        <td class="py-3 px-3" align="center">
                                                                            <input type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                                                        </td>
                                                                        <td class="py-3 px-3" align="center">
                                                                            29%
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
                                                                            September 23, 2022
                                                                        </td>
                                                                        <td class="py-3 px-3" align="center">
                                                                            <input type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                                                        </td>
                                                                        <td class="py-3 px-3" align="center">
                                                                            29%
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
                                                                            September 23, 2022
                                                                        </td>
                                                                        <td class="py-3 px-3" align="center">
                                                                            <input type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                                                        </td>
                                                                        <td class="py-3 px-3" align="center">
                                                                            29%
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
                                                                            September 23, 2022
                                                                        </td>
                                                                        <td class="py-3 px-3" align="center">
                                                                            <input type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                                                        </td>
                                                                        <td class="py-3 px-3" align="center">
                                                                            29%
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
                                                                            September 23, 2022
                                                                        </td>
                                                                        <td class="py-3 px-3" align="center">
                                                                            <input type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                                                        </td>
                                                                        <td class="py-3 px-3" align="center">
                                                                            29%
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
                                    </div>
                                </td>
                            </tr>
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    Stephanie Rose Dumagoso
                                </td>
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    3
                                </td>
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    1
                                </td>
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    5
                                </td>
                                <td class="py-3 px-6 justify-between flex" align="center">
                                    <div x-data="{ modelOpen: false }">
                                        <button @click="modelOpen =!modelOpen" class="py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" title="Update"> 
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                              </svg>
                                              
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
                                                    class="inline-block w-full max-w-4xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-2xl shadow-xl 2xl:max-w-2xl"
                                                >
                                                    <div class="flex items-center justify-between space-x-4 px-2">
                                                        <h1 class="text-xl font-medium text-gray-800 ">Stephanie Rose Dumagoso </h1>
                                
                                                        <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <form class="mt-5">
                                                        <div class="overflow-x-auto relative">
                                                            <table class="w-full text-sm text-left text-gray-500 white:text-gray-400">
                                                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 white:bg-gray-700 white:text-gray-400">
                                                                    <tr>
                                                                        <th scope="col" class="py-3 px-3" width="4%">
                                                                            <input type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                                                        </th>
                                                                        <th scope="col" class="py-3 px-3" width="20%">
                                                                            Date
                                                                        </th>
                                                                        <th scope="col" class="py-3 px-3" width="20%">
                                                                            Date Filed
                                                                        </th>
                                                                        <th scope="col" class="py-3 px-3" width="16%" align="center">
                                                                            With Pay
                                                                        </th>
                                                                        <th scope="col" class="py-3 px-3" width="10%">
                                                                            Percentage
                                                                        </th>
                                                                        <th scope="col" class="py-3 px-3" width="30%">
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
                                                                            September 12, 2022
                                                                        </td>
                                                                        <td class="py-3 px-3">
                                                                            September 23, 2022
                                                                        </td>
                                                                        <td class="py-3 px-3" align="center">
                                                                            <input type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                                                        </td>
                                                                        <td class="py-3 px-3" align="center">
                                                                            29%
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
                                                                            September 13, 2022
                                                                        </td>
                                                                        <td class="py-3 px-3">
                                                                            September 23, 2022
                                                                        </td>
                                                                        <td class="py-3 px-3" align="center">
                                                                            <input type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                                                        </td>
                                                                        <td class="py-3 px-3" align="center">
                                                                            29%
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
                                                                            September 14, 2022
                                                                        </td>
                                                                        <td class="py-3 px-3">
                                                                            September 23, 2022
                                                                        </td>
                                                                        <td class="py-3 px-3" align="center">
                                                                            <input type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                                                        </td>
                                                                        <td class="py-3 px-3" align="center">
                                                                            29%
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
                                                                            September 21, 2022
                                                                        </td>
                                                                        <td class="py-3 px-3">
                                                                            September 23, 2022
                                                                        </td>
                                                                        <td class="py-3 px-3" align="center">
                                                                            <input type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                                                        </td>
                                                                        <td class="py-3 px-3" align="center">
                                                                            29%
                                                                        </td>
                                                                        <td class="py-3 px-3">
                                                                            Failure To Login/Logout
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700">
                                                                        <td class="py-3 px-3">
                                                                            <input type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                                                        </td>
                                                                        <td class="py-3 px-3">
                                                                            September 23, 2022
                                                                        </td>
                                                                        <td class="py-3 px-3">
                                                                            September 23, 2022
                                                                        </td>
                                                                        <td class="py-3 px-3" align="center">
                                                                            <input type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                                                        </td>
                                                                        <td class="py-3 px-3" align="center">
                                                                            29%
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
                                                                            September 27, 2022
                                                                        </td>
                                                                        <td class="py-3 px-3">
                                                                            September 23, 2022
                                                                        </td>
                                                                        <td class="py-3 px-3" align="center">
                                                                            <input type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                                                        </td>
                                                                        <td class="py-3 px-3" align="center">
                                                                            29%
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
                                                                            September 29, 2022
                                                                        </td>
                                                                        <td class="py-3 px-3">
                                                                            September 23, 2022
                                                                        </td>
                                                                        <td class="py-3 px-3" align="center">
                                                                            <input type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                                                        </td>
                                                                        <td class="py-3 px-3" align="center">
                                                                            29%
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
                                                                            October 5, 2022
                                                                        </td>
                                                                        <td class="py-3 px-3">
                                                                            September 23, 2022
                                                                        </td>
                                                                        <td class="py-3 px-3" align="center">
                                                                            <input type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                                                        </td>
                                                                        <td class="py-3 px-3" align="center">
                                                                            29%
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
                                                                            October 11, 2022
                                                                        </td>
                                                                        <td class="py-3 px-3">
                                                                            September 23, 2022
                                                                        </td>
                                                                        <td class="py-3 px-3" align="center">
                                                                            <input type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                                                        </td>
                                                                        <td class="py-3 px-3" align="center">
                                                                            29%
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
                                    </div>
                                </td>
                            </tr>
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    Janssen Gardose
                                </td>
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    0
                                </td>
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    2
                                </td>
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    0
                                </td>
                                <td class="py-3 px-6 justify-between flex" align="center">
                                    <div x-data="{ modelOpen: false }">
                                        <button @click="modelOpen =!modelOpen" class="py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" title="Update"> 
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                              </svg>
                                              
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
                                                    class="inline-block w-full max-w-4xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-2xl shadow-xl 2xl:max-w-2xl"
                                                >
                                                    <div class="flex items-center justify-between space-x-4 px-2">
                                                        <h1 class="text-xl font-medium text-gray-800 ">Janssen Gardose </h1>
                                
                                                        <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <form class="mt-5">
                                                        <div class="overflow-x-auto relative">
                                                            <table class="w-full text-sm text-left text-gray-500 white:text-gray-400">
                                                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 white:bg-gray-700 white:text-gray-400">
                                                                    <tr>
                                                                        <th scope="col" class="py-3 px-3" width="4%">
                                                                            <input type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                                                        </th>
                                                                        <th scope="col" class="py-3 px-3" width="20%">
                                                                            Date
                                                                        </th>
                                                                        <th scope="col" class="py-3 px-3" width="20%">
                                                                            Date Filed
                                                                        </th>
                                                                        <th scope="col" class="py-3 px-3" width="16%" align="center">
                                                                            With Pay
                                                                        </th>
                                                                        <th scope="col" class="py-3 px-3" width="10%">
                                                                            Percentage
                                                                        </th>
                                                                        <th scope="col" class="py-3 px-3" width="30%">
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
                                                                            September 10, 2022
                                                                        </td>
                                                                        <td class="py-3 px-3">
                                                                            September 23, 2022
                                                                        </td>
                                                                        <td class="py-3 px-3" align="center">
                                                                            <input type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                                                        </td>
                                                                        <td class="py-3 px-3" align="center">
                                                                            29%
                                                                        </td>
                                                                        <td class="py-3 px-3">
                                                                            Failure To Login/Logout
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700">
                                                                        <td class="py-3 px-3">
                                                                            <input type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                                                        </td>
                                                                        <td class="py-3 px-3">
                                                                            September 22, 2022
                                                                        </td>
                                                                        <td class="py-3 px-3">
                                                                            September 23, 2022
                                                                        </td>
                                                                        <td class="py-3 px-3" align="center">
                                                                            <input type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                                                        </td>
                                                                        <td class="py-3 px-3" align="center">
                                                                            29%
                                                                        </td>
                                                                        <td class="py-3 px-3">
                                                                            Failure To Login/Logout
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
                                    </div>
                                </td>
                            </tr>
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    Jamila Pascual
                                </td>
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    3
                                </td>
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    0
                                </td>
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    1
                                </td>
                                <td class="py-3 px-6 justify-between flex" align="center">
                                    <div x-data="{ modelOpen: false }">
                                        <button @click="modelOpen =!modelOpen" class="py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" title="Update"> 
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                              </svg>
                                              
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
                                                    class="inline-block w-full max-w-4xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-2xl shadow-xl 2xl:max-w-2xl"
                                                >
                                                    <div class="flex items-center justify-between space-x-4 px-2">
                                                        <h1 class="text-xl font-medium text-gray-800 ">Jamila Pascual </h1>
                                
                                                        <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <form class="mt-5">
                                                        <div class="overflow-x-auto relative">
                                                            <table class="w-full text-sm text-left text-gray-500 white:text-gray-400">
                                                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 white:bg-gray-700 white:text-gray-400">
                                                                    <tr>
                                                                        <th scope="col" class="py-3 px-3" width="4%">
                                                                            <input type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                                                        </th>
                                                                        <th scope="col" class="py-3 px-3" width="20%">
                                                                            Date
                                                                        </th>
                                                                        <th scope="col" class="py-3 px-3" width="20%">
                                                                            Date Filed
                                                                        </th>
                                                                        <th scope="col" class="py-3 px-3" width="16%" align="center">
                                                                            With Pay
                                                                        </th>
                                                                        <th scope="col" class="py-3 px-3" width="10%">
                                                                            Percentage
                                                                        </th>
                                                                        <th scope="col" class="py-3 px-3" width="30%">
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
                                                                            October 12, 2022
                                                                        </td>
                                                                        <td class="py-3 px-3">
                                                                            September 23, 2022
                                                                        </td>
                                                                        <td class="py-3 px-3" align="center">
                                                                            <input type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                                                        </td>
                                                                        <td class="py-3 px-3" align="center">
                                                                            29%
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
                                                                            September 23, 2022
                                                                        </td>
                                                                        <td class="py-3 px-3" align="center">
                                                                            <input type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                                                        </td>
                                                                        <td class="py-3 px-3" align="center">
                                                                            29%
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
                                                                            October 14, 2022
                                                                        </td>
                                                                        <td class="py-3 px-3">
                                                                            September 23, 2022
                                                                        </td>
                                                                        <td class="py-3 px-3" align="center">
                                                                            <input type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                                                        </td>
                                                                        <td class="py-3 px-3" align="center">
                                                                            29%
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
                                                                            Ocotber 18, 2022
                                                                        </td>
                                                                        <td class="py-3 px-3">
                                                                            September 23, 2022
                                                                        </td>
                                                                        <td class="py-3 px-3" align="center">
                                                                            <input type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                                                        </td>
                                                                        <td class="py-3 px-3" align="center">
                                                                            29%
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
                                    </div>
                                </td>
                            </tr>
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    Johnson Sapol
                                </td>
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    1
                                </td>
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    0
                                </td>
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                    0
                                </td>
                                <td class="py-3 px-6 justify-between flex" align="center">
                                    <div x-data="{ modelOpen: false }">
                                        <button @click="modelOpen =!modelOpen" class="py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" title="Update"> 
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                              </svg>
                                              
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
                                                    class="inline-block w-full max-w-4xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-2xl shadow-xl 2xl:max-w-2xl"
                                                >
                                                    <div class="flex items-center justify-between space-x-4 px-2">
                                                        <h1 class="text-xl font-medium text-gray-800 ">Johnson Sapol </h1>
                                
                                                        <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <form class="mt-5">
                                                        <div class="overflow-x-auto relative">
                                                            <table class="w-full text-sm text-left text-gray-500 white:text-gray-400">
                                                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 white:bg-gray-700 white:text-gray-400">
                                                                    <tr>
                                                                        <th scope="col" class="py-3 px-3" width="4%">
                                                                            <input type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                                                        </th>
                                                                        <th scope="col" class="py-3 px-3" width="20%">
                                                                            Date
                                                                        </th>
                                                                        <th scope="col" class="py-3 px-3" width="20%">
                                                                            Date Filed
                                                                        </th>
                                                                        <th scope="col" class="py-3 px-3" width="16%" align="center">
                                                                            With Pay
                                                                        </th>
                                                                        <th scope="col" class="py-3 px-3" width="10%">
                                                                            Percentage
                                                                        </th>
                                                                        <th scope="col" class="py-3 px-3" width="30%">
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
                                                                            October 19, 2022
                                                                        </td>
                                                                        <td class="py-3 px-3">
                                                                            September 23, 2022
                                                                        </td>
                                                                        <td class="py-3 px-3" align="center">
                                                                            <input type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                                                        </td>
                                                                        <td class="py-3 px-3" align="center">
                                                                            29%
                                                                        </td>
                                                                        <td class="py-3 px-3">
                                                                            Absent
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
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>

    
        
</x-app-layout>
