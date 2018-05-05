<?php
namespace App\Http\Controllers\Api\Rank;

use DB;
class Database
{
    /**
     * 順位情報を取得する
     * @return mixed
     */
    public function getRank()
    {

        // とりあえず決め打ちで日付を指定
        // (APIのパラメータ実装時に除外)
        $dateFrom = date('Y-m-d', strtotime('-1 day'));
        $dateTo   = date('Y-m-d');

        $sql = "";
        $sql .= "
        select league_m.league_nm,
               league_m.league_nm_en,
               team_m.team_nm,
               team_m.team_nm_en,
               rank.*
        from rank 
        inner join league_m
                on league_m.league_cd = rank.league_cd
        inner join team_m
                on team_m.team_cd = rank.team_cd
        where rank.updated_id = (
                     select max(rank2.updated_id)
                     from rank rank2
                     where cast(rank2.updated_at as date) >= '{$dateFrom}'
                     and   cast(rank2.updated_at as date) <= '{$dateTo}'
                     )
        order by rank.league_cd,
                 rank.rank
       ";

        $data = DB::select($sql);

        return $data;
    }
}
