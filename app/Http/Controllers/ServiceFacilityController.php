<?php

namespace App\Http\Controllers;

use App\CategoryFacility;
use App\ServiceFacility;
use App\TypeFacility;
use App\User;
use Illuminate\Http\Request;

class ServiceFacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $type_facility = TypeFacility::pluck('title', 'id')->all();
        $cat_facility =  CategoryFacility::pluck('title', 'id')->all();
        $facility_services = ServiceFacility::all();
        return view('admin.service-facility.facility_service', compact('users', 'type_facility', 'cat_facility', 'facility_services'));
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
        $facility_service = new ServiceFacility;
        $input =  $request->all();
        if ($file = $request->file('media')){
            $name = time().'-'.$file->getClientOriginalName();
            $file->storeAs('service-media', $name);
            $input['media'] = $name;
        }
        $facility_service->setTranslation('title', 'en', $request->title);
        $facility_service->setTranslation('title', 'ar', $request->title_ar);
        $facility_service->setTranslation('description', 'en', $request->description);
        $facility_service->setTranslation('description', 'ar', $request->description_ar);
        if ($request->file('media')){
            $facility_service->media = $name;
        } else {
            $facility_service->media = null;
        }
        $facility_service->media = $name;
        $facility_service->type_id = $request->type_id;
        $facility_service->cat_id = $request->cat_id;
        $facility_service->is_publish = $request->is_publish;
        $facility_service->save();
        return redirect('admin/facility-service')->with('success', 'Facility Service has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ServiceFacility  $serviceFacility
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceFacility $serviceFacility)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ServiceFacility  $serviceFacility
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $type_facility = TypeFacility::pluck('title', 'id')->all();
        $cat_facility = CategoryFacility::pluck('title', 'id')->all();
        $facility_service = ServiceFacility::findOrFail($id);
        return view('admin.service-facility.edit', compact('users', 'type_facility', 'cat_facility', 'facility_service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ServiceFacility  $serviceFacility
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        if ($file = $request->file('media')){
            $name = time().'-'.$file->getClientOriginalName();
            $file->storeAs('service-media', $name);
            $input['media'] = $name;
        }
        $facility_service = ServiceFacility::findOrFail($id);
        $facility_service->setTranslation('title', 'en', $request->title);
        $facility_service->setTranslation('title', 'ar', $request->title_ar);
        $facility_service->setTranslation('description', 'en', $request->description);
        $facility_service->setTranslation('description', 'ar', $request->description_ar);
        $facility_service->type_id = $request->type_id;
        $facility_service->cat_id = $request->cat_id;
        $facility_service->is_publish = $request->is_publish;
        $facility_service->update($input);
        return redirect('admin/facility-service')->with('info', 'Facility Service has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ServiceFacility  $serviceFacility
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $facility_service = ServiceFacility::findOrFail($request->facilityserv_id);
        if (!empty($facility_service->media)){
            if (file_exists(public_path('service-media/'.$facility_service->media))){
                unlink(public_path('service-media/'.$facility_service->media));
            }
        }
        $facility_service->delete();
        return redirect('admin/facility-service')->with('warning', 'Facility Service has been deleted successfully');
    }

    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $facility_service = ServiceFacility::findOrFail($request->facilityserv_id);
            if (!empty($facility_service->media)){
                if (file_exists(public_path('service-media/'.$facility_service->media))){
                    unlink(public_path('service-media/'.$facility_service->media));
                }
            }
            $facility_service->delete();
            return redirect('admin/facility-service')->with('warning', 'Facility Service has been deleted successfully');
        }
        $facility_services = ServiceFacility::findOrFail($request->checkBoxArray);
        foreach ($facility_services as $facility_service){
            if (!empty($facility_service->media)){
                if (file_exists(public_path('service-media/'.$facility_service->media))){
                    unlink(public_path('service-media/'.$facility_service->media));
                }
            }
            $facility_service->delete();
        }
        return redirect('admin/facility-service')->with('warning', 'Facility Service has been bulk deleted successfully');
    }
}
