<?php

namespace App\Http\Controllers;

use App\MetaDescription;
use App\User;
use Illuminate\Http\Request;
use Symfony\Component\Translation\MetadataAwareInterface;

class MetaDescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $descriptions = MetaDescription::all();
        return view('admin.meta-description.description', compact('users', 'descriptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $descriptions = MetaDescription::all();
        return view('admin.meta-description.description', compact('descriptions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        MetaDescription::create($request->all());
        return redirect('admin/meta-description')->with('success', 'Meta Description has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MetaDescription  $metaDescription
     * @return \Illuminate\Http\Response
     */
    public function show(MetaDescription $metaDescription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MetaDescription  $metaDescription
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $description = MetaDescription::findOrFail($id);
        return view('admin.meta-description.edit', compact('users', 'description'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MetaDescription  $metaDescription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        MetaDescription::whereId($id)->first()->update($request->all());
        return redirect('admin/meta-description')->with('info', 'Meta Description has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MetaDescription  $metaDescription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $description = MetaDescription::findOrFail($request->desc_id);
        $description->delete();
        return redirect('admin/meta-description')->with('warning', 'Meta Description has been deleted successfully');
    }
}
