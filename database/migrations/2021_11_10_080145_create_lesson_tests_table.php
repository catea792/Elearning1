<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lesson_tests', function (Blueprint $table) {
            $table->string('username');
            $table->string('course_id');
            $table->string('lesson_id');
            $table->integer('id')->primary();
            $table->string('question');
            $table->string('choose_1');
            $table->string('choose_2');
            $table->string('choose_3');
            $table->string('choose_4');
            $table->string('answer');
            $table->integer('point');
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
        Schema::dropIfExists('lesson_tests');
    }
}
