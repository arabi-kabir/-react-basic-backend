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
            $table->id();
            $table->string('short_title');
            $table->mediumText('short_description');
            $table->string('small_img');
            $table->string('long_title');
            $table->mediumText('long_des');
            $table->string('total_lecture');
            $table->string('total_student');
            $table->mediumText('skill_all');
            $table->string('video_url');
            $table->string('course_link');
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
        Schema::dropIfExists('courses');
    }
}
