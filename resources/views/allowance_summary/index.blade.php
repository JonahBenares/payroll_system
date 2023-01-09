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
            <div class="p-4 relative h-full w-full text-center bg-white rounded-lg shadow-lg white:bg-gray-800 white:border-gray-700">
                <div class="flex justify-between  pb-4 bg-white white:bg-gray-900">
                    <div > 
                        <h2 class="uppercase font-semibold py-2">Allowance Summary</h2>
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
                <form class="items-center" method="GET"> 
                @csrf
                    <div class="flex justify-center pb-1 pt-2 bg-white white:bg-gray-900 space-x-1">
                       
                        <div>
                            <select name="allowance_id" id="allowance_dropdown" class="text-sm block w-80 px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 ">
                                <option value="" selected>-Select Allowance-</option>
                                @foreach($allowance as $all)
                                <option value="{{ $all->id }}">{{ $all->allowance_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <select name="period" id="period_dropdown" class="text-sm block w-80 px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 ">
                              
                            </select>
                        </div>
                       
                        <div>
                            <button type="submit" class="flex items-center justify-center px-3 py-2 mt-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">Filter</button>
                        </div>
                    </div>
                    <div class=" hover:overflow-x-auto overflow-x-hidden h-100 max-h-100 pt-2 pr-2 pl-2 mt-3 md:pt-0 md:pr-0 md:pl-0 border">
                        <table class="text-sm text-left text-gray-500 white:text-gray-400 border-collapse">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 white:bg-gray-700 white:text-gray-400">
                                <tr class="">
                                    <th scope="col" class="py-2 px-2 w-1/4">
                                        Employee Name
                                    </th>
                                    <th scope="col" class="py-2 px-2" align="center">
                                        D1 
                                    </th>
                                    <th scope="col" class="py-2 px-2" align="center">
                                        D2 
                                    </th>
                                    <th scope="col" class="py-2 px-2" align="center">
                                        D3 
                                    </th>
                                    <th scope="col" class="py-2 px-2" align="center">
                                        D4 
                                    </th>
                                    <th scope="col" class="py-2 px-2" align="center">
                                        D5 
                                    </th>
                                    <th scope="col" class="py-2 px-2" align="center">
                                        D6 
                                    </th>
                                    <th scope="col" class="py-2 px-2" align="center">
                                        D7
                                    </th>
                                    <th scope="col" class="py-2 px-2" align="center" width="15%">
                                        Total Days
                                    </th>
                                    <th scope="col" class="py-2 px-2" align="right" width="15%">
                                        Allowance Amount
                                    </th>
                                    <th scope="col" class="py-2 px-2" align="right" width="15%">
                                        Overtime
                                    </th>
                                    <th scope="col" class="py-2 px-2" align="right" width="15%">
                                        Total Amount
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($details AS $det)
                                <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                                    <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                        {{ getEmployeeName($det->employee_id) }}
                                    </td>

                                    @foreach(getAllowanceTime($det->allowance_head_id, $det->id) AS $time)
                                    <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                        <div x-data="{ tooltip: false }" class=" z-30 inline-flex">
                                            <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                            {{ $time->time_hours }}
                                            </div>
                                            <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                                <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                                {{ $time->time_in . ' - ' . $time->time_out }}
                                                </div>
                                                <svg class="absolute z-10 w-6 h-6 text-white transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                                <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                                </svg>
                                            </div>
                                        </div>
                                    </td>
                                    @endforeach
                                    <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                        <input type="text" class="bg-transparent border-0 text-gray-900 text-sm block w-full p-2.5 text-center" disabled value="{{ $det->total_days }}">
                                    </td>
                                    <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                        <input type="text"  class="bg-transparent border-0 text-gray-900 text-sm block w-full p-2.5 text-right" disabled value="{{ $det->allowance_amount }}">
                                    </td>
                                    <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                        <input type="text" class="bg-transparent border-0 text-gray-900 text-sm block w-full p-2.5 text-right" disabled value="{{ $det->OT_allowance_amount }}">
                                    </td>
                                    <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                        <input type="text" name="total_amount[]" class="bg-transparent border-0 text-gray-900 text-sm block w-full p-2.5 text-right" disabled value="{{ $det->total_allowance }}">
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    </div>
            </form>
        </div>
    </div>
</x-app-layout>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function () {

        $('#allowance_dropdown').on('change', function () {
            var allowanceid = this.value;
          
            $("#period_dropdown").html('');
            $.ajax({
                url: "{{url('api/fetch-period')}}",
                type: "POST",
                data: {
                    allowanceid: allowanceid,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (result) {
                    $('#period_dropdown').html('<option value="">-- Select Period --</option>');
                    $.each(result.period, function (key, value) {
                        $("#period_dropdown").append('<option value="' + value
                            .id + '">'+ value.from_date + ' to ' + value.to_date + ' (' + value.bu_name + ') </option>');
                    });
                   
                }
            });
        });
    });

</script>