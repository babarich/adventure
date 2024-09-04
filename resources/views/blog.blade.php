@extends('layouts.app')
  @section('hero')
  <section class="hero" style="height: 300px !important;">
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
                        @if(count($blogs) > 0)
                            @foreach($blogs as $blog)
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
  @endsection

