<?php

namespace App\Http\Controllers;

use App\ProjectCategory;
use App\User;
use Illuminate\Http\Request;

class ProjectCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $project_categories = ProjectCategory::all();
        return view('admin.project-cat.project_cat', compact('users', 'project_categories'));
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
        $project_category = new ProjectCategory;
        $project_category->setTranslation('title', 'en', $request->title);
        $project_category->setTranslation('title', 'ar', $request->title_ar);
        $project_category->is_publish = $request->is_publish;
        $project_category->save();
        return redirect('admin/project-category')->with('success', 'Project Category has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProjectCategory  $projectCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectCategory $projectCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProjectCategory  $projectCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $project_category = ProjectCategory::findOrFail($id);
        return view('admin.project-cat.edit', compact('users', 'project_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProjectCategory  $projectCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $project_category = ProjectCategory::findOrFail($id);
        $project_category->setTranslation('title', 'en', $request->title);
        $project_category->setTranslation('title', 'ar', $request->title_ar);
        $project_category->is_publish = $request->is_publish;
        $project_category->update();
        return redirect('admin/project-category')->with('info', 'Project Category has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProjectCategory  $projectCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $project_category = ProjectCategory::findOrFail($request->projectc_id);
        $project_category->delete();
        return redirect('admin/project-category')->with('warning', 'Project Category has been deleted successfully');
    }

    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $project_category = ProjectCategory::findOrFail($request->projectc_id);
            $project_category->delete();
            return redirect('admin/project-category')->with('warning', 'Project Category has been deleted successfully');
        }
        $project_categories = ProjectCategory::findOrFail($request->checkBoxArray);
        foreach ($project_categories as $project_category){
            $project_category->delete();
        }
        return redirect('admin/project-category')->with('warning', 'Project Category has been bulk deleted successfully');
    }
}
