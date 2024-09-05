<!-- Start::app-sidebar -->
<aside class="app-sidebar sticky" id="sidebar">

    <!-- Start::main-sidebar-header -->
    <div class="main-sidebar-header">
        <a href="{{route('dashboard')}}" class="header-logo">
            <p class="fw-bold  fs-6" style="color: #EC6608">Adventure Tour</p>
{{--            <img src="{{asset('assets/images/logo/logo.png')}}" alt="logo" class="desktop-logo">--}}
        </a>
    </div>
    <!-- End::main-sidebar-header -->

    <!-- Start::main-sidebar -->
    <div class="main-sidebar" id="sidebar-scroll">

        <!-- Start::nav -->
        <nav class="main-menu-container nav nav-pills flex-column sub-open">
            <div class="slide-left" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path> </svg>
            </div>
            <ul class="main-menu">
                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Main</span></li>
                <!-- End::slide__category -->

                <li class="slide">
                    <a href="{{route('dashboard')}}"  class="{{request()->is('dashboard') ? 'side-menu__item active' : 'side-menu__item'}}" >
                        <i class="bx bx-home side-menu__icon"></i>
                        <span class="side-menu__label">Dashboard</span>
                    </a>
                </li>

                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Media Management</span></li>

                <li class="slide">
                    <a href="{{route('manage.index')}}"  class="{{request()->is('*manage*') ? 'side-menu__item active' : 'side-menu__item'}}" >
                        <i class="bx bx-photo-album side-menu__icon"></i>
                        <span class="side-menu__label">Media</span>
                    </a>
                </li>




                  <li class="slide">
                    <a href="{{route('booking.index')}}"  class="{{request()->is('*booking*') ? 'side-menu__item active' : 'side-menu__item'}}" >
                        <i class="bx bx-book side-menu__icon"></i>
                        <span class="side-menu__label">Bookings</span>
                    </a>
                </li>


                <li class="slide">
                    <a href="{{route('content.index')}}"  class="{{request()->is('*content*') ? 'side-menu__item active' : 'side-menu__item'}}" >
                        <i class="bx bx-pen side-menu__icon"></i>
                        <span class="side-menu__label">Home Content</span>
                    </a>
                </li>


                <li class="slide">
                    <a href="{{route('faq.index')}}"  class="{{request()->is('*faq*') ? 'side-menu__item active' : 'side-menu__item'}}" >
                        <i class="bx bx-tab side-menu__icon"></i>
                        <span class="side-menu__label">Faq's</span>
                    </a>
                </li>


                <li class="slide">
                    <a href="{{route('blog.index')}}"  class="{{request()->is('*blog*') ? 'side-menu__item active' : 'side-menu__item'}}" >
                        <i class="bx bxl-blogger side-menu__icon"></i>
                        <span class="side-menu__label">Blog's</span>
                    </a>
                </li>

                <li class="slide">
                    <a href="{{route('travel.index')}}"  class="{{request()->is('*travel*') ? 'side-menu__item active' : 'side-menu__item'}}" >
                        <i class="bx bx-transfer side-menu__icon"></i>
                        <span class="side-menu__label">Our Tours</span>
                    </a>
                </li>


                <li class="slide">
                    <a href="{{route('team.index')}}"  class="{{request()->is('*team*') ? 'side-menu__item active' : 'side-menu__item'}}" >
                        <i class="bx bx-user side-menu__icon"></i>
                        <span class="side-menu__label">Our Team</span>
                    </a>
                </li>


                <li class="slide">
                    <a href="{{route('testimonial.index')}}"  class="{{request()->is('*testimonial*') ? 'side-menu__item active' : 'side-menu__item'}}" >
                        <i class="bx bx-star side-menu__icon"></i>
                        <span class="side-menu__label">Testimonials</span>
                    </a>
                </li>


            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path> </svg></div>
        </nav>
        <!-- End::nav -->

    </div>
    <!-- End::main-sidebar -->

</aside>
<!-- End::app-sidebar -->
