<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quizzes = Quiz::all();

        return view('quizzes/index', compact('quizzes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  integer  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $quiz = Quiz::where('id', $id)->with('questions')->first();
        foreach ($quiz->questions as $q => $question) {
            $answers[$q] = Question::where('id', $question->id)->with('answers')->first();
        }
        $correct = 0;
        $missed = [];

        if (request()->method() === 'POST') {
            for ($x = 1; $x <= 10; $x++) {
                $correct = $correct + (int)request('question_'.$x);
                if (!(int)request('question_'.$x)) {
                    $answer_correct = Answer::correct($x);
                    array_push($missed, 'Q.'.$x.' - '.$answer_correct->text);
                }

            }
//            dump($correct);
        }

        return view('quizzes/show', compact('quiz', 'answers', 'correct', 'missed'));
    }

    /**
     * @param int $id
     * @param  \Illuminate\Http\Request  $request
     */
    public function tally(Request $request)
    {
        dump(request()->method());
        dump(request('question_1'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function edit(Quiz $quiz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quiz $quiz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quiz $quiz)
    {
        //
    }
}
