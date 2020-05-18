<?php

namespace App\Http\Controllers;

use App\NewsCategory;
use App\User;
use Illuminate\Http\Request;

class NewsCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $news_cats = NewsCategory::all();
        return view('admin.news-cat.news_cat', compact('users', 'news_cats'));
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
        $news_cat = new NewsCategory;
        $news_cat->setTranslation('title', 'en', $request->title);
        $news_cat->setTranslation('title', 'ar', $request->title_ar);
        $news_cat->is_publish = $request->is_publish;
        $news_cat->save();
        return redirect('admin/news-category')->with('success', 'News Category has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NewsCategory  $newsCategory
     * @return \Illuminate\Http\Response
     */
    public function show(NewsCategory $newsCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NewsCategory  $newsCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $news_cat = NewsCategory::findOrFail($id);
        return view('admin.news-cat.edit', compact('users', 'news_cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NewsCategory  $newsCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $news_cat = NewsCategory::findOrFail($id);
        $news_cat->setTranslation('title', 'en', $request->title);
        $news_cat->setTranslation('title', 'ar', $request->title_ar);
        $news_cat->is_publish = $request->is_publish;
        $news_cat->update();
        return redirect('admin/news-category')->with('info', 'News Category has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NewsCategory  $newsCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $news_cat = NewsCategory::findOrFail($request->newscat_id);
        $news_cat->delete();
        return redirect('admin/news-category')->with('warning', 'News Category has been deleted successfully');
    }

    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $news_cat = NewsCategory::findOrFail($request->newscat_id);
            $news_cat->delete();
            return redirect('admin/news-category')->with('warning', 'News Category has been deleted successfully');
        }
        $news_cats = NewsCategory::findOrFail($request->checkBoxArray);
        foreach ($news_cats as $news_cat){
            $news_cat->delete();
        }
        return redirect('admin/news-category')->with('warning', 'News Category has been deleted successfully');
    }
}
