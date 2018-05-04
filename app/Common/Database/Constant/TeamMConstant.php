<?php
namespace App\Common\Database\Constant;

use App\Common\Database\Constant\LeagueMConstant as LeagueM;

class TeamMConstant
{
    const TEAM_CD_HIROSHIMA = 10;
    const TEAM_CD_HANSHIN = 20;
    const TEAM_CD_KYOJIN = 30;
    const TEAM_CD_DENA = 40;
    const TEAM_CD_CHUNICHI = 50;
    const TEAM_CD_YAKURUTO = 60;

    const TEAM_CD_SEIBU = 110;
    const TEAM_CD_SOFTBANK = 120;
    const TEAM_CD_NIPPONHAMU = 130;
    const TEAM_CD_LOTTE = 140;
    const TEAM_CD_ORIX = 150;
    const TEAM_CD_RAKUTEN = 160;

    public static $teamCdList = [
        '広島' => [
            'leagueCd' => LeagueM::LEAGUE_CD_CENTRAL,
            'teamCd'   => self::TEAM_CD_HIROSHIMA,
        ],
        '阪神' => [
            'leagueCd' => LeagueM::LEAGUE_CD_CENTRAL,
            'teamCd'   => self::TEAM_CD_HANSHIN,
        ],
        '巨人' => [
            'leagueCd' => LeagueM::LEAGUE_CD_CENTRAL,
            'teamCd'   => self::TEAM_CD_KYOJIN,
        ],
        'ＤｅＮＡ' => [
            'leagueCd' => LeagueM::LEAGUE_CD_CENTRAL,
            'teamCd'   => self::TEAM_CD_DENA,
        ],
        '中日' => [
            'leagueCd' => LeagueM::LEAGUE_CD_CENTRAL,
            'teamCd'   => self::TEAM_CD_CHUNICHI,
        ],
        'ヤクルト' => [
            'leagueCd' => LeagueM::LEAGUE_CD_CENTRAL,
            'teamCd'   => self::TEAM_CD_YAKURUTO,
        ],
        '西武' => [
            'leagueCd' => LeagueM::LEAGUE_CD_PACIFIC,
            'teamCd'   => self::TEAM_CD_SEIBU,
        ],
        'ソフトバンク' => [
            'leagueCd' => LeagueM::LEAGUE_CD_PACIFIC,
            'teamCd'   => self::TEAM_CD_SOFTBANK,
        ],
        '日本ハム' => [
            'leagueCd' => LeagueM::LEAGUE_CD_PACIFIC,
            'teamCd'   => self::TEAM_CD_NIPPONHAMU,
        ],
        'ロッテ' => [
            'leagueCd' => LeagueM::LEAGUE_CD_PACIFIC,
            'teamCd'   => self::TEAM_CD_LOTTE,
        ],
        'オリックス' => [
            'leagueCd' => LeagueM::LEAGUE_CD_PACIFIC,
            'teamCd'   => self::TEAM_CD_ORIX,
        ],
        '楽天' => [
            'leagueCd' => LeagueM::LEAGUE_CD_PACIFIC,
            'teamCd'   => self::TEAM_CD_RAKUTEN,
        ],


    ];
}