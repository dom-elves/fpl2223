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

        Schema::disableForeignKeyConstraints();

        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            // $table->foreign('team_id')->references('team_id')->on('players');
            $table->string('team_name');
            $table->string('team_short_name');
            $table->string('hex_primary');
            $table->string('hex_secondary');
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
        Schema::dropIfExists('teams');
    }
};
