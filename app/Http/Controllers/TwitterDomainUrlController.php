<?php

namespace App\Http\Controllers;

use App\TwitterDomainUrl;
use App\User;
use Illuminate\Http\Request;

class TwitterDomainUrlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $twit_doms = TwitterDomainUrl::all();
        return view('admin.twitter-domain.twit-dom', compact('users', 'twit_doms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $twit_dom = TwitterDomainUrl::all();
        return view('admin.twitter-domain.twit-dom', compact('twit_dom'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        TwitterDomainUrl::create($request->all());
        return redirect('admin/twitter-domain')->with('success', 'Twitter Domain & URl has been registered successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TwitterDomainUrl  $twitterDomainUrl
     * @return \Illuminate\Http\Response
     */
    public function show(TwitterDomainUrl $twitterDomainUrl)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TwitterDomainUrl  $twitterDomainUrl
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $twit_dom = TwitterDomainUrl::findOrFail($id);
        $users = User::all();
        return view('admin.twitter-domain.edit', compact('twit_dom', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TwitterDomainUrl  $twitterDomainUrl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        TwitterDomainUrl::whereId($id)->first()->update($request->all());
        return redirect('admin/twitter-domain')->with('info', 'Twitter Domain & URL has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TwitterDomainUrl  $twitterDomainUrl
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $twit_dom = TwitterDomainUrl::findOrFail($request->dom_id);
        $twit_dom->delete();
        return redirect('admin/twitter-domain')->with('warning', 'Twitter Domain & URL has been deleted successfully');
    }
}
