<?php

namespace App\Http\Controllers;

use App\AboutLeadershipMedia;
use App\AboutStoryCat;
use App\User;
use Illuminate\Http\Request;

class AboutLeadershipMediaController extends Controller
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
        $about_leadership_medias = AboutLeadershipMedia::all();
        return view('admin.about-leadership-media.about_leadership_media', compact('users', 'story', 'about_leadership_medias'));
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
        $about_leadership_media = new AboutLeadershipMedia;
        $input = $request->all();
        if ($file = $request->file('media')){
            $name = time().'-'.$file->getClientOriginalName();
            $file->storeAs('leadership-media', $name);
            $input['media'] = $name;
        }
        $about_leadership_media->setTranslation('title', 'en', $request->title);
        $about_leadership_media->setTranslation('title', 'ar', $request->title_ar);
        if ($request->file('media')){
            $about_leadership_media->media = $name;
        } else {
            $about_leadership_media->media = null;
        }
        $about_leadership_media->is_publish = $request->is_publish;
        $about_leadership_media->story_id = $request->story_id;
        $about_leadership_media->save();
        return redirect('admin/about-leadership-media')->with('success', 'About Leadership Media has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AboutLeadershipMedia  $aboutLeadershipMedia
     * @return \Illuminate\Http\Response
     */
    public function show(AboutLeadershipMedia $aboutLeadershipMedia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AboutLeadershipMedia  $aboutLeadershipMedia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $story = AboutStoryCat::pluck('story_cat', 'id')->all();
        $about_leadership_media = AboutLeadershipMedia::findOrFail($id);
        return view('admin.about-leadership-media.edit', compact('users', 'story', 'about_leadership_media'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AboutLeadershipMedia  $aboutLeadershipMedia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        if ($file = $request->file('media')) {
            $name = time().'-'.$file->getClientOriginalName();
            $file->storeAs('leadership-media', $name);
            $input['media'] = $name;
        }
        $about_leadership_media = AboutLeadershipMedia::findOrFail($id);
        $about_leadership_media->setTranslation('title', 'en', $request->title);
        $about_leadership_media->setTranslation('title', 'ar', $request->title_ar);
        $about_leadership_media->is_publish = $request->is_publish;
        $about_leadership_media->story_id = $request->story_id;
        $about_leadership_media->update($input);
        return redirect('admin/about-leadership-media')->with('info', 'About Leadership Media has been updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AboutLeadershipMedia  $aboutLeadershipMedia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $about_leadership_media = AboutLeadershipMedia::findOrFail($request->leadmedia_id);
        if(!empty($about_leadership_media->media)) {
            if (file_exists(public_path('leadership-media/'. $about_leadership_media->media))) {
                unlink(public_path('leadership-media/'. $about_leadership_media->media));
            }
        }
        $about_leadership_media->delete();
        return redirect('admin/about-leadership-media')->with('warning', 'About Leadership Media has been deleted successfully');
    }

    public function deleteAll(Request $request){
        if (isset($request->delete_single)) {
            $about_leadership_media = AboutLeadershipMedia::findOrFail($request->leadmedia_id);
            if(!empty($about_leadership_media->media)) {
                if (file_exists(public_path('leadership-media/'. $about_leadership_media->media))) {
                    unlink(public_path('leadership-media/'. $about_leadership_media->media));
                }
            }
            $about_leadership_media->delete();
            return redirect('admin/about-leadership-media')->with('warning', 'About Leadership Media has been deleted successfully');
        }
        $about_leadership_medias = AboutLeadershipMedia::findOrFail($request->checkBoxArray);
        foreach ($about_leadership_medias as $about_leadership_media) {
            if(!empty($about_leadership_media->media)) {
                if (file_exists(public_path('leadership-media/'. $about_leadership_media->media))) {
                    unlink(public_path('leadership-media/'. $about_leadership_media->media));
                }
            }
            $about_leadership_media->delete();
        }
        return redirect('admin/about-leadership-media')->with('warning', 'About Leadership Media has been bulk deleted successfully');
    }
}
