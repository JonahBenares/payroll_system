<?php

namespace App\Http\Controllers;

use App\Models\AccountingEntry;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountingEntryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // return 'aaa';
        $accountingentries = AccountingEntry::all();
        return view('accent.index', compact('accountingentries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('accent.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $save = AccountingEntry::create([
            'description'=>$request->input('description')
        ]);
        if($save){
            return redirect()->route('payslip_info.create')->with('success',"Accounting Entry added successfully!");
        }else{
            return redirect()->route('payslip_info.create')->with('fail',"Error! Try Again!");
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AccountingEntry  $accountingEntry
     * @return \Illuminate\Http\Response
     */
    public function show(AccountingEntry $accountingEntry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AccountingEntry  $accountingEntry
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $accountingentries = AccountingEntry::findorFail($id);
        
        return view('accent.edit', compact('accountingentries'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AccountingEntry  $accountingEntry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $accountingentries = AccountingEntry::find($id);
        $input = $request->all();
        $accountingentries->update($input);

        return redirect()->route('entry.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AccountingEntry  $accountingEntry
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $accountingentries = AccountingEntry::find($id);
        $accountingentries->delete();
        return redirect()->route('entry.index');

    }
}
