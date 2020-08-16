<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Remember Them</title>
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
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">

</head>

<div>
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
                                        {{auth()->user()->name}}
                                        <img height="30px" width="30px" class="rounded-circle" src="{{auth()->user()->photo}}">
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="team.html">profile</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>

                                    @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('register')}}">اشتراك</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('login')}}" style="border-right: 1px white dashed">تسجيل دخول</a>
                                    </li>
                                @endauth

                                <li class="nav-item">
                                    <a class="nav-link" href="#">كيف نعمل</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">اكتشف & تبرع</a>
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
    @section('content')
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

    <div id="app">

    <campaign-section></campaign-section>

    </div>

    <!-- Numbers part start-->

        <section class="intro_video_bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4 col-lg-4">
                        <div class="intro_video_iner text-center">
                            <img src="images/TotalDonors.svg">
                            <h2 class="mt-4">
                                عدد المتبرعين
                                <br>
                                {{$projects->TotalDonors}}
                                </h2>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="intro_video_iner text-center">
                            <img src="images/TotalCampagins.svg">
                            <h2 class="mt-4">
                                الحملات القائمة
                                <br>
                                {{$projects->TotalCampaigns}}
                                </h2>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-4">
                        <div class="intro_video_iner text-center">
                            <img src="images/TotalAmount.svg">
                            <h2 class="mt-4">
                                تم تمويلهم
                                <br>
                                {{$projects->TotalDonations}}
                            </h2>
                        </div>
                    </div>
                    <a href="#" class="btn_2 font-weight-bold card-header">أكتشف كيف نعمل</a>
                </div>
            </div>
        </section>
    <!-- Numbers part Ends -->

        <!-- How it Works start-->
            <section class="HowItWorks section_padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h3 class="widget_title greenText  text-center">تابع التبرعات</h3>
                            <ul class="list-group">
                                <li class="list-group-item float-right">تابع تبرعات الحملة لحظياً
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h3 class="widget_title greenText text-center">أنشر الحملة</h3>
                            <ul class="list-group">
                                <li class="list-group-item float-right">ارسل رابط الحملة شخصياً لمعارف وأصدقاء المتوفى عن طريق وسائل التواصل الاجتماعي</li>
                                <li class="list-group-item float-right">انشر رابط الحملة على وسائل التواصل الاجتماعي</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h3 class="widget_title greenText  text-center">ابدأ حملة تبرع</h3>
                            <ul class="list-group">
                                <li class="list-group-item float-right">حدد مشروع التبرع من المشروعات المعروضة على الموقع من قبل المؤسسات الشريكة لتوجه تبرعات الحملة إليه</li>
                                <li class="list-group-item float-right">ادخل بيانات المتوفى وصورة شخصية</li>
                                <li class="list-group-item float-right">أضف بياناتك لتتمكن من متابعة الحملة</li>
                            </ul>
                        </div>



                    </div>
                </div>
            </section>
        <!-- How it Works Ends -->

    @show





    <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between"  style="color: white">
                <div class="col-md-8 ">
                    <div class="single-footer-widget footer_1">
                        <a href="index.html"> <img src="img/favicon.png" alt=""> </a>
                        <p>But when shot real her. Chamber her one visite removal six
                             sending himself boys scot band exquisite existend anilas Give,
                             that likeness do isn't air earth seas had cattle tree. Give, that
                             likeness isn't air earth seas had
                            </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="single-footer-widget footer_2">
                        <div class="contact_info float-right">
                            <p>كيف نعمل</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="single-footer-widget footer_2">
                        <div class="contact_info float-right">
                            <p> أنشئ حملة جديدة</p>
                            <p>تبرع لحملات قائمة</p>
                            <p>من نحن</p>
                            <p>اتصل بنا</p>
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
    <script type="text/javascript">


    </script>

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

    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>
