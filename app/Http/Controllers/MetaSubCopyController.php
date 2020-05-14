<?php

namespace App\Http\Controllers;

use App\MetaSubCopy;
use App\User;
use Illuminate\Http\Request;

class MetaSubCopyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $subcopies = MetaSubCopy::all();
        return view('admin.meta-sub-copy.subcopy', compact('users', 'subcopies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcopies = MetaSubCopy::all();
        return view('admin.meta-sub-copy.subcopy', compact('subcopies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        MetaSubCopy::create($request->all());
        return redirect('admin/meta-subject')->with('success', 'Meta Subject and Copyrights has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MetaSubCopy  $metaSubCopy
     * @return \Illuminate\Http\Response
     */
    public function show(MetaSubCopy $metaSubCopy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MetaSubCopy  $metaSubCopy
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $subcopy = MetaSubCopy::findOrFail($id);
        return view('admin.meta-sub-copy.edit', compact('users', 'subcopy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MetaSubCopy  $metaSubCopy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        MetaSubCopy::whereId($id)->first()->update($request->all());
        return redirect('admin/meta-subject')->with('info', 'Meta Subject and Copyrights has been updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MetaSubCopy  $metaSubCopy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $subcopy = MetaSubCopy::findOrFail($request->sub_id);
        $subcopy->delete();
        return redirect('admin/meta-subject')->with('warning', 'Meta Subject and Copyrights has been deleted successfully');
    }
}
