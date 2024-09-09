@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Search Results</h1>
    @if($results->isEmpty())
        <p>No results found.</p>
    @else
        <ul>
            @foreach($results as $result)
                <li>{{ $result->name }}</li> <!-- Adjust according to your model -->
            @endforeach
        </ul>
    @endif
</div>
@endsection
