<?php

namespace App\Http\Controllers;

use App\MetaKeyword;
use App\User;
use Illuminate\Http\Request;

class MetaKeywordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $keywords = MetaKeyword::all();
        return view('admin.meta-keywords.keywords', compact('users', 'keywords'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $keywords = MetaKeyword::all();
        return view('admin.meta-keywords.keywords', compact('keywords'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        MetaKeyword::create($request->all());
        return redirect('admin/meta-keywords')->with('success', 'Meta Keywords has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MetaKeyword  $metaKeyword
     * @return \Illuminate\Http\Response
     */
    public function show(MetaKeyword $metaKeyword)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MetaKeyword  $metaKeyword
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $keyword = MetaKeyword::findOrFail($id);
        return view('admin.meta-keywords.edit', compact('keyword', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MetaKeyword  $metaKeyword
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        MetaKeyword::whereId($id)->first()->update($request->all());
        return redirect('admin/meta-keywords')->with('info', 'Meta Keywords has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MetaKeyword  $metaKeyword
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $keywords = MetaKeyword::findOrFail($request->key_id);
        $keywords->delete();
        return redirect('admin/meta-keywords')->with('warning', 'Meta Keywords has been deleted successfully');
    }
}
