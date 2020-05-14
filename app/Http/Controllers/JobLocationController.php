<?php

namespace App\Http\Controllers;

use App\JobLocation;
use App\User;
use Illuminate\Http\Request;

class JobLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $locations = JobLocation::all();
        return view('admin.job-location.location', compact('users', 'locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $location = JobLocation::all();
        return view('admin.job-location.location', compact('location'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        JobLocation::create($request->all());
        return redirect('admin/job-location')->with('success', 'Job Location has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JobLocation  $jobLocation
     * @return \Illuminate\Http\Response
     */
    public function show(JobLocation $jobLocation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JobLocation  $jobLocation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $location = JobLocation::findOrFail($id);
        $users = User::all();
        return view('admin.job-location.edit', compact('location', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JobLocation  $jobLocation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        JobLocation::whereId($id)->first()->update($request->all());
        return redirect('admin/job-location')->with('info', 'Job Location has been created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JobLocation  $jobLocation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $location = JobLocation::findOrFail($request->location_id);
        $location->delete();
        return redirect('admin/job-location')->with('warning', 'Job Location has been deleted successfully');
    }
}
