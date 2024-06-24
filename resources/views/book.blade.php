  @extends('layouts.app')

  @section('content')
   <!-- ====== 9.2 contact section ====== -->
        <section id="contact">
            <div class="container">
                <div data-aos="fade" data-aos-duration="1500">
                    <h4>Book with  Us</h4>
                
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        tempor ipsum dolor sit amet.
                        labore</p>
                </div>
                <div class="row">
                    <div class="col-md-8 bg-white" data-aos="fade" data-aos-duration="1500">
                        <div>
                            <div class="d-flex justify-content-between align-items-center pb-4">
                                <h5>Make your booking with us</h5> <i class="fa-regular fa-envelope"></i>
                            </div>
                        </div>
                        <div id="contact-message"></div>
                  <form id="contact-form" method="post" action="{{route('store')}}">
                    @csrf
                    <div>
                                <input type="text" name="name" placeholder="Name" required>
                                <input type="email" name="email" placeholder="Email Address" required>
                            </div>
                            <div>
                                <input type="date" name="date" placeholder="Date and time" required>
                            </div>
                            <textarea name="description" placeholder="Message"></textarea>
                        
                                    <div class="col-12">
                                      <div class="globalBtnActive mt-sm-5 mt-4 p-0">
                                        <ul>
                                            <li>
                                                <button type="submit">Book Now
                                                    <span></span><span></span><span></span><span></span>
                                                </button>
                                            </li>
                                        </ul>                          </div>
                                    </div>
                            
                                </div>
                                    </form>
                      
                    </div>
                    <div class="col-md-4 d-flex justify-content-center align-items-center" data-aos="fade"
                        data-aos-duration="1500">
                      
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== End 9.2 contact section ====== -->

  @endsection
  
  
