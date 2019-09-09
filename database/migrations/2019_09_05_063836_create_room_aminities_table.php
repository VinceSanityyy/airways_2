<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomAminitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_aminities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('room_id')->unsigned();
            $table->bigInteger('aminity_id')->unsigned();
            $table->string('status');
            $table->timestamps();
        });

        
        Schema::table('room_aminities', function ($table){
            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');
        });
        Schema::table('room_aminities', function ($table){
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
        Schema::dropIfExists('room_aminities');
    }
}
