<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameGameathlonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_gameathlon', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('game_id')->unsigned()->nullable();
            $table->foreign('game_id')->references('id')
                  ->on('games')->onDelete('cascade');
      
            $table->integer('gameathlon_id')->unsigned()->nullable();
            $table->foreign('gameathlon_id')->references('id')
                  ->on('gameathlons')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_gameathlon');
    }
}
