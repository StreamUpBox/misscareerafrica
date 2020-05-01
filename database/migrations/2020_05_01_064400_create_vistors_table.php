<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVistorsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Vistors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ip_address')->nullable();;
            $table->string('browser')->nullable();;
            $table->string('device')->nullable();;
            $table->string('platform')->nullable();;
            $table->string('browser_version')->nullable();;
            $table->string('device_version')->nullable();;
            $table->string('current_location')->nullable();;
            $table->string('language')->nullable();;
            $table->string('country')->nullable();;
            $table->string('city')->nullable();;
            $table->string('state')->nullable();;
            $table->string('lat')->nullable();;
            $table->string('lon')->nullable();;
            $table->string('root')->nullable();;
            $table->string('https')->nullable();;
            $table->string('activity')->nullable();;
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
        Schema::drop('Vistors');
    }
}
