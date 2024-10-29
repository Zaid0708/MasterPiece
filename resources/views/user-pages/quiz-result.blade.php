@extends('layout.app')

@section('content')
<main class="tp-dashboard-body-bg">
    <div class="tpd-dashboard-wrap-bg">
        <div class="quiz-result">
            <h2>Your Score: {{ $score }}%</h2>
            @if ($score >= 70)
                <p>Congratulations! You passed the quiz!</p>
            @else
                <p>Sorry, you didn't pass. Try again!</p>
            @endif
        </div>
    </div>
</main>
@endsection
