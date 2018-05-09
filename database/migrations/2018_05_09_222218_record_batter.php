<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RecordBatter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('record_batter', function (Blueprint $table) {
            $table->timestamps();
            $table->increments('record_batter_id');
            $table->integer('updated_id');
            $table->integer('player_id');
            $table->string('average_per',10);
            $table->string('game',10);
            $table->string('bat',10);
            $table->string('at_bat',10);
            $table->string('hit',10);
            $table->string('two_base_hit',10);
            $table->string('three_base_hit',10);
            $table->string('home_run',10);
            $table->string('total_base_hit',10);
            $table->string('rbi',10);
            $table->string('score',10);
            $table->string('strikeout',10);
            $table->string('four_ball',10);
            $table->string('dead_ball',10);
            $table->string('bunt',10);
            $table->string('sacrifice_fly',10);
            $table->string('steal_base',10);
            $table->string('steal_death',10);
            $table->string('double_play',10);
            $table->string('base_per',10);
            $table->string('slugging_per',10);
            $table->string('ops',10);
            $table->string('scoring_area',10);
            $table->string('error',10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('record_batter');
    }
}
