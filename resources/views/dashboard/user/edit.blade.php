@extends('dashboard.layouts.app')
@section('content')

    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" class="card" action="{{ route('dashboard.user.update', $data->id) }}">
                        @csrf
                        <div class="card-header">
                            <div class="card-title">Update User</div>
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
                            <a href="{{  route('dashboard.user.index') }}" class="btn btn-danger">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection