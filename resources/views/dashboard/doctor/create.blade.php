@extends('dashboard.layouts.app')
@section('content')

    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" class="card" action="{{ route('dashboard.doctor.store') }}">
                        @csrf
                        <div class="card-header">
                            <div class="card-title">Create Doctor</div>
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
                                                value="{{ old('name') }}"
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
                                                value="{{ old('email') }}"
                                        />
                                        <small id="emailHelp2" class="form-text text-muted"
                                        >We'll never share your email with anyone
                                            else.</small
                                        >
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input
                                                type="password"
                                                class="form-control"
                                                id="password"
                                                name="password"
                                                placeholder="Enter Password"
                                                value="{{ old('password') }}"
                                        />
                                        <small id="passwordHelp" class="form-text text-muted"
                                        >We'll never share your Password with anyone
                                            else.</small
                                        >
                                    </div>
                                    <div class="form-group">
                                        <label for="email2">Password Confirmation</label>
                                        <input
                                                type="password"
                                                class="form-control"
                                                id="confirm"
                                                name="password_confirmation"
                                                placeholder="Enter Password Confirmation"
                                                value="{{ old('password_confirmation') }}"
                                        />
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