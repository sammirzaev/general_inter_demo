<?php

namespace App\Http\Controllers;

use App\AboutStoryCat;
use App\AboutTimeline;
use App\AboutTimelineCat;
use App\User;
use Illuminate\Http\Request;

class AboutTimelineController extends Controller
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
        $timeline = AboutTimelineCat::pluck('year', 'id')->all();
        $date = AboutTimelineCat::pluck('date', 'id')->all();
        $about_timelines = AboutTimeline::all();
        return view('admin.about-timeline.about_timeline', compact('users', 'story', 'timeline', 'about_timelines', 'date'));
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
        $about_timeline = new AboutTimeline;
        $input = $request->all();
        if ($file = $request->file('media')){
            $name = time().'-'.$file->getClientOriginalName();
            $file->storeAs('timeline-media', $name);
            $input['media'] = $name;
        }
        $about_timeline->setTranslation('title', 'en', $request->title);
        $about_timeline->setTranslation('title', 'ar', $request->title_ar);
        $about_timeline->setTranslation('description', 'en', $request->description);
        $about_timeline->setTranslation('description', 'ar', $request->description_ar);
        if ($request->file('media')){
            $about_timeline->media = $name;
        } else {
            $about_timeline->media = null;
        }
        $about_timeline->story_id = $request->story_id;
        $about_timeline->year_id = $request->year_id;
        $about_timeline->date_id = $request->date_id;
        $about_timeline->is_publish = $request->is_publish;
        $about_timeline->save();
        return redirect('admin/about-timeline')->with('success', 'About Timeline has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AboutTimeline  $aboutTimeline
     * @return \Illuminate\Http\Response
     */
    public function show(AboutTimeline $aboutTimeline)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AboutTimeline  $aboutTimeline
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $story = AboutStoryCat::pluck('story_cat', 'id')->all();
        $timeline = AboutTimelineCat::pluck('year', 'id')->all();
        $date = AboutTimelineCat::pluck('date', 'id')->all();
        $about_timeline = AboutTimeline::findOrFail($id);
        return view('admin.about-timeline.edit', compact('users', 'story', 'timeline', 'about_timeline', 'date'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AboutTimeline  $aboutTimeline
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        if ($file = $request->file('media')){
            $name = time().'-'.$file->getClientOriginalName();
            $file->storeAs('timeline-media', $name);
            $input['media'] = $name;
        }
        $about_timeline = AboutTimeline::findOrfail($id);
        $about_timeline->setTranslation('title', 'en', $request->title);
        $about_timeline->setTranslation('title', 'ar', $request->title_ar);
        $about_timeline->setTranslation('description', 'en', $request->description);
        $about_timeline->setTranslation('description', 'ar', $request->description_ar);
        $about_timeline->story_id = $request->story_id;
        $about_timeline->year_id = $request->year_id;
        $about_timeline->date_id = $request->date_id;
        $about_timeline->is_publish = $request->is_publish;
        $about_timeline->update($input);
        return redirect('admin/about-timeline')->with('info', 'About Timeline has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AboutTimeline  $aboutTimeline
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $about_timeline = AboutTimeline::findOrFail($request->timeline_id);
        if (!empty($about_timeline->media)){
            if (file_exists(public_path('timeline-media/'.$about_timeline->media))){
                unlink(public_path('timeline-media/'.$about_timeline->media));
            }
        }
        $about_timeline->delete();
        return redirect('admin/about-timeline')->with('warning', 'Timeline has been deleted successfully');
    }

    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $about_timeline = AboutTimeline::findOrFail($request->timeline_id);
            if (!empty($about_timeline->media)){
                if (file_exists(public_path('timeline-media/'.$about_timeline->media))){
                    unlink(public_path('timeline-media/'.$about_timeline->media));
                }
            }
            $about_timeline->delete();
            return redirect('admin/about-timeline')->with('warning', 'Timeline has been deleted successfully');
        }
        $about_timelines = AboutTimeline::findOrFail($request->checkBoxArray);
        foreach ($about_timelines as $about_timeline){
            if (!empty($about_timeline->media)){
                if (file_exists(public_path('timeline-media/'.$about_timeline->media))){
                    unlink(public_path('timeline-media/'.$about_timeline->media));
                }
            }
            $about_timeline->delete();
        }
        return redirect('admin/about-timeline')->with('warning', 'Timeline has been bulk deleted successfully');
    }
}
