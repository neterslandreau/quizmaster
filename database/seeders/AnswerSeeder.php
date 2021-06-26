<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers')->insert([
            [
                'question_id' => 1,
                'text' => 'sequential query listings',
                'is_correct' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 1,
                'text' => 'structured query language',
                'is_correct' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 1,
                'text' => 'semantic query library',
                'is_correct' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 1,
                'text' => 'stochastic query language',
                'is_correct' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'question_id' => 2,
                'text' => 'network',
                'is_correct' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 2,
                'text' => 'hierarchical',
                'is_correct' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 2,
                'text' => 'relational',
                'is_correct' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 2,
                'text' => 'parental',
                'is_correct' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'question_id' => 3,
                'text' => 'records loosely integrated',
                'is_correct' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 3,
                'text' => 'a collection of information organized is such a way that a computer program can quickly select desired pieces of data',
                'is_correct' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 3,
                'text' => ' flat files with similar data in them, related to other flat files',
                'is_correct' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 3,
                'text' => 'a baseline for data storage and comparison',
                'is_correct' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'question_id' => 4,
                'text' => 'FTP',
                'is_correct' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 4,
                'text' => 'OLAP',
                'is_correct' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 4,
                'text' => 'XML',
                'is_correct' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 4,
                'text' => 'OODBMS',
                'is_correct' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'question_id' => 9,
                'text' => 'enterprise relational data',
                'is_correct' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 9,
                'text' => 'enterprise resource descriptions',
                'is_correct' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 9,
                'text' => 'entity relationship diagram',
                'is_correct' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 9,
                'text' => 'entities related to data',
                'is_correct' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'question_id' => 6,
                'text' => 'a two-dimensional structure composed of rows and columns',
                'is_correct' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 6,
                'text' => 'a plateau in the design of databases',
                'is_correct' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 6,
                'text' => 'an article of furniture',
                'is_correct' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 6,
                'text' => 'a collection of related entities and their attributes',
                'is_correct' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'question_id' => 5,
                'text' => 'something that exists as a particular and discrete unit',
                'is_correct' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 5,
                'text' => 'a person, place, or thing on which we intend to collect data',
                'is_correct' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 5,
                'text' => 'anything having existence',
                'is_correct' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 5,
                'text' => 'a collection of facts to be stored in a computer',
                'is_correct' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'question_id' => 7,
                'text' => 'the condition or fact of being related, connected or association between business objects',
                'is_correct' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 7,
                'text' => 'a logical or natural association between two or more things, with a degree of relevance of one to another',
                'is_correct' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 7,
                'text' => 'association between entities',
                'is_correct' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 7,
                'text' => 'linkage between many business entities',
                'is_correct' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'question_id' => 8,
                'text' => 'First Normal Form (1NF)',
                'is_correct' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 8,
                'text' => 'Second Normal Form (2NF)',
                'is_correct' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 8,
                'text' => 'Third Normal Form (3NF)',
                'is_correct' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 8,
                'text' => 'Boyce-Codd Normal Form (BCNF)',
                'is_correct' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'question_id' => 10,
                'text' => 'the number of elements in a set',
                'is_correct' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 10,
                'text' => 'specific number of entity occurrences associated with one occurrence of the related entity',
                'is_correct' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 10,
                'text' => 'an isomorphism class in the category of sets',
                'is_correct' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 10,
                'text' => 'a set count',
                'is_correct' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
