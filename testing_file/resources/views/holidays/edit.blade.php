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
				<div class="flex justify-between  pb-2 bg-white white:bg-gray-900">
					<div > 
						<h2 class="uppercase font-semibold py-2">Holidays <small class="border-l-2 px-1">Update</small></h2>
                    </div>
                    <div class="flex">
                        <a href="{{ route('holiday.index') }}" type="button">
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
                <form  action="{{ route('holiday.update',$holiday->id) }}" method='POST'>
                    @csrf
                    @method('PUT')
                    <div class="px-2">
                        <label for="" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Date</label>
                        <input type="date" name="holiday_date" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40" value="{{ $holiday->holiday_date }}">
                    </div>
                    <div class=" mt-4 px-2">
                        <label for="" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Holiday Name</label>
                        <input type="text" name="holiday_name" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40"  value="{{ $holiday->holiday_name }}">
                    </div>
                    <div class=" mt-4 px-2">
                        <label for="" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Holiday Type</label>
                        <select name="holiday_type" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">  
                            <option value="" selected>-Select Type-</option>
                            <option value="Regular" {{ ($holiday->holiday_type=='Regular') ? 'selected' : ''}}>Regular</option>
                            <option value="Special" {{ ($holiday->holiday_type=='Special') ? 'selected' : ''}}>Special</option>
                            <option value="Double" {{ ($holiday->holiday_type=='Double') ? 'selected' : ''}}>Double</option>
                        </select>
                        <!-- <input type="text" name="holiday_type" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40"  value="{{ $holiday->holiday_type }}"> -->
                    </div>
                    
                    <div class="flex ">
                        <div class="mt-4 w-full px-2">
                            <label class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Year</label>
                            <select type="text" name="calendar_year" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                <option value=""> -- Select Year -- </option>
                                {{ $year=date('Y',strtotime('+3 year')) }}
                                {{ $last= date('Y')-2 }}
                                @for($x=$last;$x<=$year;$x++)
                                <option {{ ($x==$holiday->calendar_year) ? 'selected' : '' }} value="{{ $x }}"> {{ $x }} </option>
                                @endfor
                            </select>
                        </div>
                        <div class="mt-4 w-full px-2">
                            <label class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Rate</label>
                            <input type="text" onkeypress="return isNumberKey(this, event)" name="holiday_rate" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40" value="{{ $holiday->holiday_rate }}">
                        </div>
                    </div> 
                    <input type="hidden" name="id" value="{{ $holiday->id }}">
                    <div class="flex justify-end mt-6 px-2">
                        <button type="submit" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-3xl w-full white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                            Update
                        </button>
                    </div>
                </form>
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