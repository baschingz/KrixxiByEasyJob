<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageJobSeeker extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('imageJobSeeker', function(Blueprint $table){
            $table->increments('image_jseeker_id');
            $table->longText('image_data')->charset('utf8');
            $table->unsignedInteger('jobseek_id');

            $table->foreign('jobseek_id')
                  ->references('jobseek_id')->on('job_seeker')
                  ->onDelete('cascade');
        });
        


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('imageJobSeeker');
    }
}
