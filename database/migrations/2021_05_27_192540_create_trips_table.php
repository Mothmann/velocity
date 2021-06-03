<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Departure_city', 191)->nullable();
            $table->string('Arrival_city', 191)->nullable();
            $table->string('Departure_station', 191)->nullable();
            $table->string('Arrival_station', 191)->nullable();
            $table->integer('price')->nullable();
            $table->time('Arrival_Time')->nullable();
            $table->timestamp('Departure_Date')->useCurrent();
            $table->tinyInteger('dispo')->default(0);
            $table->unsignedBiginteger('train_id');
            $table->timestamps();
        });
        Schema::table('trips', function (Blueprint $table){
            $table->foreign('Departure_city')->references('city')->on('location');
            $table->foreign('Arrival_city')->references('city')->on('location');
            $table->foreign('Departure_station')->references('station')->on('location');
            $table->foreign('Arrival_station')->references('station')->on('location');
            $table->foreign('train_id')->references('id')->on('trains');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trips');
    }
}
