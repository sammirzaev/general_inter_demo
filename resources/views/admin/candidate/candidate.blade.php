@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Applied Candidates</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Job Bord Candidate</li>
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
                            <h4 class="card-title">Candidates Page</h4>
                            <h6 class="card-subtitle">Candidates List</h6>
                            @include('layouts.flash-message')
                                <form class="app-search" action="" method="GET">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="search" value="{{isset($search) ? $search : ''}}" placeholder="Search Candidates"> <a class="srh-btn"></a>
                                            </div>
                                            <div class="col-md-2">
                                                <button type="submit" class="btn btn-outline-success">SEARCH</button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mt-5 col-md-offset-6">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            {!! Form::open(['method'=>'DELETE', 'action'=>'CandidateController@deleteAll', 'class'=>'', 'files'=>true]) !!}
                                <div class="row mt-5 ">
                                        <div class="form-group col-md-2">
                                            <select name="checkBoxArray" class="form-control">
                                                <option value="">Bulk Actions</option>
                                                <option value="delete">Delete</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <button type="submit" class="btn btn-outline-danger">
                                                <i class="mdi mdi-delete-forever"></i>
                                            </button>
                                        </div>
                                </div>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>
                                        <div class="checkbox">
                                            <input type="checkbox" class="checkBox" id="checkbox0" value="checkAll">
                                            <label for="checkbox0"></label>
                                        </div>
                                    </th>
                                    <th data-toggle="true"> ID </th>
                                    <th> Position </th>
                                    <th> Full Name </th>
                                    <th> Email </th>
                                    <th> Phone Number </th>
                                    <th> Download CV </th>
                                    <th data-hide="all"> Subject </th>
                                    <th data-hide="all"> Cover Letter </th>
                                    <th data-hide="all"> Created </th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($candidates)
                                    @foreach($candidates as $candidate)
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkBoxes" id="checkbox{{$candidate->id}}" name="checkBoxArray[]" value="{{$candidate->id}}">
                                                    <label for="checkbox{{$candidate->id}}"></label>
                                                </div>
                                            </td>
                                            <td>{{$candidate->id}}</td>
                                            <td>{{$candidate->jobs->job_name}}</td>
                                            <td>{{$candidate->name}}</td>
                                            <td>{{$candidate->email}}</td>
                                            <td>{{$candidate->phone}}</td>
                                            <td><a href="#" class="btn btn-outline-success">{{substr($candidate->file, 0, 10)}}</a></td>
                                            <td>{{substr($candidate->subject, 0, 5)}}</td>
                                            <td>{{$candidate->letter}}</td>
                                            <td>{{$candidate->created_at->diffForHumans()}}</td>
                                            <td>
                                                <a href="#" class="btn btn-outline-danger" name="delete_single" data-candidateid="{{$candidate->id}}" data-toggle="modal" data-target="#candidateContactConfirmDelete">
                                                    <i class="mdi mdi-delete-forever"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @include('admin.candidate.delete')
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                            {!! Form::close() !!}
                            <div class="text-left">
                                {{$candidates->links()}}
                            </div>
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
    <script type="text/javascript">
        $('.checkBox').click(function () {
            if (this.checked){
                $('.checkBoxes').each(function () {
                     this.checked = true;
                });
            }else{
                $('.checkBoxes').each(function () {
                    this.checked = false;
                });
            }
        })
    </script>
@stop
