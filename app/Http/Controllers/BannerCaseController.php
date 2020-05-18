<?php

namespace App\Http\Controllers;

use App\BannerCase;
use App\User;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Compound;

class BannerCaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $case_banners = BannerCase::all();
        return view('admin.banner-case.case_banner', compact('users', 'case_banners'));
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
        $case_banner = new BannerCase;
        $input = $request->all();
        if ($file = $request->file('banner')){
            $name = time().'-'.$file->getClientOriginalName();
            $file->storeAs('banner-media', $name);
            $input['banner'] = $name;
        }
        $case_banner->setTranslation('head_title', 'en', $request->head_title);
        $case_banner->setTranslation('head_title', 'ar', $request->head_title_ar);
        $case_banner->setTranslation('title', 'en', $request->title);
        $case_banner->setTranslation('title', 'ar', $request->title_ar);
        if ($request->file('banner')){
            $case_banner->banner = $name;
        } else {
            $case_banner->banner = null;
        }
        $case_banner->is_publish = $request->is_publish;
        $case_banner->save();
        return redirect('admin/case-banner')->with('success', 'Case Banner has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BannerCase  $bannerCase
     * @return \Illuminate\Http\Response
     */
    public function show(BannerCase $bannerCase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BannerCase  $bannerCase
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $case_banner = BannerCase::findOrFail($id);
        return view('admin.banner-case.edit', compact('users', 'case_banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BannerCase  $bannerCase
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
        $case_banner = BannerCase::findOrFail($id);
        $case_banner->setTranslation('head_title', 'en', $request->head_title);
        $case_banner->setTranslation('head_title', 'ar', $request->head_title_ar);
        $case_banner->setTranslation('title', 'en', $request->title);
        $case_banner->setTranslation('title', 'ar', $request->title_ar);
        $case_banner->is_publish = $request->is_publish;
        $case_banner->update($input);
        return redirect('admin/case-banner')->with('info', 'Case Banner has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BannerCase  $bannerCase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $case_banner = BannerCase::findOrFail($request->caseb_id);
        if (!empty($case_banner->banner)){
            if (file_exists(public_path('banner-media/'.$case_banner->banner))){
                unlink(public_path('banner-media/'.$case_banner->banner));
            }
        }
        $case_banner->delete();
        return redirect('admin/case-banner')->with('warning', 'Case Banner has been deleted successfully');
    }

    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $case_banner = BannerCase::findOrFail($request->caseb_id);
            if (!empty($case_banner->banner)){
                if (file_exists(public_path('banner-media/'.$case_banner->banner))){
                    unlink(public_path('banner-media/'.$case_banner->banner));
                }
            }
            $case_banner->delete();
            return redirect('admin/case-banner')->with('warning', 'Case Banner has been deleted successfully');
        }
        $case_banners = BannerCase::findOrFail($request->checkBoxArray);
        foreach ($case_banners as $case_banner){
            if (!empty($case_banner->banner)){
                if (file_exists(public_path('banner-media/'.$case_banner->banner))){
                    unlink(public_path('banner-media/'.$case_banner->banner));
                }
            }
            $case_banner->delete();
        }
        return redirect('admin/case-banner')->with('warning', 'Case Banner has been deleted successfully');
    }
}
