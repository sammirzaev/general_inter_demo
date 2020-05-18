<?php

namespace App\Http\Controllers;

use App\HomeService;
use App\HomeServiceCat;
use App\User;
use Illuminate\Http\Request;

class HomeServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $home_services = HomeService::all();
        $service = HomeServiceCat::pluck('name', 'id')->all();
        return view('admin.home-service.home_service', compact('users', 'home_services', 'service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $home_services = HomeService::all();
        $service = HomeServiceCat::pluck('name', 'id')->all();
        return view('admin.home-service.home_service', compact( 'home_services', 'service'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $home_service = new HomeService;
        $home_service->setTranslation('title', 'en', $request->title);
        $home_service->setTranslation('title', 'ar', $request->title_ar);
        $home_service->setTranslation('description', 'en', $request->description);
        $home_service->setTranslation('description', 'ar', $request->description_ar);
        $home_service->setTranslation('read_more', 'en', $request->read_more);
        $home_service->setTranslation('read_more', 'ar', $request->read_more_ar);
        $home_service->service_id = $request->service_id;
        $home_service->read_link = $request->read_link;
        $home_service->is_publish = $request->is_publish;
        $home_service->save();
        return redirect('admin/home-service')->with('success', 'Home Service has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HomeService  $homeService
     * @return \Illuminate\Http\Response
     */
    public function show(HomeService $homeService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HomeService  $homeService
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $home_service = HomeService::findOrFail($id);
        $service = HomeServiceCat::pluck('name', 'id')->all();
        return view('admin.home-service.edit', compact('users', 'home_service', 'service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HomeService  $homeService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $home_service = HomeService::findOrFail($id);
        $home_service->setTranslation('title', 'en', $request->title);
        $home_service->setTranslation('title', 'ar', $request->title_ar);
        $home_service->setTranslation('description', 'en', $request->description);
        $home_service->setTranslation('description', 'ar', $request->description_ar);
        $home_service->setTranslation('read_more', 'en', $request->read_more);
        $home_service->setTranslation('read_more', 'ar', $request->read_more_ar);
        $home_service->service_id = $request->service_id;
        $home_service->read_link = $request->read_link;
        $home_service->is_publish = $request->is_publish;
        $home_service->update();
        return redirect('admin/home-service')->with('info', 'Home Service has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HomeService  $homeService
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $home_service = HomeService::findOrFail($request->homeservice_id);
        $home_service->delete();
        return redirect('admin/home-service')->with('warning', 'Home Service has been deleted successfully');
    }

    public function deleteAll(Request $request)
    {
        if (isset($request->delete_single)){
            $home_service = HomeService::findOrFail($request->homeservice_id);
            $home_service->delete();
            return redirect('admin/home-service')->with('warning', 'Home Service has been deleted successfully');
        }
        $home_services = HomeService::findOrFail($request->checkBoxArray);
        foreach ($home_services as $home_service)
        {
            $home_service->delete();
        }
        return redirect('admin/home-service')->with('warning', 'Home Service has been deleted successfully');
    }
}
