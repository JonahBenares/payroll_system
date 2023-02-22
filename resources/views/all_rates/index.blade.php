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
            <div class="relative h-full w-full text-center bg-white rounded-lg shadow-lg white:bg-gray-800 white:border-gray-700">
                <div class="flex justify-between pr-4 pl-4 pt-4 rounded-t-lg">
                    <div > 
                        <h2 class="uppercase font-semibold py-2">Allowance Rates</h2>
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
                <div class="overflow-x-auto overflow-y-hidden hover:overflow-y-auto h-100 relative p-4 rounded-b-lg">
                    <table class="w-full text-sm text-left white:text-gray-400 border"  id="table_overall">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 white:bg-gray-700 white:text-gray-400 sticky top-0 z-10">
                            <tr class="">
                                <th scope="col" class="py-3 px-3 border border-gray-200" width="49%">
                                    Employee Name
                                </th>
                                <th scope="col" class="py-3 px-3 border border-gray-200" width="50%">
                                    <div class="justify-between flex">
                                        <span class="relative">Allowance Name</span>
                                        <span class="relative">Rate</span>
                                    </div>
                                </th>
                                <th scope="col" class="py-3 px-3 border border-b border-gray-200" width="1%" align="center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                    </svg>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($employees AS $e)
                            <tr class="bg-white text-gray-500 font-medium hover:bg-gray-50 hover:text-gray-900 hover:font-semibold">
                                <td scope="row" class="py-3 px-3 whitespace-nowrap white:text-white border border-gray-200 align-top">
                                    {{ $e->full_name }}
                                </td>
                                <td class="border border-gray-200 py-3 px-3 align-top">
                                    @php 
                                        $personal_id=array(); 
                                    @endphp
                                    @foreach($rates AS $r)
                                        @if($e->id==$r->employee_id)
                                        @php 
                                            $personal_id[]=$r->personal_id;
                                            $counter=$r->allowance_name; 
                                        @endphp
                                        <div class="justify-between flex">
                                            <span class="relative">{{ $r->allowance_name }}</span>
                                            <span class="relative">{{ number_format($r->allowance_rate,2) }}</span>
                                        </div>
                                        @endif
                                    @endforeach
                                </td>
                                <td class="py-3 px-6 justify-center flex" >
                                    <!-- <a href="{{ route('allowancerate.create','employee_id='.$e->id.'&personal_id='.$e->personal_id) }}" class="" title="Add"> -->
                                    @if(in_array($e->personal_id,$personal_id))
                                        <a href="{{ route('allowancerate.edit', $e->id) }}" class="" title="Update">
                                            <div class="py-2 px-2 text-xs font-medium text-center text-white transition-colors bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                                    <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                                    <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                                </svg>
                                            </div>
                                        </a> 
                                    @else
                                        <a href="{{ route('allowancerate.create',['employee_id' => $e->id, 'personal_id' => $e->personal_id]) }}" class="" title="Add">
                                            <div class="py-2 px-2 text-xs font-medium text-center text-white transition-colors bg-blue-500 rounded-2xl white:bg-blue-600 white:hover:bg-blue-700 white:focus:bg-blue-700 hover:bg-blue-600 focus:outline-none focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                                </svg>
                                            </div>
                                        </a>
                                    @endif

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>
   
</x-app-layout>
