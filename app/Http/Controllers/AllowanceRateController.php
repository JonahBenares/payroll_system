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
        $rates_count = AllowanceRate::join('employees', 'employees.id', '=', 'allowance_rates.employee_id')
        ->join('allowances', 'allowances.id', '=', 'allowance_rates.allowance_id')->groupBy('allowance_rates.personal_id')
        ->get(['allowance_rates.employee_id','allowance_rates.personal_id','allowances.allowance_name','allowances.allowance_rate']);
        
        $count=AllowanceRate::count();
        return view('all_rates.index',compact('employees','rates','count','rates_count'));
        
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
        //$allowance = Allowance::where('id',$request->allowance_id)->get();
        $allowance = Allowance::find($allowance_id);
        return response()->json($allowance);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        foreach ($request->allowance_name as $key => $value) {
            $res=AllowanceRate::create([
                'employee_id'=> $request->employee_id,
                'personal_id'=> $request->personal_id,
                'allowance_id'=> $request->allowance_name[$key],
                'allowance_rate'=> $request->allowance_rate[$key],
            ]);
        }
        if($res){
            return redirect()->route('allowancerate.index')->with('success',"Allowance Rate Added Successfully");
        }else{
            return redirect()->route('allowancerate.index')->with('fail',"Error! Try Again!");
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
        $allowance=Allowance::all()->sortBy('allowance_name');
        $allowancerate=AllowanceRate::join('allowances', 'allowances.id', '=', 'allowance_rates.allowance_id')->where('employee_id', $id)->get(['allowance_rates.id','allowance_rates.allowance_id','allowances.allowance_rate','allowance_rates.employee_id','allowance_rates.personal_id']);
        $count = $allowancerate->count();
        return view('all_rates.edit',compact('allowance','allowancerate','count'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AllowanceRate  $allowanceRate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $url = $request->url();
        if(!isset($request->counterX) || $request->counterX == ''){
            if($request->count==0) $ctrx = 1;
            else $ctrx = $request->count;
        } 
        else{
            $ctrx = $request->counterX;
        }
        
        if($ctrx==$request->count){
            foreach ($request->allowance_name as $key => $value) {
                $check = AllowanceRate::where('allowance_id',$request->allowance_name[$key])->where('employee_id',$id)->first();
                $allowancerate = AllowanceRate::where("id",$request->allowance_rate_id[$key]);
                if($check){}else{
                    $allowancerate->update(
                        [
                            'allowance_id' => $request->allowance_name[$key],
                            'allowance_rate' => $request->allowance_rate[$key],
                        ]
                    );
                }
            }
            if($check){
                return redirect()->route('allowancerate.edit',$id)->with('fail',"Allowance Already Exist, Please try again!");
            }else{
                return redirect()->route('allowancerate.edit',$id)->with('success',"Allowance Rate Updated Successfully");
            }
        }else if($ctrx>$request->count){
            foreach ($request->allowance_name as $key => $value) {
                $check = AllowanceRate::where('allowance_id',$request->allowance_name[$key])->where('employee_id',$id)->first();
                $insert=AllowanceRate::updateOrCreate([
                    'employee_id'=> $request->employee_id,
                    'personal_id'=> $request->personal_id,
                    'allowance_id'=> $request->allowance_name[$key],
                    'allowance_rate'=> $request->allowance_rate[$key],
                ]);
            }
            if($check){
                return redirect()->route('allowancerate.edit',$id)->with('fail',"Allowance Already Exist, Please try again!");
            }else{
                return redirect()->route('allowancerate.edit',$id)->with('success',"Allowance Rate Updated Successfully");
            }
        }
        
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
