<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id('id');
            $table->timestamps();
            $table->text('dep_icao');
            $table->date('dep_date');
            $table->time('dep_time');
            $table->text('arr_icao');
            $table->date('arr_date');
            $table->time('arr_time');
            $table->string('aircraft_typ');
            $table->string('aircraft_reg');
            $table->string('route');
            $table->string('altitude');
            $table->text('img_path');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flights');
    }
}
