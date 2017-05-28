<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
Schema::defaultStringLength(191);

class CreateProfileImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_image', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('photo')->nullable();
            $table->timestamps();
            $table->softDeletes();
            // $table->date('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile_image');
    }
}
