<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generals', function (Blueprint $table) {
           //$table->increments('id');
            $table->string('reg_no');
            $table->string('profession')->nullable();
            $table->string('medical_degree')->nullable();
            $table->string('faculty')->nullable();
            $table->string('university_type')->nullable();
            $table->string('university_name')->nullable();
            $table->date('u_from_date')->nullable();
            $table->date('u_to_date')->nullable();
            $table->date('year_of_passing')->nullable();


            
            $table->string('type_of_qualification')->nullable();
            $table->string('job_title')->nullable();
            $table->string('hospital_type')->nullable();
            $table->string('hospital_name')->nullable();
            $table->date('job_from_date')->nullable();
            $table->date('job_to_date')->nullable();
            $table->string('license_no')->nullable();
            $table->date('date_of_issue')->nullable();
            $table->date('date_of_validity')->nullable();
            $table->string('public_address')->nullable();
            $table->string('private_address')->nullable();
            $table->string('training_type')->nullable();
            $table->date('t_from_date')->nullable();
            $table->date('t_to_date')->nullable();
            $table->string('nationality')->nullable();
           
            
            $table->date('w_from_date')->nullable();
            $table->date('w_to_date')->nullable();
            $table->string('organization_name')->nullable();
            $table->string('contact')->nullable();
            $table->string('flag');
            
            
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
        Schema::dropIfExists('generals');
    }
}
