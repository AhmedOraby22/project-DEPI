@extends('web.layouts.app')

@section('content')

<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-6 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                    width="150px"
                    src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                <div class="mb-3">
                    <label for="formFileSm" class="form-label">Upload Image</label>
                    <input class="form-control form-control-sm" id="formFileSm" type="file">
                </div>

                <span class="font-weight-bold">Edogaru</span><span
                    class="text-black-50">edogaru@mail.com.my</span><span>
                </span>
            </div>
        </div>
        <div class="col-md-6 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>

                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Name</label><input type="text" class="form-control"
                            placeholder="first name" value=""></div>
                    <div class="col-md-12"><label class="labels">Phone Number</label><input type="text"
                            class="form-control" placeholder="enter phone number" value=""></div>

                    <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control"
                            placeholder="enter email id" value=""></div>

                    <div class="col-md-12"><label class="labels">Gender</label><input type="text" class="form-control"
                            placeholder="gender" value=""></div>

                    <div class="col-md-12"><label class="labels">Date of birth</label><input type="date"
                            class="form-control" placeholder="Date of birth" value=""></div>

                    <div class="col-md-12"><label class="labels">Password</label><input type="Password"
                            class="form-control" placeholder="Password" value=""></div>


                </div>

                <div class="mt-5 text-center"><button class="btn gradient-custom-4 col-12" type="button">Save
                        Profile</button></div>
            </div>
        </div>

    </div>
</div>

@endsection
