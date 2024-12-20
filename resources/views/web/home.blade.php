@extends('web.layouts.app')

@section('content')

<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="py-5" id="departments">

    <div class="container">
        <div class="row">
            <div class="col-12 py-3">
                <div class="bg-holder bg-size"
                    style="background-image:url(assets/img/gallery/bg-departments.png);background-position:top center;background-size:contain;">
                </div>
                <!--/.bg-holder-->

                <h1 class="text-center">OUR DEPARTMENTS</h1>
            </div>
        </div>
    </div>
    <!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->




<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="py-0">

    <div class="container">
        <div class="row py-5 align-items-center justify-content-center justify-content-lg-evenly">
            @foreach($departments as $department)
            <div class="col-auto col-md-4 col-lg-auto text-xl-start">
                <div class="d-flex flex-column align-items-center">
                    <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img
                                class="mb-3 deparment-icon"
                                src="{{ $department->avatar ? asset('avatars/' . $department->avatar) : asset('path/to/default/image.jpg') }}"
                                alt="..." /><img class="mb-3 deparment-icon-hover"
                                src="{{ $department->avatar ? asset('avatars/' . $department->avatar) : asset('path/to/default/image.jpg') }}"
                                alt="..." />
                            <p class="fs-1 fs-xxl-2 text-center">{{$department->name}}</p>
                        </a></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->


<section class="bg-secondary">
    <div class="bg-holder"
        style="background-image:url(assets/img/gallery/bg-eye-care.png);background-position:center;background-size:contain;">
    </div>
    <!--/.bg-holder-->

    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 col-xxl-6"><img class="img-fluid"
                    src="{{asset('web_asset/public/assets/img/gallery/eye-care.png')}}" alt="..." />
            </div>
            <div class="col-md-7 col-xxl-6 text-center text-md-start">
                <h2 class="fw-bold text-light mb-4 mt-4 mt-lg-0">Eye Care with Top Professionals<br
                        class="d-none d-sm-block" />and In Budget.</h2>
                <p class="text-light">We've built a healthcare system that puts your needs first.<br
                        class="d-none d-sm-block" />For us, there is nothing more important than the health of <br
                        class="d-none d-sm-block" />you and your loved ones. </p>
                <div class="py-3"><a class="btn btn-lg btn-light rounded-pill" href="#!" role="button">Learn more </a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================================-->
<!-- <section> begin ============================-->
<!-- <section class="pb-0" id="about">

    <div class="container">
        <div class="row">
            <div class="col-12 py-3">
                <div class="bg-holder bg-size"
                    style="background-image:url(assets/img/gallery/about-us.png);background-position:top center;background-size:contain;">
                </div>


                <h1 class="text-center">ABOUT US</h1>
            </div>
        </div>
    </div>


</section> -->


<section class="py-5">
    <div class="bg-holder bg-size"
        style="background-image:url(assets/img/gallery/about-bg.png);background-position:top center;background-size:contain;">
    </div>


    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 order-lg-1 mb-5 mb-lg-0"><img class="fit-cover rounded-circle w-100"
                    src="{{asset('web_asset/public/assets/img/gallery/health-care.png')}}" alt="..." /></div>
            <div class="col-md-6 text-center text-md-start">
                <h2 class="fw-bold mb-4">We are developing a healthcare <br class="d-none d-sm-block" />system around
                    you</h2>
                <p>We think that everyone should have easy access to excellent <br
                        class="d-none d-sm-block" />healthcare. Our aim is to make the procedure as simple as <br
                        class="d-none d-sm-block" />possible for our patients and to offer treatment no matter<br
                        class="d-none d-sm-block" />where they are — in person or at their convenience. </p>
                <div class="py-3">
                    <button class="btn btn-lg btn-outline-primary rounded-pill" type="submit">Learn more </button>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="pb-0">

    <div class="container">
        <div class="row">
            <div class="col-12 py-3">
                <div class="bg-holder bg-size"
                    style="background-image:url(assets/img/gallery/doctors-us.png);background-position:top center;background-size:contain;">
                </div>
                <!--/.bg-holder-->

                <h1 class="text-center">OUR DOCTORS</h1>
            </div>
        </div>
    </div>
    <!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->


