<?php

namespace App\Http\Controllers;

use App\Models\HmoRate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HmoRateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hmo = HmoRate::all();
        return view('hmo.index',compact('hmo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hmo.create');
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
        $res=HmoRate::create($input);
        if($res){
            return redirect()->route('hmorate.create')->with('success',"HMO Rate Added Successfully");
        }else{
            return redirect()->route('hmorate.create')->with('fail',"Error! Try Again!");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HmoRate  $hmoRate
     * @return \Illuminate\Http\Response
     */
    public function show(HmoRate $hmoRate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HmoRate  $hmoRate
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hmo=HmoRate::find($id);
        return view('hmo.edit',compact('hmo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HmoRate  $hmoRate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $hmo = HmoRate::find($id);
        $input = $request->all();
        $hmo->update($input);
        return redirect()->route('hmorate.edit',$id)->with('success',"HMO Rate Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HmoRate  $hmoRate
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        HmoRate::find($id)->delete();
        return redirect()->route('hmorate.index' )->with('success',"HMO Rate Deleted Successfully");
    }
}
