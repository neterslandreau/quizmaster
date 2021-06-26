<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            [
                'quiz_id' => 1,
                'text' => 'SQL stands for:',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'quiz_id' => 1,
                'text' => 'The most commonly used database model used today is:',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'quiz_id' => 1,
                'text' => 'A database is defined as a collection of:',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'quiz_id' => 1,
                'text' => 'For database development, the most important Web-related technology emerge in recent years is:',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'quiz_id' => 1,
                'text' => 'An entity in database design signifies:',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'quiz_id' => 1,
                'text' => 'A table in database design signifies:',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'quiz_id' => 1,
                'text' => 'A relationship in database design is:',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'quiz_id' => 1,
                'text' => 'A table meets the definition of relation is a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'quiz_id' => 1,
                'text' => 'ERD is an acronym that stands for:',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'quiz_id' => 1,
                'text' => 'Cardinality is:',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
