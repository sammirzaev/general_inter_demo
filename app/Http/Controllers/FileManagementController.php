<?php

namespace App\Http\Controllers;

use App\FileManagement;
use App\User;
use Illuminate\Http\Request;

class FileManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $files = FileManagement::all();
        return view('admin.files.file', compact('files', 'users'));
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
        request()->validate([
            'file'  => 'required|mimes:txt|max:2048',
        ]);
        if ($files = $request->file('file')) {
            $destinationPath = 'public'; // upload path
            $filemanage = $files->getClientOriginalExtension();
            $files->move($destinationPath, $filemanage);
            $insert['file'] = "$filemanage";
        }
        FileManagement::create($insert);
        return redirect('admin/file')->with('success','Great! file has been successfully uploaded.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FileManagement  $fileManagement
     * @return \Illuminate\Http\Response
     */
    public function show(FileManagement $fileManagement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FileManagement  $fileManagement
     * @return \Illuminate\Http\Response
     */
    public function edit(FileManagement $fileManagement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FileManagement  $fileManagement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FileManagement $fileManagement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FileManagement  $fileManagement
     * @return \Illuminate\Http\Response
     */
    public function destroy(FileManagement $fileManagement)
    {
        //
    }
}
