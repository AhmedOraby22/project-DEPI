@extends('web.layouts.searchtemp')
@section('content')
<div class="container db-social mt-9">
    <div class="jumbotron jumbotron-fluid"></div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-11">
                <div class="widget head-profile has-shadow">
                    <div class="widget-body pb-0">
                        <div class="row d-flex align-items-center">
                            <div class="col-xl-4 col-md-4 d-flex justify-content-lg-start justify-content-md-start justify-content-center">
                                <ul>
                                    <li>
                                        <div class="counter">246</div>
                                        <div class="heading">Total</div>
                                    </li>
                                    <li>
                                        <div class="counter">30</div>
                                        <div class="heading">Online doctors</div>
                                    </li>
                                    <li>
                                        <div class="counter">216</div>
                                        <div class="heading">Offline doctors</div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-md-4 d-flex justify-content-center">
                                <div class="image-default">
                                    <img class="rounded-circle" src="{{asset('web_asset/image/heart_organ@2x.png')}}" alt="...">
                                </div>
                                <div class="infos">
                                    <h2>Cardiology</h2>
                                    <div class="location">multidimensional subspecialty that deals with disorders of the heart and blood vessels</div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-4 d-flex justify-content-lg-end justify-content-md-end justify-content-center">
                                <div class="follow">
                                    
                                    <div class="actions dark">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

