<?php

namespace App\Http\Controllers;

use App\HomeBanner;
use App\User;
use Illuminate\Http\Request;

class HomeBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $home_banners = HomeBanner::all();
        return view('admin.home-banner.home_banner', compact('users', 'home_banners'));
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
        $home_banner = new HomeBanner;
        $input = $request->all();
        if ($file = $request->file('banner')) {
           $name = time().'-'.$file->getClientOriginalName();
           $file->storeAs('banner-media', $name);
           $input['banner'] = $name;
        }
        $home_banner->setTranslation('title', 'en', $request->title)
                    ->setTranslation('title', 'ar', $request->title_ar)
                    ->setTranslation('head_title', 'en', $request->head_title)
                    ->setTranslation('head_title', 'ar', $request->head_title_ar)
                    ->setTranslation('quote', 'en', $request->quote)
                    ->setTranslation('quote', 'ar', $request->quote_ar);
        if ($request->file('banner')){
            $home_banner->banner = $name;
        } else {
            $home_banner->banner = null;
        }
        $home_banner->quote_link = $request->quote_link;
        $home_banner->is_publish = $request->is_publish;
        $home_banner->save();
        return redirect('admin/home-banner')->with('success', 'Home Banner & Content has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HomeBanner  $homeBanner
     * @return \Illuminate\Http\Response
     */
    public function show(HomeBanner $homeBanner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HomeBanner  $homeBanner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $home_banner = HomeBanner::findOrFail($id);
        return view('admin.home-banner.edit', compact('home_banner', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HomeBanner  $homeBanner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        if ($file = $request->file('banner')) {
            $name = time().'-'.$file->getClientOriginalName();
            $file->storeAs('banner-media', $name);
            $input['banner'] = $name;
        }
        $home_banner = HomeBanner::findOrFail($id);
        $home_banner->setTranslation('title', 'en', $request->title)
            ->setTranslation('title', 'ar', $request->title_ar)
            ->setTranslation('head_title', 'en', $request->head_title)
            ->setTranslation('head_title', 'ar', $request->head_title_ar)
            ->setTranslation('quote', 'en', $request->quote)
            ->setTranslation('quote', 'ar', $request->quote_ar);
        $home_banner->quote_link = $request->quote_link;
        $home_banner->is_publish = $request->is_publish;
        $home_banner->update($input);
        return redirect('admin/home-banner')->with('info', 'Home Banner has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HomeBanner  $homeBanner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $home_banner = HomeBanner::findOrFail($request->banner_id);
        if(!empty($home_banner->banner)) {
            if (file_exists(public_path('banner-media/'. $home_banner->banner))) {
                unlink(public_path('banner-media/'. $home_banner->banner));
            }
        }
        $home_banner->delete();
        return redirect('admin/home-banner')->with('warning', 'Home Banner has been deleted successfully');
    }

    public function deleteAll(Request $request)
    {
        if (isset($request->delete_single)){
            $home_banner = HomeBanner::findOrFail($request->banner_id);
            if(!empty($home_banner->banner)) {
                if (file_exists(public_path('banner-media/'. $home_banner->banner))) {
                    unlink(public_path('banner-media/'. $home_banner->banner));
                }
            }
            $home_banner->delete();
            return redirect('admin/home-banner')->with('warning', 'Home Banner has been deleted successfully');
        }
        $home_banners = HomeBanner::findOrFail($request->checkBoxArray);
        foreach ($home_banners as $home_banner)
        {
            if(!empty($home_banner->banner)) {
                if (file_exists(public_path('banner-media/'. $home_banner->banner))) {
                    unlink(public_path('banner-media/'. $home_banner->banner));
                }
            }
            $home_banner->delete();
        }
        return redirect('admin/home-banner')->with('warning', 'Home Banner has been bulk deleted successfully');
    }
}
