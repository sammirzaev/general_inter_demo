<?php

namespace App\Http\Controllers;

use App\BannerNews;
use App\User;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Compound;

class BannerNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $news_banners = BannerNews::all();
        return view('admin.banner-news.news_banner', compact('users', 'news_banners'));
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
        $news_banner = new BannerNews;
        $input = $request->all();
        if ($file = $request->file('banner')){
            $name = time().'-'.$file->getClientOriginalName();
            $file->storeAs('banner-media', $name);
            $input['banner'] = $name;
        }
        $news_banner->setTranslation('head_title', 'en', $request->head_title);
        $news_banner->setTranslation('head_title', 'ar', $request->head_title_ar);
        $news_banner->setTranslation('title', 'en', $request->title);
        $news_banner->setTranslation('title', 'en', $request->title_ar);
        $news_banner->is_publish = $request->is_publish;
        if ($request->file('banner')){
            $news_banner->banner = $name;
        } else {
            $news_banner->banner = null;
        }
        $news_banner->save();
        return redirect('admin/news-banner')->with('success', 'News Banner has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BannerNews  $bannerNews
     * @return \Illuminate\Http\Response
     */
    public function show(BannerNews $bannerNews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BannerNews  $bannerNews
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $news_banner = BannerNews::findOrFail($id);
        return view('admin.banner-news.edit', compact('users', 'news_banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BannerNews  $bannerNews
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
        $news_banner = BannerNews::findOrFail($id);
        $news_banner->setTranslation('head_title', 'en', $request->head_title);
        $news_banner->setTranslation('head_title', 'ar', $request->head_title_ar);
        $news_banner->setTranslation('title', 'en', $request->title);
        $news_banner->setTranslation('title', 'ar', $request->title_ar);
        $news_banner->is_publish = $request->is_publish;
        $news_banner->update($input);
        return redirect('admin/news-banner')->with('info', 'News Banner has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BannerNews  $bannerNews
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $news_banner = BannerNews::findOrFail($request->newsban_id);
        if (!empty($news_banner->banner)){
            if (file_exists(public_path('banner-media/'.$news_banner->banner))){
                unlink(public_path('banner-media/'.$news_banner->banner));
            }
        }
        $news_banner->delete();
        return redirect('admin/news/banner')->with('warning', 'News Banner has been deleted successfully');
    }

    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $news_banner = BannerNews::findOrFail($request->newsban_id);
            if (!empty($news_banner->banner)){
                if (file_exists(public_path('banner-media/'.$news_banner->banner))){
                    unlink(public_path('banner-media/'.$news_banner->banner));
                }
            }
            $news_banner->delete();
            return redirect('admin/news/banner')->with('warning', 'News Banner has been deleted successfully');
        }
        $news_banners = BannerNews::findOrFail($request->checkBoxArray);
        foreach ($news_banners as $news_banner){
            if (!empty($news_banner->banner)){
                if (file_exists(public_path('banner-media/'.$news_banner->banner))){
                    unlink(public_path('banner-media/'.$news_banner->banner));
                }
            }
            $news_banner->delete();
        }
        return redirect('admin/news-banner')->with('warning', 'News Banner has been bulk deleted successfully');
    }
}
