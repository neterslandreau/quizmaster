<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Answer extends Model
{
    use HasFactory;

    protected $table = 'answers';

    protected $guarded = [];

    public function question() {
        return $this->belongsTo(Question::class);
    }

    public static function correct(int $question)
    {
        $c = DB::table('answers')
            ->select('text')
            ->where('is_correct', 1)
            ->where('question_id', $question)
            ->first();
        return $c;
    }
}
