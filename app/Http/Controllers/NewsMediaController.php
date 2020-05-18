<?php

namespace App\Http\Controllers;

use App\NewsCategory;
use App\NewsMedia;
use App\NewsPost;
use App\User;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Compound;

class NewsMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $users = User::all();
       $news_cat = NewsCategory::pluck('title', 'id')->all();
       $post = NewsPost::pluck('title', 'id')->all();
       $news_medias = NewsMedia::all();
       return view('admin.news-media.news_media', compact('users', 'news_cat', 'news_medias', 'post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news_media = new NewsMedia;
        $input = $request->all();
        if ($file = $request->file('media')){
            $name = time().'-'.$file->getClientOriginalName();
            $file->storeAs('posts-media', $name);
            $input['media'] = $name;
        }
        $news_media->setTranslation('title', 'en', $request->title);
        $news_media->setTranslation('title', 'ar', $request->title_ar);
        if ($request->file('media')){
            $news_media->media = $name;
        } else {
            $news_media->media = null;
        }
        $news_media->cat_id = $request->cat_id;
        $news_media->post_id = $request->post_id;
        $news_media->is_publish = $request->is_publish;
        $news_media->save();
        return redirect('admin/news-media')->with('success', 'News Media has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NewsMedia  $newsMedia
     * @return \Illuminate\Http\Response
     */
    public function show(NewsMedia $newsMedia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NewsMedia  $newsMedia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $news_media = NewsMedia::findOrFail($id);
        $post = NewsPost::pluck('title', 'id')->all();
        $news_cat = NewsCategory::pluck('title', 'id')->all();
        return view('admin.news-media.edit', compact('users', 'news_media', 'news_cat', 'post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NewsMedia  $newsMedia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        if ($file = $request->file('media')){
            $name = time().'-'.$file->getClientOriginalName();
            $file->storeAs('posts-media', $name);
            $input['media'] = $name;
        }
        $news_media = NewsMedia::findOrFail($id);
        $news_media->setTranslation('title', 'en', $request->title);
        $news_media->setTranslation('title', 'ar', $request->title_ar);
        $news_media->is_publish = $request->is_publish;
        $news_media->cat_id = $request->cat_id;
        $news_media->post_id = $request->post_id;
        $news_media->update($input);
        return redirect('admin/news-media')->with('info', 'News Media has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NewsMedia  $newsMedia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $news_media = NewsMedia::findOrFail($request->newsmedia_id);
        if (!empty($news_media->media)){
            if (file_exists(public_path('posts-media/'.$news_media->media))){
                unlink(public_path('posts-media/'.$news_media->media));
            }
        }
        $news_media->delete();
        return redirect('admin/news-media')->with('warning', 'News Media has been deleted successfully');
    }

    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $news_media = NewsMedia::findOrFail($request->newsmedia_id);
            if (!empty($news_media->media)){
                if (file_exists(public_path('posts-media/'.$news_media->media))){
                    unlink(public_path('posts-media/'.$news_media->media));
                }
            }
            $news_media->delete();
            return redirect('admin/news-media')->with('warning', 'News Media has been deleted successfully');
        }
        $news_medias = NewsMedia::findOrFail($request->checkBoxArray);
        foreach ($news_medias as $news_media){
            if (!empty($news_media->media)){
                if (file_exists(public_path('posts-media/'.$news_media->media))){
                    unlink(public_path('posts-media/'.$news_media->media));
                }
            }
            $news_media->delete();
        }
        return redirect('admin/news-media')->with('warning', 'News Media has been bulk deleted successfully');
    }
}
