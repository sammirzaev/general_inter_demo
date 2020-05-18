@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Home Partners</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Partners</li>
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
                            <h4 class="card-title">Edit Home Partners</h4>
                            <h6 class="card-subtitle">Edit Partners</h6>
                            {!! Form::model($home_partner, ['method'=>'PATCH', 'action'=>['HomePartnerController@update', $home_partner->id], 'class'=>'form-material m-t-40 row', 'files'=>true]) !!}
                            <div class="form-group col-md-6">
                                <label for="input-file-now">Background</label>
                                <div class="fallback">
                                    <input type="file" name="background" id="input-file-now" class="dropify" />
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="input-file-now">Logo</label>
                                <div class="fallback">
                                    <input type="file" name="logo" id="input-file-now" class="dropify" />
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                            <td><img src="{{$home_partner->background}}" alt="avatar" width="200" class="img-thumbnail"></td>
                            </div>
                            <div class="form-group col-md-6">
                            <td><img src="{{$home_partner->logo}}" alt="avatar" width="200" class="img-thumbnail"></td>
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Update Title Name', 'id'=>'title']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('title_ar', $home_partner->getTranslation('title', 'ar'), ['class'=>'form-control', 'placeholder'=>'Update Title Name AR', 'id'=>'title']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::select('is_publish',array( 1=>'Published', 0=>'Not Published'), null,['class'=>'form-control', 'id'=>'inputStatus']) !!}
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-info"><i class="mdi mdi-file-tree"> Update Home Banner</i> </button>
                                <a href="{{route('home-partner.index')}}" class="btn btn-pinterest" data-dismiss="modal"><i class="mdi mdi-arrow-left-bold-circle-outline"> Back</i></a>
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

