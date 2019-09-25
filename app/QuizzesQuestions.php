<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuizzesQuestions extends Model
{
    protected $table = 'quizzes_questions';
    protected $fillable = ['title', 'hint', 'quiz_id'];
}
