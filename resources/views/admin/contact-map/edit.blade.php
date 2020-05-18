@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Edit Contact Map</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Contact Map</li>
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
                            <h4 class="card-title">Edit Contact Map</h4>
                            <h6 class="card-subtitle">Edit Contact Map</h6>
                            {!! Form::model($contact_map, ['method'=>'PATCH', 'action'=>['ContactMapController@update', $contact_map->id], 'class'=>'form-material m-t-40 row', 'files'=>true]) !!}
                            <div class="form-group col-md-12">
                                {!! Form::text('icon', null, ['class'=>'form-control', 'placeholder'=>'Update Map Icon', 'id'=>'icon']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('open_title', null, ['class'=>'form-control', 'placeholder'=>'Update Open Title', 'id'=>'open_title']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('open_title_ar', $contact_map->getTranslation('open_title', 'ar'), ['class'=>'form-control', 'placeholder'=>'Update Open Title Ar', 'id'=>'open_title']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('close_title', null, ['class'=>'form-control', 'placeholder'=>'Update Close Title', 'id'=>'close_title']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('close_title_ar', $contact_map->getTranslation('close_title', 'ar'), ['class'=>'form-control', 'placeholder'=>'Update Close Title Ar', 'id'=>'close_title']) !!}
                            </div>
                            <div class="form-group col-md-12">
                                {!! Form::text('link', null, ['class'=>'form-control', 'placeholder'=>'Update iFrame Google Map Link', 'id'=>'link']) !!}
                            </div>
                            <div class="form-group col-md-12">
                                {!! Form::select('is_publish',array( 1=>'Published', 0=>'Not Published'), null,['class'=>'form-control', 'id'=>'inputStatus']) !!}
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-info"><i class="mdi mdi-file-tree"> Update Contact Map</i> </button>
                                <a href="{{route('contact-map.index')}}" class="btn btn-pinterest" data-dismiss="modal"><i class="mdi mdi-arrow-left-bold-circle-outline"> Back</i></a>
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

