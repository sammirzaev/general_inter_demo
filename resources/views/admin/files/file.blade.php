@extends('layouts.admin')
@section('styles')
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
@stop
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">File Management</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">File Management</li>
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
                            <h4 class="card-title">File Management Configuration</h4>
                            <h6 class="card-subtitle">File Management</h6>
                            <div style="height: 600px;">
                                <div id="fm"></div>
                            </div>
{{--                            @include('layouts.flash-message')--}}
{{--                            <button class="btn btn-outline-success" data-toggle="modal" data-target="#fileModal"><i class="mdi mdi-search-web"></i></button>--}}
{{--                            @include('admin.files.create')--}}
{{--                            <table id="demo-foo-row-toggler" class="table toggle-circle table-hover">--}}
{{--                                <thead>--}}
{{--                                <tr>--}}
{{--                                    <th data-toggle="true"> ID </th>--}}
{{--                                    <th> Files </th>--}}
{{--                                    <th data-hide="all"> Created </th>--}}
{{--                                    <th data-hide="all"> Updated </th>--}}
{{--                                    <th> </th>--}}
{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody>--}}
{{--                                @if($files)--}}
{{--                                    @foreach($files as $file)--}}
{{--                                        <tr>--}}
{{--                                            <td>{{$file->id}}</td>--}}
{{--                                            <td>{{$file->file}}</td>--}}
{{--                                            <td>{{$file->created_at->diffForHumans()}}</td>--}}
{{--                                            <td>{{$file->updated_at->diffForHumans()}}</td>--}}
{{--                                            <td>--}}
{{--                                                <a href="#" class="btn btn-outline-danger" data-fileid="{{$file->id}}" data-toggle="modal" data-target="#fileConfirmDelete"><i class="mdi mdi-delete-forever"></i></a>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                        @include('admin.files.delete')--}}
{{--                                    @endforeach--}}
{{--                                @endif--}}
{{--                                </tbody>--}}
{{--                            </table>--}}
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
