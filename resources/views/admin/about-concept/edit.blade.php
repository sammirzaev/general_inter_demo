@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Edit About Concept</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">About Concept</li>
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
                            <h4 class="card-title">Edit About Concept</h4>
                            <h6 class="card-subtitle">Edit About Concept</h6>
                            {!! Form::model($about_concept, ['method'=>'PATCH', 'action'=>['AboutConceptController@update', $about_concept->id], 'class'=>'form-material m-t-40 row', 'files'=>true]) !!}
                            <div class="form-group col-md-12">
                                {!! Form::text('icon', null, ['class'=>'form-control', 'placeholder'=>'Update Icon', 'id'=>'icon']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Update Title', 'id'=>'title']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('title_ar', $about_concept->getTranslation('title', 'ar'), ['class'=>'form-control', 'placeholder'=>'Update Title AR', 'id'=>'title']) !!}
                            </div>
                            <div class="form-group col-md-12">
                                {!! Form::textarea('description', null, ['class'=>'form-control', 'placeholder'=>'Update Description', 'id'=>'mymce']) !!}
                            </div>
                            <div class="form-group col-md-12">
                                {!! Form::textarea('description_ar', $about_concept->getTranslation('description', 'ar'), ['class'=>'form-control', 'placeholder'=>'Update Description AR', 'id'=>'mymce']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::select('is_publish',array( 1=>'Published', 0=>'Not Published'), null,['class'=>'form-control', 'id'=>'inputStatus']) !!}
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-info"><i class="mdi mdi-file-tree"> Update About Concept</i> </button>
                                <a href="{{route('about-concept.index')}}" class="btn btn-pinterest" data-dismiss="modal"><i class="mdi mdi-arrow-left-bold-circle-outline"> Back</i></a>
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

