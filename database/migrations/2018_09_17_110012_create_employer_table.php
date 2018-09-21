<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employer', function (Blueprint $table) {
            $table->increments('employer_id');
            $table->string('name', 100)->charset('utf8')->default(0);
            $table->longText('address')->charset('utf8');
            $table->string('type', 100)->charset('utf8')->default(0);
            $table->string('tel', 100)->charset('utf8')->default(0);
            $table->string('email', 100)->charset('utf8')->unique();
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
        Schema::dropIfExists('employer');
    }
}
