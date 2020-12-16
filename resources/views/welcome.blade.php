<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <!-- Document Meta
    ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--IE Compatibility Meta-->
    <meta name="author" content="zytheme" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Elegant Restaurant & Cafe Html5 Template">
    <link href="assets/images/favicon/favicon.png" rel="icon">

    <!-- Fonts
    ============================================= -->


    <!-- Stylesheets
    ============================================= -->
    <link href="{{ asset('assets/css/external.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    <!-- RS5.0 Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/navigation.css') }}">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src="{{asset('assets/js/html5shiv.js')}}"></script>
    <script src="{{asset('assets/js/respond.min.js')}}"></script>
    <![endif]-->

    <!-- Document Title
    ============================================= -->
    <title>Granny | Elegant Restaurant & Cafe Html5 Template</title>
    <!-- style-->
    <style>
        * {box-sizing: border-box;}
        ul {list-style-type: none;}
        body {font-family: Verdana, sans-serif;}

        .month {
            padding: 70px 25px;
            width: 100%;
            background: #1abc9c;
            text-align: center;
        }

        .month ul {
            margin: 0;
            padding: 0;
        }

        .month ul li {
            color: white;
            font-size: 20px;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        .month .prev {
            float: left;
            padding-top: 10px;
        }

        .month .next {
            float: right;
            padding-top: 10px;
        }

        .weekdays {
            margin: 0;
            padding: 10px 0;
            background-color: #ddd;
        }

        .weekdays li {
            display: inline-block;
            width: 13.6%;
            color: #666;
            text-align: center;
        }

        .days {
            padding: 10px 0;
            background: #eee;
            margin: 0;
        }

        .days li {
            list-style-type: none;
            display: inline-block;
            width: 13.6%;
            text-align: center;
            margin-bottom: 5px;
            font-size:12px;
            color: #777;
        }

        .days li .active {
            padding: 5px;
            background: #1abc9c;
            color: white !important
        }

        /* Add media queries for smaller screens */
        @media screen and (max-width:720px) {
            .weekdays li, .days li {width: 13.1%;}
        }

        @media screen and (max-width: 420px) {
            .weekdays li, .days li {width: 12.5%;}
            .days li .active {padding: 2px;}
        }

        @media screen and (max-width: 290px) {
            .weekdays li, .days li {width: 12.2%;}
        }
        /* Admin Calendar Button */
        .DivPanel{margin:0px 0px 0px 0px;}
        .DivPanel ul li{ list-style-type:none; display: inline-block;padding:10px;background:#cccccc; color:black;}
        .DivPanel ul li a{color:black;}
        .DivPanel ul li a:hover{text-decoration:none;}
        .DivPanel ul li:hover{opacity:0.8;}
    </style>
    <!-- style end-->
</head>
<body>
<div class="preloader">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="wrapper clearfix">
    <header id="navbar-spy" class="header header-1 header-transparent header-bordered header-fixed">
        <nav id="primary-menu" class="navbar navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="logo" href="index.html">
                        <img class="logo-light" src="{{ asset('assets/images/logo/logo-light.png') }}" alt="granny Logo">
                        <img class="logo-dark" src="{{ asset('assets/images/logo/logo-dark.png') }}" alt="granny Logo">
                    </a>
                </div>

                <div class="module-container pull-right">
                    <!-- Module Reservation  -->
                    <div class="module module-reservation">
                        <a class="btn-popup" href="/login"><i class="lnr lnr-users"></i>KIRISH</a>

                        <!-- /.modal -->
                    </div>
                    <!-- Module Search -->
                    <!-- .module-search end -->
                    <!-- Module Side NAV -->
                </div>
                <!-- .module-container end -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse pull-right" id="navbar-collapse-1">
                    <ul class="nav navbar-nav nav-pos-right navbar-left">
                        <!-- Home Menu -->
                        <li class="has-dropdown mega-dropdown active">
                            <a href="/">Bosh sahifa</a>
                            <!-- .mega-dropdown-menu end -->
                        </li>
                        <!-- li end -->

                        <!-- About Menu -->
                        <li class="has-dropdown">
                            <a href="#footer">Biz Haqimizda</a>
                        </li>
                        <!-- li end -->

                        <!-- Menu Menu -->
                        <li class="has-dropdown">
                            <a href="#calendar">Calendar</a>
                        </li>
                        <!-- li end -->

                        <!-- Features Menu-->
                        <li class="has-dropdown">
                            <a href="#comment">Biz haqimizdagi fikrlar</a>
                        </li>

                        <!-- Blog Menu-->
                        <li class="has-dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">Xizmatlar</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Restoran Xizmati</a>
                                    <ul class="dropdown-menu">
                                @foreach($xizmat as $value)
                                    @if($value->menu=='Toyhana xizmati')
                                        <li>
                                            <a href="/#tabs1">{{ $value->name }}</a>
                                        </li>
                                    @endif
                                @endforeach
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Tashqi Xizmat</a>
                                    <ul class="dropdown-menu">
                                        @foreach($xizmat as $value)
                                            @if($value->menu=='Tashqi xizmatlar')
                                                <li>
                                                    <a href="/#tabs1">{{ $value->name }}</a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- li end -->

                        <!-- shop Menu -->
                        <!-- li end -->

                        <!-- Elements Menu -->
                        <li class="has-dropdown mega-dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">Menu</a>
                            <ul class="dropdown-menu mega-dropdown-menu">
                                <li>
                                    <div class="container">
                                        <div class="row">
                                            <!-- Column #1 -->
                                            <div class="col-md-3">
                                                <a href="#">Asosiy Ovqat</a>
                                                <ul>
                                                    @foreach($menu as $value)
                                                        @if($value->menu=='Asosiy Ovqat')
                                                            <li>
                                                                <a href="/#tabs1">{{ $value->name }}</a>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <!-- .col-md-3 end -->

                                            <!-- Column #2 -->
                                            <div class="col-md-3">
                                                <a href="#">Ikkinchi Ovqat</a>
                                                <ul>
                                                    @foreach($menu as $value)
                                                        @if($value->menu=='Ikkinchi Ovqat')
                                                            <li>
                                                                <a href="/#tabs1">{{ $value->name }}</a>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <!-- .col-md-3 end -->

                                            <!-- Column #3 -->
                                            <div class="col-md-3">
                                                <a href="#">Desert</a>
                                                <ul>
                                                    <!-- Bazaga ulash-->
                                                    @foreach($menu as $value)
                                                        @if($value->menu=='Disert')
                                                            <li>
                                                                <a href="/#tabs1">{{ $value->name }}</a>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <!-- .col-md-3 end -->

                                            <!-- Column #4 -->
                                            <div class="col-md-3">
                                                <a href="#">Ichimliklar</a>
                                                <ul>
                                                    <!-- bazaga ulash-->
                                                    @foreach($menu as $value)
                                                        @if($value->menu=='Ichimliklar')
                                                            <li>
                                                                <a href="/#tabs1">{{ $value->name }}</a>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <!-- .col-md-3 end -->
                                        </div>
                                        <!-- .row end -->
                                    </div>
                                    <!-- container end -->
                                </li>
                            </ul>
                            <!-- .mega-dropdown-menu end -->
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

    </header>
    <!-- Hero Section
    ====================================== -->
    <section id="slider" class="slider slide-overlay-black">
        <!-- START REVOLUTION SLIDER 5.0 -->
        <div class="rev_slider_wrapper">
            <div id="slider1" class="rev_slider"  data-version="5.0">
                <ul>
                    <!-- slide 1 -->
                    <li data-transition="zoomin"
                        data-slotamount="default"
                        data-easein="Power4.easeInOut"
                        data-easeout="Power4.easeInOut"
                        data-masterspeed="2000">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('assets/images/sliders/slide-bg/11.jpg') }}" alt="Slide Background Image"  width="1920" height="1280">
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="-130"
                             data-whitespace="nowrap"
                             data-width="none"
                             data-height="none"
                             data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'						data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on">
                            <div class="slide--subheadline">Xizmatlar</div>
                        </div>


                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="-65"
                             data-whitespace="nowrap"
                             data-width="none"
                             data-height="none"
                             data-frames='[{"delay":1750,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'						data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on">
                            <div class="slide--headline">Eng yaxshi xizmat kursatish</div>
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="20"
                             data-width="none"
                             data-height="none"
                             data-frames='[{"delay":2000,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on">
                            <div class="slide--bio text-center">Aynan bizda eng mashxur oshpazlar va hizmat kursatish mavjud <br> Ishoning biz sizni tuyingizni yuqori kaifiyatda utqazishga yordam beramiz ! </div>
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="100"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-frames='[{"delay":2250,"speed":1000,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'						data-splitin="none"
                             data-splitout="none"
                             data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-164","delay":""}]'
                             data-basealign="slide"
                             data-responsive_offset="on"
                             data-responsive="off">
                        </div>
                    </li>

                    <!-- slide 2 -->
                    <li data-transition="slideoverdown"
                        data-slotamount="default"
                        data-easein="Power4.easeInOut"
                        data-easeout="Power4.easeInOut"
                        data-masterspeed="2000">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('assets/images/sliders/slide-bg/3.jpg') }}" alt="Slide Background Image"  width="1920" height="1280">
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="-130"
                             data-whitespace="nowrap"
                             data-width="none"
                             data-height="none"
                             data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'						data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on">
                            <div class="slide--subheadline">Xizmatlar 2</div>
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="-65"
                             data-whitespace="nowrap"
                             data-width="none"
                             data-height="none"
                             data-frames='[{"delay":1750,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'						data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on">
                            <div class="slide--headline">Eng yaxshi xizmat kursatish</div>
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="20"
                             data-width="none"
                             data-height="none"
                             data-transform_idle="o:1;"
                             data-frames='[{"delay":2000,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on">
                            <div class="slide--bio text-center">Aynan bizda eng mashxur oshpazlar va hizmat kursatish mavjud <br> Ishoning biz sizni tuyingizni yuqori kaifiyatda utqazishga yordam beramiz ! </div>
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="100"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-frames='[{"delay":2250,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]'						data-splitin="none"
                             data-splitout="none"
                             data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-164","delay":""}]'
                             data-basealign="slide"
                             data-responsive_offset="on"
                             data-responsive="off">
                        </div>
                    </li>

                    <!-- slide 3 -->
                    <li data-transition="incube-horizontal"
                        data-slotamount="default"
                        data-easein="Power4.easeInOut"
                        data-easeout="Power4.easeInOut"
                        data-masterspeed="2000">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('assets/images/sliders/slide-bg/12.jpg') }}" alt="Slide Background Image"  width="1920" height="1280">
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="-65"
                             data-whitespace="nowrap"
                             data-width="none"
                             data-height="none"
                             data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'						data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on">
                            <div class="slide--subheadline">Xizmatlar 3</div>
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="0"
                             data-whitespace="nowrap"
                             data-width="none"
                             data-height="none"
                             data-frames='[{"delay":1750,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'						data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on">
                            <div class="slide--headline">Eng yaxshi xizmat kursatish</div>
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="100"
                             data-width="none"
                             data-height="none"
                             data-frames='[{"delay":2000,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'						data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on">
                            <div class="slide--bio text-center">Aynan bizda eng mashxur oshpazlar va hizmat kursatish mavjud <br> Ishoning biz sizni tuyingizni yuqori kaifiyatda utqazishga yordam beramiz ! </div>
                        </div>
                    </li>

                </ul>
            </div>
            <!-- END REVOLUTION SLIDER -->
        </div>
        <!-- END OF SLIDER WRAPPER -->
    </section>
    <!-- tabs
    ============================================= -->
    <section id="tabs1" class="tabs text-center bg-white pb-90">
        <div class="container">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                    <div class="heading heading-1 mb-50 text--center">
                        <p class="heading--subtitle">Xizmatlar</p>
                        <h2 class="heading--title mb-0">Bulimiga Xush kelibsiz</h2>
                        <div class="divider--shape-4"></div>
                        <p class="heading--desc">Bizda eng yaxshi hizmat kursatish bulimlari mavjud</p>
                    </div>
                </div>
                <!-- .col-md-8 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#About" data-toggle="tab">Restoran xizmatlari11</a></li>
                        <li><a href="#About1" data-toggle="tab">Tashqi Xizmatlar</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade in active banner banner-1" id="About">
                            <div class="row">
            @foreach($VarXizmat as $value)
                @if($value->menu=='Toyhana xizmati')
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="banner-panel">
                                        <div class="banner--img">
                                            <img src="{{ asset('upload')}}/{{ $value->img }}" alt="banner img" class="img-responsive">
                                        </div>
                                        <div class="banner--content">
                                            <h3>{{ $value->name }}</h3>
                                            <p>{{ $value->text }}</p>
                                        </div>
                                    </div>
                                </div>
                @endif
            @endforeach
                            </div>
                        </div>
                    {{--Start--}}
                    <div class="tab-pane fade banner banner-5" id="About1">
                        <div class="row">
            @foreach($VarXizmat1 as $value)
                @if($value->menu=='Tashqi xizmatlar')
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="banner-panel">
                                    <div class="banner--img">
                                        <img src="{{ asset('upload')}}/{{ $value->img }}" alt="banner img" class="img-responsive">
                                    </div>
                                    <div class="banner--content">
                                        <h3>{{ $value->name }}</h3>
                                        <p>{{ $value->text }}</p>
                                    </div>
                                </div>
                            </div>
                @endif
            @endforeach
                        </div>
                    </div>
                        <!-- .row end -->
                    </div>
                    <!-- .tabs-content end -->
                </div>
                </div>
                <!-- .col-md-12 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- #tabs1 end -->

    <!-- specials #1
    ============================================= -->
    <section id="specials" class="specials specials-1 bg-overlay bg-overlay-dark4 bg-parallax text--center">
        <div class="bg-section">
            <img src="{{ asset('assets/images/background/8.jpg') }}" alt="Background" />
        </div>
        <div class="container" id="calendar">
            <div class="divider--shape-1up"></div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                    <div class="heading heading-1 mb-50 text--center">
                        <p class="heading--subtitle">Buyurtma Kalendari</p>
                        <h2 class="heading--title color-white">Alohida buyalgan kunlar band kunlar hisoblanadi</h2>
                    </div>
                </div>
                <!-- .col-md-8 end -->
            </div>
            <!-- .row end -->
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
                    <div>
                        <!-- Dish #1 -->
                        @if(isset($month))
                            <div style="width:100%;">
                                <div class="month">
                                    <ul>
                                        @foreach( $month as $value )
                                            <li class="prev"><a href="/{{ ($value->id)-1 }}/#calendar" style="text-decoration:none;">&#10094;</a></li>
                                            <li class="next"><a href="/{{ ($value->id)+1 }}/#calendar" style="text-decoration:none;">&#10095;</a></li>
                                            <li>
                                                {{ $value->name }}<br>
                                                <span style="font-size:18px">{{ $value->year }}</span>
                                                @endforeach
                                            </li>
                                    </ul>
                                </div>
                                <ul class="weekdays">
                                    <li>Dush</li>
                                    <li>Sesh</li>
                                    <li>Chor</li>
                                    <li>Pays</li>
                                    <li>Juma</li>
                                    <li>Shan</li>
                                    <li>Yaks</li>
                                </ul>
                                <ul class="days">
                                    @foreach( $days as $value )
                                        @if( $value->day=='---' )
                                            <li> </li>
                                        @else
                                            @if($CalenType=='naxor')
                                                @if($value->naxor=='band')
                                                    <li><span class="active">{{ $value->day }}</span></li>
                                                @else
                                                    <li>{{ $value->day }}</li>
                                                @endif
                                            @elseif($CalenType=='abed')

                                                @if($value->abed=='band')
                                                    <li><span class="active">{{ $value->day }}</span></li>
                                                @else
                                                    <li>{{ $value->day }}</li>
                                                @endif

                                            @elseif($CalenType=='vecher')

                                                @if($value->vecher=='band')
                                                    <li><span class="active">{{ $value->day }}</span></li>
                                                @else
                                                    <li>{{ $value->day }}</li>
                                                @endif
                                            @endif
                                        @endif
                                    @endforeach
                                </ul>
                                </div>
                            {{--Select end--}}
                            <div class="DivPanel"><br/>
                                <h3 style="text-transform:uppercase; color:white;"> {{ $CalenType }} </h3>
                                <ul>
                                    <li><a href="/naxorVar/{{ $day }}/#calendar">Nahorgi osh</a></li>
                                    <li><a href="/abedVar/{{ $day }}/#calendar">Obed</a></li>
                                    <li><a href="/vecherVar/{{ $day }}/#calendar">Vecher</a></li>
                                </ul>
                            </div>
                        @endif
                        <!-- .dish end -->
                    </div>
                    <!-- .dishes-wrapper end -->
                </div>
                <!-- .col-md-10 end -->
            </div>
            <!-- .row end -->
            <div class="divider--shape-1down"></div>
        </div>
        <!-- .container end -->
    </section>
    <!-- #specials1 end -->

    <!-- Menu Mixed Grid
    ============================================= -->

    <!-- #menuMixedGrid end -->

    <!-- Testimonial #1
    ============================================= -->
    <section id="testimonial1" class="testimonial testimonial-1 bg-overlay bg-overlay-dark bg-parallax pb-90">
        <div class="bg-section">
            <img src="{{ asset('assets/images/background/1.jpg') }}" alt="Background" />
        </div>

        <div class="container" id="comment">
            <div class="divider--shape-1up"></div>
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                    <div class="heading heading-1 mb-40 text--center">
                        <p class="heading--subtitle">Biz haqimizda</p>
                        <h2 class="heading--title color-white">Fikrlarni kurishingiz mumkin</h2>
                    </div>
                </div>
                <!-- .col-md-8 end -->
            </div>
            <!-- .row end -->
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div id="testimonial-carousel" class="carousel carousel-dots carousel-white" data-slide="3" data-slide-rs="2" data-autoplay="true" data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="800">
                        <!-- Testimonial #1 -->
        @foreach($VarComment as $value)
                        <div class="testimonial-panel">
                            <div class="testimonial--rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="testimonial--body">
                                <p>“ {{ $value->Text }} ”</p>
                            </div>
                            <div class="testimonial--meta">
                                <div class="testimonial--img">
                                    <img src="{{ asset('assets/images/testimonial/1.png') }}" alt="Testimonial Author">
                                </div>
                                <div class="testimonial--author">
                                    <h4>- {{ $value->name }}</h4>
                                </div>
                            </div>
                            <!-- .testimonial-meta end -->
                        </div>
        @endforeach
                    </div>
                </div>
                <!-- .col-md-12 end -->
            </div>
            <!-- .row end -->
            <div class="divider--shape-1down"></div>
        </div>
        <!-- .container end -->
    </section>
    <!-- #testimonial1 end -->

    <!-- Blog Carousel
    ============================================= -->
    <section id="blog" class="blog blog-carousel pb-90">
        <div class="container">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                    <div class="heading heading-1 mb-50 text--center">
                        <p class="heading--subtitle">Mazzali</p>
                        <h2 class="heading--title mb-0">Taomlar</h2>
                        <div class="divider--shape-4"></div>
                        <p class="heading--desc">Mazzali taomlar faqat bizda. </p>
                    </div>
                </div>
                <!-- .col-md-8 end -->
            </div>
            <!-- .row end -->
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="carousel carousel-dots" data-slide="4" data-slide-rs="2" data-autoplay="true" data-nav="false" data-dots="true" data-space="0" data-loop="true" data-speed="800">
                        <!-- Blog Entry #1 -->
                @foreach($menu as $value)
                        <div class="blog-entry">
                            <div class="entry--img">
                                <a href="#">
                                    <img src="{{ asset('upload')}}/{{ $value->img }}" alt="entry image"/>
                                </a>
                            </div>
                            <div class="entry--content">
                                <div class="entry--title">
                                    <h4><a href="#">{{ $value->name }}</a></h4>
                                </div>
                                <div class="entry--bio">
                                    {{ $value->text }}
                                </div>
                            </div>
                        </div>
                @endforeach
                    </div>
                    <!-- .carousel end -->
                </div>
                <!-- .col-md-6 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- #blog end -->
    <!-- footer#1
    ============================================= -->
    <footer id="footer" class="footer footer-1 text-center">
        <!-- Widget Section
        ============================================= -->
        <div class="footer--widget text--center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-4">
                        <div class="footer--widget-content">
                            <h3>Bizni Adresimiz</h3>
                            <p>Toshkent shahar Yunusobot 4-mavze</p>
                        </div>
                    </div>
                    <!-- .col-md-3 end -->
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="footer--reservation">
                            <div class="divider--shape-10up"></div>
                            <h3>Fikr yoki muloxaza Qoldirish</h3>
                            <div class="divider--shape-11"></div>
                            <div class="footer--reservation-wrapper">
                                <ul class="list-unstyled">
                                    <li>Ish vaqti <span>09.00 – 24:00</span></li>
                                    <li>Shanba <span>08:00 – 03.00</span></li>
                                    <li>Yakshanba <span>Dam olish kuni</span></li>
                                </ul>
                                <a class="btn btn--primary btn--bordered btn--block" data-toggle="modal" data-target="#reservationPopup">Fikr Qoldirish</a>
                                <div class="modal fade reservation-popup" tabindex="-1" role="dialog" id="reservationPopup">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">

                                            <div class="modal-body">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                                                <div class="row reservation">
                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="reservation-form mb-30 bg-white text-center">
                                                            <div class="reservation--dec">
                                                                Diqqat sizning fikringiz t`gridan to`gri Administratorga borib tushadi
                                                            </div>
                                                            <form class="mb-0" method="post" action="/commentDB">
                                                                <div class="row">
                                                                    {{ csrf_field() }}
                                                                    <div class="col-xs-12 col-sm-12 col-md-4">
                                                                        <input type="text" class="form-control" name="name" id="footerName" placeholder="Ismingiz" required>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-4">
                                                                        <input type="email" class="form-control" name="email" id="footerEmail" placeholder="Email-lingiz">
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="text" class="form-control" name="Phone" id="footerPhone" placeholder="Tell nomeriz" required>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                                        <textarea class="form-control" name="comment" id="footerMessage" rows="2" placeholder="Fikr qoldirish"></textarea>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                                        <input type="submit" value="Junatish" name="submit" class="btn btn--secondary btn--block">
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                                        <!--Alert Message-->
                                                                        <div class="reservation-result"></div>
                                                                    </div>

                                                                </div>
                                                                <!-- .row end -->
                                                            </form>
                                                            <!-- form end -->
                                                        </div>
                                                        <!-- .contact-form end -->
                                                    </div>
                                                    <!-- .col-md-8 end -->
                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="reservation-link text-center">
                                                            <span class="text-white">Created by</span> <a href="#">Bakhronov.H</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- .row end -->

                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->
                            </div>
                            <div class="divider--shape-10down"></div>
                        </div>
                    </div>
                    <!-- .col-md-3 end -->
                    <div class="col-xs-12 col-sm-3 col-md-4">
                        <div class="footer--widget-content">
                            <h3>Bizni qushimcha bog`lonish</h3>
                            <p class="mb-0">Bizni Email-limiz: Billur@mail.com</p>
                            <p class="mb-0">Phone: +998991179202</p>
                        </div>
                    </div>
                    <!-- .col-md-3 end -->

                </div>
            </div>
            <!-- .container end -->
        </div>
        <!-- .footer-widget end -->
        <!--Social
        ============================================= -->
        <div class="footer--social">
            <div class="container">
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </div>
        <!-- .footer-widget end -->
        <!-- Copyrights
        ============================================= -->
        <div class="footer--copyright text-center">
            <div class="divider--shape-dark"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <span>&copy; 2018, Create by </span> <a>Bahronov H</a>
                    </div>
                </div>
            </div>
            <!-- .container end -->
        </div>
        <!-- .footer-copyright end -->
    </footer>
</div>
<!-- #wrapper end -->

<!-- Footer Scripts
============================================= -->
<script src="{{asset('assets/js/jquery-2.2.4.min.js')}}"></script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/functions.js') }}"></script>
<!-- RS5.0 Core JS Files -->
<script src="{{ asset('assets/revolution/js/jquery.themepunch.tools.min.js?rev=5.0') }}"></script>
<script src="{{ asset('assets/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0') }}"></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<!-- RS Configration JS Files -->
<script src="{{ asset('assets/js/rsconfig.js') }}"></script>
</body>

</html>