<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_course', function (Blueprint $table) {
            $table->increments("id");
            $table->integer('course_id')->unsigned();
            $table->integer('student_id')->unsigned();
            $table->timestamps();

            // $table->foreign('course_id')

            // ->references('id')
            // ->on('courses')
            // ->onDelete('cascade');
            // $table->foreign('student_id')
            // ->references('id')
            // ->on('student')
            // ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_courses');
    }
}
