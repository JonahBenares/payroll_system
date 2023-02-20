<x-app-layout>
    <x-slot name="header"></x-slot>
    <style>
        [x-cloak] {
        display: none;
        }
    </style>
    
    <div class="overflow-auto h-screen pb-28 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
		<div class="flex flex-col flex-wrap sm:flex-row ">
            <div class="p-4 relative h-full w-full bg-white rounded-lg shadow-lg white:bg-gray-800 white:border-gray-700">
                <div class="flex justify-between pb-4 bg-white white:bg-gray-900">
                    <div> 
                        <h2 class="uppercase font-semibold py-3">Employee List</h2>
                    </div>
                    <div class="flex">
                        <label for="table-search" class="sr-only">Search</label>
                        <form class="flex items-center">   
                            <label for="simple-search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                                </div>
                                <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 px-3 py-2 rounded-l-2xl" placeholder="Search" required>
                            </div>
                            <button type="submit" class="px-2 py-2 text-sm font-medium text-white border border-gray-300 bg-gray-300 rounded-r-2xl hover:bg-gray-400 hover:border hover:border-gray-400 focus:outline-none focus:bg-gray-500 focus:ring focus:ring-gray-300 focus:ring-opacity-50 ">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                <span class="sr-only">Search</span>
                            </button>
                        </form>
                    </div>
                </div>
                {{-- <livewire:employee-table/> --}}
                <!-- component -->
                <div class="overflow-x-auto h-110 border ">
                    <table class="text-sm" width="150%">
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
                                {{-- <span class="w-10 h-10 py-1.5 px-3 rounded-full text-white bg-green-500 text-center text-lg font-bold">R</span> --}}
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
                </div>
            </div> 
        </div>
    </div>
</x-app-layout>
