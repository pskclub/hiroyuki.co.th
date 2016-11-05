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
        <div class="center">
            <h2>หมวดหมู่สินค้า</h2>
        </div>
        <div class="row">
            @foreach($categories as $category)

                <div class="col-xs-12 col-sm-6 col-md-4" onclick="location.href='{{ url('category/'.$category->id) }}';"
                     style="cursor:pointer;">
                    <div class="card card-background" style="background-image: url('{{ $category->image }}')">
                        <div class="content">
                            <h2 class="card-title">{{ $category->name }}</h2>
                            <p class="card-description">
                                {{ $category->description }}
                            </p>
                            <a href="{{ url('category/'.$category->id) }}" class="btn btn-danger btn-round">
                                <i class="fa fa-eye"></i> เข้าดูรายการสินค้า
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>

@endsection