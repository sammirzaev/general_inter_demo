<?php

namespace App\Http\Controllers;

use App\NewsTitle;
use App\User;
use Illuminate\Http\Request;

class NewsTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $news_titles = NewsTitle::all();
        return view('admin.news-title.news_title', compact('news_titles', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $news_titles = NewsTitle::all();
        return view('admin.news-title.news_title', compact('news_titles', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news_title = new NewsTitle;
        $news_title->setTranslation('title', 'en', $request->title);
        $news_title->setTranslation('title', 'ar', $request->title_ar);
        $news_title->is_publish = $request->is_publish;
        $news_title->save();
        return redirect('admin/news-title')->with('success', 'News & Event Title has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NewsTitle  $newsTitle
     * @return \Illuminate\Http\Response
     */
    public function show(NewsTitle $newsTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NewsTitle  $newsTitle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news_title = NewsTitle::findOrFail($id);
        $users = User::all();
        return view('admin.news-title.edit', compact('news_title', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NewsTitle  $newsTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $news_title = NewsTitle::findOrFail($id);
        $news_title->setTranslation('title', 'en', $request->title);
        $news_title->setTranslation('title', 'ar', $request->title_ar);
        $news_title->is_publish = $request->is_publish;
        $news_title->update();
        return redirect('admin.news-title')->with('info', 'News & Event Title has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NewsTitle  $newsTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $news_title = NewsTitle::findOrfail($request->news_id);
        $news_title->delete();
        return redirect('admin/news-title')->with('warning', 'News & Event Title has been deleted successfully');
    }
}
