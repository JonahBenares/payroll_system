<?php

namespace App\Http\Controllers;

use App\Models\UploadAllowance;
use App\Exports\ExportEmployee;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Imports\AllowanceImport;
use Maatwebsite\Excel\Excel as ExcelExcel;
use Maatwebsite\Excel\Facades\Excel;
use DateTime;

class UploadAllowanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_allowance=array();
        return view('upload.index',compact('data_allowance'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UploadAllowance  $uploadAllowance
     * @return \Illuminate\Http\Response
     */
    public function show(UploadAllowance $uploadAllowance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UploadAllowance  $uploadAllowance
     * @return \Illuminate\Http\Response
     */
    public function edit(UploadAllowance $uploadAllowance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UploadAllowance  $uploadAllowance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UploadAllowance $uploadAllowance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UploadAllowance  $uploadAllowance
     * @return \Illuminate\Http\Response
     */
    public function destroy(UploadAllowance $uploadAllowance)
    {
        //
    }

    public function exportAllowance(Request $request){
        return Excel::download(new ExportEmployee($request->from, $request->to), 'allowance.xlsx');
    }

    public function import(){
        
       $array= Excel::toArray(new AllowanceImport, request()->file('allowance'), ExcelExcel::XLSX);
       $x=1;
       $data_allowance=array();
       foreach ($array[0] as $key => $value) {
            $col=0;
            if($key>=1){
                foreach($value AS $val){

                    
                    if($col>=3){
                            if($val != 'A'){
                                $total = $val * 24; 
                            
                                $hours = floor($total); 
                                $minute_fraction = $total - $hours; 
                                $minutes = floor($minute_fraction * 60); 
                                $display = $hours . ":" . $minutes;
                                $val= date("H:i",strtotime($display));
                            } else {
                                $val = 'A';
                            }    
                    }
              

                    if($col==0){
                        $data_allowance['emp_id'] = $val;
                    } if($col==1){
                        $data_allowance['personal_id']= $val;
                    } if($col==2){
                        $data_allowance['fullname']= $val;
                    } if($col==3){
                        $data_allowance['d1_in']=$val;
                    } if($col==4){
                        $data_allowance['d1_out']= $val;
                    } if($col==5){
                        $data_allowance['d2_in']=$val;
                    } if($col==6){
                        $data_allowance['d2_out']=$val;
                    } if($col==7){
                        $data_allowance['d3_in']=$val;
                    } if($col==8){
                        $data_allowance['d3_out']=$val;
                    } if($col==9){
                        $data_allowance['d4_in']=$val;
                    } if($col==10){
                        $data_allowance['d4_out']=$val;
                    } if($col==11){
                        $data_allowance['d5_in']=$val;
                    } if($col==12){
                        $data_allowance['d5_out']=$val;
                    } if($col==13){
                        $data_allowance['d6_in']=$val;
                    } if($col==14){
                        $data_allowance['d6_out']=$val;
                    } if($col==15){
                        $data_allowance['d7_in']=$val;
                    } if($col==16){
                        $data_allowance['d7_out']=$val;
                    }

                 
                  

                $col++;
                    
                }
              $data[]=$data_allowance;
               
            }
        }

       
        return view('upload.index',compact('data'));
        //return redirect('/')->with('success', 'All good!');
    }

    public function getTimeDiff($starttime,$endtime){

        $t1=strtotime($starttime); 
        $t2=strtotime($endtime); 
        $hours = floor((($t2- $t1)/60)/60);  
        return $hours;
    }
   
}
