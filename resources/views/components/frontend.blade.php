<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Read Me </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link href="{{ asset('logo.png') }}" rel="icon">
    <link href="{{ asset('logo.png') }}" rel="apple-touch-icon">

    <!-- Font CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugin/font.css') }}">

    <!-- Color CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugin/color.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugin/custom.css') }}">

    <!-- Bootstrap -->
    <link href="{{ asset('plugin/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Icon -->
    <link href="{{ asset('plugin/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugin/boxicons/css/boxicons.min.css') }}" rel="stylesheet">

    <link href="{{ asset('plugin/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugin/remixicon/remixicon.css') }}" rel="stylesheet">

    <link href="{{ asset('plugin/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugin/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('plugin/aos/aos.css') }}" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="{{ asset('plugin/frontendstyle.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugin/bookcover3d.css') }}">

</head>
<body>

<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-none d-lg-flex align-items-center fixed-top {{ Request::segment(1) === NULL ? '' : 'topbar-inner-pages' }}">
    <div class="container d-flex align-items-center justify-content-between">
        <div class="contact-info">
            <ul>
                <li><i class="icofont-envelope"></i><a href="mailto:contact@example.com">readme@info.com</a></li>
                <li><i class="icofont-phone"></i> +95 987654321</li>
                <li><i class="icofont-clock-time icofont-flip-horizontal"></i> Mon-Fri 9am - 5pm</li>
            </ul>
        </div>
        <div class="cta">
            <a href="#about" class="scrollto"> How IT works  </a>
        </div>
    </div>
</div>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top {{ Request::segment(1) === NULL ? '' : 'topbar-inner-pages' }}">
    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo">
            <a href="#header" class="logo scrollto d-flex">
                <img src="{{ asset('logo.png') }}" alt="" class="img-fluid"> &nbsp;&nbsp;
                <span class="fs-1"> Read.Me </span>
            </a>
        </h1>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="">Home</a></li>
                <li><a href="authors.html"> Author </a></li>
                <li class="drop-down"><a href=""> Genres </a>
                    <ul>
                    </ul>
                </li>
                <!-- <li><a href="articles.html"> Articles </a></li> -->
                <!-- <li><a href="literaturetalk.html"> Literature talk </a></li> -->
                @guest
                    <li><a href="{{ route('login') }}"> Login </a></li>
                    <li><a href="{{ route('register') }}"> Register </a></li>
                @else
                    <li class="drop-down"><a href=""> Account </a>
                        <ul>
                            <li><a href="#"> Profile </a></li>
                            <li><a href="#"> Order History </a></li>
                            <li><a href="#"> Downloaded PDF </a></li>
                            <li><a href="#"> Change Password </a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a href="javascript:void(0)" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                            </li>
                        </ul>
                    </li>
                @endif
                <li class="px-3">
                    <a href="" id="shoppingIcon" class="cart">
                        <span class="count">0</span>
                        <i class='bx bx-cart fs-4'></i>
                    </a>
                </li>

                <li class="d-xl-block d-lg-block d-md-none d-sm-none d-none"><a href="javascript:void(0)" class="nav_search"> <i class="icofont-search-2"></i> </a></li>


            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header>
<!-- End Header -->


<!-- ======= Hero Section ======= -->
@if(Request::segment(1) === NULL)
    <section id="hero" class="d-flex justify-cntent-center align-items-center">
        <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

        @for($i=0; $i<=3; $i++)
            <!-- Slide 1 -->
                <div class="carousel-item @if($i==0) active @endif">
                    <div class="carousel-container">
                        <h2 class="animate__animated animate__fadeInDown"> {{ $data[0][$i]->title }} </h2>
                        <p class="animate__animated animate__fadeInUp"> {{ $data[0][$i]->annotation }} </p>
                        <p class="fst-italic"> - <span> {{ $data[0][$i]->author->name }} </span> - </p>
                        <a href="{{ route('', $data[0][$i]->id) }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                    </div>
                </div>

            @endfor


            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </section><!-- End Hero -->
@endif

<main id="main">

    {{ $slot }}


</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-newsletter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h4> Upgrade your self & Be your best version </h4>
                    <p> - Lumin </p>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Contact Us</h4>
                    <p>
                        A108 Adam Street <br>
                        New York, NY 535022<br>
                        United States <br><br>
                        <strong>Phone:</strong> +1 5589 55488 55<br>
                        <strong>Email:</strong> readme@info.com<br>
                    </p>

                </div>

                <div class="col-lg-3 col-md-6 footer-info">
                    <h3>About README </h3>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                    <div class="social-links mt-3">
                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>Anyar</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer>

<!-- End Footer -->

<div id="search-box">
    <div class="container">
        <a class="close" href="#close"></a>
        <div class="search-main">
            <div class="search-inner">
                <form action="books.html">
                    <input type="text" id="inputSearch" name="firstname" placeholder="">
                </form>
                <span class="search-info">Hit enter to search or ESC to close</span>
            </div>
        </div>
    </div>
</div>

<a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{ asset('plugin/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{ asset('plugin/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('plugin/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('plugin/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('plugin/owl.carousel/owlcarousel2thumbs.min.js') }}"></script>
<script src="{{ asset('plugin/venobox/venobox.min.js') }}"></script>
<script src="{{ asset('plugin/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('plugin/aos/aos.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('plugin/frontendmain.js') }}"></script>
<script src="{{ asset('plugin/hover3d.js') }}"></script>
<script src="{{ asset('plugin/bookcover3d.js') }}"></script>

<script src="{{ asset('plugin/cart.js') }}"></script>

<script>
    $(function() {
        Books.init();
    });
</script>
</body>
</html>
