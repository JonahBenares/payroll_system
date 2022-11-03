<?php

namespace App\Http\Controllers;

use App\Models\Allowance;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AllowanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allowances = Allowance::all();
        return view('allowances.index')->with('allowances',$allowances);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('allowances.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $allowance=new Allowance();
        $allowance->allowance_name=$request->allowance_name;
        $allowance->allowance_rate=$request->allowance_rate;
        $res = $allowance->save();
        if($res){
            return redirect()->route('allowance.create')->with('success',"Allowance Added Successfully");
        }else{
            return redirect()->route('allowance.create')->with('fail',"Error! Try Again!");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Allowance  $allowance
     * @return \Illuminate\Http\Response
     */
    public function show(Allowance $allowance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Allowance  $allowance
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $allowances=Allowance::find($id);
        return view('allowances.edit')->with('allowance',$allowances);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Allowance  $allowance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $allowance = Allowance::find($id);
        $input = $request->all();
        $allowance->update($input);
        return redirect()->route('allowance.edit',$id)->with('success',"Allowance Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Allowance  $allowance
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        Allowance::find($id)->delete();
        return redirect()->route('allowance.index' )->with('success',"Allowance Deleted Successfully");
    }
}
