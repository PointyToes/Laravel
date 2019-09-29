<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tagsg -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('front/img/icon/favicon.ico')}}">
    <title>Traditional Dance</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('front')}}/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('front')}}/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('front')}}/css/flaticon.css">
    <link rel="stylesheet" href="{{asset('front')}}/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="{{asset('front')}}/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('front')}}/vendors/animate-css/animate.css">
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('front')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('front')}}/css/responsive.css">
</head>

<body>

    <!--================Header Menu Area =================-->
    <header class="header_area">

        <!--================Start top =================-->
        <div class="top_menu row m0">
            <div class="container">
                <div class="float-left">
                    <a class="dn_btn" href="mailto:nabilavirna18@gmail.com"><i
                            class="ti-email"></i>nabilavirna18@gmail.com</a>
                </div>
                <div class="float-right">
                    <ul class="list header_social">
                        <li><a href="https://www.twitter.com"><i class="ti-twitter-alt"></i></a></li>
                        <li><a href="https://www.instagram.com/virnabilaa?igshid=6m3xa4mjzzwf"><i
                                    class="ti-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--================End Top =================-->

        <!--================Start Navbar=================-->
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand" href="{{ route('home') }}"><span>
                            <h1>Traditional Dance</h1>
                        </span></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Beranda</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('provinsi') }}">Provinsi</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('tarian')}}">Traditional
                                    Dance A to Z</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('about')}}">About Me</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!--================End Navbar=================-->

    </header>
    <!--================End Header Menu Area =================-->

    <!--================ About Dance  Area =================-->
    <section class="about-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10 offset-md-1 col-lg-6 offset-lg-6 offset-xl-7 col-xl-5">
                    <div class="about-content">
                        <h4>Hello Everyone :)<br>
                            I'm Virna<br>
                        </h4>
                        <p>
                            You maybe ask who I am? Right Right? hehe Just Kidding, My Fullname Viharna Alya Nabila
                            Putri and I was collage student from University of Gunadarma.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ About Dance Area End =================-->

    <!-- start footer Area -->
    <footer class="footer-area area-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Some Quote</h3>
                    <blockquote>
                        <p>
                            &#8220;Culture makes people understand each other better. And if they understand each other
                            better in their soul,
                            it's easier to overcome the economic and political barriers. But first they have to
                            understand that their neighbour is,
                            in the end, just like them, with the same problems, the same question.&#8221; &#8212; Paulo
                            Coelho
                        </p>
                    </blockquote>
                </div>
            </div>

            <div class="row footer-bottom d-flex justify-content-between">
                <p class="col-lg-8 col-sm-12 footer-text m-0">
                    Copyright
                    &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved by <a href="{{ route('home') }}">Tradisional Dance</a>.</strong>
                </p>
                <div class="col-lg-4 col-sm-12 footer-social">
                    <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/virnabilaa?igshid=6m3xa4mjzzwf"><i
                            class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer Area -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('front')}}/js/jquery-2.2.4.min.js"></script>
    <script src="{{asset('front')}}/js/popper.js"></script>
    <script src="{{asset('front')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('front')}}/js/stellar.js"></script>
    <script src="{{asset('front')}}/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="{{asset('front')}}/js/jquery.ajaxchimp.min.js"></script>
    <script src="{{asset('front')}}/js/waypoints.min.js"></script>
    <script src="{{asset('front')}}/js/mail-script.js"></script>
    <script src="{{asset('front')}}/js/contact.js"></script>
    <script src="{{asset('front')}}/js/jquery.form.js"></script>
    <script src="{{asset('front')}}/js/jquery.validate.min.js"></script>
    <script src="{{asset('front')}}/js/mail-script.js"></script>
    <script src="{{asset('front')}}/js/theme.js"></script>
</body>

</html>