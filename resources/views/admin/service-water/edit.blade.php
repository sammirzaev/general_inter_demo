@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Water Treatment Service</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Water Treatment Service</li>
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
                            <h4 class="card-title">Edit Water Treatment Service</h4>
                            <h6 class="card-subtitle">Edit Water Treatment Service</h6>
                            {!! Form::model($water_service, ['method'=>'PATCH', 'action'=>['ServiceWaterController@update', $water_service->id], 'class'=>'form-material m-t-40 row', 'files'=>true]) !!}
                            <div class="form-group col-md-12">
                                <div class="fallback">
                                    <input type="file" name="media" id="input-file-now" class="dropify" />
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                             <td><img src="{{$water_service->media}}" alt="Timeline" width="200" class="img-thumbnail"></td>
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::select('type_id', $type_water, null, ['class'=>'form-control', 'id'=>'type_id', 'required']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::select('type_id', $type_water, null, ['class'=>'form-control', 'id'=>'type_id', 'required']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::select('cat_id', $cat_water, null, ['class'=>'form-control', 'id'=>'cat_id', 'required']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::select('cat_id', $cat_water, null, ['class'=>'form-control', 'id'=>'cat_id', 'required']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Update Title', 'id'=>'title']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('title_ar', $water_service->getTranslation('title', 'ar'), ['class'=>'form-control', 'placeholder'=>'Update Title AR', 'id'=>'title']) !!}
                            </div>
                            <div class="form-group col-md-12">
                                {!! Form::label('description', 'Description En') !!}
                                {!! Form::textarea('description', null, ['class'=>'form-control', 'placeholder'=>'Add Description En', 'id'=>'mymce']) !!}
                            </div>
                            <div class="form-group col-md-12">
                                {!! Form::label('description', 'Description Ar') !!}
                                {!! Form::textarea('description_ar', $water_service->getTranslation('description', 'ar'), ['class'=>'form-control', 'placeholder'=>'Add Description Ar', 'id'=>'mymce']) !!}
                            </div>
                            <div class="form-group col-md-12">
                                {!! Form::select('is_publish',array( 1=>'Published', 0=>'Not Published'), null,['class'=>'form-control', 'id'=>'inputStatus']) !!}
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-info"><i class="mdi mdi-file-tree"> Update Water Service</i> </button>
                                <a href="{{route('water-service.index')}}" class="btn btn-pinterest" data-dismiss="modal"><i class="mdi mdi-arrow-left-bold-circle-outline"> Back</i></a>
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

