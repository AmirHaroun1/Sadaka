@extends('layout')

@section('header')

    <header class="main_menu home_menu menu_fixed animated fadeInDown" style="width: 100%;
    background-color: rgba(13,16,29,0.8);"/>


@endsection

@section('content')
    <!-- Personal Info start-->
    <section class="ProfilePersonalInfo section_padding">
        <div class="container pt-5">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="font-weight-bold float-right">حسابى</h3>
                    <br>
                    <hr>
                </div>
            </div>
            <div class="row">

                <div class="col-md-4 text-white">
                    <a class="btn_1 font-weight-bold green" href="{{'#'}}">تعديل بيانات الحساب</a>
                </div>

                <div class="col-md-6 pt-5 ">
                    <h2 class="font-weight-bold float-right ">{{$user->name}}</h2>
                    <br>
                    <br>
                    <br>
                    <h5 class="font-weight-bold float-right p-4 ">

                            حملات قمت انشائها
                        <span style="color: green;font-size: 20px">
                            {{$user->campaigns_count}}
                            </span>
                        <span  class="px-3" class="font-weight-bold" style="font-size: 24px">|</span>

                        تبرعات
                        <span style="color: green;font-size: 20px">
                            {{$user->donations_count}}
                            </span>
                    </h5>
                </div>

                <div class="col-md-2  pt-5 float-right ">
                    <img height="150px" class="rounded-circle float-right" src="{{$user->Photo}}">
                </div>
            </div>
        </div>
    </section>
    <!-- Personal Info start-->
    <!-- My Created Campaigns start-->
    <section id="app" class="CreatedCampaigns pb-5" style="background-color: #FBF8F6">
        <div class="container pt-5">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="font-weight-bold float-right">حملات قمت بإنشائها
                    </h3>
                </div>
            </div>
            <div class="row">
                @forelse($myCampaigns as $campaign)
                    <campaign-card :campaign="{{$campaign}}" :key="{{$campaign->id}}" ></campaign-card>
                    @empty
                    <div class="col-md-12 text-center">
                        <p>لا توجد حملات</p>
                        <a class="btn_2 green text-center" href="http://sadaka/CreateNewCampaign">ابدأ حملة تبرع</a>
                    </div>
                    @endforelse
            </div>
        </div>
    </section>
    <!-- My Created start-->
    <!-- My Donations Campaigns start-->
    <section id="app2" class="CreatedCampaigns pb-5" >
        <div class="container pt-5">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="font-weight-bold float-right">تبرعاتي
                    </h3>
                </div>
            </div>
            <div class="row">
                @forelse($myDonations as $campaign)
                    <campaign-card :campaign="{{$campaign}}" :key="{{$campaign->id}}" :donation-amount="{{$campaign->pivot->amount}}" ></campaign-card>
                    @empty
                    <div class="col-md-12 text-center">
                        <p>لا توجد حملات</p>
                        <a class="btn_2 green text-center" href="http://sadaka/CreateNewCampaign">ابدأ حملة تبرع</a>
                    </div>
                    @endforelse
            </div>
        </div>
    </section>
    <!--My Donations start-->
@endsection
