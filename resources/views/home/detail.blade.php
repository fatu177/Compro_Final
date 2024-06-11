<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Portfolio Details - Personal Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/fe/assets/img/favicon.png ') }}" rel="icon">
    <link href="{{ asset('assets/fe/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/fe/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/fe/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/fe/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/fe/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/fe/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/fe/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/fe/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Personal
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <main id="main">

        <!-- ======= Portfolio Details ======= -->
        <div id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row">

                    <div class="col-lg-8">
                        <h2 class="portfolio-title">{{ $project->name }}</h2>

                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center text-center">
                                @foreach ($gambar as $gambar)
                                    <div class="swiper-slide">
                                        <img src="{{ asset('images/' . $gambar->image) }}" height="500vh"
                                            alt="">
                                    </div>
                                @endforeach



                            </div>
                            <div class="swiper-pagination"></div>
                        </div>

                    </div>

                    <div class="col-lg-4 portfolio-info">
                        <h3>Project information</h3>
                        <ul>
                            <li><strong>Category</strong>: Web design</li>
                            <li><strong>Client</strong>: Company</li>
                            <li><strong>Project date</strong>: {{ date('Y', strtotime($project->start_date)) }} -
                                @if (date('d-m-Y', strtotime($project->end_date)) == date('d-m-Y', $project->updated_at->timestamp))
                                    Present
                                @else
                                    {{ date('Y', strtotime($project->end_date)) }}
                                @endif
                            </li>
                            <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
                        </ul>

                        <p>
                            {{ $project->description }}
                        </p>
                    </div>

                </div>

            </div>
        </div><!-- End Portfolio Details -->

    </main><!-- End #main -->

    <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->

    </div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/fe/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/fe/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/fe/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/fe/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/fe/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/fe/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/fe/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/fe/assets/js/main.js') }}"></script>

</body>

</html>
