<?php

namespace App\Http\Controllers;

use App\Models\Holiday;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HolidayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $holiday = Holiday::all();
        return view('holidays.index')->with("holiday",$holiday);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('holidays.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();
        $res=Holiday::create($input);
        if($res){
            return redirect()->route('holiday.create')->with('success',"Holiday Added Successfully");
        }else{
            return redirect()->route('holiday.create')->with('fail',"Error! Try Again!");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Holiday  $holiday
     * @return \Illuminate\Http\Response
     */
    public function show(Holiday $holiday)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Holiday  $holiday
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $holidays=Holiday::find($id);
        return view('holidays.edit')->with('holiday',$holidays);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Holiday  $holiday
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Holiday $holiday)
    {
        $holiday::where('id', '=', $request->id)->update([
            'holiday_date' => $request->holiday_date, 
            'holiday_name' => $request->holiday_name,
            'holiday_type' => $request->holiday_type,
            'calendar_year' => $request->calendar_year,
            'holiday_rate' => $request->holiday_rate,
        ]);
        return redirect()->route('holiday.edit',$request->id)->with('success',"Holiday Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Holiday  $holiday
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Holiday::find($id)->delete();
        return redirect()->route('holiday.index' )->with('success',"Holiday Deleted Successfully");
    }
}
