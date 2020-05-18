<?php

namespace App\Http\Controllers;

use App\ProjectBanner;
use App\User;
use Illuminate\Http\Request;

class ProjectBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $project_banners = ProjectBanner::all();
        return view('admin.project-banner.project_banner', compact('users', 'project_banners'));
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
        $project_banner = new ProjectBanner;
        $input = $request->all();
        if ($file = $request->file('banner')){
            $name = time().'-'.$file->getClientOriginalName();
            $file->storeAs('banner-media', $name);
            $input['banner'] = $name;
        }
        $project_banner->setTranslation('head_title', 'en', $request->head_title);
        $project_banner->setTranslation('head_title', 'ar', $request->head_title_ar);
        $project_banner->setTranslation('title', 'en', $request->title);
        $project_banner->setTranslation('title', 'ar', $request->title_ar);
        if ($request->file('banner')){
            $project_banner->banner = $name;
        } else {
            $project_banner->banner = null;
        }
        $project_banner->is_publish = $request->is_publish;
        $project_banner->save();
        return redirect('admin/project-banner')->with('success', 'Project Banner has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProjectBanner  $projectBanner
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectBanner $projectBanner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProjectBanner  $projectBanner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $project_banner = ProjectBanner::findOrFail($id);
        return view('admin.project-banner.edit', compact('users', 'project_banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProjectBanner  $projectBanner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        if ($file = $request->file('banner')){
            $name = time().'-'.$file->getClientOriginalName();
            $file->storeAs('banner-media', $name);
            $input['banner'] = $name;
        }
        $project_banner = ProjectBanner::findOrFail($id);
        $project_banner->setTranslation('head_title', 'en', $request->head_title);
        $project_banner->setTranslation('head_title', 'ar', $request->head_title_ar);
        $project_banner->setTranslation('title', 'en', $request->title);
        $project_banner->setTranslation('title', 'ar', $request->title_ar);
        $project_banner->is_publish = $request->is_publish;
        $project_banner->update($input);
        return redirect('admin/project-banner')->with('info', 'Project Banner has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProjectBanner  $projectBanner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $project_banner = ProjectBanner::findOrFail($request->projectb_id);
        if (!empty($project_banner->banner)){
            if (file_exists(public_path('banner-media/'.$project_banner->banner))){
                unlink(public_path('banner-media/'.$project_banner->banner));
            }
        }
        $project_banner->delete();
        return redirect('admin/project-banner')->with('warning', 'Project Banner has been deleted successfully');
    }

    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $project_banner = ProjectBanner::findOrFail($request->projectb_id);
            if (!empty($project_banner->banner)){
                if (file_exists(public_path('banner-media/'.$project_banner->banner))){
                    unlink(public_path('banner-media/'.$project_banner->banner));
                }
            }
            $project_banner->delete();
            return redirect('admin/project-banner')->with('warning', 'Project Banner has been deleted successfully');
        }
        $project_banners = ProjectBanner::findOrFail($request->checkBoxArray);
        foreach ($project_banners as $project_banner){
            if (!empty($project_banner->banner)){
                if (file_exists(public_path('banner-media/'.$project_banner->banner))){
                    unlink(public_path('banner-media/'.$project_banner->banner));
                }
            }
            $project_banner->delete();
        }
        return redirect('admin/project-banner')->with('warning', 'Project Banner has been bulk deleted successfully');
    }
}
