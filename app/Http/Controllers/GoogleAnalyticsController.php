<?php

namespace App\Http\Controllers;

use App\GoogleAnalytics;
use App\User;
use Illuminate\Http\Request;

class GoogleAnalyticsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $analytics = GoogleAnalytics::all();
        return view('admin.google-analytics.analytics', compact('analytics', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $analytics = GoogleAnalytics::all();
        return view('admin.google-analytics.analytics', compact('analytics'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        GoogleAnalytics::create($request->all());
        return redirect('admin/analytics')->with('success', 'Google tracker has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GoogleAnalytics  $googleAnalytics
     * @return \Illuminate\Http\Response
     */
    public function show(GoogleAnalytics $googleAnalytics)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GoogleAnalytics  $googleAnalytics
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $analytic = GoogleAnalytics::findOrFail($id);
        return view('admin.google-analytics.edit', compact('users', 'analytic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GoogleAnalytics  $googleAnalytics
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        GoogleAnalytics::whereId($id)->first()->update($request->all());
        return redirect('admin/analytics')->with('info', 'Google Tracker has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GoogleAnalytics  $googleAnalytics
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $analytic = GoogleAnalytics::findOrFail($request->analytic_id);
        $analytic->delete();
        return redirect('admin/analytics')->with('warning', 'Google Tracker has been deleted successfully');
    }
}
