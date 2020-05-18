@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">About Story Category</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Edit About Story Category</li>
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
                            <h4 class="card-title">Edit About Timeline Category</h4>
                            <h6 class="card-subtitle">Edit About Timeline Category</h6>
                            {!! Form::model($about_timeline_cat, ['method'=>'PATCH', 'action'=>['AboutTimelineCatController@update', $about_timeline_cat->id], 'class'=>'form-material m-t-40 row', 'files'=>true]) !!}
                            <div class="form-group col-md-6">
                                {!! Form::select('story_id', $story, null, ['class'=>'form-control', 'id'=>'story_id', 'required']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::select('story_id', $story, null, ['class'=>'form-control', 'id'=>'story_id', 'required']) !!}
                            </div>
                            <div class="form-group col-md-12">
                                {!! Form::text('year', null, ['class'=>'form-control', 'placeholder'=>'Update Year', 'id'=>'year']) !!}
                            </div>
                            <div class="form-group col-md-12">
                                {!! Form::text('year_ar', $about_timeline_cat->getTranslation('year', 'ar'), ['class'=>'form-control', 'placeholder'=>'Update Year AR', 'id'=>'year']) !!}
                            </div>
                            <div class="form-group col-md-12">
                                {!! Form::text('date', null, ['class'=>'form-control', 'placeholder'=>'mm/dd/yyyy', 'id'=>'date']) !!}
                            </div>
                            <div class="form-group col-md-12">
                                {!! Form::select('is_publish',array( 1=>'Published', 0=>'Not Published'), null,['class'=>'form-control', 'id'=>'inputStatus']) !!}
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-info"><i class="mdi mdi-file-tree"> Update Timeline Category</i> </button>
                                <a href="{{route('about-timeline-cat.index')}}" class="btn btn-pinterest" data-dismiss="modal"><i class="mdi mdi-arrow-left-bold-circle-outline"> Back</i></a>
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

