<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players_point_histories', function (Blueprint $table) {
            $table->id();
            $table->string('player_id');
            $table->string('gameweek_1')->nullable();
            $table->string('gameweek_2')->nullable();
            $table->string('gameweek_3')->nullable();
            $table->string('gameweek_4')->nullable();
            $table->string('gameweek_5')->nullable();
            $table->string('gameweek_6')->nullable();
            $table->string('gameweek_7')->nullable();
            $table->string('gameweek_8')->nullable();
            $table->string('gameweek_9')->nullable();
            $table->string('gameweek_10')->nullable();
            $table->string('gameweek_11')->nullable();
            $table->string('gameweek_12')->nullable();
            $table->string('gameweek_13')->nullable();
            $table->string('gameweek_14')->nullable();
            $table->string('gameweek_15')->nullable();
            $table->string('gameweek_16')->nullable();
            $table->string('gameweek_17')->nullable();
            $table->string('gameweek_18')->nullable();
            $table->string('gameweek_19')->nullable();
            $table->string('gameweek_20')->nullable();
            $table->string('gameweek_21')->nullable();
            $table->string('gameweek_22')->nullable();
            $table->string('gameweek_23')->nullable();
            $table->string('gameweek_24')->nullable();
            $table->string('gameweek_25')->nullable();
            $table->string('gameweek_26')->nullable();
            $table->string('gameweek_27')->nullable();
            $table->string('gameweek_28')->nullable();
            $table->string('gameweek_29')->nullable();
            $table->string('gameweek_30')->nullable();
            $table->string('gameweek_31')->nullable();
            $table->string('gameweek_32')->nullable();
            $table->string('gameweek_33')->nullable();
            $table->string('gameweek_34')->nullable();
            $table->string('gameweek_35')->nullable();
            $table->string('gameweek_36')->nullable();
            $table->string('gameweek_37')->nullable();
            $table->string('gameweek_38')->nullable();
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
        Schema::dropIfExists('players_point_histories');
    }
};
