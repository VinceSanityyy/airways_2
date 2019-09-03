<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTempPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_payments', function (Blueprint $table) {
            $table->bigIncrements('paymentID');
            $table->integer('customerID');
            $table->integer('flightID');
            $table->string('status');
            $table->string('stripe_id');
            $table->string('email');
            $table->string('NameOnCard');
            $table->string('contact');
            $table->float('tax');
            $table->float('total');
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
        Schema::dropIfExists('temp_payments');
    }
}
