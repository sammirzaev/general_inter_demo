<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Position;
use App\Profile;
use App\Role;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $user = auth()->user('id');
        $positions = Position::pluck('name', 'id')->all();
        $roles = Role::pluck('name', 'id')->all();
        return view('admin.profile.profile', compact('user', 'positions', 'roles', 'users'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::pluck('name', 'id')->all();
        $positions = Position::pluck('name', 'id')->all();
        return view('admin.profile.profile', compact('roles', 'positions', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        if (trim($request->password) == ' ')
        {
            $input =$request->except('password');
        }else {
            $input = $request->all();
            $input['password'] =bcrypt($request->password);
        }
        if ($file = $request->file('photo_id'))
        {
            $name = time().$file->getClientOriginalName();
            $file->move('images', $name);
            $photo = Photo::create(['photo'=>$name]);
            $input['photo_id'] = $photo->id;
        }
        $user->update($input);
        return redirect('admin/profiles')->with('info', 'Profiles details has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
