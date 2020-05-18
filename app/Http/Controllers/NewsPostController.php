<?php

namespace App\Http\Controllers;

use App\NewsCategory;
use App\NewsMedia;
use App\NewsPost;
use App\User;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsPostController extends Controller
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
        $news_media = NewsMedia::pluck('title', 'id')->all();
        $news_posts = NewsPost::all();
        return view('admin.news-post.news_post', compact('users', 'news_posts', 'news_media', 'news_cat'));
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
            $request->validate([
                'title'=>'required',
                'cat_id'=>'required',
                'media_id'=>'required'
            ]);
            $news_post = new NewsPost;
            $news_post->setTranslation('title', 'en', $request->title);
            $news_post->setTranslation('title', 'ar', $request->title_ar);
            $news_post->setTranslation('description', 'en', $request->description);
            $news_post->setTranslation('description', 'ar', $request->description_ar);
            $news_post->slug = SlugService::createSlug($news_post, 'slug', $request->title);
            $news_post->cat_id = $request->cat_id;
            $news_post->media_id = $request->media_id;
            $news_post->is_publish = $request->is_publish;
            $news_post->save();
            return redirect('admin/news-post')->with('success', 'News Post has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NewsPost  $newsPost
     * @return \Illuminate\Http\Response
     */
    public function show(NewsPost $newsPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NewsPost  $newsPost
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $news_cat = NewsCategory::pluck('title', 'id')->all();
        $news_media = NewsMedia::pluck('title', 'id')->all();
        $news_post = NewsPost::findOrFail($id);
        return view('admin.news-post.edit', compact('users', 'news_post', 'news_media', 'news_cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NewsPost  $newsPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $news_post = NewsPost::findOrFail($id);
        $news_post->setTranslation('title', 'en', $request->title);
        $news_post->setTranslation('title', 'ar', $request->title_ar);
        $news_post->setTranslation('description', 'en', $request->description);
        $news_post->setTranslation('description', 'ar', $request->description_ar);
        $news_post->slug = SlugService::createSlug($news_post, 'slug', $request->title);
        $news_post->cat_id = $request->cat_id;
        $news_post->media_id = $request->media_id;
        $news_post->is_publish = $request->is_publish;
        $news_post->update();
        return redirect('admin/news-post')->with('info', 'News Post has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NewsPost  $newsPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $news_post = NewsPost::findOrFail($request->newspost_id);
        $news_post->delete();
        return redirect('admin/news-post')->with('warning', 'News Post has been deleted successfully');
    }
    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $news_post = NewsPost::findOrFail($request->newspost_id);
            $news_post->delete();
            return redirect('admin/news-post')->with('warning', 'News Post has been deleted successfully');
        }
        $news_posts = NewsPost::findOrFail($request->checkBoxArray);
        foreach ($news_posts as $news_post){
            $news_post->delete();
        }
        return redirect('admin/news-post')->with('warning', 'News Post has been bulk deleted successfully');
    }
}
