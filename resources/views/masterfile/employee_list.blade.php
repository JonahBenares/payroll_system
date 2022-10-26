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
                        <h2 class="uppercase font-semibold py-2">Employee List</h2>
                    </div>
                    <div class="flex">
                        <a href="{{ route('employee_add') }}"  class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                            </svg>
                            <span>Add New</span>
                        </a>
                    </div>
                </div>
                {{-- <livewire:employee-table/> --}}
                <!-- component -->
                <div class=""></div>
                
                <div class=" overflow-x-auto overflow-y-hidden hover:overflow-y-auto h-100 relative max-h-100 pt-2 pr-2 pl-2 mt-3 md:pt-0 md:pr-0 md:pl-0 sm:rounded-2xl ">
                    
                    <table class="w-screen text-sm text-left text-gray-500 white:text-gray-400 ">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 white:bg-gray-700 white:text-gray-400 sticky top-0  z-1">
                            <tr>
                                <th scope="col" width="12%" class="py-3 px-3">
                                    Employee No.
                                </th>
                                <th scope="col" width="30%" class="py-3 px-3 sticky left-0 z-1  bg-gray-50">
                                    Employee Name
                                </th>
                                <th scope="col" width="15%" class="py-3 px-3">
                                    Location
                                </th>
                                <th scope="col" class="py-3 px-3">
                                    HMO L1 Dependent
                                </th>
                                <th scope="col" class="py-3 px-3">
                                    HMO L2 Dependent
                                </th>
                                <th scope="col" class="py-3 px-3">
                                    HMO L3 Dependent
                                </th>
                                <th scope="col" class="py-3 px-3">
                                    Senior Dependent
                                </th>
                                <th scope="col" class="py-3 px-3">Pag-Ibig Rate</th>
                                <th scope="col" class="py-3 px-3">Hourly Rate</th>
                                <th scope="col" class="py-3 px-3">Daily Rate</th>
                                <th scope="col" class="py-3 px-3">Monthly Rate</th>
                                <th scope="col" class="py-3 px-3">Salary Type</th>
                                <th scope="col" class="py-3 px-6 bg-gray-50 sticky right-0" width="5%" align="center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                    </svg>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600 ">
                                <td class="py-4 px-3 h-20">
                                    2022-0010
                                </td>
                                <td scope="row" class="flex items-center py-4 px-3 font-medium text-gray-900 whitespace-nowrap white:text-white sticky left-0 bg-white">
                                    {{-- <span class="w-10 h-10 py-1.5 px-2 rounded-full text-white bg-green-500 text-center text-lg font-bold">R</span> --}}
                                    <span class="w-10 h-10 py-1.5 px-2 rounded-full text-white bg-yellow-500 text-center text-lg font-bold ">S</span>
                                    <div class="pl-3">
                                        <div class="text-base font-semibold">Jonah May Benares</div>
                                        <span class="font-normal text-gray-500">IT Department</span>
                                    </div>  
                                </td>
                                <td>
                                    <div class="pl-3">
                                        <div class="text-sm font-semibold"></div>
                                        <span class="font-normal text-gray-500">Bacolod Office</span>
                                    </div>  
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        3
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        100
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        800
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        24,000
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        3
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        100
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        800
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        24,000
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        Monthly
                                    </div>
                                </td>
                                <td class="py-4 px-6 bg-white sticky right-0 " align="center">
                                    <a href="{{ route('employee_update') }}" type="button" class="py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" title="Update">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                            <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                            <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600 ">
                                <td class="py-4 px-3 h-20">
                                    2021-0020
                                </td>
                                <td scope="row" class="flex items-center py-4 px-3 font-medium text-gray-900 whitespace-nowrap white:text-white sticky left-0 bg-white">
                                    <span class="w-10 h-10 py-1.5 px-2 rounded-full text-white bg-green-500 text-center text-lg font-bold">R</span>
                                    {{-- <span class="w-10 h-10 py-1.5 px-2 rounded-full text-white bg-yellow-500 text-center text-lg font-bold">S</span> --}}
                                    <div class="pl-3">
                                        <div class="text-base font-semibold">Maria Rose Del Pilar</div>
                                        <span class="font-normal text-gray-500">Finance Department</span>
                                    </div>  
                                </td>
                                <td>
                                    <div class="pl-3">
                                        <div class="text-sm font-semibold"></div>
                                        <span class="font-normal text-gray-500">Bago Office</span>
                                    </div>  
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        0
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        50
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        400
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        12
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        3
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        100
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        800
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        24,000
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        Daily
                                    </div>
                                </td>
                                <td class="py-4 px-6 bg-white sticky right-0" align="center">
                                    <a href="{{ route('employee_update') }}" type="button" class="py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" title="Update">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                            <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                            <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600 ">
                                <td class="py-4 px-3 h-20">
                                    2019-0010
                                </td>
                                <td scope="row" class="flex items-center py-4 px-3 font-medium text-gray-900 whitespace-nowrap white:text-white sticky left-0 bg-white">
                                    <span class="w-10 h-10 py-1.5 px-2 rounded-full text-white bg-green-500 text-center text-lg font-bold">R</span>
                                    {{-- <span class="w-10 h-10 py-1.5 px-2 rounded-full text-white bg-yellow-500 text-center text-lg font-bold">S</span> --}}
                                    <div class="pl-3">
                                        <div class="text-base font-semibold">Stephine Toldeo Reyes</div>
                                        <span class="font-normal text-gray-500">IT Department</span>
                                    </div>  
                                </td>
                                <td>
                                    <div class="pl-3">
                                        <div class="text-sm font-semibold"></div>
                                        <span class="font-normal text-gray-500">Bacolod Office</span>
                                    </div>  
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        1
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        90
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        720
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        21,600
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        3
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        100
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        800
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        24,000
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        Monthly
                                    </div>
                                </td>
                                <td class="py-4 px-6 bg-white sticky right-0" align="center">
                                    <a href="{{ route('employee_update') }}" type="button" class="py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" title="Update">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                            <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                            <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600 ">
                                <td class="py-4 px-3 h-20">
                                    2022-0010
                                </td>
                                <td scope="row" class="flex items-center py-4 px-3 font-medium text-gray-900 whitespace-nowrap white:text-white sticky left-0 bg-white">
                                    {{-- <span class="w-10 h-10 py-1.5 px-2 rounded-full text-white bg-green-500 text-center text-lg font-bold">R</span> --}}
                                    <span class="w-10 h-10 py-1.5 px-2 rounded-full text-white bg-yellow-500 text-center text-lg font-bold">S</span>
                                    <div class="pl-3">
                                        <div class="text-base font-semibold">Jushenelen May Benarivino</div>
                                        <span class="font-normal text-gray-500">HR Department</span>
                                    </div>  
                                </td>
                                <td>
                                    <div class="pl-3">
                                        <div class="text-sm font-semibold"></div>
                                        <span class="font-normal text-gray-500">Bacolod Office</span>
                                    </div>  
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        7
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        70
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        560
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        16,800
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        3
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        100
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        800
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        24,000
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        Daily
                                    </div>
                                </td>
                                <td class="py-4 px-6 bg-white sticky right-0" align="center">
                                    <a href="{{ route('employee_update') }}" type="button" class="py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" title="Update">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                            <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                            <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600 ">
                                <td class="py-4 px-3 h-20">
                                    2021-0010
                                </td>
                                <td scope="row" class="flex items-center py-4 px-3 font-medium text-gray-900 whitespace-nowrap white:text-white sticky left-0 bg-white">
                                    {{-- <span class="w-10 h-10 py-1.5 px-2 rounded-full text-white bg-green-500 text-center text-lg font-bold">R</span> --}}
                                    <span class="w-10 h-10 py-1.5 px-2 rounded-full text-white bg-yellow-500 text-center text-lg font-bold">S</span>
                                    <div class="pl-3">
                                        <div class="text-base font-semibold">Neil Sims Dela Torre</div>
                                        <span class="font-normal text-gray-500">IT Department</span>
                                    </div>  
                                </td>
                                <td>
                                    <div class="pl-3">
                                        <div class="text-sm font-semibold"></div>
                                        <span class="font-normal text-gray-500">Bacolod Office</span>
                                    </div>  
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        0
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        150
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        1,200
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        36,000
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        3
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        100
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        800
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        24,000
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        Monthly
                                    </div>
                                </td>
                                <td class="py-4 px-6 bg-white sticky right-0" align="center">
                                    <a href="{{ route('employee_update') }}" type="button" class="py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" title="Update">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                            <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                            <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600 ">
                                <td class="py-4 px-3 h-20">
                                    2021-0010
                                </td>
                                <td scope="row" class="flex items-center py-4 px-3 font-medium text-gray-900 whitespace-nowrap white:text-white sticky left-0 bg-white">
                                    <span class="w-10 h-10 py-1.5 px-2 rounded-full text-white bg-green-500 text-center text-lg font-bold">R</span>
                                    {{-- <span class="w-10 h-10 py-1.5 px-2 rounded-full text-white bg-yellow-500 text-center text-lg font-bold">S</span> --}}
                                    <div class="pl-3">
                                        <div class="text-base font-semibold">Mila Nieh Milanoro</div>
                                        <span class="font-normal text-gray-500">Accounting Department</span>
                                    </div>  
                                </td>
                                <td>
                                    <div class="pl-3">
                                        <div class="text-sm font-semibold"></div>
                                        <span class="font-normal text-gray-500">Bacolod Office</span>
                                    </div>  
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        5
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        85
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        680
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        20,400
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        3
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        100
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        800
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        24,000
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        Monthly
                                    </div>
                                </td>
                                <td class="py-4 px-6 bg-white sticky right-0" align="center">
                                    <a href="{{ route('employee_update') }}" type="button" class="py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" title="Update">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                            <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                            <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600 ">
                                <td class="py-4 px-3 h-20">
                                    2021-0010
                                </td>
                                <td scope="row" class="flex items-center py-4 px-3 font-medium text-gray-900 whitespace-nowrap white:text-white sticky left-0 bg-white">
                                    <span class="w-10 h-10 py-1.5 px-2 rounded-full text-white bg-green-500 text-center text-lg font-bold">R</span>
                                    {{-- <span class="w-10 h-10 py-1.5 px-2 rounded-full text-white bg-yellow-500 text-center text-lg font-bold">S</span> --}}
                                    <div class="pl-3">
                                        <div class="text-base font-semibold">Henelen Joy Plazabales</div>
                                        <span class="font-normal text-gray-500">Trading Department</span>
                                    </div>  
                                </td>
                                <td>
                                    <div class="pl-3">
                                        <div class="text-sm font-semibold"></div>
                                        <span class="font-normal text-gray-500">Bacolod Office</span>
                                    </div>  
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        0
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        75
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        600
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        18000
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        3
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        100
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        800
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        24,000
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        Daily
                                    </div>
                                </td>
                                <td class="py-4 px-6 bg-white sticky right-0" align="center">
                                    <a href="{{ route('employee_update') }}" type="button" class="py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" title="Update">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                            <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                            <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600 ">
                                <td class="py-4 px-3 h-20">
                                    2021-0010
                                </td>
                                <td scope="row" class="flex items-center py-4 px-3 font-medium text-gray-900 whitespace-nowrap white:text-white sticky left-0 bg-white">
                                    {{-- <span class="w-10 h-10 py-1.5 px-2 rounded-full text-white bg-green-500 text-center text-lg font-bold">R</span> --}}
                                    <span class="w-10 h-10 py-1.5 px-2 rounded-full text-white bg-yellow-500 text-center text-lg font-bold">S</span>
                                    <div class="pl-3">
                                        <div class="text-base font-semibold">Glennvic John Biñares</div>
                                        <span class="font-normal text-gray-500">Purchasing Department</span>
                                    </div>  
                                </td>
                                <td>
                                    <div class="pl-3">
                                        <div class="text-sm font-semibold"></div>
                                        <span class="font-normal text-gray-500">Bago Office</span>
                                    </div>  
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        1
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        75
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        600
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        18,000
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        3
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        100
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        800
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        24,000
                                    </div>
                                </td>
                                <td class="py-4 px-3">
                                    <div class="flex items-center">
                                        Monthly
                                    </div>
                                </td>
                                <td class="py-4 px-6 bg-white sticky right-0" align="center">
                                    <a href="{{ route('employee_update') }}" type="button" class="py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" title="Update">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                            <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                            <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div> 
        </div>
    </div>
</x-app-layout>