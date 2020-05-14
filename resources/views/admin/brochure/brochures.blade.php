@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Create Brochures</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Brochures</li>
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
                            <h4 class="card-title">Brochures Page</h4>
                            <h6 class="card-subtitle">Brochures List</h6>
                            @include('layouts.flash-message')
                            <button class="btn btn-outline-success" data-toggle="modal" data-target="#brochureModal"><i class="mdi mdi-plus-circle-multiple-outline"></i></button>
                            @include('admin.brochure.create')
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
                            {!! Form::open(['method'=>'DELETE', 'action'=>'BrochuresController@deleteAll', 'class'=>'', 'files'=>true]) !!}
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
                                            <input type="checkbox" class="checkBoxBrochure" id="checkbox0" value="checkAll">
                                            <label for="checkbox0"></label>
                                        </div>
                                    </th>
                                    <th data-toggle="true"> ID </th>
                                    <th> Brochure Media </th>
                                    <th> Brochure Name EN</th>
                                    <th> Brochure Name AR</th>
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
                                @if($brochures)
                                    @foreach($brochures as $brochure)
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkBoxes" id="checkbox{{$brochure->id}}" name="checkBoxArray[]" value="{{$brochure->id}}">
                                                    <label for="checkbox{{$brochure->id}}"></label>
                                                </div>
                                            </td>
                                            <td>{{$brochure->id}}</td>
                                            @if(file_exists(public_path('../public/brochures-pics/'.$brochure->picture)))
                                                <td><img src="{{asset('../public/brochures-pics/'.$brochure->picture)}}" alt="avatar" width="60" class="img-thumbnail"></td>
                                             @else
                                                <td><span class="badge badge-danger">Brochure has not media</span></td>
                                            @endif
                                            <td>{{$brochure->getTranslation('brochure_name', 'en')}}</td>
                                            <td>{{$brochure->getTranslation('brochure_name', 'ar')}}</td>
                                            <td>{{$brochure->filter->getTranslation('filter', 'en')}}</td>
                                            <td>{{$brochure->filter->getTranslation('filter', 'ar')}}</td>
                                            <td>{{$brochure->getTranslation('title', 'en')}}</td>
                                            <td>{{$brochure->getTranslation('title', 'ar')}}</td>
                                            <td>{{substr($brochure->getTranslation('description', 'en'), 0, 10)}}</td>
                                            <td>{{substr($brochure->getTranslation('description', 'ar'), 0, 300)}}</td>
                                             <td>
                                               @if($brochure->is_publish)
                                                  <span class="label label-table label-success">{{$brochure->is_publish == 1 ? 'Published' : 'Not Published'}}</span>
                                               @else
                                                  <span class="label label-table label-danger">{{$brochure->is_publish == 1 ? 'Published' : 'Not Published'}}</span>
                                               @endif
                                             </td>
                                            <td>{{$brochure->created_at->diffForHumans()}}</td>
                                            <td>{{$brochure->updated_at->diffForHumans()}}</td>
                                                <td>
                                                    <a href="{{ route('brochures.edit', $brochure->id)}}" class="btn btn-outline-info"><i class="mdi mdi-lead-pencil"></i></a>
                                                    <a href="#" class="btn btn-outline-danger" name="delete_single" data-brochureid="{{$brochure->id}}" data-toggle="modal" data-target="#brochureContactConfirmDelete">
                                                    <i class="mdi mdi-delete-forever"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @include('admin.brochure.delete')
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                            {!! Form::close() !!}
                            <div class="text-left">
                                {{$brochures->links()}}
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
        $('.checkBoxBrochure').click(function () {
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
