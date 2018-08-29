<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToStats extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stats', function (Blueprint $table) {
            $table->integer('player_id')->nullable()->after('event_id')->unsigned();
            $table->foreign('player_id')->references('id')->on('players');

            $table->integer('team_id')->nullable()->after('player_id')->unsigned();
            $table->foreign('team_id')->references('id')->on('teams');

            $table->integer('game_id')->nullable()->after('team_id')->unsigned();
            $table->foreign('game_id')->references('id')->on('games');

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
