<?php

namespace App\Http\Controllers;

use App\Models\AdjustmentRate;
use App\Models\PayslipInfo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdjustmentRateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $adjustmentrate = AdjustmentRate::join('payslip_info', 'payslip_info.id', '=', 'rates.payslip_info_id')
        ->get(['rates.id','payslip_info.description','rates.deduction_type','rates.rate_amount']);;
        return view('adjustments.index',compact('adjustmentrate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $payslipinfo = PayslipInfo::all()->sortBy('description');
        return view('adjustments.create',compact('payslipinfo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->deduction_type==1){
            $rate=$request->rate_amount / 100;
        }else{
            $rate=$request->rate_amount;
        }
        $adjustmentrate=new AdjustmentRate();
        $adjustmentrate->payslip_info_id=$request->rate_name;
        $adjustmentrate->deduction_type=$request->deduction_type;
        $adjustmentrate->rate_amount=$rate;
        $res = $adjustmentrate->save();
        if($res){
            return redirect()->route('adjustmentrate.create')->with('success',"Adjustment Rate Added Successfully");
        }else{
            return redirect()->route('adjustmentrate.create')->with('fail',"Error! Try Again!");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdjustmentRate  $adjustmentRate
     * @return \Illuminate\Http\Response
     */
    public function show(AdjustmentRate $adjustmentRate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdjustmentRate  $adjustmentRate
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $payslipinfo = PayslipInfo::all()->sortBy('description');
        $adjustmentrate=AdjustmentRate::find($id);
        return view('adjustments.edit',compact('payslipinfo','adjustmentrate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdjustmentRate  $adjustmentRate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->deduction_type==1){
            $rate=$request->rate_amount / 100;
        }else{
            $rate=$request->rate_amount;
        }
        $adjustmentrate = AdjustmentRate::find($id);
        $adjustmentrate->update(
            [
                'payslip_info_id' => $request->rate_name,
                'deduction_type' => $request->deduction_type,
                'rate_amount' => $rate,
            ]
        );
        return redirect()->route('adjustmentrate.edit',$id)->with('success',"Adjustment Rate Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdjustmentRate  $adjustmentRate
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AdjustmentRate::find($id)->delete();
        return redirect()->route('adjustmentrate.index' )->with('success',"Adjustment Rate Deleted Successfully");
    }
}
