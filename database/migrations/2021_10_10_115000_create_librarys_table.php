<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrarysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libraries', function (Blueprint $table) {
            $table->string('lecture_email');
            $table->string('subject_name');
            $table->string('document_id')->unique();
            $table->integer('grade');
            $table->string('title');
            $table->string('content');
            $table->string('author');
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
        Schema::dropIfExists('libraries');
    }
}
