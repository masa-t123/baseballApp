@extends('layouts.base')

@section('title')
    {{ config('app.name', 'yodaemon.com') }}&nbsp;-&nbsp;成績(投手)取得API
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
                        <span class="subheading">&nbsp;</span>
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
                    プロ野球 - 成績(投手)取得API
                    <div class="last-updated">最終更新日:2018-06-04</div>
                </div>
                <hr>
            </div>
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="api-url">
                    URL:https://yodaemon.com/api/v1/record/pitcher
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
                            <td class="text-center">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
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
                            <td colspan="1">era</td>
                            <td>string</td>
                            <td>防御率</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">pitched</td>
                            <td>string</td>
                            <td>登板</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">starter</td>
                            <td>string</td>
                            <td>先発</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">complete</td>
                            <td>string</td>
                            <td>完投</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">shutout</td>
                            <td>string</td>
                            <td>完封</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">qs</td>
                            <td>string</td>
                            <td>QS</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">win</td>
                            <td>string</td>
                            <td>勝利</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">lose</td>
                            <td>string</td>
                            <td>敗戦</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">hold</td>
                            <td>string</td>
                            <td>ホールド</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">hp</td>
                            <td>string</td>
                            <td>HP</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">save</td>
                            <td>string</td>
                            <td>セーブ</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">win_per</td>
                            <td>string</td>
                            <td>勝率</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">inning</td>
                            <td>string</td>
                            <td>投球回</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">hit</td>
                            <td>string</td>
                            <td>被安打</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">home_run</td>
                            <td>string</td>
                            <td>被本塁打</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">strikeouts</td>
                            <td>string</td>
                            <td>奪三振</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">strikeouts_per</td>
                            <td>string</td>
                            <td>奪三振率</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">four_ball</td>
                            <td>string</td>
                            <td>与四球</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">dead_ball</td>
                            <td>string</td>
                            <td>与死球</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">wild_pitch</td>
                            <td>string</td>
                            <td>暴投</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">balk</td>
                            <td>string</td>
                            <td>ボーク</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">lost_point</td>
                            <td>string</td>
                            <td>失点</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">era_point</td>
                            <td>string</td>
                            <td>自責点</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">batting_average</td>
                            <td>string</td>
                            <td>被打率</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">kbb</td>
                            <td>string</td>
                            <td>K/BB</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">whip</td>
                            <td>string</td>
                            <td>WHIP</td>
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
