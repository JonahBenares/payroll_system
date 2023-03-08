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
                    <a href="{{ route('dtrOffice.index') }}" class="hover:bg-blue-300 bg-blue-500 text-sm px-5 py-1 rounded-2xl text-white font-bold">DTR Office</a>
                    <a href="{{ route('dtrSite.index') }}" class="hover:bg-emerald-200 hover:text-white  bg-gray-100  text-sm px-6 py-1 rounded-2xl text-gray-300 font-bold">DTR Site</a>
                </div>
                <form action="{{ route('filter_dtroffice') }}" method="POST">
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
                                    @for($y=2022;$y<=$years;$y++)
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
                <div class=" hover:overflow-x-auto overflow-x-hidden h-100 max-h-100 pt-2 pr-2 pl-2 mt-3 md:pt-0 md:pr-0 md:pl-0 ">
                    <table class="border border-gray-300 text-xs w-full">
                        @if(!empty($timekeeping))
                            <tr>
                                <td class=""></td>
                                <td class="bg-blue-100 border border-gray-300" colspan="4">REGULAR</td>
                                <td class="bg-purple-200 border border-gray-300" colspan="6">NO. OF DAYS WORKED</td>
                                <td class="bg-yellow-200 border border-gray-300" colspan="5">OVERTIME</td>
                                <td class="bg-green-100 break-words border border-gray-300" colspan="10">NIGHT PREMIUM</td>
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

                                <td width="4%" class="bg-yellow-200 break-words border border-gray-300 px-1" >REG DAY</td>
                                <td width="4%" class="bg-yellow-200 break-words border border-gray-300 px-1" >RD2/SH</td>
                                <td width="4%" class="bg-yellow-200 break-words border border-gray-300 px-1" >SH on RD2</td>
                                <td width="4%" class="bg-yellow-200 break-words border border-gray-300 px-1" >Reg Hol</td>
                                <td width="4%" class="bg-yellow-200 break-words border border-gray-300 px-1" >RH on RD2</td>

                                <td width="4%" class="bg-green-100 break-words border border-gray-300 px-1">REG NP</td>
                                <td width="4%" class="bg-green-100 break-words border border-gray-300 px-1">REG NP OT</td>
                                <td width="4%" class="bg-green-100 break-words border border-gray-300 px-1">RD2/SH NP</td>
                                <td width="4%" class="bg-green-100 break-words border border-gray-300 px-1">RD2/SH NP OT</td>
                                <td width="4%" class="bg-green-100 break-words border border-gray-300 px-1">SH on RD2 NP</td>
                                <td width="4%" class="bg-green-100 break-words border border-gray-300 px-1">SH on RD2 NP OT</td>
                                <td width="4%" class="bg-green-100 break-words border border-gray-300 px-1">RH NP</td>
                                <td width="4%" class="bg-green-100 break-words border border-gray-300 px-1">RH NP OT</td>
                                <td width="4%" class="bg-green-100 break-words border border-gray-300 px-1">RH on RD2 NP</td>
                                <td width="4%" class="bg-green-100 break-words border border-gray-300 px-1">RH on RD2 NP OT</td>
                                <td class="border border-gray-300 px-1">TARDY</td>
                                <td class="border border-gray-300 px-1">REMARKS</td>
                            </tr>
                            @for($i=0;$i<2;$i++)
                                <tr>
                                    <td>{{!empty($time_date[$i]) ? $time_date[$i] : '' }}</td>
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
                                @php 
                                    $x=0; 
                                    $reg_day[]=0;
                                    $sum_reg_day=0;
                                    $rd2[]=0;
                                    $sum_rd2=0;
                                    $sh[]=0;
                                    $sum_sh=0;
                                    $shrd[]=0;
                                    $sum_shrd=0;
                                    $reg_hol[]=0;
                                    $sum_reg_hol=0;
                                    $reg_hol_rd2[]=0;
                                    $sum_reg_hol_rd2=0;
                                    $regdayhr[]=0;
                                    $sum_regdayhr=0;
                                    $rdhr[]=0;
                                    $sum_rdhr=0;
                                    $shhr[]=0;
                                    $sum_shhr=0;
                                    $shrdhr[]=0;
                                    $sum_shrdhr=0;
                                    $rhhr[]=0;
                                    $sum_rhhr=0;
                                    $rhrdhr[]=0;
                                    $sum_rhrdhr=0;
                                    $regdaynphr[]=0;
                                    $sum_regdaynphr=0;
                                    $regnpothr[]=0;
                                    $sum_regnpothr=0;
                                    $rdshnphr[]=0;
                                    $sum_rdshnphr=0;
                                    $rdshnpothr[]=0;
                                    $sum_rdshnpothr=0;
                                    $shrdnphr[]=0;
                                    $sum_shrdnphr=0;
                                    $shrdnpothr[]=0;
                                    $sum_shrdnpothr=0;
                                    $rhnphr[]=0;
                                    $sum_rhnphr=0;
                                    $rhotnphr[]=0;
                                    $sum_rhotnphr=0;
                                    $rhrdnphr[]=0;
                                    $sum_rhrdnphr=0;
                                    $rhrdotnphr[]=0;
                                    $sum_rhrdotnphr=0;
                                    $tard_calc[]=0;
                                    $sum_tardy=0;
                                @endphp
                                @foreach($timekeeping AS $t)
                                    @if(date('m',strtotime($time_date[$i]))==date('m',strtotime($t->log_date)))
                                        @php 
                                            $day=date('l',strtotime($t->log_date));
                                        @endphp
                                        <tr>
                                            <td class="border border-gray-300 px-1">{{ date('d',strtotime($t->log_date)) }}</td>
                                            <td class="border border-gray-300 px-1">{{ (!empty($t->time_in)) ? date('H:i:s',strtotime($t->time_in)) : '' }}</td>
                                            <td class="border border-gray-300 px-1">{{ (!empty($t->break_out)) ? date('H:i:s',strtotime($t->break_out)) : '' }}</td>
                                            <td class="border border-gray-300 px-1">{{ (!empty($t->break_in)) ? date('H:i:s',strtotime($t->break_in)) : '' }}</td>
                                            <td class="border border-gray-300 px-1">{{ (!empty($t->time_out)) ? date('H:i:s',strtotime($t->time_out)) : '' }}</td>
                                            <td class="border border-gray-300 px-1">
                                                @if($t->rest_day==0 && $t->holiday==0 && checkHoliday($t->log_date)=='0' && $day!='Sunday') 
                                                    @php 
                                                        $reg_day[]=number_format($t->overall_time / 8,2);
                                                        echo number_format($t->overall_time / 8,2);
                                                    @endphp
                                                @endif
                                            </td>
                                            <td class="border border-gray-300 px-1">
                                                @if($t->rest_day!=0 && $t->holiday==0 && checkHoliday($t->log_date)=='0' && $day=='Sunday') 
                                                    @php 
                                                        $rd2[]=number_format($t->overall_time / 8,2);
                                                        echo number_format($t->overall_time / 8,2);
                                                    @endphp
                                                @endif
                                            </td>
                                            <td class="border border-gray-300 px-1">
                                                @if($t->rest_day==0 && $t->holiday!=0 && checkHoliday($t->log_date)=='Special' && $day!='Sunday')
                                                    @php 
                                                        $sh[]=number_format($t->overall_time / 8,2);
                                                        echo number_format($t->overall_time / 8,2);
                                                    @endphp
                                                @endif
                                            </td>
                                            <td class="border border-gray-300 px-1">
                                                @if($t->rest_day!=0 && $t->holiday!=0 && checkHoliday($t->log_date)=='Special' && $day=='Sunday')  
                                                    @php 
                                                        $shrd[]=number_format($t->overall_time / 8,2);
                                                        echo number_format($t->overall_time / 8,2);
                                                    @endphp
                                                @endif
                                            </td>
                                            <td class="border border-gray-300 px-1">
                                                @if($t->rest_day==0 && $t->holiday!=0 && checkHoliday($t->log_date)=='Regular' && $day!='Sunday')
                                                    @php 
                                                        $reg_hol[]=number_format($t->overall_time / 8,2);
                                                        echo number_format($t->overall_time / 8,2);
                                                    @endphp
                                                @endif
                                            </td>
                                            <td class="border border-gray-300 px-1">
                                                @if($t->rest_day!=0 && $t->holiday!=0 && checkHoliday($t->log_date)=='Regular' && $day=='Sunday')  
                                                    @php 
                                                        $reg_hol_rd2[]=number_format($t->overall_time / 8,2);
                                                        echo number_format($t->overall_time / 8,2);
                                                    @endphp
                                                @endif
                                            </td>
                                            
                                            <td class="border border-gray-300 px-1">
                                                @if($reg_day_hr[$x]!=0 || !empty($reg_day_hr[$x]))
                                                    @php 
                                                        $regdayhr[]=$reg_day_hr[$x];
                                                        echo $reg_day_hr[$x];
                                                    @endphp
                                                @endif
                                            </td>
                                            <td class="border border-gray-300 px-1">
                                                @if($rd_hr[$x]!=0 || !empty($rd_hr[$x]))
                                                    @php $rdhr[]=$rd_hr[$x]; @endphp
                                                    {{ $rd_hr[$x] }}
                                                @elseif($sh_hr[$x]!=0 || !empty($sh_hr[$x]))
                                                    @php $shhr[]=$sh_hr[$x]; @endphp
                                                    {{ $sh_hr[$x] }}
                                                @endif
                                            </td>
                                            <td class="border border-gray-300 px-1">
                                                @if($sh_rd_hr[$x]!=0 || !empty($sh_rd_hr[$x])) 
                                                    @php $shrdhr[]=$sh_rd_hr[$x]; @endphp
                                                    {{ $sh_rd_hr[$x] }}
                                                @endif
                                            </td>
                                            <td class="border border-gray-300 px-1">
                                                @if($rh_hr[$x]!=0 || !empty($rh_hr[$x]))
                                                    @php $rhhr[]=$rh_hr[$x]; @endphp
                                                    {{ $rh_hr[$x] }}
                                                @endif
                                            </td>
                                            <td class="border border-gray-300 px-1">
                                                @if($rh_rd_hr[$x]!=0 || !empty($rh_rd_hr[$x])) 
                                                    @php $rhrdhr[]=$rh_rd_hr[$x]; @endphp
                                                    {{ $rh_rd_hr[$x] }}
                                                @endif
                                            </td>
                                            <!-- NP -->
                                            <td class="border border-gray-300 px-1">
                                                @if($reg_day_np_hr[$x]!=0 || !empty($reg_day_np_hr[$x])) 
                                                    @php $regdaynphr[]=$reg_day_np_hr[$x]; @endphp
                                                    {{ $reg_day_np_hr[$x] }}
                                                @endif
                                            </td>
                                            <td class="border border-gray-300 px-1">
                                                @if($reg_np_ot_hr[$x]!=0 || !empty($reg_np_ot_hr[$x])) 
                                                    @php $regnpothr[]=$reg_np_ot_hr[$x]; @endphp
                                                    {{ $reg_np_ot_hr[$x] }}
                                                @endif
                                            </td>
                                            <td class="border border-gray-300 px-1">
                                                @if($rd_sh_np_hr[$x]!=0 || !empty($rd_sh_np_hr[$x])) 
                                                    @php $rdshnphr[]=$rd_sh_np_hr[$x]; @endphp
                                                    {{ $rd_sh_np_hr[$x] }}
                                                @endif
                                            </td>
                                            <td class="border border-gray-300 px-1">
                                                @if($rd_sh_np_ot_hr[$x]!=0 || !empty($rd_sh_np_ot_hr[$x])) 
                                                    @php $rdshnpothr[]=$rd_sh_np_ot_hr[$x]; @endphp
                                                    {{ $rd_sh_np_ot_hr[$x] }}
                                                @endif
                                            </td>
                                            <td class="border border-gray-300 px-1">
                                                @if($sh_rd_np_hr[$x]!=0 || !empty($sh_rd_np_hr[$x])) 
                                                    @php $shrdnphr[]=$sh_rd_np_hr[$x]; @endphp
                                                    {{ $sh_rd_np_hr[$x] }}
                                                @endif
                                            </td>
                                            <td class="border border-gray-300 px-1">
                                                @if($sh_rd_ot_np_hr[$x]!=0 || !empty($sh_rd_ot_np_hr[$x])) 
                                                    @php $shrdnpothr[]=$sh_rd_ot_np_hr[$x]; @endphp
                                                    {{ $sh_rd_ot_np_hr[$x] }}
                                                @endif
                                            </td>
                                            <td class="border border-gray-300 px-1">
                                                @if($rh_np_hr[$x]!=0 || !empty($rh_np_hr[$x])) 
                                                    @php $rhnphr[]=$rh_np_hr[$x]; @endphp
                                                    {{ $rh_np_hr[$x] }}
                                                @endif
                                            </td>
                                            <td class="border border-gray-300 px-1">
                                                @if($rh_ot_np_hr[$x]!=0 || !empty($rh_ot_np_hr[$x])) 
                                                    @php $rhotnphr[]=$rh_ot_np_hr[$x]; @endphp
                                                    {{ $rh_ot_np_hr[$x] }}
                                                @endif
                                            </td>
                                            <td class="border border-gray-300 px-1">
                                                @if($rh_rd_np_hr[$x]!=0 || !empty($rh_rd_np_hr[$x])) 
                                                    @php $rhrdnphr[]=$rh_rd_np_hr[$x]; @endphp
                                                    {{ $rh_rd_np_hr[$x] }}
                                                @endif
                                            </td>
                                            <td class="border border-gray-300 px-1">
                                                @if($rh_rd_ot_np_hr[$x]!=0 || !empty($rh_rd_ot_np_hr[$x])) 
                                                    @php $rhrdotnphr[]=$rh_rd_ot_np_hr[$x]; @endphp
                                                    {{ $rh_rd_ot_np_hr[$x] }}
                                                @endif
                                            </td>
                                            <td class="border border-gray-300 px-1">
                                                @if($tardy[$x]!=0) 
                                                    @php $tard_calc[]=$tardy[$x]; @endphp
                                                    {{ number_format($tardy[$x],2) }}
                                                @endif
                                            </td>
                                            <td class="border border-gray-300 px-1">
                                                <textarea name="remarks" id="remarks{{$x}}" class="remarks" cols="10" rows="1" onchange="saveRemarks('{{$x}}','{{$t->log_date}}','{{$t->personal_id}}','{{$t->employee_id}}')"></textarea>
                                            </td>
                                        </tr>
                                    @endif
                                    @php 
                                        $x++;
                                        $sum_reg_day=number_format(array_sum($reg_day),2);  
                                        $sum_rd2=number_format(array_sum($rd2),2);  
                                        $sum_sh=number_format(array_sum($sh),2);  
                                        $sum_shrd=number_format(array_sum($shrd),2);  
                                        $sum_reg_hol=number_format(array_sum($reg_hol),2);  
                                        $sum_reg_hol_rd2=number_format(array_sum($reg_hol_rd2),2);  
                                        $sum_regdayhr=number_format(array_sum($regdayhr),2);  
                                        $sum_rdhr=number_format(array_sum($rdhr),2);  
                                        $sum_shhr=number_format(array_sum($shhr),2) + $sum_rdhr;  
                                        $sum_shrdhr=number_format(array_sum($shrdhr),2);  
                                        $sum_rhhr=number_format(array_sum($rhhr),2);  
                                        $sum_rhrdhr=number_format(array_sum($rhrdhr),2);  
                                        $sum_regdaynphr=number_format(array_sum($regdaynphr),2);  
                                        $sum_regnpothr=number_format(array_sum($regnpothr),2); 
                                        $sum_rdshnphr=number_format(array_sum($rdshnphr),2);  
                                        $sum_rdshnpothr=number_format(array_sum($rdshnpothr),2);  
                                        $sum_shrdnphr=number_format(array_sum($shrdnphr),2);  
                                        $sum_shrdnpothr=number_format(array_sum($shrdnpothr),2);  
                                        $sum_rhnphr=number_format(array_sum($rhnphr),2);  
                                        $sum_rhotnphr=number_format(array_sum($rhotnphr),2);  
                                        $sum_rhrdnphr=number_format(array_sum($rhrdnphr),2);  
                                        $sum_rhrdotnphr=number_format(array_sum($rhrdotnphr),2);  
                                        $sum_tardy=number_format(array_sum($tard_calc),2);  
                                    @endphp
                                @endforeach
                            @endfor
                            <tr>
                                <td class="border border-gray-300 px-1" ></td>
                                <td class="border border-gray-300 px-1" colspan="4">Working Days</td>
                                <td class="border border-gray-300 px-1 bg-purple-300">{{ $sum_reg_day }}</td>
                                <td class="border border-gray-300 px-1 bg-purple-300">{{ $sum_rd2 }}</td>
                                <td class="border border-gray-300 px-1 bg-purple-300">{{ $sum_sh }}</td>
                                <td class="border border-gray-300 px-1 bg-purple-300">{{ $sum_shrd }}</td>
                                <td class="border border-gray-300 px-1 bg-purple-300">{{ $sum_reg_hol }}</td>
                                <td class="border border-gray-300 px-1 bg-purple-300">{{ $sum_reg_hol_rd2 }}</td>
                                
                                <td class="border border-gray-300 px-1 bg-purple-300">{{ $sum_regdayhr }}</td>
                                <td class="border border-gray-300 px-1 bg-purple-300">{{ number_format($sum_shhr,2) }}</td>
                                <td class="border border-gray-300 px-1 bg-purple-300">{{ $sum_shrdhr }}</td>
                                <td class="border border-gray-300 px-1 bg-purple-300">{{ $sum_rhhr }}</td>
                                <td class="border border-gray-300 px-1 bg-purple-300">{{ $sum_rhrdhr }}</td>

                                <td class="border border-gray-300 px-1 bg-purple-300">{{ $sum_regdaynphr }}</td>
                                <td class="border border-gray-300 px-1 bg-purple-300">{{ $sum_regnpothr }}</td>
                                <td class="border border-gray-300 px-1 bg-purple-300">{{ $sum_rdshnphr }}</td>
                                <td class="border border-gray-300 px-1 bg-purple-300">{{ $sum_rdshnpothr }}</td>
                                <td class="border border-gray-300 px-1 bg-purple-300">{{ $sum_shrdnphr }}</td>
                                <td class="border border-gray-300 px-1 bg-purple-300">{{ $sum_shrdnpothr }}</td>
                                <td class="border border-gray-300 px-1 bg-purple-300">{{ $sum_rhnphr }}</td>
                                <td class="border border-gray-300 px-1 bg-purple-300">{{ $sum_rhotnphr }}</td>
                                <td class="border border-gray-300 px-1 bg-purple-300">{{ $sum_rhrdnphr }}</td>
                                <td class="border border-gray-300 px-1 bg-purple-300">{{ $sum_rhrdotnphr }}</td>
                                <td class="border border-gray-300 px-1 bg-purple-300">{{ $sum_tardy }}</td>
                                <td class="border border-gray-300 px-1"></td>
                            </tr>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
