@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Security & ELV Category</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Security & ELV Category</li>
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
                            <h4 class="card-title">Security & ELV Category</h4>
                            <h6 class="card-subtitle">Security & ELV Category List</h6>
                            @include('layouts.flash-message')
                            @if(Auth::user()->role->name == 'Administrator' || Auth::user()->role->name == 'Editor')
                            <button class="btn btn-outline-success" data-toggle="modal" data-target="#securityCatModal"><i class="mdi mdi-plus-circle-multiple-outline"></i></button>
                            @endif
                            @include('admin.category-security.create')
                            {!! Form::open(['method'=>'DELETE', 'action'=>'CategorySecurityController@deleteAll', 'class'=>'', 'files'=>true]) !!}
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
                                            <input type="checkbox" class="checkBoxSecurityCat" id="checkbox0" value="checkAll">
                                            <label for="checkbox0"></label>
                                        </div>
                                    </th>
                                    <th data-toggle="true"> ID </th>
                                    <th> Type EN</th>
                                    <th> Type AR</th>
                                    <th> Title EN</th>
                                    <th> Title AR</th>
                                    <th> Publish </th>
                                    <th> Created </th>
                                    <th> Updated </th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($security_categories)
                                    @foreach($security_categories as $security_category)
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkBoxes" id="checkbox{{$security_category->id}}" name="checkBoxArray[]" value="{{$security_category->id}}">
                                                    <label for="checkbox{{$security_category->id}}"></label>
                                                </div>
                                            </td>
                                            <td>{{$security_category->id}}</td>
                                            <td>{{$security_category->type->getTranslation('title', 'en')}}</td>
                                            <td>{{$security_category->type->getTranslation('title', 'ar')}}</td>
                                            <td>{{$security_category->getTranslation('title', 'en')}}</td>
                                            <td>{{$security_category->getTranslation('title', 'ar')}}</td>
                                             <td>
                                               @if($security_category->is_publish)
                                                  <span class="label label-table label-success">{{$security_category->is_publish == 1 ? 'Published' : 'Not Published'}}</span>
                                               @else
                                                  <span class="label label-table label-danger">{{$security_category->is_publish == 1 ? 'Published' : 'Not Published'}}</span>
                                               @endif
                                             </td>
                                            <td>{{$security_category->created_at->diffForHumans()}}</td>
                                            <td>{{$security_category->updated_at->diffForHumans()}}</td>
                                                <td>
                                                    @if(Auth::user()->role->name == 'Administrator' || Auth::user()->role->name == 'Editor')
                                                    <a href="{{ route('security-category.edit', $security_category->id)}}" class="btn btn-outline-info"><i class="mdi mdi-lead-pencil"></i></a>
                                                    @endif
                                                    @if(Auth::user()->role->name == 'Administrator')
                                                    <a href="#" class="btn btn-outline-danger" name="delete_single" data-securitycatid="{{$security_category->id}}" data-toggle="modal" data-target="#securityCatConfirmDelete">
                                                    <i class="mdi mdi-delete-forever"></i>
                                                    </a>
                                                     @endif
                                            </td>
                                        </tr>
                                        @include('admin.category-security.delete')
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                            {!! Form::close() !!}
                            <div class="text-left">

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
    <script src="https://js.pusher.com/5.1/pusher.min.js"></script>
    <script type="text/javascript">
        $('.checkBoxSecurityCat').click(function () {
            if (this.checked){
                $('.checkBoxes').each(function () {
                     this.checked = true;
                });
            }else{
                $('.checkBoxes').each(function () {
                    this.checked = false;
                });
            }
        });
    </script>

@stop
