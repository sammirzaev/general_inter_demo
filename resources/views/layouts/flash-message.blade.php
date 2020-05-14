@if ($message = Session::get('success'))
   @section('scripts')
       <script>
           $message = "{{Session::get('success')}}";
               $.toast({
                   heading: "Congratulations!",
                   text: $message,
                   position: 'top-right',
                   loaderBg:'#ff6849',
                   icon: 'success',
                   hideAfter: 3500,
                   stack: 6
               });
       </script>
   @stop
@endif

@if ($message = Session::get('error'))
@section('scripts')
    <script>
        $message = "{{Session::get('error')}}";
        $.toast({
            heading: "ERROR, FUNCTION NOT SUCCESSFUL",
            text: $message,
            position: 'top-right',
            loaderBg:'#ff6849',
            icon: 'danger',
            hideAfter: 3500,
            stack: 6
        });
    </script>
@stop
@endif

@if ($message = Session::get('warning'))
@section('scripts')
    <script>
        $message = "{{Session::get('warning')}}";
        $.toast({
            heading: "Please kindly note",
            text: $message,
            position: 'top-right',
            loaderBg:'#ff6849',
            icon: 'warning',
            hideAfter: 3500,
            stack: 6
        });
    </script>
@stop
@endif

@if ($message = Session::get('info'))
@section('scripts')
    <script>
        $message = "{{Session::get('info')}}";
        $.toast({
            heading: "Congratulations!",
            text: $message,
            position: 'top-right',
            loaderBg:'#ff6849',
            icon: 'info',
            hideAfter: 3500,
            stack: 6
        });
    </script>
@stop
@endif

@if ($message = Session::get('danger'))
@section('scripts')
    <script>
        $message = "{{Session::get('danger')}}";
        $.toast({
            heading: "Please kindly note!",
            text: $message,
            position: 'top-right',
            loaderBg:'#ff6849',
            icon: 'danger',
            hideAfter: 3500,
            stack: 6
        });
    </script>
@stop
@endif

@if ($errors->any())
@section('scripts')
    <script>
        $message = "{{Session::get('danger')}}";
        $.toast({
            heading: "Please kindly note!",
            text: $message,
            position: 'top-right',
            loaderBg:'#ff6849',
            icon: 'danger',
            hideAfter: 3500,
            stack: 6
        });
    </script>
@stop
@endif

