@extends('layouts.base')

@section('content')

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-10 mx-auto">
                <p>更新履歴</p>
                @include('contents.top.parts.updateLog')
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 col-md-5 mx-auto">
                <p>Blog</p>
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
                <p>Twitter</p>
                <hr>
                <!-- TwitterWidget -->
                <a class="twitter-timeline" href="https://twitter.com/yodaemon3?ref_src=twsrc%5Etfw">Tweets by yodaemon3</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                <p>Instagram</p>
                <hr>
                <!-- InstaWidget -->
                <a href="https://instawidget.net/v/user/yodaemon" id="link-accf3aefa47d2bd033a77dd2bd4ec9e5cc111796173531cfc212a379eee4cb54">@yodaemon</a>
                <script src="https://instawidget.net/js/instawidget.js?u=accf3aefa47d2bd033a77dd2bd4ec9e5cc111796173531cfc212a379eee4cb54&width=310px"></script>
                <hr>
            </div>
        </div>
    </div>

@endsection
