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
                    <li class="breadcrumb-item"><a href="javascript:void(0)"></a></li>
                    <li class="breadcrumb-item active">Users</li>
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
                <div class="col-12">
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Users Page</h4>
                            <h6 class="card-subtitle">Edit Admin Users</h6>
                            {!! Form::model($user, ['method'=>'PATCH', 'action'=>['UserController@update', $user->id], 'class'=>'form-material m-t-40 row', 'files'=>true]) !!}
                            <div class="form-group col-md-6">
                                {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Email', 'id'=>'email']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Password', 'id'=>'password']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Full Name', 'id'=>'full_name']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::select('role_id', $roles, null, ['class'=>'form-control', 'id'=>'inputRole']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::select('position_id', $positions, null, ['class'=>'form-control', 'id'=>'inputPosition']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::select('is_active',array( 1=>'Active', 0=>'Not Active'), null,['class'=>'form-control', 'id'=>'inputStatus']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                <img  class="img-circle" src="{{ $user->photo ? asset('public/images/'.$user->photo['photo']) : asset('public/assets/admin/assets/images/no-avatar.png')}}" alt="Avatar" width="100">
                            </div>
                            <div class="form-group col-md-6">
                                <div class="fallback">
                                    <input type="file" name="photo_id" id="input-file-now" class="dropify"/>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-info"><i class="mdi mdi-file-tree"> Update User</i> </button>
                                <a href="{{route('users.index')}}" class="btn btn-pinterest" data-dismiss="modal"><i class="mdi mdi-arrow-left-bold-circle-outline"> Back</i></a>
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

