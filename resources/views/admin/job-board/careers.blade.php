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
                    <li class="breadcrumb-item active">Job Bord Section</li>
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
                            <h4 class="card-title">Job Board Page</h4>
                            <h6 class="card-subtitle">Job Board</h6>
                            @include('layouts.flash-message')
                            <button class="btn btn-outline-success" data-toggle="modal" data-target="#careerModal"><i class="mdi mdi-search-web"></i></button>
                            @include('admin.job-board.create')
                            <table id="demo-foo-row-toggler" class="table toggle-circle table-hover">
                                <thead>
                                <tr>
                                    <th data-toggle="true"> ID </th>
                                    <th> Brand </th>
                                    <th> Categories </th>
                                    <th> Job Name </th>
                                    <th> Type </th>
                                    <th> Publish </th>
                                    <th></th>
                                    <th data-hide="all"> Location </th>
                                    <th data-hide="all"> Title </th>
                                    <th data-hide="all"> Salary </th>
                                    <th data-hide="all"> Description </th>
                                    <th data-hide="all"> Created </th>
                                    <th data-hide="all"> Updated </th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($careers)
                                    @foreach($careers as $career)
                                        <tr>
                                            <td>{{$career->id}}</td>
                                            <td><img width="100" src="{{$career->brand ? asset('../public/brands/'.$career->brand->brand->name) : asset('public/assets/admin/assets/images/no-logo.jpg')}}" alt="$career->brand->brand->name" class="img-thumbnail"></td>
                                            <td>{{$career->categories->pluck('name')->implode(' | ')}}</td>
                                            <td>{{$career->job_name}}</td>
                                            <td>{{$career->type->name}}</td>
                                            <td>
                                                @if($career->is_publish)
                                                    <span class="label label-table label-success">{{$career->is_publish == 1 ? 'Published' : 'Not Published'}}</span>
                                                @else
                                                    <span class="label label-table label-danger">{{$career->is_publish == 1 ? 'Published' : 'Not Published'}}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('job-board.edit', $career->id)}}" class="btn btn-outline-info"><i class="mdi mdi-lead-pencil"></i></a>
                                                <a href="#" class="btn btn-outline-danger" data-careerid="{{$career->id}}" data-toggle="modal" data-target="#careerConfirmDelete"><i class="mdi mdi-delete-forever"></i></a>
                                            </td>
                                            <td>{{$career->location->name}}</td>
                                            <td>{{$career->job_title}}</td>
                                            <td>{{$career->salary->name}}</td>
                                            <td>{{substr($career->job_desc, 0, 100) }}</td>
                                            <td>{{$career->created_at->diffForHumans()}}</td>
                                            <td>{{$career->updated_at->diffForHumans()}}</td>
                                        </tr>
                                        @include('admin.job-board.delete')
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
@section('scripts')
    <script>
        $('.modal-backdrop').remove();
    </script>
@stop
