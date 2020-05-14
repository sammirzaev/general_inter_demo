@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Career Contact Configuration</h3>
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
                            <h4 class="card-title">Career Contact Page</h4>
                            <h6 class="card-subtitle">Career Contact</h6>
                            @include('layouts.flash-message')
                            <button class="btn btn-outline-success" data-toggle="modal" data-target="#careerContactModal"><i class="mdi mdi-search-web"></i></button>
                            @include('admin.career-contact.create')
                            <table id="demo-foo-row-toggler" class="table toggle-circle table-hover">
                                <thead>
                                <tr>
                                    <th data-toggle="true"> ID </th>
                                    <th> Mail Driver </th>
                                    <th> Mail HOST </th>
                                    <th> Mail Port </th>
                                    <th> Publish </th>
                                    <th></th>
                                    <th data-hide="all"> Mail Username </th>
                                    <th data-hide="all"> Mail Password </th>
                                    <th data-hide="all"> Mail Encryption </th>
                                    <th data-hide="all"> Created </th>
                                    <th data-hide="all"> Updated </th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($career_contacts)
                                    @foreach($career_contacts as $career_contact)
                                        <tr>
                                            <td>{{$career_contact->id}}</td>
                                            <td>{{$career_contact->mail_driver}}</td>
                                            <td>{{$career_contact->mail_host}}</td>
                                            <td>{{$career_contact->mail_port}}</td>
                                            <td>
                                                @if($career_contact->is_publish)
                                                    <span class="label label-table label-success">{{$career_contact->is_publish == 1 ? 'Published' : 'Not Published'}}</span>
                                                @else
                                                    <span class="label label-table label-danger">{{$career_contact->is_publish == 1 ? 'Published' : 'Not Published'}}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('career-contact.edit', $career_contact->id)}}" class="btn btn-outline-info"><i class="mdi mdi-lead-pencil"></i></a>
                                                <a href="#" class="btn btn-outline-danger" data-careerconid="{{$career_contact->id}}" data-toggle="modal" data-target="#careerContactConfirmDelete"><i class="mdi mdi-delete-forever"></i></a>
                                            </td>
                                            <td>{{$career_contact->mail_username}}</td>
                                            <td>{{$career_contact->mail_password}}</td>
                                            <td>{{$career_contact->mail_encryption}}</td>
                                            <td>{{$career_contact->created_at->diffForHumans()}}</td>
                                            <td>{{$career_contact->updated_at->diffForHumans()}}</td>
                                        </tr>
                                        @include('admin.career-contact.delete')
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
