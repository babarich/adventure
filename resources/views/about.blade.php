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
                                            <div class="breadcrumb-item"><a href="{{route('home')}}">Home</a></div>
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
                                <h2>{{$aboutTitle->content ?? ''}}</h2>
                                <p>{{$aboutContent->content ?? ''}}</p>
                                <div class="globalBtnActive justify-content-md-start justify-content-center mt-3">
                                    <ul>
                                        <li>
                                            <a href="{{route('destination')}}"> Destinations
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
                            @if($customer)
                                <figure>
                                    <img src="data:image/jpeg;base64,{{ $customer->image }}" alt="about-sec">
                                </figure>
                            @endif
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
                            @if($what)
                                <figure><img src="data:image/jpeg;base64,{{ $what->image }}" alt="weDo"></figure>
                            @endif

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
                                        <a href="{{route('contact')}}"> Contact Us
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
        <section id="choose" style="background-image:none;">
            <div class="chooseBg">
                <div class="position-relative z-2" data-aos="fade" data-aos-duration="2000">
                    <h4>Why choose us</h4>
                    <h2>Let Us Show You The Beauty
                        Of The World</h2>
                    <div class="globalBtn mt-lg-5 mt-md-5">
                        <ul>
                            <li>
                                <a href="{{route('contact')}}">contact us
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
                                <h6>{{$choose1->content ?? ''}}</h6>
                                <p>{{$choosePara1->content ?? ''}}
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="500">
                            <div>
                                <figure><img src="assets/images/icon/choose-2.svg" alt="chooseIcon"></figure>
                                <h6>{{$choose2->content ?? ''}}</h6>
                                <p>{{$choosePara2->content ?? ''}}
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="900">
                            <div>
                                <figure><img src="assets/images/icon/choose-3.svg" alt="chooseIcon"></figure>
                                <h6>{{$choose3->content ?? ''}}</h6>
                                <p>{{$choosePara3->content ?? ''}}
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 d-lg-block d-none" data-aos="fade-up" data-aos-delay="1300">
                            <div>
                                <figure><img src="assets/images/icon/choose-4.svg" alt="chooseIcon"></figure>
                                <h6>{{$choose4->content ?? ''}}</h6>
                                <p>{{$choosePara4->content ?? ''}}
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
                    @if(count($teams) > 0)
                        @foreach($teams as $team)
                            <div class="col-md-4 col-sm-9 col-11" data-aos="fade-up" data-aos-delay="100">
                                <div class="teamCard">
                                    <figure><img src="data:image/jpeg;base64,{{ $team->image }}" alt="tour-img" style="max-height: 350px"></figure>
                                </div>
                                <div>
                                    <h6>{{$team->name}}</h6>
                                    <p>{{$team->title}}</p>
                                </div>
                            </div>
                        @endforeach
                    @endif

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
                            <a href="{{route('book')}}">Book Now
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

