<?php

namespace App\Http\Controllers;

use App\GoogleTagManager;
use App\User;
use Illuminate\Http\Request;

class GoogleTagManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gtm_managers = GoogleTagManager::all();
        $users = User::all();
        return view('admin.google-tag-manager.gt_manager', compact('gtm_managers', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gtm_manager = GoogleTagManager::all();
        return view('admin.google-tag-manager.gt_manager', compact('gtm_manager'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        GoogleTagManager::create($request->all());
        return redirect('admin/tag-manager')->with('success', 'Google Tag Manger Scripts has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GoogleTagManager  $googleTagManager
     * @return \Illuminate\Http\Response
     */
    public function show(GoogleTagManager $googleTagManager)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GoogleTagManager  $googleTagManager
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gtm_manager = GoogleTagManager::findOrFail($id);
        $users = User::all();
        return view('admin.google-tag-manager.edit', compact('gtm_manager', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GoogleTagManager  $googleTagManager
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        GoogleTagManager::whereId($id)->first()->update($request->all());
        return redirect('admin/tag-manager')->with('info', 'Google Tag Manager Scripts has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GoogleTagManager  $googleTagManager
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $gtm_manager = GoogleTagManager::findOrFail($request->tag_id);
        $gtm_manager->delete();
        return redirect('admin/tag-manager')->with('warning', 'Google Tag Manager Scripts has been deleted successfully');
    }
}
