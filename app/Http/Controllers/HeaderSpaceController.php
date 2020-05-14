<?php

namespace App\Http\Controllers;

use App\HeaderSpace;
use App\User;
use Illuminate\Http\Request;

class HeaderSpaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $header_spaces = HeaderSpace::all();
        $users = User::all();
        return view('admin.header-space.header_space', compact('header_spaces', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $header_space = HeaderSpace::all();
        return view('admin.header-space.header_space', compact('header_space'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        HeaderSpace::create($request->all());
        return redirect('admin/header-space')->with('success', 'Header Input has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HeaderSpace  $headerSpace
     * @return \Illuminate\Http\Response
     */
    public function show(HeaderSpace $headerSpace)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HeaderSpace  $headerSpace
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $header_space = HeaderSpace::findOrFail($id);
        $users = User::all();
        return view('admin.header-space.edit', compact('header_space', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HeaderSpace  $headerSpace
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        HeaderSpace::whereId($id)->first()->update($request->all());
        return redirect('admin/header-space')->with('info', 'Header Space has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HeaderSpace  $headerSpace
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $header_space = HeaderSpace::findOrFail($request->header_id);
        $header_space->delete();
        return redirect('admin/header-space')->with('warning', 'Header Space has been deleted successfully');
    }
}
