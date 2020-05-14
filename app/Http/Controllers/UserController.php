<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Photo;
use App\Position;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $roles = Role::pluck('name', 'id')->all();
        $positions = Position::pluck('name', 'id')->all();
        return view('admin.users.users', compact('users', 'roles', 'positions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name', 'id')->all();
        $positions = Position::pluck('name', 'id')->all();
        return view('admin.users.create', compact('roles', 'positions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
       if (trim($request->password) == '')
       {
           $input =$request->except('password');
       }else {
          $input = $request->all();
          $input['password'] = bcrypt($request->password);
       }
      if ($file = $request->file('photo_id'))
      {
          $name = time().$file->getClientOriginalName();
          $file->move('images', $name);
          $photo = Photo::create(['photo'=>$name]);
          $input['photo_id'] = $photo->id;
      }
      User::create($input);
      return redirect('admin/users')->with('success', 'User has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $user = User::findOrFail($id);
        $roles = Role::pluck('name', 'id')->all();
        $positions = Position::pluck('name', 'id')->all();
        return view('admin.users.edit', compact('roles', 'positions', 'user', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
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
        return redirect('admin/users')->with('info', 'User details has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $user = User::findOrFail($request->user_id);
        if(!empty($user->photo->photo)) {
            if (file_exists(public_path('images/'. $user->photo->photo))) {
                unlink(public_path('images/'. $user->photo->photo));
            }
        }

        $user->delete();
        return redirect('admin/users')->with('warning', 'User has been deleted successfully');
    }
}
