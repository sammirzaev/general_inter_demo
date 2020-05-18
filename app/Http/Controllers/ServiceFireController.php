<?php

namespace App\Http\Controllers;

use App\CategoryFire;
use App\ServiceFire;
use App\TypeFire;
use App\User;
use Illuminate\Http\Request;

class ServiceFireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $type_fire = TypeFire::pluck('title', 'id')->all();
        $cat_fire = CategoryFire::pluck('title', 'id')->all();
        $fire_services = ServiceFire::all();
        return view('admin.service-fire.fire_service', compact('users', 'type_fire', 'cat_fire', 'fire_services'));
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
        $fire_service = new ServiceFire;
        $input = $request->all();
        if ($file = $request->file('media')){
            $name = time().'-'.$file->getClientOriginalName();
            $file->storeAs('service-media', $name);
            $input['media'] = $name;
        }
        $fire_service->setTranslation('title', 'en', $request->title);
        $fire_service->setTranslation('title', 'ar', $request->title_ar);
        $fire_service->setTranslation('description', 'en', $request->description);
        $fire_service->setTranslation('description', 'ar', $request->description_ar);
        if ($request->file('media')){
            $fire_service->media = $name;
        } else {
            $fire_service->media = null;
        }
        $fire_service->cat_id = $request->cat_id;
        $fire_service->type_id = $request->type_id;
        $fire_service->is_publish = $request->is_publish;
        $fire_service->save();
        return redirect('admin/fire-service')->with('success', 'Fire Service has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ServiceFire  $serviceFire
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceFire $serviceFire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ServiceFire  $serviceFire
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $type_fire = TypeFire::pluck('title', 'id')->all();
        $cat_fire = CategoryFire::pluck('title', 'id')->all();
        $fire_service = ServiceFire::findOrFail($id);
        return view('admin.service-fire.edit', compact('users', 'type_fire', 'cat_fire', 'fire_service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ServiceFire  $serviceFire
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
        $fire_service = ServiceFire::findOrFail($id);
        $fire_service->setTranslation('title', 'en', $request->title);
        $fire_service->setTranslation('title', 'ar', $request->title_ar);
        $fire_service->setTranslation('description', 'en', $request->description);
        $fire_service->setTranslation('description', 'ar', $request->description_ar);
        $fire_service->cat_id = $request->cat_id;
        $fire_service->type_id = $request->type_id;
        $fire_service->is_publish = $request->is_publish;
        $fire_service->update($input);
        return redirect('admin/fire-service')->with('info', 'Fire Service has been updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ServiceFire  $serviceFire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $fire_service = ServiceFire::findOrFail($request->fireserv_id);
        if (!empty($fire_service->media)){
            if (file_exists(public_path('service-media/'.$fire_service->media))){
                unlink(public_path('service-media/'.$fire_service->mdeia));
            }
        }
        $fire_service->delete();
        return redirect('admin/fire-service')->with('warning', 'Fire Service has been deleted successfully');
    }

    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $fire_service = ServiceFire::findOrFail($request->fireserv_id);
            if (!empty($fire_service->media)){
                if (file_exists(public_path('service-media/'.$fire_service->media))){
                    unlink(public_path('service-media/'.$fire_service->media));
                }
            }
            $fire_service->delete();
            return redirect('admin/fire-service')->with('warning', 'Fire Service has been deleted successfully');
        }
        $fire_services = ServiceFire::findOrFail($request->checkBoxArray);
        foreach ($fire_services as $fire_service){
            if (!empty($fire_service->media)){
                if (file_exists(public_path('service-media/'.$fire_service->media))){
                    unlink(public_path('service-media/'.$fire_service->media));
                }
            }
            $fire_service->delete();
        }
        return redirect('admin/fire-service')->with('warning', 'Fire Service has been bulk deleted successfully');
    }
}
