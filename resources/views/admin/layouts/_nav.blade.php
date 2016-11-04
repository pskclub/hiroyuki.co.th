<header class="main-header">
    <!-- Logo -->
    <a href="{{ url('admin') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>HRK</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Hiroyuki</b>DashBoard</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li><a target="_blank" href="{{ url('/') }}"><span class="fa fa-eye"></span> ดูหน้าเว็บ</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">{{Auth::user()->email}} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('admin/logout') }}">ออกจากระบบ</a></li>

                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->

            </ul>
        </div>
    </nav>
</header>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">

            <li>
                <a href="{{ url("admin") }}">
                    <i class="fa fa-dashboard"></i> <span>ทั่วไป</span>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/category') }}">
                    <i class="fa fa-th"></i> <span>หมวดหมู่สินค้า</span>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/product') }}">
                    <i class="fa fa-th-large"></i> <span>สินค้า</span>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/user') }}">
                    <i class="fa fa-user"></i> <span>ผู้ใช้</span>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/setting') }}">
                    <i class="fa fa-cog"></i> <span>ตั้งค่า</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>