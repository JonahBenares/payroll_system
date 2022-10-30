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
                        <h2 class="uppercase font-semibold py-2">Employee List <small class="border-l-2 px-1">Update Employee</small></h2>
                    </div>
                    <div class="flex">
                        <a href="{{ route('emp.index') }}"  class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                            <span>Show List</span>
                        </a>
                
                    </div>
                </div>
                {{-- <livewire:employee-table/> --}}
                <!-- component -->
                @foreach($employeedata AS $e)  
                <form method="POST" class="mt-2" action ="{{ route('emp.update', $e->id) }}" >
                    @method('PUT')
                    @csrf
                   <div class="flex ">
                        <div class="mt-4 w-full px-2">
                        <label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Employee Name</label>
                        <input type="text" name="full_name" value="{{ $e->full_name }}" disabled class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                    </div>
                    <div class="mt-4 w-full px-2>
                        <input type="hidden" name="supervisor" value="0" />
                        <input class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500" name="supervisor" id="supervisor"  type="checkbox" value="1">
                        <label for="default-checkbox" class="block ml-2 text-sm text-gray-700 capitalize white:text-gray-200">Supervisor</label>
                    </div>
                </div>
                    
                    <div class="flex ">
                        <div class="mt-4 w-full px-2">
                            <label class="block text-sm text-gray-700 capitalize white:text-gray-200">Employee Number</label>
                            <input type="text" name="emp_num" value="{{ $e->emp_num }}" disabled class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                        </div>
                        <div class="mt-4 w-full px-2">
                            <label class="block text-sm text-gray-700 capitalize white:text-gray-200">Employee Type</label>
                            <input  disabled  class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                        </div>
                    </div>

                    <div class="flex ">
                        <div class="mt-4 w-full px-2">
                            <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                Location
                            </label>
                            <input name="location" value="{{ $e->location_name }}" disabled class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                        </div>
                        <div class="mt-4 w-full px-2">
                            <label for="department" class="block text-sm text-gray-700 capitalize white:text-gray-200">Department</label>
                            <input type="text" name="department" value="{{ $e->dept_name }}" disabled class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                        </div>
                    </div>
                  
                    <div class="flex ">
                        <div class="mt-4 w-full px-2">
                            <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                Pag-Ibig Rate
                            </label>
                            <input  type="text" name="pagibig_rate" value="{{ $e->pagibig_rate }}" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                        </div>
                        <div class="mt-4 w-full px-2">
                            <label for="hourly_rate" class="block text-sm text-gray-700 capitalize white:text-gray-200">Hourly Rate</label>
                            <input type="text" name="hourly_rate" value="{{ $e->hourly_rate }}" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                        </div>
                    </div>
                    <div class="flex ">
                        <div class="mt-4 w-full px-2">
                            <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                Daily Rate
                            </label>
                            <input type="text" name="daily_rate" value="{{ $e->daily_rate }}" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                        </div>
                        <div class="mt-4 w-full px-2">
                            <label for="monthly_rate" class="block text-sm text-gray-700 capitalize white:text-gray-200">Monthly Rate</label>
                            <input type="text" name="monthly_rate" value="{{ $e->monthly_rate }}" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                        </div>
                    </div>

                    <div class="flex ">
                        <div class="mt-4 w-full px-2">
                            <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                Salary Type
                            </label>
                            <select name="salary_type" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                <option value="" selected>--Select Salary Type--</option>
                                <option value="Monthly">Monthly</option>
                                <option value="Daily">Daily</option>
                            </select>
                        </div>
                        <div class="mt-4 w-full px-2">
                            <label for="email" class="block text-sm text-gray-700 capitalize white:text-gray-200">Accounting Entry</label>
                            <select name="accounting_entry_id" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                <option value="" selected>--Select Accounting Entry--</option>
                                @foreach($accent AS $acc)
                                    <option value="{{ $acc->id }}">{{ $acc->description }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    @foreach($hmo AS $h)
                        @foreach($emp_hmo AS $r)
                            @if($h->id === $r->hmo_rate_id) 
                               
                          
                            <div class="flex ">
                                <div class="mt-4 w-full px-2">
                                    <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                        {{ $h->level_description }}
                                    </label>
                                    <input type="number" name="{{ 'dependent_'.$h->id }}" value="{{ $r->no_of_dependent }}" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                </div>
                            </div>
                            @else
                            <div class="flex ">
                                <div class="mt-4 w-full px-2">
                                    <label class="block text-sm text-gray-700 capitalize white:text-gray-200">
                                        {{ $h->level_description }}
                                    </label>
                                    <input type="number" name="{{ 'dependent_'.$h->id }}"  class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                </div>
                            </div>
                                
                            @endif 
                        @endforeach
                    @endforeach
                  
                    
                   
                    <div class="flex justify-end mt-6 px-2">
                        <button type="submit" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl w-full white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                            Update
                        </button>
                    </div>
                </form>
                @endforeach
            </div> 
        </div>
    </div>
</x-app-layout>