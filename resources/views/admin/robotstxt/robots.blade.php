@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">SEO Robots Engine</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Robots Engine</li>
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
                            <h4 class="card-title">Robots Engine Config Page</h4>
                            <h6 class="card-subtitle">Robots TXT Engine SEO (Please kindly note this engine sensitive and
                                do not touch if you do not understand or else it will be under your responsibilities, before doing changes please kindly do back up application)</h6>
                            @include('layouts.flash-message')
                            <button class="btn btn-outline-success" data-toggle="modal" data-target="#robotModal"><i class="mdi mdi-search-web"></i></button>
                            @include('admin.robotstxt.create')
                            <table id="demo-foo-row-toggler" class="table toggle-circle table-hover">
                                <thead>
                                <tr>
                                    <th data-toggle="true"> ID </th>
                                    <th> Robots </th>
                                    <th> Publish </th>
                                    <th data-hide="all"> Created </th>
                                    <th data-hide="all"> Updated </th>
                                    <th> </th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($robots)
                                    @foreach($robots as $robot)
                                        <tr>
                                            <td>{{$robot->id}}</td>
                                            <td>{{$robot->robots}}</td>
                                            <td>
                                            @if($robot->is_publish)
                                                <span class="label label-table label-success">{{$robot->is_publish == 1 ? 'Published' : 'Not Published'}}</span>
                                            @else
                                                <span class="label label-table label-danger">{{$robot->is_publish == 1 ? 'Published' : 'Not Published'}}</span>
                                            @endif
                                            </td>
                                            <td>{{$robot->created_at->diffForHumans()}}</td>
                                            <td>{{$robot->updated_at->diffForHumans()}}</td>
                                            <td>
                                                <a href="{{ route('robots.edit', $robot->id)}}" class="btn btn-outline-info"><i class="mdi mdi-lead-pencil"></i></a>
                                                <a href="#" class="btn btn-outline-danger" data-robotid="{{$robot->id}}" data-toggle="modal" data-target="#robotConfirmDelete"><i class="mdi mdi-delete-forever"></i></a>
                                            </td>
                                        </tr>
                                        @include('admin.robotstxt.delete')
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
