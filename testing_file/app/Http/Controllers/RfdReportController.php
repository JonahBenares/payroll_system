<?php

namespace App\Http\Controllers;
use App\Models\UploadAllowance;
use App\Models\Allowance;
use App\Models\AllowanceSummary;
use App\Models\UploadAllowanceDetail;
use App\Models\BusinessUnit;
use App\Models\RfdReport;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RfdReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $allowance = Allowance::all();
        $businessunit = BusinessUnit::all();
        $details=array();
        $head=array();
        $allowance_name="";
        $allowance_id = "";
        if($request->has('allowance_id')){
            $details = UploadAllowanceDetail::where("allowance_head_id", $request->period)->get();
            $head = UploadAllowance::where("id", $request->period)->get();
            $allowance_name = $this->getAllowanceName($request->allowance_id);
            $allowance_id =  $request->period;
        }
       
        return view('rfd_report.index', compact('allowance','businessunit','head','details','allowance_name','allowance_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getAllowanceName($id){

        $emp= Allowance::select('allowance_name')
        ->where("id","=",$id)
        ->get();

        $name= $emp[0]['allowance_name'];

        return $name;
    } 

    
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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RfdReport  $rfdReport
     * @return \Illuminate\Http\Response
     */
    public function show(RfdReport $rfdReport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RfdReport  $rfdReport
     * @return \Illuminate\Http\Response
     */
    public function edit(RfdReport $rfdReport)
    {
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RfdReport  $rfdReport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $counter = $request->counter-1;

        $allowancehead = UploadAllowance::find($id);
        $input = $request->all();
        
        $allowancehead->update([
            'company'=>$request->input('company'),
            'pay_to'=>$request->input('pay_to'),
            'apv_no'=>$request->input('apv_no'),
            'rfd_date'=>$request->input('rfd_date'),
            'due_date'=>$request->input('due_date'),
        ]);

        for($x=0;$x<$counter;$x++){
            $allowance_detail_id = $request->input('allowance_detail_id');
            $remarks = $request->input('remarks');
            $allowancedetails = UploadAllowanceDetail::find($allowance_detail_id[$x]);
            $allowancedetails->update([
                 'remarks'=>$remarks[$x],
            ]);
        }

        return redirect()->route('printRFD',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RfdReport  $rfdReport
     * @return \Illuminate\Http\Response
     */
    public function destroy(RfdReport $rfdReport)
    {
        //
    }


    public function print($id)
    {
        $head = UploadAllowance::where("id", $id)->get();
        $details = UploadAllowanceDetail::where("allowance_head_id", $id)->get();
        $allowance_name = $this->getAllowanceName($head[0]['allowance_id']);
        $session_id= Auth::id();
        $session = User::Select('name')->where("id","=",$session_id)->get();
        $session_name= $session[0]['name'];
        return view('rfd_report.print',compact('head', 'details','allowance_name','session_name'));
    }
}
