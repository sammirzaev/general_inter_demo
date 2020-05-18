<?php

namespace App\Http\Controllers;

use App\CategoryWater;
use App\ServiceWater;
use App\TypeWater;
use App\User;
use Illuminate\Http\Request;
use function Sodium\compare;

class ServiceWaterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $type_water = TypeWater::pluck('title', 'id')->all();
        $cat_water = CategoryWater::pluck('title', 'id')->all();
        $water_services = ServiceWater::all();
        return view('admin.service-water.water_service', compact('users', 'type_water', 'cat_water', 'water_services'));
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
        $water_service = new ServiceWater;
        $input = $request->all();
        if ($file = $request->file('media')){
            $name = time().'-'.$file->getClientOriginalName();
            $file->storeAs('service-media', $name);
            $input['media'] = $name;
        }
        $water_service->setTranslation('title', 'en', $request->title);
        $water_service->setTranslation('title', 'ar', $request->title_ar);
        $water_service->setTranslation('description', 'en', $request->description);
        $water_service->setTranslation('description', 'ar', $request->description_ar);
        if ($request->file('media')){
            $water_service->media = $name;
        } else {
            $water_service->media = null;
        }
        $water_service->type_id = $request->type_id;
        $water_service->cat_id = $request->cat_id;
        $water_service->is_publish = $request->is_publish;
        $water_service->save();
        return redirect('admin/water-service')->with('success', 'Water Service has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ServiceWater  $serviceWater
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceWater $serviceWater)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ServiceWater  $serviceWater
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $type_water = TypeWater::pluck('title', 'id')->all();
        $cat_water = CategoryWater::pluck('title', 'id')->all();
        $water_service = ServiceWater::findOrFail($id);
        return view('admin.service-water.edit', compact('users', 'type_water', 'cat_water', 'water_service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ServiceWater  $serviceWater
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
        $water_service = ServiceWater::findOrFail($id);
        $water_service->setTranslation('title', 'en', $request->title);
        $water_service->setTranslation('title', 'ar', $request->title_ar);
        $water_service->setTranslation('description', 'en', $request->description);
        $water_service->setTranslation('description', 'ar', $request->description_ar);
        $water_service->type_id = $request->type_id;
        $water_service->cat_id = $request->cat_id;
        $water_service->is_publish = $request->is_publish;
        $water_service->update($input);
        return redirect('admin/water-service')->with('info', 'Water Service has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ServiceWater  $serviceWater
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $water_service = ServiceWater::findOrFail($request->waterserv_id);
        if (!empty($water_service->media)){
            if (file_exists(public_path('service-media/'.$water_service->media))){
                unlink(public_path('service-media/'.$water_service->mdeia));
            }
        }
        $water_service->delete();
        return redirect('admin/water-service')->with('warning', 'Water Service has been deleted successfully');
    }

    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $water_service = ServiceWater::findOrFail($request->waterserv_id);
            if (!empty($water_service->media)){
                if (file_exists(public_path('service-media/'.$water_service->media))){
                    unlink(public_path('service-media/'.$water_service->media));
                }
            }
            $water_service->delete();
            return redirect('admin/water-service')->with('warning', 'Water Service has been deleted successfully');
        }
        $water_services = ServiceWater::findOrFail($request->checkBoxArray);
        foreach ($water_services as $water_service){
            if (!empty($water_service->media)){
                if (file_exists(public_path('service-media/'.$water_service->media))){
                    unlink(public_path('service-media/'.$water_service->media));
                }
            }
            $water_service->delete();
        }
        return redirect('admin/water-service')->with('warning', 'Water Service has been bulk deleted successfully');
    }
}
