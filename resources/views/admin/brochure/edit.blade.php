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
                    <li class="breadcrumb-item active">Edit Brochures</li>
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
                <div class="col-4 offset-4">
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Brochures</h4>
                            <h6 class="card-subtitle">Edit Brochures</h6>
                            {!! Form::model($brochure, ['method'=>'PATCH', 'action'=>['BrochuresController@update', $brochure->id], 'class'=>'form-material m-t-40 row', 'files'=>true]) !!}
                            <div class="form-group col-md-6">
                                @if(file_exists(public_path('public/brochures-pics/'.$brochure->picture)))
                                <img src="{{asset('public/brochures-pics/'.$brochure->picture)}}" alt="avatar" width="60" class="img-thumbnail">
                                @else
                                 <span class="badge badge-danger">Brochure Media Not Available</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <div class="fallback">
                                    <input type="file" name="picture" id="input-file-now" class="dropify" />
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('brochure_name', null, ['class'=>'form-control', 'placeholder'=>'Update Brochure Name', 'id'=>'brochure_name']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('brochure_name_ar', $brochure->getTranslation('brochure_name', 'ar'), ['class'=>'form-control', 'placeholder'=>'Update Brochure Name AR', 'id'=>'brochure_name']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::select('filter_id', $filters, null, ['class'=>'form-control', 'id'=>'filter_id', 'required']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::select('filter_id_ar', $filters, null, ['class'=>'form-control', 'id'=>'filter_id', 'required']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Update Brochure Title', 'id'=>'title']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('title_ar', $brochure->getTranslation('title', 'ar'), ['class'=>'form-control', 'placeholder'=>'Update Brochure Title AR', 'id'=>'title']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::select('is_publish',array( 1=>'Published', 0=>'Not Published'), null,['class'=>'form-control', 'id'=>'inputStatus']) !!}
                            </div>
                            <div class="form-group col-md-12">
                                {!! Form::textarea('description', null, ['class'=>'form-control', 'placeholder'=>'Update Brochure Description', 'id'=>'mymce']) !!}
                            </div>
                            <div class="form-group col-md-12">
                                {!! Form::textarea('description_ar', $brochure->getTranslation('description', 'ar'), ['class'=>'form-control', 'placeholder'=>'Update Brochure Description AR', 'id'=>'mymce']) !!}
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-info"><i class="mdi mdi-file-tree"> Update Brochure</i> </button>
                                <a href="{{route('brochures.index')}}" class="btn btn-pinterest" data-dismiss="modal"><i class="mdi mdi-arrow-left-bold-circle-outline"> Back</i></a>
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

