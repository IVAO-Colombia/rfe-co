<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsAtcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings_atc', function (Blueprint $table) {
            $table->id();
            // $table->string('name')->nullable(); esto lo usaremos para la web nueva
            $table->string('dependence')->nullable();
            // $table->string('callsing')->nullable(); esto lo usaremos para la web nueva
            $table->string('start_at')->nullable();
            $table->string('end_at')->nullable();
            $table->string('vid')->nullable();
            $table->integer('order')->unsigned()->nullable();
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
        Schema::dropIfExists('bookings_atc');
    }
}
