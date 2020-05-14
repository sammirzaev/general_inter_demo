@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Job Board</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Job Type</li>
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
                            <h4 class="card-title">Job Type Page</h4>
                            <h6 class="card-subtitle">Job Type</h6>
                            @include('layouts.flash-message')
                            <button class="btn btn-outline-success" data-toggle="modal" data-target="#typeModal"><i class="mdi mdi-search-web"></i></button>
                            @include('admin.job-type.create')
                            <table id="demo-foo-row-toggler" class="table toggle-circle table-hover">
                                <thead>
                                <tr>
                                    <th data-toggle="true"> ID </th>
                                    <th> Type </th>
                                    <th> Publish </th>
                                    <th data-hide="all"> Created </th>
                                    <th data-hide="all"> Updated </th>
                                    <th> </th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($types)
                                    @foreach($types as $type)
                                        <tr>
                                            <td>{{$type->id}}</td>
                                            <td>{{$type->name}}</td>
                                            <td>
                                            @if($type->is_publish)
                                                <span class="label label-table label-success">{{$type->is_publish == 1 ? 'Published' : 'Not Published'}}</span>
                                            @else
                                                <span class="label label-table label-danger">{{$type->is_publish == 1 ? 'Published' : 'Not Published'}}</span>
                                            @endif
                                            </td>
                                            <td>{{$type->created_at->diffForHumans()}}</td>
                                            <td>{{$type->updated_at->diffForHumans()}}</td>
                                            <td>
                                                <a href="{{ route('job-type.edit', $type->id)}}" class="btn btn-outline-info"><i class="mdi mdi-lead-pencil"></i></a>
                                                <a href="#" class="btn btn-outline-danger" data-typeid="{{$type->id}}" data-toggle="modal" data-target="#typeConfirmDelete"><i class="mdi mdi-delete-forever"></i></a>
                                            </td>
                                        </tr>
                                        @include('admin.job-type.delete')
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
