<!DOCTYPE html>
<html lang="en-US" dir="ltr">

@include('web.layouts.head')

<head>
    <link rel="stylesheet" href="{{ asset('web_asset/css/main.css') }}">
</head>

<body>
    @include('web.layouts.nav')
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-6 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px"
                        src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">Upload Image</label>
                        <input class="form-control form-control-sm" id="formFileSm" type="file">
                    </div>
                    <span class="font-weight-bold">{{ $user->name }}</span>
                    <span class="text-black-50">{{ $user->email }}</span>
                </div>
            </div>
            <div class="col-md-6 border-right">
                <form method="POST" action="{{ route('profile.update', ['id' => $user->id]) }}">
                    @csrf
                    @method('PATCH')
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile Settings</h4>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="labels">Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Phone Number</label>
                                <input type="text" class="form-control" name="phone" value="{{ $user->phone }}">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Email ID</label>
                                <input type="text" class="form-control" name="email" value="{{ $user->email }}">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Gender</label>
                                <select class="form-control" name="gender">
                                    <option value="1" {{ $user->gender == 1 ? 'selected' : '' }}>Male</option>
                                    <option value="0" {{ $user->gender == 0 ? 'selected' : '' }}>Female</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Date of Birth</label>
                                <input type="date" class="form-control" name="birthdate" value="{{ $user->birthdate }}">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <button class="btn btn-primary profile-button" type="submit">Save Profile</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    @yield('content')

    @include('web.layouts.script')
</body>

</html>
