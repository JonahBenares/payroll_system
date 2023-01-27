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
                    <a href="{{ route('otOffice.index') }}" class="hover:bg-blue-300 bg-blue-500 text-sm px-5 py-1 rounded-2xl text-white font-bold">OT Office</a>
                    <a href="{{ route('otSite.index') }}" class="hover:bg-emerald-200 hover:text-white  bg-gray-100  text-sm px-6 py-1 rounded-2xl text-gray-300 font-bold">OT Site</a>
                </div>
                <form action="{{ route('filter_otoffice') }}" method="POST">
                    @csrf
                    <div class="flex justify-between space-x-4 w-full my-1">
                        {{-- <div class="space-y-1 w-2/12 rounded-md bg-green-100">
                            <h2 class="uppercase font-semibold py-3">DTR Office</h2>
                        </div> --}}
                        <div class="space-y-1 w-7/12">
                            <div class="flex justify-between space-x-2">
                                <p class="text-sm w-24 text-left">Name:</p>
                                <select name="employee" id="employee" class="px-0 text-sm bg-transparent border-0 text-left py-0 border-b border-gray-300 w-full">
                                    <option value="">--Select Name--</option>
                                    @foreach($employees AS $e)
                                    <option value="{{ $e->id }}" {{ (!empty($employee_id)) ? (($e->id==$employee_id) ? 'selected' : '') : ''; }}>{{ $e->full_name }}</option>
                                    @endforeach
                                </select>
                                <!-- <input type="text" class="px-0 text-sm bg-transparent border-0 text-left py-0 border-b border-gray-300 w-full"> -->
                            </div>
                            <div class="flex justify-between space-x-2">
                                <p class="text-sm w-24 text-left">Designation:</p>
                                <input type="text" id="designation" class="px-0 text-sm bg-transparent border-0 text-left py-0 border-b border-gray-300 w-full" value="{{ (!empty($designation_disp)) ? $designation_disp : '' }}" readonly>
                            </div>
                        </div>
                        <div class="space-y-1 w-5/12">
                            <div class="flex justify-between space-x-2">
                                <p class="text-sm w-24 text-right">Period:</p>
                                <select name="month" class="px-0 text-sm bg-transparent border-0 text-left py-0 border-b border-gray-300 w-full" required>
                                    <option value="" selected>Select Month</option>
                                    <option value="01" {{ (isset($_POST['month'])) ? ($_POST['month']=='01') ? 'selected' : '' : '' }}>January</option>
                                    <option value="02" {{ (isset($_POST['month'])) ? ($_POST['month']=='02') ? 'selected' : '' : '' }}>February</option>
                                    <option value="03" {{ (isset($_POST['month'])) ? ($_POST['month']=='03') ? 'selected' : '' : '' }}>March</option>
                                    <option value="04" {{ (isset($_POST['month'])) ? ($_POST['month']=='04') ? 'selected' : '' : '' }}>April</option>
                                    <option value="05" {{ (isset($_POST['month'])) ? ($_POST['month']=='05') ? 'selected' : '' : '' }}>May</option>
                                    <option value="06" {{ (isset($_POST['month'])) ? ($_POST['month']=='06') ? 'selected' : '' : '' }}>June</option>
                                    <option value="07" {{ (isset($_POST['month'])) ? ($_POST['month']=='07') ? 'selected' : '' : '' }}>July</option>
                                    <option value="08" {{ (isset($_POST['month'])) ? ($_POST['month']=='08') ? 'selected' : '' : '' }}>August</option>
                                    <option value="09" {{ (isset($_POST['month'])) ? ($_POST['month']=='09') ? 'selected' : '' : '' }}>September</option>
                                    <option value="10" {{ (isset($_POST['month'])) ? ($_POST['month']=='10') ? 'selected' : '' : '' }}>October</option>
                                    <option value="11" {{ (isset($_POST['month'])) ? ($_POST['month']=='11') ? 'selected' : '' : '' }}>November</option>
                                    <option value="12" {{ (isset($_POST['month'])) ? ($_POST['month']=='12') ? 'selected' : '' : '' }}>December</option>
                                </select>
                                <select name="year" class="px-0 text-sm bg-transparent border-0 text-left py-0 border-b border-gray-300 w-full" required>
                                    <option value="">Select Year</option>
                                    @php
                                        $years=date('Y');
                                    @endphp
                                    @for($y=2015;$y<=$years;$y++)
                                        <option value="{{ $y }}" {{ (isset($_POST['year'])) ? ($_POST['year']==$y) ? 'selected' : '' : '' }}>{{ $y }}</option>
                                    @endfor
                                </select>
                                <select name="period" class="px-0 text-sm bg-transparent border-0 text-left py-0 border-b border-gray-300 w-full" required>
                                    <!-- <option value="" selected>Period</option> -->
                                    <option value="">--Select Period--</option>
                                    @foreach($cutoff AS $ca)
                                    <option value="{{$ca->cutoff_type}}" {{ (isset($_POST['period'])) ? ($_POST['period']==$ca->cutoff_type) ? 'selected' : '' : '' }}>{{$ca->cutoff_type}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="flex justify-between space-x-2">
                                <input type="submit" class="flex items-center justify-center px-2 py-2 mx-2 space-x-2 text-base tracking-wide text-white transition-colors duration-200 transform bg-indigo-500 rounded-3xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50 w-full" value="Filter">
                            </div>
                        </div>
                    </div>
                </form>
                <form action="{{ route('otOffice.store') }}" method="POST">
                    @csrf
                    <div class=" hover:overflow-x-auto overflow-x-hidden h-100 max-h-100 pt-2 pr-2 pl-2 mt-3 md:pt-0 md:pr-0 md:pl-0 ">
                        <table class="border border-gray-300 text-sm w-full">
                            <tr>
                                <td class="border border-gray-300 px-2 text-left" width="40%">Regular Working Days</td>
                                <td class="border border-gray-300 px-2 text-right text-xs" width="20%"> {{ (!empty($daily_rate)) ? number_format($daily_rate,2) : '0.00' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs" width="20%"></td>
                                <td class="border border-gray-300 px-2 text-right text-xs" width="20%">{{ (!empty($salary)) ? number_format($salary,2) : '0.00' }}</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">Rest Day</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> {{ (!empty($restday)) ? number_format($restday,2) : '0.00' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ (!empty($RD)) ? number_format($RD,2) : '' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ (!empty($RD)) ? number_format($restday * $RD,2) : '' }}</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">Special Holiday</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> {{ (!empty($special_holiday)) ? number_format($special_holiday,2) : '0.00' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ (!empty($ins_shot)) ? number_format($ins_shot,2) : '' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ (!empty($ins_shot)) ? number_format($special_holiday * $ins_shot,2) : '' }}</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">Special Holiday falling on RD</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> {{ (!empty($special_holiday_restday)) ? number_format($special_holiday_restday,2) : '0.00' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ (!empty($ins_shrdot)) ? number_format($ins_shrdot,2) : '' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ (!empty($ins_shrdot)) ? number_format($special_holiday_restday * $ins_shrdot,2) : '' }}</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">Regular Holiday</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ (!empty($regular_holiday)) ? number_format($regular_holiday,2) : '0.00' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ (!empty($ins_rhot)) ? number_format($ins_rhot,2) : '' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ (!empty($ins_rhot)) ? number_format($regular_holiday * $ins_rhot,2) : '' }}</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">Regular Holiday falling on Restday</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ (!empty($reg_holiday_rd)) ? number_format($reg_holiday_rd,2) : '0.00' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ (!empty($ins_rhrdot)) ? number_format($ins_rhrdot,2) : '' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ (!empty($ins_rhrdot)) ? number_format($reg_holiday_rd * $ins_rhrdot,2) : '' }}</td>
                            </tr>
                            <tr class="bg-gray-200">
                                <td class="border border-gray-300 px-2 text-left font-bold">Gross Pay</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> </td>
                                <td class="border border-gray-300 px-2 text-right text-xs"></td>
                                <td class="border border-gray-300 px-2 text-right font-bold">
                                    @php
                                        if(!empty($daily_rate)){ 
                                            $total_rd=$restday * $RD;
                                            $total_sh=$special_holiday * $ins_shot;
                                            $total_shrd=$special_holiday_restday * $ins_shrdot;
                                            $total_rh=$regular_holiday * $ins_rhot;
                                            $total_rhrd=$reg_holiday_rd * $ins_rhrdot;
                                            $total_sum=$salary + $total_rd + $total_sh + $total_shrd + $total_rh + $total_rhrd;
                                            echo number_format($total_sum,2);
                                        } 
                                    @endphp   
                                </td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">Absences</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ (!empty($daily_rate)) ? number_format($daily_rate,2) : '0.00' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ (!empty($absence_count)) ? number_format($absence_count,2) : '' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ (!empty($absence_count)) ? number_format($daily_rate * $absence_count,2) : '' }}</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">Undertime</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ (!empty($daily_rate)) ? number_format($daily_rate,2) : '0.00' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ (!empty($daily_rate)) ? number_format($undertime_disp / 8,2) : '' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ (!empty($daily_rate)) ? number_format($daily_rate*($undertime_disp / 8),2) : '' }}</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">Tardiness</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ (!empty($daily_rate)) ? number_format($daily_rate/8,2) : '0.00' }}</td>
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
                                <td class="border border-gray-300 px-2 text-right text-xs"></td>
                                <td class="border border-gray-300 px-2 text-right text-xs"></td>
                                <td class="border border-gray-300 px-2 text-right text-xs">
                                    
                                </td>
                            </tr>
                            @if(!empty($adjustment))
                                @php $x=1; @endphp
                                @foreach($adjustment AS $adj)
                                    <tr class="appendsadj" id="appendsadj0">
                                        <td class="border border-gray-300 text-left">
                                            <input type="text" name="description[]" class="text-sm p-0 w-full border-0 px-2" value="{{ (!empty($adj->description)) ? $adj->description : ''}}">
                                        </td>
                                        <td class="border border-gray-300  text-right ">
                                            <input type="text" name="amount[]" id="amount{{$x}}" class="text-xs p-0 w-full border-0 px-2 text-right" value="{{ ($adj->amount!='0') ? ((!empty($adj->amount)) ? $adj->amount : '') : '' }}" onkeyup='calculateAdjustment()'>
                                        </td>
                                        <td class="border border-gray-300 px-2 text-right text-xs">
                                            <input type="text" name="days_hr[]" id="days_hr{{$x}}" class="text-xs p-0 w-full border-0 px-2 text-right" value="{{ ($adj->days_hr!='0') ? ((!empty($adj->days_hr)) ? $adj->days_hr : '') : '' }}" onkeyup='calculateAdjustment()'>
                                        </td>
                                        <td class="border border-gray-300 px-2 text-right text-xs flex justify-between space-x-1 addmoreappendadj">
                                            <input type="text" name="total_amount[]" id="total_amount{{$x}}" class="text-xs p-0 w-full border-0 px-2 text-right" value="{{$adj->total_amount}}">
                                            <button class="text-sm bg-blue-600 text-white round-md p-1 addAdjustment">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                @php $x++; @endphp
                                @endforeach
                            @endif
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
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ !empty($reg_otcalc) ? number_format($reg_otcalc,2) : '' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ !empty($ins_regot) ? number_format($ins_regot,2) : '' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ !empty($ins_regot) ? number_format($reg_otcalc*$ins_regot,2) : '' }}</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">RD2 OT rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ !empty($restday) ? number_format($restday,2) : '' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ !empty($RD) ? number_format($RD,2) : '' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ !empty($RD) ? number_format($restday*$RD,2) : '' }}</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">SH OT rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ !empty($sh_otcalc) ? number_format($sh_otcalc,2) : '' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ !empty($ins_shot) ? number_format($ins_shot,2) : '' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ !empty($ins_shot) ? number_format($sh_otcalc*$ins_shot,2) : '' }}</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">SH on RD2 OT rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ !empty($special_holiday_restday) ? number_format($special_holiday_restday,2) : '' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ !empty($ins_shrdot) ? number_format($ins_shrdot,2) : '' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ !empty($ins_shrdot) ? number_format($special_holiday_restday*$ins_shrdot,2) : '' }}</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">RH OT rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ !empty($regular_holiday) ? number_format($regular_holiday,2) : '' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ !empty($ins_rhot) ? number_format($ins_rhot,2) : '' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ !empty($ins_rhot) ? number_format($regular_holiday*$ins_rhot,2) : '' }}</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">RH on RD2 OT rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ (!empty($reg_holiday_rd)) ? number_format($reg_holiday_rd,2) : '0.00' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ (!empty($ins_rhrdot)) ? number_format($ins_rhrdot,2) : '' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ (!empty($ins_rhrdot)) ? number_format($ins_rhrdot * $reg_holiday_rd,2) : '' }}</td>
                            </tr>
                            <tr class="bg-gray-200">
                                <td class="border border-gray-300 px-2 text-left font-bold">Total Overtime</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> </td>
                                <td class="border border-gray-300 px-2 text-right text-xs"></td>
                                <td class="border border-gray-300 px-2 text-right font-bold">
                                    @php 
                                        if(!empty($daily_rate)){ 
                                            $total_regot=$reg_otcalc*$ins_regot;
                                            $total_rd2ot=$restday*$RD;
                                            $total_shot=$sh_otcalc*$ins_shot;
                                            $total_shrd2ot=$special_holiday_restday*$ins_shrdot;
                                            $total_rhot=$regular_holiday*$ins_rhot;
                                            $total_rhrd2ot=$ins_rhrdot * $reg_holiday_rd;
                                            $total_overtime=$total_regot + $total_rd2ot + $total_shot + $total_shrd2ot + $total_rhot + $total_rhrd2ot;
                                            echo number_format($total_overtime,2);
                                        }
                                    @endphp
                                </td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left text-xs font-bold" colspan="4">NIGHT SHIFT PREMIUM</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">Reg NP Rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ !empty($reg_np) ? number_format($reg_np,2) : '' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ !empty($ins_regnpot) ? number_format($ins_regnpot,2) : '' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ !empty($ins_regnpot) ? number_format($reg_np * $ins_regnpot,2) : '' }}</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">Reg NP OT Rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ !empty($reg_np_ot) ? number_format($reg_np_ot,2) : '' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ !empty($ins_regnp2ot) ? number_format($ins_regnp2ot,2) : '' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ !empty($ins_regnp2ot) ? number_format($reg_np_ot * $ins_regnp2ot,2) : '' }}</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">RD2 / SH NP Rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ !empty($rdsh_np) ? number_format($rdsh_np,2) : '' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ !empty($ins_rdshot) ? number_format($ins_rdshot,2) : '' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ !empty($ins_rdshot) ? number_format($rdsh_np * $ins_rdshot,2) : '' }}</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">RD2 / SH NP OT Rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ !empty($rdsh_np_ot) ? number_format($rdsh_np_ot,2) : '' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ !empty($ins_rdsh2ot) ? number_format($ins_rdsh2ot,2) : '' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ !empty($ins_rdsh2ot) ? number_format($rdsh_np_ot * $ins_rdsh2ot,2) : '' }}</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">SH on RD2 NP rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ !empty($shrd_np) ? number_format($shrd_np,2) : '' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ !empty($ins_shrdnp) ? number_format($ins_shrdnp,2) : '' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ !empty($ins_shrdnp) ? number_format($shrd_np * $ins_shrdnp,2) : '' }}</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">SH on RD2 NP OT rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ !empty($shrd_np_ot) ? number_format($shrd_np_ot,2) : '' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ !empty($ins_shrdnpot) ? number_format($ins_shrdnpot,2) : '' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ !empty($ins_shrdnpot) ? number_format($shrd_np_ot * $ins_shrdnpot,2) : '' }}</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">RH NP RATE</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ !empty($rh_np) ? number_format($rh_np,2) : '' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ !empty($ins_rhnpot) ? number_format($ins_rhnpot,2) : '' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ !empty($ins_rhnpot) ? number_format($rh_np * $ins_rhnpot,2) : '' }}</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">RH NP OT Rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ !empty($rh_np_ot) ? number_format($rh_np_ot,2) : '' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ !empty($ins_rhnp2ot) ? number_format($ins_rhnp2ot,2) : '' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ !empty($ins_rhnp2ot) ? number_format($rh_np_ot * $ins_rhnp2ot,2) : '' }}</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">RH on RD2 NP Rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ !empty($rhrd_np) ? number_format($rhrd_np,2) : '' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ !empty($ins_rhrdotnp) ? number_format($ins_rhrdotnp,2) : '' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ !empty($ins_rhrdotnp) ? number_format($rhrd_np * $ins_rhrdotnp,2) : '' }}</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-2 text-left">RH on RD2 NP OT Rate</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ !empty($rhrd_np_ot) ? number_format($rhrd_np_ot,2) : '' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ !empty($ins_rhrd2ot) ? number_format($ins_rhrd2ot,2) : '' }}</td>
                                <td class="border border-gray-300 px-2 text-right text-xs">{{ !empty($ins_rhrd2ot) ? number_format($rhrd_np_ot * $ins_rhrd2ot,2) : '' }}</td>
                            </tr>

                            <tr class="bg-gray-200">
                                <td class="border border-gray-300 px-2 text-left font-bold">Total Night Premium  </td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> </td>
                                <td class="border border-gray-300 px-2 text-right text-xs"></td>
                                <td class="border border-gray-300 px-2 text-right font-bold">
                                    @php
                                        if(!empty($daily_rate)){ 
                                            $total_regnp=$reg_np * $ins_regnpot;
                                            $total_regnpot=$reg_np_ot * $ins_regnp2ot;
                                            $total_rdsh=$rdsh_np * $ins_rdshot;
                                            $total_rdshot=$rdsh_np_ot * $ins_rdsh2ot;
                                            $total_shrdnp=$shrd_np * $ins_shrdnp;
                                            $total_shrdnpot=$shrd_np_ot * $ins_shrdnpot;
                                            $total_rhnp=$rh_np * $ins_rhnpot;
                                            $total_rhnpot=$rh_np_ot * $ins_rhnp2ot;
                                            $total_rhrdnp=$rhrd_np * $ins_rhrdotnp;
                                            $total_rhrdnpot=$rhrd_np_ot * $ins_rhrd2ot;
                                            $total_nightpremium=$total_regnp + $total_regnpot + $total_rdsh + $total_rdshot + $total_shrdnp + $total_shrdnpot + $total_rhnp + $total_rhnpot + $total_rhrdnp + $total_rhrdnpot;
                                            echo number_format($total_nightpremium,2);
                                        }
                                    @endphp
                                </td>
                            </tr>
                            <tr class="bg-yellow-200">
                                <td class="border border-gray-300 px-2 text-left font-bold">TOTAL OT & NP</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> </td>
                                <td class="border border-gray-300 px-2 text-right text-xs"></td>
                                <td class="border border-gray-300 px-2 text-right font-bold">
                                    @php 
                                        if(!empty($daily_rate)){ 
                                            $total_otnp=$total_overtime + $total_nightpremium;
                                            echo number_format($total_otnp,2);
                                        }
                                    @endphp
                                </td>
                            </tr>
                            <tr class="bg-orange-200">
                                <td class="border border-gray-300 px-2 text-left font-bold">TOTAL COMPUTATION</td>
                                <td class="border border-gray-300 px-2 text-right text-xs"> </td>   
                                <td class="border border-gray-300 px-2 text-right text-xs"></td>
                                <td class="border border-gray-300 px-2 text-right text-base font-bold">23,387.00</td>
                            </tr>
                        </table>
                        <input type="hidden" name="personal_id" value="{{ (!empty($personal_id)) ? $personal_id : '' }}">
                        <input type="hidden" name="employee_id" value="{{ (!empty($_POST['employee'])) ? $_POST['employee'] : '' }}">
                        <input type="hidden" name="period_type" value="{{ (!empty($_POST['period'])) ? $_POST['period'] : '' }}">
                        <input type="hidden" name="month_year" value="{{ (!empty($_POST['month']) && !empty($_POST['year'])) ? $_POST['year']."-".$_POST['month'] : '' }}">
                        <input type="submit" class="flex items-center justify-center px-2 py-2 mt-5 text-base tracking-wide text-white transition-colors duration-200 transform bg-indigo-500 rounded-3xl white:bg-indigo-600 white:hover:bg-indigo-700 white:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50 w-full" value="submit">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
