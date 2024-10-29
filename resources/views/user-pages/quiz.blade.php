@extends('layout.app')

@section('content')
<main class="tp-dashboard-body-bg d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="tpd-dashboard-wrap-bg">
        <div class="quiz-wrapper bg-light p-4 rounded shadow">
            <h2 class="text-center mb-4">{{ $quiz->title }}</h2>

            <form action="{{ route('quiz.submit', $quiz->id) }}" method="POST">
                @csrf

                @foreach ($quiz->questions as $question)
                    <div class="question mb-3">
                        <h4>{{ $loop->iteration }}. {{ $question->text }}</h4>

                        @foreach ($question->options as $option)
                            <div class="form-check">
                                <input type="radio" name="answers[{{ $question->id }}]" value="{{ $option->id }}" id="option{{ $option->id }}" class="form-check-input">
                                <label for="option{{ $option->id }}" class="form-check-label">{{ $option->text }}</label>
                            </div>
                        @endforeach
                    </div>
                @endforeach

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit Quiz</button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection
