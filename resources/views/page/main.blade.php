@extends('_layouts._master')



@section('content')
    <style>
        .partners > ul {
            list-style-type: none;
            display: flex;
            justify-content: center;

        }

        .partners > ul li {
            display: list-item;
            padding: 5px 10px;
            margin: 0 3px;
        }
    </style>


    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                @foreach(\App\Slide::all() as $id => $slide )
                    <li data-target="#main-slider" data-slide-to="{{$id}}" {{ $id == 0 ? 'class=active':'' }}></li>
                @endforeach
            </ol>
            <div class="carousel-inner">
                @foreach(\App\Slide::all() as $id => $slide )

                    <div class="item {{ $id == 0 ? 'active':'' }}" style="background-image: url({{ $slide->image }})">
                        <div class="container">
                            <div class="row slide-margin">
                                <div class="col-sm-6">
                                    <div class="carousel-content">
                                        {!!   $slide->description !!}
                                    </div>
                                </div>
                                {{--
                                                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                                                --}}{{--  <div class="slider-img">
                                                                      <img src="public/images/slider/bg1.png" class="img-responsive">
                                                                  </div>--}}{{--
                                                            </div>--}}

                            </div>
                        </div>
                    </div><!--/.item-->
                @endforeach

            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->

    <section id="feature">
        <div class="container">
            {!! \App\Setting::find(1)->features !!}

            {{--  <div class="row">
                  <div class="features">
                      <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                          <div class="feature-wrap">
                              <i class="fa fa-bullhorn"></i>
                              <h2>Fresh and Clean</h2>
                              <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                          </div>
                      </div><!--/.col-md-4-->

                      <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                          <div class="feature-wrap">
                              <i class="fa fa-comments"></i>
                              <h2>Retina ready</h2>
                              <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                          </div>
                      </div><!--/.col-md-4-->

                      <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                          <div class="feature-wrap">
                              <i class="fa fa-cloud-download"></i>
                              <h2>Easy to customize</h2>
                              <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                          </div>
                      </div><!--/.col-md-4-->

                      <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                          <div class="feature-wrap">
                              <i class="fa fa-leaf"></i>
                              <h2>Adipisicing elit</h2>
                              <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                          </div>
                      </div><!--/.col-md-4-->

                      <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                          <div class="feature-wrap">
                              <i class="fa fa-cogs"></i>
                              <h2>Sed do eiusmod</h2>
                              <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                          </div>
                      </div><!--/.col-md-4-->

                      <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                          <div class="feature-wrap">
                              <i class="fa fa-heart"></i>
                              <h2>Labore et dolore</h2>
                              <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                          </div>
                      </div><!--/.col-md-4-->
                  </div><!--/.services-->
              </div><!--/.row-->--}}
        </div><!--/.container-->
    </section><!--/#feature-->
    <section id="recent-works">
        <div class="container">
            {!! \App\Setting::find(1)->hiroyuki !!}
        </div>
    </section>

    <section id="partner" style="background-color: #F2F2F2">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2 style="color: #4e4e4e">มาตราฐาน</h2>
            </div>

            <div class="partners">
                <ul>
                    <li><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" style="height: 120px"
                             data-wow-delay="300ms" src="{{ url('public/images/certificate/1.png') }}"></li>
                    <li><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" style="height: 120px"
                             data-wow-delay="600ms" src="{{ url('public/images/certificate/eco.png') }}"></li>
                    <li><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" style="height: 120px"
                             data-wow-delay="900ms" src="{{ url('public/images/certificate/RoHS.png') }}"></li>
                    <li><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" style="height: 120px"
                             data-wow-delay="1200ms" src="{{ url('public/images/certificate/5.png') }}"></li>
                </ul>
            </div>
        </div><!--/.container-->
    </section><!--/#partner-->


@endsection