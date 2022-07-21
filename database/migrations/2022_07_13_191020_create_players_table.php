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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->integer('player_id');
            $table->string('first_name');
            $table->string('second_name');
            $table->string('web_name');
            $table->string('slug');
            $table->decimal('current_popularity', 4, 2)->nullable();
            $table->foreignId('team_id'); //foreignId for is table relationship
            $table->string('position');
            $table->integer('total_points_season')->nullable();
            $table->integer('total_points_week')->nullable();
            $table->integer('points_per_game')->nullable();
            $table->integer('current_cost')->nullable();
            $table->integer('start_cost')->nullable();
            $table->integer('cost_change_week')->nullable();
            $table->integer('goals_scored')->nullable();
            $table->integer('goals_assisted')->nullable();
            $table->integer('goals_conceded')->nullable();
            $table->integer('clean_sheets')->nullable();
            $table->integer('own_goals')->nullable();
            $table->integer('penalties_saved')->nullable();
            $table->integer('penalties_missed')->nullable();
            $table->integer('yellow_cards')->nullable();
            $table->integer('red_cards')->nullable();
            $table->integer('saves')->nullable();
            $table->integer('bonus_points_season')->nullable();
            $table->integer('minutes_season')->nullable();
            $table->integer('transfers_in_week')->nullable();
            $table->integer('transfers_out_week')->nullable();
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
        Schema::dropIfExists('players');
    }
};
