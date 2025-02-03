<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>PestKit - Pest Control Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('pestkit/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('pestkit/css/style.css') }}" rel="stylesheet">
    </head>

    <body>

        <!-- Topbar Start -->
        @include('include.sidebar')
        <!-- Topbar End -->

        <!-- Navbar Start -->
        @include('include.navbar')
        <!-- Navbar End -->

        <!-- Carousel Start -->
        @include('include.carousel')
        <!-- Carousel End -->

        <!-- Content Area Start -->
        @yield('content')
        <!-- Content Area End -->

        <!-- Footer Start -->
        @include('include.footer')
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary rounded-circle border-3 back-to-top"><i class="fa fa-arrow-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('pestkit/js/wow.min.js') }}"></script>
        <script src="{{ asset('pestkit/js/easing.min.js') }}"></script>
        <script src="{{ asset('pestkit/js/waypoints.min.js') }}"></script>
        <script src="{{ asset('pestkit/js/owl.carousel.min.js') }}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('pestkit/js/main.js') }}"></script>
    </body>

 </html>
