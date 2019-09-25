<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizzesQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('quizzes_questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('hint');
            $table->bigInteger('quiz_id')->unsigned();
            $table->timestamps();

            $table->foreign('quiz_id')->references('id')->on('quizzes');
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
        Schema::dropIfExists('quizzes_questions');
    }
}
