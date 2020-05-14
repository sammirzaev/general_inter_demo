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
                    <li class="breadcrumb-item active">Edit Career Email</li>
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
                            <h4 class="card-title">Edit Career Email</h4>
                            <h6 class="card-subtitle">Edit Career Email</h6>
                            {!! Form::model($career_contact, ['method'=>'PATCH', 'action'=>['CareerContactController@update', $career_contact->id], 'class'=>'form-material m-t-40 row', 'files'=>true]) !!}
                                <div class="form-group col-md-12">
                                    {!! Form::text('mail_driver', null, ['class'=>'form-control', 'placeholder'=>'Add Mail Driver', 'id'=>'mail_driver']) !!}
                                </div>
                                <div class="form-group col-md-12">
                                    {!! Form::text('mail_host', null, ['class'=>'form-control', 'placeholder'=>'Update Mail HOST', 'id'=>'mail_host']) !!}
                                </div>
                                <div class="form-group col-md-12">
                                    {!! Form::text('mail_port', null, ['class'=>'form-control', 'placeholder'=>'Update Mail PORT', 'id'=>'mail_port']) !!}
                                </div>
                                <div class="form-group col-md-12">
                                    {!! Form::text('mail_username', null, ['class'=>'form-control', 'placeholder'=>'Update Mail Username', 'id'=>'mail_username']) !!}
                                </div>
                                <div class="form-group col-md-12">
                                    {!! Form::text('mail_password', null, ['class'=>'form-control', 'placeholder'=>'Update Mail Password', 'id'=>'mail_password']) !!}
                                </div>
                                <div class="form-group col-md-12">
                                    {!! Form::text('mail_encryption', null, ['class'=>'form-control', 'placeholder'=>'Update Mail Encryption', 'id'=>'mail_encryption']) !!}
                                </div>
                            <div class="form-group col-md-12">
                                {!! Form::select('is_publish',array( 1=>'Published', 0=>'Not Published'), null,['class'=>'form-control', 'id'=>'inputStatus']) !!}
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-info"><i class="mdi mdi-file-tree"> Update Career Email</i> </button>
                                <a href="{{route('career-contact.index')}}" class="btn btn-pinterest" data-dismiss="modal"><i class="mdi mdi-arrow-left-bold-circle-outline"> Back</i></a>
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

