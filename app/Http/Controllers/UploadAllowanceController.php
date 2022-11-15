<?php

namespace App\Http\Controllers;

use App\Models\UploadAllowance;
use Illuminate\Http\Request;

class UploadAllowanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('upload.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
     * @param  \App\Models\UploadAllowance  $uploadAllowance
     * @return \Illuminate\Http\Response
     */
    public function show(UploadAllowance $uploadAllowance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UploadAllowance  $uploadAllowance
     * @return \Illuminate\Http\Response
     */
    public function edit(UploadAllowance $uploadAllowance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UploadAllowance  $uploadAllowance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UploadAllowance $uploadAllowance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UploadAllowance  $uploadAllowance
     * @return \Illuminate\Http\Response
     */
    public function destroy(UploadAllowance $uploadAllowance)
    {
        //
    }
}
