<x-app-layout>
    <x-slot name="header"></x-slot>
    <style>
        [x-cloak] {
        display: none;
        }
    </style>        
    <div class="overflow-auto h-screen pb-28 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
        <div class="flex flex-col flex-wrap sm:flex-row">
            <div class="relative h-full w-full text-center bg-white rounded-lg shadow-lg">
                <div class="flex justify-between pr-4 pl-4 pt-4 rounded-t-lg">
                    <div > 
                        <h2 class="uppercase font-semibold py-2">Business Unit <small class="border-l-2 px-1">Update</small></h2>
                    </div>
                    <div class="flex">
                        <a href="{{ route('busUnit.index') }}" type="button">
                            <div class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white transition-colors duration-200 transform bg-blue-500 rounded-3xl white:bg-blue-600 white:hover:bg-blue-700 white:focus:bg-blue-700 hover:bg-blue-600 focus:outline-none focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                                <span>Show List</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="p-4">
                    <form action="" method='POST'>
                        <p class="text-left font-bold mb-2 text-lg">CENPRI</p>
                        <div class="">
                            <label for="" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Complete Name</label>
                            <input type="text" name="rate_amount" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40" value="">
                        </div>
                        <div class="flex justify-between mt-4 space-x-2">
                            <div class="w-full">
                                <label for="" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Address</label>
                                <input type="text" name="rate_amount" class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40" value="">
                            </div>
                            <div class="w-full">
                                <label for="" class="block text-left text-sm text-gray-700 capitalize white:text-gray-200">Logo </label>
                                <input type="file" name="rate_amount" class="text-sm block w-full px-3  mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40" value="">
                            </div>
                        </div>
                        <div class="flex justify-end mt-6">
                            <button type="submit" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl w-full white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                Update
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    
        
</x-app-layout>
