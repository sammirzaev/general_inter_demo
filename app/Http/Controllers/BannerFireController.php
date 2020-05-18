<?php

namespace App\Http\Controllers;

use App\BannerFire;
use App\User;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Compound;

class BannerFireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $fire_banners = BannerFire::all();
        return view('admin.banner-fire.fire_banner', compact('users', 'fire_banners'));
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
        $fire_banner = new BannerFire;
        $input = $request->all();
        if ($file = $request->file('banner')){
            $name = time().'-'.$file->getClientOriginalName();
            $file->storeAs('banner-media', $name);
            $input['banner'] = $name;
        }
        $fire_banner->setTranslation('head_title', 'en', $request->head_title);
        $fire_banner->setTranslation('head_title', 'ar', $request->head_title_ar);
        $fire_banner->setTranslation('title', 'en', $request->title);
        $fire_banner->setTranslation('title', 'ar', $request->title_ar);
        if ($request->file('banner')){
            $fire_banner->banner = $name;
        } else {
            $fire_banner->banner = null;
        }
        $fire_banner->is_publish = $request->is_publish;
        $fire_banner->save();
        return redirect('admin/fire-banner')->with('success', 'Fire Banner has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BannerFire  $bannerFire
     * @return \Illuminate\Http\Response
     */
    public function show(BannerFire $bannerFire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BannerFire  $bannerFire
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $fire_banner = BannerFire::findOrFail($id);
        return view('admin.banner-fire.edit', compact('users', 'fire_banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BannerFire  $bannerFire
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
        $fire_banner = BannerFire::findOrFail($id);
        $fire_banner->setTranslation('head_title', 'en', $request->head_title);
        $fire_banner->setTranslation('head_title', 'ar', $request->head_title_ar);
        $fire_banner->setTranslation('title', 'en', $request->title);
        $fire_banner->setTranslation('title', 'ar', $request->title_ar);
        $fire_banner->is_publish = $request->is_publish;
        $fire_banner->update($input);
        return redirect('admin/fire-banner')->with('info', 'Fire Banner has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BannerFire  $bannerFire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $fire_banner = BannerFire::findOrFail($request->fireb_id);
        if(!empty($fire_banner->banner)) {
            if (file_exists(public_path('banner-media/'. $fire_banner->banner))) {
                unlink(public_path('banner-media/'. $fire_banner->banner));
            }
        }
        $fire_banner->delete();
        return redirect('admin/fire-banner')->with('warning', 'Fire Banner has been deleted successfully');
    }

    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $fire_banner = BannerFire::findOrFail($request->fireb_id);
            if(!empty($fire_banner->banner)) {
                if (file_exists(public_path('banner-media/'. $fire_banner->banner))) {
                    unlink(public_path('banner-media/'. $fire_banner->banner));
                }
            }
            $fire_banner->delete();
            return redirect('admin/fire-banner')->with('warning', 'Fire Banner has been deleted successfully');
        }
        $fire_banners = BannerFire::findOrFail($request->checkBoxArray);
        foreach ($fire_banners as $fire_banner){
            if(!empty($fire_banner->banner)) {
                if (file_exists(public_path('banner-media/'. $fire_banner->banner))) {
                    unlink(public_path('banner-media/'. $fire_banner->banner));
                }
            }
            $fire_banner->delete();
        }
        return redirect('admin/fire-banner')->with('warning', 'Fire Banner has been bulk deleted successfully');
    }
}
