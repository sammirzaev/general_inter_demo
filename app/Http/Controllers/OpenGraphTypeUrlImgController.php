<?php

namespace App\Http\Controllers;

use App\OpenGraphTypeUrlImg;
use App\User;
use Illuminate\Http\Request;

class OpenGraphTypeUrlImgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $types = OpenGraphTypeUrlImg::all();
        return view('admin.og-type-url-img.ogtype', compact('users', 'types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = OpenGraphTypeUrlImg::all();
        return view('admin.og-type-url-img.ogtype', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        OpenGraphTypeUrlImg::create($request->all());
        return redirect('admin/og-type')->with('success', 'OG Type, URL and Image has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OpenGraphTypeUrlImg  $openGraphTypeUrlImg
     * @return \Illuminate\Http\Response
     */
    public function show(OpenGraphTypeUrlImg $openGraphTypeUrlImg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OpenGraphTypeUrlImg  $openGraphTypeUrlImg
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $type = OpenGraphTypeUrlImg::findOrFail($id);
        return view('admin.og-type-url-img.edit', compact('type', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OpenGraphTypeUrlImg  $openGraphTypeUrlImg
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        OpenGraphTypeUrlImg::whereId($id)->first()->update($request->all());
        return redirect('admin/og-type')->with('info', 'OG Type, URL and Image Links has been created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OpenGraphTypeUrlImg  $openGraphTypeUrlImg
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $type = OpenGraphTypeUrlImg::findOrFail($request->type_id);
        $type->delete();
        return redirect('admin/og-type')->with('warning', 'OG Type, URL and Images Link has been deleted successfully');
    }
}
