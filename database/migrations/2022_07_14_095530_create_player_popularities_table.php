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
        Schema::create('player_popularities', function (Blueprint $table) {
            $table->id();
            $table->string('player_id');
            $table->decimal('gameweek_1', 4, 2)->nullable();
            $table->decimal('gameweek_2', 4, 2)->nullable();
            $table->decimal('gameweek_3', 4, 2)->nullable();
            $table->decimal('gameweek_4', 4, 2)->nullable();
            $table->decimal('gameweek_5', 4, 2)->nullable();
            $table->decimal('gameweek_6', 4, 2)->nullable();
            $table->decimal('gameweek_7', 4, 2)->nullable();
            $table->decimal('gameweek_8', 4, 2)->nullable();
            $table->decimal('gameweek_9', 4, 2)->nullable();
            $table->decimal('gameweek_10', 4, 2)->nullable();
            $table->decimal('gameweek_11', 4, 2)->nullable();
            $table->decimal('gameweek_12', 4, 2)->nullable();
            $table->decimal('gameweek_13', 4, 2)->nullable();
            $table->decimal('gameweek_14', 4, 2)->nullable();
            $table->decimal('gameweek_15', 4, 2)->nullable();
            $table->decimal('gameweek_16', 4, 2)->nullable();
            $table->decimal('gameweek_17', 4, 2)->nullable();
            $table->decimal('gameweek_18', 4, 2)->nullable();
            $table->decimal('gameweek_19', 4, 2)->nullable();
            $table->decimal('gameweek_20', 4, 2)->nullable();
            $table->decimal('gameweek_21', 4, 2)->nullable();
            $table->decimal('gameweek_22', 4, 2)->nullable();
            $table->decimal('gameweek_23', 4, 2)->nullable();
            $table->decimal('gameweek_24', 4, 2)->nullable();
            $table->decimal('gameweek_25', 4, 2)->nullable();
            $table->decimal('gameweek_26', 4, 2)->nullable();
            $table->decimal('gameweek_27', 4, 2)->nullable();
            $table->decimal('gameweek_28', 4, 2)->nullable();
            $table->decimal('gameweek_29', 4, 2)->nullable();
            $table->decimal('gameweek_30', 4, 2)->nullable();
            $table->decimal('gameweek_31', 4, 2)->nullable();
            $table->decimal('gameweek_32', 4, 2)->nullable();
            $table->decimal('gameweek_33', 4, 2)->nullable();
            $table->decimal('gameweek_34', 4, 2)->nullable();
            $table->decimal('gameweek_35', 4, 2)->nullable();
            $table->decimal('gameweek_36', 4, 2)->nullable();
            $table->decimal('gameweek_37', 4, 2)->nullable();
            $table->decimal('gameweek_38', 4, 2)->nullable();
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
        Schema::dropIfExists('player_popularities');
    }
};
