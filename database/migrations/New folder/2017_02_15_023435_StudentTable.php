<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('laravel_students', function (Blueprint $table) {
          $table->increments('id');
            $firstname->string('firstname' , 100);
            $middle->string('middle' , 30);
            $lastname->string('lastname' , 50);
            $course->string('course' , 300);
            $id_number->int('id_number', 20);
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
        Schema::drop('laravel_student');
    }
}
