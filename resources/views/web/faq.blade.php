@extends('web.layouts.app')

@section('content')
    <div class="container">
        <h2>Frequently Asked Questions</h2>

        @foreach ($faqs1 as $faq)
            <div class="faq">
                <h3>{{ $faq->question }}</h3>
                <p>{{ $faq->answer }}</p>
            </div>
            <hr>
        @endforeach
    </div>
@endsection 