<section class="py-5">
    <div class="bg-holder bg-size"
        style="background-image:url(assets/img/gallery/doctors-bg.png);background-position:top center;background-size:contain;">
    </div>
    <!--/.bg-holder-->

    <div class="container">
        <div class="row flex-center">
            <div class="col-xl-10 px-0">
                <div class="carousel slide" id="carouselExampleDark" data-bs-ride="carousel"><a
                        class="carousel-control-prev carousel-icon z-index-2" href="#carouselExampleDark" role="button"
                        data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span
                            class="visually-hidden">Previous</span></a><a
                        class="carousel-control-next carousel-icon z-index-2" href="#carouselExampleDark" role="button"
                        data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span
                            class="visually-hidden">Next</span></a>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <div class="row h-100 m-lg-7 mx-3 mt-6 mx-md-4 my-md-7">
                                @foreach($doctors as $doctor)
                                <div class="col-md-4 mb-8 mb-md-0">
                                    <div class="card card-span h-100 shadow">
                                        <div class="card-body d-flex flex-column flex-center py-5"><img
                                                src="{{ $doctor->avatar ? asset('avatars/' . $doctor->avatar) : asset('path/to/default/image.jpg') }}"
                                                width="128" alt="..." />
                                            <h5 class="mt-3">{{$doctor->name}}</h5>
                                            <p class="mb-0 fs-xxl-1">{{$doctor->department->name ?? ""}}</p>
                                            <p class="text-600 mb-0">
                                                {{$doctor->country->name .','.$doctor->city->name }}</p>
                                            <p class="text-600 mb-4">10 years experience</p>
                                            <div class="text-center">
                                                <a href="{{url('/profile')}}"><button
                                                        class="btn btn-outline-secondary rounded-pill"
                                                        type="submit">View Profile</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="py-5">

    <div class="container">
        <div class="row">
            <div class="col-12 py-3">
                <div class="bg-holder bg-size"
                    style="background-image:url(assets/img/gallery/people.png);background-position:top center;background-size:contain;">
                </div>
                <!--/.bg-holder-->

                <h1 class="text-center">PEOPLE WHO LOVE US</h1>
            </div>
        </div>
    </div>
    <!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->


