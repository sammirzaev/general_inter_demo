@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Create About Banner</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">About Banner</li>
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
                            <h4 class="card-title">About Banner Page</h4>
                            <h6 class="card-subtitle">About Banner</h6>
                            @include('layouts.flash-message')
                            @if(Auth::user()->role->name == 'Administrator' || Auth::user()->role->name == 'Editor')
                            <button class="btn btn-outline-success" data-toggle="modal" data-target="#aboutBannerModal"><i class="mdi mdi-plus-circle-multiple-outline"></i></button>
                            @endif
                            @include('admin.about-banner.create')
                            {!! Form::open(['method'=>'DELETE', 'action'=>'AboutBannerController@deleteAll', 'class'=>'', 'files'=>true]) !!}
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
                                            <input type="checkbox" class="checkBoxAboutBanner" id="checkbox0" value="checkAll">
                                            <label for="checkbox0"></label>
                                        </div>
                                    </th>
                                    <th data-toggle="true"> ID </th>
                                    <th> Banner </th>
                                    <th> Head Title EN</th>
                                    <th> Head Title AR</th>
                                    <th> Title EN</th>
                                    <th> Title AR</th>
                                    <th> Publish </th>
                                    <th> Created </th>
                                    <th> Updated </th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($about_banners)
                                    @foreach($about_banners as $about_banner)
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkBoxes" id="checkbox{{$about_banner->id}}" name="checkBoxArray[]" value="{{$about_banner->id}}">
                                                    <label for="checkbox{{$about_banner->id}}"></label>
                                                </div>
                                            </td>
                                            <td>{{$about_banner->id}}</td>
                                            @if( App\AboutBanner::where('banner'))
                                                <td><img src="{{$about_banner->banner}}" alt="Banner" width="80" class="img-thumbnail"></td>
                                            @else
                                                <td><span class="badge badge-danger">No Banner</span></td>
                                            @endif
                                            <td>{{$about_banner->getTranslation('head_title', 'en')}}</td>
                                            <td>{{$about_banner->getTranslation('head_title', 'ar')}}</td>
                                            <td>{{substr($about_banner->getTranslation('title', 'en'), 0, 20)}}</td>
                                            <td>{{substr($about_banner->getTranslation('title', 'ar'), 0, 30)}}</td>
                                             <td>
                                               @if($about_banner->is_publish)
                                                  <span class="label label-table label-success">{{$about_banner->is_publish == 1 ? 'Published' : 'Not Published'}}</span>
                                               @else
                                                  <span class="label label-table label-danger">{{$about_banner->is_publish == 1 ? 'Published' : 'Not Published'}}</span>
                                               @endif
                                             </td>
                                            <td>{{$about_banner->created_at->diffForHumans()}}</td>
                                            <td>{{$about_banner->updated_at->diffForHumans()}}</td>
                                                <td>
                                                    @if(Auth::user()->role->name == 'Administrator' || Auth::user()->role->name == 'Editor')
                                                    <a href="{{ route('about-banner.edit', $about_banner->id)}}" class="btn btn-outline-info"><i class="mdi mdi-lead-pencil"></i></a>
                                                    @endif
                                                    @if(Auth::user()->role->name == 'Administrator')
                                                    <a href="#" class="btn btn-outline-danger" name="delete_single" data-aboutbannerid="{{$about_banner->id}}" data-toggle="modal" data-target="#aboutBannerConfirmDelete">
                                                    <i class="mdi mdi-delete-forever"></i>
                                                    </a>
                                                    @endif
                                            </td>
                                        </tr>
                                        @include('admin.about-banner.delete')
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
        $('.checkBoxAboutBanner').click(function () {
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
