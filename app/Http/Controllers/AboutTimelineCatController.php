<?php

namespace App\Http\Controllers;

use App\AboutStoryCat;
use App\AboutTimelineCat;
use App\User;
use Illuminate\Http\Request;

class AboutTimelineCatController extends Controller
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
        $about_timeline_cats = AboutTimelineCat::all();
        return view('admin.about-timeline-cat.about_timeline_cat', compact('users', 'story', 'about_timeline_cats'));
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
        $about_timeline_cat = new AboutTimelineCat;
        $about_timeline_cat->setTranslation('year', 'en', $request->year);
        $about_timeline_cat->setTranslation('year', 'ar', $request->year_ar);
        $about_timeline_cat->date = $request->date;
        $about_timeline_cat->story_id = $request->story_id;
        $about_timeline_cat->is_publish = $request->is_publish;
        $about_timeline_cat->save();
        return redirect('admin/about-timeline-cat')->with('success', 'Timeline Category has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AboutTimelineCat  $aboutTimelineCat
     * @return \Illuminate\Http\Response
     */
    public function show(AboutTimelineCat $aboutTimelineCat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AboutTimelineCat  $aboutTimelineCat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $story = AboutStoryCat::pluck('story_cat', 'id')->all();
        $about_timeline_cat = AboutTimelineCat::findOrFail($id);
        return view('admin.about-timeline-cat.edit', compact('users', 'story', 'about_timeline_cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AboutTimelineCat  $aboutTimelineCat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $about_timeline_cat = AboutTimelineCat::findOrFail($id);
        $about_timeline_cat->setTranslation('year', 'en', $request->year);
        $about_timeline_cat->setTranslation('year', 'ar', $request->year_ar);
        $about_timeline_cat->date = $request->date;
        $about_timeline_cat->story_id = $request->story_id;
        $about_timeline_cat->is_publish = $request->is_publish;
        $about_timeline_cat->update();
        return redirect('admin/about-timeline-cat')->with('info', 'Timeline Vategory has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AboutTimelineCat  $aboutTimelineCat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $about_timeline_cat = AboutTimelineCat::findOrFail($request->timecat_id);
        $about_timeline_cat->delete();
        return redirect('admin/about-timeline-cat')->with('warning', 'Timeline Category has been deleted successfully');
    }

    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $about_timeline_cat = AboutTimelineCat::findOrFail($request->timecat_id);
            $about_timeline_cat->delete();
            return redirect('admin/about-timeline-cat')->with('warning', 'Timeline Category has been deleted successfully');
        }
        $about_timeline_cats = AboutTimelineCat::findOrFail($request->checkBoxArray);
        foreach ($about_timeline_cats as $about_timeline_cat){
            $about_timeline_cat->delete();
        }
        return redirect('admin/about-timeline-cat')->with('warning', 'Timeline Category has been bulk deleted successfully');
    }
}
