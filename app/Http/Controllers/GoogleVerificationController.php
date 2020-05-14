<?php

namespace App\Http\Controllers;

use App\GoogleVerification;
use App\User;
use Illuminate\Http\Request;

class GoogleVerificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $verifications = GoogleVerification::all();
        return view('admin.google-verification.verification', compact('users', 'verifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $verification = GoogleVerification::all();
        return view('admin.google-verification.verification', compact('verification'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        GoogleVerification::create($request->all());
        return redirect('admin/verification')->with('success', 'Google Verification ID has been registered successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GoogleVerification  $googleVerification
     * @return \Illuminate\Http\Response
     */
    public function show(GoogleVerification $googleVerification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GoogleVerification  $googleVerification
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $verification = GoogleVerification::findOrFail($id);
        return view('admin.google-verification.edit', compact('verification', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GoogleVerification  $googleVerification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        GoogleVerification::whereId($id)->first()->update($request->all());
        return redirect('admin/verification')->with('info', 'Google Verification ID has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GoogleVerification  $googleVerification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $verification = GoogleVerification::findOrFail($request->verify_id);
        $verification->delete();
        return redirect('admin/verification')->with('warning', 'Google Verification ID has been removed successfully');
    }
}
