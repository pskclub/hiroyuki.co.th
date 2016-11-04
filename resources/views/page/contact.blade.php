<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Corlate</title>

    <!-- core CSS -->
    <link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/responsive.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{ asset('public/js/html5shiv.js') }}"></script>
    <script src="{{ asset('public/js/respond.min.js') }}"></script>
    <![endif]-->

</head><!--/head-->

<body class="homepage">

<header id="header">
    <nav class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="{{ url('public/images/logo.png') }}"
                                                               style="max-height: 45px;" alt="logo"></a>
            </div>

            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about-us.html">Product</a></li>
                    <li><a href="services.html">Network</a></li>
                    <li class="active"><a href="#">Contact</a></li>
                </ul>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->

</header><!--/header-->
<section id="contact-info">
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
                    <address>
                        <h5>Hiroyuki (Thailand) Co.,Ltd.</h5>
                        <p></p>
                        <p>319/23 ถนนแสมดำ แขวงแสมดำ เขตบางขุนเทียน
                            กรุงเทพมหานคร 10150 ประเทศไทย</p>
                        <p>319/23 Samaedam Road, Samaedam, Bangkhunthien
                            Bangkok 10150 Thailand</p>
                        <p>
                            Phone +662 416 3215-6 , +662 416 3217 <br>
                            Email hiro.thailand@hiroyuki.co.th <br>
                            Tax ID 0105559053421</p>
                    </address>

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
            <div class="status alert alert-success" style="display: none"></div>
            <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
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
                        <label>Phone</label>
                        <input type="number" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Company Name</label>
                        <input type="text" class="form-control">
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



<footer id="footer" class="midnight-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/"
                               title="Free Twitter Bootstrap WordPress Themes and HTML templates">Hiroyuki</a>.
                All Rights Reserved.
            </div>
            <div class="col-sm-6">
                <ul class="pull-right">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Network</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer><!--/#footer-->

<script src="{{ asset('public/js/jquery.js') }}"></script>
<script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/js/jquery.prettyPhoto.js') }}"></script>
<script src="{{ asset('public/js/jquery.isotope.min.js') }}"></script>
<script src="{{ asset('public/js/main.js') }}"></script>
<script src="{{ asset('public/js/wow.min.js') }}"></script>
</body>
</html>