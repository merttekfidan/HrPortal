<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->integer('entity_id');
            $table->integer('accounting_period_id');
            $table->integer('semester_id');
            $table->integer('term_id');
            $table->integer('language_id');
            $table->string('language_if_others', 50)->nullable();
            $table->string('name_of_subject', 500);
            $table->string('number_of_hours_planned', 500);
            $table->string('number_of_hours_real_conducted', 500)->nullable();
            $table->string('other_information', 500)->nullable();
            $table->integer('student_semester')->nullable()->comment('1 to 8');
            $table->string('day', 50)->nullable();
            $table->string('dates', 500)->nullable();
            $table->string('hours_of_conducted_lessons', 500)->nullable();
            $table->string('rooms', 500)->nullable();
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
