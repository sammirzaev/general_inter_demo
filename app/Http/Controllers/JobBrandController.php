<?php

namespace App\Http\Controllers;

use App\BrandPhoto;
use App\Candidate;
use App\JobBrand;
use App\User;
use Illuminate\Http\Request;

class JobBrandController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = User::all();
        $brands = JobBrand::all();
        return view('admin.job-brand.brand', compact('users', 'brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brand = JobBrand::all();
        return view('admin.job-brand.brand', compact('brand'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        if ($file = $request->file('brand_id'))
        {
            $name = time().$file->getClientOriginalName();
            $file->move('brands', $name);
            $brand = BrandPhoto::create(['name'=>$name]);
            $input['brand_id'] = $brand->id;
        }

        $card = new Candidate();
        $card->position    = $request->get('position');
        $card->is_price     = $request->is_price;
        $card->valid_month  = $request->valid_month;
        $card->is_publish   = $request->is_publish;
        $card->price        = $request->price;
        $card->description  = $request->description;
        $card->image        = $name;
        return redirect('admin/job-brand')->with('success', 'Job Brand has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JobBrand  $jobBrand
     * @return \Illuminate\Http\Response
     */
    public function show(JobBrand $jobBrand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JobBrand  $jobBrand
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand = JobBrand::findOrFail($id);
        $users = User::all();
        return view('admin.job-brand.edit', compact('users', 'brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JobBrand  $jobBrand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $brand = JobBrand::findOrFail($id);
        $input = $request->all();
        if ($file = $request->file('brand_id'))
        {
            $name = time().$file->getClientOriginalName();
            $file->move('brands', $name);
            $brand = BrandPhoto::create(['name'=>$name]);
            $input['brand_id'] = $brand->id;
        }
        $brand->update($input);
        return redirect('admin/job-brand')->with('info', 'Job Brand has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JobBrand  $jobBrand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $brand = JobBrand::findOrFail($request->brand_id);
        if(!empty($brand->name)) {
            if (file_exists(public_path('brands/'. $brand->name))) {
                unlink(public_path('brands/'. $brand->name));
            }
        }
        $brand->delete();
        return redirect('admin/job-brand')->with('warning', 'Job Brand has been deleted successfully');
    }
}
