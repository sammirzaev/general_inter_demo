<?php

namespace App\Http\Controllers;

use App\CategorySecurity;
use App\ServiceSecurity;
use App\TypeSecurity;
use App\User;
use Illuminate\Http\Request;

class ServiceSecurityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $type_security = TypeSecurity::pluck('title', 'id')->all();
        $cat_security = CategorySecurity::pluck('title', 'id')->all();
        $security_services = ServiceSecurity::all();
        return view('admin.service-security.security_service', compact('users', 'type_security', 'cat_security', 'security_services'));
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
        $security_service = new ServiceSecurity;
        $input = $request->all();
        if ($file = $request->file('media')){
            $name = time().'-'.$file->getClientOriginalName();
            $file->storeAs('service-media', $name);
            $input['media'] = $name;
        }
        $security_service->setTranslation('title', 'en', $request->title);
        $security_service->setTranslation('title', 'ar', $request->title_ar);
        $security_service->setTranslation('description', 'en', $request->description);
        $security_service->setTranslation('description', 'ar', $request->description_ar);
        if ($request->file('media')){
            $security_service->media = $name;
        } else {
            $security_service->media = null;
        }
        $security_service->cat_id = $request->cat_id;
        $security_service->type_id = $request->type_id;
        $security_service->is_publish = $request->is_publish;
        $security_service->save();
        return redirect('admin/security-service')->with('success', 'Security Service has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ServiceSecurity  $serviceSecurity
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceSecurity $serviceSecurity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ServiceSecurity  $serviceSecurity
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $type_security = TypeSecurity::pluck('title', 'id')->all();
        $cat_security = CategorySecurity::pluck('title', 'id')->all();
        $security_service = ServiceSecurity::findOrFail($id);
        return view('admin.service-security.edit', compact('users', 'type_security', 'cat_security', 'security_service'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ServiceSecurity  $serviceSecurity
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
        $security_service = ServiceSecurity::findOrFail($id);
        $security_service->setTranslation('title', 'en', $request->title);
        $security_service->setTranslation('title', 'ar', $request->title_ar);
        $security_service->setTranslation('description', 'en', $request->description);
        $security_service->setTranslation('description', 'ar', $request->description_ar);
        $security_service->cat_id = $request->cat_id;
        $security_service->type_id = $request->type_id;
        $security_service->is_publish = $request->is_publish;
        $security_service->update($input);
        return redirect('admin/security-service')->with('info', 'Security Service has been updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ServiceSecurity  $serviceSecurity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $security_service = ServiceSecurity::findOrFail($request->securityserv_id);
        if (!empty($security_service->media)){
            if (file_exists(public_path('service-media/'.$security_service->media))){
                unlink(public_path('service-media/'.$security_service->mdeia));
            }
        }
        $security_service->delete();
        return redirect('admin/security-service')->with('warning', 'Security Service has been deleted successfully');
    }

    public function deleteAll(Request $request)
    {
        if (isset($request->delete_single)){
            $security_service = ServiceSecurity::findOrFail($request->securityserv_id);
            if (!empty($security_service->media)){
                if (file_exists(public_path('service-media/'.$security_service->media))){
                    unlink(public_path('service-media/'.$security_service->media));
                }
            }
            $security_service->delete();
            return redirect('admin/security-service')->with('warning', 'Security Service has been deleted successfully');
        }
        $security_services = ServiceSecurity::findOrFail($request->checkBoxArray);
        foreach ($security_services as $security_service){
            if (!empty($security_services->media)){
                if (file_exists(public_path('service-media/'.$security_services->media))){
                    unlink(public_path('service-media/'.$security_services->media));
                }
            }
            $security_service->delete();
        }
        return redirect('admin/security-service')->with('warning', 'Security Service has been bulk deleted successfully');
    }
}
