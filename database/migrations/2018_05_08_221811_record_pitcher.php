<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RecordPitcher extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('record_pitcher', function (Blueprint $table) {
            $table->timestamps();
            $table->increments('record_pitcher_id');
            $table->integer('updated_id');
            $table->integer('player_id');
            $table->string('era',10);
            $table->string('pitched',10);
            $table->string('starter',10);
            $table->string('complete',10);
            $table->string('shutout',10);
            $table->string('qs',10);
            $table->string('win',10);
            $table->string('lose',10);
            $table->string('hold',10);
            $table->string('hp',10);
            $table->string('save',10);
            $table->string('win_per',10);
            $table->string('inning',10);
            $table->string('hit',10);
            $table->string('home_run',10);
            $table->string('strikeouts',10);
            $table->string('strikeouts_per',10);
            $table->string('four_ball',10);
            $table->string('dead_ball',10);
            $table->string('wild_pitch',10);
            $table->string('balk',10);
            $table->string('lost_point',10);
            $table->string('era_point',10);
            $table->string('batting_average',10);
            $table->string('kbb',10);
            $table->string('whip',10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('record_pitcher');
    }
}
