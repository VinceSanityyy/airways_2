<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelAminitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_aminities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('hotel_id')->unsigned();
            $table->bigInteger('aminity_id')->unsigned();
            $table->string('status');
            $table->timestamps();
        });

        
        Schema::table('hotel_aminities', function ($table){
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');
        });
        Schema::table('hotel_aminities', function ($table){
            $table->foreign('aminity_id')->references('id')->on('aminities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_aminities');
    }
}
