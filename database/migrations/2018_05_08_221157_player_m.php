<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PlayerM extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_m', function (Blueprint $table) {
            $table->timestamps();
            $table->increments('player_id');
            $table->integer('league_cd');
            $table->integer('team_cd');
            $table->string('player_nm',100);
            $table->string('player_number',5);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_m');
    }
}
