<?php

namespace App\Http\Controllers;

use App\MetaURLDistCov;
use App\User;
use Illuminate\Http\Request;

class MetaURLDistCovController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $urldiscovs = MetaURLDistCov::all();
        return view('admin.meta-url-dist-cov.urldistcov', compact('users', 'urldiscovs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $urldiscovs = MetaURLDistCov::all();
        return view('admin.meta-url-dist-cov.urldistcov', compact('urldiscovs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        MetaURLDistCov::create($request->all());
        return redirect('admin/meta-coverage')->with('success', 'Meta URL, Dist. Coverage has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MetaURLDistCov  $metaURLDistCov
     * @return \Illuminate\Http\Response
     */
    public function show(MetaURLDistCov $metaURLDistCov)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MetaURLDistCov  $metaURLDistCov
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $urldiscov = MetaURLDistCov::findOrFail($id);
        return view('admin.meta-url-dist-cov.edit', compact('users', 'urldiscov'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MetaURLDistCov  $metaURLDistCov
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        MetaURLDistCov::whereId($id)->first()->update($request->all());
        return redirect('admin/meta-coverage')->with('info', 'Meta URL, Dist. a& Coverage has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MetaURLDistCov  $metaURLDistCov
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $urldiscov = MetaURLDistCov::findOrFail($request->url_id);
        $urldiscov->delete();
        return redirect('admin/meta-coverage')->with('warning', 'Meta URL, Dist. & Coverage has been deleted successfully');
    }
}
