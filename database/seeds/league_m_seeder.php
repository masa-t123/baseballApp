<?php

use Illuminate\Database\Seeder;

class league_m_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('league_m')->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'league_cd' => 100,
            'league_nm' => 'セントラルリーグ',
            'league_nm_en' => 'central',
        ]);
        DB::table('league_m')->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'league_cd' => 200,
            'league_nm' => 'パシフィックリーグ',
            'league_nm_en' => 'pacific',
        ]);
    }
}
