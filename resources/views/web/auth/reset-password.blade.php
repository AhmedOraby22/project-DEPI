@extends('web.layouts.head')

<head>
    <link rel="stylesheet" href="{{ asset('web_asset/css/main.css') }}">
</head>


<section class="vh-100 bg-image" style="
    background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;">
    
    <div class="gradient-custom-3">
        @if (isset($message))
            <h6 class="alert alert-info">{{ $message }}</h6>
        @endif

        <div class="container h-100" style="width: 550px; margin-top: -50px;">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="card" style="border-radius: 15px;">
                    <div class="card-body p-4">
                        @if (session('status'))
                            <h6 class="alert alert-success text-center">{{ session('status') }}</h6>
                        @endif

                        <h2 class="text-uppercase text-center mb-3">Reset your Password</h2>

                        <form action="{{ route('password.update') }}" method="POST">
                            @csrf

                            {{-- Code Input --}}
                            <div class="mb-3">
                                <label class="form-label" for="code">Your Code:</label>
                                <input type="text" name="code" 
                                    class="form-control @error('code') ring-red-500 @enderror" 
                                    required value="{{ old('code') }}" />
                                @error('code')
                                    <p class="error text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            {{-- Email Input --}}
                            <div class="mb-3">
                                <label class="form-label" for="email">Your Email:</label>
                                <input type="text" name="email" 
                                    class="form-control @error('email') ring-red-500 @enderror" 
                                    required value="{{ old('email') }}" />
                                @error('email')
                                    <p class="error text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            {{-- Password Input --}}
                            <div class="mb-3">
                                <label class="form-label" for="password">Password:</label>
                                <input type="password" name="password" 
                                    class="form-control @error('password') ring-red-500 @enderror" required />
                                @error('password')
                                    <p class="error text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            {{-- Password Confirmation Input --}}
                            <div class="mb-3">
                                <label class="form-label" for="password_confirmation">Repeat Password:</label>
                                <input type="password" name="password_confirmation" 
                                    class="form-control @error('password') ring-red-500 @enderror" required />
                                @error('password')
                                    <p class="error text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            {{-- Submit Button --}}
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-success btn-block btn-lg col-12">
                                    Reset Password
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

