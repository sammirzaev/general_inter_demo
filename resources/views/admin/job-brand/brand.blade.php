@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Admin Job Brands</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Job Brands</li>
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
                <div class="col-md-12">
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Job Brands Page</h4>
                            <h6 class="card-subtitle">Manage Job Brands</h6>
                            @include('layouts.flash-message')
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#brandModal" data-whatever="@mdo"><i class="mdi mdi-message-plus"></i></button>
                            @include('admin.job-brand.create')
                            <table id="demo-foo-row-toggler" class="table toggle-circle table-hover">
                                <thead>
                                <tr>
                                    <th data-toggle="true"> ID </th>
                                    <th> Brand </th>
                                    <th> Brand Name </th>
                                    <th> Publish </th>
                                    <th data-hide="all"> Created </th>
                                    <th data-hide="all"> Updated </th>
                                    <th> </th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($brands)
                                    @foreach($brands as $brand)
                                        <tr>
                                            <td>{{$brand->id}}</td>
                                            <td><img src="{{$brand->brand ? asset('../public/brands/'.$brand->brand->name) : asset('public/assets/admin/assets/images/no-logo.jpg')}}" alt="{{$brand->brand_name}}" width="60" class="img-thumbnail"></td>
                                            <td>{{$brand->brand_name}}</td>
                                            <td>
                                                @if($brand->is_publish)
                                                    <span class="label label-table label-success">{{$brand->is_publish == 1 ? 'Published' : 'Not Published'}}</span>
                                                @else
                                                    <span class="label label-table label-danger">{{$brand->is_publish == 1 ? 'Published' : 'Not Published'}}</span>
                                                @endif
                                            </td>
                                            <td>{{$brand->created_at->diffForHumans()}}</td>
                                            <td>{{$brand->updated_at->diffForHumans()}}</td>
                                            <td>
                                                <a href="{{ route('job-brand.edit', $brand->id)}}" class="btn btn-outline-info"><i class="mdi mdi-lead-pencil"></i></a>
                                                <a href="#" class="btn btn-outline-danger" data-brandid="{{$brand->id}}" data-toggle="modal" data-target="#brandConfirmDelete"><i class="mdi mdi-delete-forever"></i></a>
                                            </td>
                                        </tr>
                                        @include('admin.job-brand.delete')
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

