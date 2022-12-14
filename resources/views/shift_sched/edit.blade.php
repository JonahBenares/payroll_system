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
						<h2 class="uppercase font-semibold py-2">Shift Schedule <small class="border-l-2 px-1">Add New</small></h2>
                    </div>
                    <div class="flex">
                        <a href="{{ route('shiftschedule.index') }}"  class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                            <span>Show List</span>
                        </a>
                    </div>
                </div>
                <form class="mt-5">       
                    <div class="flex ">
                        <div class="mt-4 w-full px-2">
                            <label class="text-left block text-sm text-gray-700 capitalize white:text-gray-200">
                               Month
                            </label>
                            <select type="text" name="month" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                <option value=""></option>
                                <option value="1">January</option>
                                <option value="2">February</option>
                                <option value="3">March</option>
                                <option value="4">April</option>
                                <option value="5">May</option>
                                <option value="6">June</option>
                                <option value="7">July</option>
                                <option value="8">August</option>
                                <option value="9">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                        </div>
                        <div class="mt-4 w-full px-2">
                            <label for="year" class="text-left block text-sm text-gray-700 capitalize white:text-gray-200">Year</label>
                            @php $current_year = date("Y") @endphp
                            <select type="text" name="year" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                <option value=""></option>
                                @for($x=2022;$x<=$current_year;$x++)
                                    <option value="{{ $x }}">{{ $x }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                
                    <div class="mt-4 px-2">
                        <label for="" class="text-left block text-sm text-gray-700 capitalize white:text-gray-200">Schedule Type</label>
                        <select type="text" id="sched_type" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            <option value="" selected>Select Type</option>
                            <option value="regular" >Regular</option>
                            <option value="shifting" >Shifting</option>
                        </select>
                    </div>
                    
                    <div class="flex ">
                        <div class="mt-4 w-full px-2">
                            <label class="text-left block text-sm text-gray-700 capitalize white:text-gray-200">Schedule Name</label>
                            <select type="text" name="schedule" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                <option value=""></option>
                                @foreach($schedule AS $sc)
                                <option value="{{ $sc->id }}">{{ $sc->schedule_code . " - " . $sc->time_in . " to " . $sc->time_out }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div> 
                    <div class="hidden" id="regulars">
                        <div class="flex ">
                            <div class="mt-4 w-full px-2">
                                <label class="text-left block text-sm text-gray-700 capitalize white:text-gray-200">
                                    Rest Day 1
                                </label>
                                <select type="text" name="rest_day1" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                    <option value=""></option>
                                    <option value="Sunday">Sunday</option>
                                    <option value="Monday">Monday</option>
                                    <option value="Tuesday">Tuesday</option>
                                    <option value="Wednesday">Wednesday</option>
                                    <option value="Thursday">Thursday</option>
                                    <option value="Friday">Friday</option>
                                    <option value="Saturday">Saturday</option>
                                </select>
                            </div>
                            <div class="mt-4 w-full px-2">
                                <label for="email" class="block text-sm text-gray-700 capitalize white:text-gray-200">Rest Day 2</label>
                                <select type="text" name="rest_day2" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                    <option value=""></option>
                                    <option value="Sunday">Sunday</option>
                                    <option value="Monday">Monday</option>
                                    <option value="Tuesday">Tuesday</option>
                                    <option value="Wednesday">Wednesday</option>
                                    <option value="Thursday">Thursday</option>
                                    <option value="Friday">Friday</option>
                                    <option value="Saturday">Saturday</option>
                                </select>
                            </div>
                        </div>
                        <div x-data="{show: false}">
                            <div class="flex ">
                                <div class="mt-4 w-full px-2 flex">
                                    <div class="flex items-center">
                                        <input name="alternate checked id="checked-checkbox" id="alternating" type="checkbox"  x-model="show" value="" class=" w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                        <label for="checked-checkbox" class="ml-2 text-sm font-medium text-gray-900 white:text-gray-300">Alternate Schedule</label>
                                    </div>
                                </div>
                            </div>

                            <div class="" x-show="show">
                                <div class="mt-4 px-2">
                                    <label for="" class="block text-sm text-gray-700 capitalize white:text-gray-200">Which Rest Day</label>
                                    <select name="alternate_RD" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                        <option value="rd1">Rest Day 1</option>
                                        <option value="rd2">Rest Day 2</option>
                                    </select>   
                                </div>
                                <div class="mt-4 px-2">
                                    <label for="restdays" class="block text-sm text-gray-700 capitalize white:text-gray-200">Alternate Week</label>
                                    <select name="restdays" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                        <option value="rd_option1">1,3,5</option>
                                        <option value="rd_option2">2,4</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <label class="text-left px-2 mt-4 block text-sm text-gray-700 capitalize white:text-gray-200">
                            Add Employee
                        </label>
                        <div class="flex ">
                            <div class="w-full px-2">
                                <input class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            </div>
                            <div class="px-2">
                                <button type="button" class="mt-3 py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" title="Add Employee"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                    </svg>      
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="hidden" id="shiftings">
                        <div class="flex ">
                            <div class="mt-4 w-full px-2">
                                <label class="text-left block text-sm text-gray-700 capitalize white:text-gray-200">
                                    Employee
                                </label>
                                <select class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                    <option value="" selected>Select Employee</option>
                                </select>
                            </div>
                            <div class="px-2 pt-9">
                                <button type="button" class="mt-3 py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" title="Add Employee"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                    </svg>      
                                </button>
                            </div>
                        </div>
                        <div class="flex ">
                            <div class="mt-4 w-full px-2">
                                <label class="text-left block text-sm text-gray-700 capitalize white:text-gray-200">
                                    Rest Day 1
                                </label>
                                <input type="date" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            </div>
                            <div class="mt-4 w-full px-2">
                                <label class="text-left block text-sm text-gray-700 capitalize white:text-gray-200">
                                    Rest Day 2
                                </label>
                                <input type="date" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            </div>
                            <div class="mt-4 w-full px-2">
                                <label class="text-left block text-sm text-gray-700 capitalize white:text-gray-200">
                                    Rest Day 3
                                </label>
                                <input type="date" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            </div>
                        </div>
                        <div class="flex ">
                            <div class="mt-4 w-full px-2">
                                <label class="text-left block text-sm text-gray-700 capitalize white:text-gray-200">
                                    Employee
                                </label>
                                <select class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                    <option value="" selected>Select Employee</option>
                                </select>
                            </div>
                            <div class="px-2 pt-9">
                                <button type="button" class="mt-3 py-2 px-2 text-xs font-medium text-center text-white transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" title="Add Employee"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                    </svg>      
                                </button>
                            </div>
                        </div>
                        <div class="flex ">
                            <div class="mt-4 w-full px-2">
                                <label class="text-left block text-sm text-gray-700 capitalize white:text-gray-200">
                                    Rest Day 1
                                </label>
                                <input type="date" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            </div>
                            <div class="mt-4 w-full px-2">
                                <label class="text-left block text-sm text-gray-700 capitalize white:text-gray-200">
                                    Rest Day 2
                                </label>
                                <input type="date" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            </div>
                            <div class="mt-4 w-full px-2">
                                <label class="text-left block text-sm text-gray-700 capitalize white:text-gray-200">
                                    Rest Day 3
                                </label>
                                <input type="date" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            </div>
                        </div>
                        {{-- <div class="flex ">
                            <div class="mt-4 w-full px-2">
                                <label class="text-left block text-sm text-gray-700 capitalize white:text-gray-200">
                                    Rest Day 2
                                </label>
                                <input type="date" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            </div>
                        </div>
                        <div class="flex ">
                            <div class="mt-4 w-full px-2">
                                <label class="text-left block text-sm text-gray-700 capitalize white:text-gray-200">
                                    Rest Day 3
                                </label>
                                <input type="date" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            </div>
                        </div> --}}
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