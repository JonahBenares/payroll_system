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
                        <h2 class="uppercase font-semibold py-2 flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>
                            <span class="ml-2"> {{ $employee->full_name }} </span>
                        </h2>
                    </div>
                    <div class="flex">
                        <a href="{{ route('leavefailure.index') }}"  class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                            <span>Show List</span>
                        </a>
                    </div>
                </div>
                @php  $id=Request::segment(2) @endphp
                <form action="{{ route('leavefailure.update',$id) }}" method='POST' class="mt-5">
                @method("PATCH")
                    @csrf
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
                                    <th scope="col" class="py-3 px-3" width="25%">
                                        Date Filed
                                    </th>
                                    <th scope="col" class="py-3 px-3" width="16%" align="center">
                                        With Pay
                                    </th>
                                    <th scope="col" class="py-3 px-3" width="10%">
                                        Percentage
                                    </th>
                                    <th scope="col" class="py-3 px-3" width="20%">
                                        Type
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($leave as $l)
                                <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700">
                                    <td class="py-3 px-3">
                                        <input type="hidden" name="detailid[]" id="id" value="{{$l->id}}" id="id" />
                                        <input type="checkbox" value="1" name="filed[]" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 white:focus:ring-blue-600 white:ring-offset-gray-800 focus:ring-2 white:bg-gray-700 white:border-gray-600 check">
                                    </td>
                                    <td class="py-3 px-3">
                                    {{ $l->date_absent }}
                                    </td>
                                    @if($l->leave_type != 'Absent' && $l->leave_type != 'FTL')
                                    <td class="py-3 px-3">
                                        <input type="text" name="undertime_mins[]" value="{{ $l->undertime_mins }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 text-right">  
                                    </td>
                                    @else
                                    <td class="py-3 px-3">  
                                    </td>
                                    @endif
                                    <td class="py-3 px-3">
                                        <input type="date" name="date_filed[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 text-right">  
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
                                </tr>
                                
                                @endforeach
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
