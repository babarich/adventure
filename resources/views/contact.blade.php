@extends('layouts.app')
  @section('hero')
 <section class="hero">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-11 col-md-12 text-center" data-aos="fade">
                            <div>
                                <h2>Contact Us </h2>
                                <div class="d-flex justify-content-center gap-4 pt-4">
                                    <nav aria-label="breadcrumb">
                                        <div class="breadcrumb d-flex gap-4 align-items-center">
                                            <div class="breadcrumb-item"><a href="{{route('home')}}">Home</a></div>
                                            <i class="fa-solid fa-angles-right"></i>
                                            <div class="breadcrumb-item" aria-current="page">Contact</div>
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
   <!-- ====== 9.2 contact section ====== -->
        <section id="contact">
            <div class="container">
                <div data-aos="fade" data-aos-duration="1500">
                    <h4>Contact Us</h4>
                    <h2>Get In Touch</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        tempor ipsum dolor sit amet.
                        labore</p>
                </div>
                <div class="row">
                    <div class="col-md-8 bg-white" data-aos="fade" data-aos-duration="1500">
                        <div>
                            <div class="d-flex justify-content-between align-items-center pb-4">
                                <h5>Send US A Message</h5> <i class="fa-regular fa-envelope"></i>
                            </div>
                        </div>
                        <div id="contact-message"></div>
                        <form id="contact-form">
                            <div>
                                <input type="text" name="name" placeholder="Name" required>
                                <input type="email" name="email" placeholder="Email Address" required>
                            </div>
                            <div>
                                <input type="number" name="phone" placeholder="Phone Number" required>
                                <input type="text" name="address" placeholder="Address" required>
                            </div>
                            <textarea name="message" placeholder="Message"></textarea>
                            <div class="globalBtnActive mt-sm-5 mt-4 p-0">
                                <ul>
                                    <li>
                                        <button type="submit">Submit
                                            <span></span><span></span><span></span><span></span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center align-items-center" data-aos="fade"
                        data-aos-duration="1500">
                        <div>
                            <h3>Contact Info</h3>
                            <div class="address">
                                <div>
                                    <i class="fa-solid fa-house"></i>
                                    <a href="#">
                                        <p>Plaza X , XY Floor, Street, XYZ</p>
                                    </a>
                                </div>
                                <div>
                                    <i class="fa-solid fa-envelope"></i>
                                    <a href="#">
                                        <p>Yourname@Email.Com</p>
                                    </a>
                                </div>
                                <div>
                                    <i class="fa-solid fa-phone"></i>
                                    <a href="#">
                                        <p>+123-456-7890</p>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center gap-4 mt-3">
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== End 9.2 contact section ====== -->

  @endsection

