<?php

namespace App\Http\Controllers;

use App\SecurityTitle;
use App\User;
use Illuminate\Http\Request;

class SecurityTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $security_titles = SecurityTitle::all();
        return view('admin.security-title.security_title', compact('users', 'security_titles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $security_title = SecurityTitle::all();
        return view('admin.security-title.security_title', compact('security_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $security_title = new SecurityTitle;
         $security_title->setTranslation('title', 'en', $request->title);
         $security_title->setTranslation('title', 'ar', $request->title_ar);
         $security_title->is_publish = $request->is_publish;
         $security_title->save();
         return redirect('admin/security-title')->with('Security & ELV Title has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SecurityTitle  $securityTitle
     * @return \Illuminate\Http\Response
     */
    public function show(SecurityTitle $securityTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SecurityTitle  $securityTitle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $security_title = SecurityTitle::findOrFail($id);
        $users = User::all();
        return view('admin.security-title.edit', compact('security_title', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SecurityTitle  $securityTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $security_title = SecurityTitle::findOrFail($id);
        $security_title->setTranslation('title', 'en', $request->title);
        $security_title->setTranslation('title', 'ar', $request->title_ar);
        $security_title->is_publish = $request->is_publish;
        $security_title->update();
        return redirect('admin/security-title')->with('info', 'Security & ELV Title has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SecurityTitle  $securityTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $security_title = SecurityTitle::findOrFail($request->security_id);
        $security_title->delete();
        return redirect('admin/security-title')->with('warning', 'Security & ELV Title has been deleted successfully');
    }
}
