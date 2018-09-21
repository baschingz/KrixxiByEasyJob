<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageEmployer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('imageEmployer', function(Blueprint $table){
            $table->increments('image_employer_id');
            $table->longText('image_data')->charset('utf8');
            $table->unsignedInteger('employer_id');

            $table->foreign('employer_id')
                  ->references('employer_id')->on('employer')
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
        Schema::dropIfExists('imageEmployer');
    }
}
