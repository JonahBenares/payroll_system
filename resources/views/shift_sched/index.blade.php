<x-app-layout>
    <div class="overflow-auto h-screen pb-28 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
        <div class="flex flex-col flex-wrap sm:flex-row ">
            <div class="p-4 relative h-full w-full text-center bg-white rounded-lg shadow-lg white:bg-gray-800 white:border-gray-700">
                <div class="flex justify-between pb-4 bg-white white:bg-gray-900">
                    <div > 
                        <h2 class="uppercase font-semibold py-2">Schedule</h2>
                    </div>
                    <div class="flex">
                        <a href="{{ route('shiftschedule.create'); }}" type="button" >
                            <div class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white transition-colors duration-200 transform bg-indigo-500 rounded-3xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                                </svg>
                                <span>Add Schedule</span>
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
                <hr>    
                <div class="flex justify-center pb-1 pt-2 bg-white white:bg-gray-900">
                    <div class="mx-2 text-left">
                        <select class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 w-60">
                            <option value="" selected>Select Month</option>
                            <option value="01">January</option>
                            <option value="02">February</option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                    </div>
                    @php $current_year = date("Y"); @endphp
                    <div class="mx-2 text-left">
                        <select class="text-sm block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 w-60">
                            <option value="" selected>Select Year</option>
                            @for($x=2022;$x<=$current_year;$x++)
                            <option value="{{ $x }}">{{ $x }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="mx-2 pt-3 text-left">
                        <button type="submit" class="flex items-center justify-center px-3 py-2 mx-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                            <span>Generate</span>
                        </button>
                    </div>
                </div>
                <div class="w-full overflow-x-auto overflow-y-hidden hover:overflow-y-auto  relative  pt-2 pr-2 pl-2 mt-3 md:pt-0 md:pr-0 md:pl-0 h-96 ">
                    <table class="text-sm text-left text-gray-500 white:text-gray-400 border border-gray-200 border-collapse" width="200%">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 white:bg-gray-700 white:text-gray-400 sticky top-0 z-20">
                          
                            <tr>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 bg-gray-50 sticky left-0 z-10" rowspan="2" width="6%">Employee</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200  bg-gray-50 " rowspan="2" width="5%">Position</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">1</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">2</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">3</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">4</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">5</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">6</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">7</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">8</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">9</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">10</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">11</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">12</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">13</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">14</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">15</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">16</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">17</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">18</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">19</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">20</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">21</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">22</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">23</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">24</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">25</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">26</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">27</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">28</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">29</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">30</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center">31</td>
                            </tr>
                          
                            <tr>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >M</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >T</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >W</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >T</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >F</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >S</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >S</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >M</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >T</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >W</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >T</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >F</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >S</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >S</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >M</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >T</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >W</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >T</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >F</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >S</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >S</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >M</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >T</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >W</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >T</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >F</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >S</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >S</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >F</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >S</td>
                                <td class="py-1 px-1 bg-gray-50 border border-gray-200 text-center" width="1%" >S</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($departments AS $dept)
                            <tr>
                                <td colspan='31'>{{ $dept->dept_name }}</td>
                            </tr>
                                @foreach($employees AS $emp)
                                    @if($dept->id == $emp->department)
                                    <tr>
                                        <td class="py-1 px-1 border border-gray-200 bg-white sticky left-0 z-10" >{{ $emp->full_name }}</td>
                                        <td class="py-1 px-1 border border-gray-200 bg-white sticky left-0">{{ $emp->position }}</td>
                                        <td class="py-1 px-1 border border-gray-200 text-center">1</td>
                                        <td class="py-1 px-1 border border-gray-200 text-center">2</td>
                                        <td class="py-1 px-1 border border-gray-200 text-center">3</td>
                                        <td class="py-1 px-1 border border-gray-200 text-center">4</td>
                                        <td class="py-1 px-1 border border-gray-200 text-center">5</td>
                                        <td class="py-1 px-1 border border-gray-200 text-center bg-blue-300"></td>
                                        <td class="py-1 px-1 border border-gray-200 text-center bg-yellow-300"></td>
                                        <td class="py-1 px-1 border border-gray-200 text-center">8</td>
                                        <td class="py-1 px-1 border border-gray-200 text-center">9</td>
                                        <td class="py-1 px-1 border border-gray-200 text-center">10</td>
                                        <td class="py-1 px-1 border border-gray-200 text-center">11</td>
                                        <td class="py-1 px-1 border border-gray-200 text-center">12</td>
                                        <td class="py-1 px-1 border border-gray-200 text-center">13</td>
                                        <td class="py-1 px-1 border border-gray-200 text-center">14</td>
                                        <td class="py-1 px-1 border border-gray-200 text-center">15</td>
                                        <td class="py-1 px-1 border border-gray-200 text-center">16</td>
                                        <td class="py-1 px-1 border border-gray-200 text-center">17</td>
                                        <td class="py-1 px-1 border border-gray-200 text-center">18</td>
                                        <td class="py-1 px-1 border border-gray-200 text-center">19</td>
                                        <td class="py-1 px-1 border border-gray-200 text-center">20</td>
                                        <td class="py-1 px-1 border border-gray-200 text-center">21</td>
                                        <td class="py-1 px-1 border border-gray-200 text-center">22</td>
                                        <td class="py-1 px-1 border border-gray-200 text-center">23</td>
                                        <td class="py-1 px-1 border border-gray-200 text-center">24</td>
                                        <td class="py-1 px-1 border border-gray-200 text-center">25</td>
                                        <td class="py-1 px-1 border border-gray-200 text-center">26</td>
                                        <td class="py-1 px-1 border border-gray-200 text-center">27</td>
                                        <td class="py-1 px-1 border border-gray-200 text-center">28</td>
                                        <td class="py-1 px-1 border border-gray-200 text-center">29</td>
                                        <td class="py-1 px-1 border border-gray-200 text-center">30</td>
                                        <td class="py-1 px-1 border border-gray-200 text-center">31</td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>                    
                </div>
            </div> 
        </div>
    </div>
</x-app-layout>



