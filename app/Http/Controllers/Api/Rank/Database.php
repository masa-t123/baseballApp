<?php
namespace App\Http\Controllers\Api\Rank;

use DB;
class Database
{
    /**
     * 順位情報を取得する
     * @return mixed
     */
    public function getRank($paramList)
    {

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
where rank.updated_at >= '{$paramList['dateFrom']}'
and rank.updated_at < '{$paramList['dateTo']}'
order by rank.league_cd,
         rank.rank
       ";

        $data = DB::select($sql);

        return $data;
    }
}
