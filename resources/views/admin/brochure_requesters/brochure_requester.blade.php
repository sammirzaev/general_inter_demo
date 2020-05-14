@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Brochure Requests</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Brochure Requests</li>
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
                            <h4 class="card-title">Brochure Requests Page</h4>
                            <h6 class="card-subtitle">Brochure Requests List</h6>
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
                                    </div>
                                </form>
                            {!! Form::open(['method'=>'DELETE', 'action'=>'BrochureRequestController@deleteAll', 'class'=>'', 'files'=>true]) !!}
                                <div class="row mt-5 ml-2">
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
                                            <input type="checkbox" class="checkBoxRequest" id="checkbox0" value="checkAll">
                                            <label for="checkbox0"></label>
                                        </div>
                                    </th>
                                    <th data-toggle="true"> ID </th>
                                    <th> Brochure Name </th>
                                    <th> Full Name</th>
                                    <th> Email</th>
                                    <th> Phone Number</th>
                                    <th> Created </th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($brochure_requests)
                                    @foreach($brochure_requests as $brochure_request)
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkBoxes" id="checkbox{{$brochure_request->id}}" name="checkBoxArray[]" value="{{$brochure_request->id}}">
                                                    <label for="checkbox{{$brochure_request->id}}"></label>
                                                </div>
                                            </td>
                                            <td>{{$brochure_request->id}}</td>
                                            <td>{{$brochure_request->brochure->brochure_name}}</td>
                                            <td>{{$brochure_request->requester_name}}</td>
                                            <td>{{$brochure_request->requester_email}}</td>
                                            <td>{{$brochure_request->requester_phone}}</td>
                                            <td>{{$brochure_request->created_at->diffForHumans()}}</td>
                                                <td>
                                                    <a href="#" class="btn btn-outline-danger" name="delete_single" data-requestid="{{$brochure_request->id}}" data-toggle="modal" data-target="#requestContactConfirmDelete">
                                                    <i class="mdi mdi-delete-forever"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @include('admin.brochure_requesters.delete')
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                            {!! Form::close() !!}
                            <div class="text-left">
                                {{$brochure_requests->links()}}
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
     {{-- ======================= Check Box Bulk Deletion Select All Function ===================== --}}
        $('.checkBoxRequest').click(function () {
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
 {{-- ======================= End Check Box Bulk Deletion Select All Function ===================== --}}
    </script>
@stop
