<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressPostOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_post_offices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('postOffice');
            $table->integer('fk_country_id')->unsigned();
            $table->foreign('fk_country_id')->references('id')->on('address_countries');
            $table->integer('fk_state_id')->unsigned();
            $table->foreign('fk_state_id')->references('id')->on('address_states');
            $table->integer('fk_district_id')->unsigned();
            $table->foreign('fk_district_id')->references('id')->on('address_districts');
            $table->integer('fk_sub_division_id')->unsigned();
            $table->foreign('fk_sub_division_id')->references('id')->on('address_sub_divisions');
            $table->integer('fk_circle_office_id')->unsigned();
            $table->foreign('fk_circle_office_id')->references('id')->on('address_circle_offices');
            $table->integer('fk_police_station_id')->unsigned();
            $table->foreign('fk_police_station_id')->references('id')->on('address_police_stations');
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
        Schema::dropIfExists('address_post_offices');
    }
}
