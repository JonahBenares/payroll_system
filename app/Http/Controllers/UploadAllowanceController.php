<?php

namespace App\Http\Controllers;

use App\Models\UploadAllowance;
use App\Models\UploadAllowanceDetail;
use App\Models\UploadAllowanceTime;
use App\Exports\ExportEmployee;
use App\Models\Employee;
use App\Models\Allowance;
use App\Models\AllowanceRate;
use Illuminate\Http\Request;
use App\Imports\AllowanceImport;
use Maatwebsite\Excel\Excel as ExcelExcel;
use Maatwebsite\Excel\Facades\Excel;
use DateTime;
use DateInterval;
use DatePeriod;

class UploadAllowanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=array();
        $allowances=Allowance::all();
        $post_data = array(
            "from"=>"",
            "to"=>"",
            "allowance_id"=>""
        );
        return view('upload.index',compact('data','allowances','post_data'));
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
        $emp = $request->input('employee_id');
        $id = UploadAllowance::insertGetId([
            'from_date' => $request->date_from, 
            'to_date' => $request->date_to, 
            'allowance_id' =>  $request->allowance_name
            ]);
        $date_to = date('Y-m-d', strtotime($request->date_to . ' +1 day'));
        $begin = new DateTime($request->date_from);
        $end = new DateTime($date_to);

        $interval = DateInterval::createFromDateString('1 day');
        $period = new DatePeriod($begin, $interval, $end);

       
          
        $counter = $request->counter;
        $x=0;
        foreach($emp AS $key=>$value){

            $detailid=UploadAllowanceDetail::insertGetId([
                'allowance_head_id' => $id,
                'employee_id' => $value,
                'personal_id' => $request->input('personal_id.'.$x),
                'total_days' => $request->input('total_days.'.$x),
                'allowance_amount' => $request->input('rate.'.$x),
                'OT_allowance_amount' => $request->input('ot_amount.'.$x),
                'total_allowance' => $request->input('total_amount.'.$x),
            ]);

            $days=1;
            foreach ($period as $dt) {
            // echo $value . " -  " .  . " - " . ."<br>";
             
             $time_explode = explode('-',$request->input('day'.$days.'.'.$x));
             $time_in = $time_explode[0];
             $time_out = $time_explode[1];
                
             UploadAllowanceTime::insert([
                'allowance_head_id' => $id,
                'allowance_detail_id' => $detailid,
                'duty_date' => $dt->format("Y-m-d"),
                'time_in' => $time_in,
                'time_out' => $time_out,
                'time_hours'=>$request->input('d'.$days.'.'.$x)
            ]);

            $days++;
            }
            $x++;
        }

        return redirect()->route('uploadallowance.index')->with('success',"Allowance successfully uploaded!");
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

    public function import(Request $request){
         
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
                        $data_allowance['rate']=$this->get_allowance_rate($val,$request->allowance_id);
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

        $post_data = array(
            "from"=>$request->from,
            "to"=>$request->to,
            "allowance_id"=>$request->allowance_id
        );
        $allowances=Allowance::all();
        
        return view('upload.index',compact('data','post_data','allowances'));
        //return redirect('/')->with('success', 'All good!');
    }

    public function get_allowance_rate($emp_id, $allowance_id){

        // echo $emp_id. " - " . $allowance_id . '<br>';
        $rate=AllowanceRate::select('allowance_rate',)
                    ->where("employee_id", "=", $emp_id)
                    ->where("allowance_id","=",$allowance_id)
                    ->get();
        foreach($rate AS $r){
            return $r->allowance_rate;
        }
    }
   

    public function receive(){
        return view('upload.receive');
    }

}