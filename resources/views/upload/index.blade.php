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
                        <h2 class="uppercase font-semibold py-2">Upload Allowance</h2>
                    </div>
                    <div class="flex">
                        <div x-data="{ modelOpen: false }">
                            <a href="#" @click="modelOpen =!modelOpen" type="button" >
                                <div class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white transition-colors duration-200 transform bg-emerald-500 rounded-3xl white:bg-emerald-600 white:hover:bg-emerald-700 white:focus:bg-emerald-700 hover:bg-emerald-600 focus:outline-none focus:bg-emerald-500 focus:ring focus:ring-emerald-300 focus:ring-opacity-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15M9 12l3 3m0 0l3-3m-3 3V2.25" />
                                    </svg>                                      
                                    <span>Download</span>
                                </div>
                            </a>
                          
                                <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                                    <div x-cloak @click="modelOpen = false"  
                                        x-transition:enter="transition ease-out duration-300 transform"
                                        x-transition:enter-start="opacity-0" 
                                        x-transition:enter-end="opacity-100"
                                        x-transition:leave="transition ease-in duration-200 transform"
                                        x-transition:leave-start="opacity-100" 
                                        x-transition:leave-end="opacity-0"
                                        class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"
                                    ></div>
                    
                                    <div x-cloak
                                        x-transition:enter="transition ease-out duration-300 transform"
                                        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                                        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                        x-transition:leave="transition ease-in duration-200 transform"
                                        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                                        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                        class="inline-block w-full max-w-lg p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl lg:max-w-lg"
                                    >
                                        <div class="flex items-center justify-between space-x-4">
                                            <h1 class="text-xl font-medium text-gray-800 ">Download Allowance Format</h1>
                                            <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            </button>
                                        </div>
                                    
                                        <form method="POST" action="{{ route('export-allowance') }}">
                                            @csrf
                                        <div class="flex justify-between space-x-2 my-5">
                                            <div class="w-1/2">
                                                <label for="" class="text-sm">Date From:</label>
                                                <input type="date" name="from" class="text-left text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-3xl focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                            </div>
                                            <div class="w-1/2">
                                                <label for="" class="text-sm">Date To:</label>
                                                <input type="date" name="to" class="text-left text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-3xl focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                            </div>
                                        </div>
                                        <div class="my-2">
                                            <button type="submit" class="flex items-center justify-center px-3 py-2 text-sm tracking-wide text-white transition-colors duration-200 transform bg-emerald-500 rounded-3xl white:bg-emerald-600 white:hover:bg-emerald-700 white:focus:bg-emerald-700 hover:bg-emerald-600 focus:outline-none focus:bg-emerald-500 focus:ring focus:ring-emerald-300 focus:ring-opacity-50 w-full" >Download</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <label for="table-search" class="sr-only">Search</label>
                       
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
                       
                    </div>
                   
                </div>
                <form class="items-center" method="POST" action="{{ route('import') }}" enctype="multipart/form-data">   
                        @csrf    
                        @if(Session::has('success'))
                    <div class="mb-5 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                        <span class="block sm:inline">{{Session::get('success')}}</span>
                    </div>
                    @endif
                    @if(Session::has('fail'))
                        <div class="mb-5 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <span class="block sm:inline">{{Session::get('fail')}}</span>
                        </div>
                    @endif
                <div class="flex justify-between mb-5"> 
                    <div class="flex justify-center pb-1 pt-2 bg-white white:bg-gray-900">
                        <div class="mx-2 text-left">
                            <input type="date" name="from" class="text-sm block  px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 ">
                        </div>
                        <div class="mx-2 text-left">
                            <input type="date" name="to" class="text-sm block px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 ">
                        </div>
                        <div class="mx-2 text-left">
                        <select name="allowance_id" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 ">
                            <option value="" selected>Allowance</option>
                            @foreach($allowances AS $a)
                            <option value="{{ $a->id }}">{{ $a->allowance_name }}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="flex justify-center pb-1 pt-2 bg-white white:bg-gray-900">
                        <div class="mx-2 text-left">
                            <input type="file" name="allowance" class="text-sm block w-full px-1 py-1 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 w-60">
                        </div>
                        <div class="mx-2 text-left">
                            <button type="submit" class="flex items-center justify-center px-3 py-2 mx-2 mt-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">Upload</button>
                        </div>
                    </div>
                </div>
                </form>

                <form method="POST" action="{{ route('uploadallowance.store') }}">
                    @csrf
                <div class=" hover:overflow-x-auto overflow-x-hidden h-100 max-h-100 pt-2 pr-2 pl-2 mt-3 md:pt-0 md:pr-0 md:pl-0 border">
                    <table class="text-sm text-left text-gray-500 white:text-gray-400 border border-gray-200 border-collapse">
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
                                <th scope="col" class="py-2 px-2" width="15%">
                                    Total Days
                                </th>
                                <th scope="col" class="py-2 px-2" width="15%">
                                    Allowance Amount
                                </th>
                                <th scope="col" class="py-2 px-2" width="15%">
                                    OT
                                </th>
                                <th scope="col" class="py-2 px-2" width="15%">
                                    Total Amount
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                           @php $total_days=0;
                           $ot_amount=0;
                           $counter = 1; @endphp
                            @foreach($data AS $all)
                                @php $d1 = getTimeDiff($all['d1_in'],$all['d1_out']) @endphp
                                @php $d2 = getTimeDiff($all['d2_in'],$all['d2_out']) @endphp
                                @php $d3 = getTimeDiff($all['d3_in'],$all['d3_out']) @endphp
                                @php $d4 = getTimeDiff($all['d4_in'],$all['d4_out']) @endphp
                                @php $d5 = getTimeDiff($all['d5_in'],$all['d5_out']) @endphp
                                @php $d6 = getTimeDiff($all['d6_in'],$all['d6_out']) @endphp
                                @php $d7 = getTimeDiff($all['d7_in'],$all['d7_out']) @endphp

                                @php 
                                 
                                if($d1!=0){
                                    $total_days++;
                                    } if($d2!=0){
                                    $total_days++;
                                    }if($d3!=0){
                                    $total_days++;
                                    }if($d4!=0){
                                    $total_days++;
                                    }if($d5!=0){
                                    $total_days++;
                                    }if($d6!=0){
                                    $total_days++;
                                    }if($d7!=0){
                                    $total_days++;
                                    }

                                    if($d1 >= 14){
                                    $ot_amount+=50;
                                    } if($d2>=14){
                                    $ot_amount+=50;
                                    }if($d3>=14){
                                    $ot_amount+=50;
                                    }if($d4>=14){
                                    $ot_amount+=50;
                                    }if($d5>=14){
                                    $ot_amount+=50;
                                    }if($d6>=14){
                                    $ot_amount+=50;
                                    }if($d7>=14){
                                    $ot_amount+=50;
                                    }

                                    $total_amount = ($total_days * $all['rate'])+$ot_amount;
                                @endphp
                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white">
                                 {{ $all['fullname'] }}
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <div x-data="{ tooltip: false }" class=" z-30 inline-flex">
                                        <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                            {{ $d1 }}
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                           {{ $all['d1_in'] . " - " . $all['d1_out']}}
                                            </div>
                                            <svg class="absolute z-10 w-6 h-6 text-white transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <div x-data="{ tooltip: false }" class=" z-30 inline-flex">
                                        <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                        {{ $d2 }}
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            {{ $all['d2_in'] . " - " . $all['d2_out']}}
                                            </div>
                                            <svg class="absolute z-10 w-6 h-6 text-white transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <div x-data="{ tooltip: false }" class=" z-30 inline-flex">
                                        <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                        {{ $d3 }} 
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            {{ $all['d3_in'] . " - " . $all['d3_out']}}
                                            </div>
                                            <svg class="absolute z-10 w-6 h-6 text-white transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <div x-data="{ tooltip: false }" class=" z-30 inline-flex">
                                        <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                        {{ $d4 }}  
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            {{ $all['d4_in'] . " - " . $all['d4_out'] }}
                                            </div>
                                            <svg class="absolute z-10 w-6 h-6 text-white transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <div x-data="{ tooltip: false }" class=" z-30 inline-flex">
                                        <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                        {{ $d5 }}   
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            {{ $all['d5_in'] . " - " . $all['d5_out'] }}
                                            </div>
                                            <svg class="absolute z-10 w-6 h-6 text-white transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <div x-data="{ tooltip: false }" class=" z-30 inline-flex">
                                        <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                        {{ $d6 }}  
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            {{ $all['d6_in'] . " - " . $all['d6_out'] }}
                                            </div>
                                            <svg class="absolute z-10 w-6 h-6 text-white transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <div x-data="{ tooltip: false }" class=" z-30 inline-flex">
                                        <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                        {{ $d7 }}
                                        </div>
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip" style="left:25px;bottom:10px">
                                            <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-gray transform -translate-x-1/2 -translate-y-full bg-white rounded-lg shadow-lg">
                                            {{ $all['d7_in'] . " - " . $all['d7_out'] }}
                                            </div>
                                            <svg class="absolute z-10 w-6 h-6 text-white transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <input type="text" id="total_days_{{ $counter }}" name="total_days[]" onblur="autocalculate({{ $counter }})" value="{{ $total_days }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500 ">
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <input type="text" id="rate_{{ $counter }}" name="rate[]" value="{{ $all['rate'] }}" onblur="autocalculate({{ $counter }})" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500 ">
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <input type="text" id="ot_amount_{{ $counter }}" name="ot_amount[]" value="{{ $ot_amount }}" onblur="autocalculate({{ $counter }})" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500 ">
                                </td>
                                <td scope="row" class="py-2 px-2 font-medium text-gray-900 whitespace-nowrap white:text-white" align="center">
                                    <input type="text" id="total_amount_{{ $counter }}" name="total_amount[]" value="{{ $total_amount }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500 ">
                                </td>
                            </tr>
                            <input type="hidden" name="employee_id[]" value="{{ $all['emp_id'] }}">
                            <input type="hidden" name="personal_id[]" value="{{ $all['personal_id'] }}">
                            <input type="hidden" name="day1[]" value="{{ $all['d1_in'] . '-' . $all['d1_out'] }}">
                            <input type="hidden" name="day2[]" value="{{ $all['d2_in'] . '-' . $all['d2_out'] }}">
                            <input type="hidden" name="day3[]" value="{{ $all['d3_in'] . '-' . $all['d3_out'] }}">
                            <input type="hidden" name="day4[]" value="{{ $all['d4_in'] . '-' . $all['d4_out'] }}">
                            <input type="hidden" name="day5[]" value="{{ $all['d5_in'] . '-' . $all['d5_out'] }}">
                            <input type="hidden" name="day6[]" value="{{ $all['d6_in'] . '-' . $all['d6_out'] }}">
                            <input type="hidden" name="day7[]" value="{{ $all['d7_in'] . '-' . $all['d7_out'] }}">
                            <input type="hidden" name="d1[]" value="{{ $d1 }}">
                            <input type="hidden" name="d2[]" value="{{ $d2 }}">
                            <input type="hidden" name="d3[]" value="{{ $d3 }}">
                            <input type="hidden" name="d4[]" value="{{ $d4 }}">
                            <input type="hidden" name="d5[]" value="{{ $d5 }}">
                            <input type="hidden" name="d6[]" value="{{ $d6 }}">
                            <input type="hidden" name="d7[]" value="{{ $d7 }}">
                            @php $total_days=0; $ot_amount=0; $counter++; @endphp
                           @endforeach
                        </tbody>
                    </table>
                   
                       <input type="hidden" id="counter" name="counter" value="{{ $counter }}">          
                        <input type="hidden" name="date_from" value="{{ $post_data['from'] }}">
                        <input type="hidden" name="date_to" value="{{ $post_data['to'] }}">
                        <input type="hidden" name="allowance_name" value="{{ $post_data['allowance_id'] }}">
                  
                </div>
                <button class="flex items-center w-full justify-center px-3 py-2 mx-2 mt-3 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">Save</button>
            </div>
             </form>
        </div>
    </div>
</x-app-layout>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
<script>  
  
    function autocalculate(counter){
   
         var total_days= document.getElementById('total_days_'+counter).value;
     
        var rate= document.getElementById('rate_'+counter).value
        var ot_amount= document.getElementById('ot_amount_'+counter).value

        var total_amount = (parseInt(total_days) * parseFloat(rate)) + parseFloat(ot_amount);
      
        document.getElementById('total_amount_'+counter).value = total_amount;

}

</script>  
