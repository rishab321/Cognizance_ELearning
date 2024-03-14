<!DOCTYPE html>
<html lang="en">

@include('layouts.client.head')

@include('layouts.client.styles')
@yield('custom_styles')

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
    
    @include('layouts.client.scripts')
    @yield('custom_scripts')

</body>

</html>
