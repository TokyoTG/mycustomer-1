@extends('layout.frontbase')
@section("custom_css")

@stop



@section('content')


<!-- Welcome-area-start -->
<div class="welcome-area theme-bg" id="home">
    <div class="welcome-bg-thumb "
        style="background-image: url({{ asset('/frontend/assets/img/bg-img/bg-patter.png') }});">
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="welcome-content">
                    <h3 class="wow fadeInUp" data-wow-delay="0.4s">
                        Keep track of your <span class="welcome-span">debtors</span>
                    </h3>
                    <p class="wow fadeInUp" data-wow-delay="0.6s">
                        MyCustomer is an on-demand, scalable ledger solution for small and medium sized businesses
                        globally.
                    </p>

                    <div class="top-button-container">
                        <a class="welcome-btn play-store-btn mr-2 mb-2" href="#"><img
                                src="{{ asset('/frontend/assets/img/bg-img/bt-1.png') }}" alt=""></a>

                        <a class="welcome-btn app-store-btn mr-2 mb-2" href="#"><img
                                src="{{ asset('/frontend/assets/img/bg-img/bt-2.png') }}" alt=""></a>
                    </div>

                    <!-- <div class="slider-btn mt-30">
                            <a class="welcome-btn play-store-btn mr-2 mb-2" href="#"><imgs
                                    src="assets/img/bg-img/bt-1.png" alt=""></a>
                            <a class="welcome-btn app-store-btn mr-2 mb-2" href="#"><img
                                    src="assets/img/bg-img/bt-2.png" alt=""></a>
                        </div> -->
                </div>
            </div>

            <!-- <div class="col-md-5">
                    <div class="welcome-thumb">
                        <img src="assets/img/bg-img/illustration-23.png" alt="">
                    </div>
                </div> -->
        </div>
    </div>
</div>
<!-- Welcome-area-end -->

<!-- What we offer area start -->

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="feature-heading-container">
                <h2 class="feature__heading">
                    Here’s everything myCustomer offers just for you!
                </h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="feature-container">
                <div class="feature__text">
                    <h3>Invoice reminders</h3>
                    <p>This solution helps <br> business owners send overdue invoice <br> reminders to customers</p>
                </div>
                <!-- <div class="feature__image">
                        <img src="assets/images/shade.png" alt=""
                            class="feature__img__screen feature__img__screen-blk img-fluid">
                    </div> -->
            </div>
        </div>
        <div class="col-lg-4">
            <div class="feature-container">
                <div class="feature__text">
                    <h3>Debt collection</h3>
                    <p>It makes it easier to keep track and manage debt collection easily through mobile devices</p>
                </div>
                <!-- <div class="feature__image">
                        <img src="assets/images/screen.png" alt="" class="feature__img__screen img-fluid">
                    </div> -->
            </div>
        </div>
        <div class="col-lg-4">
            <div class="feature-container">
                <div class="feature__text">
                    <h3>Sales messaging</h3>
                    <p>Provides a way for business owners to push unique sales messaging directly to their
                        customers.</p>
                </div>
                <!-- <div class="feature__image">
                        <img src="assets/images/screen two.png" alt="" class="feature__img__screen img-fluid">
                    </div> -->
            </div>
        </div>
    </div>
</div>

<!-- App Screen Shot Area -->
<div class="app-screen-shot-area section-padding-100" id="work">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="app-shot">
                    <div><img src="{{ asset('/frontend/assets/img/bg-img/21.png') }}" alt=""></div>
                    <div><img src="{{ asset('/frontend/assets/img/bg-img/22.png') }}" alt=""></div>
                    <div><img src="{{ asset('/frontend/assets/img/bg-img/23.png') }}" alt=""></div>
                    <div><img src="{{ asset('/frontend/assets/img/bg-img/18.png') }}" alt=""></div>
                    <div><img src="{{ asset('/frontend/assets/img/bg-img/19.png') }}" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- App Screen Shot Area -->

<!-- What we offer area end -->

<!-- Why We Are Area -->
<div class="why-we-are-area bg-primary-dark section-padding-100-50" id="about">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-7">
                <div class="client-feedback-area section-padding-100" id="client">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="client-silder owl-carousel">
                                    <!-- Single Slider -->
                                    <div class="row align-items-center">
                                        <div class="col-sm-8">
                                            <!-- Client Content -->
                                            <div class="client-desc client-mt-50">
                                                <p>I must explain to you how all this mistaken idea of will give you
                                                    a complete
                                                    denouncing pleasure and praising pain was born and I will give
                                                    you a complete
                                                    account of the system, and expound the actual teachings of the
                                                    great explorer of
                                                    the truth, the master-builder of human happiness.</p>

                                                <h4>Angel Diha - <span>England</span></h4>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Slider -->
                                    <div class="row align-items-center">
                                        <div class="col-sm-8">
                                            <!-- Client Content -->
                                            <div class="client-desc client-mt-50">
                                                <p>I must explain to you how all this mistaken idea of will give you
                                                    a complete
                                                    denouncing pleasure and praising pain was born and I will give
                                                    you a complete
                                                    account of the system, and expound the actual teachings of the
                                                    great explorer of
                                                    the truth, the master-builder of human happiness.</p>

                                                <h4>Zonas Diha - <span>America</span></h4>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Client Feedback Area -->
            </div>

            <div class="col-md-5">
                <div class="video-us-thumb text-center">
                    <div class="video-thumb">
                        <img src="{{ asset('/frontend/assets/img/bg-img/22.png') }}" alt="">
                    </div>
                    <!-- Video Icon -->
                    <div class="video-icon">
                        <a href="https://www.youtube.com/watch?v=gbXEPHsTkgU" class="video-btn pulse" id="videobtn"><i
                                class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Why We Are Area -->

<!-- Client Feedback Area -->
<div class="client-feedback-area section-padding-100" id="client">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-heading text-center">
                    <h4>Download the app <br> and get started</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 text-center">
                <a class="welcome-btn play-store-btn mr-2 mb-2" href="#"><img
                        src="{{ asset('/frontend/assets/img/bg-img/bt-1.png') }}" alt=""></a>

                <a class="welcome-btn app-store-btn mr-2 mb-2" href="#"><img
                        src="{{ asset('/frontend/assets/img/bg-img/bt-2.png') }}" alt=""></a>
            </div>
        </div>
    </div>
    <!-- Client Feedback Area -->
</div>










@endsection


@section("javascript")


@stop