<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsRegistrationIndividualTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads_registration_individual', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_email')->nullable();
            $table->string('pan_number')->nullable();
            $table->string('pan_number_file')->nullable();
            $table->string('adhar_card')->nullable();
            $table->string('adhar_card_file')->nullable();
            $table->string('dl_number')->nullable();
            $table->string('dl_number_file')->nullable();
           
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ads_registration_individual');

    }
}
