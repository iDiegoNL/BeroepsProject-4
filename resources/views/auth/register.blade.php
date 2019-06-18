<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BandWalk') }}</title>

    <!-- Main Font -->
    <script src="{{ asset('js/webfontloader.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {
                families: ['Roboto:300,400,500,700:latin']
            }
        });
    </script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('Bootstrap/dist/css/bootstrap-reboot.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Bootstrap/dist/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Bootstrap/dist/css/bootstrap-grid.css') }}">

    <!-- Main Styles CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/all.min.css') }}">
</head>

<body class="landing-page">


<!-- Preloader -->

<div id="hellopreloader">
    <div class="preloader">
        <svg width="45" height="45" stroke="#fff">
            <g fill="none" fill-rule="evenodd" stroke-width="2" transform="translate(1 1)">
                <circle cx="22" cy="22" r="6" stroke="none">
                    <animate attributeName="r" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite"
                             values="6;22"/>
                    <animate attributeName="stroke-opacity" begin="1.5s" calcMode="linear" dur="3s"
                             repeatCount="indefinite" values="1;0"/>
                    <animate attributeName="stroke-width" begin="1.5s" calcMode="linear" dur="3s"
                             repeatCount="indefinite" values="2;0"/>
                </circle>
                <circle cx="22" cy="22" r="6" stroke="none">
                    <animate attributeName="r" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite"
                             values="6;22"/>
                    <animate attributeName="stroke-opacity" begin="3s" calcMode="linear" dur="3s"
                             repeatCount="indefinite" values="1;0"/>
                    <animate attributeName="stroke-width" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite"
                             values="2;0"/>
                </circle>
                <circle cx="22" cy="22" r="8">
                    <animate attributeName="r" begin="0s" calcMode="linear" dur="1.5s" repeatCount="indefinite"
                             values="6;1;2;3;4;5;6"/>
                </circle>
            </g>
        </svg>

        <div class="text">Loading ...</div>
    </div>
</div>

<!-- ... end Preloader -->
<div class="content-bg-wrap"></div>


<!-- Header Standard Landing  -->

<div class="header--standard header--standard-landing" id="header--standard">
    <div class="container">
        <div class="header--standard-wrap">

            <a href="#" class="logo">
                <div class="img-wrap">
                    <img src="{{ asset('img/logo_transparent_nt.png') }}" alt="{{ config('app.name', 'BandWalk') }}"
                         height="40" width="40">
                </div>
                <div class="title-block">
                    <h6 class="logo-title">{{ config('app.name', 'BandWalk') }}</h6>
                    <div class="sub-title">Driven by Music</div>
                </div>
            </a>

            <a href="#" class="open-responsive-menu js-open-responsive-menu">
                <svg class="olymp-menu-icon">
                    <use xlink:href="svg-icons/sprites/icons.svg#olymp-menu-icon"></use>
                </svg>
            </a>

            <div class="nav nav-pills nav1 header-menu">
                <div class="mCustomScrollbar">
                    <ul>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" href="#"
                               role="button" aria-haspopup="false" aria-expanded="false" tabindex='1'>Profile</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Profile Page</a>
                                <a class="dropdown-item" href="#">Newsfeed</a>
                                <a class="dropdown-item" href="#">Post Versions</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown dropdown-has-megamenu">
                            <a href="#" class="nav-link dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"
                               role="button" aria-haspopup="false" aria-expanded="false" tabindex='1'>Forums</a>
                            <div class="dropdown-menu megamenu">
                                <div class="row">
                                    <div class="col col-sm-3">
                                        <h6 class="column-tittle">Main Links</h6>
                                        <a class="dropdown-item" href="#">Profile Page<span
                                                    class="tag-label bg-blue-light">new</span></a>
                                        <a class="dropdown-item" href="#">Profile Page</a>
                                        <a class="dropdown-item" href="#">Profile Page</a>
                                        <a class="dropdown-item" href="#">Profile Page</a>
                                        <a class="dropdown-item" href="#">Profile Page</a>
                                        <a class="dropdown-item" href="#">Profile Page</a>
                                    </div>
                                    <div class="col col-sm-3">
                                        <h6 class="column-tittle">BuddyPress</h6>
                                        <a class="dropdown-item" href="#">Profile Page</a>
                                        <a class="dropdown-item" href="#">Profile Page</a>
                                        <a class="dropdown-item" href="#">Profile Page<span
                                                    class="tag-label bg-primary">HOT!</span></a>
                                        <a class="dropdown-item" href="#">Profile Page</a>
                                        <a class="dropdown-item" href="#">Profile Page</a>
                                        <a class="dropdown-item" href="#">Profile Page</a>
                                    </div>
                                    <div class="col col-sm-3">
                                        <h6 class="column-tittle">Corporate</h6>
                                        <a class="dropdown-item" href="#">Profile Page</a>
                                        <a class="dropdown-item" href="#">Profile Page</a>
                                        <a class="dropdown-item" href="#">Profile Page</a>
                                        <a class="dropdown-item" href="#">Profile Page</a>
                                        <a class="dropdown-item" href="#">Profile Page</a>
                                        <a class="dropdown-item" href="#">Profile Page</a>
                                    </div>
                                    <div class="col col-sm-3">
                                        <h6 class="column-tittle">Forums</h6>
                                        <a class="dropdown-item" href="#">Profile Page</a>
                                        <a class="dropdown-item" href="#">Profile Page</a>
                                        <a class="dropdown-item" href="#">Profile Page</a>
                                        <a class="dropdown-item" href="#">Profile Page</a>
                                        <a class="dropdown-item" href="#">Profile Page</a>
                                        <a class="dropdown-item" href="#">Profile Page</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Terms & Conditions</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Events</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Privacy Policy</a>
                        </li>
                        <li class="close-responsive-menu js-close-responsive-menu">
                            <svg class="olymp-close-icon">
                                <use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use>
                            </svg>
                        </li>
                        <li class="nav-item js-expanded-menu">
                            <a href="#" class="nav-link">
                                <svg class="olymp-menu-icon">
                                    <use xlink:href="svg-icons/sprites/icons.svg#olymp-menu-icon"></use>
                                </svg>
                                <svg class="olymp-close-icon">
                                    <use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use>
                                </svg>
                            </a>
                        </li>

                        <li class="menu-search-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#main-popup-search">
                                <svg class="olymp-magnifying-glass-icon">
                                    <use xlink:href="svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ... end Header Standard Landing  -->
