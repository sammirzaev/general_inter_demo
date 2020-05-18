@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Admin Users</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
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
                        <h4 class="card-title">Users Page</h4>
                        <h6 class="card-subtitle">Manage Users</h6>
                        @include('layouts.flash-message')
                        <button class="btn btn-outline-success" data-toggle="modal" data-target="#userModal"><i class="mdi mdi-lock-plus"></i></button>
                        @include('admin.users.create')
                        <table id="demo-foo-row-toggler" class="table toggle-circle table-hover">
                            <thead>
                            <tr>
                                <th data-toggle="true"> ID </th>
                                <th> Avatar </th>
                                <th> Full Name </th>
                                <th data-hide="email"> Email </th>
                                <th data-hide="all"> Password </th>
                                <th data-hide="all"> Position </th>
                                <th data-hide="all"> Role </th>
                                <th data-hide="all"> Status </th>
                                <th data-hide="all"> Created </th>
                                <th data-hide="all"> Updated </th>
                                <th> </th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($users)
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td><img src="{{$user->photo ? asset('images/'.$user->photo->photo) : asset('assets/admin/assets/images/no-avatar.png')}}" alt="avatar" width="50" class="img-circle"></td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{substr($user->password, 0, 10)}}</td>
                                <td>{{$user->position->name}}</td>
                                <td>{{$user->role->name}}</td>
                                <td>
                                    @if($user->is_active == 1)
                                    <span class="label label-table label-success">{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</span>
                                        @else
                                        <span class="label label-table label-danger">{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</span>
                                    @endif
                                </td>
                                <td>{{$user->created_at->diffForHumans()}}</td>
                                <td>{{$user->updated_at->diffForHumans()}}</td>
                                <td>
                                    <a href="{{ route('users.edit', $user->id)}}" class="btn btn-outline-info"><i class="mdi mdi-lead-pencil"></i></a>
                                    <button href="#" class="btn btn-outline-danger" data-userid="{{$user->id}}" data-toggle="modal" data-target="#userConfirmDelete"><i class="mdi mdi-delete-forever"></i></button>
                                </td>
                            </tr>
                                @include('admin.users.delete')
                            @endforeach
                            @endif
                            </tbody>
                        </table>
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

