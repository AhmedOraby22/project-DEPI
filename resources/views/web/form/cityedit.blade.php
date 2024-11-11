@extends('dashboard.layouts.tables')

@section('content')
<a type="sumbit" href="{{url('/add_city')}}" class="btn btn-info">add city</a>
<div class="container">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Edit & Update patient city & status
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('update-city/'.$city->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Country Name</label>
                            <input type="text" name="name" value="{{$city->name}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Status</label>
                            <input type="text" name="status" value="{{$city->status}}" class="form-control">
                        </div>
                        
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                    </form>

                </div>
            </div>
       
    </div>
</div>

@endsection
