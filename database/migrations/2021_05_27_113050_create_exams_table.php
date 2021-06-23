<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('duration')->nullable();
            $table->string('num_of_students')->nullable();
            $table->time('start_time');
            $table->time('end_time');
            $table->date('date');
            $table->string('kind')->nullable();
            $table->string('num_of_pages')->nullable();
            $table->string('num_of_groups')->nullable();
            $table->foreignId('exam_type_id')->constrained()->onDelete('cascade');
            $table->foreignId('course_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('exams');
    }
}
