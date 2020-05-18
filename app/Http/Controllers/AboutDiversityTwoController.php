<?php

namespace App\Http\Controllers;

use App\AboutDiversityTwo;
use App\AboutStoryCat;
use App\User;
use Illuminate\Http\Request;

class AboutDiversityTwoController extends Controller
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
        $about_diversity_twos = AboutDiversityTwo::all();
        return view('admin.about-diversity-two.about_diversity_two', compact('users', 'story', 'about_diversity_twos'));
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
        $about_diversity_two = new AboutDiversityTwo;
        $about_diversity_two->setTranslation('title', 'en', $request->title);
        $about_diversity_two->setTranslation('title', 'ar', $request->title_ar);
        $about_diversity_two->setTranslation('description', 'en', $request->description);
        $about_diversity_two->setTranslation('description', 'ar', $request->description_ar);
        $about_diversity_two->story_id = $request->story_id;
        $about_diversity_two->is_publish = $request->is_publish;
        $about_diversity_two->save();
        return redirect('admin/about-diversity-two')->with('success', 'About Diversity Second has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AboutDiversityTwo  $aboutDiversityTwo
     * @return \Illuminate\Http\Response
     */
    public function show(AboutDiversityTwo $aboutDiversityTwo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AboutDiversityTwo  $aboutDiversityTwo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $story = AboutStoryCat::pluck('story_cat', 'id')->all();
        $about_diversity_two = AboutDiversityTwo::findOrFail($id);
        return view('admin.about-diversity-two.edit', compact('users', 'story', 'about_diversity_two'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AboutDiversityTwo  $aboutDiversityTwo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $about_diversity_two = AboutDiversityTwo::findOrFail($id);
        $about_diversity_two->setTranslation('title', 'en', $request->title);
        $about_diversity_two->setTranslation('title', 'ar', $request->title_ar);
        $about_diversity_two->setTranslation('description', 'en', $request->description);
        $about_diversity_two->setTranslation('description', 'ar', $request->description_ar);
        $about_diversity_two->story_id = $request->story_id;
        $about_diversity_two->is_publish = $request->is_publish;
        $about_diversity_two->update();
        return redirect('admin/about-diversity-two')->with('info', 'About Diversity Second has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AboutDiversityTwo  $aboutDiversityTwo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $about_diversity_two = AboutDiversityTwo::findOrFail($request->diversitytwo_id);
        $about_diversity_two->delete();
        return redirect('admin/about-diversity-two')->with('warning', 'About Diversity Second has been deleted successfully');
    }

    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $about_diversity_two = AboutDiversityTwo::findOrFail($request->diversitytwo_id);
            $about_diversity_two->delete();
            return redirect('admin/about-diversity-two')->with('warning', 'About Diversity Second has been deleted successfully');
        }
        $about_diversity_twos = AboutDiversityTwo::findOrFail($request->checkBoxArray);
        foreach ($about_diversity_twos as $about_diversity_two) {
            $about_diversity_two->delete();
        }
        return redirect('admin/about-diversity-two')->with('warning', 'About Diversity Second has been bulk deleted successfully');
    }
}
