@extends('layout')

@section('header')

    <header class="main_menu home_menu menu_fixed animated fadeInDown" style="width: 100%;
    background-color: rgba(13,16,29,0.8);"/>


@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (Session::has('failed'))
                    <div class="alert alert-danger alert-block pb-4" style="margin-top: 130px">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong class="float-right">{{ Session::get('failed') }}</strong>
                    </div>
                    @elseif(Session::has('success'))
                    <div class="alert alert-success alert-block pb-4" style="margin-top: 130px">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong class="float-right">{{ Session::get('success') }}</strong>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div id="app">
    <!-- Campaign Profile Info start-->
        <campaign-profile  :campaign="{{$campaign}}" :is-auth="{{json_encode(Auth::check())}}"  ></campaign-profile>
    <!-- Campaign Profile Info start-->
    </div>

@endsection
