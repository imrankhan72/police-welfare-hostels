
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Police Welfare Hostels</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/assets/img/favicon.png" rel="icon">
    <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/assets/css/style.css" rel="stylesheet">

</head>

<body>

<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="social-links d-none d-md-flex align-items-center">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        </div>
        <div class="contact-info d-flex align-items-center">
            <i class="d-flex align-items-center"><a href="/language/hi">हिंदी</a></i> &nbsp; |
            <i class="d-flex align-items-center"><a href="/language/en">English</a></i>
        </div>
    </div>
</section>

<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <!--<h1 class="logo"><a href="{{route('home')}}"><img src="/assets/img/logoicon.png" alt="">Police Welfare Hostels</a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="{{route('home')}}" class="logo"><img src="/assets/img/logo.png" alt="" style="max-height:none;"></a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link" href="{{route('home')}}"><img src="assets/img/home.png"></a></li>
                <li class="dropdown"><a class="nav-link" href="#"><span>{{ __('messages.about_us') }}</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{route('about-us')}}">{{ __('messages.about_us') }}</a></li>
                        <li><a href="{{route('management-committee')}}">{{ __('messages.management_committee') }}</a></li>
                        <li><a href="{{route('hostels')}}">{{ __('messages.hostels') }}</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a class="nav-link" href="#"><span>{{ __('messages.rules-eligibility') }}</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{route('eligibility')}}">{{ __('messages.eligibility') }}</a></li>
                        <li><a href="{{route('rules-regulations')}}">{{ __('messages.rules-regulations') }}</a></li>
                    </ul>
                </li>
                <li><a class="nav-link " href="{{route('facilities')}}">{{ __('messages.facilities') }}</a></li>
                <li><a class="nav-link " href="{{route('gallery')}}">{{ __('messages.gallery') }}</a></li>
                <li><a class="nav-link " href="{{route('faqs')}}">{{ __('messages.faqs') }}</a></li>
                <li><a class="nav-link" href="{{route('contact-us')}}">{{ __('messages.contact_us') }}</a></li>
                <li>
                    <div class="btn-wrap pricing">
                        <a href="{{route('apply-now')}}" class="btn-buy" style="padding: 8px 11px 10px 11px;">{{ __('messages.apply_now') }}</a>
                    </div>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->





<main id="main">
    @yield('content')

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container py-4">
        <div class="copyright">
            {{ __('messages.copy_right') }}
        </div>
        <div class="credits">
            {{ __('messages.designed_by') }}-  <a href="#">{{ __('messages.company_name') }}</a>
        </div>
    </div>
</footer><!-- End Footer -->


<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="/assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="/assets/vendor/aos/aos.js"></script>
<script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="/assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="/assets/js/main.js"></script>

<!-- Start of queryable.xyz script -->
<script> window.embedId="99a9ff7a-47a8-45b1-b8fd-9833da6fb392"; </script>
<script src="http://localhost:8000/embed.js"></script>
<!-- End of queryable.xyz script -->    

</body>

</html>
