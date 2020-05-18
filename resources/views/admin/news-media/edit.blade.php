@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">News & Event Media</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">News & Event Media</li>
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
                <div class="col-4 offset-4">
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit News & Event Media</h4>
                            <h6 class="card-subtitle">Edit News & Event Media</h6>
                            {!! Form::model($news_media, ['method'=>'PATCH', 'action'=>['NewsMediaController@update', $news_media->id], 'class'=>'form-material m-t-40 row', 'files'=>true]) !!}
                            <div class="form-group col-md-12">
                                <div class="fallback">
                                    <input type="file" name="media" id="input-file-now" class="dropify" />
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                            <td><img src="{{$news_media->media}}" alt="news and events" width="200" class="img-thumbnail"></td>
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::select('cat_id', $news_cat, null, ['class'=>'form-control', 'id'=>'cat_id', 'required']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::select('cat_id', $news_cat, null, ['class'=>'form-control', 'id'=>'cat_id', 'required']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::select('post_id', $post, null, ['class'=>'form-control', 'id'=>'post_id', 'required']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::select('post_id', $post, null, ['class'=>'form-control', 'id'=>'post_id', 'required']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Update Title Name', 'id'=>'title']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('title_ar', $news_media->getTranslation('title', 'ar'), ['class'=>'form-control', 'placeholder'=>'Update Title Name AR', 'id'=>'title']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::select('is_publish',array( 1=>'Published', 0=>'Not Published'), null,['class'=>'form-control', 'id'=>'inputStatus']) !!}
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-info"><i class="mdi mdi-file-tree"> Update News Media</i> </button>
                                <a href="{{route('news-media.index')}}" class="btn btn-pinterest" data-dismiss="modal"><i class="mdi mdi-arrow-left-bold-circle-outline"> Back</i></a>
                            </div>
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

