@extends('admin.layouts.master_layout')

@section('content')
    <section class="content-header">
        <h1>
            ผู้ใช้  <a class="btn btn-info" href="{{ url('admin/user/add') }}">เพื่ม</a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url("admin") }}"><i class="fa fa-dashboard"></i> DashBoard</a></li>
            <li class="active">ผู้ใช้ </li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">รายชื่อผู้ใช้</h3>

                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <th>ลำดับ</th>
                                <th>อีเมล</th>
                                <th>ชื่อ</th>
                                <th>สร้างเมื่อ</th>
                                <th>จัดการ</th>
                            </tr>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->fullname}}</td>
                                    <td>{{ $user->created_at}}</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="{{ url('admin/user/'.$user->id.'/edit') }}" class="btn btn-warning">แก้ไข</a>
                                            <a  onclick="return confirm('ยืนยันการลบ')"  href="{{ url('admin/user/'.$user->id.'/delete') }}" class="btn btn-danger">ลบ</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                    {{ $users->links() }}
                </div><!-- /.box -->
            </div>
        </div>
    </section>
@endsection