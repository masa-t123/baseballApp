<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rank extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rank', function (Blueprint $table) {
            $table->timestamps();
            $table->increments('rank_id');
            $table->integer('updated_id');
            $table->integer('league_cd');
            $table->integer('team_cd');
            $table->string('rank',2);
            $table->string('match',10);
            $table->string('win',10);
            $table->string('lose',10);
            $table->string('draw',10);
            $table->string('win_per',10);
            $table->string('difference_game',10);
            $table->string('remaining_game',10);
            $table->string('score_point',10);
            $table->string('lost_point',10);
            $table->string('home_run',10);
            $table->string('steal',10);
            $table->string('average_per',10);
            $table->string('protection_per',10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
