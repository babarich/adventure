
@extends('layouts.app')
  @section('hero')
            <section class="hero">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-11 col-md-12 text-center" data-aos="fade">
                            <div>
                                <h2>Our Team </h2>
                                <div class="d-flex justify-content-center gap-4 pt-4">
                                    <nav aria-label="breadcrumb">
                                        <div class="breadcrumb d-flex gap-4 align-items-center">
                                            <div class="breadcrumb-item"><a href="{{route('home')}}">Home</a></div>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <div class="breadcrumb-item" aria-current="page">Team</div>
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
     <!-- ====== 1.10 our team section ====== -->
        <section id="team">
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

  @endsection

