<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->char('flight', 10);
            $table->char('type', 10);
            $table->char('airline', 3)->nullable();
            $table->foreign('airline')->references('icao')->on('airlines');
            $table->char('departure', 4);
            $table->foreign('departure')->references('icao')->on('airports');
            $table->char('departure_gate', 10)->nullable();
            $table->mediumText('route')->nullable();
            $table->char('destination', 4);
            $table->foreign('destination')->references('icao')->on('airports');
            $table->char('destination_gate', 10)->nullable();
            $table->char('aircraft', 4)->nullable();
            $table->dateTime('departure_time')->nullable();
            $table->dateTime('arrival_time')->nullable();
            $table->mediumText('information')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('bookings');
    }
}
