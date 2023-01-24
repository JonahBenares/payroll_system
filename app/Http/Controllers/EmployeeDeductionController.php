<?php

namespace App\Http\Controllers;

use App\Models\EmployeeDeduction;
use App\Models\Employee;
use App\Models\PayslipInfo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeDeductionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all()->sortBy('full_name');
        $deductions = EmployeeDeduction::join('employees', 'employees.id', '=', 'employee_deduction_rate.employee_id')
        ->join('payslip_info', 'payslip_info.id', '=', 'employee_deduction_rate.payslip_info_id')
        ->get();
        $count=EmployeeDeduction::count();
        return view ('emp_deduction.index',compact('employees','deductions','count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $info=PayslipInfo::where('pay_type','3')->get();
        return view ('emp_deduction.create',compact('info'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        foreach ($request->description as $key => $value) {
            $res=EmployeeDeduction::updateOrCreate([
                'employee_id'=> $request->employee_id,
                'personal_id'=> $request->personal_id,
                'payslip_info_id'=> $request->description[$key],
                'employee_rate'=> $request->employee_rate[$key],
            ]);
        }
        if($res) {  
            return redirect()->route('empDeduction.index')->with('success',"Deductions Added Successfully");
        }else{
            return redirect()->route('empDeduction.index')->with('fail',"Error! Try Again!");
            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmployeeDeduction  $employeeDeduction
     * @return \Illuminate\Http\Response
     */
    public function show(EmployeeDeduction $employeeDeduction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmployeeDeduction  $employeeDeduction
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info=PayslipInfo::where('pay_type','3')->get();
        $deductions=EmployeeDeduction::join('payslip_info', 'payslip_info.id', '=', 'employee_deduction_rate.payslip_info_id')->where('employee_id', $id)->get(['employee_deduction_rate.id','employee_deduction_rate.payslip_info_id','employee_deduction_rate.employee_rate','employee_deduction_rate.employee_id','employee_deduction_rate.personal_id']);
        $count = $deductions->count();
        return view('emp_deduction.edit',compact('info','deductions','count'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EmployeeDeduction  $employeeDeduction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $url = $request->url();
        if(!isset($request->counterX) || $request->counterX == ''){
            if($request->count==0) $ctrx = 1;
            else $ctrx = $request->count;
        }else{
            $ctrx = $request->counterX;
        }
        if($ctrx==$request->count){
            foreach ($request->description as $key => $value) {
                $check = EmployeeDeduction::where('payslip_info_id',$request->description[$key])->where('employee_id',$id)->first();
                $deductions = EmployeeDeduction::where("id",$request->employee_deduction_id[$key]);
                $deductions->update(
                    [
                        'payslip_info_id' => $request->description[$key],
                        'employee_rate' => $request->employee_rate[$key],
                    ]
                );
            }
            return redirect()->route('empDeduction.edit',$id)->with('success',"Deduction Updated Successfully");
        }else if($ctrx>$request->count){
            foreach ($request->description as $key => $value) {
                $check = EmployeeDeduction::where('payslip_info_id',$request->description[$key])->where('employee_id',$id)->first();
                $insert=EmployeeDeduction::updateOrCreate([
                    'employee_id'=> $request->employee_id,
                    'personal_id'=> $request->personal_id,
                    'payslip_info_id'=> $request->description[$key],
                    'employee_rate'=> $request->employee_rate[$key],
                ]);
            }
            if($check){
                return redirect()->route('empDeduction.edit',$id)->with('fail',"Deduction Already Exist, Please try again!");
            }else{
                return redirect()->route('empDeduction.edit',$id)->with('success',"Deduction Updated Successfully");
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmployeeDeduction  $employeeDeduction
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$emp_id)
    {
        EmployeeDeduction::find($id)->delete();
        return redirect()->route('empDeduction.edit',$emp_id)->with('success',"Deduction Deleted Successfully");
    }
}