<section class="py-8">
    <div class="bg-holder bg-size"
        style="background-image:url(assets/img/gallery/people-bg-1.png);background-position:center;background-size:cover;">
    </div>
    <!--/.bg-holder-->

    <div class="container">
        <div class="row align-items-center offset-sm-1">
            <div class="carousel slide" id="carouselPeople" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <div class="row h-100">
                            <div class="col-sm-3 text-center"><img
                                    src="{{asset('web_asset/public/assets/img/gallery/people-who-loves.png')}}"
                                    width="100" alt="" />
                                <h5 class="mt-3 fw-medium text-secondary">Edward Newgate</h5>
                                <p class="fw-normal mb-0">Founder Circle</p>
                            </div>
                            <div class="col-sm-9 text-center text-sm-start pt-3 pt-sm-0">
                                <h2>Fantastic Response!</h2>
                                <div class="my-2"><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i
                                        class="fas fa-star me-2"></i><i class="fas fa-star-half-alt me-2"></i><i
                                        class="far fa-star"></i></div>
                                <p>This medical and health care facility distinguishes itself from the competition by
                                    providing technologically advanced medical and health care. A mobile app and a
                                    website are available via which you can easily schedule appointments, get online
                                    consultations, and see physicians, who will assist you through the whole procedure.
                                    And all of the prescriptions, medications, and other services they offer are 100%
                                    genuine, medically verified, and proved. I believe that the Livedoc staff is doing
                                    an outstanding job. Highly recommended their health care services.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <div class="row h-100">
                            <div class="col-sm-3 text-center"><img
                                    src="{{asset('web_asset/public/assets/img/gallery/people-who-loves.png')}}"
                                    width="100" alt="" />
                                <h5 class="mt-3 fw-medium text-secondary">Jhon Doe</h5>
                                <p class="fw-normal mb-0">UI/UX Designer</p>
                            </div>
                            <div class="col-sm-9 text-center text-sm-start pt-3 pt-sm-0">
                                <h2>Fantastic Response!</h2>
                                <div class="my-2"><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i
                                        class="fas fa-star me-2"></i><i class="fas fa-star-half-alt me-2"></i><i
                                        class="far fa-star"></i></div>
                                <p>This medical and health care facility distinguishes itself from the competition by
                                    providing technologically advanced medical and health care. A mobile app and a
                                    website are available via which you can easily schedule appointments, get online
                                    consultations, and see physicians, who will assist you through the whole procedure.
                                    And all of the prescriptions, medications, and other services they offer are 100%
                                    genuine, medically verified, and proved. I believe that the Livedoc staff is doing
                                    an outstanding job. Highly recommended their health care services.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row h-100">
                            <div class="col-sm-3 text-center"><img
                                    src="{{asset('web_asset/public/assets/img/gallery/people-who-loves.png')}}"
                                    width="100" alt="" />
                                <h5 class="mt-3 fw-medium text-secondary">Jeny Doe</h5>
                                <p class="fw-normal mb-0">Web Designer</p>
                            </div>
                            <div class="col-sm-9 text-center text-sm-start pt-3 pt-sm-0">
                                <h2>Fantastic Response!</h2>
                                <div class="my-2"><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i
                                        class="fas fa-star me-2"></i><i class="fas fa-star-half-alt me-2"></i><i
                                        class="far fa-star"></i></div>
                                <p>This medical and health care facility distinguishes itself from the competition by
                                    providing technologically advanced medical and health care. A mobile app and a
                                    website are available via which you can easily schedule appointments, get online
                                    consultations, and see physicians, who will assist you through the whole procedure.
                                    And all of the prescriptions, medications, and other services they offer are 100%
                                    genuine, medically verified, and proved. I believe that the Livedoc staff is doing
                                    an outstanding job. Highly recommended their health care services.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="position-relative z-index-2 mt-5">
                        <ol class="carousel-indicators">
                            <li class="active" data-bs-target="#carouselPeople" data-bs-slide-to="0"></li>
                            <li data-bs-target="#carouselPeople" data-bs-slide-to="1"></li>
                            <li data-bs-target="#carouselPeople" data-bs-slide-to="2"> </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="py-5">

    <div class="container">
        <div class="row">
            <div class="col-12 py-3">
                <div class="bg-holder bg-size"
                    style="background-image:url(assets/img/gallery/people.png);background-position:top center;background-size:contain;">
                </div>
                <!--/.bg-holder-->

                <h1 class="text-center">APPOINTMENT</h1>
            </div>
        </div>
    </div>
    <!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->


