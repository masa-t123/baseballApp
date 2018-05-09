<?php
namespace App\Console\Commands\GetPlayer;

use DB;

class Database
{

    /**
     * 最新の更新IDを取得する(ピッチャー)
     * @return mixed
     */
    public function getUpdatedId4Pitcher()
    {
        $updatedId = DB::table('record_pitcher')->max('updated_id');

        return $updatedId;
    }

    /**
     * 最新の更新IDを取得する(バッター)
     * @return mixed
     */
    public function getUpdatedId4Batter()
    {
        $updatedId = DB::table('record_batter')->max('updated_id');

        return $updatedId;
    }

    /**
     * 選手情報を取得する
     * @param $playerName
     * @param $leagueCd
     * @param $teamCd
     * @return mixed
     */
    public function getPlayerData($playerName, $leagueCd, $teamCd)
    {
        $playerData = DB::table('player_m')
            ->where('player_nm', $playerName)
            ->where('league_cd', $leagueCd)
            ->where('team_cd', $teamCd)
            ->get();

        return $playerData;
    }

    /**
     * 選手情報を取得する
     * @param $playerNumber
     * @param $playerName
     * @param $leagueCd
     * @param $teamCd
     */
    public function insertPlayer($playerNumber, $playerName, $leagueCd, $teamCd)
    {
        DB::transaction(function () use ($playerNumber, $playerName, $leagueCd, $teamCd) {
            DB::table('player_m')->insert([
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                'league_cd'     => $leagueCd,
                'team_cd'       => $teamCd,
                'player_nm'     => $playerName,
                'player_number' => $playerNumber,
            ]);
        });
    }

    /**
     * 選手情報を更新する
     * @param $playerId
     * @param $playerNumber
     * @param $leagueCd
     * @param $teamCd
     */
    public function updatePlayer($playerId, $playerNumber, $leagueCd, $teamCd)
    {
        DB::transaction(function () use ($playerId, $playerNumber, $leagueCd, $teamCd) {
            DB::table('player_m')
                ->where('player_id', $playerId)
                ->update([
                    'updated_at'    => date('Y-m-d H:i:s'),
                    'league_cd'     => $leagueCd,
                    'team_cd'       => $teamCd,
                    'player_number' => $playerNumber,
                ]);
        });
    }

    /**
     * 成績データを挿入する(投手)
     * @param $updatedId
     * @param $playerId
     * @param $pitcher
     */
    public function insertRecordPitcher($updatedId, $playerId, $pitcher)
    {
        DB::transaction(function () use ($updatedId, $playerId, $pitcher) {
            DB::table('record_pitcher')->insert([
                'created_at'      => date('Y-m-d H:i:s'),
                'updated_at'      => date('Y-m-d H:i:s'),
                'updated_id'      => $updatedId,
                'player_id'       => $playerId,
                'era'             => $pitcher[0],
                'pitched'         => $pitcher[1],
                'starter'         => $pitcher[2],
                'complete'        => $pitcher[3],
                'shutout'         => $pitcher[4],
                'qs'              => $pitcher[5],
                'win'             => $pitcher[6],
                'lose'            => $pitcher[7],
                'hold'            => $pitcher[8],
                'hp'              => $pitcher[9],
                'save'            => $pitcher[10],
                'win_per'         => $pitcher[11],
                'inning'          => $pitcher[12],
                'hit'             => $pitcher[13],
                'home_run'        => $pitcher[14],
                'strikeouts'      => $pitcher[15],
                'strikeouts_per'  => $pitcher[16],
                'four_ball'       => $pitcher[17],
                'dead_ball'       => $pitcher[18],
                'wild_pitch'      => $pitcher[19],
                'balk'            => $pitcher[20],
                'lost_point'      => $pitcher[21],
                'era_point'       => $pitcher[22],
                'batting_average' => $pitcher[23],
                'kbb'             => $pitcher[24],
                'whip'            => $pitcher[25],
            ]);
        });
    }

    /**
     * 成績データを挿入する(野手)
     * @param $updatedId
     * @param $playerId
     * @param $batter
     */
    public function insertRecordBatter($updatedId, $playerId, $batter)
    {

        DB::transaction(function () use ($updatedId, $playerId, $batter) {
            DB::table('record_batter')->insert([
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
                'updated_id'     => $updatedId,
                'player_id'      => $playerId,
                'average_per'    => $batter[0],
                'game'           => $batter[1],
                'bat'            => $batter[2],
                'at_bat'         => $batter[3],
                'hit'            => $batter[4],
                'two_base_hit'   => $batter[5],
                'three_base_hit' => $batter[6],
                'home_run'       => $batter[7],
                'total_base_hit' => $batter[8],
                'rbi'            => $batter[9],
                'score'          => $batter[10],
                'strikeout'      => $batter[11],
                'four_ball'      => $batter[12],
                'dead_ball'      => $batter[13],
                'bunt'           => $batter[14],
                'sacrifice_fly'  => $batter[15],
                'steal_base'     => $batter[16],
                'steal_death'    => $batter[17],
                'double_play'    => $batter[18],
                'base_per'       => $batter[19],
                'slugging_per'   => $batter[20],
                'ops'            => $batter[21],
                'scoring_area'   => $batter[22],
                'error'          => $batter[23],
            ]);
        });
    }

}