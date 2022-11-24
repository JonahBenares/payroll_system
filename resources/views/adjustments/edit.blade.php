<x-app-layout>
    <x-slot name="header"></x-slot>
    <style>
        [x-cloak] {
        display: none;
        }
    </style>        
    <div class="overflow-auto h-screen pb-28 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
        <div class="flex flex-col flex-wrap sm:flex-row">
            <div class="p-4 relative h-full w-full text-center  bg-white rounded-lg shadow-lg white:bg-gray-800 white:border-gray-700">
                <div class="flex justify-between pb-2 bg-white white:bg-gray-900">
                    <div > 
                        <h2 class="uppercase font-semibold py-2">Adjustment Rates <small class="border-l-2 px-1">Update</small></h2>
                    </div>
                    <div class="flex">
                        <a href="{{ route('adjustmentrate.index') }}" type="button">
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
                <form action="{{ route('adjustmentrate.update',$adjustmentrate->id) }}" method='POST'>
                    @csrf
                    @method('PUT')
                    <div class="px-2">
                        <label for="" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Adjustment Rate Name</label>
                        <select name="rate_name" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            <option value="">--Select Rate Name--</option>
                            @foreach($payslipinfo AS $p)
                            <option value="{{ $p->id }}" {{ ($p->id==$adjustmentrate->payslip_info_id) ? 'selected' : '' }}>{{ $p->description }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex justify-between mt-2">
                        <div class="px-2 w-full">
                            <label for="" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Deduction Type</label>
                            <select name="deduction_type" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                <option value="2" {{ ($adjustmentrate->deduction_type=='2') ? 'selected' : '' }}>Actual Amount</option>
                                <option value="1" {{ ($adjustmentrate->deduction_type=='1') ? 'selected' : '' }}>Percentage</option>
                            </select>
                        </div>
                        <div class="px-2 w-full">
                            @if($adjustmentrate->deduction_type=='1')
                            <label for="" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Rate </label>
                            <input onkeypress="return isNumberKey(this, event)" name="rate_amount" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40" value="{{ $adjustmentrate->rate_amount*100 }}">
                            @else
                            <label for="" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Rate </label>
                            <input onkeypress="return isNumberKey(this, event)" name="rate_amount" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40" value="{{ $adjustmentrate->rate_amount }}">
                            @endif
                        </div>
                    </div>
                    <div class="flex justify-end mt-6 px-2">
                        <input type="hidden" name="id" value="{{ $adjustmentrate->id }}">
                        <button type="submit" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl w-full white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                            Update
                        </button>
                    </div>
                </form>


            </div>
        </div>
    </div>

    
        
</x-app-layout>
