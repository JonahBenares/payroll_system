<?php

namespace App\Http\Controllers;

use App\Models\CutOff;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CutOffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cutoff = CutOff::all();
        return view ('cutoff.index')->with('cutoff', $cutoff);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cutoff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cutoff=new CutOff();
        $cutoff->cutoff_type=$request->cutoff_type;
        $cutoff->cutoff_start=$request->cutoff_start;
        $cutoff->cutoff_end=$request->cutoff_end;
        $res = $cutoff->save();
        if($res){
            return redirect()->route('cut_off.create')->with('success',"Cut Off Added Successfully");
        }else{
            return redirect()->route('cut_off.create')->with('fail',"Error! Try Again!");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CutOff  $cutOff
     * @return \Illuminate\Http\Response
     */
    public function show(CutOff $cutOff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CutOff  $cutOff
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cutoff = CutOff::find($id);
        return view('cutoff.edit')->with('cutoff', $cutoff);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CutOff  $cutOff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cutoff = CutOff::find($id);
        $input = $request->all();
        $cutoff->update($input);
        return redirect()->route('cut_off.edit',$id)->with('success',"Cut Off Updated Successfully"); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CutOff  $cutOff
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CutOff::destroy($id);
        return redirect()->route('cut_off.index')->with('success',"Cut Off Deleted Successfully");
    }
}
