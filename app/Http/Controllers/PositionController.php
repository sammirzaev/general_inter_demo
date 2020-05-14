<?php

namespace App\Http\Controllers;

use App\Position;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use function Sodium\compare;
use App\Notifications\PositionNotification;

class PositionController extends Controller
{
    use Notifiable;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $positions = Position::all();
        return view('admin.positions.positions', compact('positions', 'users'));
    }


//    public function newPosition(Request $request){
//        $position = new Position;
//        $position->name = $request->;
//        $position->save();
//        $user = User::where('id', '!=', auth()->user()->id)->get();
//        if (\Notification::send($user, new PositionNotification(Position::latest('id')->first())))
//        {
//            return back();
//        }
//    }

     public function markAsRead(){
         auth()->user()->unreadNotifications->markAsRead();
         return redirect()->back();
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.positions.positions');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Position::create($request->all());
        $user = User::where('id', '!=', auth()->user()->id)->get();
        \Notification::send($user, new PositionNotification(Position::latest('id')->first()));
        return redirect('admin/positions' )->with('success', 'Position has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function show(Position $position)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $position = Position::findOrFail($id);
        return view('admin.positions.edit', compact('position', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Position::whereId($id)->first()->update($request->all());
        return redirect('admin/positions')->with('info', 'Position name has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $position = Position::findOrFail($request->position_id);
        $position->delete();
        return redirect('admin/positions')->with('warning', 'Position has been deleted successfully');
    }
}
