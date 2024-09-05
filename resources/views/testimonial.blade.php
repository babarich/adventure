@extends('layouts.app')
  @section('hero')
            <section class="hero">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-11 col-md-12 text-center" data-aos="fade">
                            <div>
                                <h2>Testimonials </h2>
                                <div class="d-flex justify-content-center gap-4 pt-4">
                                    <nav aria-label="breadcrumb">
                                        <div class="breadcrumb d-flex gap-4 align-items-center">
                                            <div class="breadcrumb-item"><a href="{{route('home')}}">Home</a></div>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <div class="breadcrumb-item" aria-current="page">Testimonials</div>
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
    <!-- ====== 1.12 testimonials section ====== -->
        <section id="testimonials">
            <div class="container">
                <div class="row card-text justify-content-md-between justify-content-center gap-md-0 gap-3">
                    <div data-aos="fade" data-aos-duration="2000">
                        <h4>Testimonials</h4>
                        <h2>We're All About Your Satisfaction</h2>
                    </div>
                    @if(count($testimonials) > 0)
                        @foreach($testimonials as $testimonial)
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

  @endsection


