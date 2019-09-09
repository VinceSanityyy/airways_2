<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('reservation_id');
            $table->bigInteger('guest_id')->unsigned();
            $table->bigInteger('room_id')->unsigned();
            $table->string('reservation_date');
            $table->string('check_in');
            $table->string('check_out');
            $table->integer('persons');
            $table->timestamps();
        });

        Schema::table('reservations', function($table) {
            $table->foreign('guest_id')
                  ->references('guest_id')->on('guests')
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
        Schema::dropIfExists('reservations');
    }
}
