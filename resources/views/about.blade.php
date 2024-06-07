@extends('layouts.app')
  @section('hero')       
  <section class="hero">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-11 col-md-12 text-center" data-aos="fade">
                            <div>
                                <h2>About Us </h2>
                                <div class="d-flex justify-content-center gap-4 pt-4">
                                    <nav aria-label="breadcrumb">
                                        <div class="breadcrumb d-flex gap-4 align-items-center">
                                            <div class="breadcrumb-item"><a href="index.html">Home</a></div>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <div class="breadcrumb-item" aria-current="page">About</div>
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
  <section id="about">
            <div class="container mt-lg-5 mt-md-5 mt-0 pt-lg-5 pt-md-4 pt-0">
                <div class="row">
                    <div class="col-lg-8 col-md-9">

                        <div class="col-lg-10 col-md-9" data-aos="fade" data-aos-duration="2000">
                            <div>
                                <h4>About Us</h4>
                                <h2>With Us, You Are Always In For A Pleasant Surprise</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <div class="globalBtnActive justify-content-md-start justify-content-center mt-3">
                                    <ul>
                                        <li>
                                            <a href="destinations.html"> Destinations
                                                <span></span><span></span><span></span><span></span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-9 col-12 about-Image">
                        <div class="aboutImg position-relative mt-md-0 mt-5" data-aos="fade-up">
                            <figure><img src="assets/images/about/about-img.png" alt="about-sec"></figure>
                            <div class="customer d-flex flex-column justify-content-between align-items-center">
                                <div class="d-flex">
                                    <h2 class="count">25 </h2>
                                    <h2>K+</h2>
                                </div>
                                <p>Happy Customers</p>
                            </div>
                            <div class="experience d-flex flex-column justify-content-between align-items-center"
                                data-aos="fade-up">
                                <div class="d-flex">
                                    <h2 class="count">15</h2>
                                    <h2>+</h2>
                                </div>
                                <p>Years of experience</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

  <section id="weDo" class="weDo">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex justify-content-center">
                        <div class="weDo-video">
                            <div>
                                <a class="video-play-button" href="#">
                                    <span class="fa-solid fa-play"></span>
                                </a>
                            </div>
                            <figure><img src="assets/images/about/wedo-img.png" alt="weDo"></figure>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center align-content-center">
                        <div class="weDo-content d-flex flex-column justify-content-center align-items-start">
                            <div data-aos="fade" data-aos-duration="2000">
                                <h4>What We Do</h4>
                                <h2>Exploring The World Without Limits</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            </div>
                            <div class="globalBtnActive mt-3" data-aos="fade" data-aos-duration="2000">
                                <ul>
                                    <li>
                                        <a href="contact.html"> Contact Us
                                            <span></span><span></span><span></span><span></span>
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== End 1.9 what we do section ====== -->

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

        <!-- ====== 1.10 our team section ====== -->
        <section id="team" class="mt-0 pt-0">
            <div class="container">
                <div data-aos="fade" data-aos-duration="2000">
                    <h4>Our Team</h4>
                    <h2>Experience The World With Us</h2>
                </div>
                <div class="row justify-content-md-between justify-content-center gap-md-0 gap-4">
                    <div class=" col-md-4 col-sm-8 col-10" data-aos="fade-up" data-aos-delay="100">
                        <div class="teamCard">
                            <img src="assets/images/about/team-img1.png" alt="teamimg">
                            <div class="overlaythree">
                                <div class="overlay_text">
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h6>James Bowel</h6>
                            <p>Tour Guide</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-8 col-10" data-aos="fade-up" data-aos-delay="500">
                        <div class="teamCard">
                            <img src="assets/images/about/team-img2.png" alt="teamimg">
                            <div class="overlaythree">
                                <div class="overlay_text">
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h6>Lucy Amanda</h6>
                            <p>Tour Guide</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-8 col-10" data-aos="fade-up" data-aos-delay="900">
                        <div class="teamCard">
                            <img src="assets/images/about/team-img3.png" alt="teamimg">
                            <div class="overlaythree">
                                <div class="overlay_text">
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h6>Victoria Bells</h6>
                            <p>Tour Guide</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== End 1.10 our team section ====== -->

        <!-- ====== 1.14 start planning section ====== -->
        <section id="planning">
            <div class="planningContent" data-aos="fade" data-aos-duration="2000">
                <h3>Start Planning Your Trip Now and <span>Get 30% Discount</span></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam</p>
                <div class="globalBtn mt-lg-4 mt-3">
                    <ul>
                        <li>
                            <a href="contact.html">Book Now
                                <span></span><span></span><span></span><span></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- ====== End 1.14 start planning section ====== -->

        <!-- ====== 1.13 logoipsum section ====== -->
        <div id="logoipsum" class="mt-0">
            <div class="container">
                <div>
                    <div class="logoipsum-slider d-flex justify-content-between align-items-center">
                        <figure><img src="assets/images/index/logoipsum-1.svg" alt="logoipsumImg"></figure>
                        <figure><img src="assets/images/index/logoipsum-3.svg" alt="logoipsumImg"></figure>
                        <figure><img src="assets/images/index/logoipsum-4.svg" alt="logoipsumImg"></figure>
                        <figure><img src="assets/images/index/logoipsum-5.svg" alt="logoipsumImg"></figure>
                        <figure><img src="assets/images/index/logoipsum-4.svg" alt="logoipsumImg"></figure>
                        <figure><img src="assets/images/index/logoipsum-3.svg" alt="logoipsumImg"></figure>
                    </div>
                </div>
            </div>
        </div>
        <!-- ====== End 1.13 logoipsum section ====== -->
  @endsection
  
  