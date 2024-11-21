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
                            src="https://bharathorthopaedics.b-cdn.net/wp-content/uploads/2023/10/img_v2_897e5974-62b4-4559-b2e0-57fa46372d4h-edited-1.webp"
                            alt=" news">
                        <div class="card-body"><span class="fs--1 text-primary me-3">Osteoporosis</span><svg
                                class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                fill="currentColor" viewBox="0 0 16 16">
                                <h5 class="font-base fs-lg-0 fs-xl-1 my-3">Dr. L. Bharath</h5><a class="stretched-link"
                                    href="#!">Dr. L. Bharath’s approach combines surgical precision with a compassionate
                                    understanding of bone health, making him a leader in the field of osteoporosis
                                    treatment in India. </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4">
                    <div class="card h-100 shadow card-span rounded-3">
                        <img class="card-img-top rounded-top-3" style="height:400px ;"
                            src="https://veronews.com/wp-content/uploads/2021/07/071521_Dr.SethCoren_KailaJones_005.jpg"
                            alt="news">
                        <div class="card-body"><span class="fs--1 text-primary me-3">Osteoporosis</span><svg
                                class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                fill="currentColor" viewBox="0 0 16 16">
                                <h5 class="font-base fs-lg-0 fs-xl-1 my-3">Dr. Deepak Chaudhary</h5><a
                                    class="stretched-link" href="#!">Dr. Deepak Chaudhary specializes in advanced
                                    osteoporosis treatments, including precise bone density assessments and personalized
                                    therapies.</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4">
                    <div class="card h-100 shadow card-span rounded-3">
                        <img class="card-img-top rounded-top-3" style="height:400px ;"
                            src="https://endocrinologistinahmedabad.com/wp-content/uploads/2019/01/osteoporosis.jpg"
                            alt="news">
                        <div class="card-body"><span class="fs--1 text-primary me-3">Osteoporosis</span><svg
                                class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                fill="currentColor" viewBox="0 0 16 16">
                                <h5 class="font-base fs-lg-0 fs-xl-1 my-3">Dr. Anurag Awasthi</h5><a
                                    class="stretched-link" href="#!">Dr. Anurag Awasthi is renowned for his
                                    comprehensive approach to osteoporosis and metabolic bone disorders. His
                                    evidence-based treatments at Apollo Hospitals have set new standards for bone health
                                    care in South India.</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4">
                    <div class="card h-100 shadow card-span rounded-3"><img class="card-img-top rounded-top-3"
                            style="height:400px ;"
                            src="https://easy-peasy.ai/cdn-cgi/image/quality=80,format=auto,width=700/https://fdczvxmwwjwpwbeeqcth.supabase.co/storage/v1/object/public/images/c217c372-4be1-468f-853f-f969ad3fb60f/4dc87520-ccd4-48e3-8a1d-48595f32b60a.png"
                            alt="news">
                        <div class="card-body"><span class="fs--1 text-primary me-3">Osteoporosis</span><svg
                                class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                fill="currentColor" viewBox="0 0 16 16">
                                <h5 class="font-base fs-lg-0 fs-xl-1 my-3">Dr. Rajesh Malhotra</h5><a
                                    class="stretched-link" href="#!">Dr. Rajesh Malhotra is a distinguished orthopedic
                                    surgeon known for his pioneering work in minimally invasive techniques for
                                    osteoporosis treatment. His research at AIIMS has significantly advanced bone health
                                    management in India, focusing on effective fracture repair and rehabilitation
                                    strategies.</a>
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