<?php
namespace App\Console\Commands\GetRank;

use Illuminate\Support\Facades\DB;

class Database
{
    public function getUpdatedId()
    {
        $updatedId = DB::table('rank')->max('updated_id');

        return $updatedId;
    }

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
}