@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">SEO Google Verification</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Google Verification</li>
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
                            <h4 class="card-title">Google Verification Config Page</h4>
                            <h6 class="card-subtitle">Google Verification SEO</h6>
                            @include('layouts.flash-message')
                            <button class="btn btn-outline-success" data-toggle="modal" data-target="#googleVerifyModal"><i class="mdi mdi-search-web"></i></button>
                            @include('admin.google-verification.create')
                            <table id="demo-foo-row-toggler" class="table toggle-circle table-hover">
                                <thead>
                                <tr>
                                    <th data-toggle="true"> ID </th>
                                    <th> Google Verification </th>
                                    <th> Publish </th>
                                    <th data-hide="all"> Created </th>
                                    <th data-hide="all"> Updated </th>
                                    <th> </th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($verifications)
                                    @foreach($verifications as $verification)
                                        <tr>
                                            <td>{{$verification->id}}</td>
                                            <td>{{$verification->verify}}</td>
                                            <td>
                                            @if($verification->is_publish)
                                                <span class="label label-table label-success">{{$verification->is_publish == 1 ? 'Published' : 'Not Published'}}</span>
                                            @else
                                                <span class="label label-table label-danger">{{$verification->is_publish == 1 ? 'Published' : 'Not Published'}}</span>
                                            @endif
                                            </td>
                                            <td>{{$verification->created_at->diffForHumans()}}</td>
                                            <td>{{$verification->updated_at->diffForHumans()}}</td>
                                            <td>
                                                <a href="{{ route('verification.edit', $verification->id)}}" class="btn btn-outline-info"><i class="mdi mdi-lead-pencil"></i></a>
                                                <a href="#" class="btn btn-outline-danger" data-verifyid="{{$verification->id}}" data-toggle="modal" data-target="#verifyConfirmDelete"><i class="mdi mdi-delete-forever"></i></a>
                                            </td>
                                        </tr>
                                        @include('admin.google-verification.delete')
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
