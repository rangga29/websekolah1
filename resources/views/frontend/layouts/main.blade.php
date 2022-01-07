<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content "">
    <meta name="keywords" content "">
    <meta name="author" content "">

    <title>SMP Santa Ursula</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="upload/logo/favicon.ico">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="frontend/css/plugins/icofont.min.css">
    <link rel="stylesheet" href="frontend/css/plugins/flaticon.css">
    <link rel="stylesheet" href="frontend/css/plugins/all.min.css">

    <link rel="stylesheet" href="frontend/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="frontend/css/plugins/animate.min.css">
    <link rel="stylesheet" href="frontend/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="frontend/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="frontend/css/plugins/nice-select.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="frontend/css/style.css">
</head>

<body>
    <div class="main-wrapper">
        <!-- Header Section -->
        @include('frontend.layouts.partials.header')

        <!-- Mobile Menu -->
        @include('frontend.layouts.partials.mobile')

        <div class="overlay"></div>

        @yield('container')

        <!-- Footer -->
        @include('frontend.layouts.partials.footer')

        <!--Back To Start-->
        <a href="#" class="back-to-top">
            <i class="icofont-simple-up"></i>
        </a>
    </div>

    <!-- Plugin JS -->
    <script src="frontend/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="frontend/js/vendor/jquery-3.5.1.min.js"></script>

    <script src="frontend/js/plugins/popper.min.js"></script>
    <script src="frontend/js/plugins/bootstrap.min.js"></script>

    <script src="frontend/js/plugins/swiper-bundle.min.js"></script>
    <script src="frontend/js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="frontend/js/plugins/jquery.nice-select.min.js"></script>
    <script src="frontend/js/plugins/video-playlist.js"></script>
    <script src="frontend/js/plugins/ajax-contact.js"></script>

    <!-- Main JS -->
    <script src="frontend/js/main.js"></script>
</body>

</html>
