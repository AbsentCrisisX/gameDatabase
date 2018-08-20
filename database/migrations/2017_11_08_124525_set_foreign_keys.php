<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SetForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('game_genre', function (Blueprint $table) {
            $table->foreign('game_id')
                ->references('id')
                ->on('games');
            $table->foreign('genre_id')
                ->references('id')
                ->on('genres');
        });

        Schema::table('game_user', function (Blueprint $table){
            $table->foreign('game_id')
                ->references('id')
                ->on('games');
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
        });

        Schema::table('reviews', function (Blueprint $table){
            $table->foreign('game_id')
                ->references('id')
                ->on('games');
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
