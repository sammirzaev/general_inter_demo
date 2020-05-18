<?php

namespace App\Http\Controllers;

use App\AboutDiversityOne;
use App\AboutStoryCat;
use App\User;
use Illuminate\Http\Request;

class AboutDiversityOneController extends Controller
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
        $about_diversity_ones = AboutDiversityOne::all();
        return view('admin.about-diversity-one.about_diversity_one', compact('users', 'story', 'about_diversity_ones'));
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
        $about_diversity_one = new AboutDiversityOne;
        $about_diversity_one->setTranslation('title', 'en', $request->title);
        $about_diversity_one->setTranslation('title', 'ar', $request->title_ar);
        $about_diversity_one->setTranslation('description', 'en', $request->description);
        $about_diversity_one->setTranslation('description', 'ar', $request->description_ar);
        $about_diversity_one->story_id = $request->story_id;
        $about_diversity_one->is_publish = $request->is_publish;
        $about_diversity_one->save();
        return redirect('admin/about-diversity-one')->with('success', 'About Diversity First has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AboutDiversityOne  $aboutDiversityOne
     * @return \Illuminate\Http\Response
     */
    public function show(AboutDiversityOne $aboutDiversityOne)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AboutDiversityOne  $aboutDiversityOne
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $story = AboutStoryCat::pluck('story_cat', 'id')->all();
        $about_diversity_one = AboutDiversityOne::findOrFail($id);
        return view('admin.about-diversity-one.edit', compact('users', 'story', 'about_diversity_one'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AboutDiversityOne  $aboutDiversityOne
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $about_diversity_one = AboutDiversityOne::findOrFail($id);
        $about_diversity_one->setTranslation('title', 'en', $request->title);
        $about_diversity_one->setTranslation('title', 'ar', $request->title_ar);
        $about_diversity_one->setTranslation('description', 'en', $request->description);
        $about_diversity_one->setTranslation('description', 'ar', $request->description_ar);
        $about_diversity_one->story_id = $request->story_id;
        $about_diversity_one->is_publish = $request->is_publish;
        $about_diversity_one->update();
        return redirect('admin/about-diversity-one')->with('info', 'About Diversity First has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AboutDiversityOne  $aboutDiversityOne
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $about_diversity_one = AboutDiversityOne::findOrFail($request->diversityone_id);
        $about_diversity_one->delete();
        return redirect('admin/about-diversity-one')->with('warning', 'About Diversity First has been deleted successfully');
    }

    public function deleteAll(Request $request) {
        if (isset($request->delete_single)) {
            $about_diversity_one = AboutDiversityOne::findOrFail($request->diversityone_id);
            $about_diversity_one->delete();
            return redirect('admin/about-diversity-one')->with('warning', 'About Diversity First has been deleted successfully');
        }
        $about_diversity_ones = AboutDiversityOne::findOrFail($request->checkBoxArray);
        foreach ($about_diversity_ones as $about_diversity_one){
            $about_diversity_one->delete();
        }
        return redirect('admin/about-diversity-one')->with('warning', 'About Diversity First has been bulk deleted successfully');
    }
}
