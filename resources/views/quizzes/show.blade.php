@extends ('layouts.guest')

@section ('content')
    <div class="container pl-3 pb-3">
        <h1 class="pb-2">{{ $quiz->name }}</h1>
        <div id="quizresults"></div>

        <form id="quizform">
            @csrf
            @foreach($quiz->questions as $q => $question)
                <div class="form-group">
                    <div id="question_{{ $q }}">{{ $q + 1 }}. {{ $question->text }}</div>
                    <hr>
                    @foreach($question->answers as $a => $answer)
                        <div id="answer_{{ $answer->id }}">
                            <input type="radio" name="question_{{ $question->id }}" value="{{ $answer->is_correct }}">
                            {{ $answer->text }}
                        </div>
                        <br>
                    @endforeach
                    <br><hr>
                </div>
            @endforeach
            <div class="form-group">
                <button id="quizsubmit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
@endsection
