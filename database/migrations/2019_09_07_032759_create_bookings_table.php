<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('booking_id');
            $table->bigInteger('flight_id')->unsigned();
            $table->string('name');
            $table->string('mobile_no');
            $table->integer('seat_no');
            $table->timestamps();
        });

        Schema::table('bookings', function($table) {
            $table->foreign('flight_id')
                  ->references('flight_id')->on('flights')
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
        Schema::dropIfExists('bookings');
    }
}
