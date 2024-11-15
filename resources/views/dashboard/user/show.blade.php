@extends('dashboard.layouts.app')
@section('content')

    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                        <div class="card-header">
                            <div class="card-title">Show User</div>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input
                                                type="text"
                                                class="form-control"
                                                id="name"
                                                name="name"
                                                readonly
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
                                                readonly
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
                                                disabled
                                        >
                                            <option value="1" @if($data->status == 1) selected @endif>active</option>
                                            <option value="0"  @if($data->status == 0) selected @endif>unactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <a href="{{  route('dashboard.user.index') }}" class="btn btn-danger">Cancel</a>
                            <a href="{{  route('dashboard.user.edit', $data->id) }}" class="btn btn-primary">Update</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection