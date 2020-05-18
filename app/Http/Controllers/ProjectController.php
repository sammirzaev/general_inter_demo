<?php

namespace App\Http\Controllers;

use App\Project;
use App\ProjectCategory;
use App\User;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $project_cat = ProjectCategory::pluck('title', 'id')->all();
        $projects = Project::all();
        return view('admin.project.project', compact('users', 'projects', 'project_cat'));
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
        $project = new Project;
        $input = $request->all();
        if ($file = $request->file('media')){
            $name = time().'-'.$file->getClientOriginalName();
            $file->storeAs('project-media', $name);
            $input['media'] = $name;
        }
        $project->setTranslation('title', 'en', $request->title);
        $project->setTranslation('title', 'ar', $request->title_ar);
        $project->setTranslation('description', 'en', $request->description);
        $project->setTranslation('description', 'ar', $request->description_ar);
        if ($request->file('media')){
            $project->media = $name;
        } else {
            $project->media = null;
        }
        $project->cat_id = $request->cat_id;
        $project->is_publish = $request->is_publish;
        $project->save();
        return redirect('admin/project')->with('success', 'Project has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $project_cat = ProjectCategory::pluck('title', 'id')->all();
        $project = Project::findOrFail($id);
        return view('admin.project.edit', compact('users', 'project_cat', 'project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        if ($file = $request->file('media')){
            $name = time().'-'.$file->getClientOriginalName();
            $file->storeAs('project-media', $name);
            $input['media'] = $name;
        }
        $project = Project::findOrFail($id);
        $project->setTranslation('title', 'en', $request->title);
        $project->setTranslation('title', 'ar', $request->title_ar);
        $project->setTranslation('description', 'en', $request->description);
        $project->setTranslation('description', 'ar', $request->description_ar);
        $project->cat_id = $request->cat_id;
        $project->is_publish = $request->is_publish;
        $project->update($input);
        return redirect('admin/project')->with('info', 'Project has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @return void
     */
    public function destroy(Request $request)
    {
        $project = Project::findOrFail($request->project_id);
        if (!empty($project->media)){
            if (file_exists(public_path('project-media/'.$project->media))){
                unlink(public_path('project-media/'.$project->media));
            }
        }
        $project->delete();
        return redirect('admin/project')->with('warning', 'Project has been deleted successfully');
    }

    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $project = Project::findOrFail($request->project_id);
            if (!empty($project->media)){
                if (file_exists(public_path('project-media/'.$project->media))){
                    unlink(public_path('project-media/'.$project->media));
                }
            }
            $project->delete();
            return redirect('admin/project')->with('warning', 'Project has been deleted successfully');
        }
        $projects = Project::findOrFail($request->checkBoxArray);
        foreach ($projects as $project){
            if (!empty($project->media)){
                if (file_exists(public_path('project-media/'.$project->media))){
                    unlink(public_path('project-media/'.$project->media));
                }
            }
            $project->delete();
        }
        return redirect('admin/project')->with('warning', 'Project has been bulk deleted successfully');
    }
}
