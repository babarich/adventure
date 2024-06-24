@extends('layouts.app')
@section('content')
     <!-- ======== 10.1. Coming Soon/404 section ======== -->
        <section class="page404 pg">
            <div class="row justify-content-center align-items-center m-0">
                <div class="col-lg-6 col-md-7" data-aos="fade">
                    <div>
                        <h3>404</h3>
                        <h4>Page Not Found</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Urna molestie at elementum eu facilisis.</p>
                        <div class="globalBtnActive mt-4 justify-content-start">
                            <ul>
                                <li>
                                    <a href="{{url('/')}}">Back To Home
                                        <span></span><span></span><span></span><span></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======== End 10.1. Coming Soon/404 section ======== -->

@endsection