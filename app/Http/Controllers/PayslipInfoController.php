<?php

namespace App\Http\Controllers;

use App\Models\PayslipInfo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PayslipInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payslip = PayslipInfo::all();
        return view ('payslip_info.index')->with('payslip', $payslip);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('payslip_info.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $payslip=new PayslipInfo();
        $payslip->description=$request->description;
        $payslip->pay_type=$request->pay_type;
        $payslip->editable=$request->editable;
        $res = $payslip->save();
        if($res){
            return redirect()->route('payslip_info.create')->with('success',"Payslip Information Added Successfully");
        }else{
            return redirect()->route('payslip_info.create')->with('fail',"Error! Try Again!");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PayslipInfo  $payslipInfo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $payslip = PayslipInfo::find($id);
        return view('payslip_info.show')->with('payslip', $payslip);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PayslipInfo  $payslipInfo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $payslip = PayslipInfo::find($id);
        return view('payslip_info.edit')->with('payslip', $payslip);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PayslipInfo  $payslipInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $payslip = PayslipInfo::find($id);
        $input = $request->all();
        $payslip->update($input);
        return redirect()->route('payslip_info.edit',$id)->with('success',"Payslip Information Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PayslipInfo  $payslipInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PayslipInfo::destroy($id);
        return redirect()->route('payslip_info.index')->with('success',"Payslip Information Deleted Successfully");
    }
}
