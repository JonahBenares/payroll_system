<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\EmployeeHMO;
use App\Models\HmoRate;
use App\Models\AccountingEntry;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
                ->orderBy('full_name', 'ASC')
                ->get(['departments.dept_name','business_units.bu_name','locations.location_name','employees.*']);
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
        $emp_hmo = EmployeeHMO::all();
        $data=array();
         foreach($hmo AS $h){
           
            $no = EmployeeHMO::where([
                    ['employee_id', '=',$id],
                    ['hmo_rate_id', '=',$h->id],
                    ])->first();
                    
             
                if ($no === null) {
                    $number=0;
                } else {
                    $number= $no->no_of_dependent;
                }
               
               $data[]=array(
                 'id'=>$h->id,
                 'level_description'=>$h->level_description,
                 'no_of_dependent'=>$number
               );
         }
       
       
        $employeedata = Employee::join('departments', 'departments.dept_id', '=', 'employees.department')
                ->join('business_units', 'business_units.bu_id', '=', 'employees.business_unit')
                ->join('locations', 'locations.loc_id', '=', 'employees.emp_location')
                ->where('employees.id', '=', $id)
                ->get(['departments.dept_name','business_units.bu_name','locations.location_name','employees.*']);

              
          return view('employees.edit',compact('hmo', 'accent', 'employeedata', 'data')); 
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
       
        $employeedata = Employee::find($id);
        $input = $request->all();
        
        $employeedata->update([
            'supervisory'=>$request->input('supervisory'),
            'hourly_rate'=>$request->input('hourly_rate'),
            'daily_rate'=>$request->input('daily_rate'),
            'monthly_rate'=>$request->input('monthly_rate'),
            'accounting_entry_id'=>$request->input('accounting_entry_id'),
            'salary_type'=>$request->input('salary_type'),
        ]);

        foreach($input AS $key=>$value){
            $contains = Str::contains($key, 'dependent');
            if($contains == 1){
                $hmo_rate = explode('_', $key);
                $hmo_rate_id =$hmo_rate[1];
                $existing=EmployeeHMO::where([
                        ['employee_id','=',$id],
                        ['hmo_rate_id','=',$hmo_rate_id]
                        ])->count();

                if($existing>0){
                    EmployeeHMO::where([
                        ['employee_id','=',$id],
                        ['hmo_rate_id','=',$hmo_rate_id]
                        ])->update(['no_of_dependent'=>$value]);
                } else {
                    if(!empty($value)){
                        EmployeeHMO::create([
                            'employee_id'=>$id,
                            'hmo_rate_id'=>$hmo_rate_id,
                            'no_of_dependent'=>$value
                        ]);
                    }
                }
            }
        }
        return redirect()->route('emp.edit',$id)->with('success',"Employee updated successfully!");
        
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
