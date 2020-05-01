<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCrownedTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crowned', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->longText('bio');
            $table->string('image');
            $table->integer('position');
            $table->longText('award');
            $table->longText('session');
            $table->boolean('published');
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
        Schema::drop('crowned');
    }
}
