@extends ('layouts.guest')

@section ('content')
<div class="container p-3">
    <h1 class="pb-6">Welcome to QuizMaster!</h1>
    <p>Please select your quiz from the choices below:</p>
    <ul>
    @foreach($quizzes as $quiz)
        <li><a href="/quizzes/{{$quiz->id}}/show">{{ $quiz->name }}</a></li>
    @endforeach
    </ul>
</div>
@endsection
