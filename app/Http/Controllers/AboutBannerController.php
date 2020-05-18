<?php

namespace App\Http\Controllers;

use App\AboutBanner;
use App\User;
use Illuminate\Http\Request;

class AboutBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $about_banners = AboutBanner::all();
        return view('admin.about-banner.about_banner', compact('users', 'about_banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $about_banners = AboutBanner::all();
        return view('admin.about-banner.about_banner', compact( 'about_banners'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $about_banner = new AboutBanner;
        $input = $request->all();
        if ($file = $request->file('banner')) {
            $name = $file->getClientOriginalName();
            $file->storeAs('about-media', $name);
            $input['banner'] = $name;
        }
        $about_banner->setTranslation('head_title', 'en', $request->head_title);
        $about_banner->setTranslation('head_title', 'ar', $request->head_title_ar);
        $about_banner->setTranslation('title', 'en', $request->title);
        $about_banner->setTranslation('title', 'ar', $request->title_ar);
        if ($request->file('banner')){
            $about_banner->banner = $name;
        } else {
            $about_banner->banner = null;
        }
        $about_banner->is_publish = $request->is_publish;
        $about_banner->save();
        return redirect('admin/about-banner')->with('success', 'About Banner has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AboutBanner  $aboutBanner
     * @return \Illuminate\Http\Response
     */
    public function show(AboutBanner $aboutBanner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AboutBanner  $aboutBanner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $about_banner = AboutBanner::findOrFail($id);
        return view('admin.about-banner.edit', compact('users', 'about_banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AboutBanner  $aboutBanner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        if ($file = $request->file('banner')) {
            $name = $file->getClientOriginalName();
            $file->storeAs('about-media', $name);
            $input['banner'] = $name;
        }
        $about_banner = AboutBanner::findOrFail($id);
        $about_banner->setTranslation('head_title', 'en', $request->head_title);
        $about_banner->setTranslation('head_title', 'ar', $request->head_title_ar);
        $about_banner->setTranslation('title', 'en', $request->title);
        $about_banner->setTranslation('title', 'ar', $request->title_ar);
        $about_banner->is_publish = $request->is_publish;
        $about_banner->update($input);
        return redirect('admin/about-banner')->with('info', 'About Banner has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AboutBanner  $aboutBanner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $about_banner = AboutBanner::findOrFail($request->aboutbanner_id);
        if(!empty($about_banner->banner)) {
            if (file_exists(public_path('about-media/'. $about_banner->banner))) {
                unlink(public_path('about-media/'. $about_banner->banner));
            }
        }
        $about_banner->delete();
        return redirect('admin/about-banner')->with('warning', 'About Banner has been deleted successfully');
    }

    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $about_banner = AboutBanner::findOrFail($request->aboutbanner_id);
            if(!empty($about_banner->banner)) {
                if (file_exists(storage_path('/about-media/'. $about_banner->banner))) {
                    unlink(storage_path('/about-media/'. $about_banner->banner));
                }
            }
            $about_banner->delete();
            return redirect('admin/about-banner')->with('warning', 'About Banner has been deleted successfully');
        }
        $about_banners = AboutBanner::findOrFail($request->checkBoxArray);
        foreach ($about_banners as $about_banner) {
            if(!empty($about_banner->banner)) {
                if (file_exists(storage_path('app/public/about-media/'. $about_banner->banner))) {
                    unlink(storage_path('app/public/about-media/'. $about_banner->banner));
                }
            }
            $about_banner->delete();
        }
        return redirect('admin/about-banner')->with('warning', 'About Banner has been bulk deleted successfully');
    }
}
