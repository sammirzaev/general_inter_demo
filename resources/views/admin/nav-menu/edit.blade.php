@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Navigation Menu Management</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Edit Nav Menu</li>
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
                            <h4 class="card-title">Edit Nav Menu</h4>
                            <h6 class="card-subtitle">Edit  Nav Menu</h6>
                            {!! Form::model($nav_menu, ['method'=>'PATCH', 'action'=>['NavMenuController@update', $nav_menu->id], 'class'=>'form-material m-t-40 row', 'files'=>true]) !!}
                            <div class="form-group col-md-6">
                                {!! Form::text('home', null, ['class'=>'form-control', 'placeholder'=>'Update Home Nav', 'id'=>'home']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('home_ar', $nav_menu->getTranslation('home', 'ar'), ['class'=>'form-control', 'placeholder'=>'Update Home Nav Ar', 'id'=>'home']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('about', null, ['class'=>'form-control', 'placeholder'=>'Update About Nav', 'id'=>'about']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('about_ar', $nav_menu->getTranslation('about', 'ar'), ['class'=>'form-control', 'placeholder'=>'Update About Nav Ar', 'id'=>'about']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('what_we_do', null, ['class'=>'form-control', 'placeholder'=>'Update What We Do Nav', 'id'=>'what_we_do']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('what_we_do_ar', $nav_menu->getTranslation('what_we_do', 'ar'), ['class'=>'form-control', 'placeholder'=>'Update What We Do Nav Ar', 'id'=>'what_we_do']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('fire', null, ['class'=>'form-control', 'placeholder'=>'Update Fire Nav', 'id'=>'fire']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('fire_ar', $nav_menu->getTranslation('fire', 'ar'), ['class'=>'form-control', 'placeholder'=>'Update Fire Nav Ar', 'id'=>'fire']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('security', null, ['class'=>'form-control', 'placeholder'=>'Update Security Nav', 'id'=>'security']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('security_ar', $nav_menu->getTranslation('about', 'ar'), ['class'=>'form-control', 'placeholder'=>'Update Security Nav Ar', 'id'=>'security']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('water', null, ['class'=>'form-control', 'placeholder'=>'Update Water Nav', 'id'=>'water']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('water_ar', $nav_menu->getTranslation('water', 'ar'), ['class'=>'form-control', 'placeholder'=>'Update Water Nav Ar', 'id'=>'water']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('facility', null, ['class'=>'form-control', 'placeholder'=>'Update Facility Nav', 'id'=>'facility']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('facility_ar', $nav_menu->getTranslation('about', 'ar'), ['class'=>'form-control', 'placeholder'=>'Update Facility Nav Ar', 'id'=>'facility']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('projects', null, ['class'=>'form-control', 'placeholder'=>'Update Projects Nav', 'id'=>'projects']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('projects_ar', $nav_menu->getTranslation('projects', 'ar'), ['class'=>'form-control', 'placeholder'=>'Update Projects Nav Ar', 'id'=>'projects']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('insights', null, ['class'=>'form-control', 'placeholder'=>'Update Insights Nav', 'id'=>'insights']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('insights_ar', $nav_menu->getTranslation('about', 'ar'), ['class'=>'form-control', 'placeholder'=>'Update Insights Nav Ar', 'id'=>'insights']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('news', null, ['class'=>'form-control', 'placeholder'=>'Update News Nav', 'id'=>'news']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('news_ar', $nav_menu->getTranslation('news', 'ar'), ['class'=>'form-control', 'placeholder'=>'Update News Nav Ar', 'id'=>'news']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('case', null, ['class'=>'form-control', 'placeholder'=>'Update Case Study Nav', 'id'=>'case']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('case_ar', $nav_menu->getTranslation('case', 'ar'), ['class'=>'form-control', 'placeholder'=>'Update Case Study Nav Ar', 'id'=>'case']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('contact', null, ['class'=>'form-control', 'placeholder'=>'Update Contact Nav', 'id'=>'contact']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('contact_ar', $nav_menu->getTranslation('contact', 'ar'), ['class'=>'form-control', 'placeholder'=>'Update Contact Nav Ar', 'id'=>'contact']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('search', null, ['class'=>'form-control', 'placeholder'=>'Update Search Nav', 'id'=>'search']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('search_ar', $nav_menu->getTranslation('search', 'ar'), ['class'=>'form-control', 'placeholder'=>'Update Search Nav Ar', 'id'=>'search']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('lang', null, ['class'=>'form-control', 'placeholder'=>'Update Language Nav', 'id'=>'lang']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('lang_ar', $nav_menu->getTranslation('lang', 'ar'), ['class'=>'form-control', 'placeholder'=>'Update Language Nav Ar', 'id'=>'lang']) !!}
                            </div>
                            <div class="form-group col-md-12">
                                {!! Form::select('is_publish',array( 1=>'Published', 0=>'Not Published'), null,['class'=>'form-control', 'id'=>'inputStatus']) !!}
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-info"><i class="mdi mdi-file-tree"> Update Nav Menu</i> </button>
                                <a href="{{route('nav-menu.index')}}" class="btn btn-pinterest" data-dismiss="modal"><i class="mdi mdi-arrow-left-bold-circle-outline"> Back</i></a>
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

