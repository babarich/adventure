   <!-- j Query -->
   <script src="{{asset('assets/js/jquery.js')}}"></script>
    <!-- counter -->
    <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
    <!-- Framework javascript -->
    <script src="{{asset('assets/js/javascript-lib/bootstrap.min.js')}}"></script>
    <!-- slider -->
    <script src="{{asset('assets/js/slick.min.js')}}"></script>
    <!-- style javascript -->
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <!-- AOS Animation -->
    <script src="{{asset('assets/js/aos.js')}}"></script>

    <script>
        // aos animation start
        AOS.init({
            once: true,
            duration: 1000
        });
        // aos animation end

        // ============= header slider ============= //
        const slides = document.querySelectorAll('.slide');
        let currentSlide = 0;
        function changeSlide() {
            slides[currentSlide].classList.remove('active');
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].classList.add('active');
        };
        setInterval(changeSlide, 5000);
        // ============= header slider end ============= //

    </script>