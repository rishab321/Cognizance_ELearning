<!DOCTYPE html>
<html lang="en">

@include('layouts.client.head')

<body>

    <!-- ======= Mobile nav toggle button ======= -->

    <!-- ======= Header ======= -->

    @include('layouts.client.navbar')
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <!-- End Contact Section -->

        @yield('content')
        
    </main><!-- End #main -->


    <!-- ======= Footer ======= -->
    @include('layouts.client.footer')
    <!-- End  Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('client/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{asset('client/assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('client/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('client/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('client/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('client/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('client/assets/vendor/php-email-form/validate.js')}}"></script>
  
    <!-- Template Main JS File -->
    <script src="{{asset('client/assets/js/main.js')}}"></script>

    {{-- @yield('custom_scripts') --}}

</body>

</html>
