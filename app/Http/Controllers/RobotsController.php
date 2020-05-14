<?php

namespace App\Http\Controllers;

use App\Robots;
use App\User;
use Illuminate\Http\Request;

class RobotsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $robots = Robots::all();
        $users = User::all();
        return view('admin.robotstxt.robots', compact('users', 'robots'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $robot = Robots::all();
        return view('admin.robotstxt.robots', compact('robot'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Robots::create($request->all());
        return redirect('admin/robots')->with('success', 'Robots Engine has been registered successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Robots  $robots
     * @return \Illuminate\Http\Response
     */
    public function show(Robots $robots)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Robots  $robots
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $robot = Robots::findOrFail($id);
        $users = User::all();
        return view('admin.robotstxt.edit', compact('users', 'robot'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Robots  $robots
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Robots::whereId($id)->first()->update($request->all());
        return redirect('admin/robots')->with('info', 'Robots Engine has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Robots  $robots
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $robots = Robots::findOrFail($request->robot_id);
        $robots->delete();
        return redirect('admin/robots')->with('warning', 'Robots Engine has been deleted successfully');
    }
}
