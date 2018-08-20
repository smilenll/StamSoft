<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerStatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_stat', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('player_id')->unsigned();
            $table->foreign('player_id')->references('id')->on('players');

            $table->integer('stat_id')->unsigned();
            $table->foreign('stat_id')->references('id')->on('stats');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_stat');
    }
}
