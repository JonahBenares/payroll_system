<?php

namespace App\Http\Controllers;

use App\Models\StatutoryBracket;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StatutoryBracketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('statutory.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('statutory.create');
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
     * @param  \App\Models\StatutoryBracket  $statutoryBracket
     * @return \Illuminate\Http\Response
     */
    public function show(StatutoryBracket $statutoryBracket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StatutoryBracket  $statutoryBracket
     * @return \Illuminate\Http\Response
     */
    public function edit(StatutoryBracket $statutoryBracket)
    {
        return view('statutory.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StatutoryBracket  $statutoryBracket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StatutoryBracket $statutoryBracket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StatutoryBracket  $statutoryBracket
     * @return \Illuminate\Http\Response
     */
    public function destroy(StatutoryBracket $statutoryBracket)
    {
        //
    }
}
