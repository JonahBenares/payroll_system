<x-app-layout>
    <x-slot name="header"></x-slot>
    <!-- component -->
    <style>
        [x-cloak] {
        display: none;
        }
    </style>
    <div class="p-4 relative h-full w-full text-center my-10 bg-white rounded-lg shadow-lg white:bg-gray-800 white:border-gray-700">
        <div class="flex justify-between pb-2 bg-white white:bg-gray-900">
            <div > 
                <h2 class="uppercase font-semibold py-2">Change Schedule <small class="border-l-2 px-1">Update</small></h2>
            </div>
            <div class="flex">
                <a href="{{ route('changeSched.index') }}" type="button">
                    <div class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white transition-colors duration-200 transform bg-indigo-500 rounded-3xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                        <span>Show List</span>
                    </div>
                </a>
            </div>
        </div>
        @if(!empty($change_schedule))
            @foreach($change_schedule AS $cs)
            @php 
                $exp=explode('-',$cs->month_year);
                $year=$exp[0];
                $month=$exp[1];
            @endphp
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
            <form action="{{ route('changeSched.update',$cs->id) }}" method='POST'>
                @csrf
                @method('PUT')
                <div class="flex justify-between space-x-2">
                    <div class="mt-4 w-6/12">
                        <label for="date_applied" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Date Applied</label>
                        <input type="date" name="date_applied" id="date_applied" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40" value='{{ $cs->date_applied }}'>
                    </div>
                    <div class="mt-4 w-6/12">
                        <label for="employee" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Employee</label>
                        <select name="employee" id="employee" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            <option value="">--Select Name--</option>
                            @foreach($employees AS $e)
                            <option value="{{ $e->id }}" {{ ($cs->employee_id!='0') ? (($e->id==$cs->employee_id) ? 'selected' : '') : ''; }}>{{ $e->full_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="flex justify-between space-x-2">
                    <div class="mt-4 w-3/12">
                        <label for="month" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Month</label>
                        <select name="month" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40" required>
                            <option value="" selected>Select Month</option>
                            <option value="01" {{ (!empty($month)) ? ($month=='01') ? 'selected' : '' : '' }}>January</option>
                            <option value="02" {{ (!empty($month)) ? ($month=='02') ? 'selected' : '' : '' }}>February</option>
                            <option value="03" {{ (!empty($month)) ? ($month=='03') ? 'selected' : '' : '' }}>March</option>
                            <option value="04" {{ (!empty($month)) ? ($month=='04') ? 'selected' : '' : '' }}>April</option>
                            <option value="05" {{ (!empty($month)) ? ($month=='05') ? 'selected' : '' : '' }}>May</option>
                            <option value="06" {{ (!empty($month)) ? ($month=='06') ? 'selected' : '' : '' }}>June</option>
                            <option value="07" {{ (!empty($month)) ? ($month=='07') ? 'selected' : '' : '' }}>July</option>
                            <option value="08" {{ (!empty($month)) ? ($month=='08') ? 'selected' : '' : '' }}>August</option>
                            <option value="09" {{ (!empty($month)) ? ($month=='09') ? 'selected' : '' : '' }}>September</option>
                            <option value="10" {{ (!empty($month)) ? ($month=='10') ? 'selected' : '' : '' }}>October</option>
                            <option value="11" {{ (!empty($month)) ? ($month=='11') ? 'selected' : '' : '' }}>November</option>
                            <option value="12" {{ (!empty($month)) ? ($month=='12') ? 'selected' : '' : '' }}>December</option>
                        </select>
                    </div>
                    <div class="mt-4 w-3/12">
                        <label for="year" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Year</label>
                        <select name="year" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40" required>
                            <option value="">Select Year</option>
                            @php
                                $years=date('Y');
                            @endphp
                            @for($y=2015;$y<=$years;$y++)
                                <option value="{{ $y }}"  {{ (!empty($year)) ? ($year==$y) ? 'selected' : '' : '' }}>{{ $y }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="mt-4 w-6/12">
                        <label for="schedule_code" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">New Schedule</label>
                        <select name="schedule_code" id="schedule_code" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            <option value="">--Select Schedule--</option>
                            @foreach($schedule AS $s)
                            <option value="{{ $s->id }}" {{ ($cs->schedule_code==$s->id) ? 'selected' : '' }}>{{ $s->schedule_code }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="flex justify-between space-x-2">
                    <div class="mt-4 w-6/12">
                        <label for="start_date" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Start Date</label>
                        <input type="date" name="start_date" id="start_date" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40" value='{{ $cs->start_date }}'>
                    </div>
                    <div class="mt-4 w-6/12">
                        <label for="end_date" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">End Date</label>
                        <input type="date" name="end_date" id="end_date" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40" value='{{ $cs->end_date }}'>
                    </div>
                </div>
                <div class="mt-4 w-full  flex">
                    <div class="flex items-center">
                        <input name="alternate" type="checkbox" value="1" class=" w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600">
                        <label for="checked-checkbox" class="ml-2 text-sm font-medium text-gray-900 white:text-gray-300">Night Shift</label>
                    </div>
                </div>
                <div class="flex justify-end mt-6">
                    <button type="submit" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl w-full white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                        Update
                    </button>
                </div>
            </form>
            @endforeach
        @endif
    </div> 
</x-app-layout>
