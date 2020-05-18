<?php

namespace App\Http\Controllers;

use App\JobSalary;
use App\User;
use Illuminate\Http\Request;

class JobSalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $salaries = JobSalary::all();
        return view('admin.job-salary.salary', compact('users', 'salaries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $salary = JobSalary::all();
        return view('admin.job-salary.salary', compact('salary'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $job_salary = new JobSalary;
        $job_salary->setTranslation('name', 'en', $request->name);
        $job_salary->setTranslation('name', 'ar', $request->name_ar);
        $job_salary->is_publish = $request->is_publish;
        $job_salary->save();
        return redirect('admin/job-salary')->with('success', 'Job Salary has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JobSalary  $jobSalary
     * @return \Illuminate\Http\Response
     */
    public function show(JobSalary $jobSalary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JobSalary  $jobSalary
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $salary = JobSalary::findOrFail($id);
        $users = User::all();
        return view('admin.job-salary.edit', compact('salary', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JobSalary  $jobSalary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $job_salary = JobSalary::findOrFail($id);
        $job_salary->setTranslation('name', 'en', $request->name);
        $job_salary->setTranslation('name', 'ar', $request->name_ar);
        $job_salary->is_publish = $request->is_publish;
        $job_salary->update();
        return redirect('admin/job-salary')->with('info', 'Job Salary has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JobSalary  $jobSalary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $salary = JobSalary::findOrFail($request->salary_id);
        $salary->delete();
        return redirect('admin/job-salary')->with('warning', 'Job Salary has been deleted successfully');
    }
}
