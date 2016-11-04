<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>เข้าสู่ระบบ - Hiroyuki Dashboard</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ asset("public/dashboard/bootstrap/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset("public/dashboard/dist/css/AdminLTE.min.css") }}">
    <link rel="stylesheet" href="{{ asset("public/dashboard/dist/css/skins/_all-skins.min.css") }}">
    <link rel="stylesheet" href="{{ asset("public/dashboard//plugins/iCheck/square/blue.css") }}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <b>Hiroyuki</b> DashBoard
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">กรุณาเข้าสู่ระบบ</p>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session('err'))
            <div class="alert alert-danger">
                <ul>
                    <li>{{session('err')}}</li>
                </ul>
            </div>
        @endif
        <form action="{{url('admin/login')}}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group has-feedback">
                <input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="อีเมล"
                       required>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input name="password" type="password" min="8" class="form-control" placeholder="รหัสผ่าน" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input name="remember" type="checkbox"> จำฉันไว้
                        </label>
                    </div>
                </div>
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">เข้าสู่ระบบ</button>
                </div><!-- /.col -->
            </div>
        </form>

    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->
<script src="{{ asset("public/dashboard/plugins/jQuery/jQuery-2.1.4.min.js") }}"></script>
<script src="{{ asset("public/dashboard/bootstrap/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("public/dashboard/plugins/iCheck/icheck.min.js") }}"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>
