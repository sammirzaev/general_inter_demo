<?php

namespace App\Http\Controllers;

use App\BrandPhoto;
use App\User;
use Illuminate\Http\Request;

class BrandPhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $medias = BrandPhoto::all();
        return view('admin.jobbrand-media.brand-media', compact('medias', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('name');
        $name = time(). $file->getClientOriginalName();
        $file->move('brands', $name);
        BrandPhoto::create(['name'=>$name]);
        return redirect('admin/avatars')->with('success', 'Avatar Media has been uploaded successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BrandPhoto  $brandPhoto
     * @return \Illuminate\Http\Response
     */
    public function show(BrandPhoto $brandPhoto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BrandPhoto  $brandPhoto
     * @return \Illuminate\Http\Response
     */
    public function edit(BrandPhoto $brandPhoto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BrandPhoto  $brandPhoto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BrandPhoto $brandPhoto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BrandPhoto  $brandPhoto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $media = BrandPhoto::findOrFail($request->media_id);
        if(!empty($media->name)) {
            if (file_exists(public_path('brands/'. $media->name))) {
                unlink(public_path('brands/'. $media->name));
            }
        }
        $media->delete();
        return redirect('admin/brand-media')->with('warning', 'Brand Media has been deleted successfully');
    }
}
