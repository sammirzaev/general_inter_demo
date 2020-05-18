<?php

namespace App\Http\Controllers;

use App\BannerCareer;
use App\User;
use Illuminate\Http\Request;

class BannerCareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $career_banners = BannerCareer::all();
        return view('admin.banner-career.career_banner', compact('users', 'career_banners'));
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
        $career_banner = new BannerCareer;
        $input = $request->all();
        if ($file = $request->file('banner')){
            $name = time().'-'.$file->getClientOriginalName();
            $file->storeAs('banner-media', $name);
            $input['banner'] = $name;
        }
        $career_banner->setTranslation('head_title', 'en', $request->head_title);
        $career_banner->setTranslation('head_title', 'ar', $request->head_title_ar);
        $career_banner->setTranslation('title', 'en', $request->title);
        $career_banner->setTranslation('title', 'ar', $request->title_ar);
        if ($request->file('banner')){
            $career_banner->banner = $name;
        } else {
            $career_banner->banner = null;
        }
        $career_banner->is_publish = $request->is_publish;
        $career_banner->save();
        return redirect('admin/career-banner')->with('success', 'Career Banner has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BannerCareer  $bannerCareer
     * @return \Illuminate\Http\Response
     */
    public function show(BannerCareer $bannerCareer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BannerCareer  $bannerCareer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $career_banner = BannerCareer::findOrFail($id);
        return view('admin.banner-career.edit', compact('users', 'career_banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BannerCareer  $bannerCareer
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
        $career_banner = BannerCareer::findOrFail($id);
        $career_banner->setTranslation('head_title', 'en', $request->head_title);
        $career_banner->setTranslation('head_title', 'ar', $request->head_title_ar);
        $career_banner->setTranslation('title', 'en', $request->title);
        $career_banner->setTranslation('title', 'ar', $request->title_ar);
        $career_banner->is_publish = $request->is_publish;
        $career_banner->update($input);
        return redirect('admin/career-banner')->with('info', 'Career Banner has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BannerCareer  $bannerCareer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $career_banner = BannerCareer::findOrFail($request->careerban_id);
        if (!empty($career_banner->banner)){
            if (file_exists(public_path('banner-media/'.$career_banner->banner))){
                unlink(public_path('banner-media/'.$career_banner->banner));
            }
        }
        $career_banner->delete();
        return redirect('admin/career-banner')->with('warning', 'Career Banner has been deleted successfully');
    }
    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $career_banner = BannerCareer::findOrFail($request->careerban_id);
            if (!empty($career_banner->banner)){
                if (file_exists(public_path('banner-media/'.$career_banner->banner))){
                    unlink(public_path('banner-media/'.$career_banner->banner));
                }
            }
            $career_banner->delete();
            return redirect('admin/career-banner')->with('warning', 'Career Banner has been deleted successfully');
        }
        $career_banners = BannerCareer::findOrFail($request->checkBoxArray);
        foreach ($career_banners as $career_banner){
            if (!empty($career_banner->banner)){
                if (file_exists(public_path('banner-media/'.$career_banner->banner))){
                    unlink(public_path('banner-media/'.$career_banner->banner));
                }
            }
            $career_banner->delete();
        }
        return redirect('admin/career-banner')->with('warning', 'Career Banner has been bulk deleted successfully');
    }
}
