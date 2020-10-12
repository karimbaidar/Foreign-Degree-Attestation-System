<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdataPersonalDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('personal_details', function (Blueprint $table) {
            $table->boolean('id_varification')->default(0);
            $table->boolean('police_varification')->default(0);
            $table->boolean('document_varification')->default(0);
            $table->boolean('bank_varification')->default(0);
            $table->boolean('test_examination')->default(0);
            $table->boolean('guarantee_varification')->default(0);
            $table->boolean('fit_to_work')->default(0);
            $table->boolean('diclaration')->default(0);
            $table->boolean('approval')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('personal_details', function (Blueprint $table) {
            //
        });
    }
}
