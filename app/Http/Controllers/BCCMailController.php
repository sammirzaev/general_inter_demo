<?php

namespace App\Http\Controllers;

use App\BCCMail;
use App\User;
use Illuminate\Http\Request;
use test\Mockery\ReturnTypeObjectTypeHint;

class BCCMailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $bcc_configs = BCCMail::all();
        return view('admin.bcc_configs.bcc_configs', compact('users', 'bcc_configs'));
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
        BCCMail::create($request->all());
        return redirect('admin/bcc-configuration')->with('success', 'Email BCC has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BCCMail  $bCCMail
     * @return \Illuminate\Http\Response
     */
    public function show(BCCMail $bCCMail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BCCMail  $bCCMail
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bcc_config = BCCMail::findOrFail($id);
        $users = User::all();
        return view('admin.bcc_configs.edit', compact('users', 'bcc_config'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BCCMail  $bCCMail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        BCCMail::whereId($id)->first()->update($request->all());
        return redirect('admin/bcc-configuration')->with('info', 'Email BCC has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BCCMail  $bCCMail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $bcc_config = BCCMail::findOrfail($request->bcc_id);
        $bcc_config->delete();
        return redirect('admin/bcc-configuration')->with('warning', 'Email BCC has been deleted successfully');
    }
}
