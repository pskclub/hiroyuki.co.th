@extends('admin.layouts.master_layout')

@section('content')
    <section class="content-header">
        <h1>
            เพิ่มผู้ใช้
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url("admin") }}"><i class="fa fa-dashboard"></i> DashBoard</a></li>
            <li><a href="{{ url("admin/user") }}"><i class="fa fa-user"></i> ผู้ใช้</a></li>
            <li class="active">เพิ่มผู้ใช้</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <form class="form-horizontal" method="post"
                              action="{{ url('admin/user/add') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-sm-3 control-label">ชื่อและนามสกุล</label>
                                <div class="col-sm-6">
                                    <input type="text" name="fullname" class="form-control" placeholder="ชื่อและนามสกุล">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">อีเมล</label>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control"
                                           placeholder="Email" name="email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">รหัสผ่าน</label>
                                <div class="col-sm-6">
                                    <input type="password" name="password" class="form-control" placeholder="รหัสผ่าน"
                                           required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">ยืนยันรหัสผ่าน</label>
                                <div class="col-sm-6">
                                    <input type="password" name="confirm_password" class="form-control"
                                           placeholder="ยืนยันรหัสผ่าน" required>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-sm-3 control-label">ประเภท</label>
                                <div class="col-sm-6">
                                    <select name="type" class="form-control">
                                        {{--<option value="MEMBER">สมาชิก</option>--}}
                                        <option value="ADMIN">ผู้ดูแลระบบ</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-10">
                                    <button type="submit" class="btn btn-default">เพิ่ม</button>
                                </div>
                            </div>
                        </form>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
    </section>
@endsection