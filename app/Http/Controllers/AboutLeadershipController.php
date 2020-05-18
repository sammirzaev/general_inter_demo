<?php

namespace App\Http\Controllers;

use App\AboutLeadership;
use App\AboutStoryCat;
use App\User;
use Illuminate\Http\Request;

class AboutLeadershipController extends Controller
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
        $about_leaderships = AboutLeadership::all();
        return view('admin.about-leadership.about_leadership', compact('users', 'story', 'about_leaderships'));
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
        $about_leadership = new AboutLeadership;
        $about_leadership->setTranslation('title', 'en', $request->title);
        $about_leadership->setTranslation('title', 'ar', $request->title_ar);
        $about_leadership->setTranslation('description', 'en', $request->description);
        $about_leadership->setTranslation('description', 'ar', $request->description_ar);
        $about_leadership->story_id = $request->story_id;
        $about_leadership->is_publish = $request->is_publish;
        $about_leadership->save();
        return redirect('admin/about-leadership')->with('success', 'About Leadership has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AboutLeadership  $aboutLeadership
     * @return \Illuminate\Http\Response
     */
    public function show(AboutLeadership $aboutLeadership)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AboutLeadership  $aboutLeadership
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $story = AboutStoryCat::pluck('story_cat', 'id')->all();
        $about_leadership = AboutLeadership::findOrFail($id);
        return view('admin.about-leadership.edit', compact('users', 'story', 'about_leadership'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AboutLeadership  $aboutLeadership
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $about_leadership = AboutLeadership::findOrFail($id);
        $about_leadership->setTranslation('title', 'en', $request->title);
        $about_leadership->setTranslation('title', 'ar', $request->title_ar);
        $about_leadership->setTranslation('description', 'en', $request->description);
        $about_leadership->setTranslation('description', 'ar', $request->description_ar);
        $about_leadership->story_id = $request->story_id;
        $about_leadership->is_publish = $request->is_publish;
        $about_leadership->update();
        return redirect('admin/about-leadership')->with('info', 'About Leadership has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AboutLeadership  $aboutLeadership
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $about_leadership = AboutLeadership::findOrFail($request->leader_id);
        $about_leadership->delete();
        return redirect('admin/about-leadership')->with('warning', 'About Leadership has been deleted successfully');
    }

    public function deleteAll(Request $request){
        if (isset($request->delete_single)) {
            $about_leadership = AboutLeadership::findOrFail($request->leader_id);
            $about_leadership->delete();
            return redirect('admin/about-leadership')->with('warning', 'About Leadership has been deleted successfully');
        }
        $about_leaderships = AboutLeadership::findOrFail($request->checkBoxArray);
        foreach ($about_leaderships as $about_leadership){
            $about_leadership->delete();
        }
        return redirect('admin/about-leadership')->with('warning', 'About Leadership has been bulk deleted successfully');
    }
}
