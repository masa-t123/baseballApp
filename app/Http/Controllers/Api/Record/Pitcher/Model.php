<?php
namespace App\Http\Controllers\Api\Record\Pitcher;

class Model
{

    /**
     * API返却用に成績データを取得する
     * @return array
     */
    public function getRecordData()
    {
        // DBからデータを抽出
        $db = new Database();
        $pitcherList = $db->getPitcherRecord();

        $resultArray = [];
        // データをjson返却用に加工
        foreach ($pitcherList as $pitcher) {
            $pitcherData = [
                'last_updated'    => $pitcher->updated_at,
                'team_nm'         => $pitcher->team_nm,
                'player_nm'       => $pitcher->player_nm,
                'player_number'   => $pitcher->player_number,
                'era'             => $pitcher->era,
                'pitched'         => $pitcher->pitched,
                'starter'         => $pitcher->starter,
                'complete'        => $pitcher->complete,
                'shutout'         => $pitcher->shutout,
                'qs'              => $pitcher->qs,
                'win'             => $pitcher->win,
                'lose'            => $pitcher->lose,
                'hold'            => $pitcher->hold,
                'hp'              => $pitcher->hp,
                'save'            => $pitcher->save,
                'win_per'         => $pitcher->win_per,
                'inning'          => $pitcher->inning,
                'hit'             => $pitcher->hit,
                'home_run'        => $pitcher->home_run,
                'strikeouts'      => $pitcher->strikeouts,
                'strikeouts_per'  => $pitcher->strikeouts_per,
                'four_ball'       => $pitcher->four_ball,
                'dead_ball'       => $pitcher->dead_ball,
                'wild_pitch'      => $pitcher->wild_pitch,
                'balk'            => $pitcher->balk,
                'lost_point'      => $pitcher->lost_point,
                'era_point'       => $pitcher->era_point,
                'batting_average' => $pitcher->batting_average,
                'kbb'             => $pitcher->kbb,
                'whip'            => $pitcher->whip,
            ];

            $resultArray['result'][$pitcher->league_nm_en][$pitcher->team_nm_en][] = $pitcherData;

        }
        return $resultArray;
    }

}