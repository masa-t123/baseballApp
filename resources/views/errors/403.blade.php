@extends('layouts.base')

@section('title')
    403 Forbidden.
@endsection

@section('css')
@endsection

@section('js')
@endsection

@section('header')
    <header class="masthead" style="background-image: url({{ asset('image/common/home-bg.jpg') }})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>403</h1>
                        <span class="subheading">権限がありません</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('content')
@endsection