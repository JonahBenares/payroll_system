<x-app-layout>
    <x-slot name="header"></x-slot>
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
                        <h2 class="uppercase font-semibold py-2">Employee List <small class="border-l-2 px-1">Add Employee</small></h2>
                    </div>
                    <div class="flex">
                        <a href="{{ route('employee_list') }}"  class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                            <span>Show List</span>
                        </a>
                
                    </div>
                </div>
                {{-- <livewire:employee-table/> --}}
                <!-- component -->
                <form class="mt-2">
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
                                HMO L1 Dependent
                            </label>
                            <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                        </div>
                        <div class="mt-4 w-full px-2">
                            <label for="email" class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                HMO L2 Dependent</label>
                            <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                        </div>
                    </div>
                    <div class="flex ">
                        <div class="mt-4 w-full px-2">
                            <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                HMO L3 Dependent
                            </label>
                            <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                        </div>
                        <div class="mt-4 w-full px-2">
                            <label for="email" class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                Senior Dependent</label>
                            <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                        </div>
                    </div>
                    <div class="flex ">
                        <div class="mt-4 w-full px-2">
                            <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                Pag-Ibig Rate
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
                    <div class="flex ">
                        <div class="mt-4 w-full px-2">
                            <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                Salary Type
                            </label>
                            <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                        </div>
                        <div class="mt-4 w-full px-2">
                            <label for="email" class="block text-sm text-gray-700 capitalize white:text-gray-200">Accounting Entry</label>
                            <select type="email" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                <option value="">--Select Accounting Entry--</option>
                            </select>
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