@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Welcome to My Medical Project</h1>
    <p>This is the home page of your medical project. You can add more content here to describe your project or provide important information to your users.</p>
    <a href="{{ route('about') }}" class="btn btn-primary">Learn More About Us</a>
</div>
@endsection
