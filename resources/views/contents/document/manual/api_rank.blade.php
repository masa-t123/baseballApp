@extends('layouts.base')

@section('title')
    {{ config('app.name', 'yodaemon.com') }}&nbsp;-&nbsp;順位取得API
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
                    プロ野球 - 順位取得API
                    <div class="last-updated">最終更新日:2018-06-04</div>
                </div>
                <hr>
            </div>
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="api-url">
                    URL:https://yodaemon.com/api/v1/rank
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
                リクエストパラメータ
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
                            <td>date</td>
                            <td>&nbsp;</td>
                            <td>date</td>
                            <td>指定した日付の最終更新日データを返します。<br/>※指定なしの場合は、現在日付で最新のデータを返します。</td>
                            <td>データ蓄積開始した2018/05/10以前を指定すると400で返します。</td>
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
                            <th colspan="3">パラメータ名</th>
                            <th>型</th>
                            <th>説明</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td colspan="3">result</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="2">central / pacific</td>
                            <td>string</td>
                            <td>セントラルリーグ・パシフィックリーグの識別</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">last_updated</td>
                            <td>date</td>
                            <td>取得最終日時</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">team_name</td>
                            <td>string</td>
                            <td>チーム名(日本語)</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">team_name_en</td>
                            <td>string</td>
                            <td>チーム名(英名)</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">rank</td>
                            <td>string</td>
                            <td>順位</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">match_count</td>
                            <td>string</td>
                            <td>試合</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">win_count</td>
                            <td>string</td>
                            <td>勝利</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">lose_count</td>
                            <td>string</td>
                            <td>敗北</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">draw_count</td>
                            <td>string</td>
                            <td>引き分け</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">win_per</td>
                            <td>string</td>
                            <td>勝率</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">difference_game</td>
                            <td>string</td>
                            <td>ゲーム差</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">remaining_game_count</td>
                            <td>string</td>
                            <td>残試合</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">score_point</td>
                            <td>string</td>
                            <td>得点</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">lost_point</td>
                            <td>string</td>
                            <td>失点</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">home_run</td>
                            <td>string</td>
                            <td>ホームラン</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">steal</td>
                            <td>string</td>
                            <td>盗塁</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">average</td>
                            <td>string</td>
                            <td>打率</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1"></td>
                            <td colspan="1">protection_per</td>
                            <td>string</td>
                            <td>防御率</td>
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
