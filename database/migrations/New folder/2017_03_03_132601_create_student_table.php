<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('laravel_student', function (Blueprint $table) {
            $table->increments('id');
            $name->string('name' , 100);
            $course->string('course' , 300);
            $id_number->int('id_number', 20);
            $table->timestamps();
        });
    }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        public function down()
    {
        Schema::dropIfExists('students');
    }
    }
}
