<header>
                    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0 sticky-top">
                        <div class="container-fluid">
                            <!-- logo -->
                            <a class="navbar-brand position-relative p-1" href="{{route('home')}}"><img
                                    src="assets/images/logo.svg" alt="logo">
                            </a>
                            <button class="navbar-toggler" id="sidebarEvent" type="button">
                                <i class="fa-solid fa-bars"></i>
                            </button>
                            <div class="collapse navbar-collapse">
                                <!-- menu -->
                                <ul
                                    class="navbar-nav position-relative ms-auto mx-5 mb-2 mb-lg-0 d-flex gap-4 justify-content-center align-items-center">
                                    <li class="nav-item">
                                        <a  class="{{request()->is('/')   ? 'nav-link active' : 'nav-link'}}" aria-current="page" href="{{route('home')}}">Home</a>
                                    </li>
                                    <li class="nav-item position-relative">
                                        <a class="{{request()->is('about') ? 'nav-link active' : 'nav-link'}}" href="{{route('about')}}">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="{{request()->is('blog') ? 'nav-link active' : 'nav-link'}}" href="{{route('blog')}}">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="{{request()->is('contact') ? 'nav-link active' : 'nav-link'}}" href="{{route('contact')}}">Contact</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                            Pages
                                        </a>
                                        <ul class="dropdown-menu fade-up">
                                            <li><a class="dropdown-item" href="{{route('service')}}"> Services</a></li>
                                            <li><a class="dropdown-item" href="{{route('destination')}}"> Destinations </a>
                                            </li>
                                            <li><a class="dropdown-item" href="{{route('testimonial')}}"> Testimonials </a>
                                            <li><a class="dropdown-item" href="{{route('faq')}}"> FAQ </a>
                                            <li><a class="dropdown-item" href="{{route('team')}}"> Team </a></li>
                                            <li><a class="dropdown-item" href="{{route('coming')}}"> Coming Soon </a></li>
                                            <li><a class="dropdown-item" href="{{route('found')}}"> 404 </a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <!-- header button start-->
                                <div class="globalBtn">
                                    <ul>
                                        <li>
                                            <a href="{{route('contact')}}">Book Now
                                                <span></span><span></span><span></span><span></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- header button end -->
                            </div>
                        </div>
                    </nav>
                    <hr>
                    <!-- sidebar -->
                    <aside>
                        <div class="sidebar">
                            <div class="d-flex justify-content-between align-items-center">
                                <!-- sidebar logo -->
                                <a href="{{route('home')}}"><img src="assets/images/sidebarLogo.png" alt="logo"></a>
                                <button type="button" id="closeBtn" class="btn-close"></button>
                            </div>
                            <!-- side menu -->
                            <ul class="nav-links text-lg-start">
                                <li><a href="{{route('home')}}" class="active"> Home</a></li>
                                <li><a href="{{route('about')}}">About</a></li>
                                <li><a href="{{route('blog')}}">Blog </a></li>
                                <li><a href="{{route('contact')}}">Contact </a></li>
                            </ul>
                            <div class="more">
                                <a href="#">Pages</a>
                                <a class="btn btn-outline-primary" data-bs-toggle="collapse" href="#collapseExample"
                                    role="button" aria-expanded="false" aria-controls="collapseExample">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </div>
                            <div class="collapse mt-3" id="collapseExample">
                                <div class="card card-body">
                                    <a href="{{route('service')}}">Services</a>
                                    <a href="{{route('destination')}}">Destinations</a>
                                    <a href="{{route('testimonial')}}">Testimonials</a>
                                    <a href="{{route('faq')}}">FAQ</a>
                                    <a href="{{route('team')}}">Team</a>
                                    <a href="{{route('found')}}">404</a>
                                    <a href="{{route('coming')}}">Coming Soon</a>
                                </div>
                            </div>
                        </div>
                    </aside>
                </header>