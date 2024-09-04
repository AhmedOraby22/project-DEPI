@extends('dashboard.layouts.tables')

@section('content')
<a type="sumbit" href="{{url('/add_city')}}" class="btn btn-info">add city</a>
<div class=" justify-content-center align-items-center">
  @if (session('status'))
  <h6 class="alert alert-success">{{ session('status') }}</h6>
  @endif
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">city</th>
      <th scope="col">status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($cites as $city)
    <tr>
        <td scope="col">{{$city->id}}</td>
        <td scope="col">{{$city->name}}</td>
        <td scope="col">{{$city->status}}</td>
        <td scope="col">
<a href="{{url('delete_city/'.$city->id)}}" class="btn btn-danger">delete</a>
<a href="{{url('edit_city/'.$city->id)}}" class="btn btn-success">edit</a>
        </th>
      </tr>
@endforeach
  </tbody>
</div>
@endsection