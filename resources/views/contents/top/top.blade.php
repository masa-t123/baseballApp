@extends('layouts.base')

@section('css')
    <link href="{{ asset('css/contents/top/top.css') }}?date={{ date('YmdHis') }}" rel="stylesheet">
@endsection

@section('js')
    <script src="{{ asset('js/contents/top/top.js') }}?date={{ date('YmdHis') }}" type="text/javascript"></script>
@endsection

@section('header')
    <header class="masthead" style="background-image: url({{ asset('image/common/home-bg.jpg') }})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>yodaemon.com</h1>
                        <span class="subheading">何かの勢いで作った</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('content')

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-10 mx-auto">
                <p><i class="fas fa-pencil-alt"></i>&nbsp;更新履歴</p>
                @include('contents.top.parts.updateLog')
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 col-md-5 mx-auto">
                <p><i class="fas fa-rss"></i>&nbsp;Blog</p>
                <hr>
                @foreach ($rssList as $rss)
                    <div class="post-preview">
                        <a href="{{ $rss['link'] }}" target="_blank">
                            <h2 class="post-title">
                                {{ $rss['title'] }}
                            </h2>
                            <h3 class="post-subtitle">
                                {{ $rss['description'] }}
                            </h3>
                        </a>
                        <p class="post-meta">Posted by
                            <a href="/blog" target="_blank">yodaemon-blog</a>
                            {{ $rss['date'] }}
                        </p>
                    </div>
                    <hr>
                @endforeach
                <!-- Pager -->
                <div class="clearfix">
                    <a class="btn btn-primary float-right" href="/blog" target="_blank">more &rarr;</a>
                </div>
            </div>

            <div class="col-lg-5 col-md-5 mx-auto">
                <p><i class="fab fa-twitter"></i>&nbsp;Twitter</p>
                <hr>
                <!-- TwitterWidget -->
                <a class="twitter-timeline" href="https://twitter.com/yodaemon3?ref_src=twsrc%5Etfw">Tweets by yodaemon3</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
    </div>

@endsection
