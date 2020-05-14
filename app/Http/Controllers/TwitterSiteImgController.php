<?php

namespace App\Http\Controllers;

use App\TwitterSiteImg;
use App\User;
use Illuminate\Http\Request;

class TwitterSiteImgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $twit_sites = TwitterSiteImg::all();
        return view('admin.twitter-site.twit-site', compact('users', 'twit_sites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $twit_site = TwitterSiteImg::all();
        return view('admin.twitter-site.twit-site', compact('twit_site'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        TwitterSiteImg::create($request->all());
        return redirect('admin/twitter-site')->with('success', 'Twitter Site & Image has been registered successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TwitterSiteImg  $twitterSiteImg
     * @return \Illuminate\Http\Response
     */
    public function show(TwitterSiteImg $twitterSiteImg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TwitterSiteImg  $twitterSiteImg
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $twit_site = TwitterSiteImg::findOrFail($id);
        $users = User::all();
        return view('admin.twitter-site.edit', compact('twit_site', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TwitterSiteImg  $twitterSiteImg
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        TwitterSiteImg::whereId($id)->first()->update($request->all());
        return redirect('admin/twitter-site')->with('info', 'Twitter Site & Image updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TwitterSiteImg  $twitterSiteImg
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $twit_site = TwitterSiteImg::findOrFail($request->site_id);
        $twit_site->delete();
        return redirect('admin/twitter-site')->with('warning', 'Twitter Site & Image has been deleted successfully');
    }
}
