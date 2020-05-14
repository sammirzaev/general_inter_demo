@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Email Configuration</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Email Section</li>
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
                            <h4 class="card-title">Email Page</h4>
                            <h6 class="card-subtitle">Email Configuration</h6>
                            @include('layouts.flash-message')
                            <button class="btn btn-outline-success" data-toggle="modal" data-target="#emailModal"><i class="mdi mdi-search-web"></i></button>
                            @include('admin.email_config.create')
                            <table id="demo-foo-row-toggler" class="table toggle-circle table-hover">
                                <thead>
                                <tr>
                                    <th data-toggle="true"> ID </th>
                                    <th> HR Email </th>
                                    <th> Career Email </th>
                                    <th> Contact Email </th>
                                    <th> Admin Email </th>
                                    <th> Publish </th>
                                    <th></th>
                                    <th data-hide="all"> Created </th>
                                    <th data-hide="all"> Updated </th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($email_configs)
                                    @foreach($email_configs as $email_config)
                                        <tr>
                                            <td>{{$email_config->id}}</td>
                                            <td>{{substr($email_config->hr_email, 0, 10)}}</td>
                                            <td>{{substr($email_config->career_email, 0, 10)}}</td>
                                            <td>{{substr($email_config->contact_email, 0, 10)}}</td>
                                            <td>{{substr($email_config->admin_email, 0, 10)}}</td>
                                            <td>
                                                @if($email_config->is_publish)
                                                    <span class="label label-table label-success">{{$email_config->is_publish == 1 ? 'Published' : 'Not Published'}}</span>
                                                @else
                                                    <span class="label label-table label-danger">{{$email_config->is_publish == 1 ? 'Published' : 'Not Published'}}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('email-configuration.edit', $email_config->id)}}" class="btn btn-outline-info"><i class="mdi mdi-lead-pencil"></i></a>
                                                <a href="#" class="btn btn-outline-danger" data-emailid="{{$email_config->id}}" data-toggle="modal" data-target="#emailConfirmDelete"><i class="mdi mdi-delete-forever"></i></a>
                                            </td>
                                            <td>{{$email_config->created_at->diffForHumans()}}</td>
                                            <td>{{$email_config->updated_at->diffForHumans()}}</td>
                                        </tr>
                                        @include('admin.email_config.delete')
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
