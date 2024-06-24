@extends('layouts.app')
  @section('hero')       
   <section class="hero">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-11 col-md-12 text-center" data-aos="fade">
                            <div>
                                <h2>Our Services</h2>
                                <div class="d-flex justify-content-center gap-4 pt-4">
                                    <nav aria-label="breadcrumb">
                                        <div class="breadcrumb d-flex gap-4 align-items-center">
                                            <div class="breadcrumb-item"><a href="index.html">Home</a></div>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <div class="breadcrumb-item" aria-current="page">Services</div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
  @endsection

  @section('content')
    <!-- ====== 1.8 services section ====== -->
        <section id="services" class="services">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div data-aos="fade" data-aos-duration="2000">
                            <h4>Our Services</h4>
                            <h2>Join The Adventure With Stories</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s,
                            </p>
                            <div
                                class="row align-items-center gap-lg-3 gap-md-4 text-lg-start text-center justify-content-md-start justify-content-center">
                                <div class="col-md-3 col-5">
                                    <div>
                                        <figure><img src="assets/images/icon/services-1.svg" alt="servicesIcon">
                                        </figure>
                                        <h6>Custom Destinations</h6>
                                    </div>
                                </div>
                                <div class="col-md-3 col-5">
                                    <div>
                                        <figure><img src="assets/images/icon/services-3.svg" alt="servicesIcon">
                                        </figure>
                                        <h6>Unforgettable Moments</h6>
                                    </div>
                                </div>
                                <div class="col-md-3 col-5">
                                    <div>
                                        <figure><img src="assets/images/icon/services-2.svg" alt="servicesIcon">
                                        </figure>
                                        <h6>Competitive Pricings</h6>
                                    </div>
                                </div>
                                <div class="col-md-3 col-5">
                                    <div>
                                        <figure><img src="assets/images/icon/services-4.svg" alt="servicesIcon">
                                        </figure>
                                        <h6>Self Guide</h6>
                                    </div>
                                </div>
                                <div class="col-md-3 col-5">
                                    <div>
                                        <figure><img src="assets/images/icon/services-5.svg" alt="servicesIcon">
                                        </figure>
                                        <h6>24/ 7 Available</h6>
                                    </div>
                                </div>
                                <div class="col-md-3 col-5">
                                    <div>
                                        <figure><img src="assets/images/icon/services-6.svg" alt="servicesIcon">
                                        </figure>
                                        <h6>Transportation</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-5 mt-md-0 mt-5" data-aos="fade-up" data-aos-easing="ease-in-out-quad">
                        <div>
                            <figure><img src="assets/images/index/services-img1.png" alt="service-img"></figure>
                            <figure><img src="assets/images/index/services-img2.png" alt="ser-Camera"></figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== End 1.8 services section ====== -->

        <!-- ====== 1.7 why choose us section ====== -->
        <section id="choose" class="choose">
            <div class="chooseBg">
                <div class="position-relative z-2" data-aos="fade" data-aos-duration="2000">
                    <h4>Why choose us</h4>
                    <h2>Let Us Show You The Beauty
                        Of The World</h2>
                    <div class="globalBtn mt-lg-5 mt-md-5">
                        <ul>
                            <li>
                                <a href="contact.html">contact us
                                    <span></span><span></span><span></span><span></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="chooseCrads position-relative z-2">
                <div class="container">
                    <div class="row gap-md-0 gap-4 justify-content-center card-text">
                        <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
                            <div>
                                <figure><img src="assets/images/icon/choose-1.svg" alt="chooseIcon"></figure>
                                <h6>Tour and Travel</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor
                                    incididunt
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="500">
                            <div>
                                <figure><img src="assets/images/icon/choose-2.svg" alt="chooseIcon"></figure>
                                <h6>campus</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor
                                    incididunt
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="900">
                            <div>
                                <figure><img src="assets/images/icon/choose-3.svg" alt="chooseIcon"></figure>
                                <h6>Adventure Tour</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor
                                    incididunt
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 d-lg-block d-none" data-aos="fade-up" data-aos-delay="1300">
                            <div>
                                <figure><img src="assets/images/icon/choose-4.svg" alt="chooseIcon"></figure>
                                <h6>photography</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor
                                    incididunt
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== End 1.7 why choose us section ====== -->

        <!-- ====== 1.5 special offer section ====== -->
        <section id="special" class="special">
            <div class="container">
                <div class="row justify-content-center">
                    <div class=" col-md-6" data-aos="fade-up">
                        <h3>Special Offer for Couples</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                        </p>
                        <div class="offer">
                            <img src="assets/images/index/special-img2.png" alt="discount">
                            <div class="overlaytwo">
                                <div class="overlay_text">
                                    <h3>Discount up 50%</h3>
                                    <div class="globalBtn mt-lg-5 mt-4">
                                        <ul>
                                            <li>
                                                <a href="{{route('book')}}">Book Now
                                                    <span></span><span></span><span></span><span></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-md-0 mt-4" data-aos="fade-down">
                        <div class="offer">
                            <img src="assets/images/index/special-img1.png" alt="discount">
                            <div class="overlaytwo">
                                <div class="overlay_text">
                                    <h3>Discount up 50%</h3>
                                    <div class="globalBtn mt-lg-5 mt-4">
                                        <ul>
                                            <li>
                                                <a href="{{route('book')}}">Book Now
                                                    <span></span><span></span><span></span><span></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3>Special Offer
                            on Adventure tours</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== End 1.5 special offer section ====== -->

  @endsection
  
  