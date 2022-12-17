<x-app-layout>
    <x-slot name="header"></x-slot>
    <!-- component -->
    <style>
        [x-cloak] {
        display: none;
        }
    </style>
    
    <div class=" h-screen pb-28 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
        <div class="flex flex-col flex-wrap sm:flex-row ">
            <div class="p-4 relative h-screen w-full text-center bg-white rounded-lg shadow-lg white:bg-gray-800 white:border-gray-700">
                <div class="flex justify-between  pb-4 bg-white white:bg-gray-900">
                    <div > 
                        <h2 class="uppercase font-semibold py-2">PAYROLL COMPUTATION</h2>
                    </div>
                    <div class="flex">
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
                <div class="flex justify-center pb-1 pt-2 bg-white white:bg-gray-900 space-x-1">
                    <div class="mx-2 text-left">
                        <select name="month" class="text-sm block w-full px-2 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 w-60">
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
                    <div class="mx-2 text-left">
                        <select name="year" class="text-sm block w-full px-2 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 w-60">
                        <option value="" selected>Select Year</option>
                            {{  $start_year = 2022 }}
                            {{   $current_year = date("Y")  }}
                            
                                @for($y=$start_year; $y<=$current_year; $y++)
                                <option value="{{ $y }}">{{ $y }}</option>
                                @endfor
                        </select>
                    </div>
                    <div class="">
                        <select name="" class="text-sm block w-52 px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 ">
                            <option value="" selected> Salary Period </option>
                            <option></option>
                        </select>
                    </div>
                    <div>
                        <button type="submit" class="flex items-center justify-center px-3 py-2 mt-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-2xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">Filter</button>
                    </div>
                </div>
                <div class="text-left w-full mt-3">
                    <span class="text-sm font-semibold">Sept 15, 2022 (Aug 21-Sept 5, 2022)</span>
                </div>
                <div class="relative">
                    <div class="w-full overflow-x-auto overflow-y-hidden hover:overflow-y-auto absolute pt-2 pr-2 pl-2 mt-3 md:pt-0 md:pr-0 md:pl-0 h-96 bg-white text-left">
                        <table class="relative text-sm text-left text-gray-500 white:text-gray-400 border border-gray-200 border-collapse" width="400%">
                            <thead class="text-xs font-bold text-gray-700 uppercase bg-gray-50 white:bg-gray-700 white:text-gray-400 sticky top-0 z-40">
                                <tr>
                                    <td rowspan="2" class="py-1 px-1 text-center border sticky left-0 bg-gray-50 z-20" width="5%">
                                        Name
                                    </td>
                                    <td rowspan="2" class="py-1 px-1 text-center border sticky left-[297px] bg-gray-50 z-20" width="2%">
                                        Monthly Basic Pay 
                                    </td>
                                    <td rowspan="2" class="py-1 px-1 text-center border sticky left-[416px] bg-gray-50 z-20" width="2%">
                                        June 12, 2022
                                    </td>
                                    <td colspan="9" class="py-1 px-1 text-center border" >
                                        TAXABLE EARNINGS	
                                    </td>
                                    <td colspan="16" class="py-1 px-1 text-center border" >
                                    </td>
                                    <td colspan="5" class="py-1 px-1 text-center border" >
                                        TAXABLE EARNINGS	
                                    </td>
                                    <td rowspan="2" class="py-1 px-1 text-center border" width="3%">
                                        Net take home pay
                                    </td>
                                </tr>
                                <tr class="">
                                    <td scope="col" class="py-1 px-1 text-center border" width="2%">
                                        Basic Salary	
                                    </td>
                                    <td scope="col" class="py-1 px-1 text-center border" width="2%"> 
                                        Adjustment	
                                    </td>
                                    <td scope="col" class="py-1 px-1 text-center border" width="2%">
                                        Absences/ Tardiness/ Undertime	
                                    </td>
                                    <td scope="col" class="py-1 px-1 text-center border" width="2%">
                                        RH/ SH	
                                    </td>
                                    <td scope="col" class="py-1 px-1 text-center border" width="2%">
                                        RD 	 
                                    </td>
                                    <td scope="col" class="py-1 px-1 text-center border" width="2%" >
                                        OT/NDP	
                                    </td>
                                    <td scope="col" class="py-1 px-1 text-center border" width="2%">
                                        BASIC- DAILY	
                                    </td>
                                    <td scope="col" class="py-1 px-1 text-center border" width="2%"> 
                                        Consultancy/ Honorarium	
                                    </td>
                                    <td scope="col" class="py-1 px-1 text-center border" width="2%">
                                        Gross Salary
                                    </td>
                                    <td scope="col" class="py-1 px-1 text-center border bg-orange-50" width="2%">
                                        Philhealth 1% (April 2022)	
                                    </td>
                                    <td scope="col" class="py-1 px-1 text-center border bg-orange-50" width="2%">
                                        Philhealth 4%	
                                    </td>
                                    <td scope="col" class="py-1 px-1 text-center border bg-orange-50" width="2%" >
                                        HDMF	
                                    </td>
                                    <td scope="col" class="py-1 px-1 text-center border bg-orange-50" width="2%">
                                        W/TAX	
                                    </td>
                                    <td scope="col" class="py-1 px-1 text-center border bg-orange-50" width="2%"> 
                                        SSS Salary Loan	
                                    </td>
                                    <td scope="col" class="py-1 px-1 text-center border bg-orange-50" width="2%">
                                        Calamity Loan	
                                    </td>
                                    <td scope="col" class="py-1 px-1 text-center border bg-orange-50" width="2%">
                                        HDMF Salary Loan	
                                    </td>
                                    <td scope="col" class="py-1 px-1 text-center border bg-orange-50" width="2%">
                                        Pag-ibig MP2	
                                    </td>
                                    <td scope="col" class="py-1 px-1 text-center border bg-orange-50" width="2%" >
                                        Canteen	
                                    </td>
                                    <td scope="col" class="py-1 px-1 text-center border bg-orange-50" width="2%">
                                        HMO	
                                    </td>
                                    <td scope="col" class="py-1 px-1 text-center border bg-orange-50" width="2%"> 
                                        AUB Loan	
                                    </td>
                                    <td scope="col" class="py-1 px-1 text-center border bg-orange-50" width="2%">
                                        Coop-Loan	
                                    </td>
                                    <td scope="col" class="py-1 px-1 text-center border bg-orange-50" width="2%">
                                        Coop-Investment
                                    </td>
                                    <td scope="col" class="py-1 px-1 text-center border bg-orange-50" width="2%">
                                        Cash Advance 	
                                    </td>
                                    <td scope="col" class="py-1 px-1 text-center border bg-orange-50" width="2%" >
                                        Others (donation & Financial Assistance) 	
                                    </td>
                                    <td scope="col" class="py-1 px-1 text-center border bg-orange-50" width="2%">
                                        Total
                                    </td>
                                    <td scope="col" class="py-1 px-1 text-center border" width="2%"> 
                                        Basic	
                                    </td>
                                    <td scope="col" class="py-1 px-1 text-center border" width="2%">
                                        Representation	
                                    </td>
                                    <td scope="col" class="py-1 px-1 text-center border" width="2%">
                                        Others
                                    </td>
                                    <td scope="col" class="py-1 px-1 text-center border" width="2%">
                                        Other Benefits-Adjustment 	
                                    </td>
                                    <td scope="col" class="py-1 px-1 text-center border" width="2%">
                                        Total
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border px-1 sticky left-0 bg-gray-100 z-20 font-bold text-sm" colspan="3">Department</td>
                                    <td class="border px-1 text-right text-sm" colspan="31"></td>
                                </tr>
                                <tr>
                                    <td class="border px-1 sticky left-0 text-sm bg-white z-20">Employee 1</td>
                                    <td class="border px-1 sticky left-[297px] text-sm text-right bg-yellow-100 z-20">999,999.00</td>
                                    <td class="border px-1 sticky left-[416px] text-sm text-right bg-white z-20">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm bg-orange-100">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                </tr>
                                <tr>
                                    <td class="border px-1 sticky left-0 text-sm bg-white z-20">Employee 2</td>
                                    <td class="border px-1 sticky left-[297px] text-sm text-right bg-yellow-100 z-20">999,999.00</td>
                                    <td class="border px-1 sticky left-[416px] text-sm text-right bg-white z-20">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm bg-orange-100">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                </tr>
                                <tr>
                                    <td class="border px-1 sticky left-0 text-sm bg-white z-20">Employee 3</td>
                                    <td class="border px-1 sticky left-[297px] text-sm text-right bg-yellow-100 z-20">999,999.00</td>
                                    <td class="border px-1 sticky left-[416px] text-sm text-right bg-white z-20">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm bg-orange-100">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                </tr>
                                <tr class="bg-indigo-100 font-bold">
                                    <td class="border px-1 sticky left-0 text-sm bg-indigo-100 z-20">Total</td>
                                    <td class="border px-1 sticky left-[297px] text-sm text-right bg-indigo-100 z-20">999,999.00</td>
                                    <td class="border px-1 sticky left-[416px] text-sm text-right bg-indigo-100 z-20">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                </tr>
                                <tr>
                                    <td class="border px-1 sticky left-0 bg-gray-100 z-20 font-bold text-sm" colspan="3">Department</td>
                                    <td class="border px-1 text-right text-sm" colspan="31"></td>
                                </tr>
                                <tr>
                                    <td class="border px-1 sticky left-0 text-sm bg-white z-20">Employee 1</td>
                                    <td class="border px-1 sticky left-[297px] text-sm text-right bg-yellow-100 z-20">999,999.00</td>
                                    <td class="border px-1 sticky left-[416px] text-sm text-right bg-white z-20">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm bg-orange-100">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                </tr>
                                <tr>
                                    <td class="border px-1 sticky left-0 text-sm bg-white z-20">Employee 2</td>
                                    <td class="border px-1 sticky left-[297px] text-sm text-right bg-yellow-100 z-20">999,999.00</td>
                                    <td class="border px-1 sticky left-[416px] text-sm text-right bg-white z-20">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm bg-orange-100">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                </tr>
                                <tr>
                                    <td class="border px-1 sticky left-0 text-sm bg-white z-20">Employee 3</td>
                                    <td class="border px-1 sticky left-[297px] text-sm text-right bg-yellow-100 z-20">999,999.00</td>
                                    <td class="border px-1 sticky left-[416px] text-sm text-right bg-white z-20">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm bg-orange-100">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                </tr>
                                <tr class="bg-indigo-100 font-bold">
                                    <td class="border px-1 sticky left-0 text-sm bg-indigo-100 z-20">Total</td>
                                    <td class="border px-1 sticky left-[297px] text-sm text-right bg-indigo-100 z-20">999,999.00</td>
                                    <td class="border px-1 sticky left-[416px] text-sm text-right bg-indigo-100 z-20">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                </tr>
                                <tr>
                                    <td class="border px-1 sticky left-0 bg-gray-100 z-20 font-bold text-sm" colspan="3">Department</td>
                                    <td class="border px-1 text-right text-sm" colspan="31"></td>
                                </tr>
                                <tr>
                                    <td class="border px-1 sticky left-0 text-sm bg-white z-20">Employee 1</td>
                                    <td class="border px-1 sticky left-[297px] text-sm text-right bg-yellow-100 z-20">999,999.00</td>
                                    <td class="border px-1 sticky left-[416px] text-sm text-right bg-white z-20">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm bg-orange-100">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                </tr>
                                <tr>
                                    <td class="border px-1 sticky left-0 text-sm bg-white z-20">Employee 2</td>
                                    <td class="border px-1 sticky left-[297px] text-sm text-right bg-yellow-100 z-20">999,999.00</td>
                                    <td class="border px-1 sticky left-[416px] text-sm text-right bg-white z-20">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm bg-orange-100">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                </tr>
                                <tr>
                                    <td class="border px-1 sticky left-0 text-sm bg-white z-20">Employee 3</td>
                                    <td class="border px-1 sticky left-[297px] text-sm text-right bg-yellow-100 z-20">999,999.00</td>
                                    <td class="border px-1 sticky left-[416px] text-sm text-right bg-white z-20">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm bg-orange-100">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                </tr>
                                <tr class="bg-indigo-100 font-bold">
                                    <td class="border px-1 sticky left-0 text-sm bg-indigo-100 z-20">Total</td>
                                    <td class="border px-1 sticky left-[297px] text-sm text-right bg-indigo-100 z-20">999,999.00</td>
                                    <td class="border px-1 sticky left-[416px] text-sm text-right bg-indigo-100 z-20">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                </tr>
                                <tr class="bg-red-100 font-bold">
                                    <td class="border px-1 sticky left-0 text-sm bg-red-100 z-20" colspan="3"></td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                </tr>
                                <tr class="bg-white font-bold">
                                    <td class="border px-1 sticky left-0 text-sm bg-white z-20" colspan="3">COOP COLLECTIONS</td>
                                    <td class="border px-1 text-right text-sm"></td>
                                    <td class="border px-1 text-right text-sm"></td>
                                    <td class="border px-1 text-right text-sm"></td>
                                    <td class="border px-1 text-right text-sm"></td>
                                    <td class="border px-1 text-right text-sm"></td>
                                    <td class="border px-1 text-right text-sm"></td>
                                    <td class="border px-1 text-right text-sm"></td>
                                    <td class="border px-1 text-right text-sm"></td>
                                    <td class="border px-1 text-right text-sm"></td>
                                    <td class="border px-1 text-right text-sm"></td>
                                    <td class="border px-1 text-right text-sm"></td>
                                    <td class="border px-1 text-right text-sm"></td>
                                    <td class="border px-1 text-right text-sm"></td>
                                    <td class="border px-1 text-right text-sm"></td>
                                    <td class="border px-1 text-right text-sm"></td>
                                    <td class="border px-1 text-right text-sm"></td>
                                    <td class="border px-1 text-right text-sm"></td>
                                    <td class="border px-1 text-right text-sm"></td>
                                    <td class="border px-1 text-right text-sm"></td>
                                    <td class="border px-1 text-right text-sm"></td>
                                    <td class="border px-1 text-right text-sm"></td>
                                    <td class="border px-1 text-right text-sm"></td>
                                    <td class="border px-1 text-right text-sm"></td>
                                    <td class="border px-1 text-right text-sm"></td>
                                    <td class="border px-1 text-right text-sm"></td>
                                    <td class="border px-1 text-right text-sm"></td>
                                    <td class="border px-1 text-right text-sm"></td>
                                    <td class="border px-1 text-right text-sm"></td>
                                    <td class="border px-1 text-right text-sm"></td>
                                    <td class="border px-1 text-right text-sm"></td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                </tr>
                                <tr class="bg-emerald-100 font-bold">
                                    <td class="border px-1 sticky left-0 text-sm bg-emerald-100 z-20 italic">Grand Total</td>
                                    <td class="border px-1 sticky left-[297px] text-sm text-right bg-emerald-100 z-20">999,999.00</td>
                                    <td class="border px-1 sticky left-[416px] text-sm text-right bg-emerald-100 z-20">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                    <td class="border px-1 text-right text-sm">999,999.00</td>
                                </tr>
                            </tbody>
                            {{-- <thead>
                                <tr style="background-color: #5b8969;">
                                    <td rowspan="2" style="background-color: #F8C293; color: black;">Spray 4</td>
                                    <td>Pollinate</td>
                                    <td>7-10 days later</td>
                                    <td>BENOMYL WP 25KG </td>
                                    <td>benomyl 500g/kg</td>
                                    <td>&nbsp;</td>
                                    <td>1000</td>
                                    <td>2.00</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Full bloom</td>
                                    <td>Black Spot</td>
                                    <td>WETCIT DUO 20L </td>
                                    <td>borax 10g/orange oil 50g/l</td>
                                    <td>&nbsp;</td>
                                    <td>1000</td>
                                    <td>25.00</td>
                                    <td>100.0000</td>
                                    <td>120.0000L</td>
                                    <td>2500.0000</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td colspan="13" style="background-color: #9fb5d3;" class="h3 font-weight-bold">ANOTHER ONE</td>
                                </tr>
                                <tr>
                                    <td rowspan="7" style="background-color: #F8C293; color: black;">Spray 7</td>
                                    <td>20 cm</td>
                                    <td>African Armyworm</td>
                                    <td>CERATO 250 EC 5L </td>
                                    <td>pyraclostrobin 250g/l</td>
                                    <td>&nbsp;</td>
                                    <td>1000</td>
                                    <td>2.00</td>
                                    <td>10.0000</td>
                                    <td></td>
                                    <td>20.0000</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </thead> --}}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
