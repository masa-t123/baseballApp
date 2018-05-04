<?php

use Illuminate\Database\Seeder;

class team_m_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('team_m')->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'league_cd'  => 100,
            'team_cd'    => 10,
            'team_nm'    => '広島',
        ]);
        DB::table('team_m')->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'league_cd'  => 100,
            'team_cd'    => 20,
            'team_nm'    => '阪神',
        ]);
        DB::table('team_m')->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'league_cd'  => 100,
            'team_cd'    => 30,
            'team_nm'    => '巨人',
        ]);
        DB::table('team_m')->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'league_cd'  => 100,
            'team_cd'    => 40,
            'team_nm'    => 'DeNA',
        ]);
        DB::table('team_m')->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'league_cd'  => 100,
            'team_cd'    => 50,
            'team_nm'    => '中日',
        ]);
        DB::table('team_m')->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'league_cd'  => 100,
            'team_cd'    => 60,
            'team_nm'    => 'ヤクルト',
        ]);
        DB::table('team_m')->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'league_cd'  => 200,
            'team_cd'    => 110,
            'team_nm'    => '西武',
        ]);
        DB::table('team_m')->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'league_cd'  => 200,
            'team_cd'    => 120,
            'team_nm'    => 'ソフトバンク',
        ]);
        DB::table('team_m')->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'league_cd'  => 200,
            'team_cd'    => 130,
            'team_nm'    => '日本ハム',
        ]);
        DB::table('team_m')->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'league_cd'  => 200,
            'team_cd'    => 140,
            'team_nm'    => 'ロッテ',
        ]);
        DB::table('team_m')->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'league_cd'  => 200,
            'team_cd'    => 150,
            'team_nm'    => 'オリックス',
        ]);
        DB::table('team_m')->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'league_cd'  => 200,
            'team_cd'    => 160,
            'team_nm'    => '楽天',
        ]);
    }
}
