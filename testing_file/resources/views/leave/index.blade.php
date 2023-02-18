<x-app-layout>
    <x-slot name="header"></x-slot>
    <div class="overflow-auto h-screen pb-28 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
        <div class="flex flex-col flex-wrap sm:flex-row ">
            <div class="p-4 relative h-full w-full text-center bg-white rounded-lg shadow-lg white:bg-gray-800 white:border-gray-700">
                <div class="flex justify-between pb-2 bg-white white:bg-gray-900">
                    <div > 
                        <h2 class="uppercase font-semibold py-2">Leave/Failure to Login List</h2>
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
                <form method='GET'>
                <div class="flex justify-center pb-1 pt-2 bg-white white:bg-gray-900">
                    <div class="mx-2 text-left">
                        <select name="month" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 w-60">
                            <option value="" selected>Select Month</option>
                            <option value="01">January</option>
                            <option value="02">February</option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                    </div>
                    <div class="mx-2 text-left">
                        <select name="year" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 w-60">
                        <option value="" selected>Select Year</option>
                            {{  $start_year = 2022 }}
                            {{   $current_year = date("Y")  }}
                            
                                @for($y=$start_year; $y<=$current_year; $y++)
                                <option value="{{ $y }}">{{ $y }}</option>
                                @endfor
                        </select>
                    </div>
                    <div class="mx-2 text-left">
                        <select name="period" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 w-60">
                            <option value="" selected>Period</option>
                            @foreach($cutoff as $c)
                            <option value="{{ $c->cutoff_type }}">{{ $c->cutoff_type }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mx-2 pt-2 text-left">
                        <button type='submit' class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-3xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                            <span>Generate</span>
                        </button>
                    </div>
                </div>
                </form>
                <div class="flex mt-5 uppercase">
                    <p class="text-left text-md uppercase text-gray-600 pt-2 leading-none"><span class="font-bold pr-1">{{ date("F", mktime(0, 0, 0, $month, 1));}}</span>{{ $year }} <span class="text-xs">- {{ $period }} </span></p>
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
                        @foreach($leave as $l)
                        @if($l->count_absent !='0' || $l->count_ftl !='0' || $l->count_undertime !='0')
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                {{ $l->full_name }}
                                </td>
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                {{ $l->count_absent }}
                                </td>
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                {{ $l->count_ftl }}
                                </td>
                                <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                {{ $l->count_undertime }}
                                </td>
                                <td class="py-3 px-6 justify-between flex" align="center">
                                    <a href="{{ route('leavefailure.edit',$l->leave_filing_head_id) }}" class="" title="View">
                                        <div class="py-2 px-2 text-xs font-medium text-center text-white transition-colors bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                        </div>
                                    </a>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>

    
        
</x-app-layout>
