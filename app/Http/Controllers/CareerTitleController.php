<?php

namespace App\Http\Controllers;

use App\CareerTitle;
use App\User;
use Illuminate\Http\Request;

class CareerTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $career_titles = CareerTitle::all();
        return view('admin.career-title.career_title', compact('users', 'career_titles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $career_titles = CareerTitle::all();
        return view('admin.career-title.career_title', compact('career_titles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $career_title = new CareerTitle;
        $career_title->setTranslation('title', 'en', $request->title);
        $career_title->setTranslation('title', 'ar', $request->title_ar);
        $career_title->is_publish = $request->is_publish;
        $career_title->save();
        return redirect('admin/career-title')->with('success', 'Career Title has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CareerTitle  $careerTitle
     * @return \Illuminate\Http\Response
     */
    public function show(CareerTitle $careerTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CareerTitle  $careerTitle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $career_title = CareerTitle::findOrFail($id);
        $users = User::all();
        return view('admin.career-title.edit', compact('users', 'career_title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CareerTitle  $careerTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $career_title = CareerTitle::findOrFail($id);
        $career_title->setTranslation('title', 'en', $request->title);
        $career_title->setTranslation('title', 'ar', $request->title_ar);
        $career_title->is_publish = $request->is_publish;
        $career_title->update();
        return redirect('admin/career-title')->with('info', 'Career Title has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CareerTitle  $careerTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $career_title = CareerTitle::findOrFail($request->careertitle_id);
        $career_title->delete();
        return redirect('admin/career-title')->with('warning', 'Career Title has been deleted successfully');
    }
}
