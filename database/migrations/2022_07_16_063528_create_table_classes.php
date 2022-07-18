<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableClasses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            //$table->id('classID'); //truyen ten bang vao. Ap dung cho id la so nguyen, vi co san ham tu dong tang
            $table->string('classID', 20)->primary();
            $table->string('className', 20)->unique();
            $table->string('classRoom', 20);
            $table->timestamps();   //them duoc 2 cot create_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classes');
    }
}
