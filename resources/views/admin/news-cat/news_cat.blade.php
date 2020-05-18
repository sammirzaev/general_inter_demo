@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">News & Event Category</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">News & Event Category</li>
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
                            <h4 class="card-title">News & Event Category</h4>
                            <h6 class="card-subtitle">News & Event Category List</h6>
                            @include('layouts.flash-message')
                            @if(Auth::user()->role->name == 'Administrator' || Auth::user()->role->name == 'Editor')
                            <button class="btn btn-outline-success" data-toggle="modal" data-target="#newsCatModal"><i class="mdi mdi-plus-circle-multiple-outline"></i></button>
                            @endif
                            @include('admin.news-cat.create')
                            {!! Form::open(['method'=>'DELETE', 'action'=>'NewsCategoryController@deleteAll', 'class'=>'', 'files'=>true]) !!}
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
                                            <input type="checkbox" class="checkBoxNewsCat" id="checkbox0" value="checkAll">
                                            <label for="checkbox0"></label>
                                        </div>
                                    </th>
                                    <th data-toggle="true"> ID </th>
                                    <th> Title EN</th>
                                    <th> Title AR</th>
                                    <th> Publish </th>
                                    <th> Created </th>
                                    <th> Updated </th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($news_cats)
                                    @foreach($news_cats as $news_cat)
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkBoxes" id="checkbox{{$news_cat->id}}" name="checkBoxArray[]" value="{{$news_cat->id}}">
                                                    <label for="checkbox{{$news_cat->id}}"></label>
                                                </div>
                                            </td>
                                            <td>{{$news_cat->id}}</td>
                                            <td>{{$news_cat->getTranslation('title', 'en')}}</td>
                                            <td>{{$news_cat->getTranslation('title', 'ar')}}</td>
                                            <td>
                                                @if($news_cat->is_publish)
                                                    <span class="label label-table label-success">{{$news_cat->is_publish == 1 ? 'Published' : 'Not Published'}}</span>
                                                @else
                                                    <span class="label label-table label-danger">{{$news_cat->is_publish == 1 ? 'Published' : 'Not Published'}}</span>
                                                @endif
                                            </td>
                                            <td>{{$news_cat->created_at->diffForHumans()}}</td>
                                            <td>{{$news_cat->updated_at->diffForHumans()}}</td>
                                                <td>
                                                    @if(Auth::user()->role->name == 'Administrator' || Auth::user()->role->name == 'Editor')
                                                    <a href="{{ route('news-category.edit', $news_cat->id)}}" class="btn btn-outline-info"><i class="mdi mdi-lead-pencil"></i></a>
                                                    <a href="#" class="btn btn-outline-danger" name="delete_single" data-newscatid="{{$news_cat->id}}" data-toggle="modal" data-target="#newsCatConfirmDelete">
                                                    <i class="mdi mdi-delete-forever"></i>
                                                    </a>
                                                     @endif
                                            </td>
                                        </tr>
                                        @include('admin.news-cat.delete')
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
        $('.checkBoxNewsCat').click(function () {
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
