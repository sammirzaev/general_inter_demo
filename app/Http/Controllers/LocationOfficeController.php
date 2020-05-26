<?php

namespace App\Http\Controllers;

use App\LocationOffice;
use App\User;
use Illuminate\Http\Request;

class LocationOfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $locations = LocationOffice::all();
        return view('admin.location-office.location_office', compact('users', 'locations'));
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
        $location = new LocationOffice;
        $location->setTranslation('location', 'en', $request->location);
        $location->setTranslation('location', 'ar', $request->location_ar);
        $location->is_publish = $request->is_publish;
        $location->save();
        return redirect('admin/location-office')->with('success', 'Location has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LocationOffice  $locationOffice
     * @return \Illuminate\Http\Response
     */
    public function show(LocationOffice $locationOffice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LocationOffice  $locationOffice
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $users = User::all();
       $location = LocationOffice::findOrFail($id);
       return view('admin.location-office.edit', compact('users', 'location'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LocationOffice  $locationOffice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $location = LocationOffice::findOrFail($id);
        $location->setTranslation('location', 'en', $request->location);
        $location->setTranslation('location', 'ar', $request->location_ar);
        $location->is_publish = $request->is_publish;
        $location->update();
        return redirect('admin/location-office')->with('info', 'Location has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LocationOffice  $locationOffice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $location = LocationOffice::findOrFail($request->location_id);
        $location->delete();
        return redirect('admin/location-office')->with('warning', 'Location has been deleted successfully');
    }

    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $location = LocationOffice::findOrFail($request->location_id);
            $location->delete();
            return redirect('admin/location-office')->with('warning', 'Location has been deleted successfully');
        }
        $locations = LocationOffice::findOrFail($request->checkBoxArray);
        foreach ($locations as $location){
            $location->delete();
        }
        return redirect('admin/location-office')->with('warning', 'Location has been bulk deleted successfully');
    }
}
