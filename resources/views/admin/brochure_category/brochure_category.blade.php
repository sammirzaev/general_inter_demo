@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Create Brochures Category</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Brochure Category</li>
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
                            <h4 class="card-title">Brochures Category Page</h4>
                            <h6 class="card-subtitle">Brochures Category List</h6>
                            @include('layouts.flash-message')
                            @if(Auth::user()->role->name == 'Administrator' || Auth::user()->role->name == 'Editor')
                            <button class="btn btn-outline-success" data-toggle="modal" data-target="#filterModal"><i class="mdi mdi-plus-circle-multiple-outline"></i></button>
                            @endif
                            @include('admin.brochure_category.create')
                                <form class="app-search" action="" method="GET">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="search" value="{{isset($search) ? $search : ''}}" placeholder="Search Categories"> <a class="srh-btn"></a>
                                            </div>
                                            <div class="col-md-2">
                                                <button type="submit" class="btn btn-outline-success">SEARCH</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            {!! Form::open(['method'=>'DELETE', 'action'=>'FilterBrochureController@deleteAll', 'class'=>'', 'files'=>true]) !!}
                            @if(Auth::user()->role->name == 'Administrator' || Auth::user()->role->name == 'Editor')
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
                                            <input type="checkbox" class="checkBoxFilter" id="checkbox0" value="checkAll">
                                            <label for="checkbox0"></label>
                                        </div>
                                    </th>
                                    <th data-toggle="true"> ID </th>
                                    <th> Category EN</th>
                                    <th> Category AR</th>
                                    <th> Publish </th>
                                    <th> Created </th>
                                    <th> Updated </th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($brochure_filters)
                                    @foreach($brochure_filters as $brochure_filter)
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkBoxes" id="checkbox{{$brochure_filter->id}}" name="checkBoxArray[]" value="{{$brochure_filter->id}}">
                                                    <label for="checkbox{{$brochure_filter->id}}"></label>
                                                </div>
                                            </td>
                                            <td>{{$brochure_filter->id}}</td>
                                            <td>{{$brochure_filter->getTranslation('filter', 'en')}}</td>
                                            <td>{{$brochure_filter->getTranslation('filter', 'ar')}}</td>
                                            <td></td>
                                            <td>{{$brochure_filter->created_at->diffForHumans()}}</td>
                                            <td>{{$brochure_filter->updated_at->diffForHumans()}}</td>
                                                <td>
                                                    @if(Auth::user()->role->name == 'Administrator' || Auth::user()->role->name == 'Editor')
                                                    <a href="{{ route('brochure-filter.edit', $brochure_filter->id)}}" class="btn btn-outline-info"><i class="mdi mdi-lead-pencil"></i></a>
                                                    <a href="#" class="btn btn-outline-danger" name="delete_single" data-filterid="{{$brochure_filter->id}}" data-toggle="modal" data-target="#filterContactConfirmDelete">
                                                    <i class="mdi mdi-delete-forever"></i>
                                                    </a>
                                                    @endif
                                            </td>
                                        </tr>
                                        @include('admin.brochure_category.delete')
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                            {!! Form::close() !!}
                            <div class="text-left">
                                {{$brochure_filters->links()}}
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
        $('.checkBoxFilter').click(function () {
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
