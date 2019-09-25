<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class QuizzesQuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quizzes_questions')->insert([
            'title' => 'Koliko ima kontinenata ? ',
            'hint' => 'Google it !',
            'quiz_id' => 1,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);

        DB::table('quizzes_questions')->insert([
            'title' => 'Koliko godina ima Zdravko Colic ? ',
            'hint' => 'Star kao Grcka',
            'quiz_id' => 2,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
    }
}
