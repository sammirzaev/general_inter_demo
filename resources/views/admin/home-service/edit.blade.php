@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Home Services</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Home Service</li>
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
                            <h4 class="card-title">Edit Home Service</h4>
                            <h6 class="card-subtitle">Edit Home Service</h6>
                            {!! Form::model($home_service, ['method'=>'PATCH', 'action'=>['HomeServiceController@update', $home_service->id], 'class'=>'form-material m-t-40 row', 'files'=>true]) !!}
                            <div class="form-group col-md-6">
                                {!! Form::select('service_id', $service, null, ['class'=>'form-control', 'id'=>'service_id', 'required']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::select('service_id', $service, null, ['class'=>'form-control', 'id'=>'service_id', 'required']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Update Title Name', 'id'=>'title']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('title_ar', $home_service->getTranslation('title', 'ar'), ['class'=>'form-control', 'placeholder'=>'Update Title Name AR', 'id'=>'title']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('read_more', null, ['class'=>'form-control', 'placeholder'=>'Update Read More', 'id'=>'read_more ']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('read_more_ar', $home_service->getTranslation('read_more', 'ar'), ['class'=>'form-control', 'placeholder'=>'Update Read More AR', 'id'=>'read_more']) !!}
                            </div>
                            <div class="form-group col-md-12">
                                {!! Form::label('description', 'Description ') !!}
                                {!! Form::textarea('description', null, ['class'=>'form-control', 'placeholder'=>'Update Description', 'id'=>'mymce']) !!}
                            </div>
                            <div class="form-group col-md-12">
                                {!! Form::label('description_ar', 'Description ') !!}
                                {!! Form::textarea('description_ar', $home_service->getTranslation('description', 'ar'), ['class'=>'form-control', 'placeholder'=>'Update Description', 'id'=>'mymce']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('read_link', null, ['class'=>'form-control', 'placeholder'=>'Update Read Link', 'id'=>'read_link']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::select('is_publish',array( 1=>'Published', 0=>'Not Published'), null,['class'=>'form-control', 'id'=>'inputStatus']) !!}
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-info"><i class="mdi mdi-file-tree"> Update Home Service</i> </button>
                                <a href="{{route('home-service.index')}}" class="btn btn-pinterest" data-dismiss="modal"><i class="mdi mdi-arrow-left-bold-circle-outline"> Back</i></a>
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

