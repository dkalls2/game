<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameathlonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gameathlons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug')->unique();
            // $table->unsignedInteger('author_id');
           
            // $table->text('excerpt');
            // $table->longText('content');
            $table->integer('status')->default(1);
            // $table->unsignedInteger('type')->default(1);
            // $table->unsignedBigInteger('comment_count')->default(0);
            // $table->dateTime('published_at');
            
            // $table->foreign('author_id')
            //       ->references('id')->on('users')
            //       ->onDelete('cascade');

            $table->boolean('private');
            $table->integer('remaining_time_hours');
            $table->integer('remaining_time_minutes');
            $table->integer('total_time_hours');
            $table->integer('total_time_minutes');
            $table->integer('number_of_players');
            $table->integer('number_of_games');

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
        Schema::dropIfExists('gameathlons');
    }
}