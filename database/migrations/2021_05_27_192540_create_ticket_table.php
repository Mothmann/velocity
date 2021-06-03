<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBiginteger('user_id', null);
            $table->string('name', 191)->nullable();
            $table->string('Departure_city', 191)->nullable();
            $table->string('Arrival_city', 191)->nullable();
            $table->string('Departure_station', 191)->nullable();
            $table->string('Arrival_station', 191)->nullable();
            $table->unsignedBiginteger('trip_id');
            $table->unsignedBiginteger('price');
            $table->dateTime('date');
            $table->string('pdf_location', 191);
            $table->timestamps();
        });
        Schema::table('tickets', function (Blueprint $table){
            $table->foreign('user_id')->references('id')->on('users')->nullable()->unsigned();
            $table->foreign('name')->references('name')->on('users')->unsigned();
            $table->foreign('Departure_city')->references('Departure_city')->on('trips');
            $table->foreign('Arrival_city')->references('Arrival_city')->on('trips');
            $table->foreign('Departure_station')->references('Departure_station')->on('trips');
            $table->foreign('Arrival_station')->references('Arrival_station')->on('trips');
            $table->foreign('price')->references('price')->on('trips');
            $table->foreign('date')->references('Departure_Date')->on('trips');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ticket');
    }
}
