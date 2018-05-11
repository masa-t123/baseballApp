@extends('layouts.base')

@section('css')
    <link href="{{ asset('css/contents/document/document.css') }}?{{ date('YmdHis') }}" rel="stylesheet">
@endsection

@section('js')
    <script src="{{ asset('js/contents/document/document.js') }}?{{ date('YmdHis') }}" type="text/javascript"></script>
@endsection

@section('header')
    <header class="masthead" style="background-image: url({{ asset('image/common/home-bg.jpg') }})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <span class="subheading">yodaemon.com - document</span>
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
            <div class="col-lg-12 col-md-12 mx-auto">
                API一覧
                <table class="table table-bordered">
                    <thead>
                    <tr class="table-success text-center">
                        <th>API名</th>
                        <th>説明</th>
                        <th>document</th>
                    </tr>
                    </thead>
                    <tbody class="document-list">
                    <tr>
                        <td>プロ野球-順位表取得API</td>
                        <td>プロ野球のセ・リーグとパ・リーグの順位を取得するAPIです。</td>
                        <td class="text-center">
                            <a href="/document/manual/api/rank"><button type="button" class="btn btn-info btn-xs">
                                    <i class="fa fa-book-open"></i>&nbsp;仕様書</button>
                            </a>
                        </td>
                    </tr>

<!--
                    <tr>
                        <td>プロ野球-選手成績取得API</td>
                        <td>プロ野球の選手成績を取得するAPIです。</td>
                        <td><a href="/document/manual/api/record"><button type="button" class="btn btn-info btn-xs">仕様書</button></a></td>
                    </tr>
-->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
