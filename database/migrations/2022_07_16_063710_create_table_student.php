<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableStudent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->string('studentID', 20)->primary();
            $table->string('studentName', 255);
            $table->date('birthday')->nullable(); //cho phep null
            $table->string('classID', 20);
            $table->timestamps();
            //Tao khoa ngoai
            $table->foreign('classID')->references('classID')->on('classes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student');
    }
}
