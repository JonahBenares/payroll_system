<x-print-layout>
    <style>
        body{
            background:#f0f1f3;
        }
    </style>
    <div class="justify-center flex my-5" id="print_buttons">
        <a href="{{ route("payroll_allowance.index") }}" class="flex items-center justify-center px-3 py-2 mx-1 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-green-500 rounded-2xl white:bg-green-600 white:hover:bg-green-700 white:focus:bg-green-700 hover:bg-green-600 focus:outline-none focus:bg-green-500 focus:ring focus:ring-green-300 focus:ring-opacity-50" >Back</a>
        {{-- <input name="b_print" type="button" class="flex items-center justify-center px-3 py-2 mx-1 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" onClick="printdiv('div_print');" value="Print"> --}}
        <button class="flex items-center justify-center px-3 py-2 mx-1 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" onclick="window.print();">Print</button>
    </div>
    <page size="A4" id="div_print" class=" px-3 py-1">
        <div class="">
            <div class="">   
                <table class="border border-x border-y border-gray-300 mt-2 text-xs w-full">
                    <tr>
                        <td colspan="5" class="text-center py-5">
                            <x-cenpri-logo  />
                            <span class="uppercase font-bold text-base">Central Negros Power Reliability, Inc.</span><br>
                            <span class="uppercase">Request for Disbursement</span>
                        </td>
                    </tr>                                            
                    <tr>
                        <td width="10%"></td>
                        <td></td>
                        <td width="5%"></td>
                        <td width="10%">APV:</td>
                        <td width="20%"class="border-b"></td>
                    </tr>
                  
                    <tr>
                        <td>Company</td>
                        <td class="border-b">{{ getBUName($emp_id) }}</td>
                        <td ></td>
                        <td>Date:</td>
                        <td class="border-b"></td>
                    </tr>
                   
                    <tr>
                        <td>Pay To:</td>
                        <td class="border-b">{{ getEmployeeName($emp_id) }}</td>
                        <td></td>
                        <td>Due Date:</td>
                        <td class="border-b"></td>
                    </tr>
                   
                    <tr>
                        <td colspan="5" class="pt-2"></td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <div class="flex justify-left pl-16">
                                <div class="flex justify-between mx-3">
                                    <span class="border-b w-10">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-3 text-green-700">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                        </svg>
                                    </span>
                                    <span>Cash</span>
                                </div>
                                <div class="flex justify-between mx-3">
                                    <span class="border-b w-10"></span>
                                    <span>Check</span>
                                </div>
                            </div>
                        </td>
                        <td>Bank/No:</td>
                        <td class="border-b"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="pt-2"></td>
                    </tr>
                    <tr>
                        <td colspan="5">
                            <table class="w-full">
                                <tr>
                                    <td colspan="3" class="border text-center">Explanation</td>
                                    <td colspan="2" width="20%" class="border text-center">Amount</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="border-r"><br></td>
                                    <td colspan="" ><br></td>
                                    <td colspan="" ><br></td>
                                </tr>
                              
                                @foreach($allowance_head AS $head)
                                <tr>
                                    <td colspan="3" class="border-r pl-20"><b>{{ getAllowanceName($head->allowance_id) }} for Period {{ date("M j, Y",strtotime($head->from_date)) }} to {{ date("M j, Y", strtotime($head->to_date)) }} @ Php {{ getAllowance($id, $head->id, 'amount') }}</b></td>
                                    <td class=" text-center">Php</td>
                                    <td class=" text-right"> {{ number_format(getAllowance($id, $head->id, 'total'),2) }}</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td colspan="3" class="border-r pl-20"><small>Actual Duty</small></td>
                                    <td class=" text-center"></td>
                                    <td class=" text-center"></td>
                                </tr>
                                @foreach($allowance_time AS $time)
                                <tr>
                                    <td colspan="3" class="border-r pl-20">{{ date("F j, Y",strtotime($time->duty_date)) }}
                                       <span class="pl-10">
                                        @if($time->time_hours >= 14)
                                               {{ $time->time_in . " - " . $time->time_out . " ADD 50" }}
                                        @endif
                                        </span>
                                    </td>
                                    <td class=" text-center">Php</td>
                                    <td class=" text-right">

                                        @if($time->time_hours >= 14)
                                            {{ $amount = getAllowance($id, $head_id, 'amount') + 50 }}
                                             
                                        @else
                                            {{ $amount = getAllowance($id, $head_id, 'amount') }}
                                          
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td colspan="3" class="border-r border-b"><br><br><br><br><br></td>
                                    <td colspan=""  class="border-b"><br></td>
                                    <td colspan=""  class="border-b"><br></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5">
                            <table class="w-full">
                                <tr>
                                    <td width="25%" class="border-r">Requested by:</td>
                                    <td width="25%" class="border-r">Checked by:</td>
                                    <td width="25%" class="border-r">Endoresed for payment by:</td>
                                    <td width="25%" class="">Received by:</td>
                                </tr>
                                <tr>
                                    <td class="border-r"></td>
                                    <td class="border-r"></td>
                                    <td class="border-r"></td>
                                    <td class=""><br></td>
                                </tr>
                                <tr>
                                    <td class="border-r text-center font-bold">{{ $session_name }}</td>
                                    <td class="border-r text-center font-bold">Cristy Cesar</td>
                                    <td class="border-r text-center font-bold">Marianita Tabilla</td>
                                    <td class=" text-center font-bold">{{ getEmployeeName($emp_id) }}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    
                </table>
            </div>
            {{-- <div class="border border-t-2 border-gray-200 border-dashed"></div> --}}
            <div class="">
                <table class="border border-x border-y border-gray-300 mt-2 text-xs w-full">
                    <tr>
                        <td colspan="5" class="text-center py-5">
                            <x-cenpri-logo />
                            <span class="uppercase font-bold text-base">Central Negros Power Reliability, Inc.</span><br>
                            <span class="uppercase">Request for Disbursement</span>
                        </td>
                    </tr>                                            
                    <tr>
                        <td width="10%"></td>
                        <td></td>
                        <td width="5%"></td>
                        <td width="10%">APV:</td>
                        <td width="20%"class="border-b"></td>
                    </tr>
                  
                    <tr>
                        <td>Company</td>
                        <td class="border-b">{{ getBUName($emp_id) }}</td>
                        <td ></td>
                        <td>Date:</td>
                        <td class="border-b"></td>
                    </tr>
                   
                    <tr>
                        <td>Pay To:</td>
                        <td class="border-b">{{ getEmployeeName($emp_id) }}</td>
                        <td></td>
                        <td>Due Date:</td>
                        <td class="border-b"></td>
                    </tr>
                    
                    <tr>
                        <td colspan="5" class="pt-2"></td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <div class="flex justify-left pl-16">
                                <div class="flex justify-between mx-3">
                                    <span class="border-b w-10">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-3 text-green-700">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                        </svg>
                                    </span>
                                    <span>Cash</span>
                                </div>
                                <div class="flex justify-between mx-3">
                                    <span class="border-b w-10"></span>
                                    <span>Check</span>
                                </div>
                            </div>
                        </td>
                        <td>Bank/No:</td>
                        <td class="border-b"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="pt-2"></td>
                    </tr>
                    <tr>
                        <td colspan="5">
                            <table class="w-full">
                                <tr>
                                    <td colspan="3" class="border text-center">Explanation</td>
                                    <td colspan="2" width="20%" class="border text-center">Amount</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="border-r"><br></td>
                                    <td colspan="" ><br></td>
                                    <td colspan="" ><br></td>
                                </tr>
                                @foreach($allowance_head AS $head)
                                <tr>
                                    <td colspan="3" class="border-r pl-20"><b>{{ getAllowanceName($head->allowance_id) }} for Period {{ date("M j, Y",strtotime($head->from_date)) }} to {{ date("M j, Y", strtotime($head->to_date)) }} @ Php {{ getAllowance($id, $head->id, 'amount') }}</b></td>
                                    <td class=" text-center">Php</td>
                                    <td class=" text-right"> {{ number_format(getAllowance($id, $head->id, 'total'),2) }}</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td colspan="3" class="border-r pl-20"><small>Actual Duty</small></td>
                                    <td class=" text-center"></td>
                                    <td class=" text-center"></td>
                                </tr>
                                @foreach($allowance_time AS $time)
                                <tr>
                                    <td colspan="3" class="border-r pl-20">{{ date("F j, Y",strtotime($time->duty_date)) }}
                                       <span class="pl-10">
                                        @if($time->time_hours >= 14)
                                               {{ $time->time_in . " - " . $time->time_out . " ADD 50" }}
                                        @endif
                                        </span>
                                    </td>
                                    <td class=" text-center">Php</td>
                                    <td class=" text-right">

                                        @if($time->time_hours >= 14)
                                            {{ $amount = getAllowance($id, $head_id, 'amount') + 50 }}
                                             
                                        @else
                                            {{ $amount = getAllowance($id, $head_id, 'amount') }}
                                          
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                                
                                <tr>
                                    <td colspan="3" class="border-r border-b"><br><br><br><br><br></td>
                                    <td colspan=""  class="border-b"><br></td>
                                    <td colspan=""  class="border-b"><br></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5">
                            <table class="w-full">
                                <tr>
                                    <td width="25%" class="border-r">Requested by:</td>
                                    <td width="25%" class="border-r">Checked by:</td>
                                    <td width="25%" class="border-r">Endoresed for payment by:</td>
                                    <td width="25%" class="">Received by:</td>
                                </tr>
                                <tr>
                                    <td class="border-r"></td>
                                    <td class="border-r"></td>
                                    <td class="border-r"></td>
                                    <td class=""><br></td>
                                </tr>
                                <tr>
                                    <td class="border-r text-center font-bold">{{ $session_name }}</td>
                                    <td class="border-r text-center font-bold">Cristy Cesar</td>
                                    <td class="border-r text-center font-bold">Marianita Tabilla</td>
                                    <td class=" text-center font-bold">{{ getEmployeeName($emp_id) }}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </page>

    <script language="javascript">
        function printdiv(printpage) {
            var headstr = "<html><head><title></title></head><body>";
            var footstr = "</body>";
            var newstr = document.all.item(printpage).innerHTML;
            var oldstr = document.body.innerHTML;
            document.body.innerHTML = headstr + newstr + footstr;
            window.print();
            document.body.innerHTML = oldstr;
            return false;
        }
    </script>
</x-print-layout>