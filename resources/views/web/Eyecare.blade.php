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
                            src="https://eyecare.mv/wp-content/uploads/2020/08/Dr.Shetty.jpg" alt="news">
                        <div class="card-body"><span class="fs--1 text-primary me-3">Eye Care</span><svg
                                class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                fill="currentColor" viewBox="0 0 16 16">
                                <h5 class="font-base fs-lg-0 fs-xl-1 my-3">Dr. Srinivas Shetty Katpady</h5><a
                                    class="stretched-link" href="#!">Dr. Shetty is specialized in Medical Retina. He
                                    completed his MS Ophthalmology from J.J.M Medical College, Kuvempu University,
                                    India, and MBBS from Bangalore University, India. Dr Shetty gained his D.O.M.S from
                                    J.J.M Medical college, India and has been in the medical field since 1990. He is
                                    skilled in diagnosing a wide range of eye conditions with a clinical expertise in
                                    medical retina and Small Incision Cataract Surgery.</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4">
                    <div class="card h-100 shadow card-span rounded-3"><img class="card-img-top rounded-top-3"
                            style="height:400px ;"
                            src="https://eyecare.mv/wp-content/uploads/2020/09/Untitled-design.png" alt="news">
                        <div class="card-body"><span class="fs--1 text-primary me-3">Eye Care</span><svg
                                class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                fill="currentColor" viewBox="0 0 16 16">
                                <h5 class="font-base fs-lg-0 fs-xl-1 my-3">Dr. Arjun Malla Bhari</h5><a
                                    class="stretched-link" href="#!">Dr. Arjun specializes in phacoemulsification and is
                                    well- known for pediatric eye diseases. He completed his MD Ophthalmology at
                                    National Academy of Medical Sciences (NAMS), Nepal, and MBBS from L’vov State
                                    Medical University, Ukraine. He earned his Fellowship in Pediatric Ophthalmology and
                                    Strabismus (FPOS) from Lumbini Eye Institute, Nepal. He has been in the medical
                                    field since 1999 and is highly experienced in Pediatric Ophthalmology, strabismus,
                                    SICS, Phaco surgery and neuro-ophthalmology.</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4">
                    <div class="card h-100 shadow card-span rounded-3"><img class="card-img-top rounded-top-3"
                            style="height:400px ;" src="https://eyecare.mv/wp-content/uploads/2023/07/Doc-Azzam-IG.jpg"
                            alt="news">
                        <div class="card-body"><span class="fs--1 text-primary me-3">Eye Care</span><svg
                                class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                fill="currentColor" viewBox="0 0 16 16">
                                <h5 class="font-base fs-lg-0 fs-xl-1 my-3">
                                    Dr. Mohamed Azzam</h5><a class="stretched-link" href="#!">Dr. Azzam is specialized
                                    in medical and surgical retina. He completed his MD Ophthalmology from N.A.M.S,
                                    Kathmandu, Nepal, and Fellowship in Vireo-retinal surgery (FVRS) from V.E.H, Dhaka,
                                    Bangladesh. Dr Azzam is skilled in broad range of Ophthalmic conditions and an
                                    expert in retinal diseases.</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4">
                    <div class="card h-100 shadow card-span rounded-3"><img class="card-img-top rounded-top-3"
                            style="height:400px ;" src="https://eyecare.mv/wp-content/uploads/2020/08/Dr.Vijayamani.jpg"
                            alt="news">
                        <div class="card-body"><span class="fs--1 text-primary me-3">Eye Care</span><svg
                                class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                fill="currentColor" viewBox="0 0 16 16">
                                <h5 class="font-base fs-lg-0 fs-xl-1 my-3">Dr. Vijayamani Janampalli</h5><a
                                    class="stretched-link" href="#!">Dr Vijaya completed MBBS and D.O.M.S from Dr. NTR
                                    University of Health Sciences, Andhra Pradesh and has been in the medical field
                                    since 2006. She is well known for being a cataract surgeon and for treating anterior
                                    segment.</a>
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
