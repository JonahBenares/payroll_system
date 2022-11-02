<?php

namespace App\Http\Controllers;

use App\Models\Allowance;
use App\Models\AllowanceRate;
use App\Models\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AllowanceRateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        $rates = AllowanceRate::join('employees', 'employees.id', '=', 'allowance_rates.employee_id')
        ->join('allowances', 'allowances.id', '=', 'allowance_rates.allowance_id')
        ->get(['allowance_rates.employee_id','allowance_rates.personal_id','allowances.allowance_name','allowances.allowance_rate']);
        return view('all_rates.index',compact('employees','rates'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allowance=Allowance::all()->sortBy('allowance_name');
        return view('all_rates.create',compact('allowance'));
    }

    public function fetchRate(Request $request)
    {
        $allowance_id = $request->allowance_id;
        $allowance = Allowance::where('id',$request->allowance_id)->get();
        return response()->json(['allowance'=>$allowance]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $allowancerate=new AllowanceRate();
        $count_rates=count($request->allowance_name);
        for($x=0;$x<$count_rates;$x++){
            $allowancerate->employee_id=$request->employee_id;
            $allowancerate->personal_id=$request->personal_id;
            $allowancerate->allowance_id=$request->allowance_name[$x];
            $allowancerate->allowance_rate=$request->allowance_rate[$x];
            $res = $allowancerate->save();
        }
        if($res){
            return redirect()->route('allowance.create')->with('success',"Allowance Added Successfully");
        }else{
            return redirect()->route('allowance.create')->with('fail',"Error! Try Again!");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AllowanceRate  $allowanceRate
     * @return \Illuminate\Http\Response
     */
    public function show(AllowanceRate $allowanceRate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AllowanceRate  $allowanceRate
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('all_rates.edit');
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AllowanceRate  $allowanceRate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AllowanceRate $allowanceRate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AllowanceRate  $allowanceRate
     * @return \Illuminate\Http\Response
     */
    public function destroy(AllowanceRate $allowanceRate)
    {
        //
    }
}
