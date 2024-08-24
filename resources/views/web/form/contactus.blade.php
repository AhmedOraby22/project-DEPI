@extends('web.layouts.app')

@section('content')

<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="py-5">

    <div class="container">
        <div class="row">
            <div class="col-12 py-3">
                <h1 class="text-center">Contact Us</h1>
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
            <!--/.bg-holder-->
            <div class="col-lg-6 z-index-2 mb-5"><img class="w-100" src="image/contactimg.png" alt="..." /></div>
            <div class="col-lg-6 z-index-2">
                <form class="row g-3">
                    <div class="col-md-6">
                        <label class="visually-hidden" for="inputName">Name</label>
                        <input class="form-control form-livedoc-control" id="inputName" type="text"
                            placeholder="Name" />
                    </div>
                    <div class="col-md-6">
                        <label class="visually-hidden" for="inputPhone">Phone</label>
                        <input class="form-control form-livedoc-control" id="inputPhone" type="text"
                            placeholder="Phone" />
                    </div>

                    <div class="col-md-12">
                        <label class="form-label visually-hidden" for="inputEmail">Email</label>
                        <input class="form-control form-livedoc-control" id="inputEmail" type="email"
                            placeholder="Email" />
                    </div>
                    <div class="col-md-12">
                        <label class="form-label visually-hidden" for="validationTextarea">Message</label>
                        <textarea class="form-control form-livedoc-control" id="validationTextarea"
                            placeholder="Message" style="height: 250px;" required="required"></textarea>
                    </div>
                    <div class="col-12">
                        <div class="d-grid">
                            <button class="btn btn-primary rounded-pill" type="submit">Sign in</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- ============================================-->
@endsection
