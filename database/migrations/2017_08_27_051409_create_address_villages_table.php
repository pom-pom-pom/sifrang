<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressVillagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_villages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('village');
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
            $table->integer('fk_post_office_id')->unsigned();
            $table->foreign('fk_post_office_id')->references('id')->on('address_post_offices');
            $table->integer('fk_block_id')->unsigned();
            $table->foreign('fk_block_id')->references('id')->on('address_blocks');
            $table->integer('fk_ward_no_id')->unsigned();
            $table->foreign('fk_gp_or_town_id')->references('id')->on('address_gp_or_towns');
            $table->integer('fk_gp_or_town_id')->unsigned();
            $table->foreign('fk_ward_no_id')->references('id')->on('address_ward_nos');
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
        Schema::dropIfExists('address_villages');
    }
}
