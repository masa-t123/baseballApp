<?php
namespace App\Http\Controllers\Api\Record\Pitcher;

use DB;
class Database
{

    /**
     * 成績データの取得
     * @return mixed
     */
    public function getPitcherRecord()
    {

        // とりあえず決め打ちで日付を指定
        // (APIのパラメータ実装時に除外)
        $dateFrom = date('Y-m-d', strtotime("-1 day", strtotime(date('Ymd'))));
        $dateTo   = date('Y-m-d', strtotime("2 day", strtotime($dateFrom)));

        $sql = "";
        $sql .= "
select league_m.league_nm,
       league_m.league_nm_en,
       team_m.team_nm,
       team_m.team_nm_en,
       player_m.player_nm,
       player_m.player_number,
       record_pitcher.*
from player_m
inner join league_m
        on league_m.league_cd = player_m.league_cd
inner join team_m
        on team_m.team_cd = player_m.team_cd
inner join record_pitcher
        on record_pitcher.player_id = player_m.player_id
where record_pitcher.updated_id = (select max(record_pitcher2.updated_id)
                                   from record_pitcher record_pitcher2
                                   where record_pitcher2.updated_at >= '{$dateFrom}'
                                   and record_pitcher2.updated_at < '{$dateTo}'
                                  )
order by player_m.league_cd,
         player_m.team_cd,
         cast(player_m.player_number as unsigned)
       ";

        $data = DB::select($sql);

        return $data;
    }
}
