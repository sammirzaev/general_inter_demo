<?php

namespace App\Http\Controllers;

use App\JobBrand;
use App\JobCareers;
use App\JobCategory;
use App\JobLocation;
use App\JobSalary;
use App\JobType;
use App\User;
use Illuminate\Contracts\Queue\Job;
use Illuminate\Http\Request;

class JobCareersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $type = JobType::pluck('name', 'id')->all();
        $location = JobLocation::pluck('name', 'id')->all();
        $salary = JobSalary::pluck('name', 'id')->all();
        $categories = JobCategory::pluck('name', 'id')->all();
        $careers = JobCareers::all();
        return view('admin.job-board.careers', compact('users', 'type', 'location', 'salary', 'categories', 'careers'));
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
        $career = new JobCareers;
        $career->setTranslation('job_name', 'en', $request->job_name);
        $career->setTranslation('job_name', 'ar', $request->job_name_ar);
        $career->setTranslation('job_title', 'en', $request->job_title);
        $career->setTranslation('job_title', 'ar', $request->job_title_ar);
        $career->setTranslation('job_desc', 'en', $request->job_desc);
        $career->setTranslation('job_desc', 'ar', $request->job_desc_ar);
        $career->type_id = $request->type_id;
        $career->location_id = $request->location_id;
        $career->salary_id = $request->salary_id;
        $career->is_publish = $request->is_publish;
         if($career->save())
         {
             $career->categories()->sync($request->category_id);
         }
        return redirect('admin/job-board')->with('success', 'Career has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JobCareers  $jobCareers
     * @return \Illuminate\Http\Response
     */
    public function show(JobCareers $jobCareers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JobCareers  $jobCareers
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $career = JobCareers::findOrFail($id);
        $users = User::all();
        $type = JobType::pluck('name', 'id')->all();
        $location = JobLocation::pluck('name', 'id')->all();
        $salary = JobSalary::pluck('name', 'id')->all();
        $categories = JobCategory::pluck('name', 'id')->all();
        return view('admin.job-board.edit', compact('users', 'type', 'location', 'salary', 'categories', 'career'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JobCareers  $jobCareers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $career = JobCareers::findOrFail($id);
        $career->setTranslation('job_name', 'en', $request->job_name);
        $career->setTranslation('job_name', 'ar', $request->job_name_ar);
        $career->setTranslation('job_title', 'en', $request->job_title);
        $career->setTranslation('job_title', 'ar', $request->job_title_ar);
        $career->setTranslation('job_desc', 'en', $request->job_desc);
        $career->setTranslation('job_desc', 'ar', $request->job_desc_ar);
        $career->type_id = $request->type_id;
        $career->location_id = $request->location_id;
        $career->salary_id = $request->salary_id;
        $career->is_publish = $request->is_publish;
        $career->categories()->detach();
        if($career->update()){
            $career->categories()->sync($request->category_id);
        }
        return redirect('admin/job-board')->with('info', 'Career has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JobCareers  $jobCareers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $career = JobCareers::findOrFail($request->career_id);
        $career->categories()->detach();
        $career->delete();
        return redirect('admin/job-board')->with('warning', 'Career has been deleted successfully');
    }
}
