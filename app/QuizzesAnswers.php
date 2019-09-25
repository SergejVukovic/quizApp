<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuizzesAnswers extends Model
{
    protected $table = 'quizzes_answers';
    protected $fillable = ['title', 'correctAnswer','questionId'];
}
