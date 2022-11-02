<?php

namespace App\Http\Controllers;

use App\Models\Deduction;
use App\Models\PayslipInfo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeductionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deduct = Deduction::join('payslip_info', 'payslip_info.id', '=', 'deductions.payslip_info_id')
        ->get(['deductions.id','payslip_info.description','deductions.deduction_frequency','deductions.deduction_period']);
        return view ('deduct.index')->with('deduction', $deduct);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $deduct = PayslipInfo::where('pay_type',"=",'3')->get();
        return view('deduct.create',compact('deduct'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $deduct=new Deduction();
        $deduct->payslip_info_id=$request->payslip_info_id;
        $deduct->deduction_frequency=$request->deduction_frequency;
        $deduct->salary_to=$request->deduction_period;
        $res = $deduct->save();
        if($res){
            return redirect()->route('deduct.create')->with('success',"Deduction Added Successfully");
        }else{
            return redirect()->route('deduct.create')->with('fail',"Error! Try Again!");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Deduction  $deduction
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $deduct = Deductions::find($id);
        return view('deduct.show')->with('deduction', $deduct);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Deduction  $deduction
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $deduct = Deduction::find($id);
        $pay = PayslipInfo::where('pay_type',"=",'3')->get();
        return view('deduct.edit')->with('deduction', $deduct)->with('payslip', $pay);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Deduction  $deduction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $deduct = Deduction::find($id);
        $input = $request->all();
        $deduct->update($input);
        return redirect()->route('deduct.edit',$id)->with('success',"Deduction Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Deduction  $deduction
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Deduction::destroy($id);
        return redirect()->route('deduct.index')->with('success',"Deduction Deleted Successfully");
    }
}
