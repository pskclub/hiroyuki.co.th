@extends('admin.layouts.master_layout')

@section('content')
    <section class="content-header">
        <h1>
           หมวดหมู่สินค้า <a class="btn btn-info" href="{{ url('admin/category/add') }}">เพื่ม</a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= url("admin") ?>"><i class="fa fa-dashboard"></i> DashBoard</a></li>
            <li class="active">หมวดหมู่สินค้า</li>
        </ol>
    </section>

    <section class="content">

    </section>
@endsection