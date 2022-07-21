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
        Schema::create('gameweeks', function (Blueprint $table) {
            $table->id();
            $table->integer('average_team_points')->nullable();
            $table->integer('highest_team_points')->nullable();
            $table->integer('most_selected_player')->nullable();
            $table->integer('highest_scoring_player')->nullable();
            $table->integer('highest_player_score')->nullable();
            $table->integer('most_transferred_in_player')->nullable();
            $table->integer('most_captained_player')->nullable();
            $table->integer('most_vice_captained_player')->nullable();
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
        Schema::dropIfExists('gameweeks');
    }
};
