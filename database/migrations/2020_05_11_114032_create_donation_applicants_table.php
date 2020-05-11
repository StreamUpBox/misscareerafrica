<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDonationApplicantsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donation_applicants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name');
            $table->string('email');
            $table->string('phone_number');
            $table->longText('q1');
            $table->longText('q2');
            $table->longText('q3');
            $table->longText('q4');
            $table->longText('q5');
            $table->longText('q6');
            $table->longText('q7');
            $table->boolean('allowed_dantion');
            $table->string('attach_business_plan');
            $table->string('upload_your_profile_picture');
            $table->integer('donation_session_id');
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
        Schema::drop('donation_applicants');
    }
}
