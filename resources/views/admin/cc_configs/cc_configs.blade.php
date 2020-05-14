@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Email CC Configuration</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Email CC Section</li>
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
                            <h4 class="card-title">Email CC Page</h4>
                            <h6 class="card-subtitle">Email CC Configuration</h6>
                            @include('layouts.flash-message')
                            <button class="btn btn-outline-success" data-toggle="modal" data-target="#ccModal"><i class="mdi mdi-search-web"></i></button>
                            @include('admin.cc_configs.create')
                            <table id="demo-foo-row-toggler" class="table toggle-circle table-hover">
                                <thead>
                                <tr>
                                    <th data-toggle="true"> ID </th>
                                    <th> CC Email </th>
                                    <th> Publish </th>
                                    <th></th>
                                    <th data-hide="all"> Created </th>
                                    <th data-hide="all"> Updated </th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($cc_configs)
                                    @foreach($cc_configs as $cc_config)
                                        <tr>
                                            <td>{{$cc_config->id}}</td>
                                            <td>{{$cc_config->mail}}</td>
                                            <td>
                                                @if($cc_config->is_publish)
                                                    <span class="label label-table label-success">{{$cc_config->is_publish == 1 ? 'Published' : 'Not Published'}}</span>
                                                @else
                                                    <span class="label label-table label-danger">{{$cc_config->is_publish == 1 ? 'Published' : 'Not Published'}}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('cc-configuration.edit', $cc_config->id)}}" class="btn btn-outline-info"><i class="mdi mdi-lead-pencil"></i></a>
                                                <a href="#" class="btn btn-outline-danger" data-ccid="{{$cc_config->id}}" data-toggle="modal" data-target="#ccConfirmDelete"><i class="mdi mdi-delete-forever"></i></a>
                                            </td>
                                            <td>{{$cc_config->created_at->diffForHumans()}}</td>
                                            <td>{{$cc_config->updated_at->diffForHumans()}}</td>
                                        </tr>
                                        @include('admin.cc_configs.delete')
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
