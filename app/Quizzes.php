<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quizzes extends Model
{
    protected $table = 'Quizzes';
    protected $fillable = ['title','description','numOfPlays'];
}
