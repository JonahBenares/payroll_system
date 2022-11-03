<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\EmployeeHMO;
use App\Models\HmoRate;
use App\Models\AccountingEntry;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hmo = HmoRate::all();
        $employeelist = Employee::join('departments', 'departments.dept_id', '=', 'employees.department')
                ->join('business_units', 'business_units.bu_id', '=', 'employees.business_unit')
                ->join('locations', 'locations.loc_id', '=', 'employees.emp_location')
                ->get();
        return view('employees.index',compact('hmo','employeelist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('masterfile.employee_add');
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
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hmo = HmoRate::all();
        $accent = AccountingEntry::all();
        $emp_hmo = EmployeeHMO::where('employee_id', $id)->get();
      
        $employeedata = Employee::join('departments', 'departments.dept_id', '=', 'employees.department')
                ->join('business_units', 'business_units.bu_id', '=', 'employees.business_unit')
                ->join('locations', 'locations.loc_id', '=', 'employees.emp_location')
                ->where('employees.id', '=', $id)
                ->get();

              
        return view('employees.edit',compact('hmo', 'accent', 'employeedata','emp_hmo')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        //$employeedata = Employee::find($id);
        $input = $request->all();
        //$employeedata->update($input);
        return $input;
        //return redirect()->route('emp.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
