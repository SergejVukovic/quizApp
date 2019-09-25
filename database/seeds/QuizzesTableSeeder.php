<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class QuizzesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quizzes')->insert([
            'name' => 'Geografija',
            'description' => 'Ovo je kviz iz geografije!',
            'numOfPlays' => 0,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);

        DB::table('quizzes')->insert([
            'name' => 'Istorija',
            'description' => 'Ovo je kviz iz istorije!',
            'numOfPlays' => 0,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
    }
}
