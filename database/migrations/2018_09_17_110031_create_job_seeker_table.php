<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobSeekerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_seeker', function (Blueprint $table) {
            $table->increments('jobseek_id');
            $table->string('name', 100)->charset('utf8')->default(0);
            $table->string('gender', 10)->charset('utf8')->default(0);
            $table->string('tel', 50)->charset('utf8')->default(0);
            $table->string('email', 100)->charset('utf8')->unique();
            //$table->longText('image')->charset('utf8')->default(0);
            $table->tinyInteger('status');
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
        Schema::dropIfExists('job_seeker');
    }
}
