<?php

namespace App\Http\Controllers;

use App\OpenGraphSiteDesc;
use App\User;
use Illuminate\Http\Request;

class OpenGraphSiteDescController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $sites = OpenGraphSiteDesc::all();
        return view('admin.og-sitename-desc.ogsite', compact('users', 'sites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sites = OpenGraphSiteDesc::all();
        return view('admin.og-sitename-desc.ogsite', compact('sites'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        OpenGraphSiteDesc::create($request->all());
        return redirect('admin/og-site')->with('success', 'OG Sitename and Description has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OpenGraphSiteDesc  $openGraphSiteDesc
     * @return \Illuminate\Http\Response
     */
    public function show(OpenGraphSiteDesc $openGraphSiteDesc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OpenGraphSiteDesc  $openGraphSiteDesc
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $site = OpenGraphSiteDesc::findOrFail($id);
        $users = User::all();
        return view('admin.og-sitename-desc.edit', compact('site', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OpenGraphSiteDesc  $openGraphSiteDesc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        OpenGraphSiteDesc::whereId($id)->first()->update($request->all());
        return redirect('admin/og-site')->with('info', 'OG Sitename & Description has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OpenGraphSiteDesc  $openGraphSiteDesc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $site = OpenGraphSiteDesc::findOrFail($request->site_id);
        $site->delete();
        return redirect('admin/og-site')->with('warning', 'OG Sitename & Description has been deleted successfully');
    }
}
