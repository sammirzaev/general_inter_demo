<?php

namespace App\Http\Controllers;

use App\AboutDiversityIcon;
use App\AboutStoryCat;
use App\User;
use Illuminate\Http\Request;

class AboutDiversityIconController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $story = AboutStoryCat::pluck('story_cat', 'id')->all();
        $about_diversity_icons = AboutDiversityIcon::all();
        return view('admin.about-diversity-icon.about_diversity_icon', compact('users', 'story', 'about_diversity_icons'));
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
        $about_diversity_icon = new AboutDiversityIcon;
        $about_diversity_icon->setTranslation('title', 'en', $request->title);
        $about_diversity_icon->setTranslation('title', 'ar', $request->title_ar);
        $about_diversity_icon->story_id = $request->story_id;
        $about_diversity_icon->icon = $request->icon;
        $about_diversity_icon->is_publish = $request->is_publish;
        $about_diversity_icon->save();
        return redirect('admin/about-diversity-icon')->with('success', 'About Diversity Icon has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AboutDiversityIcon  $aboutDiversityIcon
     * @return \Illuminate\Http\Response
     */
    public function show(AboutDiversityIcon $aboutDiversityIcon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AboutDiversityIcon  $aboutDiversityIcon
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $story = AboutStoryCat::pluck('story_cat', 'id')->all();
        $about_diversity_icon = AboutDiversityIcon::findOrFail($id);
        return view('admin.about-diversity-icon.edit', compact('users', 'story', 'about_diversity_icon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AboutDiversityIcon  $aboutDiversityIcon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $about_diversity_icon = AboutDiversityIcon::findOrFail($id);
        $about_diversity_icon->setTranslation('title', 'en', $request->title);
        $about_diversity_icon->setTranslation('title', 'ar', $request->title_ar);
        $about_diversity_icon->story_id = $request->story_id;
        $about_diversity_icon->icon = $request->icon;
        $about_diversity_icon->is_publish = $request->is_publish;
        $about_diversity_icon->update();
        return redirect('admin/about-diversity-icon')->with('info', 'About Diversity Icon has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AboutDiversityIcon  $aboutDiversityIcon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $about_diversity_icon = AboutDiversityIcon::findOrFail($request->diversityicon_id);
        $about_diversity_icon->delete();
        return redirect('admin/about-diversity-icon')->with('warning', 'About Diversity Icon has been deleted successfully');
    }

    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $about_diversity_icon = AboutDiversityIcon::findOrFail($request->diversityicon_id);
            $about_diversity_icon->delete();
            return redirect('admin/about-diversity-icon')->with('warning', 'About Diversity Icon has been deleted successfully');
        }
        $about_diversity_icons = AboutDiversityIcon::findOrFail($request->checkBoxArray);
        foreach ($about_diversity_icons as $about_diversity_icon){
            $about_diversity_icon->delete();
        }
        return redirect('admin/about-diversity-icon')->with('warning', 'About Diversity Icon has been bulk deleted successfully');
    }
}
