@extends('layouts.base')

@section('title')
    {{ config('app.name', 'yodaemon.com') }}&nbsp;-&nbsp;成績(野手)取得API
@endsection

@section('css')
    <link href="{{ asset('css/contents/document/document.css') }}?date={{ date('YmdHis') }}" rel="stylesheet">
@endsection

@section('js')
    <script src="{{ asset('js/contents/document/document.js') }}?date={{ date('YmdHis') }}" type="text/javascript"></script>
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
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="api-title">
                    プロ野球 - 成績(野手)取得API
                    <div class="last-updated">最終更新日:2018-05-14</div>
                </div>
                <hr>
            </div>
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="api-url">
                    URL:https://yodaemon.com/api/v1/record/batter
                </div>
            </div>
        </div>
        <div class="row document-area">
            <div class="col-lg-8 col-md-10 mx-auto">
                リクエストヘッダ
                <div class="param-area">
                    <table class="table table-bordered">
                        <thead>
                        <tr class="table-info text-center">
                            <th>必須</th>
                            <th>Key</th>
                            <th>Value</th>
                            <th>備考</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-center">〇</td>
                            <td>Content-Type</td>
                            <td>application/json</td>
                            <td>含めなかった場合400を返します.</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-8 col-md-10 mx-auto">
                リクエストパラメータ(未実装)
                <div class="param-area">
                    <table class="table table-bordered">
                        <thead>
                        <tr class="table-info text-center">
                            <th>パラメータ名</th>
                            <th>必須</th>
                            <th>型</th>
                            <th>説明</th>
                            <th>備考</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-8 col-md-10 mx-auto">
                レスポンス
                <div class="param-area">
                    <table class="table table-bordered">
                        <thead>
                        <tr class="table-info text-center">
                            <th colspan="4">パラメータ名</th>
                            <th>型</th>
                            <th>説明</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td colspan="4">result</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="3">central / pacific</td>
                            <td>string</td>
                            <td>セントラルリーグ・パシフィックリーグの識別</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="2">team_name_en</td>
                            <td>string</td>
                            <td>チーム名(英名)</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">last_updated</td>
                            <td>date</td>
                            <td>取得最終日時</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">team_nm</td>
                            <td>string</td>
                            <td>チーム名</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">player_nm</td>
                            <td>string</td>
                            <td>選手名</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">player_number</td>
                            <td>string</td>
                            <td>背番号</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">average_per</td>
                            <td>string</td>
                            <td>打率</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">game</td>
                            <td>string</td>
                            <td>試合</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">bat</td>
                            <td>string</td>
                            <td>打席</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">at_bat</td>
                            <td>string</td>
                            <td>打数</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">hit</td>
                            <td>string</td>
                            <td>安打</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">two_base_hit</td>
                            <td>string</td>
                            <td>二塁打</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">three_base_hit</td>
                            <td>string</td>
                            <td>三塁打</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">home_run</td>
                            <td>string</td>
                            <td>本塁打</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">total_base_hit</td>
                            <td>string</td>
                            <td>塁打</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">rbi</td>
                            <td>string</td>
                            <td>打点</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">score</td>
                            <td>string</td>
                            <td>得点</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">strikeout</td>
                            <td>string</td>
                            <td>三振</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">four_ball</td>
                            <td>string</td>
                            <td>四球</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">dead_ball</td>
                            <td>string</td>
                            <td>死球</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">bunt</td>
                            <td>string</td>
                            <td>犠打</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">sacrifice_fly</td>
                            <td>string</td>
                            <td>犠飛</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">steal_base</td>
                            <td>string</td>
                            <td>盗塁</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">double_play</td>
                            <td>string</td>
                            <td>併殺打</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">base_per</td>
                            <td>string</td>
                            <td>出塁率</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">slugging_per</td>
                            <td>string</td>
                            <td>長打率</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">ops</td>
                            <td>string</td>
                            <td>OPS</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">scorring_area</td>
                            <td>string</td>
                            <td>得点圏</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">error</td>
                            <td>string</td>
                            <td>失策</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-8 col-md-10 mx-auto">
                エラー仕様
                <div class="param-area">
                    <table class="table table-bordered">
                        <thead>
                        <tr class="table-info text-center">
                            <th colspan="2">パラメータ名</th>
                            <th>型</th>
                            <th>説明</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td colspan="2">error</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1">message</td>
                            <td>string</td>
                            <td>エラーメッセージを返します.</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

@endsection
