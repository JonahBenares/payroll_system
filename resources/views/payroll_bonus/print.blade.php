<x-print-layout>
    <style>
        body{
            background:#f0f1f3;
        }
    </style>
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
    <div class="justify-center flex my-5 ">
        <a href="{{ route("payrollbonus.index") }}" class="flex items-center justify-center px-3 py-2 mx-1 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-green-500 rounded-2xl white:bg-green-600 white:hover:bg-green-700 white:focus:bg-green-700 hover:bg-green-600 focus:outline-none focus:bg-green-500 focus:ring focus:ring-green-300 focus:ring-opacity-50" >Back</a>
        <input name="b_print" type="button" class="flex items-center justify-center px-3 py-2 mx-1 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" onClick="printdiv('div_print');" value="Print">
    </div>
    <page size="letter" id="div_print" class="shadow-lg">
        <div class="p-5">
            <div class="flex justify-between h-1/2 px-6 ">
                <div class="payslip m-2">
                    <table class="border-2 border-x border-y border-gray-600  payslip_table w-full">
                        <tr>
                            <td class="px-1  border-b border-gray-600 font-bold uppercase font-xxs text-center" colspan="2">Central Negros Power Reliability, Inc.</td>
                        </tr>
                        <tr>
                            <td class="px-1 text-center" colspan="2"><small>  Corner Rizal-Mabini Sts., Bacolod City </small></td>
                        </tr>
                        <tr>
                            <td class="px-1 pt-1 border-b border-gray-600 uppercase  leading-none" colspan="2">Name: <span class="font-bold text-xs">Jonah May Benares</span></td>
                        </tr>
                        <tr>
                            <td class="px-1 pt-1 border-b border-gray-600" colspan="2">Period: (Sept 21-Oct 5, 2022) Oct 15, 2022 </td>
                        </tr>
                        <tr>
                            <td class="px-1" colspan="2">Gross Pay:</td>
                        </tr>
                        <tr>
                            <td width="60%" class="px-5">Performance Bonus</td>
                            <td width="40%" class="px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Rest Day</td>
                            <td class="px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Holiday</td>
                            <td class="px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Overtime Pay</td>
                            <td class="px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Night Premium</td>
                            <td class="px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Adjustments</td>
                            <td class="px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">20% COMECQ Allowance</td>
                            <td class="px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Total</td>
                            <td class="px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Less:</td>
                            <td class="px-1"></td>
                        </tr>
                        <tr>
                            <td class="px-5">Absences/Undertime</td>
                            <td class="px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Tardiness</td>
                            <td class="px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="pl-10">Gross Pay</td>
                            <td class="px-1 border-b-2 border-gray-600 text-right">5,588</td>
                        </tr>
                        <tr>
                            <td class="px-1 pt-2">Deductions:</td>
                            <td class="px-1"></td>
                        </tr>
                        <tr>
                            <td class="px-5">SSS Premium</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">SSS Loan</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Withholding Tax</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Phil Health</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Pag-Ibig Fund</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Pag-Ibig Loan</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Pag-Ibig MP2</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Coop Investment</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Coop Loan</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">AUB Loan</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Others</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="pl-10">Total Deductions</td>
                            <td class="px-1 px-1 border-b-2 border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="pt-2"></td>
                        </tr>
                        <tr>
                            <td class="px-1">Net Pay</td>
                            <td class="px-1 border-y-2 border-l-2 border-gray-600 font-bold align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        
                        <tr>
                            <td class="px-1 pt-1 border-b border-gray-600" colspan="2">Period: (Sept 21-Oct 5, 2022) Oct 15, 2022 </td>
                        </tr>
                        <tr>
                            <td class="px-1 pt-2">Net pay receive</td>
                            <td class="px-1 pt-2 border-b border-gray-600 align-bottom flex justify-between">
                            <span class="font-bold">Php</span>
                            <span class="font-bold">10,011</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-1">Name/Signature:</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom flex justify-between"><br></td>
                        </tr>
                        <tr>
                            <td class="px-1">Date:</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom flex justify-between"><br></td>
                        </tr>
                        <tr>
                            <td class="px-1" colspan="2"><br></td>
                        </tr>
                        <tr>
                            <td class="text-center font-bold" colspan="2">(Employee's Copy)</td>
                        </tr> 
                    </table>
                </div>
                <div class="border-r-2 border-dashed"></div>
                <div class="payslip m-2">
                    <table class="border-2 border-x border-y border-gray-600  payslip_table w-full">
                        <tr>
                            <td class="px-1  border-b border-gray-600 font-bold uppercase font-xxs text-center" colspan="2">Central Negros Power Reliability, Inc.</td>
                        </tr>
                        <tr>
                            <td class="px-1 text-center" colspan="2"><small>  Corner Rizal-Mabini Sts., Bacolod City </small></td>
                        </tr>
                        <tr>
                            <td class="px-1 pt-1 border-b border-gray-600 uppercase  leading-none" colspan="2">Name: <span class="font-bold text-xs">Jonah May Benares</span></td>
                        </tr>
                        <tr>
                            <td class="px-1 pt-1 border-b border-gray-600" colspan="2">Period: (Sept 21-Oct 5, 2022) Oct 15, 2022 </td>
                        </tr>
                        <tr>
                            <td class="px-1" colspan="2">Gross Pay:</td>
                        </tr>
                        <tr>
                            <td width="60%" class="px-5">Performance Bonus</td>
                            <td width="40%" class="px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Rest Day</td>
                            <td class="px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Holiday</td>
                            <td class="px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Overtime Pay</td>
                            <td class="px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Night Premium</td>
                            <td class="px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Adjustments</td>
                            <td class="px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">20% COMECQ Allowance</td>
                            <td class="px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Total</td>
                            <td class="px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Less:</td>
                            <td class="px-1"></td>
                        </tr>
                        <tr>
                            <td class="px-5">Absences/Undertime</td>
                            <td class="px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Tardiness</td>
                            <td class="px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="pl-10">Gross Pay</td>
                            <td class="px-1 border-b-2 border-gray-600 text-right">5,588</td>
                        </tr>
                        <tr>
                            <td class="px-1 pt-2">Deductions:</td>
                            <td class="px-1"></td>
                        </tr>
                        <tr>
                            <td class="px-5">SSS Premium</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">SSS Loan</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Withholding Tax</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Phil Health</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Pag-Ibig Fund</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Pag-Ibig Loan</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Pag-Ibig MP2</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Coop Investment</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Coop Loan</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">AUB Loan</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Others</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="pl-10">Total Deductions</td>
                            <td class="px-1 px-1 border-b-2 border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="pt-2"></td>
                        </tr>
                        <tr>
                            <td class="px-1">Net Pay</td>
                            <td class="px-1 border-y-2 border-l-2 border-gray-600 font-bold align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        
                        <tr>
                            <td class="px-1 pt-1 border-b border-gray-600" colspan="2">Period: (Sept 21-Oct 5, 2022) Oct 15, 2022 </td>
                        </tr>
                        <tr>
                            <td class="px-1 pt-2">Net pay receive</td>
                            <td class="px-1 pt-2 border-b border-gray-600 align-bottom flex justify-between">
                            <span class="font-bold">Php</span>
                            <span class="font-bold">10,011</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-1">Name/Signature:</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom flex justify-between"><br></td>
                        </tr>
                        <tr>
                            <td class="px-1">Date:</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom flex justify-between"><br></td>
                        </tr>
                        <tr>
                            <td class="px-1" colspan="2"><br></td>
                        </tr>
                        <tr>
                            <td class="text-center font-bold" colspan="2">(Employer's Copy)</td>
                        </tr> 
                    </table>
                </div>
            </div>
            {{-- <div class="flex justify-between h-1/2 px-6 ">
                <div class="payslip m-2 ">
                    <table class="border-2 border-x border-y border-gray-600  payslip_table w-full">
                        <tr>
                            <td class="px-1  border-b border-gray-600 font-bold uppercase font-xxs text-center" colspan="2">Central Negros Power Reliability, Inc.</td>
                        </tr>
                        <tr>
                            <td class="px-1 text-center" colspan="2"><small>  Corner Rizal-Mabini Sts., Bacolod City </small></td>
                        </tr>
                        <tr>
                            <td class="px-1 pt-1 border-b border-gray-600 uppercase  leading-none" colspan="2">Name: <span class="font-bold text-xs">5,588 name</span></td>
                        </tr>
                        <tr>
                            <td class="px-1 pt-1 border-b border-gray-600" colspan="2">Period: (Sept 21-Oct 5, 2022) Oct 15, 2022 </td>
                        </tr>
                        <tr>
                            <td class="px-1" colspan="2">Gross Pay:</td>
                        </tr>
                        <tr>
                            <td width="60%" class="px-5">Performance Bonus</td>
                            <td width="40%" class="px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Rest Day</td>
                            <td class="px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Holiday</td>
                            <td class="px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Overtime Pay</td>
                            <td class="px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Night Premium</td>
                            <td class="px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Adjustments</td>
                            <td class="px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">20% COMECQ Allowance</td>
                            <td class="px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Total</td>
                            <td class="px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Less:</td>
                            <td class="px-1"></td>
                        </tr>
                        <tr>
                            <td class="px-5">Absences/Undertime</td>
                            <td class="px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Tardiness</td>
                            <td class="px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="pl-10">Gross Pay</td>
                            <td class="px-1 border-b-2 border-gray-600 text-right">5,588</td>
                        </tr>
                        <tr>
                            <td class="px-1 pt-2">Deductions:</td>
                            <td class="px-1"></td>
                        </tr>
                        <tr>
                            <td class="px-5">SSS Premium</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">SSS Loan</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Withholding Tax</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Phil Health</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Pag-Ibig Fund</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Pag-Ibig Loan</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Pag-Ibig MP2</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Coop Investment</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Coop Loan</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">AUB Loan</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Others</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="pl-10">Total Deductions</td>
                            <td class="px-1 px-1 border-b-2 border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="pt-2"></td>
                        </tr>
                        <tr>
                            <td class="px-1">Net Pay</td>
                            <td class="px-1 border-y-2 border-l-2 border-gray-600 font-bold align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        
                        <tr>
                            <td class="px-1 pt-1 border-b border-gray-600" colspan="2">Period: (Sept 21-Oct 5, 2022) Oct 15, 2022 </td>
                        </tr>
                        <tr>
                            <td class="px-1 pt-2">Net pay receive</td>
                            <td class="px-1 pt-2 border-b border-gray-600 align-bottom flex justify-between">
                            <span class="font-bold">Php</span>
                            <span class="font-bold">10,011</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-1">Name/Signature:</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom flex justify-between"><br></td>
                        </tr>
                        <tr>
                            <td class="px-1">Date:</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom flex justify-between"><br></td>
                        </tr>
                        <tr>
                            <td class="px-1" colspan="2"><br></td>
                        </tr>
                        <tr>
                            <td class="text-center font-bold" colspan="2">(Employee's Copy)</td>
                        </tr> 
                    </table>
                </div>
                <div class="border-r-2 border-dashed"></div>
                <div class="payslip m-2">
                    <table class="border-2 border-x border-y border-gray-600  payslip_table w-full">
                        <tr>
                            <td class="px-1  border-b border-gray-600 font-bold uppercase font-xxs text-center" colspan="2">Central Negros Power Reliability, Inc.</td>
                        </tr>
                        <tr>
                            <td class="px-1 text-center" colspan="2"><small>  Corner Rizal-Mabini Sts., Bacolod City </small></td>
                        </tr>
                        <tr>
                            <td class="px-1 pt-1 border-b border-gray-600 uppercase  leading-none" colspan="2">Name: <span class="font-bold text-xs">5,588 name</span></td>
                        </tr>
                        <tr>
                            <td class="px-1 pt-1 border-b border-gray-600" colspan="2">Period: (Sept 21-Oct 5, 2022) Oct 15, 2022 </td>
                        </tr>
                        <tr>
                            <td class="px-1" colspan="2">Gross Pay:</td>
                        </tr>
                        <tr>
                            <td width="60%" class="px-5">Performance Bonus</td>
                            <td width="40%" class="px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Rest Day</td>
                            <td class="px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Holiday</td>
                            <td class="px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Overtime Pay</td>
                            <td class="px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Night Premium</td>
                            <td class="px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Adjustments</td>
                            <td class="px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">20% COMECQ Allowance</td>
                            <td class="px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Total</td>
                            <td class="px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Less:</td>
                            <td class="px-1"></td>
                        </tr>
                        <tr>
                            <td class="px-5">Absences/Undertime</td>
                            <td class="px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Tardiness</td>
                            <td class="px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="pl-10">Gross Pay</td>
                            <td class="px-1 border-b-2 border-gray-600 text-right">5,588</td>
                        </tr>
                        <tr>
                            <td class="px-1 pt-2">Deductions:</td>
                            <td class="px-1"></td>
                        </tr>
                        <tr>
                            <td class="px-5">SSS Premium</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">SSS Loan</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Withholding Tax</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Phil Health</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Pag-Ibig Fund</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Pag-Ibig Loan</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Pag-Ibig MP2</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Coop Investment</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Coop Loan</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">AUB Loan</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5">Others</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td class="pl-10">Total Deductions</td>
                            <td class="px-1 px-1 border-b-2 border-gray-600 align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="pt-2"></td>
                        </tr>
                        <tr>
                            <td class="px-1">Net Pay</td>
                            <td class="px-1 border-y-2 border-l-2 border-gray-600 font-bold align-bottom text-right">
                            5,588
                            </td>
                        </tr>
                        
                        <tr>
                            <td class="px-1 pt-1 border-b border-gray-600" colspan="2">Period: (Sept 21-Oct 5, 2022) Oct 15, 2022 </td>
                        </tr>
                        <tr>
                            <td class="px-1 pt-2">Net pay receive</td>
                            <td class="px-1 pt-2 border-b border-gray-600 align-bottom flex justify-between">
                            <span class="font-bold">Php</span>
                            <span class="font-bold">10,011</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-1">Name/Signature:</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom flex justify-between"><br></td>
                        </tr>
                        <tr>
                            <td class="px-1">Date:</td>
                            <td class="px-1 px-1 border-b border-gray-600 align-bottom flex justify-between"><br></td>
                        </tr>
                        <tr>
                            <td class="px-1" colspan="2"><br></td>
                        </tr>
                        <tr>
                            <td class="text-center font-bold" colspan="2">(Employee's Copy)</td>
                        </tr> 
                    </table>
                </div>
            </div> --}}
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