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
            $table->string('place_of_business')->nullable();
            $table->text('address')->nullable();
            $table->enum('gender',['male','female'])->nullable()->default('male');
            $table->enum('marital_status',['married','unmarried'])->nullable()->default('unmarried');
            $table->string('citizenship')->default('India');
            $table->string('pan_number')->nullable();
            $table->string('type_of_occupation')->nullable();
            $table->timestamps();
            $table->softDeletes();;

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
