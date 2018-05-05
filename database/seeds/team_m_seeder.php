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
            'team_nm_en' => 'carp',
        ]);
        DB::table('team_m')->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'league_cd'  => 100,
            'team_cd'    => 20,
            'team_nm'    => '阪神',
            'team_nm_en' => 'tigers',
        ]);
        DB::table('team_m')->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'league_cd'  => 100,
            'team_cd'    => 30,
            'team_nm'    => '巨人',
            'team_nm_en' => 'giants',
        ]);
        DB::table('team_m')->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'league_cd'  => 100,
            'team_cd'    => 40,
            'team_nm'    => 'DeNA',
            'team_nm_en' => 'baystars',
        ]);
        DB::table('team_m')->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'league_cd'  => 100,
            'team_cd'    => 50,
            'team_nm'    => '中日',
            'team_nm_en' => 'dragons',
        ]);
        DB::table('team_m')->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'league_cd'  => 100,
            'team_cd'    => 60,
            'team_nm'    => 'ヤクルト',
            'team_nm_en' => 'swallows',
        ]);
        DB::table('team_m')->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'league_cd'  => 200,
            'team_cd'    => 110,
            'team_nm'    => '西武',
            'team_nm_en' => 'lions',
        ]);
        DB::table('team_m')->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'league_cd'  => 200,
            'team_cd'    => 120,
            'team_nm'    => 'ソフトバンク',
            'team_nm_en' => 'hawks',
        ]);
        DB::table('team_m')->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'league_cd'  => 200,
            'team_cd'    => 130,
            'team_nm'    => '日本ハム',
            'team_nm_en' => 'fighters',
        ]);
        DB::table('team_m')->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'league_cd'  => 200,
            'team_cd'    => 140,
            'team_nm'    => 'ロッテ',
            'team_nm_en' => 'marines',
        ]);
        DB::table('team_m')->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'league_cd'  => 200,
            'team_cd'    => 150,
            'team_nm'    => 'オリックス',
            'team_nm_en' => 'buffaloes',
        ]);
        DB::table('team_m')->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'league_cd'  => 200,
            'team_cd'    => 160,
            'team_nm'    => '楽天',
            'team_nm_en' => 'eagles',
        ]);
    }
}
