<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Charity</title>
    <link rel="icon" href="img/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@600&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">

                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="ti-menu"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item float-left"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">

                                @auth
                                <li class="nav-item dropdown">
                                    <a style="border-right: 1px white dashed" class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pages
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="team.html">team</a>
                                        <a class="dropdown-item" href="elements.html">Elements</a>
                                    </div>
                                </li>

                                    @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.html">اشتراك</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="about.html" style="border-right: 1px white dashed">تسجيل دخول</a>
                                    </li>
                                @endauth

                                <li class="nav-item">
                                    <a class="nav-link" href="#">اكتشف</a>
                                </li>
                                <li class="d-none d-lg-block">
                                    <a class="btn_1 green" href="#" style="background-color:  #00c424 ; font-size: 16px">ابدأ حملة تبرع</a>
                                </li>
                            </ul>
                        </div>

                        <a class="navbar-brand float-right" href="index.html">
                            <h1 class="text-white">تذكرهم</h1>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-5">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h1>يرحلون وتبقى ذكراهم</h1>

                            <a class="btn_1 green" href="#" style="background-color:  #00c424 ; font-size: 16px;color: white">ابدأ حملة تبرع</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->


    <!--::passion part start::-->
    <section class="passion_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2>تبرع لحملات قائمة</h2>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-sm-6 col-lg-3 col-xl-3">
                    <div class="single-home-passion">
                        <div class="card">
                            <img width="100%" style="height: 150px" src="img/passion/passion_2.png" class=" card-img-top" alt="blog">
                            <div class="card-body">

                                <a href="passion.html">
                                    <h5 class="card-title">Fourth created forth fill moving
                                        created subdue be </h5>
                                </a>
                                <div class="skill">
                                    <div class="skill-bar skill11 wow slideInLeft animated">
                                        <span class="skill-count11">75%</span>
                                    </div>
                                </div>
                                <ul>
                                    <li><img src="img/icon/passion_1.svg" alt=""> Goal: $2500</li>
                                    <li><img src="img/icon/passion_2.svg" alt=""> Raised: $1533</li>
                                </ul>
                                <a href="#" class="btn_3">read more</a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 col-xl-3">
                    <div class="single-home-passion">
                        <div class="card">
                            <img width="100%" style="height: 150px" src="img/passion/passion_2.png" class=" card-img-top" alt="blog">
                            <div class="card-body">

                                <a href="passion.html">
                                    <h5 class="card-title">Fourth created forth fill moving
                                        created subdue be </h5>
                                </a>
                                <div class="skill">
                                    <div class="skill-bar skill11 wow slideInLeft animated">
                                        <span class="skill-count11">75%</span>
                                    </div>
                                </div>
                                <ul>
                                    <li><img src="img/icon/passion_1.svg" alt=""> Goal: $2500</li>
                                    <li><img src="img/icon/passion_2.svg" alt=""> Raised: $1533</li>
                                </ul>
                                <a href="#" class="btn_3">read more</a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 col-xl-3">
                    <div class="single-home-passion">
                        <div class="card">
                            <img width="100%" style="height: 150px" src="img/passion/passion_2.png" class=" card-img-top" alt="blog">
                            <div class="card-body">

                                <a href="passion.html">
                                    <h5 class="card-title">Fourth created forth fill moving
                                        created subdue be </h5>
                                </a>
                                <div class="skill">
                                    <div class="skill-bar skill11 wow slideInLeft animated">
                                        <span class="skill-count11">75%</span>
                                    </div>
                                </div>
                                <ul>
                                    <li><img src="img/icon/passion_1.svg" alt=""> Goal: $2500</li>
                                    <li><img src="img/icon/passion_2.svg" alt=""> Raised: $1533</li>
                                </ul>
                                <a href="#" class="btn_3">read more</a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 col-xl-3">
                    <div class="single-home-passion">
                        <div class="card">
                            <img width="100%" style="height: 150px" src="img/passion/passion_2.png" class=" card-img-top" alt="blog">
                            <div class="card-body">

                                <a href="passion.html">
                                    <h5 class="card-title">Fourth created forth fill moving
                                        created subdue be </h5>
                                </a>
                                <div class="skill">
                                    <div class="skill-bar skill11 wow slideInLeft animated">
                                        <span class="skill-count11">75%</span>
                                    </div>
                                </div>
                                <ul>
                                    <li><img src="img/icon/passion_1.svg" alt=""> Goal: $2500</li>
                                    <li><img src="img/icon/passion_2.svg" alt=""> Raised: $1533</li>
                                </ul>
                                <a href="#" class="btn_3">read more</a>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--::passion part end::-->



    <!-- feature_part start-->
    <section class="feature_part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <p>Awesome Feature</p>
                        <h2>How Could You Help </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-5 col-sm-6">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <div class=" d-flex align-items-center">
                                <img src="img/icon/feature_1.svg" alt="">
                                <h4>Give Donation</h4>
                            </div>
                            <p>Our his abundantly subdue she'd night own of two two his deasons face you place can upon
                                letter.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-6">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <div class=" d-flex align-items-center">
                                <img src="img/icon/feature_2.svg" alt="">
                                <h4>Become A Volunteer</h4>
                            </div>
                            <p>Our his abundantly subdue she'd night own of two two his deasons face you place can upon
                                letter.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-6">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <div class=" d-flex align-items-center">
                                <img src="img/icon/feature_3.svg" alt="">
                                <h4>Child Education</h4>
                            </div>
                            <p>Our his abundantly subdue she'd night own of two two his deasons face you place can upon
                                letter.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-6">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <div class=" d-flex align-items-center">
                                <img src="img/icon/feature_4.svg" alt="">
                                <h4>Quick Fundraise</h4>
                            </div>
                            <p>Our his abundantly subdue she'd night own of two two his deasons face you place can upon
                                letter.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature_part start-->

    <!-- top_service part start-->
    <section class="be_part">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="be_part_text">
                        <h2>Be a part of the break
                            through and make someones
                            dream come true</h2>
                        <p>Our his abundantly subdue she'd night own of two two his herb seasons
                            face you hesea placees can't upon dominion make beginning fowl waters
                            seasons in also moveth hand beginning living face kind beginning from asid</p>
                        <a href="#" class="btn_2">learn more</a>
                    </div>
                </div>
            </div>
        </div>
        <img src="img/Charity.jpg" alt="" class="be_img">
    </section>
    <!-- top_service part end-->

    <!-- counter part start-->
    <section class="counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single_counter d-flex">
                        <img src="img/icon/feature_1.svg" alt="">
                        <div class="single_counter_text">
                            <p>Total Collection</p>
                            <span class="count">58,9672412</span>
                        </div>
                    </div>
                    <div class="single_counter d-flex">
                        <img src="img/icon/feature_2.svg" alt="">
                        <div class="single_counter_text">
                            <p>Helped People</p>
                            <span class="count">58,9672412</span>
                        </div>
                    </div>
                    <div class="single_counter d-flex">
                        <img src="img/icon/feature_3.svg" alt="">
                        <div class="single_counter_text">
                            <p>Total Volunteer</p>
                            <span class="count">58,9672412</span>
                        </div>
                    </div>
                    <div class="single_counter d-flex">
                        <img src="img/icon/feature_4.svg" alt="">
                        <div class="single_counter_text">
                            <p>Successed Mission</p>
                            <span class="count">58,967</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counter part end-->


    <!-- intro_video_bg start-->
    <section class="intro_video_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="intro_video_iner text-center">
                        <h2>Forget what you can get and
                            see what you can give</h2>
                        <a href="#" class="btn_2">Become a Volunteer</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- intro_video_bg part start-->

    <!--::volunteers_part start::-->
    <section class="volunteers_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <p>volunteers</p>
                        <h2>Expert Volunteers</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/volunteers/volunteers_1.png" alt="doctor">
                            <div class="social_icon">
                                <a href="#"> <i class="ti-facebook"></i> </a>
                                <a href="#"> <i class="ti-twitter-alt"></i> </a>
                                <a href="#"> <i class="ti-instagram"></i> </a>
                                <a href="#"> <i class="ti-skype"></i> </a>
                            </div>
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text">
                                <h3>David Phillips</h3>
                                <p>Project Manager</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/volunteers/volunteers_2.png" alt="doctor">
                            <div class="social_icon">
                                <a href="#"> <i class="ti-facebook"></i> </a>
                                <a href="#"> <i class="ti-twitter-alt"></i> </a>
                                <a href="#"> <i class="ti-instagram"></i> </a>
                                <a href="#"> <i class="ti-skype"></i> </a>
                            </div>
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text">
                                <h3>Lindsa Rudolph</h3>
                                <p>Field Supervisor</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/volunteers/volunteers_3.png" alt="doctor">
                            <div class="social_icon">
                                <a href="#"> <i class="ti-facebook"></i> </a>
                                <a href="#"> <i class="ti-twitter-alt"></i> </a>
                                <a href="#"> <i class="ti-instagram"></i> </a>
                                <a href="#"> <i class="ti-skype"></i> </a>
                            </div>
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text">
                                <h3>Samuel Gardner</h3>
                                <p>Co Founder</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/volunteers/volunteers_4.png" alt="doctor">
                            <div class="social_icon">
                                <a href="#"> <i class="ti-facebook"></i> </a>
                                <a href="#"> <i class="ti-twitter-alt"></i> </a>
                                <a href="#"> <i class="ti-instagram"></i> </a>
                                <a href="#"> <i class="ti-skype"></i> </a>
                            </div>
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text">
                                <h3>Lindsa Rudolph</h3>
                                <p>Field Supervisor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::volunteers_part end::-->

    <!--::blog_part start::-->
    <section class="blog_part padding_bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <p>OUr blog</p>
                        <h2>Every Single Update</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="single_blog">
                        <div class="appartment_img">
                            <img src="img/blog_1.png" alt="">
                        </div>
                        <div class="single_appartment_content">
                            <a href="blog.html">
                                <h4>First cattle which earth unto let health for
                                    can get and see what you
                                </h4>
                            </a>
                            <ul class="list-unstyled">
                                <li><a href=""> <span class="flaticon-calendar"></span> </a> May 10, 2019</li>
                                <li><a href=""> <span class="flaticon-comment"></span> </a> 1 comments</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right_single_blog">
                        <div class="single_blog">
                            <div class="media">
                                <div class="media-body align-self-center">
                                    <p><a href="#">healthy food</a></p>
                                    <a href="blog.html">
                                        <h5 class="mt-0"> Man does day divided morning after give .</h5>
                                    </a>
                                    <ul class="list-unstyled">
                                        <li><a href=""> <span class="flaticon-calendar"></span> </a> May 10, 2019</li>
                                        <li><a href=""> <span class="flaticon-comment"></span> </a> 1 comments</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single_blog">
                            <div class="media">
                                <div class="media-body align-self-center">
                                    <p><a href="#">healthy food</a></p>
                                    <a href="blog.html">
                                        <h5 class="mt-0"> To greater divide day hath fly moved was </h5>
                                    </a>
                                    <ul class="list-unstyled">
                                        <li><a href=""> <span class="flaticon-calendar"></span> </a> May 10, 2019</li>
                                        <li><a href=""> <span class="flaticon-comment"></span> </a> 1 comments</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single_blog">
                            <div class="media">
                                <div class="media-body align-self-center">
                                    <p><a href="#">healthy food</a></p>
                                    <a href="blog.html">
                                        <h5 class="mt-0"> That likeness isn't air earth seas had cattle </h5>
                                    </a>
                                    <ul class="list-unstyled">
                                        <li><a href=""> <span class="flaticon-calendar"></span> </a> May 10, 2019</li>
                                        <li><a href=""> <span class="flaticon-comment"></span> </a> 1 comments</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::blog_part end::-->

    <!--::our client part start::-->
    <section class="client_part padding_bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <p>OUr Client</p>
                        <h2>Worldwide Partners</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="client_logo owl-carousel">
                        <div class="single_client_logo">
                            <img src="img/client_logo/Logo_1.png" alt="">
                        </div>
                        <div class="single_client_logo">
                            <img src="img/client_logo/Logo_2.png" alt="">
                        </div>
                        <div class="single_client_logo">
                            <img src="img/client_logo/Logo_3.png" alt="">
                        </div>
                        <div class="single_client_logo">
                            <img src="img/client_logo/Logo_4.png" alt="">
                        </div>
                        <div class="single_client_logo">
                            <img src="img/client_logo/Logo_5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::our client part end::-->

    <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget footer_1">
                        <a href="index.html"> <img src="img/logo.png" alt=""> </a>
                        <p>But when shot real her. Chamber her one visite removal six
                             sending himself boys scot band exquisite existend anilas Give,
                             that likeness do isn't air earth seas had cattle tree. Give, that
                             likeness isn't air earth seas had
                            </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Newsletter</h4>
                        <p>Stay updated with our latest trends Seed heaven so said place winged over given forth fruit.
                        </p>
                        <div class="form-wrap" id="mc_embed_signup">
                            <form target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="form-inline">
                                <input class="form-control" name="EMAIL" placeholder="Your Email Address"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
                                    required="" type="email">
                                <button class="btn btn-default text-uppercase"><i class="ti-angle-right"></i></button>
                                <div style="position: absolute; left: -5000px;">
                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                        type="text">
                                </div>

                                <div class="info"></div>
                            </form>
                        </div>
                        <div class="social_icon">
                            <a href="#"> <i class="ti-facebook"></i> </a>
                            <a href="#"> <i class="ti-twitter-alt"></i> </a>
                            <a href="#"> <i class="ti-instagram"></i> </a>
                            <a href="#"> <i class="ti-skype"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Contact us</h4>
                        <p>4361 Morningview Lane Artland , Pall Street
                                Latimer, IA 50452 / 23654</p>
                        <div class="contact_info">
                            <p><span class="ti-mobile"></span> +2 36 265 (8060)</p>
                            <p><span class="ti-email"></span>info@colorlib.com </p>
                            <p><span class="ti-world"></span>ariclawyerfirm.com </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->

    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.smooth-scroll.min.js"></script>
    <!-- swiper js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- swiper js -->
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <!-- contact js -->
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/contact.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>

</body>

</html>
