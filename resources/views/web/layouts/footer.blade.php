<section class="py-0 bg-secondary">
    <div class="bg-holder opacity-25"
        style="background-image:url(assets/img/gallery/dot-bg.png);background-position:top left;margin-top:-3.125rem;background-size:auto;">
    </div>
    <!--/.bg-holder-->

    <div class="container">
        <div class="row py-8">
            <div class="col-12 col-sm-12 col-lg-6 mb-4 order-0 order-sm-0"><a class="text-decoration-none" href="#"><img
                        src="{{asset('web_asset/public/assets/img/gallery/footer-logo.png')}}" height="51" alt="" /></a>
                <p class="text-light my-4">The world's most trusted <br />telehealth company.</p>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 mb-3 order-2 order-sm-1">
                <h5 class="lh-lg fw-bold mb-4 text-light font-sans-serif">Departments</h5>
                <ul class="list-unstyled mb-md-4 mb-lg-0">
                    {{-- @foreach($departments as $department)
                    <li class="lh-lg"><a class="footer-link" href="#!">{{$department->name}}</a></li>
                    @endforeach --}}
                </ul>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 mb-3 order-3 order-sm-2">
                <h5 class="lh-lg fw-bold text-light mb-4 font-sans-serif"> Customer Care</h5>
                <ul class="list-unstyled mb-md-4 mb-lg-0">
                    <li class="lh-lg"><a class="footer-link" href="{{route('about')}}">About Us</a></li>
                    <li class="lh-lg"><a class="footer-link" href="#!">Contact US</a></li>
                    <li class="lh-lg"><a class="footer-link" href="#!">Get Update</a></li>
                </ul>
            </div>
        </div>
    </div>


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-0 bg-primary">

        <div class="container">
            <div class="row justify-content-md-between justify-content-evenly py-4">
                <div class="col-12 col-sm-8 col-md-6 col-lg-auto text-center text-md-start">
                    <p class="fs--1 my-2 fw-bold text-200">All rights Reserved &copy; Medical Solutions, {{ date('Y') }}</p>
                </div>
                <div class="col-12 col-sm-8 col-md-6">
                </div>
            </div>
        </div>
        <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->


</section>