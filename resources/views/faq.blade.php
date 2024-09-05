@extends('layouts.app')
  @section('hero')
  <!-- ====== 7.1 hero section ====== -->
            <section class="hero">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-11 col-md-12 text-center" data-aos="fade">
                            <div>
                                <h2>Frequently Asked Question </h2>
                                <div class="d-flex justify-content-center gap-4 pt-4">
                                    <nav aria-label="breadcrumb">
                                        <div class="breadcrumb d-flex gap-4 align-items-center">
                                            <div class="breadcrumb-item"><a href="{{route('home')}}">Home</a></div>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <div class="breadcrumb-item" aria-current="page">FAQ</div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ====== End 7.1 hero section ====== -->
  @endsection

  @section('content')
   <!-- ====== 1.11 faq section ====== -->
        <section id="faq" class="faq">
            <div class="container">
                <div class="faq-section">
                    <div data-aos="fade" data-aos-duration="2000">
                        <h4>FAQ</h4>
                        <h2>Have Answers, Will Travel.</h2>
                    </div>
                    <div class="accordion" id="accordionExample" data-aos="fade" data-aos-duration="2000">
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
        <!-- ====== End 1.11 faq team section ====== -->

  @endsection

