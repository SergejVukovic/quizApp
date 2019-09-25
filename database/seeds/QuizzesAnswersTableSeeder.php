<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class QuizzesAnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quizzes_answers')->insert([
            'title' => '7',
            'correctAnswer' => 1,
            'question_id' => 1,
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);

        DB::table('quizzes_answers')->insert([
            'title' => '3',
            'correctAnswer' => 0,
            'question_id' => 1,
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);

        DB::table('quizzes_answers')->insert([
            'title' => '4',
            'correctAnswer' => 0,
            'question_id' => 1,
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);

        DB::table('quizzes_answers')->insert([
            'title' => '45 ',
            'correctAnswer' => 0,
            'question_id' => 2,
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);

        DB::table('quizzes_answers')->insert([
            'title' => '65',
            'correctAnswer' => 0,
            'question_id' => 2,
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);

        DB::table('quizzes_answers')->insert([
            'title' => '68',
            'correctAnswer' => 1,
            'question_id' => 2,
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
    }
}
