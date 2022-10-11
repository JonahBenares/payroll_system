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
                        <h2 class="uppercase font-semibold py-2">Allowance Rates</h2>
                    </div>
                    <div class="flex">
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 white:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                            </div>
                            <input type="text" id="table-search-users" class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-2xl border border-gray-300 focus:ring-blue-500 focus:border-blue-500 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500" placeholder="Search for Deduction">
                        </div>
                    </div>
                </div>
                <div class="overflow-x-auto hover:overflow-y-auto overflow-y-hidden h-100 relative  sm:rounded-2xl">
                    <table class="w-full text-sm text-left border border-gray-200 text-gray-500 white:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 white:bg-gray-700 white:text-gray-400 sticky top-0 z-10">
                            <tr class="">
                                <th scope="col" class="py-3 px-6 border border-gray-200" width="35%">
                                    Employee Name Name
                                </th>
                                <th scope="col" class="py-3 px-6 border border-gray-200" width="30%">
                                    Allowance Name
                                </th>
                                <th scope="col" class="py-3 px-6 border border-gray-200" width="20%">
                                    Rate
                                </th>
                                <th scope="col" class="py-3 px-6 border border-gray-200" width="20%">
                                    Overtime Rate
                                </th>
                                <th scope="col" class="py-3 px-6 border border-gray-200" width="5%" align="center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                    </svg>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                                <th scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white border border-gray-200">
                                    Sample Employee
                                </th>
                                <td class="border border-gray-200">
                                    <select class="py-3 px-6 w-full border-none">
                                        <option value="">Select Allownace Name</option>
                                </td>
                                <td class="border border-gray-200">
                                    <input type="text" class="py-3 px-6 w-full border-none text-right">
                                </td>
                                <td class="border border-gray-200">
                                    <input type="text" class="py-3 px-6 w-full border-none text-right">
                                </td>
                                <td class="border border-gray-200" align="center">
                                    <button type="button" class="py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-green-500 rounded-2xl white:bg-green-600 white:hover:bg-green-700 white:focus:bg-green-700 hover:bg-green-600 focus:outline-none focus:bg-green-500 focus:ring focus:ring-green-300 focus:ring-opacity-50" title="Save"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                          </svg>   
                                    </button>
                                </td>
                            </tr>
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                                <th scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white border border-gray-200">
                                    Sample Employee
                                </th>
                                <td class="border border-gray-200">
                                    <select class="py-3 px-6 w-full border-none">
                                        <option value="">Select Allownace Name</option>
                                </td>
                                <td class="border border-gray-200">
                                    <input type="text" class="py-3 px-6 w-full border-none text-right">
                                </td>
                                <td class="border border-gray-200">
                                    <input type="text" class="py-3 px-6 w-full border-none text-right">
                                </td>
                                <td class="border border-gray-200" align="center">
                                    <button type="button" class="py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-green-500 rounded-2xl white:bg-green-600 white:hover:bg-green-700 white:focus:bg-green-700 hover:bg-green-600 focus:outline-none focus:bg-green-500 focus:ring focus:ring-green-300 focus:ring-opacity-50" title="Save"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                          </svg>   
                                    </button>
                                </td>
                            </tr>
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                                <th scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white border border-gray-200">
                                    Sample Employee
                                </th>
                                <td class="border border-gray-200">
                                    <select class="py-3 px-6 w-full border-none">
                                        <option value="">Select Allownace Name</option>
                                </td>
                                <td class="border border-gray-200">
                                    <input type="text" class="py-3 px-6 w-full border-none text-right">
                                </td>
                                <td class="border border-gray-200">
                                    <input type="text" class="py-3 px-6 w-full border-none text-right">
                                </td>
                                <td class="border border-gray-200" align="center">
                                    <button type="button" class="py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-green-500 rounded-2xl white:bg-green-600 white:hover:bg-green-700 white:focus:bg-green-700 hover:bg-green-600 focus:outline-none focus:bg-green-500 focus:ring focus:ring-green-300 focus:ring-opacity-50" title="Save"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                          </svg>   
                                    </button>
                                </td>
                            </tr>
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                                <th scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white border border-gray-200">
                                    Sample Employee
                                </th>
                                <td class="border border-gray-200">
                                    <select class="py-3 px-6 w-full border-none">
                                        <option value="">Select Allownace Name</option>
                                </td>
                                <td class="border border-gray-200">
                                    <input type="text" class="py-3 px-6 w-full border-none text-right">
                                </td>
                                <td class="border border-gray-200">
                                    <input type="text" class="py-3 px-6 w-full border-none text-right">
                                </td>
                                <td class="border border-gray-200" align="center">
                                    <button type="button" class="py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-green-500 rounded-2xl white:bg-green-600 white:hover:bg-green-700 white:focus:bg-green-700 hover:bg-green-600 focus:outline-none focus:bg-green-500 focus:ring focus:ring-green-300 focus:ring-opacity-50" title="Save"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                          </svg>   
                                    </button>
                                </td>
                            </tr>
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                                <th scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white border border-gray-200">
                                    Sample Employee
                                </th>
                                <td class="border border-gray-200">
                                    <select class="py-3 px-6 w-full border-none">
                                        <option value="">Select Allownace Name</option>
                                </td>
                                <td class="border border-gray-200">
                                    <input type="text" class="py-3 px-6 w-full border-none text-right">
                                </td>
                                <td class="border border-gray-200">
                                    <input type="text" class="py-3 px-6 w-full border-none text-right">
                                </td>
                                <td class="border border-gray-200" align="center">
                                    <button type="button" class="py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-green-500 rounded-2xl white:bg-green-600 white:hover:bg-green-700 white:focus:bg-green-700 hover:bg-green-600 focus:outline-none focus:bg-green-500 focus:ring focus:ring-green-300 focus:ring-opacity-50" title="Save"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                          </svg>   
                                    </button>
                                </td>
                            </tr>
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                                <th scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white border border-gray-200">
                                    Sample Employee
                                </th>
                                <td class="border border-gray-200">
                                    <select class="py-3 px-6 w-full border-none">
                                        <option value="">Select Allownace Name</option>
                                </td>
                                <td class="border border-gray-200">
                                    <input type="text" class="py-3 px-6 w-full border-none text-right">
                                </td>
                                <td class="border border-gray-200">
                                    <input type="text" class="py-3 px-6 w-full border-none text-right">
                                </td>
                                <td class="border border-gray-200" align="center">
                                    <button type="button" class="py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-green-500 rounded-2xl white:bg-green-600 white:hover:bg-green-700 white:focus:bg-green-700 hover:bg-green-600 focus:outline-none focus:bg-green-500 focus:ring focus:ring-green-300 focus:ring-opacity-50" title="Save"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                          </svg>   
                                    </button>
                                </td>
                            </tr>
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                                <th scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white border border-gray-200">
                                    Sample Employee
                                </th>
                                <td class="border border-gray-200">
                                    <select class="py-3 px-6 w-full border-none">
                                        <option value="">Select Allownace Name</option>
                                </td>
                                <td class="border border-gray-200">
                                    <input type="text" class="py-3 px-6 w-full border-none text-right">
                                </td>
                                <td class="border border-gray-200">
                                    <input type="text" class="py-3 px-6 w-full border-none text-right">
                                </td>
                                <td class="border border-gray-200" align="center">
                                    <button type="button" class="py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-green-500 rounded-2xl white:bg-green-600 white:hover:bg-green-700 white:focus:bg-green-700 hover:bg-green-600 focus:outline-none focus:bg-green-500 focus:ring focus:ring-green-300 focus:ring-opacity-50" title="Save"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                          </svg>   
                                    </button>
                                </td>
                            </tr>
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                                <th scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white border border-gray-200">
                                    Sample Employee
                                </th>
                                <td class="border border-gray-200">
                                    <select class="py-3 px-6 w-full border-none">
                                        <option value="">Select Allownace Name</option>
                                </td>
                                <td class="border border-gray-200">
                                    <input type="text" class="py-3 px-6 w-full border-none text-right">
                                </td>
                                <td class="border border-gray-200">
                                    <input type="text" class="py-3 px-6 w-full border-none text-right">
                                </td>
                                <td class="border border-gray-200" align="center">
                                    <button type="button" class="py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-green-500 rounded-2xl white:bg-green-600 white:hover:bg-green-700 white:focus:bg-green-700 hover:bg-green-600 focus:outline-none focus:bg-green-500 focus:ring focus:ring-green-300 focus:ring-opacity-50" title="Save"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                          </svg>   
                                    </button>
                                </td>
                            </tr>
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                                <th scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white border border-gray-200">
                                    Sample Employee
                                </th>
                                <td class="border border-gray-200">
                                    <select class="py-3 px-6 w-full border-none">
                                        <option value="">Select Allownace Name</option>
                                </td>
                                <td class="border border-gray-200">
                                    <input type="text" class="py-3 px-6 w-full border-none text-right">
                                </td>
                                <td class="border border-gray-200">
                                    <input type="text" class="py-3 px-6 w-full border-none text-right">
                                </td>
                                <td class="border border-gray-200" align="center">
                                    <button type="button" class="py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-green-500 rounded-2xl white:bg-green-600 white:hover:bg-green-700 white:focus:bg-green-700 hover:bg-green-600 focus:outline-none focus:bg-green-500 focus:ring focus:ring-green-300 focus:ring-opacity-50" title="Save"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                          </svg>   
                                    </button>
                                </td>
                            </tr>
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                                <th scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white border border-gray-200">
                                    Sample Employee
                                </th>
                                <td class="border border-gray-200">
                                    <select class="py-3 px-6 w-full border-none">
                                        <option value="">Select Allownace Name</option>
                                </td>
                                <td class="border border-gray-200">
                                    <input type="text" class="py-3 px-6 w-full border-none text-right">
                                </td>
                                <td class="border border-gray-200">
                                    <input type="text" class="py-3 px-6 w-full border-none text-right">
                                </td>
                                <td class="border border-gray-200" align="center">
                                    <button type="button" class="py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-green-500 rounded-2xl white:bg-green-600 white:hover:bg-green-700 white:focus:bg-green-700 hover:bg-green-600 focus:outline-none focus:bg-green-500 focus:ring focus:ring-green-300 focus:ring-opacity-50" title="Save"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                          </svg>   
                                    </button>
                                </td>
                            </tr>
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                                <th scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white border border-gray-200">
                                    Sample Employee
                                </th>
                                <td class="border border-gray-200">
                                    <select class="py-3 px-6 w-full border-none">
                                        <option value="">Select Allownace Name</option>
                                </td>
                                <td class="border border-gray-200">
                                    <input type="text" class="py-3 px-6 w-full border-none text-right">
                                </td>
                                <td class="border border-gray-200">
                                    <input type="text" class="py-3 px-6 w-full border-none text-right">
                                </td>
                                <td class="border border-gray-200" align="center">
                                    <button type="button" class="py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-green-500 rounded-2xl white:bg-green-600 white:hover:bg-green-700 white:focus:bg-green-700 hover:bg-green-600 focus:outline-none focus:bg-green-500 focus:ring focus:ring-green-300 focus:ring-opacity-50" title="Save"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                          </svg>   
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>

    
        
</x-app-layout>
