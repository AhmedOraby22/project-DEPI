@extends('web.layouts.head')
{{-- @section('content') --}}

{{--Session Messages --}}
<head>
    <title>Forgot Password</title>
   

<link rel="stylesheet" href="{{ asset('web_asset/css/main.css') }}">
    
      
</head>
<body>
    <section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');
           background-size: cover;
           background-position: center;
           background-repeat: no-repeat;">
    <div class="gradient-custom-3 h-100">
        @if (session('status'))
        <h6 class="alert alert-success">{{ session('status') }}</h6>
        @endif
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div class="card" style="border-radius: 15px;">
                    <div class="card-body p-5">
                <form action="{{route('password.request')}}" method="POST" autocomplete="">
                    @csrf
                    <h2 class="text-center">Forgot Password</h2>
                    <p class="text-center">Enter your email address</p>
                    <div class="form-group mb-3">
                        <input class="form-control" type="email" name="email" placeholder="Enter email address" required value="">
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="check-email" value="Continue">
                    </div>
                </form>
            </div>
          </div>
        </div>
        </div>
    </div>
</div>
    </section>
</body>
</html>
{{-- @endsection --}}