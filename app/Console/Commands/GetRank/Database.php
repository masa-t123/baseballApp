<?php
namespace App\Console\Commands\GetRank;

use Illuminate\Support\Facades\DB;

class Database
{
    /**
     * 最新の更新IDを取得する
     * @return mixed
     */
    public function getUpdatedId()
    {
        $updatedId = DB::table('rank')->max('updated_id');

        return $updatedId;
    }

    /**
     * 順位データを挿入する
     * @param $updatedId
     * @param $rankData
     */
    public function insertRankData($updatedId, $rankData)
    {
        DB::transaction(function () use ($updatedId, $rankData) {
            DB::table('rank')->insert([
                'created_at'      => date('Y-m-d H:i:s'),
                'updated_at'      => date('Y-m-d H:i:s'),
                'updated_id'      => $updatedId,
                'league_cd'       => $rankData['codeList']['leagueCd'],
                'team_cd'         => $rankData['codeList']['teamCd'],
                'rank'            => $rankData['rank'],
                'match'           => $rankData['match'],
                'win'             => $rankData['win'],
                'lose'            => $rankData['lose'],
                'draw'            => $rankData['draw'],
                'win_per'         => $rankData['winPer'],
                'difference_game' => $rankData['differenceGame'],
                'remaining_game'  => $rankData['remainingGame'],
                'score_point'     => $rankData['scorePoint'],
                'lost_point'      => $rankData['lostPoint'],
                'home_run'        => $rankData['homeRun'],
                'steal'           => $rankData['steal'],
                'average_per'     => $rankData['averagePer'],
                'protection_per'  => $rankData['protectionPer'],
            ]);
        });

    }

    /**
     * 実行日付けの古いデータを削除する
     * @param $updatedId
     */
    public function deleteOldData($updatedId)
    {
        DB::transaction(function () use ($updatedId) {
            $today    = date('Y-m-d');
            $tomorrow = date('Y-m-d', strtotime('1 day', strtotime($today)));
            DB::table('rank')
                ->where('updated_id', '<', $updatedId)
                ->where('updated_at', '>=', $today)
                ->where('updated_at', '<', $tomorrow)
                ->delete();
        });
    }
}