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
            <div class="relative h-full w-full text-center bg-white rounded-lg shadow-lg">
                <div class="flex justify-between pr-4 pl-4 pt-4 rounded-t-lg ">
                    <div > 
                        <h2 class="uppercase font-semibold py-2">Statutory Bracket <small class="border-l-2 px-1">Add New</small></h2>
                    </div>
                    <div class="flex">
                        <a href="{{ route('statutorybracket.index') }}"  type="button">
                            <div class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white transition-colors duration-200 transform bg-blue-500 rounded-3xl white:bg-blue-600 white:hover:bg-blue-700 white:focus:bg-blue-700 hover:bg-blue-600 focus:outline-none focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                                <span>Show List</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="p-4">
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
                    <form action="{{ url('statutorybracket') }}" method="post">
                    @csrf
                        <div class="">
                            <label for="" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Statutory Name</label>
                            <select type="text" name="payslip_info_id" id="payslip_info_id" class="text-sm block w-full  px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                    <option value="">Select Statutory Name</option>
                            @foreach($statutory as $stat)
                                    <option value="{{ $stat->id }}">{{ $stat->description }}</option>
                            @endforeach
                            </select>
                        </div>
                        
                        <div class="flex justify-between space-x-2 mt-4">
                            <div class=" w-full">
                                <label class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Salary From</label>
                                <input type="text" name="salary_from" id="salary_from" onkeypress="return isNumberKey(this, event)" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            </div>
                            <div class=" w-full">
                                <label class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Salary To</label>
                                <input type="text" name="salary_to" id="salary_to" onkeypress="return isNumberKey(this, event)" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            </div>
                        </div>
                        <div class="flex justify-between space-x-2 mt-4">
                            <div class=" w-full">
                                <label for="" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Deductions</label>
                                <input type="text" name="deduction_amount" id="deduction_amount" onkeypress="return isNumberKey(this, event)" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            </div>
                            <div class=" w-full">
                                <label for="" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">As of Date</label>
                                <input type="date" name="as_of" id="as_of" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            </div>
                        </div>

                        <div class="flex justify-end mt-6">
                            <button type="submit" value="Save" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-500 rounded-2xl w-full white:bg-blue-600 white:hover:bg-blue-700 white:focus:bg-blue-700 hover:bg-blue-600 focus:outline-none focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</x-app-layout>
<script>
    function isNumberKey(txt, evt){
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode == 46) {
            //Check if the text already contains the . character
            if (txt.value.indexOf('.') === -1) {
                return true;
            } else {
                return false;
            }
        } else {
            if (charCode > 31
                && (charCode < 48 || charCode > 57))
                return false;
        }
        return true;
    }
</script>
