@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Contact Details</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Contact Details</li>
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
                <div class="col-md-12 col-lg-12 col-sm-10 col-xs-8">
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Contact Details</h4>
                            <h6 class="card-subtitle">Contact Details</h6>
                            @include('layouts.flash-message')
                            @if(Auth::user()->role->name == 'Administrator' || Auth::user()->role->name == 'Editor')
                            <button class="btn btn-outline-success" data-toggle="modal" data-target="#contactModal"><i class="mdi mdi-plus-circle-multiple-outline"></i></button>
                            @endif
                            @include('admin.contact.create')
                            {!! Form::open(['method'=>'DELETE', 'action'=>'ContactDetailsController@deleteAll', 'class'=>'', 'files'=>true]) !!}
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
                            <table class="table col-md-12">
                                <thead>
                                <tr>
                                    <th>
                                        <div class="checkbox">
                                            <input type="checkbox" class="checkBoxContact" id="checkbox0" value="checkAll">
                                            <label for="checkbox0"></label>
                                        </div>
                                    </th>
                                    <th data-toggle="true"> ID </th>
                                    <th> Phone Icon </th>
                                    <th> Address Icon </th>
                                    <th> Email Icon </th>
                                    <th> Phone Title En</th>
                                    <th> Phone Title Ar</th>
                                    <th> Address Title En</th>
                                    <th> Address Title Ar</th>
                                    <th> Email Title En</th>
                                    <th> Email Title Ar</th>
                                    <th> Phone </th>
                                    <th> Fax </th>
                                    <th> Address En </th>
                                    <th> Address Ar </th>
                                    <th> Email </th>
                                    <th> Publish </th>
                                    <th> Created </th>
                                    <th> Updated </th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($contacts)
                                    @foreach($contacts as $contact)
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkBoxes" id="checkbox{{$contact->id}}" name="checkBoxArray[]" value="{{$contact->id}}">
                                                    <label for="checkbox{{$contact->id}}"></label>
                                                </div>
                                            </td>
                                            <td>{{$contact->id}}</td>
                                            <td>{{mb_strimwidth($contact->phone_icon, 0, 5, '...')}}</td>
                                            <td>{{mb_strimwidth($contact->address_icon, 0, 5, '...')}}</td>
                                            <td>{{mb_strimwidth($contact->email_icon, 0, 5, '...')}}</td>
                                            <td>{{mb_strimwidth($contact->getTranslation('phone_title', 'en'), 0, 5, '...')}}</td>
                                            <td>{{mb_strimwidth($contact->getTranslation('phone_title', 'ar'), 0, 5, '...')}}</td>
                                            <td>{{mb_strimwidth($contact->getTranslation('address_title', 'en'), 0, 5, '...')}}</td>
                                            <td>{{mb_strimwidth($contact->getTranslation('address_title', 'ar'), 0, 5, '...')}}</td>
                                            <td>{{mb_strimwidth($contact->getTranslation('email_title', 'en'), 0, 5, '...')}}</td>
                                            <td>{{mb_strimwidth($contact->getTranslation('email_title', 'ar'), 0, 5, '...')}}</td>
                                            <td>{{mb_strimwidth($contact->phone, 0, 5, '...')}}</td>
                                            <td>{{mb_strimwidth($contact->fax, 0, 5, '...')}}</td>
                                            <td>{{mb_strimwidth($contact->getTranslation('address', 'en'), 0, 5, '...')}}</td>
                                            <td>{{mb_strimwidth($contact->getTranslation('address', 'ar'), 0, 5, '...')}}</td>
                                            <td>{{mb_strimwidth($contact->email, 0, 5, '...')}}</td>
                                             <td>
                                               @if($contact->is_publish)
                                                  <span class="label label-table label-success">{{$contact->is_publish == 1 ? 'Published' : 'Not Published'}}</span>
                                               @else
                                                  <span class="label label-table label-danger">{{$contact->is_publish == 1 ? 'Published' : 'Not Published'}}</span>
                                               @endif
                                             </td>
                                            <td>{{$contact->created_at->diffForHumans()}}</td>
                                            <td>{{$contact->updated_at->diffForHumans()}}</td>
                                                <td>
                                                    @if(Auth::user()->role->name == 'Administrator' || Auth::user()->role->name == 'Editor')
                                                    <a href="{{ route('contact-details.edit', $contact->id)}}" class="btn btn-outline-info"><i class="mdi mdi-lead-pencil"></i></a>
                                                    <a href="#" class="btn btn-outline-danger" name="delete_single" data-contactdid="{{$contact->id}}" data-toggle="modal" data-target="#contactConfirmDelete">
                                                    <i class="mdi mdi-delete-forever"></i>
                                                    </a>
                                                    @endif
                                            </td>
                                        </tr>
                                        @include('admin.contact.delete')
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
        $('.checkBoxContact').click(function () {
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
