<x-app-layout>
    <x-slot name="header"></x-slot>
    <!-- component -->
    <style>
        [x-cloak] {
        display: none;
        }
    </style>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> Jason_DashboardUI
    <!-- Main modal -->
    <div id="cancelModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="inline-block w-full max-w-lg p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl lg:max-w-lg">
            <!-- Modal content -->
            <div class="relative ">
                <form action="{{ route('cancel_sched') }}" method='POST'>
                    @csrf
                    <div class="">
                        <div class="px-2">
                            <label for="cancel_date" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Cancellation Date</label>
                            <input type='date' name="cancel_date" id="cancel_date" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                        </div>
                        <div class="px-2">
                            <label for="cancel_reason" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Reason For Cancellation</label>
                            <textarea name="cancel_reason" id="cancel_reason" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40"></textarea>
                        </div>
                        <div class="flex justify-end px-2 space-x-1 mt-1">
                            <input type='hidden' name="checker_id" id='checker_id'>
                            <button type="button" data-modal-hide="cancelModal" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-gray-300 rounded-2xl white:bg-gray-400 white:hover:bg-gray-500 white:focus:bg-gray-500 hover:bg-gray-400 focus:outline-none focus:bg-gray-300 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                Cancel
                            </button>
                            <button type="submit" data-modal-hide="cancelModal" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-500 rounded-2xl white:bg-red-600 white:hover:bg-red-700 white:focus:bg-red-700 hover:bg-red-600 focus:outline-none focus:bg-red-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                Confirm
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>     
<<<<<<< HEAD
=======
=======
           
>>>>>>> 25c1ed314941e9c72afe617b7fd45db92cf68dc8
>>>>>>> Jason_DashboardUI
    <div class="p-4 relative h-full w-full text-center my-10 bg-white rounded-2xl shadow-lg white:bg-gray-800 white:border-gray-700">
        <div class="flex justify-between  pb-4 bg-white white:bg-gray-900">
            <div > 
                <h2 class="uppercase font-semibold py-2">Change Schedule</h2>
            </div>
            <div class="flex">
                <a href="{{ route('changeSched.create') }}" type="button" >
                    <div class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white transition-colors duration-200 transform bg-indigo-500 rounded-3xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                        <span>Add New</span>
                    </div>
                </a>
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
        <div class="overflow-x-auto relative  sm:rounded-2xl">
            <table class="w-full text-sm text-left text-gray-500 white:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 white:bg-gray-700 white:text-gray-400 sticky top-0">
                    <tr class="">
                        <th scope="col" class="py-3 px-6" width="%">
                            Date Applied
                        </th>
                        <th scope="col" class="py-3 px-6" width="%">
                            Employee
                        </th>
                        <th scope="col" class="py-3 px-6" width="%">
                            Month
                        </th>
                        <th scope="col" class="py-3 px-6" width="%">
                            Year
                        </th>
                        <th scope="col" class="py-3 px-6" width="%">
                            New Schedule
                        </th>
                        <th scope="col" class="py-3 px-6" width="%">
                            Start Date
                        </th>
                        <th scope="col" class="py-3 px-6" width="%">
                            End Date
                        </th>
                        <th scope="col" class="py-3 px-6" width="5%" align="center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </th>
                    </tr>
                </thead>
                <tbody class="sticky top-12">
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> Jason_DashboardUI
                    @if(!empty($change_sched))
                        @foreach($change_sched AS $cs)
                        @php 
                            $exp=explode('-',$cs->month_year);
                            $year=$exp[0];
                            $month=$exp[1];
                        @endphp
                        <tr class=" border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                            <td class="py-3 px-6">{{date('F d,Y',strtotime($cs->date_applied))}}</td>
                            <td class="py-3 px-6">{{$cs->full_name}}</td>
                            <td class="py-3 px-6">{{date('F',strtotime($month))}}</td>
                            <td class="py-3 px-6">{{$year}}</td>
                            <td class="py-3 px-6">{{date('H:i A',strtotime($cs->time_in))."-".date('H:i A',strtotime($cs->time_out))}}</td>
                            <td class="py-3 px-6">{{date('F d,Y',strtotime($cs->start_date))}}</td>
                            <td class="py-3 px-6">{{date('F d,Y',strtotime($cs->end_date))}}</td>
                            <td class="py-3 px-6 flex justify-center space-x-1" align="center">
                                <a href="{{ route('changeSched.edit', $cs->id) }}" class="" title="Update">
                                    <div class="py-2 px-2 text-xs font-medium text-center text-white transition-colors bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                            <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                            <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                        </svg>
                                    </div>
                                </a>
                                <button id="check_id" data-modal-target="cancelModal" data-modal-toggle="cancelModal" class="py-2 px-2 text-xs font-medium text-center text-white bg-red-500 rounded-2xl hover:bg-red-400 focus:ring-4 focus:outline-none focus:ring-blue-300 white:bg-blue-600 white:hover:bg-red-500 white:focus:ring-blue-800" type="button" data-id='{{$cs->id}}'>
                                    Cancel
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    @endif
<<<<<<< HEAD
=======
=======
                    <tr class=" border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                        <td class="py-3 px-6">asd</td>
                        <td class="py-3 px-6">asd</td>
                        <td class="py-3 px-6">asd</td>
                        <td class="py-3 px-6">asd</td>
                        <td class="py-3 px-6">asd</td>
                        <td class="py-3 px-6"></td>
                        <td class="py-3 px-6"></td>
                        <td class="py-3 px-6 flex justify-center space-x-1" align="center">
                            <a href="{{ route('changeSched.edit', 1) }}" class="" title="Update">
                                <div class="py-2 px-2 text-xs font-medium text-center text-white transition-colors bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                        <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                        <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                    </svg>
                                </div>
                            </a>
                        </td>
                    </tr>
>>>>>>> 25c1ed314941e9c72afe617b7fd45db92cf68dc8
>>>>>>> Jason_DashboardUI
                </tbody>
            </table>
        </div>


    </div>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> Jason_DashboardUI
<script>
    $(document).on("click", "#check_id", function () {
        var check_id = $(this).attr("data-id");
        $("#checker_id").val(check_id);
    });
</script>
<<<<<<< HEAD
=======
=======

    
        
>>>>>>> 25c1ed314941e9c72afe617b7fd45db92cf68dc8
>>>>>>> Jason_DashboardUI
</x-app-layout>
