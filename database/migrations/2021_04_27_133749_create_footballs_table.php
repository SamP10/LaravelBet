<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootballsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footballs', function (Blueprint $table) {
            $table->id();
            $table->integer('sport_id');
            $table->string('team');
            $table->integer('team_id');
            $table->integer('league_id');
            $table->integer('points');
            $table->integer('wins');
            $table->integer('draws');
            $table->integer('losses');
            $table->integer('gd');
            $table->string('img_name');
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
        Schema::dropIfExists('footballs');
    }
}