<section class="py-8">
    <div class="container">
        <div class="row">
            <div class="bg-holder bg-size"
                style="background-image:url(assets/img/gallery/dot-bg.png);background-position:bottom right;background-size:auto;">
            </div>
            <!--/.bg-holder-->

            <div class="col-lg-6 z-index-2 mb-5">
                <img class="w-100" src="{{asset('web_asset/public/assets/img/gallery/appointment.png')}}" alt="..." />
            </div>
            <div class="col-lg-6 z-index-2">
                <form method="POST" action="{{ route('contact.send') }}" class="row g-3">
                    @csrf
                    <div class="col-md-6">
                        <label class="visually-hidden" for="inputName">Name</label>
                        <input class="form-control form-livedoc-control" id="inputName" type="text" name="name"
                            placeholder="Name" required />
                    </div>
                    <div class="col-md-6">
                        <label class="visually-hidden" for="inputPhone">Phone</label>
                        <input class="form-control form-livedoc-control" id="inputPhone" type="text" name="phone"
                            placeholder="Phone" required />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label visually-hidden" for="inputCategory">Category</label>
                        <select class="form-select" id="inputCategory" name="gender" required>
                            <option value="1" selected>Male</option>
                            <option value="0">Female</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label visually-hidden" for="inputEmail">Email</label>
                        <input class="form-control form-livedoc-control" id="inputEmail" type="email" name="email"
                            placeholder="Email" required />
                    </div>
                    <div class="col-md-12">
                        <label class="form-label visually-hidden" for="validationTextarea">Message</label>
                        <textarea class="form-control form-livedoc-control" id="validationTextarea" name="message"
                            placeholder="Message" style="height: 250px;" required></textarea>
                    </div>
                    <div class="col-12">
                        <div class="d-grid">
                            <button class="btn btn-primary rounded-pill" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>



<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="py-5">

    <div class="container">
        <div class="row">
            <div class="col-12 py-3">
                <div class="bg-holder bg-size"
                    style="background-image:url(assets/img/gallery/blog-post.png);background-position:top center;background-size:contain;">
                </div>
                <!--/.bg-holder-->

                <h1 class="text-center">RECENT BLOGPOSTS</h1>
            </div>
        </div>
    </div>
    <!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->


<section>
    <div class="bg-holder bg-size"
        style="background-image:url(assets/img/gallery/dot-bg.png);background-position:top left;background-size:auto;">
    </div>
    <!--/.bg-holder-->

    <div class="container">
        <div class="row">
            @foreach($blogs as $blog)
            <div class="col-sm-6 col-lg-3 mb-4">
                <div class="card h-100 shadow card-span rounded-3"><img class="card-img-top rounded-top-3"
                        src="{{ $blog->avatar ? asset('avatars/' . $blog->avatar) : asset('path/to/default/image.jpg') }}"
                        alt="news" />
                    <div class="card-body"><span class="fs--1 text-primary me-3">{{$blog->title}}</span>
                        <svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z">
                            </path>
                            <path
                                d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z">
                            </path>
                        </svg><span class="fs--1 text-900">{{$blog->created_at->format('d M, Y')}}</span><span
                            class="fs--1"></span>
                        <h5 class="font-base fs-lg-0 fs-xl-1 my-3">{{$blog->name}}</h5><a class="stretched-link"
                            href="{{route('blog',[$blog->id])}}">read full article</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section class="bg-primary">
    <div class="bg-holder bg-size"
        style="background-image:url(assets/img/gallery/cta-bg.png);background-position:center right;margin-top:-8.125rem;background-size:contain;">
    </div>
    <!--/.bg-holder-->

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="fw-bold text-light">Get an update every week</h2>
                <p class="text-soft-primary">Livedoc was created in order to improve the patient experience.
                    <br />Providing world-class tests, and a wide range of other services.
                </p>
            </div>
            <div class="col-lg-6">
                <h5 class="mb-3 text-soft-primary">SUBSCRIBE TO NEWSLETTER </h5>
                <form class="row gx-2 gy-2 align-items-center">
                    <div class="col">
                        <div class="input-group-icon">
                            <label class="visually-hidden" for="inputEmailCta">Address</label>
                            <input class="form-control form-livedoc-control form-cta-control text-soft-primary"
                                id="inputEmailCta" type="email" placeholder="Email" />
                        </div>
                    </div>
                    <div class="d-grid gap-3 col-sm-auto">
                        <button class="btn btn-lg btn-light rounded-3 px-5 py-3" type="submit">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

</main>
<!-- ===============================================-->
<!--    End of Main Content-->
<!-- ======
=========================================-->



@endsection
