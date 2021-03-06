@extends('admin.layouts.master_layout')

@section('content')
    <section class="content-header">
        <h1>
            หมวดหมู่สินค้า
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= url("admin") ?>"><i class="fa fa-dashboard"></i> DashBoard</a></li>
            <li class="active">หมวดหมู่สินค้า</li>
        </ol>
    </section>

    <section class="content">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">เพิ่มหมวดหมู่</h3>
            </div>
            <div class="box-body">
                <form class="form-horizontal" method="post" action="{{ url('admin/category/add') }}"
                      enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-sm-2 control-label">ชื่อหมวดหมู่*</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" placeholder="ชื่อหมวดหมู่" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">คำอธิบาย</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="description" placeholder="คำอธิบาย">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">รูปภาพ</label>
                        <div class="col-sm-10">
                            <input type="file" name="image" class="form-control" placeholder="รูปภาพ">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-info">เพิ่มหมวดหมู่</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <hr>
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">รายการหมวดหมู่</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>รูป</th>
                        <th>ชื่อ</th>
                        <th>คำอธิบาย</th>
                        <th>จัดการ</th>

                    </tr>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>
                                @if($category->image)
                                    <img style="height: 50px" src="{{ $category->image }}" alt="">
                                @endif
                            </td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->description }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ url('admin/category/'.$category->id.'/edit') }}"
                                       class="btn btn-warning">แก้ไข</a>
                                    <a onclick="return confirm('ยืนยันการลบ')"
                                       href="{{ url('admin/category/'.$category->id.'/delete') }}"
                                       class="btn btn-danger">ลบ</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </section>
@endsection