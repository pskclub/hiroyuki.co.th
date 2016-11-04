@extends('admin.layouts.master_layout')

@section('content')
    <section class="content-header">
        <h1>
            แก้ไข
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url("admin") }}"><i class="fa fa-dashboard"></i> DashBoard</a></li>
            <li><a href="{{ url("admin/user") }}"><i class="fa fa-user"></i> ผู้ใช้</a></li>
            <li class="active">แก้ไข</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <form class="form-horizontal" method="post"
                              action="{{ url('admin/user/'.$user->id.'/update') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-sm-3 control-label">อีเมล</label>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control" value="{{ $user->email }}"
                                           placeholder="Email" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">ชื่อและนามสกุล</label>
                                <div class="col-sm-6">
                                    <input type="text" name="fullname" class="form-control" value="{{ $user->fullname }}" placeholder="ชื่อและนามสกุล">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">ประเภท</label>
                                <div class="col-sm-6">
                                    <select name="type" class="form-control">
                                        {{--<option value="member" {{ $user->type == 'member' ? 'selected' : '' }}>สมาชิก</option>--}}
                                        <option value="ADMIN" {{ $user->type == 'ADMIN' ? 'selected' : '' }}>ผู้ดูแลระบบ</option>
                                    </select>
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