<?php

namespace App\Http\Controllers;

use App\BrochureRequest;
use App\Brochures;
use App\ServiceFire;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrochureRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        $users = User::all();
        $brochure = Brochures::pluck('brochure_name', 'id');
        $brochure_requests = BrochureRequest::where('requester_name', 'like', '%'.$search.'%')
        ->orWhere('requester_email', 'like', '%'.$search.'%')
        ->orWhere('requester_phone', 'like', '%'.$search.'%')
        ->orderBy('id', 'DESC')->paginate(20);
        return view('admin.brochure_requesters.brochure_requester', compact('users', 'brochure_requests', 'brochure'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BrochureRequest  $brochureRequest
     * @return \Illuminate\Http\Response
     */
    public function show(BrochureRequest $brochureRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BrochureRequest  $brochureRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(BrochureRequest $brochureRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BrochureRequest  $brochureRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BrochureRequest $brochureRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BrochureRequest  $brochureRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $brochure_request = BrochureRequest::findOrFail($request->request_id);
        $brochure_request->delete();
        return redirect()->back()->with('warning', 'Brochure Requester has been deleted successfully');
    }

    public function deleteAll(Request $request){
        if (isset($request->delete_single))
        {
            $brochure_request = BrochureRequest::findOrFail($request->request_id);
            $brochure_request->delete();
            return redirect()->back()->with('warning', 'Brochure Requester has been deleted successfully');
        }

        $brochure_request = BrochureRequest::findOrFail($request->checkBoxArray);
        foreach ($brochure_request as $requester)
        {
            $requester->delete();
        }
        return redirect()->back()->with('warning', 'Brochure Requester has been bulk deleted');
    }
}
