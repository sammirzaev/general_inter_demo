@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Edit Contact Details</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Contact Details</li>
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
                            <h4 class="card-title">Edit Contact Details</h4>
                            <h6 class="card-subtitle">Edit Contact Details</h6>
                            {!! Form::model($contact, ['method'=>'PATCH', 'action'=>['ContactDetailsController@update', $contact->id], 'class'=>'form-material m-t-40 row', 'files'=>true]) !!}
                            <div class="form-group col-md-6">
                                {!! Form::text('phone_icon', null, ['class'=>'form-control', 'placeholder'=>'Update Phone Icon', 'id'=>'phone_icon']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('address_icon', null, ['class'=>'form-control', 'placeholder'=>'Update Address Icon', 'id'=>'address_icon']) !!}
                            </div>
                            <div class="form-group col-md-12">
                                {!! Form::text('email_icon', null, ['class'=>'form-control', 'placeholder'=>'Update Email Icon', 'id'=>'email_icon']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('phone_title', null, ['class'=>'form-control', 'placeholder'=>'Update Phone Title', 'id'=>'phone_title']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('phone_title_ar', $contact->getTranslation('phone_title', 'ar'), ['class'=>'form-control', 'placeholder'=>'Update Phone Title Ar', 'id'=>'phone_title']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('address_title', null, ['class'=>'form-control', 'placeholder'=>'Update Address Title', 'id'=>'address_title']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('address_title_ar', $contact->getTranslation('address_title', 'ar'), ['class'=>'form-control', 'placeholder'=>'Update Address Title Ar', 'id'=>'address_title']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('email_title', null, ['class'=>'form-control', 'placeholder'=>'Update Email Title', 'id'=>'email_title']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('email_title_ar', $contact->getTranslation('address_title', 'ar'), ['class'=>'form-control', 'placeholder'=>'Update Email Title Ar', 'id'=>'email_title']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('phone', null, ['class'=>'form-control', 'placeholder'=>'Update Phone Number', 'id'=>'phone']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('fax', null, ['class'=>'form-control', 'placeholder'=>'Update FAX Number', 'id'=>'phone']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('address', null, ['class'=>'form-control', 'placeholder'=>'Update Address', 'id'=>'address']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('address_ar', $contact->getTranslation('address_title', 'ar'), ['class'=>'form-control', 'placeholder'=>'Update Address Ar', 'id'=>'address']) !!}
                            </div>
                            <div class="form-group col-md-12">
                                {!! Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Update Email', 'id'=>'email']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::select('is_publish',array( 1=>'Published', 0=>'Not Published'), null,['class'=>'form-control', 'id'=>'inputStatus']) !!}
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-info"><i class="mdi mdi-file-tree"> Update Contact Details</i> </button>
                                <a href="{{route('contact-details.index')}}" class="btn btn-pinterest" data-dismiss="modal"><i class="mdi mdi-arrow-left-bold-circle-outline"> Back</i></a>
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

