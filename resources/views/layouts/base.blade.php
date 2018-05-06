<?php $date = date('YmdHis'); ?>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'yodaemon.com') }}</title>
        <meta name="description" content="yodaemonのページ" >

        <!-- Styles -->
        <link href="{{ asset('css/common/bootstrap/bootstrap.min.css') }}?date={{ $date }}" rel="stylesheet">
        <link href="{{ asset('css/common/font-awesome/css/font-awesome.css') }}?date={{ $date }}" rel="stylesheet">
        <link href="{{ asset('css/common/yodaemon.css') }}?date={{ $date }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
    </head>

    <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="/">yodaemon.com</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <!--
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Document</a>
                    </li>
                    -->
                    <li class="nav-item">
                        <a class="nav-link" href="/blog" target="_blank">Blog</a>
                    </li>
                    <!--
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    -->
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    @yield('header')

    <!-- メインコンテンツ -->
    @yield('content')

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <p class="copyright text-muted">Copyright &copy; yodaemon.com 2018</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Javascript -->
    <script src="{{ asset('js/common/jquery/jquery.slim.js') }}?date={{ $date }}" type="text/javascript"></script>
    <script src="{{ asset('js/common/bootstrap/bootstrap.bundle.min.js') }}?date={{ $date }}" type="text/javascript"></script>
    <script src="{{ asset('js/common/yodaemon.js') }}?date={{ $date }}" type="text/javascript"></script>
    </body>

</html>
