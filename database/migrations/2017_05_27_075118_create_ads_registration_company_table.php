<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsRegistrationCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads_registration_company', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_email')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_principal')->nullable();
            $table->string('company_pan_number')->nullable();
            $table->string('tan_number')->nullable();
            $table->string('iec_number')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('fax')->nullable();
            $table->string('company_email')->nullable();
            $table->string('authorized_person')->nullable();
            $table->enum('gender',['m','f'])->default('m');
            $table->date('person_dob')->nullable();
            $table->string('person_contact')->nullable();
            $table->string('business_address')->nullable();
            $table->string('perment_address')->nullable();
            $table->string('alter_number')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('citizanship')->nullable();
            $table->string('pan_number')->nullable();
            $table->string('pan_number_file')->nullable();
            $table->string('photo')->nullable();
            $table->string('doc_type')->nullable();
            $table->string('file_name')->nullable();
           
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
        Schema::dropIfExists('ads_registration_company');
        
    }
}
