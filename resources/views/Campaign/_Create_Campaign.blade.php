@extends('layout')

@section('header')

    <header class="main_menu home_menu menu_fixed animated fadeInDown" style="width: 100%;
    background-color: rgba(13,16,29,0.8);"/>

    @endsection

@section('content')
<!-- feature_part start-->
<section id="app" class="CreateCampaign section_padding">

    <new-campaign-section></new-campaign-section>

</section>
<!-- feature_part start-->
@endsection
