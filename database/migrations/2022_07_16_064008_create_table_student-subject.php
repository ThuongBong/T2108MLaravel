<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableStudentSubject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student-subject', function (Blueprint $table) {
            $table->string('studentID', 20);
            $table->string('subjectID', 20);
            $table->timestamps();
            //tao khoa ngoai
            $table->foreign('studentID')->references('studentID')->on('student');
            $table->foreign('subjectID')->references('subjectID')->on('subject');
            //tranh nguoi dung nhap thong tin trung lap. Vd: cung mot nguoi nhung hoc 2 mon tin
            $table->unique(['studentID', 'subjectID']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student-subject');
    }
}
