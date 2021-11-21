<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLecturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lectures', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->integer('age')->nullable();
            $table->string('phone')->nullable();
            $table->string('degree')->nullable();
            $table->string('level_name')->nullable();
            $table->string('work_address')->nullable();
            $table->string('avatar')->nullable();
            $table->string('university')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

    }
    /**
     * Reverse the migrations.

     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lectures');
    }
}
