@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Dashboard</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Edit Career</li>
                </ol>
            </div>
            <div>
                <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12 col-md-12">
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Job Career</h4>
                            <h6 class="card-subtitle">Edit  Career</h6>
                            {!! Form::model($career, ['method'=>'PATCH', 'action'=>['JobCareersController@update', $career->id], 'class'=>'form-material m-t-40 row', 'files'=>true]) !!}
                            <div class="form-group col-md-6">
                                {!! Form::select('brand_id', $brand, null, ['class'=>'form-control', 'id'=>'brand_id', 'required']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::select('category_id[]', $categories, null, ['class'=>'form-control', 'id'=>'feature', 'multiple', 'required']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::select('type_id', $type, null, ['class'=>'form-control', 'id'=>'type_id', 'required']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::select('location_id', $location, null, ['class'=>'form-control', 'id'=>'location_id', 'required']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::select('salary_id', $salary, null, ['class'=>'form-control', 'id'=>'salary_id', 'required']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::select('is_publish',array( 1=>'Published', 0=>'Not Published'), null,['class'=>'form-control', 'id'=>'inputStatus']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('job_name', null, ['class'=>'form-control', 'placeholder'=>'Update Job Name', 'id'=>'job_name']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('job_title', null, ['class'=>'form-control', 'placeholder'=>'Update Job Title', 'id'=>'job_title']) !!}
                            </div>
                            <div class="form-group col-md-12">
                                {!! Form::label('job_desc', 'Job Description ') !!}
                                {!! Form::textarea('job_desc', null, ['class'=>'form-control', 'placeholder'=>'Update Job Description', 'id'=>'mymce']) !!}
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-info"><i class="mdi mdi-file-tree"> Update Career</i> </button>
                                <a href="{{route('job-board.index')}}" class="btn btn-pinterest" data-dismiss="modal"><i class="mdi mdi-arrow-left-bold-circle-outline"> Back</i></a>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <!-- End Column -->
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
        @include('admin.rightbar.rightbar')
        <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        @include('admin.footer.footer')
    </div>
@stop

