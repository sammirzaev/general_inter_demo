<?php

namespace App\Http\Controllers;

use App\AboutTitle;
use App\User;
use Illuminate\Http\Request;

class AboutTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $about_titles = AboutTitle::all();
        return view('admin.about-title.about_title', compact('users', 'about_titles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $about_titles = AboutTitle::all();
        return view('admin.about-title.about_title', compact('about_titles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $about_title = new AboutTitle;
        $about_title
            ->setTranslation('title', 'en', $request->title)
            ->setTranslation('title', 'ar', $request->title_ar);
        $about_title->is_publish = $request->is_publish;
        $about_title->save();
        return redirect('admin/about-title')->with('success', 'About Title has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AboutTitle  $aboutTitle
     * @return \Illuminate\Http\Response
     */
    public function show(AboutTitle $aboutTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AboutTitle  $aboutTitle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $about_title = AboutTitle::findOrFial($id);
        return view('admin.about-title.edit', compact('users', 'about_title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AboutTitle  $aboutTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $about_title = AboutTitle::findOrFail($id);
        $about_title->setTranslation('title', 'en', $request->title);
        $about_title->setTranslation('title', 'ar', $request->title_ar);
        $about_title->is_publish = $request->is_publish;
        $about_title->update();
        return redirect('admin/about-title')->with('info', 'About Title has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AboutTitle  $aboutTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $about_title = AboutTitle::findOrFail($request->about_id);
        $about_title->delete();
        return redirect('admin/about-title')->with('warning', 'About Title has been deleted successfully');

    }
}
