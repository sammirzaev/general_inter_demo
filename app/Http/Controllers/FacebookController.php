<?php

namespace App\Http\Controllers;

use App\Facebook;
use App\User;
use Illuminate\Http\Request;

class FacebookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $facebooks = Facebook::all();
        return view('admin.facebook.facebook', compact('facebooks', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $facebook = Facebook::all();
        return view('admin.facebook.facebook', compact('facebook'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Facebook::create($request->all());
        return redirect('admin/facebook')->with('success', 'Facebook Page ID has been registered successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Facebook  $facebook
     * @return \Illuminate\Http\Response
     */
    public function show(Facebook $facebook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Facebook  $facebook
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $facebook = Facebook::findOrFail($id);
        $users = User::all();
        return view('admin.facebook.edit', compact('facebook', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Facebook  $facebook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Facebook::whereId($id)->first()->update($request->all());
        return redirect('admin/facebook')->with('info', 'Facebook Page ID has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Facebook  $facebook
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $facebook = Facebook::findOrFail($request->facebook_id);
        $facebook->delete();
        return redirect('admin/facebook')->with('warning', 'Facebook Page ID has been deleted successfully');
    }
}
