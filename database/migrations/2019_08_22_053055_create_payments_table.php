<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('payment_id');
            $table->bigInteger('guest_id')->unsigned();
            $table->bigInteger('reservation_id')->unsigned();
            $table->string('status')->default('notpaid');
            $table->timestamps();
        });

        Schema::table('payments', function($table) {
            $table->foreign('guest_id')
                  ->references('guest_id')->on('guests')
                  ->onDelete('cascade');

                  $table->foreign('reservation_id')
                  ->references('reservation_id')->on('reservations')
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
        Schema::dropIfExists('payments');
    }
}
