<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Prueba</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{ asset('plantilla/images/icon/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('plantilla/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plantilla/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plantilla/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('plantilla/css/metisMenu.css') }}">
    <link rel="stylesheet" href="{{ asset('plantilla/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plantilla/css/slicknav.min.css') }}">
    <!-- others css -->
    <link rel="stylesheet" href="{{ asset('plantilla/css/typography.css') }}">
    <link rel="stylesheet" href="{{ asset('plantilla/css/default-css.css') }}">
    <link rel="stylesheet" href="{{ asset('plantilla/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('plantilla/css/responsive.css') }}">
    <!-- modernizr css -->
    <script src="{{ asset('plantilla/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body class="body-bg">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- main wrapper start -->
    <div class="horizontal-main-wrapper">
        <!-- main header area start -->
        <div class="mainheader-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="#"><img src="{{ asset('plantilla/images/icon/logo2.png') }}" alt="logo"></a>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-9 clearfix text-right">
                        
                        <div class="clearfix d-md-inline-block d-block">
                            <div class="user-profile m-0">
                                <img class="avatar user-thumb" src="{{ asset('plantilla/images/author/avatar.png') }}" alt="avatar">
                                <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Kumkum Rai <i class="fa fa-angle-down"></i></h4>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Message</a>
                                    <a class="dropdown-item" href="#">Settings</a>
                                    <a class="dropdown-item" href="#">Log Out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main header area end -->
        <!-- header area start -->
        <div class="header-area header-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9  d-none d-lg-block">
                        <div class="horizontal-menu">
                            <nav>
                                <ul id="nav_menu">
                                    <li><a href="maps.html"><i class="ti-dashboard"></i> <span>Home</span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- nav and search button -->
                    <div class="col-lg-3 clearfix">
                        <div class="search-box">
                            <form action="#">
                                <input type="text" name="search" placeholder="Buscar..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>
                    <!-- mobile_menu -->
                    <div class="col-12 d-block d-lg-none">
                        <div id="mobile_menu"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header area end -->
        <!-- page title area end -->
        <div class="main-content-inner">
            <div class="container">
                <div class="row">
                    @for($i=0;$i<4;$i++)
                    <div class="col-lg-3">
                        <div class="col-md-12">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header" style="background: #3f4d50; color: #fff;">
                                        <h5 class="modal-title">{{ $partdesta[$i]['division'] }}</h5>
                                        <span style="float: right;">{{ $partdesta[$i]['num_jor'] }}</span>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-4" style="float: ;">                          
                                                <a href="#" style="color: black;">{{ $partdesta[$i]['equi1'] }}</a><br>
                                                <img src="{{ $partdesta[$i]['scdo1'] }}" height="60" width="60" class="mb-1">
                                            </div>
                                            <div class="col-lg-4" align="center" style="margin-top: 15px;">
                                                <b>{{ $partdesta[$i]['cuando'] }}</b>
                                                <button type="button" class="btn btn-flat btn-xs mb-1" disabled style="background: #3f4d50 !important; color: #fff;">{{ $partdesta[$i]['mcdor'] }}</button>
                                            </div>
                                            <div class="col-lg-4" style="float: ;">
                                                <a href="#" style="color: black;">{{ $partdesta[$i]['equi2'] }}</a><br>
                                                <img src="{{ $partdesta[$i]['scdo2'] }}" height="60" width="60" class="mb-1">
                                            </div>
                                        </div>
                                        <p>
                                            <a href="#" class="btn btn-flat btn-secondary btn-block btn-xs mb-1" disabled>{{ str_limit($partdesta[$i]['tele'],30) }}</a>
                                        </p>
                                        <p>
                                            <a href="#" class="btn btn-flat btn-success btn-xs mb-1">{{ $partdesta[$i]['coments_a1'] }}</a>
                                            <a href="#" class="btn btn-flat btn-secondary btn-xs mb-1">{{ $partdesta[$i]['coments_a2'] }}</a>
                                            <a href="#" class="btn btn-flat btn-success btn-xs mb-1">{{ $partdesta[$i]['coments_a3'] }}</a>
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success btn-block">{{ $partdesta[$i]['bet'] }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endfor
                    <div class="row">
                        @for($i=4;$i<8;$i++)
                    <div class="col-lg-3">
                        <div class="col-md-12">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header" style="background: #3f4d50; color: #fff;">
                                        <h5 class="modal-title">{{ $partdesta[$i]['division'] }}</h5>
                                        <span style="float: right;">{{ $partdesta[$i]['num_jor'] }}</span>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-4" style="float: ;">                          
                                                <a href="#" style="color: black;">{{ $partdesta[$i]['equi1'] }}</a><br>
                                                <img src="{{ $partdesta[$i]['scdo1'] }}" height="60" width="60" class="mb-1">
                                            </div>
                                            <div class="col-lg-4" align="center" style="margin-top: 15px;">
                                                <b>{{ $partdesta[$i]['cuando'] }}</b>
                                                <button type="button" class="btn btn-flat btn-xs mb-1" disabled style="background: #3f4d50 !important; color: #fff;">{{ $partdesta[$i]['mcdor'] }}</button>
                                            </div>
                                            <div class="col-lg-4" style="float: ;">
                                                <a href="#" style="color: black;">{{ $partdesta[$i]['equi2'] }}</a><br>
                                                <img src="{{ $partdesta[$i]['scdo2'] }}" height="60" width="60" class="mb-1">
                                            </div>
                                        </div>
                                        <p>
                                            <a href="#" class="btn btn-flat btn-secondary btn-block btn-xs mb-1" disabled>{{ str_limit($partdesta[$i]['tele'],30) }}</a>
                                        </p>
                                        <p>
                                            <a href="#" class="btn btn-flat btn-success btn-xs mb-1">{{ $partdesta[$i]['coments_a1'] }}</a>
                                            <a href="#" class="btn btn-flat btn-secondary btn-xs mb-1">{{ $partdesta[$i]['coments_a2'] }}</a>
                                            <a href="#" class="btn btn-flat btn-success btn-xs mb-1">{{ $partdesta[$i]['coments_a3'] }}</a>
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success btn-block">{{ $partdesta[$i]['bet'] }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endfor
                    </div>
                    <!-- fin del primer div -->
                
            </div>
            <!-- fin del row1 -->
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2020. <a href="https://eiche.cl">EICHE</a>.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- main wrapper start -->
    <!-- jquery latest version -->
    <script src="{{ asset('plantilla/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <!-- bootstrap 4 js -->
    <script src="{{ asset('plantilla/js/popper.min.js') }}"></script>
    <script src="{{ asset('plantilla/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plantilla/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('plantilla/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('plantilla/js/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('plantilla/js/jquery.slicknav.min.js') }}"></script>

    <script src="{{ asset('plantilla/js/line-chart.js') }}"></script>
    <!-- all pie chart -->
    <script src="{{ asset('plantilla/js/pie-chart.js') }}"></script>
    <!-- all bar chart -->
    <script src="{{ asset('plantilla/js/bar-chart.js') }}"></script>
    <!-- all map chart -->
    <script src="{{ asset('plantilla/js/maps.js') }}"></script>
    <!-- others plugins -->
    <script src="{{ asset('plantilla/js/plugins.js') }}"></script>
    <script src="{{ asset('plantilla/js/scripts.js') }}"></script>
</body>

</html>
