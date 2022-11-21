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
                        <h2 class="uppercase font-semibold py-2">OverTime List</h2>
                    </div>
                    <div class="flex">
                        <a href="{{ route('ot.index') }}"  class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
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
                <form action="{{ route('ot.store') }}" method="POST">
                    @csrf
                    <div class="flex justify-between pt-4">
                        <div class="w-1/2 px-2">
                            <h6 class="font-semibold border-b ">No. of Days Worked</h6>
                            <div class="flex justify-between mt-2">
                                <label for="reg_day" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">REG DAY:</label>
                                <input type="text" max='1.53' onkeypress="return isNumberKey(this, event)" name="reg_day" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-56 p-2">
                            </div>
                            <div class="flex justify-between mt-2">
                                <label for="rd2" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RD 2:</label>
                                <input type="text" onkeypress="return isNumberKey(this, event)" name="rd2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-56 p-2">
                            </div>
                            <div class="flex justify-between mt-2">
                                <label for="sh" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">SH:</label>
                                <input type="text" onkeypress="return isNumberKey(this, event)" name="sh" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-56 p-2">
                            </div>
                            <div class="flex justify-between mt-2">
                                <label for="sh_rd" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">SH on RD:</label>
                                <input type="text" onkeypress="return isNumberKey(this, event)" name="sh_rd" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-56 p-2">
                            </div>
                            <div class="flex justify-between mt-2">
                                <label for="reg_hol" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">Reg Hol:</label>
                                <input type="text" onkeypress="return isNumberKey(this, event)" name="reg_hol" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-56 p-2">
                            </div>
                            <div class="flex justify-between mt-2">
                                <label for="rh_rd" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RH on RD 2:</label>
                                <input type="text" onkeypress="return isNumberKey(this, event)" name="rh_rd" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-56 p-2">
                            </div>
                        </div>
                        <div class="w-1/2 px-2 border-l">
                            <h6 class="font-semibold border-b">Night Premium</h6>
                            <div class="flex justify-between mt-2">
                                <label for="reg_np" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">REG NP:</label>
                                <input type="text" onkeypress="return isNumberKey(this, event)" name="reg_np" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                            </div>
                            <div class="flex justify-between mt-2">
                                <label for="regnp_ot" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">REG NP OT:</label>
                                <input type="text" onkeypress="return isNumberKey(this, event)" name="regnp_ot" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                            </div>
                            <div class="flex justify-between mt-2">
                                <label for="regsh_np" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RD2/SH NP:</label>
                                <input type="text" onkeypress="return isNumberKey(this, event)" name="regsh_np" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                            </div>
                            <div class="flex justify-between mt-2">
                                <label for="rd2sh_ot" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RD2/SH NP OT:</label>
                                <input type="text" onkeypress="return isNumberKey(this, event)" name="rd2sh_ot" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                            </div>
                            <div class="flex justify-between mt-2">
                                <label for="shonrd2_np" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">SH on RD2 NP:</label>
                                <input type="text" onkeypress="return isNumberKey(this, event)" name="shonrd2_np" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                            </div>
                            <div class="flex justify-between mt-2">
                                <label for="shonrd2_npot" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">SH on RD2 NP OT:</label>
                                <input type="text" onkeypress="return isNumberKey(this, event)" name="shonrd2_npot" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                            </div>
                            <div class="flex justify-between mt-2">
                                <label for="rh_np" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RH NP:</label>
                                <input type="text" onkeypress="return isNumberKey(this, event)" name="rh_np" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                            </div>
                            <div class="flex justify-between mt-2">
                                <label for="rhnp_ot" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RH NP OT:</label>
                                <input type="text" onkeypress="return isNumberKey(this, event)" name="rhnp_ot" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                            </div>
                            <div class="flex justify-between mt-2">
                                <label for="rhrd2_np" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RH on RD2 NP:</label>
                                <input type="text" onkeypress="return isNumberKey(this, event)" name="rhrd_np" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                            </div>
                            <div class="flex justify-between mt-2">
                                <label for="rhrd2_ot" class="block py-3 pr-3 text-sm font-medium text-gray-700 ">RH on RD2 NP OT:</label>
                                <input type="text" onkeypress="return isNumberKey(this, event)" name="rhrd2_ot" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-48 p-2">
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="employee_id" value="{{$_GET['employee_id']}}">
                    <input type="hidden" name="personal_id" value="{{$_GET['personal_id']}}">
                    <input type="hidden" name="month_year" value="{{$_GET['month_year']}}">
                    <input type="hidden" name="period" value="{{$_GET['period']}}">
                    <input type='submit' class="flex items-center justify-center my-2 px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50 w-full" value='Save'>
                </form>
            </div>
            
        </div>
    </div>

    
        
</x-app-layout>
