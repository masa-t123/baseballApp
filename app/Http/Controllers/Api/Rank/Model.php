<?php
namespace App\Http\Controllers\Api\Rank;

class Model
{

    /**
     * API返却用に順位データを取得する
     * @return array
     */
    public function getRankData($requestList)
    {
        $paramList = $this->makeParamList($requestList);

        // DBからデータを抽出
        $db = new Database();
        $dataList = $db->getRank($paramList);

        $resultArray = [];
        // データをjson返却用に加工
        foreach ($dataList as $data) {
            $teamData = [
                'last_updated'         => $data->updated_at,
                'team_name'            => $data->team_nm,
                'team_name_en'         => $data->team_nm_en,
                'rank'                 => $data->rank,
                'match_count'          => $data->match,
                'win_count'            => $data->win,
                'lose_count'           => $data->lose,
                'draw_count'           => $data->draw,
                'win_per'              => $data->win_per,
                'difference_game'      => $data->difference_game,
                'remaining_game_count' => $data->remaining_game,
                'score_point'          => $data->score_point,
                'lost_point'           => $data->lost_point,
                'home_run'             => $data->home_run,
                'steal'                => $data->steal,
                'average'              => $data->average_per,
                'protection_per'       => $data->protection_per,
            ];
            $resultArray['result'][$data->league_nm_en][] = $teamData;
        }
        return $resultArray;
    }

    /**
     * SQLに渡すパラメータを作成する
     * @param $requestList
     * @return array
     */
    private function makeParamList($requestList)
    {

        // -----
        // 日付
        // -----
        $dateFrom = date('Y-m-d', strtotime("-1 day", strtotime(date('Ymd'))));
        // 日付指定があれば書き換え
        if (isset($requestList['date'])) {
            $dateFrom = date('Y-m-d', strtotime("-1 day", strtotime($requestList['date'])));
        }
        $dateTo = date('Y-m-d', strtotime("2 day", strtotime($dateFrom)));

        $paramList = [
            'dateFrom' => $dateFrom,
            'dateTo'   => $dateTo,
        ];

        return $paramList;
    }

}