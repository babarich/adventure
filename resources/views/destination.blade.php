@extends('layouts.app')
  @section('hero')
 <!-- ====== 5.1 hero section ====== -->
            <section class="hero">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-11 col-md-12 text-center" data-aos="fade">
                            <div>
                                <h2>Destinations </h2>
                                <div class="d-flex justify-content-center gap-4 pt-4">
                                    <nav aria-label="breadcrumb">
                                        <div class="breadcrumb d-flex gap-4 align-items-center">
                                            <div class="breadcrumb-item"><a href="{{route('home')}}">Home</a></div>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <div class="breadcrumb-item" aria-current="page">Destinations</div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ====== End 5.1 hero section ====== -->
  @endsection

  @section('content')
   <!-- ====== 1.14 about section ====== -->
        <section id="about" class="about">
            <div class="blueBg">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10" data-aos="fade-up">
                        <form id="about-form"
                            class="d-flex gap-lg-2 gap-md-1 gap-sm-4 gap-3 justify-content-evenly align-items-md-center">
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
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== End 1.14 about section ====== -->

        <!-- ====== 1.6 tours section ====== -->
        <section id="tour" style="background: none">
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
                                    <a href="{{route('service')}}"> Our Services
                                        <span></span><span></span><span></span><span></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tourCards card-text mt-5">
                    <div class="row gap-4 ">
                        @if(count($travels) > 0)
                            @foreach($travels as $travel)
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


  @endsection

