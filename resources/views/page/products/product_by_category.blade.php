@extends('_layouts._master')



@section('content')
    <style>
        .field-content {
            position: relative;
            overflow: hidden;
            padding-bottom: 100%;
        }

        .field-content img {
            position: absolute;
            max-width: 100%;
            max-height: 100%;
            top: 50%;
            left: 50%;
            transform: translateX(-50%) translateY(-50%);
        }
    </style>
    <section class="container">
        <ol class="breadcrumb">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/category') }}">หมวดหมู่</a></li>
            <li class="active">{{ $category->name }}</li>
        </ol>
        <div class="center">
            <h2>{{ $category->name }}</h2>
            <p class="lead">{{ $category->description }}</p>
        </div>
        <div class="row">
            @foreach($products as $product)

                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="card card-blog">
                        <div class="card-image">
                            <a href="#pablo">
                                <img class="img" src="{{ $product->image }}">
                            </a>
                        </div>
                        <div class="content text-center">
                            <h4 class="card-title">
                                {{ $product->name }}

                            </h4

                            <p class="card-description">
                                {{ $product->description }}
                            </p>

                            <button data-toggle="modal" data-target="#myModal" class="btn btn-info btn-round">
                                <i class="fa fa-envelope-o"></i> สอบถามราคา
                            </button>
                        </div>
                    </div>

                </div>
            @endforeach

        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">สอบถามราคา</h4>
                </div>
                <div class="modal-body">
                    <form>

                        <div class="form-group">
                            <label>ชื่อและนามสกุล*</label>
                            <input type="text" class="form-control" placeholder="ชื่อและนามสกุล">
                        </div>
                        <div class="form-group">
                            <label>อีเมล*</label>
                            <input type="email" class="form-control" placeholder="อีเมล">
                        </div>
                        {{--
                        <div class="form-group">
                            <label>ตำแหน่ง</label>
                            <input type="text" class="form-control" placeholder="ตำแหน่ง">
                        </div>--}}
                        <div class="form-group">
                            <label>เบอร์โทรศัพท์*</label>
                            <input type="tel" class="form-control" placeholder="เบอร์โทรศัพท์">
                        </div>

                        <div class="form-group">
                            <label>ชื่อบริษัท</label>
                            <input type="text" class="form-control" placeholder="ชื่อบริษัท">
                        </div>
                        <div class="form-group">
                            <label>ข้อความ*</label>
                            <textarea class="form-control" placeholder="ข้อความ" rows="4"></textarea>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" style="margin-top: 10px;" data-dismiss="modal"> ยกเลิก
                    </button>
                    <button type="button" class="btn btn-primary"><i class="fa fa-location-arrow"
                                                                     aria-hidden="true"></i> ส่งข้อความ
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection