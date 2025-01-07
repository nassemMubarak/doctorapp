<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
   <title>Medical - Home</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('assets_medical/images/favicon.png')}}" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('assets_medical/css/bootstrap.min.css')}}">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="{{ asset('assets_medical/css/font-awesome.min.css')}}">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="{{ asset('assets_medical/css/LineIcons.css')}}">

    <!--====== Flaticon css ======-->
    <link rel="stylesheet" href="{{ asset('assets_medical/css/flaticon.css')}}">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{ asset('assets_medical/css/magnific-popup.css')}}">

    <!--====== Gijgo css ======-->
    <link rel="stylesheet" href="{{ asset('assets_medical/css/gijgo.min.css')}}">

    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="{{ asset('assets_medical/css/nice-select.css')}}">

    <!--====== Time Picker css ======-->
    <link rel="stylesheet" href="{{ asset('assets_medical/css/jquery.timepicker.min.css')}}">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="{{ asset('assets_medical/css/animate.css')}}">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{ asset('assets_medical/css/slick.css')}}">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ asset('assets_medical/css/default.css')}}">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('assets_medical/css/style.css')}}">


</head>

<body>
    
    <!--====== PRELOADER PART START ======-->


    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->

    <header class="header-area">
        <div class="header-top pb-10">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-top-content d-md-flex justify-content-between align-items-center">
                            <div class="header-info pt-10 d-none d-md-block">
                                <ul>
                                    <li><i class="lni-envelope"></i> nassem@contact.com</li>
                                    <li><i class="lni-mobile"></i> +97259220523</li>
                                    <li><i class="lni-alarm-clock"></i> 8AM to 6PM (Sun - Fri) Sat Off</li>
                                </ul>
                            </div> <!-- header info -->

                            <div class="header-social text-center text-md-right pt-10">
                                <ul>
                                    <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                    <li><a href="#"><i class="lni-linkedin"></i></a></li>
                                    <li><a href="#"><i class="lni-pinterest"></i></a></li>
                                </ul>
                            </div> <!-- header social -->
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header-top -->

        <div class="navigation navigation-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="{{ route('index')}}">
                                <img src="assets/images/logo.png" alt="Logo">
                            </a> <!-- Logo -->

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item ">
                                        <a class="active" href="{{ route('index')}}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('services')}}">About us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('doctors.index')}}">Doctors</a>
                                        
                                        {{-- <ul class="sub-menu">
                                            <li><a href="department.html">Department</a></li>
                                            <li><a href="department-details.html">Department Details</a></li>
                                        </ul> --}}
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('news.index')}}">News</a>
                                        
                                        {{-- <ul class="sub-menu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul> --}}
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('contacts.index')}}">Contact</a>
                                    </li>
                                </ul> <!-- navbar-nav -->
                            </div> <!-- navbar-collapse -->

                            <div class="navbar-btn d-none d-sm-block">
                                <a class="main-btn" href="{{ route('appointments.index')}}">Appointment</a>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navigation -->
    </header>