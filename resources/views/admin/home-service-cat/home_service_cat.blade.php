@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Create Home Service Category</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Home Service Category</li>
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
                            <h4 class="card-title">Home Service Category Page</h4>
                            <h6 class="card-subtitle">Home Service Category List</h6>
                            @include('layouts.flash-message')
                            @if(Auth::user()->role->name == 'Administrator' || Auth::user()->role->name == 'Editor')
                            <button class="btn btn-outline-success" data-toggle="modal" data-target="#homeServiceModal"><i class="mdi mdi-plus-circle-multiple-outline"></i></button>
                            @endif
                            @include('admin.home-service-cat.create')
                            {!! Form::open(['method'=>'DELETE', 'action'=>'HomeServiceCatController@deleteAll', 'class'=>'', 'files'=>true]) !!}
                            @if(Auth::user()->role->name == 'Administrator')
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
                            @endif
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>
                                        <div class="checkbox">
                                            <input type="checkbox" class="checkBoxServiceCat" id="checkbox0" value="checkAll">
                                            <label for="checkbox0"></label>
                                        </div>
                                    </th>
                                    <th data-toggle="true"> ID </th>
                                    <th> Category EN</th>
                                    <th> Category AR</th>
                                    <th> ICON </th>
                                    <th> Publish </th>
                                    <th> Created </th>
                                    <th> Updated </th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($home_service_cats)
                                    @foreach($home_service_cats as $home_service_cat)
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkBoxes" id="checkbox{{$home_service_cat->id}}" name="checkBoxArray[]" value="{{$home_service_cat->id}}">
                                                    <label for="checkbox{{$home_service_cat->id}}"></label>
                                                </div>
                                            </td>
                                            <td>{{$home_service_cat->id}}</td>
                                            <td>{{$home_service_cat->getTranslation('name', 'en')}}</td>
                                            <td>{{$home_service_cat->getTranslation('name', 'ar')}}</td>
                                            <td>{{substr($home_service_cat->icon, 0, 10)}}</td>
                                            <td>
                                                @if($home_service_cat->is_publish)
                                                    <span class="label label-table label-success">{{$home_service_cat->is_publish == 1 ? 'Published' : 'Not Published'}}</span>
                                                @else
                                                    <span class="label label-table label-danger">{{$home_service_cat->is_publish == 1 ? 'Published' : 'Not Published'}}</span>
                                                @endif
                                            </td>
                                            <td>{{$home_service_cat->created_at->diffForHumans()}}</td>
                                            <td>{{$home_service_cat->updated_at->diffForHumans()}}</td>
                                                <td>
                                                    @if(Auth::user()->role->name == 'Administrator' || Auth::user()->role->name == 'Editor')
                                                    <a href="{{ route('home-service-cat.edit', $home_service_cat->id)}}" class="btn btn-outline-info"><i class="mdi mdi-lead-pencil"></i></a>
                                                    @endif
                                                    @if(Auth::user()->role->name == 'Administrator')
                                                    <a href="#" class="btn btn-outline-danger" name="delete_single" data-servicecatid="{{$home_service_cat->id}}" data-toggle="modal" data-target="#serviceCatConfirmDelete">
                                                    <i class="mdi mdi-delete-forever"></i>
                                                    </a>
                                                    @endif
                                            </td>
                                        </tr>
                                        @include('admin.home-service-cat.delete')
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                            {!! Form::close() !!}
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
        $('.checkBoxServiceCat').click(function () {
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
