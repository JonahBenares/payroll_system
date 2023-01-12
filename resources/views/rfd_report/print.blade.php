<x-print-layout>
    <style>
        body{
            background:#f0f1f3;
        }
    </style>
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
    <div class="justify-center flex my-5 ">
        <a href="{{ route("rfdreport.index") }}" class="flex items-center justify-center px-3 py-2 mx-1 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-green-500 rounded-2xl white:bg-green-600 white:hover:bg-green-700 white:focus:bg-green-700 hover:bg-green-600 focus:outline-none focus:bg-green-500 focus:ring focus:ring-green-300 focus:ring-opacity-50" >Back</a>
        <input name="b_print" type="button" class="flex items-center justify-center px-3 py-2 mx-1 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" onClick="printdiv('div_print');" value="Print">
    </div>
    <page size="A4" id="div_print" class="shadow-lg">
        <div class="p-5">
            <table class="border border-b-0 w-full text-xs" >
                <tr>
                    <td class="" width="8.33%"></td>
                    <td class="" width="8.33%"></td>
                    <td class="" width="8.33%"></td>
                    <td class="" width="8.33%"></td>
                    <td class="" width="8.33%"></td>
                    <td class="" width="8.33%"></td>
                    <td class="" width="8.33%"></td>
                    <td class="" width="8.33%"></td>
                    <td class="" width="8.33%"></td>
                    <td class="" width="8.33%"></td>
                    <td class="" width="8.33%"></td>
                    <td class="" width="8.33%"></td>
                </tr>
                @foreach($head AS $h)
                <tr>
                    <td colspan="12" class="align-center text-center pb-5">
                        <p class="text-base font-bold">{{ getCompanyLongName($h->bu_id) }}</p>    
                        <span>REQUEST FOR DISBURSEMENT</span>
                    </td>
                </tr>
                <tr class="">
                    <td colspan="8"></td>
                    <td></td>
                    <td class="font-bold text-right">APV:</td>
                    <td class="pl-1 border-b" colspan="2">{{ $h->apv_no }}</td>
                </tr>
                <tr class="">
                    <td class="font-bold">Company:</td>
                    <td class="border-b" colspan="7">{{ $h->company }}</td>
                    <td ></td>
                    <td class="font-bold text-right">Date:</td>
                    <td class="pl-1 border-b" colspan="2">{{ $h->rfd_date }}</td>
                </tr>
                <tr class="">
                    <td class="font-bold">Pay To:</td>
                    <td class="border-b" colspan="7">{{ $h->pay_to }}</td>
                    <td ></td>
                    <td class="font-bold text-right">Due Date:</td>
                    <td class="pl-1 border-b" colspan="2">{{ $h->due_date }}</td>
                </tr>
                <tr class="">
                    <td></td>
                    <td class="font-bold" colspan="2">PERIOD COVERED:</td>
                    <td class="border-b" colspan="5">{{ date('M j, Y',strtotime($h->from_date)) .' to ' . date('M j, Y',strtotime($h->to_date)) }}</td>
                    <td class="font-bold text-right"></td>
                    <td class="pl-1" colspan="3"></td>
                </tr>
                @endforeach
                <tr class="">
                    <td colspan="12"><br></td>
                </tr>
            </table>
            <table class="text-xs border border-b-0 w-full">
                <thead class="uppercase">
                    <tr class="border">
                        <th class="py-1 px-1 text-center" width="3%">
                            #
                        </th>
                        <th class="py-1 px-1" width="27%">
                            Particular 
                        </th>
                        <th class="py-1 px-1" width="26%">
                            Name
                        </th>
                        <th class="py-1 px-1 text-center" width="10%">
                            Rate/Day
                        </th>
                        <th class="py-1 px-1" width="20%"> 
                            Remarks
                        </th>
                        <th class="py-1 px-1 text-center" width="14%">
                            Amount
                        </th>
                    </tr>
                </thead>
                <tbody>
                 @php $x=1;
                 $total = array(); @endphp
                    @foreach($details AS $det)
                    @if($det->total_allowance > 0)
                                    @php $total[] = $det->total_allowance; @endphp
                    <tr>
                        <td class="py-1 px-1 ">
                        {{ $x }}
                        </td>
                        <td class="py-1 px-1 ">
                        {{ $allowance_name }}
                        </td>
                        <td class="py-1 px-1 ">
                        {{ getEmployeeName($det->employee_id) }}
                        </td>
                        <td class="py-1 px-1 text-center">
                        {{ number_format($det->allowance_amount,2) }}
                        </td>
                        <td class="py-1 px-1 ">
                        {{ $det->remarks }}
                        </td>
                        <td class="py-1 px-1 text-right">
                        {{ number_format($det->total_allowance,2) }}
                        </td>
                    </tr>
                    @php $x++ @endphp
                    @endif
                   @endforeach
                    <tr>
                        <td class="py-1 px-1 ">
                        </td>
                        <td class="py-1 px-1 ">
                        </td>
                        <td class="py-1 px-1 ">
                        </td>
                        <td class="py-1 px-1 text-center">
                            Sub Total
                        </td>
                        <td class="py-1 px-1 ">
                            
                        </td>
                        <td class="py-1 px-1 text-right font-bold border-b-2 border-gray-700  border-t">
                        {{ number_format(array_sum($total),2) }}
                        </td>
                    </tr>
                    <tr>
                        <td colspan="6"><br></td>
                    </tr>
                </tbody>
            </table>
            <table class="text-xs border border-t-0 w-full">
                <tr>
                    <td width="33.33%"></td>
                    <td width="33.33%"></td>
                    <td width="33.33%"></td>
                </tr>
                <tr>
                    <td class="font-bold uppercase text-right border text-sm py-1 px-1" colspan="2">TOTAL</td>
                    <td class="font-bold text-right border text-sm py-1 px-1">{{ number_format(array_sum($total),2) }}</td>
                </tr>
                <tr>
                    <td class="text-center border space-y-5">
                        <p class="">Prepared by:</p>
                        <p class="font-bold">{{ $session_name }}</p>
                    </td>
                    <td class="text-center border space-y-5">
                        <p class="">Checked by:</p>
                        <p class="font-bold">Cristy Cesar</p>
                    </td>
                    <td class="text-center border space-y-5">
                        <p class="">Endorsed for payment by:</p>
                        <p class="font-bold">Marianita Tabilla</p>
                    </td>
                </tr>
            </table>
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