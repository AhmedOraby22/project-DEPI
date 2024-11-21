@extends('web.layouts.head')
<head>

    <link rel="stylesheet" href="{{ asset('web_asset/css/main.css') }}">


</head>

{{-- @section('content') --}}

<section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');
           background-size: cover;
           background-position: center;
           background-repeat: no-repeat;">
    <div class="gradient-custom-3  h-100">
      
        <div class="container" style="width:550px">
            <div class="row d-flex justify-content-center align-items-center h-100 ">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            @if (session('status'))
                                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                                    @endif
                            <h2 class="text-uppercase text-center mb-5">Reset your Password</h2>
                            <form action="{{route('password.update')}}" method="post">
                                @csrf
                       {{--         <input type="hidden" name="token" value="{{$token}}">--}}
                                <div class="row align-items-center">
                                    <div class="mb-3">
                                        <label class="form-label" for="form3Example1cg">Your Code</label>
                                        <input type="text" id="form3Example1cg" class="form-control input @error('code') ring-red-500 @enderror" required value="{{ old('code') }}" />
                                        @error('code')
                                        <p class="error">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="row align-items-center">
                                    <div class="mb-3">
                                        <label class="form-label" for="form3Example1cg">Your Email</label>
                                        <input type="text" id="form3Example1cg" class="form-control input @error('email') ring-red-500 @enderror" required value="{{ old('email') }}" />
                                     @error('email')
                                    <p class="error">{{ $message }}</p>
                                @enderror
                                    </div>
                                   
                                    <div class="mb-3">
                                        <label class="form-label" for="form3Example4cg">Password</label>
                                        <input type="password" id="form3Example4cg" class="form-control input @error('password') ring-red-500 @enderror" name="password" required />
                                        @error('password')
                                        <p class="error">{{ $message }}</p>
                                    @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="form3Example4cg">Repeat Password</label>
                                        <input type="password" name="password_confirmation" class="form-control input @error('password') ring-red-500 @enderror">
                                        @error('password')
                                        <p class="error">{{ $message }}</p>
                                    @enderror
                                   
                                        </div>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="submit"
                                        class="btn btn-success btn-block btn-lg gradient-custom-4 text-body col-12">Reset Password
                                        </button>
                                    </div>

                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>

{{-- @endsection --}}