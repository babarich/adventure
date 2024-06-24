@extends('layouts.app')
  @section('hero')       
  <section class="hero">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-11 col-md-12 text-center" data-aos="fade">
                            <div>
                                <h2>Our Blogs </h2>
                                <div class="d-flex justify-content-center gap-4 pt-4">
                                    <nav aria-label="breadcrumb">
                                        <div class="breadcrumb d-flex gap-4 align-items-center">
                                            <div class="breadcrumb-item"><a href="index.html">Home</a></div>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <div class="breadcrumb-item" aria-current="page">Blog</div>
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
                                <figure><img src="assets/images/blog/blog-1.png" alt="tour-img"></figure>
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
                                <figure><img src="assets/images/blog/blog-2.png" alt="tour-img"></figure>
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
                                <figure><img src="assets/images/blog/blog-3.png" alt="tour-img"></figure>
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
                        <div class="col-md-4 col-sm-9 col-11" data-aos="fade-up" data-aos-delay="100">
                            <div>
                                <figure><img src="assets/images/blog/blog-4.png" alt="tour-img"></figure>
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
                        <div class="col-md-4 col-sm-9 col-11" data-aos="fade-up" data-aos-delay="500">
                            <div>
                                <figure><img src="assets/images/blog/blog-5.png" alt="tour-img"></figure>
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
                        <div class="col-md-4 col-sm-9 col-11" data-aos="fade-up" data-aos-delay="900">
                            <div>
                                <figure><img src="assets/images/blog/blog-6.png" alt="tour-img"></figure>
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
  @endsection
  
  