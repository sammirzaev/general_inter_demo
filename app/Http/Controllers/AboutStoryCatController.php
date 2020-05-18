<?php

namespace App\Http\Controllers;

use App\AboutStoryCat;
use App\User;
use Illuminate\Http\Request;

class AboutStoryCatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $about_story_cats = AboutStoryCat::all();
        return view('admin.about-story-cat.about_story_cat', compact('users', 'about_story_cats'));
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
        $about_story_cat = new AboutStoryCat;
        $about_story_cat->setTranslation('title', 'en', $request->title);
        $about_story_cat->setTranslation('title', 'ar', $request->title_ar);
        $about_story_cat->setTranslation('story_cat', 'en', $request->story_cat);
        $about_story_cat->setTranslation('story_cat', 'ar', $request->story_cat_ar);
        $about_story_cat->is_publish = $request->is_publish;
        $about_story_cat->save();
        return redirect('admin/about-story-cat')->with('success', 'About Story Category has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AboutStoryCat  $aboutStoryCat
     * @return \Illuminate\Http\Response
     */
    public function show(AboutStoryCat $aboutStoryCat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AboutStoryCat  $aboutStoryCat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $about_story_cat = AboutStoryCat::findOrFail($id);
        return view('admin.about-story-cat.edit', compact('users', 'about_story_cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AboutStoryCat  $aboutStoryCat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $about_story_cat = AboutStoryCat::findOrFail($id);
        $about_story_cat->setTranslation('title', 'en', $request->title);
        $about_story_cat->setTranslation('title', 'ar', $request->title_ar);
        $about_story_cat->setTranslation('story_cat', 'en', $request->story_cat);
        $about_story_cat->setTranslation('story_cat', 'ar', $request->story_cat_ar);
        $about_story_cat->is_publish = $request->is_publish;
        $about_story_cat->update();
        return redirect('admin/about-story-cat')->with('info', 'About Story Category has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AboutStoryCat  $aboutStoryCat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $about_story_cat = AboutStoryCat::findOrFail($request->storycat_id);
        $about_story_cat->delete();
        return redirect('admin/about-story-cat')->with('warning', 'About Story Category has been deleted successfully');
    }

    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $about_story_cat = AboutStoryCat::findOrFail($request->storycat_id);
            $about_story_cat->delete();
            return redirect('admin/about-story-cat')->with('warning', 'About Story Category has been deleted successfully');
        }
        $about_story_cats = AboutStoryCat::findOrFail($request->checkBoxArray);
        foreach ($about_story_cats as $about_story_cat) {
            $about_story_cat->delete();
        }
        return redirect('admin/about-story-cat')->with('warning', 'About Story Category has been bulk deleted successfully');
    }
}
