<?php

namespace App\Http\Controllers;

use App\Models\StatutoryBracket;
use App\Models\PayslipInfo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StatutoryBracketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$stat = StatutoryBracket::all();
        $stat = StatutoryBracket::join('payslip_info', 'payslip_info.id', '=', 'statutory_bracket.payslip_info_id')
        ->get(['statutory_bracket.id','payslip_info.description','statutory_bracket.salary_from','statutory_bracket.salary_to','statutory_bracket.deduction_amount','statutory_bracket.as_of']);
        return view ('statutory.index')->with('statutory', $stat);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$statutory=PayslipInfo::all()->sortBy('description');
        $statutory = PayslipInfo::where('pay_type',"=",'3')->get();
        return view('statutory.create',compact('statutory'));
        //return view('statutory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stat=new StatutoryBracket();
        $stat->payslip_info_id=$request->payslip_info_id;
        $stat->salary_from=$request->salary_from;
        $stat->salary_to=$request->salary_to;
        $stat->deduction_amount=$request->deduction_amount;
        $stat->as_of=$request->as_of;
        $res = $stat->save();
        if($res){
            return redirect()->route('statutorybracket.create')->with('success',"Statutory Bracket Added Successfully");
        }else{
            return redirect()->route('statutorybracket.create')->with('fail',"Error! Try Again!");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StatutoryBracket  $statutoryBracket
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stat = StatutoryBracket::find($id);
        return view('statutory.show')->with('statutory', $stat);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StatutoryBracket  $statutoryBracket
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stat = StatutoryBracket::find($id);
        $pay = PayslipInfo::where('pay_type',"=",'3')->get();
        return view('statutory.edit')->with('statutory', $stat)->with('payslip', $pay);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StatutoryBracket  $statutoryBracket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $stat = StatutoryBracket::find($id);
        $input = $request->all();
        $stat->update($input);
        return redirect()->route('statutorybracket.edit',$id)->with('success',"Statutory Bracket Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StatutoryBracket  $statutoryBracket
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        StatutoryBracket::destroy($id);
        return redirect()->route('statutorybracket.index')->with('success',"Statutory Bracket Deleted Successfully");
    }
}
