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
                        <h2 class="uppercase font-semibold py-2">Allowance Rates <small class="border-l-2 px-1">Add New</small></h2>
                    </div>
                    <div class="flex">
                        <a href="{{ route('allowancerate.index') }}"  class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                            <span>Show List</span>
                        </a>
                
                    </div>
                </div>
                <form class="mt-5">
                    <div class="flex flex-row justify-between">
                        <div class="px-3 w-3/4">
                            <span class="block w-full text-left">Allowance Name</span>
                        </div>
                        <div class="px-3 w-1/4">
                            <span class="block w-full text-left">Rate</span>
                        </div>
                        <div class="px-3 w-14 test-left">
                            <span class="block w-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="flex flex-row justify-between">
                        <div class="px-3 w-3/4">
                            <!-- <input type="text" class=" w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40"> -->
                            <select class=" w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                <option value="">--Select Allowance Name--</option>
                                <option value="Cash Allowance">Cash Allowance</option>
                                <option value="Clothing Allowance">Clothing Allowance</option>
                                <option value="House Rent Allowance">House Rent Allowance</option>
                                <option value="Meal and Transportation Allowance">Meal and Transportation Allowance</option>
                                <option value="Uniform Allowance">Uniform Allowance</option>
                            </select>
                        </div>
                        <div class="px-3 w-1/4">
                            <input type="text" class=" w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                        </div>
                        <div class="px-3 w-14">
                            <button class="flex items-center justify-center px-2 py-2 mt-3 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                  </svg>
                            </button>
                        </div>
                    </div>
                    <div class="flex flex-row justify-between">
                        <div class="px-3 w-3/4">
                            <select class=" w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                <option value="">--Select Allowance Name--</option>
                                <option value="Cash Allowance">Cash Allowance</option>
                                <option value="Clothing Allowance">Clothing Allowance</option>
                                <option value="House Rent Allowance">House Rent Allowance</option>
                                <option value="Meal and Transportation Allowance">Meal and Transportation Allowance</option>
                                <option value="Uniform Allowance">Uniform Allowance</option>
                            </select>
                        </div>
                        <div class="px-3 w-1/4">
                            <input type="text" class=" w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                        </div>
                        <div class="px-3 w-14">
                            <button class="flex items-center justify-center px-2 py-2 mt-3 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-500 rounded-2xl white:bg-red-600 white:hover:bg-red-700 white:focus:bg-red-700 hover:bg-red-600 focus:outline-none focus:bg-red-500 focus:ring focus:ring-red-300 focus:ring-opacity-50">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                  </svg>
                                  
                            </button>
                        </div>
                    </div>
                    <div class="flex flex-row justify-between">
                        <div class="px-3 w-3/4">
                            <select class=" w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                <option value="">--Select Allowance Name--</option>
                                <option value="Cash Allowance">Cash Allowance</option>
                                <option value="Clothing Allowance">Clothing Allowance</option>
                                <option value="House Rent Allowance">House Rent Allowance</option>
                                <option value="Meal and Transportation Allowance">Meal and Transportation Allowance</option>
                                <option value="Uniform Allowance">Uniform Allowance</option>
                            </select>
                        </div>
                        <div class="px-3 w-1/4">
                            <input type="text" class=" w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                        </div>
                        <div class="px-3 w-14">
                            <button class="flex items-center justify-center px-2 py-2 mt-3 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-500 rounded-2xl white:bg-red-600 white:hover:bg-red-700 white:focus:bg-red-700 hover:bg-red-600 focus:outline-none focus:bg-red-500 focus:ring focus:ring-red-300 focus:ring-opacity-50">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                  </svg>
                                  
                            </button>
                        </div>
                    </div>
                    <div class="flex flex-row justify-between">
                        <div class="px-3 w-3/4">
                            <select class=" w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                <option value="">--Select Allowance Name--</option>
                                <option value="Cash Allowance">Cash Allowance</option>
                                <option value="Clothing Allowance">Clothing Allowance</option>
                                <option value="House Rent Allowance">House Rent Allowance</option>
                                <option value="Meal and Transportation Allowance">Meal and Transportation Allowance</option>
                                <option value="Uniform Allowance">Uniform Allowance</option>
                            </select>
                        </div>
                        <div class="px-3 w-1/4">
                            <input type="text" class=" w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                        </div>
                        <div class="px-3 w-14">
                            <button class="flex items-center justify-center px-2 py-2 mt-3 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-500 rounded-2xl white:bg-red-600 white:hover:bg-red-700 white:focus:bg-red-700 hover:bg-red-600 focus:outline-none focus:bg-red-500 focus:ring focus:ring-red-300 focus:ring-opacity-50">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                  </svg>
                                  
                            </button>
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
    </div>
</x-app-layout>
