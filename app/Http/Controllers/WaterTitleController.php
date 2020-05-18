<?php

namespace App\Http\Controllers;

use App\User;
use App\WaterTitle;
use Illuminate\Http\Request;

class WaterTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users =  User::all();
        $water_titles = WaterTitle::all();
        return view('admin.water-title.water_title', compact('users', 'water_titles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $water_title = WaterTitle::all();
        return view('admin.water-title.water_title', compact('water_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $water_title = new WaterTitle;
        $water_title->setTranslation('title', 'en', $request->title);
        $water_title->setTranslation('title', 'ar', $request->title_ar);
        $water_title->is_publish = $request->is_publish;
        $water_title->save();
        return redirect('admin/water-title')->with('success', 'Water Treatment Title has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WaterTitle  $waterTitle
     * @return \Illuminate\Http\Response
     */
    public function show(WaterTitle $waterTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WaterTitle  $waterTitle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $water_title = WaterTitle::findOrFail($id);
        $users = User::all();
        return view('admin.water-title.edit', compact('users', 'water_title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WaterTitle  $waterTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $water_title = WaterTitle::findOrFail($id);
        $water_title->setTranslation('title', 'en', $request->title);
        $water_title->setTranslation('title', 'ar', $request->title_ar);
        $water_title->is_publish = $request->is_publish;
        $water_title->update();
        return redirect('admin/water-title')->with('info', 'Water Treatment Title has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WaterTitle  $waterTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $water_title = WaterTitle::findOrFail($request->water_id);
        $water_title->delete();
        return redirect('admin/water-title')->with('warning', 'Water Treatment Title has been deleted successfully');
    }
}
