@extends('dashboard.layouts.app')
@section('content')

    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" class="card" action="{{ route('dashboard.doctor.update', $data->id) }}">
                        @csrf
                        <div class="card-header">
                            <div class="card-title">Update Doctor</div>
                        </div>

                        <div class="card-body">
                            @include('dashboard.layouts.error')
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input
                                                type="text"
                                                class="form-control"
                                                id="name"
                                                name="name"
                                                placeholder="Enter Name"
                                                value="{{ $data->name }}"
                                        />
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input
                                                type="email"
                                                class="form-control"
                                                id="email"
                                                name="email"
                                                placeholder="Enter Email"
                                                value="{{ $data->email }}"
                                        />
                                        <small id="emailHelp2" class="form-text text-muted"
                                        >We'll never share your email with anyone
                                            else.</small
                                        >
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input
                                                type="text"
                                                class="form-control"
                                                id="phone"
                                                name="phone"
                                                placeholder="Enter Phone"
                                                value="{{ $data->phone }}"
                                        />
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFileSm" class="form-label">Upload Image</label>
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" name="avatar">
                                    </div>
                                    <div class="form-group">
                                        <label for="country"
                                        >Country</label
                                        >
                                        <select
                                                class="form-select"
                                                id="country_id"
                                                name="country_id"
                                        >
                                            <option value="" >choose country</option>
                                            @foreach($countries as $country)
                                                <option value="{{$country->id}}" @if($country->id == $data->country_id) selected @endif>
                                                    {{$country->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="city"
                                        >Country</label
                                        >
                                        <select
                                                class="form-select"
                                                id="city_id"
                                                name="city_id"
                                        >
                                            <option value="" >choose city</option>
                                            @foreach($cities as $city)
                                                <option value="{{$city->id}}" @if($city->id == $data->city_id) selected @endif>
                                                    {{$city->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="department"
                                        >Department</label
                                        >
                                        <select
                                                class="form-select"
                                                id="department_id"
                                                name="department_id"
                                        >
                                            <option value="" >choose department</option>
                                            @foreach($departments as $department)
                                                <option value="{{$department->id}}" @if($department->id == $data->department_id) selected @endif>
                                                    {{$department->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1"
                                        >Status</label
                                        >
                                        <select
                                                class="form-select"
                                                id="status"
                                                name="status"
                                        >
                                            <option value="1" @if($data->status == 1) selected @endif>active</option>
                                            <option value="0"  @if($data->status == 0) selected @endif>unactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <a href="{{  route('dashboard.doctor.index') }}" class="btn btn-danger">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection