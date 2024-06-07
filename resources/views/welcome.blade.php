  @extends('layouts.app')
  @section('hero')
  <section id="hero">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-11 col-md-12 text-center" data-aos="fade">
                                <div>
                                    <h1>EXPLORE </h1>
                                    <h1>THE WORLD</h1>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    </p>
                                    <div class="globalBtn mt-4">
                                        <ul>
                                            <li>
                                                <a href="about.html"> Discover Now
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
                            <p>Lorem Ipsum is simply dummy text of the printing.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="500">
                        <div>
                            <figure><img src="assets/images/icon/feature-2.svg" alt="featureIcon"></figure>
                            <h6>Traveling Bag </h6>
                            <p>Lorem Ipsum is simply dummy text of the printing.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="900">
                        <div>
                            <figure><img src="assets/images/icon/feature-3.svg" alt="featureIcon"></figure>
                            <h6>photography</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="1300">
                        <div>
                            <figure><img src="assets/images/icon/feature-4.svg" alt="featureIcon"></figure>
                            <h6>Affordable Prices</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing.
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
                        <form id="about-form"
                            class="d-flex gap-lg-2 gap-md-1 gap-sm-4 gap-3 justify-content-evenly align-items-md-center"
                            data-aos="fade-down">
                            <div id="about-message"></div>
                            <div>
                                <h6>Name</h6>
                                <input type="text" name="name" placeholder="Your Name" required>
                            </div>
                            <div>
                                <h6>Destination</h6>
                                <select name="country" id="destination">
                                    <option value="destination" selected disabled>Destination</option>
                                    <option value="turkey">Turkey</option>
                                    <option value="sweden">Sweden</option>
                                    <option value="indonesia">Indonesia</option>
                                </select>
                            </div>
                            <div>
                                <h6>Tour Days</h6>
                                <input type="date" name="name" required>
                            </div>
                            <div class="globalBtn">
                                <ul>
                                    <li>
                                        <button type="submit">Book Now
                                            <span></span><span></span><span></span><span></span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </form>
                        <div class="col-lg-10 col-md-9" data-aos="fade-up">
                            <div>
                                <h4>About Us</h4>
                                <h2>With Us, You Are Always In For A Pleasant Surprise</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <div class="globalBtnActive justify-content-md-start justify-content-center mt-4">
                                    <ul>
                                        <li>
                                            <a href="about.html"> Learn More
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
                            <figure><img src="assets/images/index/about-img.png" alt="about-sec"></figure>
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
                                                <a href="contact.html">Book Now
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
                            <img src="assets/images/index/special-img1.png" alt="discount">
                            <div class="overlaytwo">
                                <div class="overlay_text">
                                    <h3>Discount up 50%</h3>
                                    <div class="globalBtn mt-lg-5 mt-4">
                                        <ul>
                                            <li>
                                                <a href="contact.html">Book Now
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

        <!-- ====== 1.6 tours section ====== -->
        <section id="tour">
            <div class="container">
                <div data-aos="fade" data-aos-duration="2000">
                    <h4>Tour</h4>
                    <h2>Live Your Life Through Travel</h2>
                    <div class="d-flex flex-md-row flex-column gap-3 justify-content-between align-items-center mt-3">
                        <div class="tourPara">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
                                labore et dolore magna aliqua.</p>
                        </div>
                        <div class="globalBtnActive">
                            <ul>
                                <li>
                                    <a href="destinations.html"> View all
                                        <span></span><span></span><span></span><span></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tourCards card-text mt-5">
                    <div class="row gap-4 ">
                        <div class="col-md-4 col-sm-5 col-11" data-aos="fade-up" data-aos-delay="100">
                            <div>
                                <figure><img src="assets/images/index/tour-img1.png" alt="tour-img"></figure>
                                <h6>Explore beauty of Turkey</h6>
                                <p>Lorem ipsum dolor sit amet, sit consecte adipiscing elit, sed </p>
                                <a href="#">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-5 col-11" data-aos="fade-up" data-aos-delay="500">
                            <div>
                                <figure><img src="assets/images/index/tour-img2.png" alt="tour-img"></figure>
                                <h6>Explore beauty of Sweden</h6>
                                <p>Lorem ipsum dolor sit amet, sit consecte adipiscing elit, sed </p>
                                <a href="#">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-5 col-11" data-aos="fade-up" data-aos-delay="900">
                            <div>
                                <figure><img src="assets/images/index/tour-img3.png" alt="tour-img"></figure>
                                <h6>Explore beauty of Indonesia</h6>
                                <p>Lorem ipsum dolor sit amet, sit consecte adipiscing elit, sed </p>
                                <a href="#">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-5 col-11" data-aos="fade-up" data-aos-delay="100">
                            <div>
                                <figure><img src="assets/images/index/tour-img4.png" alt="tour-img"></figure>
                                <h6>Explore beauty of Pakistan</h6>
                                <p>Lorem ipsum dolor sit amet, sit consecte adipiscing elit, sed </p>
                                <a href="#">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-5 col-11" data-aos="fade-up" data-aos-delay="500">
                            <div>
                                <figure><img src="assets/images/index/tour-img5.png" alt="tour-img"></figure>
                                <h6>Explore beauty of Dubai</h6>
                                <p>Lorem ipsum dolor sit amet, sit consecte adipiscing elit, sed </p>
                                <a href="#">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-5 col-11" data-aos="fade-up" data-aos-delay="900">
                            <div>
                                <figure><img src="assets/images/index/tour-img6.png" alt="tour-img"></figure>
                                <h6>Explore beauty of Paris</h6>
                                <p>Lorem ipsum dolor sit amet, sit consecte adipiscing elit, sed </p>
                                <a href="#">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== End 1.6 tours section ====== -->

        <!-- ====== 1.7 why choose us section ====== -->
        <section id="choose">
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

        <!-- ====== 1.8 services section ====== -->
        <section id="services">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div data-aos="fade" data-aos-duration="2000">
                            <h4>Our Services</h4>
                            <h2>Join The Adventure With Stories</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s,
                            </p>
                            <div class="row align-items-center gap-lg-3 gap-md-4 text-lg-start text-center">
                                <div class="col-md-3">
                                    <div>
                                        <figure><img src="assets/images/icon/services-1.svg" alt="servicesIcon">
                                        </figure>
                                        <h6>Custom Destinations</h6>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div>
                                        <figure><img src="assets/images/icon/services-3.svg" alt="servicesIcon">
                                        </figure>
                                        <h6>Unforgettable Moments</h6>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div>
                                        <figure><img src="assets/images/icon/services-2.svg" alt="servicesIcon">
                                        </figure>
                                        <h6>Competitive Pricings</h6>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="globalBtnActive d-flex justify-content-md-start justify-content-center mt-lg-3 mt-md-3 mt-4">
                                <ul>
                                    <li>
                                        <a href="services.html">See all services
                                            <span></span><span></span><span></span><span></span>
                                        </a>
                                    </li>
                                </ul>
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

        <!-- ====== 1.9 what we do section ====== -->
        <section id="weDo">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex justify-content-center">
                        <div class="weDo-video">
                            <div>
                                <a class="video-play-button" href="#">
                                    <span class="fa-solid fa-play"></span>
                                </a>
                            </div>
                            <figure><img src="assets/images/index/wedo-img.png" alt="weDo"></figure>
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
                                        <a href="services.html"> Learn More
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
                    <div class=" col-md-4 col-sm-8 col-10" data-aos="fade-up" data-aos-delay="100">
                        <div class="teamCard">
                            <img src="assets/images/index/team-img1.png" alt="teamimg">
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
                            <img src="assets/images/index/team-img2.png" alt="teamimg">
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
                            <img src="assets/images/index/team-img3.png" alt="teamimg">
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

        <!-- ====== 1.11 faq section ====== -->
        <section id="faq">
            <div class="container">
                <div class="faq-section">
                    <div data-aos="fade">
                        <h4>FAQ</h4>
                        <h2>Have Answers, Will Travel.</h2>
                    </div>
                    <div class="accordion" id="accordionExample" data-aos="fade">
                        <div class="accordion-item">
                            <h6 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    How many people will be on my trip?
                                </button>
                            </h6>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. In vitae turpis massa sed elementum
                                        tempus egestas sed. Diam in arcu cursus euismod. Dolor sed viverra ipsum nunc
                                        aliquet bibendum enim facilisis gravida</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h6 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Do you offer discount on family bookings?
                                </button>
                            </h6>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. In vitae turpis massa sed elementum
                                        tempus egestas sed. Diam in arcu cursus euismod. Dolor sed viverra ipsum nunc
                                        aliquet bibendum enim facilisis gravida</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h6 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    What are your Most Booked Destinations?
                                </button>
                            </h6>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. In vitae turpis massa sed elementum
                                        tempus egestas sed. Diam in arcu cursus euismod. Dolor sed viverra ipsum nunc
                                        aliquet bibendum enim facilisis gravida</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h6 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    What is your refund policy?
                                </button>
                            </h6>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. In vitae turpis massa sed elementum
                                        tempus egestas sed. Diam in arcu cursus euismod. Dolor sed viverra ipsum nunc
                                        aliquet bibendum enim facilisis gravida</p>
                                </div>
                            </div>
                        </div>
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
                    <div class="col-md-4 col-sm-8 col-11" data-aos="fade-up" data-aos-delay="100">
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <figure><img src="assets/images/index/testimonials-1.png" alt="testimonialsImg"></figure>
                            <h6>Raisa Barker</h6>
                            <p>Tourist</p>
                            <div class="d-flex gap-2 mt-3 mb-4 pb-2">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-8 col-11" data-aos="fade-up" data-aos-delay="500">
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <figure><img src="assets/images/index/testimonials-2.png" alt="testimonialsImg"></figure>
                            <h6>Terrence Baker</h6>
                            <p>Tourist</p>
                            <div class="d-flex gap-2 mt-3 mb-4 pb-2">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-8 col-11" data-aos="fade-up" data-aos-delay="900">
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <figure><img src="assets/images/index/testimonials-3.png" alt="testimonialsImg"></figure>
                            <h6>Xiong Lee</h6>
                            <p>Tourist</p>
                            <div class="d-flex gap-2 mt-3 mb-4 pb-2">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            </p>
                        </div>
                    </div>
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
                            <a href="contact.html">Book Now
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
                        <div class="col-md-4 col-sm-9 col-11" data-aos="fade-up" data-aos-delay="100">
                            <div>
                                <figure><img src="assets/images/index/blog-1.png" alt="tour-img"></figure>
                                <a href="#">
                                    <p class="blogCategory">Traveller</p>
                                </a>
                                <a href="#">
                                    <h6>Lorem ipsum dolor sit amet consectetur adipisicing.</h6>
                                </a>
                                <p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Dolore Magna Aliqua…. </p>
                                <a href="#">Read More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-9 col-11" data-aos="fade-up" data-aos-delay="500">
                            <div>
                                <figure><img src="assets/images/index/blog-2.png" alt="tour-img"></figure>
                                <a href="#">
                                    <p class="blogCategory">Vacation</p>
                                </a>
                                <a href="#">
                                    <h6>Lorem ipsum dolor sit amet consectetur adipisicing.</h6>
                                </a>
                                <p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Dolore Magna Aliqua….</p>
                                <a href="#">Read More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-9 col-11" data-aos="fade-up" data-aos-delay="900">
                            <div>
                                <figure><img src="assets/images/index/blog-3.png" alt="tour-img"></figure>
                                <a href="#">
                                    <p class="blogCategory">Boating</p>
                                </a>
                                <a href="#">
                                    <h6>Lorem ipsum dolor sit amet consectetur adipisicing.</h6>
                                </a>
                                <p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Dolore Magna Aliqua….</p>
                                <a href="#">Read More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore
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
  
  