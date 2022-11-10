<?php

namespace App\Http\Controllers;

use App\Models\TardinessRate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TardinessRateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tardiness = TardinessRate::all();
        return view('tardiness.index',compact('tardiness'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tardiness.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $percentage=$request->percentage / 100;
        $tardiness=new TardinessRate();
        $tardiness->minute_from=$request->minute_from;
        $tardiness->minute_to=$request->minute_to;
        $tardiness->deduction_percent=$percentage;
        $res = $tardiness->save();
        if($res){
            return redirect()->route('tardinessrate.create')->with('success',"Tardiness Rate Added Successfully");
        }else{
            return redirect()->route('tardinessrate.create')->with('fail',"Error! Try Again!");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TardinessRate  $tardinessRate
     * @return \Illuminate\Http\Response
     */
    public function show(TardinessRate $tardinessRate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TardinessRate  $tardinessRate
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tardiness=TardinessRate::find($id);
        return view('tardiness.edit',compact('tardiness'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TardinessRate  $tardinessRate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $percentage=$request->percentage / 100;
        $tardiness = TardinessRate::find($id);
        $tardiness->update(
            [
                'minute_from' => $request->minute_from,
                'minute_to' => $request->minute_to,
                'deduction_percent' => $percentage,
            ]
        );
        return redirect()->route('tardinessrate.edit',$id)->with('success',"Tardiness Rate Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TardinessRate  $tardinessRate
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TardinessRate::find($id)->delete();
        return redirect()->route('tardinessrate.index' )->with('success',"Tardiness Rate Deleted Successfully");
    }
}
