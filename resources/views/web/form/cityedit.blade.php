@extends('dashboard.layouts.tables')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Edit & Update Student
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
</div>

@endsection
