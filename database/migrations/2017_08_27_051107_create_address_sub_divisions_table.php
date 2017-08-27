<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressSubDivisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_sub_divisions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subDivision');
            $table->integer('fk_country_id')->unsigned();
            $table->foreign('fk_country_id')->references('id')->on('address_countries');
            $table->integer('fk_state_id')->unsigned();
            $table->foreign('fk_state_id')->references('id')->on('address_states');
            $table->integer('fk_district_id')->unsigned();
            $table->foreign('fk_district_id')->references('id')->on('address_districts');
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
        Schema::dropIfExists('address_sub_divisions');
    }
}
