@extends('layouts.app')

@section('content')

<section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');
           background-size: cover;
           background-position: center;
           background-repeat: no-repeat;">
    <div class="gradient-custom-3 h-100">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5">Sign In</h2>
                            <form>
                                <div class="row align-items-center">
                                    <div class="form-outline mb-4 col-12">
                                        <label class="form-label" for="form3Example3cg">Your Email</label>
                                        <input type="email" id="form3Example3cg" class="form-control" required />
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="form-outline mb-4 col-12">
                                        <label class="form-label" for="form3Example4cg">Password</label>
                                        <input type="password" id="form3Example4cg" class="form-control" required />
                                    </div>
                                </div>

                                <div class="form-check d-flex justify-content-center mb-5">
                                    <label class="form-check-label" for="form2Example3g">
                                        <a href="#!" class="text-body">Forgot your Password ?</a>
                                    </label>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="button"
                                        class="btn btn-success btn-block btn-lg gradient-custom-4 text-body col-12">LogIn</button>
                                </div>

                                <p class="text-center text-muted mt-5 mb-0">Don't have an account?<a href="#!"
                                        class="fw-bold text-body"> <u>Register here</u></a></p>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection