@extends('layout')

@section('header')

    <header class="main_menu home_menu menu_fixed animated fadeInDown" style="width: 100%;
    background-color: rgba(13,16,29,0.8);"/>


@endsection

@section('content')
<!-- feature_part start-->
<section id="app" class="CreateCampaign" style="padding-top: 150px;padding-bottom: 120px">

    <new-campaign-section :auth-user="{{auth()->user() ? auth()->user():'{}' }}" :categories="{{$categories}}" :wanted-Project="{{$project ? $project:'{}'}}" :Selected-Section="{{$section}}" ></new-campaign-section>

</section>
<!-- feature_part start-->
@endsection
