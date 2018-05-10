<?php
namespace App\Http\Controllers\Api\Record\Batter;

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
        $batterList = $db->getBatterRecord();

        $resultArray = [];
        // データをjson返却用に加工
        foreach ($batterList as $batter) {
            $batterData = [
                'last_updated'   => $batter->updated_at,
                'team_nm'        => $batter->team_nm,
                'player_nm'      => $batter->player_nm,
                'player_number'  => $batter->player_number,
                'average_per'    => $batter->average_per,
                'game'           => $batter->game,
                'bat'            => $batter->bat,
                'at_bat'         => $batter->at_bat,
                'hit'            => $batter->hit,
                'two_base_hit'   => $batter->two_base_hit,
                'three_base_hit' => $batter->three_base_hit,
                'home_run'       => $batter->home_run,
                'total_base_hit' => $batter->total_base_hit,
                'rbi'            => $batter->rbi,
                'score'          => $batter->score,
                'strikeout'      => $batter->strikeout,
                'four_ball'      => $batter->four_ball,
                'dead_ball'      => $batter->dead_ball,
                'bunt'           => $batter->bunt,
                'sacrifice_fly'  => $batter->sacrifice_fly,
                'steal_base'     => $batter->steal_base,
                'double_play'    => $batter->double_play,
                'base_per'       => $batter->base_per,
                'slugging_per'   => $batter->slugging_per,
                'ops'            => $batter->ops,
                'scoring_area'   => $batter->scoring_area,
                'error'          => $batter->error,
            ];

            $resultArray['result'][$batter->league_nm_en][$batter->team_nm_en][] = $batterData;

        }
        return $resultArray;
    }

}