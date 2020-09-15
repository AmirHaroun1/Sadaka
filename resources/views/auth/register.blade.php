@extends('layout')
@section('css')
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <!--===============================================================================================-->

@endsection
@section('header')

    <header class="main_menu home_menu menu_fixed animated fadeInDown" style="width: 100%;
    background-color: rgba(13,16,29,0.8);"/>

@endsection
@section('content')
    <section id="app" class="section_padding">
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">

                    <form class="login100-form validate-form p-l-55 p-r-55 p-t-178"  method="POST" action="{{ route('register') }}">
                        @csrf
                        <span class="login100-form-title">
						أشتراك حساب
					</span>
                        <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                            <input class="input100 @error('email') is-invalid @enderror" type="email" name="email" placeholder="البريد الألكترونى" required autocomplete="email" value="{{old('email')}}">
                            <span class="focus-input100"></span>


                        </div>
                        @error('email')
                        <div class="alert alert-danger">
                            <p class="text-sm">
                                {{ $message }}
                            </p>
                        </div>
                        @enderror
                        <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                            <input class="input100 @error('name') is-invalid @enderror" type="text" name="name" placeholder="الأسم" required autocomplete="name" value="{{old('name')}}">
                            <span class="focus-input100"></span>


                        </div>
                        @error('name')
                        <div class="alert alert-danger">
                            <p class="text-sm">
                                {{ $message }}
                            </p>
                        </div>
                        @enderror
                        <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                            <input class="input100 @error('phone') is-invalid @enderror" type="text" name="phone" placeholder="رقم الهاتف" required autocomplete="phone" value="{{old('phone')}}">
                            <span class="focus-input100"></span>
                        </div>
                        @error('phone')
                        <div class="alert alert-danger">
                            <p class="text-sm">
                                {{ $message }}
                            </p>
                        </div>
                        @enderror
                        <div class="wrap-input100 validate-input" data-validate = "Please enter password">
                            <input class="input100 @error('password') is-invalid @enderror" type="password" name="password" placeholder="كلمة المرور" required>
                            <span class="focus-input100"></span>

                        </div>
                        <div class="row pt-3 ">
                            @error('password')
                            <div class="alert alert-danger text-center">
                                <p class="text-sm">
                                    {{ $message }}
                                </p>
                            </div>
                            @enderror
                        </div>
                        <div class="wrap-input100 validate-input" data-validate = "Please enter password">
                            <input class="input100 @error('password_confirmation') is-invalid @enderror" type="password" name="password_confirmation" placeholder="تأكيد كلمة المرور " required>
                            <span class="focus-input100"></span>
                        </div>
                        <div class="row pt-3 ">
                            @error('password_confirmation')
                            <div class="alert col-md-12 alert-danger text-center">
                                <p class="text-sm">
                                    {{ $message }}
                                </p>
                            </div>
                            @enderror
                        </div>
                        <div class="container-login100-form-btn flex-col-c p-t-17 p-b-40">
                            <button class="login100-form-btn font-weight-bold">
                                تسجيل حساب
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </section>
@endsection
