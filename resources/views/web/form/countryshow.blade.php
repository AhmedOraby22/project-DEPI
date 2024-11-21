@extends('dashboard.layouts.tables')
@section('title','Country')
@section('content')
@if (session('message'))
<h6 class="alert alert-success">{{ session('message') }}</h6>
@endif
<a type="sumbit" href="{{url('/add_country')}}" class="btn btn-info">add country</a>
<div class="justify-content-center align-items-center">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">country</th>
      <th scope="col">status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($countries as $country)
    <tr>
        <td scope="col">{{$country->id}}</td>
        <td scope="col">{{$country->name}}</td>
        <td scope="col">{{$country->status}}</td>
        <td scope="col">
          <a href="{{url('delete_country/'.$country->id)}}" class="btn btn-danger">delete</a>
          <a href="{{url('edit_country/'.$country->id)}}" class="btn btn-success">edit</a>
        </th>
      </tr>
@endforeach
  </tbody>
</div>
@endsection