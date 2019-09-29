<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php echo e(asset('front')); ?>/img/favicon.png" type="image/png">
    <title>Faskes Bekasi Utara  </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('front')); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo e(asset('front')); ?>/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo e(asset('front')); ?>/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo e(asset('front')); ?>/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('front')); ?>/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('front')); ?>/vendors/animate-css/animate.css">
    <!-- main css -->
    <link rel="stylesheet" href="<?php echo e(asset('front')); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo e(asset('front')); ?>/css/responsive.css">
</head>
<body>

    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="top_menu row m0">
            <div class="container">
                <div class="float-left">
                    <a class="dn_btn" href="mailto:medical@example.com"><i class="ti-email"></i>muliaindra39@gmail.com</a>
                   
                </div>
                <div class="float-right">
                    <ul class="list header_social">
                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                    </ul>	
                </div>
            </div>	
        </div>	
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.html"><img src="<?php echo e(asset('front')); ?>/img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('homeFrontend')); ?>">Beranda</a></li>       
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Fasilitas Kesehatan</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('klinikFrontend')); ?>">Klinik</a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('puskesmasFrontend')); ?>">Puskesmas</a></li>
                                </ul>
                            </li> 
                            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('contactFrontend')); ?>">Kontak</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->

    <section class="banner-area d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <h1>Hidup Itu Nikmat<br>
                    Sehat Itu Indah</h1>
                    <p>Kesehatan berawal dari dalam diri, oleh sebab itu mari kita jaga lingkungan bersama.
                    agar menciptakan hidup sehat.</p>
                    
                </div>
            </div>
        </div>
    </section>

    <!--================End Home Banner Area =================-->


    <!--================ Feature section start =================-->      
    <!--================ Feature section end =================-->  

    <!--================ Service section start =================-->  

   
    <!--================ Service section end =================-->      


    <!--================About  Area =================-->
   
    <!--================About Area End =================-->

    <!--================ Team section start =================-->  
    <section class="team-area area-padding">
        <div class="container">
            <div class="area-heading row">
                <div class="col-md-5 col-xl-4">
                    <h3>Medcare<br>
                    Experience Doctors</h3>
                </div>
                <div class="col-md-7 col-xl-8">
                    <p>Land meat winged called subdue without very light in all years sea appear midst forth image him third there set. Land meat winged called subdue without very light in all years sea appear</p>
                </div>
            </div>

            <div class="row">
            <?php
                GATAU LAH MAU GMNA KAMPRET
                @foreach
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card card-team">
                        <img class="card-img rounded-0" src="{{asset('front')}}/public/puskesmas" alt="">
                        <div class="card-team__body text-center">
                            <h3><a href="#">Dr Adam Brain</a></h3>
                            <p>Cardiologist</p>
                            <div class="team-footer d-flex justify-content-between">
                                <a class="dn_btn" href=""><i class="ti-mobile"></i>+7 235 365 2365</a>
                                <ul class="card-team__social">
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    <li><a href="#"><i class="ti-skype"></i></a></li>
                                </ul> 
                            </div> 
                        </div>
                    </div>
                    ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card card-team">
                        <img class="card-img rounded-0" src="<?php echo e(asset('front')); ?>/img/team/2.jpg" alt="">
                        <div class="card-team__body text-center">
                            <h3><a href="#">Dr Blian Judge</a></h3>
                            <p>Cardiologist</p>
                            <div class="team-footer d-flex justify-content-between">
                                <a class="dn_btn" href=""><i class="ti-mobile"></i>+7 235 365 2365</a>
                                <ul class="card-team__social">
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    <li><a href="#"><i class="ti-skype"></i></a></li>
                                </ul> 
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card card-team">
                        <img class="card-img rounded-0" src="<?php echo e(asset('front')); ?>/img/team/3.jpg" alt="">
                        <div class="card-team__body text-center">
                            <h3><a href="#">Dr Blian Judge</a></h3>
                            <p>Cardiologist</p>
                            <div class="team-footer d-flex justify-content-between">
                                <a class="dn_btn" href=""><i class="ti-mobile"></i>+7 235 365 2365</a>
                                <ul class="card-team__social">
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    <li><a href="#"><i class="ti-skype"></i></a></li>
                                </ul> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Team section end =================-->  


    <!--================ appointment Area Starts =================-->
    <!--================ appointment Area End =================-->


    <!-- ================ testimonial section start ================= -->      
    <section class="testimonial">
        <div class="container">
            <div class="testi_slider owl-carousel owl-theme">
                <div class="item">
                    <div class="testi_item">
                        <div class="testimonial_image">
                            <img src="<?php echo e(asset('front')); ?>/img/elements/tes1.jpg" alt="">
                        </div>
                        <div class="testi_item_content">
                            <p>
                                “ Waktu dan kesehatan adalah dua aset berharga yang tidak kita kenali dan hargai sampai mereka telah habis.”
                            </p>
                            <h4>- Denis Waitley -</h4>       
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testi_item">
                        <div class="testimonial_image">
                            <img src="<?php echo e(asset('front')); ?>/img/elements/tes1.jpg" alt="">
                        </div>
                        <div class="testi_item_content">
                            <p>
                                “ Hal yang paling menyenangkan ditengah masa sulit adalah kesehatan yang baik dan tidur yang cukup”
                            </p>
                            <h4>- Knute Nelson -</h4>         
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testi_item">
                        <div class="testimonial_image">
                            <img src="<?php echo e(asset('front')); ?>/img/elements/tes1.jpg" alt="">
                        </div>
                        <div class="testi_item_content">
                            <p>
                                “ Untuk menikmati cahaya kesehatan yang baik, Anda harus berolahraga”
                            </p>
                            <h4>- Gene Tunney -</h4>       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ testimonial section end ================= -->    

    <!-- ================ Hotline Area Starts ================= -->  
    <!-- ================ Hotline Area End ================= -->  




    <!--================ Start Blog Area =================-->
    <!--================ End Blog Area =================-->

    <!--================ Start Brands Area =================-->
    <!--================ End Brands Area =================-->

    <!-- start footer Area -->
    <footer class="footer-area area-padding-top">
        <div class="container">
            <div class="row">
        </div>
        <div class="row footer-bottom d-flex justify-content-between">
            <p class="col-lg-8 col-sm-12 footer-text m-0">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Thanks To Time <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            <div class="col-lg-4 col-sm-12 footer-social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-dribbble"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </div>
</footer>
<!-- End footer Area -->






<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?php echo e(asset('front')); ?>/js/jquery-2.2.4.min.js"></script>
<script src="<?php echo e(asset('front')); ?>/js/popper.js"></script>
<script src="<?php echo e(asset('front')); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo e(asset('front')); ?>/js/stellar.js"></script>
<script src="<?php echo e(asset('front')); ?>/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="<?php echo e(asset('front')); ?>/js/jquery.ajaxchimp.min.js"></script>
<script src="<?php echo e(asset('front')); ?>/js/waypoints.min.js"></script>
<script src="<?php echo e(asset('front')); ?>/js/mail-script.js"></script>
<script src="<?php echo e(asset('front')); ?>/js/contact.js"></script>
<script src="<?php echo e(asset('front')); ?>/js/jquery.form.js"></script>
<script src="<?php echo e(asset('front')); ?>/js/jquery.validate.min.js"></script>
<script src="<?php echo e(asset('front')); ?>/js/mail-script.js"></script>
<script src="<?php echo e(asset('front')); ?>/js/theme.js"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\pi-baru\resources\views/frontend/home.blade.php ENDPATH**/ ?>