<?php

namespace App\Http\Controllers;

use App\JobType;
use App\User;
use Illuminate\Http\Request;

class JobTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $types = JobType::all();
        return view('admin.job-type.type', compact('users', 'types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type = JobType::all();
        return view('admin.job-type.type', compact('type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $job_type = new JobType;
        $job_type->setTranslation('name', 'en', $request->name);
        $job_type->setTranslation('name', 'ar', $request->name_ar);
        $job_type->is_publish = $request->is_publish;
        $job_type->save();
        return redirect('admin/job-type')->with('success', 'Job Type has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JobType  $jobType
     * @return \Illuminate\Http\Response
     */
    public function show(JobType $jobType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JobType  $jobType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $type = JobType::findOrFail($id);
        return view('admin.job-type.edit', compact('users', 'type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JobType  $jobType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $job_type = JobType::findOrFail($id);
        $job_type->setTranslation('name', 'en', $request->name);
        $job_type->setTranslation('name', 'ar', $request->name_ar);
        $job_type->is_publish = $request->is_publish;
        $job_type->update();
        return redirect('admin/job-type')->with('info', 'Job Type has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JobType  $jobType
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $type = JobType::findOrFail($request->type_id);
        $type->delete();
        return redirect('admin/job-type')->with('warning', 'Job Type has been deleted successfully');
    }
}
