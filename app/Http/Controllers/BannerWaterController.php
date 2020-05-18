<?php

namespace App\Http\Controllers;

use App\BannerWater;
use App\User;
use Illuminate\Http\Request;

class BannerWaterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $water_banners = BannerWater::all();
        return view('admin.banner-water.water_banner', compact('users', 'water_banners'));
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
        $water_banner = new BannerWater;
        $input = $request->all();
        if ($file = $request->file('banner')){
            $name = time().'-'.$file->getClientOriginalName();
            $file->storeAs('banner-media', $name);
            $input['banner'] = $name;
        }
        $water_banner->setTranslation('head_title', 'en', $request->head_title);
        $water_banner->setTranslation('head_title', 'ar', $request->head_title_ar);
        $water_banner->setTranslation('title', 'en', $request->title);
        $water_banner->setTranslation('title', 'ar', $request->title_ar);
        if ($request->file('banner')){
            $water_banner->banner = $name;
        }else {
            $water_banner->banner = null;
        }
        $water_banner->is_publish = $request->is_publish;
        $water_banner->save();
        return redirect('admin/water-banner')->with('success', 'Water Banner has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BannerWater  $bannerWater
     * @return \Illuminate\Http\Response
     */
    public function show(BannerWater $bannerWater)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BannerWater  $bannerWater
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $water_banner = BannerWater::findOrFail($id);
        return view('admin.banner-water.edit', compact('users', 'water_banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BannerWater  $bannerWater
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
        $water_banner = BannerWater::findOrFail($id);
        $water_banner->setTranslation('head_title', 'en', $request->head_title);
        $water_banner->setTranslation('head_title', 'ar', $request->head_title_ar);
        $water_banner->setTranslation('title', 'en', $request->title);
        $water_banner->setTranslation('title', 'ar', $request->title_ar);
        $water_banner->is_publish = $request->is_publish;
        $water_banner->update($input);
        return redirect('admin/water-banner')->with('info', 'Water Banner has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BannerWater  $bannerWater
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $water_banner = BannerWater::findOrFail($request->waterb_id);
        if (!empty($water_banner->banner)){
            if (file_exists(public_path('banner-media/'.$water_banner->banner))){
                unlink(public_path('banner-media/'.$water_banner->banner));
            }
        }
        $water_banner->delete();
        return redirect('admin/water-banner')->with('warning', 'Water Banner has been deleted successfully');
    }

    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $water_banner = BannerWater::findOrFail($request->water_id);
            if (!empty($water_banner->banner)){
                if (file_exists(public_path('banner-media/'.$water_banner->banner))){
                    unlink(public_path('banner-media/'.$water_banner->banner));
                }
            }
            $water_banner->delete();
            return redirect('admin/water-banner')->with('warning', 'Water Banner has been deleted successfully');
        }
        $water_banners = BannerWater::findOrFail($request->checkBoxArray);
        foreach ($water_banners as $water_banner){
            if (!empty($water_banner->banner)){
                if (file_exists(public_path('banner-media/'.$water_banner->banner))){
                    unlink(public_path('banner-media/'.$water_banner->banner));
                }
            }
            $water_banner->delete();
        }
        return redirect('admin/water-banner')->with('warning', 'Water Banner has been bulk deleted successfully');
    }
}
