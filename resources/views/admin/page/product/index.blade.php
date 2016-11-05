@extends('admin.layouts.master_layout')

@section('content')
    <section class="content-header">
        <h1>
            สินค้า
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= url("admin") ?>"><i class="fa fa-dashboard"></i> DashBoard</a></li>
            <li class="active">สินค้า</li>
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
                <h3 class="box-title">เพิ่มสินค้า</h3>
            </div>
            <div class="box-body">
                <form class="form-horizontal" method="post" action="{{ url('admin/product/add') }}"
                      enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-sm-2 control-label">รหัสสินค้า*</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="code" placeholder="รหัสสินค้า" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">หมวดหมู่สินค้า*</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="category" required>
                                <option value="no">กรุณาเลือกหมวดหมู่</option>
                                @foreach(\App\Category::all() as $category)
                                    <option value="{{$category->id}}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">ชื่อสินค้า*</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" placeholder="ชื่อสินค้า" required>
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
                <h3 class="box-title">รายการสินค้า</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>รูป</th>
                        <th>รหัสสินค้า</th>
                        <th>ชื่อ</th>
                        <th>จัดการ</th>

                    </tr>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>
                                @if($product->image)
                                    <img style="height: 50px" src="{{ $product->image }}" alt="">
                                @endif
                            </td>
                            <td>{{ $product->code }}</td>
                            <td>{{ $product->name }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ url('admin/product/'.$product->id.'/edit') }}"
                                       class="btn btn-warning">แก้ไข</a>
                                    <a onclick="return confirm('ยืนยันการลบ')"
                                       href="{{ url('admin/product/'.$product->id.'/delete') }}"
                                       class="btn btn-danger">ลบ</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $products->links() }}
            </div>
            <!-- /.box-body -->
        </div>
    </section>
@endsection