<div class="header-spacer--standard"></div>

<div class="container">
    <div class="row display-flex">
        <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="landing-content">
                <h1>BandWalk</h1>
                <p>
                    The upcoming social media platform driven by music.
                </p>
                <a href="#" class="btn btn-md btn-border c-white">Browse Events</a>
            </div>
        </div>

        <div class="col col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12">

            <!-- Login-Registration Form  -->

            <div class="registration-login-form">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <svg class="olymp-login-icon">
                                <use xlink:href="svg-icons/sprites/icons.svg#olymp-login-icon"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">
                            <svg class="olymp-register-icon">
                                <use xlink:href="svg-icons/sprites/icons.svg#olymp-register-icon"></use>
                            </svg>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active">
                        <div class="title h6">Sign Up to BandWalk</div>
                        <form class="content" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label" for="username">Your Username</label>
                                        <input class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}"
                                               type="text" name="username" id="username" value="iDiego"
                                               value="{{ old('username') }}" required>
                                        @if ($errors->has('username'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('username') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label" for="email">Your Email</label>
                                        <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                               type="email" name="email" id="email" value="idiegogameplay@gmail.com"
                                               value="{{ old('email') }}" required>
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group label-floating">
                                        <label class="control-label" for="password">Your Password</label>
                                        <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                               type="password" name="password" id="password"
                                               value="piepje52" required>
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group label-floating">
                                        <label class="control-label" for="password_confirmation">Confirm Your
                                            Password</label>
                                        <input class="form-control" type="password" name="password_confirmation"
                                               id="password_confirmation" value="piepje52" required>
                                    </div>

                                    <div class="remember">
                                        <p>By signing up, you agree to our <a href="#">Terms of Service</a>, <a
                                                    href="#">Privacy Policy</a>, and <a href="#">Cookie Use</a>. You
                                            also agree that you’re over 16 years of age.</p>
                                    </div>
                                    <button type="submit" class="btn btn-purple btn-lg full-width">Complete Registration!</button>

                                    <div class="or"></div>

                                    <a href="#" class="btn btn-lg bg-spotify full-width btn-icon-left"><i
                                                class="fab fa-spotify" aria-hidden="true"></i>Register with Spotify</a>

                                    <a href="#" class="btn btn-lg bg-soundcloud full-width btn-icon-left"><i
                                                class="fab fa-soundcloud" aria-hidden="true"></i>Register with
                                        SoundCloud</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Window Popup Main Search -->

<div class="modal fade" id="main-popup-search" tabindex="-1" role="dialog" aria-labelledby="main-popup-search"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered window-popup main-popup-search" role="document">
        <div class="modal-content">
            <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                <svg class="olymp-close-icon">
                    <use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use>
                </svg>
            </a>
            <div class="modal-body">
                <form class="form-inline search-form" method="post">
                    <div class="form-group label-floating">
                        <label class="control-label">What are you looking for?</label>
                        <input class="form-control bg-white" placeholder="" type="text" value="">
                    </div>

                    <button class="btn btn-purple btn-lg">Search</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ... end Window Popup Main Search -->

<!-- JS Scripts -->
<script src="{{ asset('js/jquery-3.2.1.js') }}"></script>
<script src="{{ asset('js/jquery.appear.js') }}"></script>
<script src="{{ asset('js/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('js/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('js/jquery.matchHeight.js') }}"></script>
<script src="js/Headroom.js"></script>
<script src="js/velocity.js"></script>
<script src="js/ScrollMagic.js"></script>
<script src="js/jquery.waypoints.js"></script>
<script src="js/jquery.countTo.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/material.min.js"></script>
<script src="js/bootstrap-select.js"></script>
<script src="js/smooth-scroll.js"></script>
<script src="js/selectize.js"></script>
<script src="js/swiper.jquery.js"></script>
<script src="js/moment.js"></script>
<script src="js/daterangepicker.js"></script>
<script src="js/simplecalendar.js"></script>
<script src="js/fullcalendar.js"></script>
<script src="js/isotope.pkgd.js"></script>
<script src="js/ajax-pagination.js"></script>
<script src="js/Chart.js"></script>
<script src="js/chartjs-plugin-deferred.js"></script>
<script src="js/circle-progress.js"></script>
<script src="js/loader.js"></script>
<script src="js/run-chart.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/jquery.gifplayer.js"></script>
<script src="js/mediaelement-and-player.js"></script>
<script src="js/mediaelement-playlist-plugin.min.js"></script>
<script src="js/ion.rangeSlider.js"></script>

<script src="{{ asset('js/base-init.js') }}"></script>
<script src="{{ asset('js/all.min.js') }}"></script>

<script src="{{ asset('Bootstrap/dist/js/bootstrap.bundle.js') }}"></script>

</body>
</html>