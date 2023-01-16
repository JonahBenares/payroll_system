<?php

namespace App\Http\Controllers;
use App\Models\Allowance;
use App\Models\AllowanceSummary;
use App\Models\BusinessUnit;
use App\Models\UploadAllowance;
use App\Models\UploadAllowanceDetail;
use Illuminate\Http\Request;

class AllowanceSummaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $allowance = Allowance::all();
        $businessunit = BusinessUnit::all();
        $details=array();
        if($request->has('allowance_id')){
            $details = UploadAllowanceDetail::where("allowance_head_id", $request->allowance_id)->get();
        }

        return view('allowance_summary.index', compact('allowance', 'details','businessunit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function fetchPeriod(Request $request)
    {
        $data['period'] = UploadAllowance::where("allowance_id", $request->allowanceid)->get();
        return response()->json($data);
    }

    public function create()
    {
        //
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
     * @param  \App\Models\AllowanceSummary  $allowanceSummary
     * @return \Illuminate\Http\Response
     */
    public function show(AllowanceSummary $allowanceSummary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AllowanceSummary  $allowanceSummary
     * @return \Illuminate\Http\Response
     */
    public function edit(AllowanceSummary $allowanceSummary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AllowanceSummary  $allowanceSummary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AllowanceSummary $allowanceSummary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AllowanceSummary  $allowanceSummary
     * @return \Illuminate\Http\Response
     */
    public function destroy(AllowanceSummary $allowanceSummary)
    {
        //
    }
}
