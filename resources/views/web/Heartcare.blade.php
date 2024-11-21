<!DOCTYPE html>
<html lang="en-US" dir="ltr">

@include('web.layouts.head')

<head>
    <link rel="stylesheet" href="{{ asset('web_asset/css/main.css') }}">
</head>

<body>
    @include('web.layouts.nav')

    <section>
        <div class="bg-holder bg-size"
            style="background-image:url(assets/img/gallery/dot-bg.png);background-position:top left;background-size:auto;">
        </div>
        <!--/.bg-holder-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3 mb-4">
                    <div class="card h-100 shadow card-span rounded-3">
                        <img class="card-img-top rounded-top-3" style="height:400px ;"
                            src="https://cdn.askapollo.com/live/images/doctors/cardiology/dr-a-k-bardhan-cardiology-in-kolkata.png"
                            alt="news">
                        <div class="card-body"><span class="fs--1 text-primary me-3">Heart Care</span><svg
                                class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                fill="currentColor" viewBox="0 0 16 16">
                                <h5 class="font-base fs-lg-0 fs-xl-1 my-3">Dr Mohamed Ramadan</h5><a
                                    class="stretched-link" href="#!">Cardiology consultant - National Heart Institute
                                    Interventional cardiology consultant at ( Angelo American-Teachers-International
                                    Egypt-Cardiotech-Global care-Dream) hospitals Post-operative Cardiothoracic
                                    Intensive care unit manager at Teachers hospital</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4">
                    <div class="card h-100 shadow card-span rounded-3"><img class="card-img-top rounded-top-3"
                            style="height:400px ;"
                            src="https://www.bombayhospital.com/assets/images/doctors/Dr-Satyavan-Sharma-Cardiology.jpg"
                            alt="news">
                        <div class="card-body"><span class="fs--1 text-primary me-3">Heart Care</span><svg
                                class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                fill="currentColor" viewBox="0 0 16 16">
                                <h5 class="font-base fs-lg-0 fs-xl-1 my-3">
                                    Dr. Mosheir Morshed</h5><a class="stretched-link" href="#!">Consultant general
                                    internal medicine and cardiovascular</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4">
                    <div class="card h-100 shadow card-span rounded-3"><img class="card-img-top rounded-top-3"
                            style="height:400px ;"
                            src="https://prime-clinics.com/wp-content/uploads/2022/01/Dr.-Maghawry-Photo-scaled.jpg"
                            alt="news">
                        <div class="card-body"><span class="fs--1 text-primary me-3">Heart Care</span><svg
                                class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                fill="currentColor" viewBox="0 0 16 16">
                                <h5 class="font-base fs-lg-0 fs-xl-1 my-3">
                                    Dr. Alaa Medhat Radwan</h5><a class="stretched-link" href="#!">Consultant and head
                                    of cardiology department -
                                    National Heart Institute</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4">
                    <div class="card h-100 shadow card-span rounded-3"><img class="card-img-top rounded-top-3"
                            style="height:400px ;"
                            src="https://continentalhospitals.com/images/doctors/3e1624fcef6bce5d5b932faed9e52d49.jpeg"
                            alt="news">
                        <div class="card-body"><span class="fs--1 text-primary me-3">Heart Care</span><svg
                                class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                fill="currentColor" viewBox="0 0 16 16">
                                <h5 class="font-base fs-lg-0 fs-xl-1 my-3">Dr Syed Mustaq M Quadri</h5><a
                                    class="stretched-link" href="#!">Consultant - Cardiologist
                                    Experience: 8 years</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @yield('content')

    @include('web.layouts.script')
</body>
















</html>
