<!DOCTYPE html>
<html lang="en">
@include('admin.layouts._header')
<body class="hold-transition skin-red sidebar-mini fixed">
<div class="wrapper">
    @include('admin.layouts._nav')
    <div class="content-wrapper">
        @yield('content')
    </div><!-- /.content-wrapper -->
    @include('admin.layouts._footer')
</div>
</body>
</html>



