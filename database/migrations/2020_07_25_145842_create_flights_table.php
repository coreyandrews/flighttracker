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
            $table->string('pilot')->nullable(); /**Pilot in Command */
            $table->string('pass')->nullable(); /**Passangers on Board */
            $table->text('flt_typ')->nullable(); /**VFR or IFR */
            $table->text('dep_icao'); /**Departure ICAO */
            $table->date('dep_date'); /**Departure Date */
            $table->time('dep_time'); /**Departure Time */
            $table->text('arr_icao'); /**Arrival ICAO */
            $table->date('arr_date'); /**Arrival Date */
            $table->time('arr_time'); /**Arrival Time */
            $table->text('alt_icao'); /**Alternate ICAO */
            $table->string('aircraft_reg'); /**Aircraft Registration */
            $table->string('aircraft_typ'); /**Aircraft Type */
            $table->string('route'); /**Route of Flight */
            $table->string('altitude'); /**Cruising Altitude */
            $table->string('flt_time')->nullable(); /**Flight Time in Hrs */
            $table->string('landings')->nullable(); /**Number of Landings */
            $table->text('img_path')->nullable(); /**Image Path */
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
