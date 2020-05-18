<?php

namespace App\Http\Controllers;

use App\FireTitle;
use App\User;
use Illuminate\Http\Request;

class FireTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $fire_titles = FireTitle::all();
        return view('admin.fire-title.fire_title', compact('users', 'fire_titles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fire_title = FireTitle::all();
        return view('admin.fire-title.fire_title', compact('fire_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fire_title = new FireTitle;
        $fire_title->setTranslation('title', 'en', $request->title);
        $fire_title->setTranslation('title', 'ar', $request->title_ar);
        $fire_title->is_publish = $request->is_publish;
        $fire_title->save();
        return redirect('admin/fire-title')->with('success', 'Fire & Life Safety Title has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FireTitle  $fireTitle
     * @return \Illuminate\Http\Response
     */
    public function show(FireTitle $fireTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FireTitle  $fireTitle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fire_title = FireTitle::findOrFail($id);
        $users = User::all();
        return view('admin.fire-title.edit', compact('fire_title', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FireTitle  $fireTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fire_title = FireTitle::findOrFail($id);
        $fire_title->setTranslation('title', 'en', $request->title);
        $fire_title->setTranslation('title', 'ar', $request->title_ar);
        $fire_title->is_publish = $request->is_publish;
        $fire_title->update();
        return redirect('admin/fire-title')->with('info', 'Fire & Life Safety Title has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FireTitle  $fireTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $fire_title = FireTitle::findOrFail($request->fire_id);
        $fire_title->delete();
        return redirect('admin/fire-title')->with('warning', 'Fire & Life Safety Title has been deleted successfully');
    }
}
