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
                <h2 class="uppercase font-semibold py-2">Cut off <small class="border-l-2 px-1">Update</small></h2>
            </div>
            <div class="flex">
                <a href="{{ route('cut_off.index') }}"  class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                    <span>Show List</span>
                </a>
            </div>
        </div>
        <form class="mt-5">
            <div>
                <label for="" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Cut Off Type</label>
                <select class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                    <option>MID</option>
                    <option>EOM</option>
                </select>
            </div>

            <div class="mt-4">
                <label for="email" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Cut Off Start</label>
                <select class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                    @for($x=1;$x<=31;$x++)
                    <option>{{$x}}</option>
                    @endfor
                </select>
            </div>

            <div class="mt-4">
                <label for="email" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Cut Off End</label>
                <select class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                    @for($x=1;$x<=31;$x++)
                    <option>{{$x}}</option>
                    @endfor
                </select>
            </div>
            
            <div class="flex justify-end mt-6">
                <button type="button" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl w-full white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                    Update
                </button>
            </div>
        </form>
    </div> 
</x-app-layout>
