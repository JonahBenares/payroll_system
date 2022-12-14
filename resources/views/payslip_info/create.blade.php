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
                <div class="flex justify-between pb-2 bg-white white:bg-gray-900">
                    <div > 
                        <h2 class="uppercase font-semibold py-2">Payslip Info <small class="border-l-2 px-1">Add New</small></h2>
                    </div>
                    <div class="flex">
                        <a href="{{ route('payslip_info.index') }}" type="button">
                            <div class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white transition-colors duration-200 transform bg-indigo-500 rounded-3xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                <span>Show List</span>
                            </div>
                        </a>
                    </div>
                </div>
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
                <form action="{{ url('payslip_info') }}" method="post">
                {!! csrf_field() !!}
                    <div class="px-2">
                        <label for="" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Description</label>
                        <input type="text" name="description" id="description"  class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                    </div>
                    <div class="flex justify-between">
                        <div class="px-2 mt-2 w-3/4">
                            <label for="" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Type</label>
                            <select type="text" name="pay_type" id="pay_type" class="text-sm block w-full  px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                <option value="1">Adjustment</option>
                                <option value="2">Less GP</option>
                                <option value="3">Deduction</option>
                            </select>
                        </div>
                        <div class="px-2 mt-2 w-1/4">
                            <div class="flex justify-center space-x-10">
                                <div class="flex items-right pl-4 mt-10">
                                    <input type="hidden" name="editable" value="0" />
                                    <input name="editable" id="editable"  type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 ">
                                    <label for="default-checkbox" class="block ml-2 text-sm text-gray-700 capitalize white:text-gray-200">Editable</label>
                                </div>
                                <div class="flex items-right mt-10">
                                    <input type="hidden" name="visible" value="0" />
                                    <input name="visible" id="visible"  type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 ">
                                    <label for="default-checkbox" class="block ml-2 text-sm text-gray-700 capitalize white:text-gray-200">Visible</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end mt-6 px-2">
                        <button type="submit" value="Save"  class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl w-full white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    
        
</x-app-layout>
