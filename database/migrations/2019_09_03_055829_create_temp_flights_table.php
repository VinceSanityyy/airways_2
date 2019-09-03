<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTempFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_flights', function (Blueprint $table) {
            $table->bigIncrements('FlightID');
            $table->integer('paymentID');
            $table->integer('customerID');
            $table->integer('planeID');
            $table->dateTime('reservationDate');
            $table->integer('PassengerNo');
            $table->dateTime('DepartDate');
            $table->string('DepartLoc');
            $table->string('ReturnLoc');
            $table->dateTime('ReturnDate');
            $table->float('price');
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
        Schema::dropIfExists('temp_flights');
    }
}
