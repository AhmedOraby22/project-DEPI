@extends('web.layouts.app')

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
                            <h2 class="text-uppercase text-center mb-5">Create an account</h2>
                            <form>
                                <div class="row align-items-center">
                                    <div class="form-outline mb-4 col-12 col-md-6">
                                        <label class="form-label" for="form3Example1cg">Your Name</label>
                                        <input type="text" id="form3Example1cg" class="form-control" required />
                                    </div>

                                    <div class="form-outline mb-4 col-12 col-md-6">
                                        <label class="form-label" for="form3Example3cg">Your Email</label>
                                        <input type="email" id="form3Example3cg" class="form-control" required />
                                    </div>
                                </div>

                                <div class="form-outline mb-4 col-12 col-md-6">
                                    <label class="form-label" for="form3Example3cg">Your Phone</label>
                                    <input type="phone" id="form3Example3cg" class="form-control" required />
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-12 col-md-6">
                                        <label class="form-label me-3" for="form3Example3cg">Gender</label>
                                        <div class="form-check form-check-inline mb-4">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1" required>
                                            <label class="form-check-label" for="inlineRadio1">Male</label>
                                        </div>

                                        <div class="form-check form-check-inline mb-4">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="option1" required>
                                            <label class="form-check-label" for="inlineRadio2">Female</label>
                                        </div>
                                    </div>

                                    <div class="form-outline mb-4 col-12 col-md-6">
                                        <label class="form-label" for="form3Example3cg">Date of Birth</label>
                                        <input type="date" id="form3Example3cg" class="form-control" required />
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="form-outline mb-4 col-12 col-md-6">
                                        <label class="form-label" for="form3Example4cg">Password</label>
                                        <input type="password" id="form3Example4cg" class="form-control" required />
                                    </div>
                                    <div class="form-outline mb-4 col-12 col-md-6">
                                        <label class="form-label" for="form3Example4cg">Repeat Password</label>
                                        <input type="password" id="inputPassword6" class="form-control"
                                            aria-describedby="passwordHelpInline">
                                    </div>
                                </div>

                                <div class="form-check d-flex justify-content-center mb-5">
                                    <input class="form-check-input me-2" type="checkbox" value=""
                                        id="form2Example3cg" />
                                    <label class="form-check-label" for="form2Example3g">
                                        I agree all statements in <a href="#!" class="text-body"><u>Terms of
                                                service</u></a>
                                    </label>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="button"
                                        class="btn btn-success btn-block btn-lg gradient-custom-4 text-body col-12">Sign
                                        Up</button>
                                </div>

                                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="#!"
                                        class="fw-bold text-body"><u>Login here</u></a></p>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection