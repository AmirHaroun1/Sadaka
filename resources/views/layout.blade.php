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
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>

<body>
<!--::header part start::-->
@section('header')
<header class="main_menu home_menu">
    @show
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light ">

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
                                        <a class="dropdown-item" href="{{route('user.show')}}">profile</a>
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
                                <a class="btn_1 green" href="{{route('campaign.create')}}" style="background-color:  #00c424 ; font-size: 16px">ابدأ حملة تبرع</a>
                            </li>
                        </ul>
                    </div>

                    <a class="navbar-brand float-right" href="/">
                        <h1 class="text-white">تذكرهم</h1>
                    </a>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header part end-->

@section('content')

    @show
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

<script src="{{asset('js/jquery-1.12.1.min.js')}}"></script>
<!-- popper js -->
<script src="{{asset('js/popper.min.js')}}"></script>
<!-- bootstrap js -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- easing js -->
<script src="{{asset('js/jquery.magnific-popup.js')}}"></script>
<!-- swiper js -->
<script type="text/javascript">


</script>

<script src="{{asset('js/swiper.min.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script src="{{asset('js/jquery.smooth-scroll.min.js')}}"></script>
<!-- swiper js -->
<script src="{{asset('js/masonry.pkgd.js')}}"></script>
<!-- particles js -->
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
<!-- swiper js -->
<script src="{{asset('js/slick.min.js')}}"></script>
<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('js/waypoints.min.js')}}"></script>
<!-- contact js -->
<script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('js/jquery.form.js')}}"></script>
<script src="{{asset('js/jquery.validate.min.js')}}"></script>
<script src="{{asset('js/mail-script.js')}}"></script>
<script src="{{asset('js/contact.js')}}"></script>


<!-- custom js -->
<script src="{{asset('js/custom.js')}}"></script>

<script src="{{asset('js/app.js')}}"></script>
</body>

</html>
