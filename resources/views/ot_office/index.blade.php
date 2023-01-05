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
                <div class="flex space-x-2 pb-5">
                    <a href="{{ route('otOffice.index') }}" class="hover:bg-blue-300 bg-blue-500 text-sm px-5 py-1 rounded-2xl text-white font-bold">DTR Office</a>
                    <a href="{{ route('otSite.index') }}" class="hover:bg-emerald-200 hover:text-white  bg-gray-100  text-sm px-6 py-1 rounded-2xl text-gray-300 font-bold">DTR Site</a>
                </div>
                <form action="">
                    <div class="flex justify-between space-x-4 w-full my-1">
                        {{-- <div class="space-y-1 w-2/12 rounded-md bg-green-100">
                            <h2 class="uppercase font-semibold py-3">DTR Office</h2>
                        </div> --}}
                        <div class="space-y-1 w-7/12">
                            <div class="flex justify-between space-x-2">
                                <p class="text-sm w-24 text-left">Name:</p>
                                <input type="text" class="px-0 text-sm bg-transparent border-0 text-left py-0 border-b border-gray-300 w-full">
                            </div>
                            <div class="flex justify-between space-x-2">
                                <p class="text-sm w-24 text-left">Designation:</p>
                                <input type="text" class="px-0 text-sm bg-transparent border-0 text-left py-0 border-b border-gray-300 w-full">
                            </div>
                        </div>
                        <div class="space-y-1 w-5/12">
                            <div class="flex justify-between space-x-2">
                                <p class="text-sm w-24 text-right">Period:</p>
                                <input type="text" class="px-0 text-sm bg-transparent border-0 text-left py-0 border-b border-gray-300 w-full">
                            </div>
                        </div>
                    </div>
                    <div class=" hover:overflow-x-auto overflow-x-hidden h-100 max-h-100 pt-2 pr-2 pl-2 mt-3 md:pt-0 md:pr-0 md:pl-0 ">
                        <table class="border border-gray-300 text-sm w-full">
                            <tr>
                                <td class="border border-gray-300 px-2 text-left" width="40%">Regular Working Days</td>
                                <td class="border border-gray-300 px-2 text-right text-xs" width="20%"> 1,495.21</td>
                                <td class="border border-gray-300 px-2 text-right text-xs" width="20%">1,000.00</td>
                                <td class="border border-gray-300 px-2 text-right text-xs" width="20%">19,000.00</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">Rest Day</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> 1,495.21</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">1,000.00</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">19,000.00</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">Special Holiday</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> 1,495.21</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">1,000.00</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">19,000.00</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">Special Holiday falling on RD</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> 1,495.21</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">1,000.00</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">19,000.00</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">Regular Holiday</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> 1,495.21</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">1,000.00</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">19,000.00</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">Regular Holiday falling on Restday</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> 1,495.21</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">1,000.00</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">19,000.00</td>
                            </tr>
                            <tr class="bg-gray-200">
                                <td class="border border-gray-300 px-2 text-left font-bold">Gross Pay</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> </td>
                                <td class="border border-gray-300 px-2 text-right text-xs"></td>
                                <td class="border border-gray-300 px-2 text-right font-bold">23,387.00</td>
                            </tr>
                            

                            <tr>
                                <td class="border border-gray-300 px-2 text-left">Absences</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> 1,495.21</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">1,000.00</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">19,000.00</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">Undertime</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> 1,495.21</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">1,000.00</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">19,000.00</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">Tardiness</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> 1,495.21</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">1,000.00</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">19,000.00</td>
                            </tr>
                            <tr class="bg-gray-200">
                                <td class="border border-gray-300 px-2 text-left font-bold">Total</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> </td>
                                <td class="border border-gray-300 px-2 text-right text-xs"></td>
                                <td class="border border-gray-300 px-2 text-right font-bold">23,387.00</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">Adjustments</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> 1,495.21</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">1,000.00</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">19,000.00</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left text-xs font-bold">SALARY INCREMENT- P39,000 (April 26-May 5, 2022)</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> 1,495.21</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">1,000.00</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">19,000.00</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left text-xs font-bold">SALARY OLD RATE- 36,100</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> 1,495.21</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">1,000.00</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">19,000.00</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left text-xs font-bold"></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"></td>
                                <td class="border border-gray-300 px-2 text-right text-xs font-bold bg-blue-200">19,000.00</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left text-sm">RH Duty New Rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> 1,495.21</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">1,000.00</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">19,000.00</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left text-sm">RH Duty Old Rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> 1,495.21</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">1,000.00</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">19,000.00</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left text-xs font-bold"></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"></td>
                                <td class="border border-gray-300 px-2 text-right text-xs font-bold bg-blue-200">19,000.00</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left text-sm">NP New Rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> 1,495.21</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">1,000.00</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">19,000.00</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left text-sm">NP Old Rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> 1,495.21</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">1,000.00</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">19,000.00</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left text-xs font-bold"></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"></td>
                                <td class="border border-gray-300 px-2 text-right text-xs font-bold bg-blue-200">19,000.00</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left text-sm">RHNP OT New Rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> 1,495.21</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">1,000.00</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">19,000.00</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left text-sm">RHNP OT Old Rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> 1,495.21</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">1,000.00</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">19,000.00</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left text-xs font-bold"></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"></td>
                                <td class="border border-gray-300 px-2 text-right text-xs font-bold bg-blue-200">19,000.00</td>
                            </tr>
                            <tr class="bg-gray-200">
                                <td class="border border-gray-300 px-2 text-left font-bold">TOTAL Adjustment</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> </td>
                                <td class="border border-gray-300 px-2 text-right text-xs"></td>
                                <td class="border border-gray-300 px-2 text-right font-bold">23,387.00</td>
                            </tr>






                            <tr>
                                <td class="border border-gray-300 px-2 text-left text-xs font-bold" colspan="4">OVERTIME</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">Reg OT rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> 1,495.21</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">1,000.00</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">19,000.00</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">RD/SH OT rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> 1,495.21</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">1,000.00</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">19,000.00</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">SH on RD OT rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> 1,495.21</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">1,000.00</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">19,000.00</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">RH OT rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> 1,495.21</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">1,000.00</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">19,000.00</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">RH on RD OT rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> 1,495.21</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">1,000.00</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">19,000.00</td>
                            </tr>
                            <tr class="bg-gray-200">
                                <td class="border border-gray-300 px-2 text-left font-bold">Total Overtime</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> </td>
                                <td class="border border-gray-300 px-2 text-right text-xs"></td>
                                <td class="border border-gray-300 px-2 text-right font-bold">23,387.00</td>
                            </tr>






                            <tr>
                                <td class="border border-gray-300 px-2 text-left text-xs font-bold" colspan="4">NIGHT SHIFT PREMIUM</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">Reg NSP Rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> 1,495.21</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">1,000.00</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">19,000.00</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">Reg NSP OT Rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> 1,495.21</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">1,000.00</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">19,000.00</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">RD/SH NSP Rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> 1,495.21</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">1,000.00</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">19,000.00</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">RD/SH NSP OT Rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> 1,495.21</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">1,000.00</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">19,000.00</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">SH on RD NSP rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> 1,495.21</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">1,000.00</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">19,000.00</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">SH on RD OT NSP rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> 1,495.21</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">1,000.00</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">19,000.00</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">RH NSP Rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> 1,495.21</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">1,000.00</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">19,000.00</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">RH NSP OT Rate </td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> 1,495.21</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">1,000.00</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">19,000.00</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left"> RH on RD rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> 1,495.21</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">1,000.00</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">19,000.00</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">RH on RD OT rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> 1,495.21</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">1,000.00</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">19,000.00</td>
                            </tr>
                            <tr class="bg-gray-200">
                                <td class="border border-gray-300 px-2 text-left font-bold">Total Night Premium  </td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> </td>
                                <td class="border border-gray-300 px-2 text-right text-xs"></td>
                                <td class="border border-gray-300 px-2 text-right font-bold">23,387.00</td>
                            </tr>
                            <tr class="bg-yellow-200">
                                <td class="border border-gray-300 px-2 text-left font-bold">TOTAL OT & NP</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> </td>
                                <td class="border border-gray-300 px-2 text-right text-xs"></td>
                                <td class="border border-gray-300 px-2 text-right font-bold">23,387.00</td>
                            </tr>
                            <tr class="bg-orange-200">
                                <td class="border border-gray-300 px-2 text-left font-bold">TOTAL COMPUTATION</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> </td>   
                                <td class="border border-gray-300 px-2 text-right text-xs"></td>
                                <td class="border border-gray-300 px-2 text-right text-base font-bold">23,387.00</td>
                            </tr>
                            
                        </table>
                    </div>
                   


                </form>
            </div>
        </div>
    </div>
</x-app-layout>
