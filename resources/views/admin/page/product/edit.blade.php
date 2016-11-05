@extends('admin.layouts.master_layout')

@section('content')
    <section class="content-header">
        <h1>
            แก้ไขสินค้า
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= url("admin") ?>"><i class="fa fa-dashboard"></i> DashBoard</a></li>
            <li><a href="<?= url("admin/category") ?>">สินค้า</a></li>
            <li class="active">แก้ไขสินค้า</li>
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
                <h3 class="box-title"></h3>
            </div>
            <div class="box-body">
                <form class="form-horizontal" method="post" action="{{ url('admin/product/'.$product->id.'/edit') }}"
                      enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-sm-2 control-label">รหัสสินค้า*</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{ $product->code }}" name="code"
                                   placeholder="รหัสสินค้า" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">หมวดหมู่สินค้า*</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="category" required>
                                <option value="no">กรุณาเลือกหมวดหมู่</option>
                                @foreach(\App\Category::all() as $category)
                                    <option value="{{$category->id}}" {{ $product->category_id == $category->id ? 'selected':'' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">ชื่อสินค้า*</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{ $product->name }}" name="name"
                                   placeholder="ชื่อสินค้า" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">คำอธิบาย</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{ $product->description }}"
                                   name="description" placeholder="คำอธิบาย">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">รูปภาพ</label>
                        <div class="col-sm-10">
                            @if($product->image)
                                <img src="{{ $product->image }}" style="height: 250px" alt="">
                            @endif
                            <input type="file" name="image" class="form-control" placeholder="รูปภาพ">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-info">แก้ไขสินค้า</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </section>
@endsection