@extends ('layouts.guest')

@section ('content')
    <div class="container pl-3 pb-3">
        <h1 class="pb-2">{{ $quiz->name }}</h1>
        @if($correct)
            <h3 style="color: #ff0000">Congratulations!! You have {{ $correct }} correct answers!</h3>
            @if(count($missed))
            <div class="pb-6">You missed:
            @foreach($missed as $m => $miss)
                <br>{{ $miss }}
            @endforeach
            </div>
            @endif
        @endif

        <form id="quizresults" method="POST" action="/quizzes/{{ $quiz->id }}/show">
            @csrf
        @foreach($quiz->questions as $q => $question)
            <div class="form-group">
                {{ $q + 1 }}. {{ $question->text }}
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
                <input class="btn btn-primary" type="submit">
            </div>
        </form>
    </div>
@endsection
