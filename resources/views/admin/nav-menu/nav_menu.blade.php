@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Nav Menu</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Nav Menu</li>
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
                            <h4 class="card-title">Nav Menu Page</h4>
                            <h6 class="card-subtitle">Nav Menu</h6>
                            @include('layouts.flash-message')
                            @if(Auth::user()->role->name == 'Administrator' || Auth::user()->role->name == 'Editor')
                            <button class="btn btn-outline-success" data-toggle="modal" data-target="#navMenuModal"><i class="mdi mdi-search-web"></i></button>
                            @endif
                            @include('admin.nav-menu.create')
                            <table id="demo-foo-row-toggler" class="table toggle-circle table-hover">
                                <thead>
                                <tr>
                                    <th data-toggle="true"> ID </th>
                                    <th> Home En</th>
                                    <th> Home Ar</th>
                                    <th> About En</th>
                                    <th> About Ar</th>
                                    <th> WhatWeDo En</th>
                                    <th> WhatWeDo Ar</th>
                                    <th> Publish </th>
                                    <th data-hide="all"> Fire En </th>
                                    <th data-hide="all"> Fire Ar </th>
                                    <th data-hide="all"> Security En </th>
                                    <th data-hide="all"> Security Ar </th>
                                    <th data-hide="all"> Water En </th>
                                    <th data-hide="all"> Water Ar </th>
                                    <th data-hide="all"> Facility En </th>
                                    <th data-hide="all"> Facility Ar </th>
                                    <th data-hide="all"> Projects En </th>
                                    <th data-hide="all"> Projects Ar </th>
                                    <th data-hide="all"> Insights En </th>
                                    <th data-hide="all"> Insights Ar </th>
                                    <th data-hide="all"> News En </th>
                                    <th data-hide="all"> News Ar </th>
                                    <th data-hide="all"> CaseStudy En </th>
                                    <th data-hide="all"> CaseStudy Ar </th>
                                    <th data-hide="all"> Contact En </th>
                                    <th data-hide="all"> Contact Ar </th>
                                    <th data-hide="all"> Search En </th>
                                    <th data-hide="all"> Search Ar </th>
                                    <th data-hide="all"> Lang En </th>
                                    <th data-hide="all"> Lang Ar </th>
                                    <th data-hide="all"> Created </th>
                                    <th data-hide="all"> Updated </th>
                                    <th> </th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($nav_menus)
                                    @foreach($nav_menus as $nav_menu)
                                        <tr>
                                            <td>{{$nav_menu->id}}</td>
                                            <td>{{$nav_menu->getTranslation('home', 'en')}}</td>
                                            <td>{{$nav_menu->getTranslation('home', 'ar')}}</td>
                                            <td>{{$nav_menu->getTranslation('about', 'en')}}</td>
                                            <td>{{$nav_menu->getTranslation('about', 'ar')}}</td>
                                            <td>{{$nav_menu->getTranslation('what_we_do', 'en')}}</td>
                                            <td>{{$nav_menu->getTranslation('what_we_do', 'ar')}}</td>
                                            <td>
                                            @if($nav_menu->is_publish)
                                                <span class="label label-table label-success">{{$nav_menu->is_publish == 1 ? 'Published' : 'Not Published'}}</span>
                                            @else
                                                <span class="label label-table label-danger">{{$nav_menu->is_publish == 1 ? 'Published' : 'Not Published'}}</span>
                                            @endif
                                            </td>
                                            <td>{{$nav_menu->getTranslation('fire', 'en')}}</td>
                                            <td>{{$nav_menu->getTranslation('fire', 'ar')}}</td>
                                            <td>{{$nav_menu->getTranslation('security', 'en')}}</td>
                                            <td>{{$nav_menu->getTranslation('security', 'ar')}}</td>
                                            <td>{{$nav_menu->getTranslation('water', 'en')}}</td>
                                            <td>{{$nav_menu->getTranslation('water', 'ar')}}</td>
                                            <td>{{$nav_menu->getTranslation('facility', 'en')}}</td>
                                            <td>{{$nav_menu->getTranslation('facility', 'ar')}}</td>
                                            <td>{{$nav_menu->getTranslation('projects', 'en')}}</td>
                                            <td>{{$nav_menu->getTranslation('projects', 'ar')}}</td>
                                            <td>{{$nav_menu->getTranslation('insights', 'en')}}</td>
                                            <td>{{$nav_menu->getTranslation('insights', 'ar')}}</td>
                                            <td>{{$nav_menu->getTranslation('news', 'en')}}</td>
                                            <td>{{$nav_menu->getTranslation('news', 'ar')}}</td>
                                            <td>{{$nav_menu->getTranslation('case', 'en')}}</td>
                                            <td>{{$nav_menu->getTranslation('case', 'ar')}}</td>
                                            <td>{{$nav_menu->getTranslation('contact', 'en')}}</td>
                                            <td>{{$nav_menu->getTranslation('contact', 'ar')}}</td>
                                            <td>{{$nav_menu->getTranslation('search', 'en')}}</td>
                                            <td>{{$nav_menu->getTranslation('search', 'ar')}}</td>
                                            <td>{{$nav_menu->getTranslation('lang', 'en')}}</td>
                                            <td>{{$nav_menu->getTranslation('lang', 'ar')}}</td>
                                            <td>{{$nav_menu->created_at->diffForHumans()}}</td>
                                            <td>{{$nav_menu->updated_at->diffForHumans()}}</td>
                                            <td>
                                                @if(Auth::user()->role->name == 'Administrator' || Auth::user()->role->name == 'Editor')
                                                <a href="{{ route('nav-menu.edit', $nav_menu->id)}}" class="btn btn-outline-info"><i class="mdi mdi-lead-pencil"></i></a>
                                                @endif
                                                @if(Auth::user()->role->name == 'Administrator')
                                                <a href="#" class="btn btn-outline-danger" data-navmenuid="{{$nav_menu->id}}" data-toggle="modal" data-target="#navMenuConfirmDelete"><i class="mdi mdi-delete-forever"></i></a>
                                                @endif
                                            </td>
                                        </tr>
                                        @include('admin.nav-menu.delete')
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
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
