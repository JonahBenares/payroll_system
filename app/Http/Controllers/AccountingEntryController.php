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
        return view('masterfile.accounting_entry_list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('masterfile.accounting_entry_add');
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
    public function edit(AccountingEntry $accountingEntry)
    {
        return view('masterfile.accounting_entry_update');
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AccountingEntry  $accountingEntry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AccountingEntry $accountingEntry)
    {
        //
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
