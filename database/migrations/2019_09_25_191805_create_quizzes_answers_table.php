<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizzesAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('quizzes_answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->integer('correctAnswer');
            $table->bigInteger('question_id')->unsigned();
            $table->timestamps();

            $table->foreign('question_id')->references('id')->on('quizzes_questions');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quizzes_answers');
    }
}
