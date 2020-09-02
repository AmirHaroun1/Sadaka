@extends('layout')

@section('header')

    <header class="main_menu home_menu menu_fixed animated fadeInDown" style="width: 100%;
    background-color: rgba(13,16,29,0.8);"/>


@endsection

@section('content')

    <!-- Edit Personal Info start-->
        <section class="EditPersonalInfo section_padding">
            <div class="container pt-4">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="font-weight-bold float-right">أعداد بيانات الحساب</h3>
                    </div>
                </div>
            </div>
            <div class="container form-group pt-4">
                <form class="form-group" method="post" action="{{route('user.update')}}">
                    @csrf
                    @method('patch')
                    <div class="row">
                        <div class="col-md-6 col-sm-12 offset-md-6 mb-4 ">
                            <label class="float-right">الأسم</label>
                            <input name="name" required type="text" class="form-control " value="{{auth()->user()->name}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 col-sm-12 text-center">
                            <img height = "120px" src="{{auth()->user()->photo}}">

                            <input @change="" name="profileImage" style="display: none" ref="image-ref" id="imageInput"  type="file">
                            <a @click="" class="btn btn-outline-info btn_1" style="cursor: pointer;">أختر صورة</a>
                        </div>
                        <div class="col-md-6 col-sm-12 offset-md-3 mb-4">
                            <label class="float-right">رقم الهاتف</label>
                            <input name="phone" required type="text" class="form-control" value="{{auth()->user()->phone}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12 offset-md-6 mb-4 ">
                            <label class="float-right">البريد الألكترونى</label>
                            <input required name="email" type="text" class="form-control " value="{{auth()->user()->email}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12 offset-md-6 text-center">
                            <button type="submit" class="btn_1 text-white bg-green " href="http://sadaka/CreateNewCampaign" style="background-color:  #00c424 ;" >حفظ البيانات</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="container pt-5">
                <div class="row ">
                    <div class="col-md-12">
                        <h3 class="font-weight-bold float-right">تغيير كلمة السر</h3>
                    </div>
                </div>
                <form class="form-group" method="post" action="{{route('user.update')}}">
                    @method('patch')
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-sm-12 mt-4 offset-md-6">
                            <label class="float-right">كلمة السر</label>
                            <input name="password" type="password" class="form-control">
                        </div>
                        <div class="col-md-6 col-sm-12 mt-4 offset-md-6">
                            <label class="float-right"> تأكيد كلمة السر</label>
                            <input name="password_confirmation" type="password" class="form-control">
                        </div>

                        <div class="col-md-6 col-sm-12 offset-md-6 text-center mt-4 ">
                            <button type="submit" class="btn_1 text-white bg-green " href="http://sadaka/CreateNewCampaign" style="background-color:  #00c424 ;" >حفظ كلمة السر</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    <!-- Edit Personal Info End-->

@endsection
