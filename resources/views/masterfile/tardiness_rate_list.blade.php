<x-app-layout>
    <x-slot name="header"></x-slot>
            
    <div class="p-4 relative h-screen w-full text-center my-10 bg-white rounded-2xl shadow-lg white:bg-gray-800 white:border-gray-700">
        <div class="flex justify-between items-center pb-4 bg-white white:bg-gray-900">
            <div>
                <h2 class="uppercase font-semibold">Tardiness Rate List</h2>
            </div>
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 white:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                </div>
                <input type="text" id="table-search-users" class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-2xl border border-gray-300 focus:ring-blue-500 focus:border-blue-500 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-blue-500 white:focus:border-blue-500" placeholder="Search for users">
            </div>
        </div>
        
        <div class="overflow-x-auto h-96 relative  sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 white:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 white:bg-gray-700 white:text-gray-400 sticky top-0">
                    <tr class="">
                        <th scope="col" class="py-3 px-6" width="45%">
                            Rate name
                        </th>
                        <th scope="col" class="py-3 px-6" width="45%">
                            Rate
                        </th>
                        <th scope="col" class="py-3 px-6" width="10%" align="center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                            Apple MacBook Pro 17"
                        </th>
                        <td class="py-4 px-6">
                            $2999
                        </td>
                        <td class="py-4 px-6" align="center">
                            <button type="button" class="py-1.5 px-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 white:bg-blue-600 white:hover:bg-blue-700 white:focus:ring-blue-800" title="Update"> 
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                    <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                    <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                </svg>
                                                    
                            </button>
                        </td>
                    </tr>
                    <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                            Microsoft Surface Pro
                        </th>
                        <td class="py-4 px-6">
                            $1999
                        </td>
                        <td class="py-4 px-6" align="center">
                            <button type="button" class="py-1.5 px-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 white:bg-blue-600 white:hover:bg-blue-700 white:focus:ring-blue-800" title="Update"> 
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                    <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                    <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                </svg>
                                                    
                            </button>
                        </td>
                    </tr>
                    <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                            Magic Mouse 2
                        </th>
                        <td class="py-4 px-6">
                            $99
                        </td>
                        <td class="py-4 px-6" align="center">
                            <button type="button" class="py-1.5 px-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 white:bg-blue-600 white:hover:bg-blue-700 white:focus:ring-blue-800" title="Update"> 
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                    <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                    <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                </svg>
                                                    
                            </button>
                        </td>
                    </tr>
                    <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                            Apple Watch
                        </th>
                        <td class="py-4 px-6">
                            $179
                        </td>
                        <td class="py-4 px-6" align="center">
                            <button type="button" class="py-1.5 px-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 white:bg-blue-600 white:hover:bg-blue-700 white:focus:ring-blue-800" title="Update"> 
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                    <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                    <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                </svg>
                                                    
                            </button>
                        </td>
                    </tr>
                    <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                            iPad
                        </th>
                        <td class="py-4 px-6">
                            $699
                        </td>
                        <td class="py-4 px-6" align="center">
                            <button type="button" class="py-1.5 px-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 white:bg-blue-600 white:hover:bg-blue-700 white:focus:ring-blue-800" title="Update"> 
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                    <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                    <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                </svg>
                                                    
                            </button>
                        </td>
                    </tr>
                    <tr class="bg-white border-b white:bg-gray-800 hover:bg-gray-50 white:hover:bg-gray-600">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                            Apple iMac 27"
                        </th>
                        <td class="py-4 px-6">
                            $3999
                        </td>
                        <td class="py-4 px-6" align="center">
                            <button type="button" class="py-1.5 px-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 white:bg-blue-600 white:hover:bg-blue-700 white:focus:ring-blue-800" title="Update"> 
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                    <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                    <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                </svg>
                                                    
                            </button>
                        </td>
                    </tr>
                    <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                            Apple MacBook Pro 17"
                        </th>
                        <td class="py-4 px-6">
                            $2999
                        </td>
                        <td class="py-4 px-6" align="center">
                            <button type="button" class="py-1.5 px-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 white:bg-blue-600 white:hover:bg-blue-700 white:focus:ring-blue-800" title="Update"> 
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                    <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                    <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                </svg>
                                                    
                            </button>
                        </td>
                    </tr>
                    <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                            Microsoft Surface Pro
                        </th>
                        <td class="py-4 px-6">
                            $1999
                        </td>
                        <td class="py-4 px-6" align="center">
                            <button type="button" class="py-1.5 px-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 white:bg-blue-600 white:hover:bg-blue-700 white:focus:ring-blue-800" title="Update"> 
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                    <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                    <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                </svg>
                                                    
                            </button>
                        </td>
                    </tr>
                    <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                            Magic Mouse 2
                        </th>
                        <td class="py-4 px-6">
                            $99
                        </td>
                        <td class="py-4 px-6" align="center">
                            <button type="button" class="py-1.5 px-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 white:bg-blue-600 white:hover:bg-blue-700 white:focus:ring-blue-800" title="Update"> 
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                    <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                    <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                </svg>
                                                    
                            </button>
                        </td>
                    </tr>
                    <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                            Apple Watch
                        </th>
                        <td class="py-4 px-6">
                            $179
                        </td>
                        <td class="py-4 px-6" align="center">
                            <button type="button" class="py-1.5 px-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 white:bg-blue-600 white:hover:bg-blue-700 white:focus:ring-blue-800" title="Update"> 
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                    <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                    <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                </svg>
                                                    
                            </button>
                        </td>
                    </tr>
                    <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                            iPad
                        </th>
                        <td class="py-4 px-6">
                            $699
                        </td>
                        <td class="py-4 px-6" align="center">
                            <button type="button" class="py-1.5 px-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 white:bg-blue-600 white:hover:bg-blue-700 white:focus:ring-blue-800" title="Update"> 
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                    <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                    <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                </svg>
                                                    
                            </button>
                        </td>
                    </tr>
                    <tr class="bg-white border-b white:bg-gray-800 hover:bg-gray-50 white:hover:bg-gray-600">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                            Apple iMac 27"
                        </th>
                        <td class="py-4 px-6">
                            $3999
                        </td>
                        <td class="py-4 px-6" align="center">
                            <button type="button" class="py-1.5 px-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 white:bg-blue-600 white:hover:bg-blue-700 white:focus:ring-blue-800" title="Update"> 
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                    <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                    <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                </svg>
                                                    
                            </button>
                        </td>
                    </tr>
                    <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                            Apple MacBook Pro 17"
                        </th>
                        <td class="py-4 px-6">
                            $2999
                        </td>
                        <td class="py-4 px-6" align="center">
                            <button type="button" class="py-1.5 px-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 white:bg-blue-600 white:hover:bg-blue-700 white:focus:ring-blue-800" title="Update"> 
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                    <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                    <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                </svg>
                                                    
                            </button>
                        </td>
                    </tr>
                    <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                            Microsoft Surface Pro
                        </th>
                        <td class="py-4 px-6">
                            $1999
                        </td>
                        <td class="py-4 px-6" align="center">
                            <button type="button" class="py-1.5 px-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 white:bg-blue-600 white:hover:bg-blue-700 white:focus:ring-blue-800" title="Update"> 
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                    <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                    <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                </svg>
                                                    
                            </button>
                        </td>
                    </tr>
                    <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                            Magic Mouse 2
                        </th>
                        <td class="py-4 px-6">
                            $99
                        </td>
                        <td class="py-4 px-6" align="center">
                            <button type="button" class="py-1.5 px-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 white:bg-blue-600 white:hover:bg-blue-700 white:focus:ring-blue-800" title="Update"> 
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                    <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                    <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                </svg>
                                                    
                            </button>
                        </td>
                    </tr>
                    <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                            Apple Watch
                        </th>
                        <td class="py-4 px-6">
                            $179
                        </td>
                        <td class="py-4 px-6" align="center">
                            <button type="button" class="py-1.5 px-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 white:bg-blue-600 white:hover:bg-blue-700 white:focus:ring-blue-800" title="Update"> 
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                    <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                    <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                </svg>
                                                    
                            </button>
                        </td>
                    </tr>
                    <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700 hover:bg-gray-50 white:hover:bg-gray-600">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                            iPad
                        </th>
                        <td class="py-4 px-6">
                            $699
                        </td>
                        <td class="py-4 px-6" align="center">
                            <button type="button" class="py-1.5 px-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 white:bg-blue-600 white:hover:bg-blue-700 white:focus:ring-blue-800" title="Update"> 
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                    <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                    <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                </svg>
                                                    
                            </button>
                        </td>
                    </tr>
                    <tr class="bg-white white:bg-gray-800 hover:bg-gray-50 white:hover:bg-gray-600">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap white:text-white">
                            Apple iMac 27"
                        </th>
                        <td class="py-4 px-6">
                            $3999
                        </td>
                        <td class="py-4 px-6" align="center">
                            <button type="button" class="py-1.5 px-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 white:bg-blue-600 white:hover:bg-blue-700 white:focus:ring-blue-800" title="Update"> 
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                    <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                    <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                </svg>
                                                    
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>


    </div>

    
        
</x-app-layout>
