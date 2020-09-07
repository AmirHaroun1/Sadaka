@extends('layout')

@section('header')

    <header class="main_menu home_menu menu_fixed animated fadeInDown" style="width: 100%;
    background-color: rgba(13,16,29,0.8);"/>


@endsection

@section('content')
    <section id="app" class="EditPersonalInfo section_padding" >

    <edit-profile :user="{{auth()->user()}}" inline-template>
            <div>
                <!-- Edit Personal Info start-->
                        <div class="container pt-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="font-weight-bold float-right">أعداد بيانات الحساب</h3>

                                </div>
                                <div class="col-md-12">
                                    @if(session()->has('Edited-Successfully'))
                                        <div class="alert alert-success float-right">
                                            {{ session()->get('Edited-Successfully') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="container form-group pt-4">
                            <form class="form-group" method="post" action="{{route('user.update')}}" enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 offset-md-6 mb-4 ">
                                        <label class="float-right">الأسم</label>
                                        <input name="name" required type="text" class="form-control " value="{{auth()->user()->name}}">
                                        @error('name')
                                        <div class="error text-danger float-right">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 col-sm-12 text-center">
                                        <img v-if="ProfileImage" height = "120px" :src="ProfileImage">
                                        <img v-else height = "120px" src="{{auth()->user()->photo}}">
                                            <br>
                                        <input @change="onImageChange" type="file" name="image" style="display: none" ref="image-ref" id="imageInput" >
                                        <a @click="uploadImage" class="btn btn-outline-info btn_1 mt-4" style="cursor: pointer;">أختر صورة</a>
                                        <a v-if="ProfileImage" @click="ProfileImage = null" class="btn btn-outline-info btn_4 mt-4" style="cursor: pointer;background-color: red;color: white">حذف</a>
                                        @error('profileImage')
                                        <div class="error text-danger text-center mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-12 offset-md-2 mb-4">
                                        <label class="float-right">
                                            رقم الهاتف

                                            <span v-if="!IsValidPhone" class="text-danger">رقم الهاتف يجب أن يبدأ بـ 01</span>

                                            <span v-if="!IsValidPhone" class="text-danger">
                                                |
                                                رقم الهاتف يجب أن يتكون من
                                                11
                                                رقم
                                            </span>

                                        </label>

                                        <input v-model="phone" id="phone" name="phone" required type="text" class="form-control" value="{{auth()->user()->phone}}">
                                        @error('phone')
                                        <div class="error text-danger float-right">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 offset-md-6 mb-4 ">
                                        <label class="float-right">البريد الألكترونى</label>
                                        <input required name="email" type="text" class="form-control " value="{{auth()->user()->email}}">
                                        @error('email')
                                        <div class="error text-danger float-right">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 offset-md-6 text-center">
                                        <button type="submit" class="btn_1 text-white bg-green " href="http://sadaka/CreateNewCampaign" style="background-color:  #00c424 ;cursor: pointer" >حفظ البيانات</button>
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
                                        <input required v-model="password" name="password" type="password" class="form-control">
                                        @error('password')
                                        <div class="error text-danger float-right">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-12 mt-4 offset-md-6">
                                        <label class="float-right">
                                            تأكيد كلمة السر
                                            <span v-if="!IsValidPassword && password_confirmation != '' " class="text-danger">غير مطابق</span>

                                        </label>
                                        <input required v-model="password_confirmation" name="password_confirmation" type="password" class="form-control">
                                        @error('password_confirmation')
                                        <div class="error text-danger float-right">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 col-sm-12 offset-md-6 text-center mt-4 ">
                                        <button type="submit" class="btn_1 text-white bg-green " href="http://sadaka/CreateNewCampaign" style="background-color:  #00c424 ;cursor: pointer" >حفظ كلمة السر</button>
                                    </div>
                                </div>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </form>
                        </div>
                <!-- Edit Personal Info End-->
            </div>
        </edit-profile>
    </section>

@endsection
