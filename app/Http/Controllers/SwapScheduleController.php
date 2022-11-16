<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\CutOff;
use App\Models\SwapSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class SwapScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
     
        $swapdata=[];   
        if ($request->has('month') && $request->has('year')) {
            $year_month = $request->year . "-".$request->month;
        }
        if ($request->has('period')) {
            if($request->period == "MID"){
                $next_month = $request->month+1;
                $cutoff_start = CutOff::where('cutoff_type', 'MID')->value('cutoff_start');
                $cutoff_end = CutOff::where('cutoff_type', 'MID')->value('cutoff_end');
                $yr_mo =$request->year ."-".$next_month;

            } else if($request->period == "EOM"){
                $cutoff_start = CutOff::where('cutoff_type', 'EOM')->value('cutoff_start');
                $cutoff_end = CutOff::where('cutoff_type', 'EOM')->value('cutoff_end');
                $yr_mo=$year_month;
            }

            $s=$year_month."-".$cutoff_start;
            $e=$yr_mo."-".$cutoff_end;
            $start=date("Y-m-d",strtotime($s));
            $end= date("Y-m-d",strtotime($e));

            $swapdata = SwapSchedule::join('employees', 'employees.id', '=', 'swap.employee_id')
                    ->whereBetween('shift_from_rd', [$start, $end])
                    ->get(['employees.full_name','swap.*']);
          
        
        }

        
        
        return view('swap.index',compact('swapdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $emp = Employee::orderBy('full_name', 'ASC')->get();
        return view('swap.create',compact('emp'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $personal_id = Employee::find($request->input('employee_id'))->personal_id;
       
        $save = SwapSchedule::create([
            'employee_id'=>$request->input('employee_id'),
            'personal_id'=>$personal_id,
            'file_date'=>$request->input('file_date'),
            'shift_from_rd'=>$request->input('shift_from_rd'),
            'shift_to_duty'=>$request->input('shift_to_duty'),
            'shift_from_duty'=>$request->input('shift_from_duty'),
            'shift_to_rd'=>$request->input('shift_to_rd'),
        ]);

        if($save){
            return redirect()->route('swapschedule.create')->with('success',"Swap Schedule added successfully!");
        }else{
            return redirect()->route('swapschedule.create')->with('fail',"Error! Try again!");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SwapSchedule  $swapSchedule
     * @return \Illuminate\Http\Response
     */
    public function show(SwapSchedule $swapSchedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SwapSchedule  $swapSchedule
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $swapdata = SwapSchedule::join('employees', 'employees.id', '=', 'swap.employee_id')
            ->where('swap.id',$id)
            ->get(['employees.full_name','swap.*']);

        return view('swap.edit',compact('swapdata'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SwapSchedule  $swapSchedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $swapdata = SwapSchedule::find($id);
        $input = $request->all();
        if($swapdata->update($input)){
            return redirect()->route('swapschedule.edit',$id)->with('success',"Swap schedule updated successfully!");
        } else {
            return redirect()->route('swapschedule.edit',$id)->with('fail',"Error! Try again!");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SwapSchedule  $swapSchedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(SwapSchedule $swapSchedule)
    {
        //
    }
}
