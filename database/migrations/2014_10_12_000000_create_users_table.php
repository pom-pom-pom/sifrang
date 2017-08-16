<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('phone_no')->unique();
            $table->string('password');
            $table->string('guardians_name');
            $table->integer('age');
            $table->string('gender');
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('district')->nullable();
            $table->string('sub_division')->nullable();
            $table->string('circle_office')->nullable();
            $table->string('police_station')->nullable();
            $table->string('post_office')->nullable();
            $table->string('block')->nullable();
            $table->string('gpORtown')->nullable();
            $table->string('ward_no')->nullable();
            $table->string('village')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
