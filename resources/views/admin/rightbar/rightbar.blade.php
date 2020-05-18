<!-- ============================================================== -->
<!-- Right sidebar -->
<!-- ============================================================== -->
<!-- .right-sidebar -->
<div class="right-sidebar">
    <div class="slimscrollright">
        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
        <div class="r-panel-body">
            <ul class="m-t-20 chatonline">
                <li><b>Online Users</b></li>
                @if($users)
                    @foreach($users as $user)
                <li>
                    <a href="javascript:void(0)">
                        @if(!empty($user->photo->photo))
                          @if(file_exists(public_path('images/'. $user->photo->photo)))
                           <img src="{{asset('images/'. $user->photo->photo)}}" alt="user-img" class="img-circle">
                          @endif
                        @else
                            <img src="{{asset('assets/admin/assets/images/no-avatar.png')}}" alt="user-img" class="img-circle">
                        @endif
                        <span>{{$user->name}}
                            @if(Cache::has('user-is-online-' . $user->id))
                            <small class="text-success">Online</small>
                            @else
                                <small class="text-danger">Offline</small>
                            @endif
                        </span>

                    </a>
                </li>
                    @endforeach
               @endif


            </ul>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Right sidebar -->
<!-- ============================================================== -->
