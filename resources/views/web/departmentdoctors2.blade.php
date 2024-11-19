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
                            src="data:image/jpeg;base64,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"
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
                            src="https://www.bcmch.org/asset/uploads/doctors/6295676086552f4697be72.webp" alt="news">
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
                            src="https://www.geetanjalihospital.co.in/img/media/cache/faculty/360x360/1011/dr.-renu-khamesra%20(1).jpg"
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
