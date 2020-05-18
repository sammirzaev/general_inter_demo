<?php

namespace App\Http\Controllers;

use App\BannerSecurity;
use App\SecurityTitle;
use App\User;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Compound;

class BannerSecurityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $security_banners = BannerSecurity::all();
        return view('admin.banner-security.security_banner', compact('users', 'security_banners'));
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
        $security_banner = new BannerSecurity;
        $input = $request->all();
        if ($file = $request->file('banner')){
            $name = time().'-'.$file->getClientOriginalName();
            $file->storeAs('banner-media', $name);
            $input['banner'] = $name;
        }
        $security_banner->setTranslation('head_title', 'en', $request->head_title);
        $security_banner->setTranslation('head_title', 'ar', $request->head_title_ar);
        $security_banner->setTranslation('title', 'en', $request->title);
        $security_banner->setTranslation('title', 'ar', $request->title_ar);
        $security_banner->is_publish = $request->is_publish;
        if ($request->file('banner')){
            $security_banner->banner = $name;
        } else {
            $security_banner->banner = null;
        }
        $security_banner->save();
        return redirect('admin/security-banner')->with('success', 'Security Banner has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BannerSecurity  $bannerSecurity
     * @return \Illuminate\Http\Response
     */
    public function show(BannerSecurity $bannerSecurity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BannerSecurity  $bannerSecurity
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $security_banner = BannerSecurity::findOrFail($id);
        return view('admin.banner-security.edit', compact('users', 'security_banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BannerSecurity  $bannerSecurity
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
        $security_banner = BannerSecurity::findOrFail($id);
        $security_banner->setTranslation('head_title', 'en', $request->head_title);
        $security_banner->setTranslation('head_title', 'ar', $request->head_title_ar);
        $security_banner->setTranslation('title', 'en', $request->title);
        $security_banner->setTranslation('title', 'ar', $request->title_ar);
        $security_banner->is_publish = $request->is_publish;
        $security_banner->update($input);
        return redirect('admin/security-banner')->with('info', 'Security Banner has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BannerSecurity  $bannerSecurity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $security_banner = BannerSecurity::findOrFail($request->securityb_id);
        if (!empty($security_banner->banner)){
            if (file_exists(public_path('banner-media/'.$security_banner->banner))){
                unlink(public_path('banner-media/'.$security_banner->banner));
            }
        }
        $security_banner->delete();
        return redirect('admin/security-banner')->with('warning', 'Security Banner has been deleted successfully');
    }

    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $security_banner = BannerSecurity::findOrFail($request->securityb_id);
            if (!empty($security_banner->banner)){
                if (file_exists(public_path('banner-media/'.$security_banner->banner))){
                    unlink(public_path('banner-media/'.$security_banner->banner));
                }
            }
            $security_banner->delete();
            return redirect('admin/security-banner')->with('warning', 'Security Banner has been deleted successfully');
        }
        $security_banners = BannerSecurity::findOrFail($request->checkBoxArray);
        foreach ($security_banners as $security_banner){
            if (!empty($security_banner->banner)){
                if (file_exists(public_path('banner-media/'.$security_banner->banner))){
                    unlink(public_path('banner-media/'.$security_banner->banner));
                }
            }
            $security_banner->delete();
        }
        return redirect('admin/security-banner')->with('warning', 'Security Banner has been bulk deleted successfully');
    }
}
