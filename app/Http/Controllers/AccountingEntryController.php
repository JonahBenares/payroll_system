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

        AccountingEntry::create([
            'description'=>$request->input('description')
        ]);

        return redirect()->route('entry.index');
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
    public function destroy(AccountingEntry $accountingEntry)
    {
        //
    }
}
