@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Admin Avatars</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Avatars</li>
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
                            <h4 class="card-title">Avatar Page</h4>
                            <h6 class="card-subtitle">Manage avatars</h6>
                            @include('layouts.flash-message')
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="mdi mdi-message-plus"></i></button>
                            @include('admin.photos.media')
                            <table id="demo-foo-row-toggler" class="table toggle-circle table-hover">
                                <thead>
                                <tr>
                                    <th data-toggle="true"> ID </th>
                                    <th> Photo </th>
                                    <th> Name </th>
                                    <th data-hide="all"> Created </th>
                                    <th data-hide="all"> Updated </th>
                                    <th> </th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($photos)
                                    @foreach($photos as $photo)
                                        <tr>
                                            <td>{{$photo->id}}</td>
                                            @if(file_exists(public_path('../public/images/'.$photo->photo)))
                                            <td><img src="{{asset('../public/images/'.$photo->photo)}}" alt="avatar" width="60" class="img-circle"></td>
                                             @else
                                             <td><span class="badge badge-danger">This Avatar belongs to User and User has been removed</span></td>
                                            @endif
                                            @if(file_exists(public_path('../public/images/'.$photo->photo)))
                                            <td>{{$photo->photo}}</td>
                                            @else
                                            <td><span class="badge badge-danger">File has been deleted</span></td>
                                            @endif
                                            <td>{{$photo->created_at->diffForHumans()}}</td>
                                            <td>{{$photo->updated_at->diffForHumans()}}</td>
                                            <td>
                                                <a href="#" class="btn btn-outline-danger" data-photoid="{{$photo->id}}" data-toggle="modal" data-target="#photoConfirmDelete"><i class="mdi mdi-delete-forever"></i></a>
                                            </td>
                                        </tr>
                                        @include('admin.photos.delete')
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

