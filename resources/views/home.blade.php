@extends('layout')
@section('content')
    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-5">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h1>يرحلون وتبقى ذكراهم</h1>

                            <a class="btn_1 green" href="{{route('campaign.create')}}" style="background-color:  #00c424 ; font-size: 16px;color: white">ابدأ حملة تبرع</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <div id="app">

    <campaign-section id="FeaturedCampaignsSection"></campaign-section>

    </div>

    <!-- Charities start-->
    <section id="Charities" class="charities p-4">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12">
                    <h2 class="text-center">الجمعيات الخيرية</h2>
                </div>
            </div>
            <div class="row">

                @foreach($charities as $charity)
                    <div class="col-md-3 col-sm-12 text-center py-3 pb-4">
                        <a href="{{route('charity.show',$charity->name)}}">
                            <img class="text-center charity-img" style="height: 170px;width: 170px" src="{{$charity->image}}">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Charities Ends -->

    <!-- Numbers part start-->
        <section class="intro_video_bg">
            <div class="container">
                <div class="row justify-content-center ">
                    <div class="col-md-4 col-sm-12 col-lg-4">
                        <div class="intro_video_iner text-center">
                            <img src="images/TotalDonors.svg">
                            <h2 class="mt-4">
                                عدد المتبرعين
                                <br>
                                {{$TotalDonors}}
                                </h2>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-lg-4">
                        <div class="intro_video_iner text-center">
                            <img src="images/TotalCampagins.svg">
                            <h2 class="mt-4">
                                الحملات القائمة
                                <br>
                                {{$TotalCampaigns}}
                                </h2>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 col-lg-4">
                        <div class="intro_video_iner text-center">
                            <img src="images/TotalAmount.svg">
                            <h2 class="mt-4">
                                تم تمويلهم
                                <br>
                                {{$TotalDonations}}
                            </h2>
                        </div>
                    </div>
                    <a  href="/#HowItWorksSection" class="btn_2 font-weight-bold card-header">أكتشف كيف نعمل</a>
                </div>
            </div>
        </section>
    <!-- Numbers part Ends -->

    <!-- How it Works start-->
        <section id="HowItWorksSection" class="HowItWorks section_padding">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-12">
                        <ul class="list">
                            <li class="list-group-item p-4 text-center">
                                <h3>                                    تتم عملية الدفع الإلكتروني عن طريق صفحة الدفع البنكية الخاصة بالمؤسسات الخيرية ولا يتحمل موقع "تذكرهم" مسؤولية جمع أموال التبرع من المتبرعين
                                </h3>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <h3 class="widget_title greenText  text-center">ابدأ حملة تبرع</h3>
                        <ul class="list-group">
                            <li class="list-group-item float-right">حدد مشروع التبرع من المشروعات المعروضة على الموقع من قبل المؤسسات الشريكة لتوجه تبرعات الحملة إليه</li>
                            <li class="list-group-item float-right">ادخل بيانات المتوفى وصورة شخصية</li>
                            <li class="list-group-item float-right">أضف بياناتك لتتمكن من متابعة الحملة</li>
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
                        <h3 class="widget_title greenText  text-center">تابع التبرعات</h3>
                        <ul class="list-group">
                            <li class="list-group-item float-right">تابع تبرعات الحملة لحظياً
                            </li>
                        </ul>
                    </div>



                </div>
            </div>
        </section>
    <!-- How it Works Ends -->

    @endsection
