@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Security & ELV Service</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Security & ELV Service</li>
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
                            <h4 class="card-title">Security & ELV Service</h4>
                            <h6 class="card-subtitle">Security & ELV Service</h6>
                            @include('layouts.flash-message')
                            @if(Auth::user()->role->name == 'Administrator' || Auth::user()->role->name == 'Editor')
                            <button class="btn btn-outline-success" data-toggle="modal" data-target="#securityServiceModal"><i class="mdi mdi-plus-circle-multiple-outline"></i></button>
                            @endif
                            @include('admin.service-security.create')
                            {!! Form::open(['method'=>'DELETE', 'action'=>'ServiceSecurityController@deleteAll', 'class'=>'', 'files'=>true]) !!}
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
                                            <input type="checkbox" class="checkBoxSecurity" id="checkbox0" value="checkAll">
                                            <label for="checkbox0"></label>
                                        </div>
                                    </th>
                                    <th data-toggle="true"> ID </th>
                                    <th> Media </th>
                                    <th> Type EN</th>
                                    <th> Type AR</th>
                                    <th> Category EN</th>
                                    <th> Category AR</th>
                                    <th> Title EN</th>
                                    <th> Title AR</th>
                                    <th> Description EN</th>
                                    <th> Description AR</th>
                                    <th> Publish </th>
                                    <th> Created </th>
                                    <th> Updated </th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($security_services)
                                    @foreach($security_services as $security_service)
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkBoxes" id="checkbox{{$security_service->id}}" name="checkBoxArray[]" value="{{$security_service->id}}">
                                                    <label for="checkbox{{$security_service->id}}"></label>
                                                </div>
                                            </td>
                                            <td>{{$security_service->id}}</td>
                                            <td><img src="{{$security_service->media}}" alt="Service" width="80" class="img-thumbnail"></td>
                                            <td>{{$security_service->type->getTranslation('title', 'en')}}</td>
                                            <td>{{$security_service->type->getTranslation('title', 'ar')}}</td>
                                            <td>{{$security_service->category->getTranslation('title', 'en')}}</td>
                                            <td>{{$security_service->category->getTranslation('title', 'ar')}}</td>
                                            <td>{{mb_strimwidth($security_service->getTranslation('title', 'en'), 0, 10, '...')}}</td>
                                            <td>{{mb_strimwidth($security_service->getTranslation('title', 'ar'), 0, 10, '...')}}</td>
                                            <td>{{mb_strimwidth($security_service->getTranslation('description', 'en'), 0, 20, '...')}}</td>
                                            <td>{{mb_strimwidth($security_service->getTranslation('description', 'ar'), 0, 30, '...')}}</td>
                                             <td>
                                               @if($security_service->is_publish)
                                                  <span class="label label-table label-success">{{$security_service->is_publish == 1 ? 'Published' : 'Not Published'}}</span>
                                               @else
                                                  <span class="label label-table label-danger">{{$security_service->is_publish == 1 ? 'Published' : 'Not Published'}}</span>
                                               @endif
                                             </td>
                                            <td>{{$security_service->created_at->diffForHumans()}}</td>
                                            <td>{{$security_service->updated_at->diffForHumans()}}</td>
                                                <td>
                                                    @if(Auth::user()->role->name == 'Administrator' || Auth::user()->role->name == 'Editor')
                                                    <a href="{{ route('security-service.edit', $security_service->id)}}" class="btn btn-outline-info"><i class="mdi mdi-lead-pencil"></i></a>
                                                    @endif
                                                    @if(Auth::user()->role->name == 'Administrator')
                                                    <a href="#" class="btn btn-outline-danger" name="delete_single" data-securityservid="{{$security_service->id}}" data-toggle="modal" data-target="#securityServiceConfirmDelete">
                                                    <i class="mdi mdi-delete-forever"></i>
                                                    </a>
                                                    @endif
                                            </td>
                                        </tr>
                                        @include('admin.service-security.delete')
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
        $('.checkBoxSecurity').click(function () {
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
