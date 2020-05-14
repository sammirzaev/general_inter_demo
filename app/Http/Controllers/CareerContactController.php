<?php

namespace App\Http\Controllers;

use App\CareerContact;
use App\User;
use Illuminate\Http\Request;

class CareerContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $career_contacts = CareerContact::all();
        return view('admin.career-contact.career-contact', compact('users', 'career_contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $career_contact = CareerContact::all();
        return view('admin.career-contact.career-contact', compact('career_contact'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        CareerContact::create($request->all());
        return redirect('admin/career-contact')->with('success', 'Career Email has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CareerContact  $careerContact
     * @return \Illuminate\Http\Response
     */
    public function show(CareerContact $careerContact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CareerContact  $careerContact
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $career_contact = CareerContact::findOrFail($id);
        $users = User::all();
        return view('admin.career-contact.edit', compact('users', 'career_contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CareerContact  $careerContact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        CareerContact::whereId($id)->first()->update($request->all());
        return redirect('admin/career-contact')->with('info', 'Career Email has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CareerContact  $careerContact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $career_contact = CareerContact::findOrFail($request->careercon_id);
        $career_contact->delete();
        return redirect('admin/career-contact')->with('warning', 'Career Email has been deleted successfully');
    }
}
