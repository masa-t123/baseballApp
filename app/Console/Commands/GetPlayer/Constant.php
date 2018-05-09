<?php
namespace App\Console\Commands\GetPlayer;

class Constant
{

    // 広島
    const URL_PITCHER_CARP     = 'https://baseball.yahoo.co.jp/npb/teams/6/memberlist?type=p';
    const URL_BATTER_CARP      = 'https://baseball.yahoo.co.jp/npb/teams/6/memberlist?type=b';
    // 阪神
    const URL_PITCHER_TIGERS   = 'https://baseball.yahoo.co.jp/npb/teams/5/memberlist?type=p';
    const URL_BATTER_TIGERS    = 'https://baseball.yahoo.co.jp/npb/teams/5/memberlist?type=b';
    // 巨人
    const URL_PITCHER_GIANTS   = 'https://baseball.yahoo.co.jp/npb/teams/1/memberlist?type=p';
    const URL_BATTER_GIANTS    = 'https://baseball.yahoo.co.jp/npb/teams/1/memberlist?type=b';
    // DeNA
    const URL_PITCHER_BAYSTARS = 'https://baseball.yahoo.co.jp/npb/teams/3/memberlist?type=p';
    const URL_BATTER_BAYSTARS  = 'https://baseball.yahoo.co.jp/npb/teams/3/memberlist?type=b';
    // 中日
    const URL_PITCHER_DRAGONS  = 'https://baseball.yahoo.co.jp/npb/teams/4/memberlist?type=p';
    const URL_BATTER_DRAGONS   = 'https://baseball.yahoo.co.jp/npb/teams/4/memberlist?type=b';
    // ヤクルト
    const URL_PITCHER_SWALLOWS = 'https://baseball.yahoo.co.jp/npb/teams/2/memberlist?type=p';
    const URL_BATTER_SWALLOWS  = 'https://baseball.yahoo.co.jp/npb/teams/2/memberlist?type=b';
    // 西武
    const URL_PITCHER_LIONS    = 'https://baseball.yahoo.co.jp/npb/teams/7/memberlist?type=p';
    const URL_BATTER_LIONS     = 'https://baseball.yahoo.co.jp/npb/teams/7/memberlist?type=b';
    // ソフトバンク
    const URL_PITCHER_HAWKS    = 'https://baseball.yahoo.co.jp/npb/teams/12/memberlist?type=p';
    const URL_BATTER_HAWKS     = 'https://baseball.yahoo.co.jp/npb/teams/12/memberlist?type=b';
    // 日本ハム
    const URL_PITCHER_FIGHTERS = 'https://baseball.yahoo.co.jp/npb/teams/8/memberlist?type=p';
    const URL_BATTER_FIGHTERS  = 'https://baseball.yahoo.co.jp/npb/teams/8/memberlist?type=b';
    // ロッテ
    const URL_PITCHER_MARINES  = 'https://baseball.yahoo.co.jp/npb/teams/9/memberlist?type=p';
    const URL_BATTER_MARINES   = 'https://baseball.yahoo.co.jp/npb/teams/9/memberlist?type=b';
    // オリックス
    const URL_PITCHER_BUFFALOS = 'https://baseball.yahoo.co.jp/npb/teams/11/memberlist?type=p';
    const URL_BATTER_BUFFALOS  = 'https://baseball.yahoo.co.jp/npb/teams/11/memberlist?type=b';
    // 楽天
    const URL_PITCHER_EAGLES   = 'https://baseball.yahoo.co.jp/npb/teams/376/memberlist?type=p';
    const URL_BATTER_EAGLES    = 'https://baseball.yahoo.co.jp/npb/teams/376/memberlist?type=b';


    public static $playerGetUrlList = [
        '広島' => [
            'p' => self::URL_PITCHER_CARP,
            'b' => self::URL_BATTER_CARP,
        ],
        '阪神' => [
            'p' => self::URL_PITCHER_TIGERS,
            'b' => self::URL_BATTER_TIGERS,
        ],
        '巨人' => [
            'p' => self::URL_PITCHER_GIANTS,
            'b' => self::URL_BATTER_GIANTS,
        ],
        'ＤｅＮＡ' => [
            'p' => self::URL_PITCHER_BAYSTARS,
            'b' => self::URL_BATTER_BAYSTARS,
        ],
        '中日' => [
            'p' => self::URL_PITCHER_DRAGONS,
            'b' => self::URL_BATTER_DRAGONS,
        ],
        'ヤクルト' => [
            'p' => self::URL_PITCHER_SWALLOWS,
            'b' => self::URL_BATTER_SWALLOWS,
        ],
        '西武' => [
            'p' => self::URL_PITCHER_LIONS,
            'b' => self::URL_BATTER_LIONS,
        ],
        'ソフトバンク' => [
            'p' => self::URL_PITCHER_HAWKS,
            'b' => self::URL_BATTER_HAWKS,
        ],
        '日本ハム' => [
            'p' => self::URL_PITCHER_FIGHTERS,
            'b' => self::URL_BATTER_FIGHTERS,
        ],
        'ロッテ' => [
            'p' => self::URL_PITCHER_MARINES,
            'b' => self::URL_BATTER_MARINES,
        ],
        'オリックス' => [
            'p' => self::URL_PITCHER_BUFFALOS,
            'b' => self::URL_BATTER_BUFFALOS,
        ],
        '楽天' => [
            'p' => self::URL_PITCHER_EAGLES,
            'b' => self::URL_BATTER_EAGLES,
        ],

    ];
}