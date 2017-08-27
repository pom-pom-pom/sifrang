<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_districts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('district');
            $table->integer('fk_country_id')->unsigned();
            $table->foreign('fk_country_id')->references('id')->on('address_countries');
            $table->integer('fk_state_id')->unsigned();
            $table->foreign('fk_state_id')->references('id')->on('address_states');
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
        Schema::dropIfExists('address_districts');
    }
}
