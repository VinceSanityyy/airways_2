<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->bigIncrements('flight_id');
            $table->string('flight_schedule');
            $table->string('flight_arrival');
            $table->string('alias');
            $table->string('flight_country_from');
            $table->string('flight_country_to');
            $table->bigInteger('plane_id')->unsigned();
            $table->double('price');
            $table->integer('seats_available');
            $table->string('status');
        });

        Schema::table('flights', function($table) {
            $table->foreign('plane_id')
                  ->references('id')->on('planes')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flights');
    }
}
