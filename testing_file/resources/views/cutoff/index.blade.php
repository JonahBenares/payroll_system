<x-app-layout>
    <x-slot name="header"></x-slot>
    <!-- component -->
    <style>
        [x-cloak] {
        display: none;
        }
    </style>
           
    <div class="p-4 relative h-full w-full text-center my-10 bg-white rounded-2xl shadow-lg white:bg-gray-800 white:border-gray-700">
        <div class="flex justify-between  pb-4 bg-white white:bg-gray-900">
            <div > 
                <h2 class="uppercase font-semibold py-2">Cut off</h2>
            </div>
            <div class="flex">
                <a href="{{ route('cut_off.create') }}" type="button" >
                    <div class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white transition-colors duration-200 transform bg-indigo-500 rounded-3xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                        <span>Add New</span>
                    </div>
                </a>
                <label for="table-search" class="sr-only">Search</label>
                <form class="flex items-center">   
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                        </div>
                        <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 px-3 py-2 rounded-l-2xl" placeholder="Search" required>
                    </div>
                    <button type="submit" class="px-2 py-2 text-sm font-medium text-white border border-gray-300 bg-gray-300 rounded-r-2xl hover:bg-gray-400 hover:border hover:border-gray-400 focus:outline-none focus:bg-gray-500 focus:ring focus:ring-gray-300 focus:ring-opacity-50 ">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        <span class="sr-only">Search</span>
                    </button>
                </form>
            </div>
        </div>
        @if(Session::has('success'))
            <div class="mb-5 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{Session::get('success')}}</span>
            </div>
        @endif
        <div class="overflow-x-auto relative  sm:rounded-2xl">
            <table class="w-full text-sm text-left text-gray-500 white:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 white:bg-gray-700 white:text-gray-400 sticky top-0">
                    <tr class="">
                        <th scope="col" class="py-3 px-6" width="%">
                            Cut Off Type
                        </th>
                        <th scope="col" class="py-3 px-6" width="%">
                            Cut Off Start
                        </th>
                        <th scope="col" class="py-3 px-6" width="%">
                            Cut Off End
                        </th>
                        <th scope="col" class="py-3 px-6" width="13%" align="center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </th>
                    </tr>
                </thead>
                <tbody class="sticky top-12">
                @foreach($cutoff as $co)
                    <tr class=" border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                        <th scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                        {{ $co->cutoff_type }}
                        </th>
                        <td class="py-3 px-6">{{ $co->cutoff_start }}</td>
                        <td class="py-3 px-6">{{ $co->cutoff_end }}</td>
                        <td class="py-3 px-6 flex justify-center space-x-1" align="center">
                            <a href="{{ route('cut_off.edit',$co->id) }}" class="" title="Update">
                                <div class="py-2 px-2 text-xs font-medium text-center text-white transition-colors bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                        <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                        <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                    </svg>
                                </div>
                            </a>
                            <form method="post" action="{{route('cut_off.destroy',$co->id)}}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" onclick="return confirm(&quot;Are you sure you want to delete this record?&quot;)" class="py-2 px-2 text-xs font-medium text-center text-white bg-red-500 rounded-2xl hover:bg-red-400 focus:ring-4 focus:outline-none focus:ring-blue-300 white:bg-blue-600 white:hover:bg-red-500 white:focus:ring-blue-800" title="Update"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>                                                
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>

    
        
</x-app-layout>
