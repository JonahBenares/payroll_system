<x-app-layout>
    <x-slot name="header"></x-slot>
    <!-- component -->
    <style>
        [x-cloak] {
        display: none;
        }
    </style>
    
      
    <!-- Main modal -->
    <div id="unfiledModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="inline-block w-full max-w-lg p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl lg:max-w-lg">
            <!-- Modal content -->
            <div class="relative ">
                <div class="">
                    <div class="flex justify-between">
                        <div class="w-3/12 ">
                            <span class="text-red-500 ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-24 h-24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                                </svg>
                            </span>
                        </div>
                        <div class="w-9/12">
                            <p class="text-red-500 text-2xl font-bold mb-2">Warning</p>
                            <span class="text-lg leading-none">Are you sure you dont want to file this (Type of Leave/Failure) (Date)?</span>
                        </div>
                    </div>
                    <div class="flex justify-end px-2 space-x-1 mt-1">
                        <button type="button" data-modal-hide="unfiledModal" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-gray-300 rounded-2xl white:bg-gray-400 white:hover:bg-gray-500 white:focus:bg-gray-500 hover:bg-gray-400 focus:outline-none focus:bg-gray-300 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                            Cancel
                        </button>
                        <button type="submit" data-modal-hide="unfiledModal" value="Save" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-500 rounded-2xl white:bg-red-600 white:hover:bg-red-700 white:focus:bg-red-700 hover:bg-red-600 focus:outline-none focus:bg-red-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                            Confirm
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="overflow-auto h-screen pb-28 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
        <div class="flex flex-col flex-wrap sm:flex-row ">
            <div class="p-4 relative h-full w-full text-center bg-white rounded-lg shadow-lg white:bg-gray-800 white:border-gray-700">
                <div class="flex justify-between pb-2 bg-white white:bg-gray-900">
                    <div > 
                        <h2 class="uppercase font-semibold py-2 flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>
                            <span class="ml-2"> {{ $employee->full_name }} </span>
                        </h2>
                    </div>
                    <div class="flex">
                        <a href="{{ route('leavefailure.index') }}"   type="button">
                            <div class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white transition-colors duration-200 transform bg-indigo-500 rounded-3xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                <span>Show List</span>
                            </div>
                        </a>
                    </div>
                </div>
                @php  $id=Request::segment(2) @endphp
                <form action="{{ route('leavefailure.update',$id) }}" method='POST'>
                @csrf
                @method("PUT")
                    
                    <div class="overflow-x-auto relative">
                        <table class="w-full text-sm text-left text-gray-500 white:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 white:bg-gray-700 white:text-gray-400">
                                <tr>
                                    <th scope="col" class="py-3 px-3" width="4%">
                                        <input type="checkbox" value="" id="selectAll" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                        <input type='hidden'class="form-control" type="checkbox" id="selectAll">
                                    </th>
                                    <th scope="col" class="py-3 px-3" width="10%">
                                        Date
                                    </th>
                                    <th scope="col" class="py-3 px-3" width="20%">
                                         Total Undertime Minutes
                                    </th>
                                    <th scope="col" class="py-3 px-3" width="20%">
                                        Date Filed
                                    </th>
                                    <th scope="col" class="py-3 px-3" width="11%" align="center">
                                        With Pay
                                    </th>
                                    <th scope="col" class="py-3 px-3" width="10%">
                                        Percentage
                                    </th>
                                    <th scope="col" class="py-3 px-3" width="20%">
                                        Type
                                    </th>
                                    <th scope="col" class="py-3 px-3" width="10%">
                                        Status
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(!empty($leave))
                                @foreach($leave as $l)
                                <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700">
                                    <td class="py-3 px-3">
                                        <input type="hidden" name="detailid[]" id="id" value="{{$l->id}}"/>
                                        <input type="checkbox" value="{{'1-'.$l->id}}" name="filed[]" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600 check">
                                    </td>
                                    <td class="py-3 px-3">
                                    {{ $l->date_absent }}
                                    </td>
                                    @if($l->leave_type == 'Undertime/Tardiness')
                                    <td class="py-3 px-3">
                                        <input type="text" name="undertime_mins[]" value="{{ $l->undertime_mins }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 text-center">  
                                    </td>
                                    @else
                                    <td class="py-3 px-3">  
                                    </td>
                                    @endif
                                    <td class="py-3 px-3">
                                        <input type="date" name="date_filed[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1">  
                                    </td>
                                    <td class="py-3 px-3" align="center">
                                        <input type="checkbox" value="1" name="with_pay[]" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                                    </td>
                                    <td class="py-3 px-3" align="center">
                                        <input type="text" name="pay_percentage[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 text-right">
                                    </td>
                                    <td class="py-3 px-3">
                                    {{ $l->leave_type }}
                                    </td>
                                    <td class="py-3 px-3 flex justify-center">
                                        <button data-modal-target="unfiledModal" data-modal-toggle="unfiledModal" class="py-2 px-2 text-xs font-medium text-center text-white bg-red-500 rounded-2xl hover:bg-red-400 focus:ring-4 focus:outline-none focus:ring-blue-300 white:bg-blue-600 white:hover:bg-red-500 white:focus:ring-blue-800" type="button">
                                            Unfiled
                                          </button>
                                        {{-- <div x-data="{ modelOpen: false }">
                                            <a href="#" @click="modelOpen =!modelOpen" class="" title="Cancel">
                                                <div class="py-2 px-2 text-xs font-medium text-center text-white bg-red-500 rounded-2xl hover:bg-red-400 focus:ring-4 focus:outline-none focus:ring-blue-300 white:bg-blue-600 white:hover:bg-red-500 white:focus:ring-blue-800">
                                                    Unfiled
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
                                                        <div class="flex items-center justify-between space-x-4 px-2">
                                                            <h1 class="text-xl font-medium text-gray-800 "></h1>
                                    
                                                            
                                                        </div>
                                                        <div class="">
                                                        <form action="{{ route('unfiled',$l->id) }}" method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="flex justify-between">
                                                                <div class="w-3/12 ">
                                                                    <span class="text-red-500 ">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-24 h-24">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                                <div class="w-9/12">
                                                                    <p class="text-red-500 text-2xl font-bold mb-2">Warning</p>
                                                                    <span class="text-lg leading-none">Are you sure you dont want to file this {{ $l->leave_type }}  ({{$l->date_absent}})?</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex justify-end px-2 space-x-1">
                                                                <button type="button" @click="modelOpen = false" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-gray-300 rounded-2xl white:bg-gray-400 white:hover:bg-gray-500 white:focus:bg-gray-500 hover:bg-gray-400 focus:outline-none focus:bg-gray-300 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                                                    Cancel
                                                                </button>
                                                                <button type="submit" value="Save" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-500 rounded-2xl white:bg-red-600 white:hover:bg-red-700 white:focus:bg-red-700 hover:bg-red-600 focus:outline-none focus:bg-red-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                                                    Confirm
                                                                </button>
                                                            </div>
                                                        </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="flex justify-end mt-6 px-2">
                        <button  type="submit" value="Save"  class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl w-full white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                            Filed
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>    
</x-app-layout>
<script>
    $(function() {

$('#selectAll').click(function() {
    if ($(this).prop('checked')) {
        $('.check').prop('checked', true);
    } else {
        $('.check').prop('checked', false);
    }
});

});
</script>
