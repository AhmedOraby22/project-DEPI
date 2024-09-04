@extends('dashboard.layouts.tables')

@section('content')

<head>
    <title>city</title>
    
</head>
<a type="sumbit" href="{{url('/show_city')}}" class="btn btn-info">show city</a>
<form method="post">
    @csrf
    <div class="gradient-custom-3 h-100">
        <div class="container h-100">
            @if (session('status'))
            <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
    <div class="row align-items-center">
          <h1>city</h1>

        <div class="form-outline mb-4 col-12">
            <label class="form-label" for="form3Example3cg">city name</label>
            <input type="text" id="form3Example3cg" name="name" class="form-control" required />
        </div>
    </div>

    <div class="row align-items-center">
        <div class="form-outline mb-4 col-12">
            <label class="form-label" for="form3Example4cg">status</label>
            <input type="text" id="form3Example4cg" name="status" class="form-control" required />
        </div>
    </div>
    <div class="form-group">
        <input class="form-control button" type="submit" name="" value="insert">
    </div>
        </div>
    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection