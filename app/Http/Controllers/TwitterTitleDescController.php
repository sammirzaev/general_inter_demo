<?php

namespace App\Http\Controllers;

use App\TwitterTitleDesc;
use App\User;
use Illuminate\Http\Request;

class TwitterTitleDescController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $twit_titles = TwitterTitleDesc::all();
        return view('admin.twitter-title.twit-title', compact('users', 'twit_titles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $twit_title = TwitterTitleDesc::all();
        return view('admin.twitter-title.twit-title', compact('twit_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        TwitterTitleDesc::create($request->all());
        return redirect('admin/twitter-title')->with('success', 'Twitter Title & Description has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TwitterTitleDesc  $twitterTitleDesc
     * @return \Illuminate\Http\Response
     */
    public function show(TwitterTitleDesc $twitterTitleDesc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TwitterTitleDesc  $twitterTitleDesc
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $twit_title = TwitterTitleDesc::findOrFail($id);
        return view('admin.twitter-title.edit', compact('users', 'twit_title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TwitterTitleDesc  $twitterTitleDesc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        TwitterTitleDesc::whereId($id)->first()->update($request->all());
        return redirect('admin/twitter-title')->with('info', 'Twitter Title & Descripion has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TwitterTitleDesc  $twitterTitleDesc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $twit_title = TwitterTitleDesc::findOrFail($request->title_id);
        $twit_title->delete();
        return redirect('admin/twitter-title')->with('warning', 'Twitter Title & Description has been deleted successfully');
    }
}
