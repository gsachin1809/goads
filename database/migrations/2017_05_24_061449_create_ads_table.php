<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            
            $table->increments('ads_id');
            $table->string('product_name')->nullable();
            $table->text('product_desc')->nullable();
            $table->integer('product_price')->nullable();
            $table->integer('product_discount')->nullable();
            $table->string('product_category')->nullable();
            $table->string('image')->nullable();
            $table->string('package')->nullable();
            $table->string('status')->nullable();

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
        Schema::dropIfExists('ads');
    }
}
