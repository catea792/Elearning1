<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->string('lecture_email');
            $table->string('course_id')->unique();
            $table->string('course_name');
            $table->string('subject_id');
            $table->integer('grade');
            $table->string('video')->nullable();
            $table->text('description')->nullable();
            $table->text('requirements')->nullable();
            $table->text('outcomes')->nullable();
            $table->string('des_image')->nullable();
            $table->string('slug')->primary();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.

     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
