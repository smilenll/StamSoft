<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameStatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_stat', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('game_id')->unsigned();
            $table->foreign('game_id')->references('id')->on('games');

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
        Schema::dropIfExists('game_stat');
    }
}
