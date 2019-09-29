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
                        <li>
                            <a href="#" onclick="doGTranslate('en|en');return false;" title="English" class="gflag nturl" style="background-position:-0px -0px;">
		                        <img src="//gtranslate.net/flags/blank.png" height="24" width="24" alt="English" />
                        	</a>
                        </li>
                        <li>
                            <a href="#" onclick="doGTranslate('en|id');return false;" title="Indonesian" class="gflag nturl" style="background-position:-300px -300px;">
	                        	<img src="//gtranslate.net/flags/blank.png" height="24" width="24" alt="Indonesian" />
	                        </a>
                        </li>
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

    <!--================Home Banner Area =================-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active"
                <a href="#"><img src="{{ asset('front/img/tarian/slides/slide1.jpg') }}" /></a>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item"
                <a href="#"><img src="{{ asset('front/img/tarian/slides/slide2.jpg') }}" /></a>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item"
                <a href="#"><img src="{{ asset('front/img/tarian/slides/slide3.jpg') }}" /></a>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!--================End Home Banner Area =================-->

    <!--================ Feature section start =================-->
    <section class="feature-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-feature text-center text-lg-left">

                        <h3 class="card-feature__title"><span class="card-feature__icon">
                                <i class="ti-layers"></i>
                            </span>Dance Facts</h3>
                        <p class="card-feature__subtitle">
                            Dance is a form of art that is made by purposefully recreating selected sequences of human
                            motion.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-feature text-center text-lg-left">

                        <h3 class="card-feature__title"><span class="card-feature__icon">
                                <i class="ti-heart-broken"></i>
                            </span>Dance Facts</h3>
                        <p class="card-feature__subtitle">
                            The dance has always been with us, even before the arrival of written language and modern
                            history.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-feature text-center text-lg-left">

                        <h3 class="card-feature__title"><span class="card-feature__icon">
                                <i class="ti-headphone-alt"></i>
                            </span>Dance Facts</h3>
                        <p class="card-feature__subtitle">
                            Dance is the values of aesthetic and symbolism that are acknowledged
                            by both performers and observers.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Feature section end =================-->

    <!--=========== Fact section start =================-->

    <div class="service-area area-padding-top">
        <div class="container">
            <div class="area-heading row">
                <div class="col-md-5 col-xl-4">
                    <h3>Fascinating Facts<br>
                        About Indonesian Traditional Dance
                    </h3>
                </div>
                <div class="col-md-7 col-xl-8">
                    <p>
                        In the development of the history of dance art in Indonesia has existed since the time of the
                        ancestors until now growing rapidly.
                        In ancient times the art of dance was an expression of sadness, joy, self-expression and the
                        expression of communication with others. Heres Interesting and amazing facts about Indonesia
                        rainforest.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card-service text-center text-lg-left mb-4 mb-lg-0">
                        <span class="card-service__icon">
                            <i class="flaticon-brain"></i>
                        </span>
                        <h3 class="card-service__title">The Development of Prehistoric Dancing</h3>
                        <p class="card-service__subtitle">
                            Before the birth of the kingdoms in Indonesia, primitive nations in Indonesia believed in
                            the magical and sacred power of dance. Various dances are created based on that belief.Some
                            of the dances that were created were planted fertility dance, rain dance, exorcism dance,
                            resurrection dance, hunting dance, war dance, and others.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card-service text-center text-lg-left mb-4 mb-lg-0">
                        <span class="card-service__icon">
                            <i class="flaticon-face"></i>
                        </span>
                        <h3 class="card-service__title">Dance As a Means of Worship and Adat</h3>
                        <p class="card-service__subtitle">
                            The function of dance as a religious means has been going on for a long time. Many local and
                            foreign cultures make dance as a medium of worship and communication with the Gods.Balinese
                            people are one of the believers who use dance as a means of worship. Religious dances are
                            usually displayed in a special space and are sacred.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card-service text-center text-lg-left mb-4 mb-lg-0">
                        <span class="card-service__icon">
                            <i class="flaticon-face"></i>
                        </span>
                        <h3 class="card-service__title">Dance As a Symbol of Community Relationships</h3>
                        <p class="card-service__subtitle">
                            Intercourse is one of the activities that signify human characteristics as social
                            beings.Social interaction between humans can also be poured in a form of art that is able to
                            familiarize people who come from different backgrounds. hese types of dances are presented
                            at various events, such as weddings, performing arts.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--================ Fact section end =================-->

    <!--================ About Dance  Area =================-->
    <section class="about-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10 offset-md-1 col-lg-6 offset-lg-6 offset-xl-7 col-xl-5">
                    <div class="about-content">
                        <h4>Indonesian Dance<br>
                            Peacock Dance<br>
                        </h4>
                        <h6>
                            Peacock Dance is a dance variety of new creations that express the life of the animal, which
                            is a peacock. Each movement in this dance is meaningful and happy.
                        </h6>
                        <p>
                            Peacock dance is a traditional folk dance originating from Pasundan land, West Java. This
                            dance was created by Raden Tjetjep Somantri in 1950s and it had been rearrange by Irawati
                            Durban in 1965. Merak in English means Peacock bird.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ About Dance Area End =================-->

    <!--================ Start Blog Area =================-->
    <section class="blog-area area-padding">
        <div class="container" style="margin-bottom: 240px;">
            <div class="area-heading row">
                <div class="col-md-5 col-xl-4">
                    <h3>
                        Indonesian Folks Dance<br>
                        By Some Province
                    </h3>
                </div>
                <div class="col-md-7 col-xl-8">
                    <p>
                        Dance in Indonesia reflects the country's diversity of ethnicities and cultures. There are more
                        than 700 ethnic groups in Indonesia, Austronesian roots and Melanesian tribal forms are visible,
                        and influences ranging from neighbouring Asian and even western styles through colonisation.
                        Indonesian folk dances offer a particularly colorful and emotional brand of folk dance.
                    </p>
                </div>
            </div>

            <div class="row">
                @foreach ($datas as $data)
                <div class="col-md-6 col-lg-4 col-md-4">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="{{asset('foto_tarian/'.$data->foto)}}" alt="">
                        </div>
                        <div class="short_details">

                            <div class="meta-top d-flex">
                                <a>{{$data->provinsi}}</a>
                            </div>

                            <a class="d-block" href="{{ url('frontend/show/'.$data->id_tarian) }}">
                                <h4>
                                    {{$data->nama_tarian}}
                                </h4>
                            </a>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>
    <!--================ End Blog Area =================-->

    <!-- start testimoni -->
    <section class="testimonial">
        <div class="container">
            <div class="testi_slider owl-carousel owl-theme">
                <div class="item">
                    <div class="testi_item">
                        <div class="testimonial_image">
                            <img src="{{asset('front')}}/img/elements/3.jpg" alt="">
                        </div>
                        <div class="testi_item_content">
                            <p>
                                “Kita sendiri yang harus membuat kesenian tradisi itu menjadi tuan rumah di negeri sendiri sehingga kekayaan budaya itu menjadi kekuatan dan daya tarik wisatawan mancanegara.”
                            </p>
                            <h4>- Viharna -</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testi_item">
                        <div class="testimonial_image">
                            <img src="{{asset('front')}}/img/elements/1.jpg" alt="">
                        </div>
                        <div class="testi_item_content">
                            <p>
                                “Saya menari Tari Pendet dan Kecak dan juga bermain gong bersama (komunitas) Jagat Gamelan. Saya sangat senang bisa mementaskan kesenian Indonesia.”
                            </p>
                            <h4>- Alya -</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testi_item">
                        <div class="testimonial_image">
                            <img src="{{asset('front')}}/img/elements/2.jpg" alt="">
                        </div>
                        <div class="testi_item_content">
                            <p>
                                “I'm so glad live and stay in a rich culture country like indonesia.”
                            </p>
                            <h4>- Nabila Putri -</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end testimoni -->

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
    <script type="text/javascript">
    /* <![CDATA[ */
    if(top.location!=self.location)top.location=self.location;
    window['_tipoff']=function(){};window['_tipon']=function(a){};
    function doGTranslate(lang_pair) {if(lang_pair.value)lang_pair=lang_pair.value;if(location.hostname!='translat.googleusercontent.com' && lang_pair=='en|en')return;else if(location.hostname=='translate.googleusercontent.com' && lang_pair=='en|en')location.href=unescape(gfg('u'));else if(location.hostname!='translate.googleusercontent.com' && lang_pair!='en|en')location.href='https://translate.google.com/translate?client=tmpg&hl=en&langpair='+lang_pair+'&u='+escape(location.href);else location.href='https://translate.google.com/translate?client=tmpg&hl=en&langpair='+lang_pair+'&u='+unescape(gfg('u'));}
    function gfg(name) {name=name.replace(/[[]/,"\[").replace(/[]]/,"\]");var regexS="[?&]"+name+"=([^&#]*)";var regex=new RegExp(regexS);var results=regex.exec(location.href);if(results==null)return "";return results[1];}
    /* ]]> */
    </script>
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