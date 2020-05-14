<?php

namespace App\Http\Controllers;

use App\Photo;
use App\User;
use Illuminate\Http\Request;
use function Sodium\compare;
use Illuminate\Support\Facades\File;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $photos = Photo::all();
        return view('admin.photos.photos', compact('photos', 'users'));
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
         $file = $request->file('photo');
         $name = time(). $file->getClientOriginalName();
         $file->move('images', $name);
         Photo::create(['photo'=>$name]);
         return redirect('admin/avatars')->with('success', 'Avatar Media has been uploaded successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $photo = Photo::findOrFail($request->photo_id);
        if(!empty($photo->photo)) {
            if (file_exists(public_path('images/'. $photo->photo))) {
                unlink(public_path('images/'. $photo->photo));
            }
        }
        $photo->delete();
        return redirect('admin/avatars')->with('warning', 'File has been deleted successfully');
    }
}
