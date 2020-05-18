@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Water Treatment Concept</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Water Treatment Concept</li>
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
                            <h4 class="card-title">Water Treatment Concept Page</h4>
                            <h6 class="card-subtitle">Water Treatment Concept</h6>
                            @include('layouts.flash-message')
                            @if(Auth::user()->role->name == 'Administrator' || Auth::user()->role->name == 'Editor')
                            <button class="btn btn-outline-success" data-toggle="modal" data-target="#waterConceptModal"><i class="mdi mdi-plus-circle-multiple-outline"></i></button>
                            @endif
                            @include('admin.concept-water.create')
                            {!! Form::open(['method'=>'DELETE', 'action'=>'ConceptWaterController@deleteAll', 'class'=>'', 'files'=>true]) !!}
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
                                            <input type="checkbox" class="checkBoxWaterConcept" id="checkbox0" value="checkAll">
                                            <label for="checkbox0"></label>
                                        </div>
                                    </th>
                                    <th data-toggle="true"> ID </th>
                                    <th> Icon </th>
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
                                @if($water_concepts)
                                    @foreach($water_concepts as $water_concept)
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkBoxes" id="checkbox{{$water_concept->id}}" name="checkBoxArray[]" value="{{$water_concept->id}}">
                                                    <label for="checkbox{{$water_concept->id}}"></label>
                                                </div>
                                            </td>
                                            <td>{{$water_concept->id}}</td>
                                            <td>{{mb_strimwidth($water_concept->icon, 0, 10, ' ...')}}</td>
                                            <td>{{$water_concept->getTranslation('title', 'en')}}</td>
                                            <td>{{$water_concept->getTranslation('title', 'ar')}}</td>
                                            <td>{{mb_strimwidth($water_concept->getTranslation('description', 'en'), 0, 20, ' ...')}}</td>
                                            <td>{{mb_strimwidth($water_concept->getTranslation('description', 'ar'), 0, 20, ' ...')}}</td>
                                             <td>
                                               @if($water_concept->is_publish)
                                                  <span class="label label-table label-success">{{$water_concept->is_publish == 1 ? 'Published' : 'Not Published'}}</span>
                                               @else
                                                  <span class="label label-table label-danger">{{$water_concept->is_publish == 1 ? 'Published' : 'Not Published'}}</span>
                                               @endif
                                             </td>
                                            <td>{{$water_concept->created_at->diffForHumans()}}</td>
                                            <td>{{$water_concept->updated_at->diffForHumans()}}</td>
                                                <td>
                                                    @if(Auth::user()->role->name == 'Administrator' || Auth::user()->role->name == 'Editor')
                                                    <a href="{{ route('water-concept.edit', $water_concept->id)}}" class="btn btn-outline-info"><i class="mdi mdi-lead-pencil"></i></a>
                                                    <a href="#" class="btn btn-outline-danger" name="delete_single" data-watercid="{{$water_concept->id}}" data-toggle="modal" data-target="#waterConceptConfirmDelete">
                                                    <i class="mdi mdi-delete-forever"></i>
                                                    </a>
                                                    @endif
                                            </td>
                                        </tr>
                                        @include('admin.concept-water.delete')
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
        $('.checkBoxWaterConcept').click(function () {
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
