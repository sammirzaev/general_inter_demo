<?php

namespace App\Http\Controllers;

use App\Admin;
use App\BrochureRequest;
use App\Candidate;
use App\Events\UserOnline;
use App\JobCareers;
use App\Project;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $projects = Project::where('is_publish', '=', 1)->orderBy('id', 'DESC')->paginate(4);
        $file_size = 0;
        foreach( File::allFiles(public_path()) as $file)
        {
            $file_size += $file->getSize();
        }
        $file_size = number_format($file_size / 1048576,2);
        $count_user = User::all()->count();
        $count_candidate = Candidate::all()->count();
        $count_job = JobCareers::all()->count();
        $count_brochures = BrochureRequest::all()->count();
        $publish_job = JobCareers::where('is_publish', '=', 1)->count();
        $job = JobCareers::where('is_publish', '!=', 0)->orderBy('id', 'DESC')->paginate(5);
        $latest_candidate = Candidate::where('job_id', '!=', 0)->orderBy('id', 'DESC')->paginate(5);
        return view('admin.main.index', compact(
            'users',
            'file_size',
            'count_user',
            'count_candidate',
            'count_job',
            'count_brochures',
            'publish_job',
            'latest_candidate',
            'job',
            'projects'
        ));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
