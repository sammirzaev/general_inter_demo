<?php

namespace App\Http\Controllers;

use App\TwitterCard;
use App\User;
use Illuminate\Http\Request;

class TwitterCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $twit_cards = TwitterCard::all();
        $users = User::all();
        return view('admin.twitter-card.twit-card', compact('users', 'twit_cards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $twit_card = TwitterCard::all();
        return view('admin.twitter-card.twit-card', compact('twit_card'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        TwitterCard::create($request->all());
        return redirect('admin/twitter-card')->with('success', 'Twitter Card has been registered successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TwitterCard  $twitterCard
     * @return \Illuminate\Http\Response
     */
    public function show(TwitterCard $twitterCard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TwitterCard  $twitterCard
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $twit_card = TwitterCard::findOrFail($id);
        $users = User::all();
        return view('admin.twitter-card.edit', compact('twit_card', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TwitterCard  $twitterCard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        TwitterCard::whereId($id)->first()->update($request->all());
        return redirect('admin/twitter-card')->with('info', 'Twitter Card has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TwitterCard  $twitterCard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $twit_card = TwitterCard::findOrfail($request->card_id);
        $twit_card->delete();
        return redirect('admin/twitter-card')->with('warning', 'Twitter Card has been deleted successfully');
    }
}
