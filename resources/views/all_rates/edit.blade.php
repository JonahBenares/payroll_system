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
                        <h2 class="uppercase font-semibold py-2">Allowance Rates <small class="border-l-2 px-1">Update</small></h2>
                    </div>
                    <div class="flex">
                        <a href="{{ route('allowancerate.index') }}"  class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                            <span>Show List</span>
                        </a>
                
                    </div>
                </div>
                @if(Session::has('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                        <span class="block sm:inline">{{Session::get('success')}}</span>
                    </div>
                @endif
                @if(Session::has('fail'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <span class="block sm:inline">{{Session::get('fail')}}</span>
                    </div>
                @endif
                <div class="flex flex-row justify-between">
                    <div class="px-3 w-3/4">
                        <span class="block w-full text-left">Allowance Name</span>
                    </div>
                    <div class="px-3 w-1/4">
                        <span class="block w-full text-left">Rate</span>
                    </div>
                    <div class="px-3 w-14 test-left">
                        <span class="block w-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </span>
                    </div>
                </div>
                @php $x=1; @endphp
                @foreach($allowancerate AS $ar)
                <form class="mt-5" action="{{ route('allowancerate.update',$ar->employee_id) }}" method='POST'>
                    @csrf
                    @method('PUT')
                    
                    <div class="flex flex-row justify-between appends" id="appends0">
                        <div class="px-3 w-3/4">
                            <select name="allowance_name[]" id="allowance_name{{$x}}" class=" w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 allowance_name">
                                <option value="">--Select Allowance Name--</option>
                                @foreach($allowance AS $a)
                               
                                <option value="{{ $a->id }}" {{ ($a->id==$ar->allowance_id) ? 'selected' : '' }}>{{ $a->allowance_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="px-3 w-1/4">
                            <input type="text" onkeypress="return isNumberKey(this, event)" name="allowance_rate[]" id="allowance_rate{{$x}}" class=" w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 allowance_rate" value="{{ $ar->allowance_rate }}">
                        </div>
                        <div class="px-3 w-14 addmoreappend flex justify-center">
                            <!-- <button id="btn_allowance" class="flex items-center justify-center px-2 py-2 mt-3 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50 addAllowance" style="display:none;">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                  </svg>
                            </button> -->
                            <input type="hidden" name="employee_id" id="employee_id" value="{{ $ar->employee_id }}">
                            <input type="hidden" name="personal_id" id="personal_id" value="{{ $ar->personal_id }}">
                            <input type="hidden" name="allowance_rate_id[]" id="allowance_rate_id" value="{{ $ar->id }}">
                            <button class="flex items-center justify-center px-2 py-2 mt-3 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50 addAllowance">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                  </svg>
                            </button>
                            <a id="delete_func{{$x}}" href="{{ route('destroy',['id'=>$ar->id,'emp_id'=>$ar->employee_id]) }}" class="flex items-center justify-center px-2 py-2 mt-3 ml-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-500 rounded-2xl white:bg-red-600 white:hover:bg-red-700 white:focus:bg-red-700 hover:bg-red-600 focus:outline-none focus:bg-red-500 focus:ring focus:ring-red-300 focus:ring-opacity-50 delete_func" title="Delete">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>   
                            </a>
                        </div>
                    </div>
                    @php $x++; @endphp
                    @endforeach
                    <div class="flex justify-end mt-6 px-2">
                        <input type="hidden" name="count" id="count" value="{{ $count }}">
                        <input type='hidden' name='counterX' id='counterX'>
                        <button type="submit" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl w-full white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
