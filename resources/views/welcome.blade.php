  @extends('layouts.app')
  @section('hero')
  <section id="hero">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-md-12 text-center" data-aos="fade">
                <div>
                    <h1>{{ucfirst(strtoupper($title->content ?? ''))}} </h1>
                    <h1>{{ucfirst(strtoupper($subTitle->content ?? ''))}}</h1>
                    <p>{{$paraTit->content ?? ''}}
                    </p>
                    <div class="globalBtn mt-4">
                        <ul>
                            <li>
                                <a href="{{route('about')}}"> Discover Now
                                    <span></span><span></span><span></span><span></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
  @endsection

  @section('content')

<!-- ====== 1.3 features section ====== -->
  <section id="features">
  <div class="container card-text">
                <div class="row">
                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                        <div>
                            <figure><img src="assets/images/icon/feature-1.svg" alt="featureIcon"></figure>
                            <h6>Map Location </h6>
                            <p>
                                {{$secondCardFirst->content ?? ''}}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="500">
                        <div>
                            <figure><img src="assets/images/icon/feature-2.svg" alt="featureIcon"></figure>
                            <h6>Traveling Bag </h6>
                            <p>
                              {{$secondCardSecond->content ?? ''}}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="900">
                        <div>
                            <figure><img src="assets/images/icon/feature-3.svg" alt="featureIcon"></figure>
                            <h6>photography</h6>
                            <p>
                                {{$secondCardThird->content ?? ''}}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="1300">
                        <div>
                            <figure><img src="assets/images/icon/feature-4.svg" alt="featureIcon"></figure>
                            <h6>Affordable Prices</h6>
                            <p>
                                {{$secondCardFourth->content ?? ''}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== End 1.3 features section ====== -->

        <!-- ====== 1.4 about section ====== -->
        <section id="about">
            <div class="blueBg">
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-9">

                        <div class="col-lg-10 col-md-9" data-aos="fade-up">
                            <div>
                                <h4>About Us</h4>
                                <h2>{{$aboutTitle->content ?? ''}}</h2>
                                <p>{{$aboutContent->content ?? ''}}</p>

                                <div class="globalBtnActive justify-content-md-start justify-content-center mt-4">
                                    <ul>
                                        <li>
                                            <a href="{{route('about')}}"> Learn More
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
                        <div class="aboutImg position-relative" data-aos="fade-up">
                            <figure>
                                @if($customer)
                                <img src="data:image/jpeg;base64,{{ $customer->image }}" alt="about-sec">
                                @endif
                            </figure>
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
        <!-- ====== End 1.4 about section ====== -->

        <!-- ====== 1.5 special offer section ====== -->
        <section id="special">
            <div class="container">
                <div class="row justify-content-center">
                    <div class=" col-md-6" data-aos="fade-down">
                        <h3> {{$specialOne->content ?? ''}}</h3>
                        <p>
                            {{$specialPara1->content ?? ''}}
                        </p>
                        <div class="offer">
                            @if($offer)
                            <img src="data:image/jpeg;base64,{{$offer->image}}"  alt="discount">
                            @endif
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
                    <div class="col-md-6 mt-md-0 mt-4" data-aos="fade-up">
                        <div class="offer">
                            @if($special)
                            <img src="data:image/jpeg;base64,{{ $special->image }}" alt="discount">
                            @endif

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
                        <h3>{{$specialTwo->content ?? ''}}</h3>
                        <p>
                            {{$specialPara2->content ?? ''}}
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== End 1.5 special offer section ====== -->

        <!-- ====== 1.6 tours section ====== -->
        <section id="tour" style="background-image:none;">
            <div class="container">
                <div data-aos="fade" data-aos-duration="2000">
                    <h4>Tour</h4>
                    <h2>{{$tourTitle->content ?? ''}}</h2>
                    <div class="d-flex flex-md-row flex-column gap-3 justify-content-between align-items-center mt-3">
                        <div class="tourPara">
                            <p>{{$tourContent->content ?? ''}}</p>
                        </div>
                        <div class="globalBtnActive">
                            <ul>
                                <li>
                                    <a href="{{route('destination')}}"> View all
                                        <span></span><span></span><span></span><span></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tourCards card-text mt-5">
                    <div class="row gap-4 justify-content-center card-text">
                        @if(count($travels) > 0)
                        @foreach($travels->slice(0, 3) as $travel)
                        <div class="col-md-4 col-sm-5 col-11" data-aos="fade-up" data-aos-delay="100">
                            <div>
                                <figure><img src="data:image/jpeg;base64,{{ $travel->image }}" alt="travel"></figure>
                                <h6>{{$travel->title}}</h6>
                                <p>{{isset($travel->content) ? substr($travel->content,0,100)  . '...' : ''}}</p>
                                <a href="#">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        @endforeach

                        @endif

                    </div>
                </div>
            </div>
        </section>
        <!-- ====== End 1.6 tours section ====== -->

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

        <!-- ====== 1.8 services section ====== -->
        <section id="services" style="background: none">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div data-aos="fade" data-aos-duration="2000">
                            <h4>Our Services</h4>
                            <h2>{{$serviceTitle->content ?? ''}}</h2>
                            <p>{{$serviceContent->content ?? ''}}
                            </p>
                            <div class="row align-items-center gap-lg-3 gap-md-4 text-lg-start text-center">
                                <div class="col-md-3">
                                    <div>
                                        <figure>
                                            <img src="assets/images/icon/services-1.svg" alt="servicesIcon">
                                        </figure>
                                        <h6>Custom Destinations</h6>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div>
                                        <figure>
                                            <img src="assets/images/icon/services-3.svg" alt="servicesIcon">
                                        </figure>
                                        <h6>Unforgettable Moments</h6>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div>
                                        <figure>
                                            <img src="assets/images/icon/services-2.svg" alt="servicesIcon">
                                        </figure>
                                        <h6>Competitive Pricings</h6>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="globalBtnActive d-flex justify-content-md-start justify-content-center mt-lg-3 mt-md-3 mt-4">
                                <ul>
                                    <li>
                                        <a href="{{route('service')}}">See all services
                                            <span></span><span></span><span></span><span></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 mt-md-0 mt-5" data-aos="fade-up" data-aos-easing="ease-in-out-quad">
                        <div>
                            @if($serviceLarge)
                            <figure><img src="data:image/jpeg;base64,{{ $serviceLarge->image }}"  alt="service-img"></figure>
                            @endif

                            @if($serviceSmall)
                            <figure><img src="data:image/jpeg;base64,{{ $serviceSmall->image }}"  alt="ser-Camera"
                                style="height: 200px;"></figure>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== End 1.8 services section ====== -->

        <!-- ====== 1.9 what we do section ====== -->
        <section id="weDo">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex justify-content-center">
                        <div class="weDo-video">
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
                                <p>{{$exploreContent->content ?? ''}}</p>
                            </div>
                            <div class="globalBtnActive mt-3" data-aos="fade" data-aos-duration="2000">
                                <ul>
                                    <li>
                                        <a href="{{route('service')}}"> Learn More
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

        <!-- ====== 1.10 our team section ====== -->
        <section id="team">
            <div class="container">
                <div data-aos="fade" data-aos-duration="2000">
                    <h4>Our Team</h4>
                    <h2>Experience The World With Us</h2>
                </div>
                <div class="row justify-content-md-between justify-content-center gap-md-0 gap-4">
                    @if(count($teams) > 0)
                        @foreach($teams->slice(0,3) as $team)
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

        <!-- ====== 1.11 faq section ====== -->
        <section id="faq">
            <div class="container">
                <div class="faq-section">
                    <div data-aos="fade">
                        <h4>FAQ</h4>
                        <h2>Have Answers, Will Travel.</h2>
                    </div>
                    <div class="accordion" id="accordionExample" data-aos="fade">
                        @foreach($faqs as $key => $faq)
                            <div class="accordion-item">
                                <h6 class="accordion-header" id="heading{{$key}}">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse{{$key}}" aria-expanded="true" aria-controls="collapse{{$key}}">
                                        {{$faq->title}}
                                    </button>
                                </h6>
                                <div id="collapse{{$key}}" class="accordion-collapse collapse @if($key === 0) show @endif" aria-labelledby="heading{{$key}}"
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            {{$faq->response}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </section>
        <!-- ====== End 1.11 faq section ====== -->

        <!-- ====== 1.12 testimonials section ====== -->
        <section id="testimonials">
            <div class="container">
                <div class="row card-text justify-content-md-between justify-content-center gap-md-0 gap-3">
                    <div data-aos="fade" data-aos-duration="2000">
                        <h4>Testimonials</h4>
                        <h2>We're All About Your Satisfaction</h2>
                    </div>
                    @if(count($testimonials) > 0)
                        @foreach($testimonials->slice(0,3) as $testimonial)
                            <div class="col-md-4 col-sm-9 col-11" data-aos="fade-up" data-aos-delay="100">
                                <div class="d-flex flex-column align-items-center justify-content-center">
                                    <figure></figure>
                                    <h6>{{$testimonial->name}}</h6>
                                    <p>{{$testimonial->title}}</p>
                                    <div class="d-flex gap-2 mt-3 mb-4 pb-2">
                                        @include('rate_comp')
                                    </div>
                                    <p>
                                        {{$testimonial->content}}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    @endif

                </div>
            </div>
        </section>
        <!-- ====== End 1.12 testimonials section ====== -->

        <!-- ====== 1.13 logoipsum section ====== -->
        <div id="logoipsum">
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

        <!-- ====== 1.15 blog section ====== -->
        <section id="blog">
            <div class="container">
                <div data-aos="fade" data-aos-duration="2000">
                    <h4>Our Blogs</h4>
                    <h2>Timeless Adventures Await with Timeless Stories.</h2>
                </div>
                <div class="blogCards mt-lg-5 mt-md-4">
                    <div class="row gap-4 justify-content-center card-text">
                        @if(count($blogs) > 0)
                            @foreach($blogs->slice(0, 3) as $blog)
                                <div class="col-md-4 col-sm-9 col-11" data-aos="fade-up" data-aos-delay="100">
                                    <div>
                                        <figure><img src="data:image/jpeg;base64,{{ $blog->image }}" alt="tour-img" style="max-height: 350px"></figure>
                                        <a href="#">
                                            <p class="blogCategory">{{$blog->tag}}</p>
                                        </a>
                                        <a href="#">
                                            <h6>{{$blog->title}}</h6>
                                        </a>
                                        <p>{{isset($blog->content) ? substr($blog->content,0,30) . '...' : ''}} </p>
                                        <a href="#">Read More <i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== End 1.15 blog section ====== -->

        <!-- ====== 1.16 newsletter section ====== -->
        <section id="newsletter">
            <div class="container">
                <div data-aos="fade" data-aos-duration="2000">
                    <h4>Newsletter</h4>
                    <h2>Stay In The Know, Without Having To Do Anything</h2>
                </div>
                <div class="row justify-content-between" data-aos="fade" data-aos-duration="2000">
                    <div class="col-md-5">
                        <div>
                            <p>
                                {{$newsContent->content ?? ''}}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="d-md-flex justify-content-lg-end justify-content-md-end justify-content-center">
                            <form id="newsletter-form">
                                <div id="newsletter-message"></div>
                                <input type="email" name="email" id="email" placeholder="Enter Your Email Address"
                                    required>
                                <div class="globalBtnActive">
                                    <ul>
                                        <li>
                                            <button type="submit">Subscribe
                                                <span></span><span></span><span></span><span></span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== End 1.16 newsletter section ====== -->
  @endsection

