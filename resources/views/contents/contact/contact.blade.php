@extends('layouts.base')

@section('title')
    {{ config('app.name', 'yodaemon.com') }}&nbsp;-&nbsp;お問い合わせ
@endsection

@section('css')
    <link href="{{ asset('css/contents/contact/contact.css') }}?{{ date('YmdHis') }}" rel="stylesheet">
@endsection

@section('js')
    <script src="{{ asset('js/contents/contact/contact.js') }}?{{ date('YmdHis') }}" type="text/javascript"></script>
@endsection

@section('header')
    <header class="masthead" style="background-image: url({{ asset('image/common/home-bg.jpg') }})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <span class="subheading">何かありましたらご連絡ください。</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                @if(Session::has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="post" action="/contact">
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>お名前</label>
                            <input type="text" class="form-control" placeholder="お名前(必須)" id="name" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>メールアドレス</label>
                            <input type="email" class="form-control" placeholder="メールアドレス(必須)" id="email" name="email" value="{{ old('email') }}">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>件名</label>
                            <input type="text" class="form-control" placeholder="件名(必須)" id="subject" name="subject" value="{{ old('subject') }}">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>本文</label>
                            <textarea rows="5" class="form-control" placeholder="本文(必須)" id="message" name="message">{{ old('message') }}</textarea>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" id="sendMessageButton">送信</button>
                    </div>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>

@endsection
