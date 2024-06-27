<!DOCTYPE html>
<html lang="{{str_replace('_','-',app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Adventurist</title>
    <link rel="shortcut icon" href="assets/images/fav-icon.webp" type="image/x-icon">

   @vite(['resources/js/app.js'])
   @include('components.header')

</head>
 <style type="text/css">
            .account-block{

    min-height: 100vh;
    background-color: #EC6608;
    background-position: center;
    background-size: cover;
    background-blend-mode: multiply;
    overflow: hidden;
            }
        </style>

@php
$images = App\Models\Media::query()->where('category', 'Hero Home')->orderBy('updated_at', 'desc')->get();
@endphp
<body>
    <!-- site-wrapper -->
    <div class="site-wrapper">
        <!-- header slider start -->
      <div class="header-slider account-block">
        @foreach ($images as $index => $image)
        <div class="slide @if($index === 0) active @endif">
                <img src="data:image/jpeg;base64,{{ $image->image }}" alt="slider-img">
            </div>
        @endforeach
    </div>
        <!-- header slider end -->
        <div class="overlay">
            <div class="header-content">
                <!-- ====== 1.1 Header section ====== -->
               @include('components.navigation')
                <!-- ====== End 1.1 Header section ====== -->
                @yield('hero') 
                <!-- ====== 1.2 hero section ====== -->
                <!-- ====== End 1.2 hero section ====== -->
            </div>
        </div>

        <main class="py-4">
        @yield('content')
        </main>
      

        <!-- ====== 1.17 footer section ====== -->
        <footer>
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div>
                            <h4>Quick Links</h4>
                            <div class="footer-links d-flex flex-column">
                                <a href="index.html">Home</a>
                                <a href="about.html">About</a>
                                <a href="destinations.html">Destination</a>
                                <a href="contact.html">Contact</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div>
                            <h4>Contact Info</h4>
                            <div class="address">
                                <div>
                                    <i class="fa-solid fa-house"></i>
                                    <p>Plaza X , XY Floor, Street, XYZ</p>
                                </div>
                                <div>
                                    <i class="fa-solid fa-envelope"></i>
                                    <p>Yourname@Email.Com</p>
                                </div>
                                <div>
                                    <i class="fa-solid fa-phone"></i>
                                    <p>+123-456-7890</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-md-5">
                        <div class="reservation">
                            <h4>Make A Reservation</h4>
                            <p>Our Support & Sales team is available 24/7 to
                                answer your queries</p>
                            <div class="globalBtn justify-content-start mt-lg-4 mt-4 ">
                                <ul>
                                    <li>
                                        <a href="{{route('book')}}">Book Now
                                            <span></span><span></span><span></span><span></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row sub-footer justify-content-between align-items-center">
                        <div class="col-md-5">
                            <figure><a href="#"><img src="assets/images/logo.svg" alt="footerLogo"></a></figure>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <p>Copyright © 2023 Adventurist By Evonicmedia. All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ====== End 1.17 footer section ====== -->
    </div>
    <!-- end site wrapper -->

    <!-- button back to top -->
    <button onclick="scrollToTop()" id="backToTopBtn" class="btn_hover2">
        <i class="fa-solid fa-arrow-turn-up"></i>
    </button>

 @include('components.footer')
 <script>
    $(document).ready(function (){
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        @if(Session::has('success'))
            toastr.success("{{ session('success') }}");
        @endif

        @if(Session::has('error'))
            toastr.error("{{ session('error') }}");
        @endif

        @if(Session::has('warning'))
            toastr.warning("{{ session('warning') }}");
        @endif

        @if(Session::has('info'))
            toastr.info("{{ session('info') }}");
        @endif
    })
</script>
</body>

</html>