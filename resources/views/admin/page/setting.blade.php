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
                        <h3 class="box-title">สไลด์โชว์</h3>

                    </div>
                    <div class="box-body no-padding">
                        <form class="form-horizontal" method="post" action="{{ url('admin/slide') }}"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}


                            <div class="form-group">
                                <label class="col-sm-3 control-label">รูปภาพ</label>
                                <div class="col-sm-6">
                                    <input type="file" name="image" class="form-control" placeholder="รูปภาพ">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">รายละเอียด</label>
                                <div class="col-sm-6">
                                    <textarea class="edit" name="description"></textarea>
                                    <span class="help-block">**html แสดงด้านบนรูปภาพสร้างปุ่มเพื่อลิ้งค์ได้</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-10">
                                    <button type="submit" class="btn btn-info">เพิ่มสไลด์</button>
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive " style="margin-top: 100px">
                            <table class="table table-hover">
                                <tbody>
                                <tr>
                                    <th width="5%">ลำดับ</th>
                                    <th>รูปภาพ</th>
                                    <th>จัดการ</th>
                                </tr>
                                @foreach($slides as $slide)
                                    <tr>
                                        <td>{{ $slide->id }}</td>
                                        <td><img src="{{ $slide->image }}" style="max-height: 50px" alt=""></td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a class="btn btn-warning" data-toggle="modal"
                                                   data-target="#slideModal{{$slide->id}}">แก้ไข</a>
                                                <a onclick="return confirm('ยืนยันการลบ')"
                                                   href="{{ url('admin/slide/'.$slide->id.'/delete') }}"
                                                   class="btn btn-danger">ลบ</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div><!-- /.box-body -->
                </div>
                @foreach($slides as $slide)
                <!-- Modal -->
                    <div class="modal fade" id="slideModal{{$slide->id}}" tabindex="-1" role="dialog"
                         aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <form method="post" action="{{ url('admin/slide/'.$slide->id .'/update') }}"
                                  enctype="multipart/form-data">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span
                                                    aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">แก้ไข #{{$slide->id}}</h4>
                                    </div>
                                    <div class="modal-body">

                                        {{ csrf_field() }}


                                        <div class="form-group">
                                            <label>รูปภาพ</label>
                                            <div>
                                                <img src="{{ $slide->image }}" style="max-height: 80px" alt="">
                                                <input type="file" name="image" class="form-control"
                                                       placeholder="รูปภาพ">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>รายละเอียด</label>
                                            <div>
                                                <textarea class="edit" name="description">{!! $slide->description !!}</textarea>
                                                <span class="help-block">**html แสดงด้านบนรูปภาพสร้างปุ่มเพื่อลิ้งค์ได้</span>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                        </button>
                                        <button type="submit" class="btn btn-primary">แก้ไขสไลด์</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                @endforeach
                <div class="box">
                    <div class="box-body">
                        <form class="form-horizontal" method="post"
                              action="{{ url('admin/setting') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-sm-3 control-label">อีเมล</label>
                                <div class="col-sm-6">
                                    <input type="email" name="email" class="form-control" value="{{ $setting->email }}"
                                           placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Features</label>
                                <div class="col-sm-6">
                                    <textarea class="edit"
                                              name="features">{!! \App\Setting::find(1)->features !!}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">hiroyuki</label>
                                <div class="col-sm-6">
                                    <textarea class="edit"
                                              name="hiroyuki">{!! \App\Setting::find(1)->hiroyuki !!}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">network</label>
                                <div class="col-sm-6">
                                    <textarea class="edit"
                                              name="network">{!! \App\Setting::find(1)->network !!}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">contact</label>
                                <div class="col-sm-6">
                                    <textarea class="edit"
                                              name="contact">{!! \App\Setting::find(1)->contact !!}</textarea>
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

@push('scripts')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' ,  // change this value according to your HTML
        height : 300,
        theme: 'modern',
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'paste textcolor colorpicker textpattern imagetools codesample toc'
        ],
        toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
        image_advtab: true});</script>

@endpush

