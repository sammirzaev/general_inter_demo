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
        $brand = JobBrand::pluck('brand_name', 'brand_id', 'id')->all();
        $salary = JobSalary::pluck('name', 'id')->all();
        $categories = JobCategory::pluck('name', 'id')->all();
        $careers = JobCareers::all();
        return view('admin.job-board.careers', compact('users', 'type', 'location', 'brand', 'salary', 'categories', 'careers'));
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
         if($career = JobCareers::create($request->all()))
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
        $brand = JobBrand::pluck('brand_name', 'brand_id', 'id')->all();
        $salary = JobSalary::pluck('name', 'id')->all();
        $categories = JobCategory::pluck('name', 'id')->all();
        return view('admin.job-board.edit', compact('users', 'type', 'location', 'brand', 'salary', 'categories', 'career'));

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
        $career = JobCareers::whereId($id)->first();
        $career->categories()->detach();
        if($career->update($request->all())){
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
