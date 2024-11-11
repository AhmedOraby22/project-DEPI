@extends('web.layouts.head')

<head>
    <title>Forgot Password</title>
    <link rel="stylesheet" href="{{ asset('web_asset/css/main.css') }}">
</head>

<body>
    <section class="bg-image" style="
        background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;">
        
        <div class="gradient-custom-3 h-100">
            @if (session('status'))
                <h6 class="alert alert-success text-center">{{ session('status') }}</h6>
            @endif

            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-10 col-md-7 col-lg-5 col-xl-4">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <form action="{{ url('/forgot-password') }}" method="POST" autocomplete="off">
                                @csrf
                                <h2 class="text-center mb-4">Forgot Password</h2>
                                <p class="text-center mb-3">Enter your email address</p>

                                <div class="form-group mb-3">
                                    <input 
                                    input type="text" name="email" 
                                    class="form-control @error('email') ring-red-500 @enderror" 
                                    required
                                    >
                                    @error('email')
                                    <p class="error text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input 
                                        type="submit" 
                                        name="check-email" 
                                        value="Continue" 
                                        class="btn btn-primary w-100"
                                    >
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
