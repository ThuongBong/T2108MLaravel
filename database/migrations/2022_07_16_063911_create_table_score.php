<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableScore extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('score', function (Blueprint $table) {
            $table->id("scoreID");  //ham id co san truyen ten cot vao, tu dong tang, chi dung cho so nguyen
            $table->unsignedTinyInteger("score");
            $table->string("result",50);
            $table->string("studentID",20);
            $table->string("subjectID",20);
            $table->timestamps();
            $table->foreign("studentID")->references("studentID")->on("student");
            $table->foreign("subjectID")->references("subjectID")->on("subject");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('score');
    }
}
