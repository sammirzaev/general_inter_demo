<?php

namespace App\Http\Controllers;

use App\OpenGraphTitle;
use App\User;
use Illuminate\Http\Request;

class OpenGraphTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $titles = OpenGraphTitle::all();
        return view('admin.og-title.ogtitle', compact('users', 'titles'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = OpenGraphTitle::all();
        return view('admin.og-title.ogtitle', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        OpenGraphTitle::create($request->all());
        return redirect('admin/og-title')->with('success', 'Open Graph Title has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OpenGraphTitle  $openGraphTitle
     * @return \Illuminate\Http\Response
     */
    public function show(OpenGraphTitle $openGraphTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OpenGraphTitle  $openGraphTitle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $title = OpenGraphTitle::findOrFail($id);
        return view('admin.og-title.edit', compact('users', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OpenGraphTitle  $openGraphTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        OpenGraphTitle::whereId($id)->first()->update($request->all());
        return redirect('admin/og-title')->with('info', 'OG Title has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OpenGraphTitle  $openGraphTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $title = OpenGraphTitle::findOrFail($request->title_id);
        $title->delete();
        return redirect('admin/og-title')->with('warning', 'OG title has been deleted successfully');
    }
}
