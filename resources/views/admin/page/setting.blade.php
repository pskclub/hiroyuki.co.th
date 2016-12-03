@extends('admin.layouts.master_layout')

@section('content')
    <section class="content-header">
        <h1>
            ตั้งค่า
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url("admin") }}"><i class="fa fa-dashboard"></i> DashBoard</a></li>
            <li class="active">ตั้งค่า</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <form class="form-horizontal" method="post"
                              action="{{ url('admin/setting') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-sm-3 control-label">อีเมล</label>
                                <div class="col-sm-6">
                                    <input type="email" name="email" class="form-control" value="{{ $setting->email }}"
                                           placeholder="Email" >
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-10">
                                    <button type="submit" class="btn btn-default">แก้ไข</button>
                                </div>
                            </div>
                        </form>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
    </section>
@endsection