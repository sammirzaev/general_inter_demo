<?php

namespace App\Http\Controllers;

use App\JobCategory;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Queue\Jobs\Job;
use PhpParser\Node\Stmt\Catch_;

class JobCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $categories = JobCategory::all();
        return view('admin.job-category.category', compact('users', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = JobCategory::all();
        return view('admin.job-category.category', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $job_category = new JobCategory;
        $job_category->setTranslation('name', 'en', $request->name);
        $job_category->setTranslation('name', 'ar', $request->name_ar);
        $job_category->is_publish = $request->is_publish;
        $job_category->save();
        return redirect('admin/job-category')->with('success', 'Job Category has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JobCategory  $jobCategory
     * @return \Illuminate\Http\Response
     */
    public function show(JobCategory $jobCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JobCategory  $jobCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = JobCategory::findOrFail($id);
        $users = User::all();
        return view('admin.job-category.edit', compact('category', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JobCategory  $jobCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $job_category = JobCategory::findOrFail($id);
        $job_category->setTranslation('name', 'en', $request->name);
        $job_category->setTranslation('name', 'ar', $request->name_ar);
        $job_category->is_publish = $request->is_publish;
        $job_category->update();
        return redirect('admin/job-category')->with('info', 'Job Category has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JobCategory  $jobCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $category = JobCategory::findOrFail($request->cat_id);
        $category->delete();
        return redirect('admin/job-category')->with('warning', 'Job Category has been deleted successfully');
    }
}
