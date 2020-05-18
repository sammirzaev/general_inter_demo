<?php

namespace App\Http\Controllers;

use App\HomeTitle;
use App\User;
use Illuminate\Http\Request;

class HomeTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $home_titles = HomeTitle::all();
        return view('admin.home-title.home_title', compact('users', 'home_titles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $home_title = HomeTitle::all();
        return view('admin.home-title.home_title', compact('home_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //============ It will create title with 2 language en and ar in one column with array
        $home_title = new HomeTitle;
        $home_title
            ->setTranslation('title', 'en', $request->title)
            ->setTranslation('title', 'ar', $request->title_ar);
        $home_title->is_publish = $request->is_publish;
        $home_title->save();
        return redirect('admin/home-title')->with('success', 'Home Title has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HomeTitle  $homeTitle
     * @return \Illuminate\Http\Response
     */
    public function show(HomeTitle $homeTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HomeTitle  $homeTitle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $home_title = HomeTitle::findOrfail($id);
        return view('admin.home-title.edit', compact('users', 'home_title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HomeTitle  $homeTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //============ It will update existing title with 2 language en and ar in one column with array
        $home_title = HomeTitle::findOrFail($id);
        $home_title->setTranslation('title', 'en', $request->title);
        $home_title->setTranslation('title', 'ar', $request->title_ar);
        $home_title->is_publish = $request->is_publish;
        $home_title->update();
        return redirect('admin/home-title')->with('info', 'Home Title has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HomeTitle  $homeTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $home_title = HomeTitle::findOrFail($request->home_id);
        $home_title->delete();
        return redirect('admin/home-title')->with('warning', 'Home Title has been deleted successfully');
    }
}
