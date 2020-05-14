<?php

namespace App\Http\Controllers;

use App\CCMail;
use App\User;
use Illuminate\Http\Request;

class CCMailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $cc_configs = CCMail::all();
        return view('admin.cc_configs.cc_configs', compact('users', 'cc_configs'));
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
        CCMail::create($request->all());
        return redirect('admin/cc-configuration')->with('success', 'Email CC has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CCMail  $cCMail
     * @return \Illuminate\Http\Response
     */
    public function show(CCMail $cCMail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CCMail  $cCMail
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $cc_config = CCMail::findOrFail($id);
        return view('admin.cc_configs.edit', compact('users', 'cc_config'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CCMail  $cCMail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        CCMail::whereId($id)->first()->update($request->all());
        return redirect('admin/cc-configuration')->with('info', 'Email CC has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CCMail  $cCMail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $cc_config = CCMail::findOrfail($request->cc_id);
        $cc_config->delete();
        return redirect('admin/cc-configuration')->with('warning', 'Email CC has been deleted successfully');
    }
}
