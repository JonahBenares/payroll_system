<x-app-layout>
    <x-slot name="header"></x-slot>
    <style>
        [x-cloak] {
        display: none;
        }
    </style>
    
    <div class="overflow-auto h-screen pb-28 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
		<div class="flex flex-col flex-wrap sm:flex-row ">
            <div class="relative h-full w-full bg-white rounded-lg shadow-lg white:bg-gray-800 white:border-gray-700">
                <div class="flex justify-between pr-4 pl-4 pt-4 rounded-t-lg ">
                    <div> 
                        <h2 class="uppercase font-semibold py-3">Employee List</h2>
                    </div>
                </div>
                {{-- <livewire:employee-table/> --}}
                <!-- component -->
                {{-- <div class="overflow-x-auto h-110 border ">
                    <table class="text-sm" width="150%" >
                        <tr class="border-b text-xs text-gray-700 uppercase bg-gray-50 sticky top-0 z-10">
                            <td class="px-3 py-3 text-center" width="7%">Employee No.</td>
                            <td class="px-3 py-3 sticky left-0 bg-gray-50 z-10" width="20%">Employee Name</td>
                            <td class="px-3 py-3">Location</td>
                            <td class="px-3 py-3">Pag-Ibig Rate</td>
                            <td class="px-3 py-3">Hourly Rate</td>
                            <td class="px-3 py-3">Daily Rate</td>
                            <td class="px-3 py-3">Monthly Rate</td>

                            @foreach($hmo AS $h)
                            <td class="px-3 py-3">{{ $h->level_description}}</td>
                            @endforeach

                            <td class="px-3 py-3">Salary Type</td>
                            <td class="px-3 py-3 sticky right-0  bg-gray-50 " width="1%">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>
                            </td>
                        </tr>
                        @foreach($employeelist AS $el)
                        <tr class="border-b">
                            <td class="px-3 py-3 text-center">{{ $el->emp_num }}</td>
                            <td class="px-3 py-3 sticky left-0 bg-white flex align-top">
                                <span class="w-10 h-10 py-1.5 px-3 rounded-full text-white bg-yellow-500 text-center text-lg font-bold ">S</span>
                                <div class="pl-3">
                                    <div class="text-base font-semibold"> {{ $el->full_name }}</div>
                                    <span class="font-normal text-gray-500">{{ $el->dept_name }}</span>
                                </div>
                            </td>
                            <td class="px-3 py-3">{{ $el->location_name }}</td>
                            <td class="px-3 py-3">{{ $el->pagibig_rate }}</td>
                            <td class="px-3 py-3">{{ $el->hourly_rate }}</td>
                            <td class="px-3 py-3">{{ $el->daily_rate }}</td>
                            <td class="px-3 py-3">{{ $el->monthly_rate }}</td>
                            @foreach($hmo AS $h)
                            <td class="px-3 py-3">{{ getHMODependent($el->id, $h->id) }}</td>
                            @endforeach
                            <td class="px-3 py-3">{{ $el->salary_type }}</td>

                            <td class="px-3 py-3 sticky right-0 bg-white">
                                <a href="{{ route('emp.edit', $el->id) }}" class="" title="Update">
                                    <div class="py-2 px-2 text-xs font-medium text-center text-white transition-colors bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                            <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                            <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                        </svg>
                                    </div>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div> --}}



                <div class="overflow-x-auto overflow-y-hidden hover:overflow-y-auto h-100 relative p-4 rounded-b-lg">
                    <table class="w-full text-sm text-left white:text-gray-400" id="emp_table" width="170%">
                        <thead class="text-xs text-gray-700 uppercase sticky top-0 z-10">
                            <tr class="">
                                <th class="px-2 py-3 text-center" width="7%">Employee No.</th>
                                <th class="px-2 py-3 bg-gray-50" width="20%" style="position: sticky!important;left: 0!important;z-index:40!important;">Employee Name</th>
                                <th class="px-2 py-3">Location</th>
                                <th class="px-2 py-3">Pag-Ibig Rate</th>
                                <th class="px-2 py-3">Hourly Rate</th>
                                <th class="px-2 py-3">Daily Rate</th>
                                <th class="px-2 py-3">Monthly Rate</th>

                                @foreach($hmo AS $h)
                                <th class="px-2 py-3">{{ $h->level_description}}</th>
                                @endforeach

                                <th class="px-2 py-3">Salary Type</th>
                                <th align="right" class="px-2 py-3 bg-gray-50" style="position: sticky!important;right: 0!important;z-index:40!important;">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                    </svg>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($employeelist AS $el)
                            <tr class="bg-white text-gray-500 font-medium hover:bg-gray-50 hover:text-gray-900 hover:font-semibold">
                                <td align="center" scope="row" class="py-3 px-6 whitespace-nowrap">{{ $el->emp_num }}</td>
                                <td  scope="row" class="py-3 px-6 sticky left-0 bg-white flex align-top">
                                    <span class="w-10 h-10 py-1.5 px-3 rounded-full text-white bg-yellow-500 text-center text-lg font-bold ">S</span>
                                    <div class="pl-3">
                                        <div class="text-base font-semibold"> {{ $el->full_name }}</div>
                                        <span class="font-normal text-gray-500">{{ $el->dept_name }}</span>
                                    </div>
                                </td>
                                <td scope="row" class="py-3 px-6 whitespace-nowrap">{{ $el->location_name }}</td>
                                <td align="center" scope="row" class="py-3 px-6 whitespace-nowrap">{{ $el->pagibig_rate }}</td>
                                <td align="center" scope="row" class="py-3 px-6 whitespace-nowrap">{{ $el->hourly_rate }}</td>
                                <td align="center" scope="row" class="py-3 px-6 whitespace-nowrap">{{ $el->daily_rate }}</td>
                                <td align="center" scope="row" class="py-3 px-6 whitespace-nowrap">{{ $el->monthly_rate }}</td>
                                @foreach($hmo AS $h)
                                    <td align="center" class="px-3 py-3">{{ getHMODependent($el->id, $h->id) }}</td>
                                @endforeach
                                <td align="center" scope="row" class="py-3 px-6 whitespace-nowrap">{{ $el->salary_type }}</td>
                                <td align="right" scope="row" class="py-3 px-6 sticky justify-center right-0 bg-white">
                                    <div class="w-8 ">
                                        <a href="{{ route('emp.edit', $el->id) }}" class="" title="Update">
                                            <div class="py-2 px-2 text-xs font-medium text-center text-white transition-colors bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                                    <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                                    <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </td>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div> 
        </div>
    </div>
</x-app-layout>
