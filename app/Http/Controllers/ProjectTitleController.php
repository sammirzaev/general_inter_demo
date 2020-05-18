<?php

namespace App\Http\Controllers;

use App\ProjectTitle;
use App\User;
use Illuminate\Http\Request;

class ProjectTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $project_titles = ProjectTitle::all();
        return view('admin.project-title.project_title', compact('users', 'project_titles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $project_title = ProjectTitle::all();
        return view('admin.project-title.project_title', compact('project_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project_title = new ProjectTitle;
        $project_title->setTranslation('title', 'en', $request->title);
        $project_title->setTranslation('title', 'ar', $request->title_ar);
        $project_title->is_publish = $request->is_publish;
        $project_title->save();
        return redirect('admin/project-title')->with('success', 'Project Title has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProjectTitle  $projectTitle
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectTitle $projectTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProjectTitle  $projectTitle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project_title = ProjectTitle::findOrFail($id);
        $users = User::all();
        return view('admin.project-title.edit', compact('users', 'project_title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProjectTitle  $projectTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $project_title = ProjectTitle::findOrFail($id);
        $project_title->setTranslation('title', 'en', $request->title);
        $project_title->setTranslation('title', 'ar', $request->title_ar);
        $project_title->is_publish = $request->is_publish;
        $project_title->update();
        return redirect('admin/project-title')->with('info', 'Project Title has been created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProjectTitle  $projectTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $project_title = ProjectTitle::findOrFail($request->project_id);
        $project_title->delete();
        return redirect('admin/project-title')->with('warning', 'Project Title has been deleted successfully');
    }
}
