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
                        <h2 class="uppercase font-semibold py-2">ot List</h2>
                    </div>
                    <div class="flex">
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 white:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                            </div>
                            <input type="text" id="table-search-users" class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-2xl border border-gray-300 focus:ring-blue-500 focus:border-blue-500 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500" placeholder="Search">
                        </div>
                    </div>
                </div>
                <form method="GET">
                    <div class="flex justify-center pb-1 pt-2 bg-white white:bg-gray-900">
                        <div class="mx-2 text-left">
                            <select name="month" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 w-60">
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
                            <select name="year" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 w-60">
                                <option value="">Select Year</option>
                                @php
                                    $year=date('Y');
                                @endphp
                                @for($y=2015;$y<=$year;$y++)
                                    <option value="{{ $y }}">{{ $y }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="mx-2 text-left">
                            <select name="period" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 w-60">
                                <!-- <option value="" selected>Period</option> -->
                                <option value="">--Select Period--</option>
                                @foreach($cutoff AS $ca)
                                <option value="{{$ca->cutoff_type."|".$ca->cutoff_start."-".$ca->cutoff_end}}">{{$ca->cutoff_type}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mx-2 pt-3 text-left">
                            <button type="submit" class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                <span>Generate</span>
                            </button>
                        </div>
                    </div>
                </form>
                <div class="overflow-x-auto overflow-y-hidden hover:overflow-y-auto h-100 relative max-h-100 pt-2 pr-2 pl-2 mt-3 md:pt-0 md:pr-0 md:pl-0 sm:rounded-2xl">
                    <table class="w-full text-sm text-left text-gray-500 white:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 white:bg-gray-700 white:text-gray-400 sticky top-0 z-10">
                            <tr class="">
                                <th scope="col" class="py-3 px-6" width="30%">
                                    Employee Name
                                </th>
                                <th scope="col" class="py-3 px-6" width="20%">
                                    Tentative OT Hours
                                </th>
                                <th scope="col" class="py-3 px-6" width="20%">
                                    OT Hours
                                </th>
                                <th scope="col" class="py-3 px-6" width="15%">
                                    Amount
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($timekeeping AS $e)
                                @php
                                    $data2 = array();
                                    foreach($timedate AS $value){
                                        if($value->personal_id==$e->personal_id){
                                            $key = date('Y-m-d',strtotime($value->recorded_time));
                                            if(!isset($data2[$key])) {   
                                                $data2[$key] = array(
                                                    'personal_id'=>$value->personal_id,
                                                    'time_in'=>$value->time_in,
                                                    'recorded_time' => array(),
                                                );
                                            }        
                                            $data2[$key]['recorded_time'][] = date('H:i',strtotime($value->recorded_time)).",";  
                                        }
                                    }
                                    $total_hours=[];
                                    $total_min=[];
                                    $overall_time=[];
                                @endphp
                                @foreach($data2 AS $logs)
                                    @php 
                                        $exp=implode("",$logs['recorded_time']);
                                        $exp_time = explode(',', $exp); 
                                        $date1 = new DateTime($logs['time_in']);
                                        $date2 = new DateTime($exp_time[1]);
                                        $break='01:00';
                                        $breakBits = explode(":", $break);
                                        $date1->modify($breakBits[0]." hour ".$breakBits[1]." minutes");
                                        $interval = $date2->diff($date1);
                                        $hours   = $interval->format('%h'); 
                                        $minutes = $interval->format('%i');
                                        if($hours>=8 && $minutes>=30){
                                            $total_hours[]=$interval->format("%H:%I");
                                            $total_min[]=$interval->format("%i");
                                        }
                                    @endphp
                                @endforeach
                                @if(!empty($total_min))
                                    <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                                        <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                            {{ $e->full_name }}
                                        </td>
                                        <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                            <a href="{{ route('ot.create') }}"  class="my-1  py-2" title="Update">
                                                {{ round(abs(array_sum($total_min)) / 60,2)." hrs." }}
                                            </a> 
                                        </td>
                                        <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                            150
                                        </td>
                                        <td scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                            150
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
