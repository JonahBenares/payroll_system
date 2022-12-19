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
                <form action="">
                    <div class="flex justify-between space-x-4 w-full my-1">
                        <div class="space-y-1 w-2/12 rounded-md bg-green-100">
                            <h2 class="uppercase font-semibold py-3">DTR Office</h2>
                        </div>
                        <div class="space-y-1 w-6/12">
                            <div class="flex justify-between space-x-2">
                                <p class="text-sm w-24 text-left">Name:</p>
                                <input type="text" class="px-0 text-sm bg-transparent border-0 text-left py-0 border-b border-gray-300 w-full">
                            </div>
                            <div class="flex justify-between space-x-2">
                                <p class="text-sm w-24 text-left">Designation:</p>
                                <input type="text" class="px-0 text-sm bg-transparent border-0 text-left py-0 border-b border-gray-300 w-full">
                            </div>
                        </div>
                        <div class="space-y-1 w-4/12">
                            <div class="flex justify-between space-x-2">
                                <p class="text-sm w-24 text-right">Period:</p>
                                <input type="text" class="px-0 text-sm bg-transparent border-0 text-left py-0 border-b border-gray-300 w-full">
                            </div>
                        </div>
                    </div>
                    <div class=" hover:overflow-x-auto overflow-x-hidden h-100 max-h-100 pt-2 pr-2 pl-2 mt-3 md:pt-0 md:pr-0 md:pl-0 ">
                        <table class="border border-gray-300 text-xs w-full">
                            <tr>
                                <td class=""></td>
                                <td class="bg-blue-100 border border-gray-300" colspan="4">REGULAR</td>
                                <td class="bg-purple-200 border border-gray-300" colspan="6">NO. OF DAYS WORKED</td>
                                <td class="bg-green-100 break-words border border-gray-300" colspan="6">NIGHT PREMIUM</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td width="5%" class="border border-gray-300">DAY</td>
                                <td width="6%" class="bg-blue-100 border border-gray-300">IN</td>
                                <td width="6%" class="bg-blue-100 border border-gray-300">OUT</td>
                                <td width="6%" class="bg-blue-100 border border-gray-300">IN</td>
                                <td width="6%" class="bg-blue-100 border border-gray-300">OUT</td>
                                <td width="4%" class="bg-purple-200 break-words border border-gray-300 px-1" >REG DAY</td>
                                <td width="4%" class="bg-purple-200 break-words border border-gray-300 px-1" >RD2</td>
                                <td width="4%" class="bg-purple-200 break-words border border-gray-300 px-1" >SH</td>
                                <td width="4%" class="bg-purple-200 break-words border border-gray-300 px-1" >SH on RD2</td>
                                <td width="4%" class="bg-purple-200 break-words border border-gray-300 px-1" >Reg Hol</td>
                                <td width="4%" class="bg-purple-200 break-words border border-gray-300 px-1" >RH on RD2</td>
                                <td width="4%" class="bg-green-100 break-words border border-gray-300 px-1">REG NP</td>
                                <td width="4%" class="bg-green-100 break-words border border-gray-300 px-1">REG NP OT</td>
                                <td width="4%" class="bg-green-100 break-words border border-gray-300 px-1">RD2/SH NP</td>
                                <td width="4%" class="bg-green-100 break-words border border-gray-300 px-1">RD2/SH NP OT</td>
                                <td width="4%" class="bg-green-100 break-words border border-gray-300 px-1">RH NP</td>
                                <td width="4%" class="bg-green-100 break-words border border-gray-300 px-1">RH NP OT</td>
                                <td class="border border-gray-300 px-1">TARDY</td>
                                <td class="border border-gray-300 px-1">REMARKS</td>
                            </tr>
                            <tr>
                                <td>Aug</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-1">21</td>
                                <td class="border border-gray-300 px-1">07:30:07</td>
                                <td class="border border-gray-300 px-1">17:00:47</td>
                                <td class="border border-gray-300 px-1">18:30:03</td>
                                <td class="border border-gray-300 px-1">22:04:28</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">S7 0800H-1700H</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-1">22</td>
                                <td class="border border-gray-300 px-1">07:30:07</td>
                                <td class="border border-gray-300 px-1">17:00:47</td>
                                <td class="border border-gray-300 px-1">18:30:03</td>
                                <td class="border border-gray-300 px-1">22:04:28</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">S7 0800H-1700H</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-1">23</td>
                                <td class="border border-gray-300 px-1">07:30:07</td>
                                <td class="border border-gray-300 px-1">17:00:47</td>
                                <td class="border border-gray-300 px-1">18:30:03</td>
                                <td class="border border-gray-300 px-1">22:04:28</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">S7 0800H-1700H</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-1">24</td>
                                <td class="border border-gray-300 px-1">07:30:07</td>
                                <td class="border border-gray-300 px-1">17:00:47</td>
                                <td class="border border-gray-300 px-1">18:30:03</td>
                                <td class="border border-gray-300 px-1">22:04:28</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">S7 0800H-1700H</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-1">25</td>
                                <td class="border border-gray-300 px-1">07:30:07</td>
                                <td class="border border-gray-300 px-1">17:00:47</td>
                                <td class="border border-gray-300 px-1">18:30:03</td>
                                <td class="border border-gray-300 px-1">22:04:28</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">S7 0800H-1700H</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-1">26</td>
                                <td class="border border-gray-300 px-1">07:30:07</td>
                                <td class="border border-gray-300 px-1">17:00:47</td>
                                <td class="border border-gray-300 px-1">18:30:03</td>
                                <td class="border border-gray-300 px-1">22:04:28</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">S7 0800H-1700H</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-1">27</td>
                                <td class="border border-gray-300 px-1">07:30:07</td>
                                <td class="border border-gray-300 px-1">17:00:47</td>
                                <td class="border border-gray-300 px-1">18:30:03</td>
                                <td class="border border-gray-300 px-1">22:04:28</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">S7 0800H-1700H</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-1">28</td>
                                <td class="border border-gray-300 px-1">07:30:07</td>
                                <td class="border border-gray-300 px-1">17:00:47</td>
                                <td class="border border-gray-300 px-1">18:30:03</td>
                                <td class="border border-gray-300 px-1">22:04:28</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">S7 0800H-1700H</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-1">29</td>
                                <td class="border border-gray-300 px-1">07:30:07</td>
                                <td class="border border-gray-300 px-1">17:00:47</td>
                                <td class="border border-gray-300 px-1">18:30:03</td>
                                <td class="border border-gray-300 px-1">22:04:28</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">S7 0800H-1700H</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-1">30</td>
                                <td class="border border-gray-300 px-1">07:30:07</td>
                                <td class="border border-gray-300 px-1">17:00:47</td>
                                <td class="border border-gray-300 px-1">18:30:03</td>
                                <td class="border border-gray-300 px-1">22:04:28</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">S7 0800H-1700H</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-1">31</td>
                                <td class="border border-gray-300 px-1">07:30:07</td>
                                <td class="border border-gray-300 px-1">17:00:47</td>
                                <td class="border border-gray-300 px-1">18:30:03</td>
                                <td class="border border-gray-300 px-1">22:04:28</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">S7 0800H-1700H</td>
                            </tr>
                            <tr>
                                <td>Sep</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-1">01</td>
                                <td class="border border-gray-300 px-1">07:30:07</td>
                                <td class="border border-gray-300 px-1">17:00:47</td>
                                <td class="border border-gray-300 px-1">18:30:03</td>
                                <td class="border border-gray-300 px-1">22:04:28</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">S7 0800H-1700H</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-1">02</td>
                                <td class="border border-gray-300 px-1">07:30:07</td>
                                <td class="border border-gray-300 px-1">17:00:47</td>
                                <td class="border border-gray-300 px-1">18:30:03</td>
                                <td class="border border-gray-300 px-1">22:04:28</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">S7 0800H-1700H</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-1">03</td>
                                <td class="border border-gray-300 px-1">07:30:07</td>
                                <td class="border border-gray-300 px-1">17:00:47</td>
                                <td class="border border-gray-300 px-1">18:30:03</td>
                                <td class="border border-gray-300 px-1">22:04:28</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">S7 0800H-1700H</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-1">04</td>
                                <td class="border border-gray-300 px-1">07:30:07</td>
                                <td class="border border-gray-300 px-1">17:00:47</td>
                                <td class="border border-gray-300 px-1">18:30:03</td>
                                <td class="border border-gray-300 px-1">22:04:28</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">S7 0800H-1700H</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-1">05</td>
                                <td class="border border-gray-300 px-1">07:30:07</td>
                                <td class="border border-gray-300 px-1">17:00:47</td>
                                <td class="border border-gray-300 px-1">18:30:03</td>
                                <td class="border border-gray-300 px-1">22:04:28</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">S7 0800H-1700H</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-1" ></td>
                                <td class="border border-gray-300 px-1" colspan="4">Working Days</td>
                                <td class="border border-gray-300 px-1 bg-purple-300">1.00</td>
                                <td class="border border-gray-300 px-1 bg-purple-300">1.00</td>
                                <td class="border border-gray-300 px-1 bg-purple-300">1.00</td>
                                <td class="border border-gray-300 px-1 bg-purple-300">1.00</td>
                                <td class="border border-gray-300 px-1 bg-purple-300">1.00</td>
                                <td class="border border-gray-300 px-1 bg-purple-300">1.00</td>
                                <td class="border border-gray-300 px-1 bg-purple-300">1.00</td>
                                <td class="border border-gray-300 px-1 bg-purple-300">1.00</td>
                                <td class="border border-gray-300 px-1 bg-purple-300">1.00</td>
                                <td class="border border-gray-300 px-1 bg-purple-300">1.00</td>
                                <td class="border border-gray-300 px-1 bg-purple-300">1.00</td>
                                <td class="border border-gray-300 px-1 bg-purple-300">1.00</td>
                                <td class="border border-gray-300 px-1">1.00</td>
                                <td class="border border-gray-300 px-1">S7 0800H-1700H</td>
                            </tr>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
