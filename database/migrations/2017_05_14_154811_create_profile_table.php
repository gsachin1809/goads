<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('Contact_number')->nullable();
            $table->string('email')->unique();
            $table->string('place_of_busniess')->nullable();
            $table->text('address')->nullable();
            $table->enum('gender',['male','female'])->default('male');
            $table->enum('matrial_status',['married','unmarried'])->default('unmarried');
            $table->string('citizenship')->default('Inida');
            $table->string('pan_number')->nullable();
            $table->string('type_of_occupation')->nullable();
            $table->timestamps();
            $table->timestamps('deleted_at');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile');
    }
}
