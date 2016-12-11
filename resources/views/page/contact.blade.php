@extends('_layouts._master')



@section('content')
    <section id="contact-info">
        <div class="container">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success">
                    {{ 'ส่งข้อมูลการติดต่อเรียบร้อยแล้ว' }}
                </div>
            @endif
        </div>
        <div class="center">
            <h2>How to Reach Us?</h2>
        </div>
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <div class="gmap">
                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3878.093868792594!2d100.38605361482871!3d13.59107689045162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2bb9b4483e883%3A0x2d3abe3d754df3e0!2zMjMg4LiL4Lit4LiiIOC5geC4quC4oeC4lOC4syDguYHguILguKfguIcg4LmB4Liq4Lih4LiU4LizIOC5gOC4guC4lSDguJrguLLguIfguILguLjguJnguYDguJfguLXguKLguJkg4LiB4Lij4Li44LiH4LmA4LiX4Lie4Lih4Lir4Liy4LiZ4LiE4LijIDEwMTUw!5e0!3m2!1sth!2sth!4v1478276802414"></iframe>
                        </div>
                    </div>

                    <div class="col-sm-7 map-content">
                        {!! \App\Setting::find(1)->contact !!}

                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->

    <section id="contact-page">
        <div class="container">
            <div class="center">
                <h2>Contact Hiroyuki (Thailand)</h2>
            </div>
            <div class="row contact-wrap">
                {{--<div class="status alert alert-success" style="display: none"></div>--}}
                <form class="contact-form" name="contact-form" method="post"
                      action="{{ url('contact') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Phone *</label>
                            <input type="tel" name="tel" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" name="company" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Subject *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Message *</label>
                            <textarea name="message" id="message" required="required" class="form-control"
                                      rows="8"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Send
                                Message
                            </button>
                        </div>
                    </div>
                </form>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->


@endsection