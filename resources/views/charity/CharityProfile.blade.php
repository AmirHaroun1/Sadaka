@extends('layout')

@section('header')

    <header class="main_menu home_menu menu_fixed animated fadeInDown" style="width: 100%;
    background-color: rgba(13,16,29,0.8);"/>


@endsection

@section('content')

    <!-- Charity Info start-->
    <section class="Charity section_padding">
        <div class="container pt-5">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="font-weight-bold float-right">
                        جمعية
                        <span class="greenText">
                            {{$charity->name}}
                        </span>
                    </h3>
                    <br>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 pt-5 ">
                    <h3 class="font-weight-bold float-right py-3 ">
                        عدد المشاريع الخيرية التابعة للجمعية :
                        <span class="greenText">
                            {{$charity->projects_count}}
                        </span>
                    </h3>

                    <br>
                    <br>
                    <hr style="border: dashed 1px rgba(0,0,0,.1) ; ">
                    <h3 class="font-weight-bold float-right py-3 ">
                        عدد الحملات الخيرية التابعة للمشاريع :
                        <span class="greenText">
                            {{$charity->campaigns_count}}
                        </span>
                    </h3>
                </div>
                <div class="col-md-2  pt-4 float-right ">
                    <img class=" float-right charity-img" src="{{asset($charity->image)}}">
                </div>

                <div class="form-group col-md-12 mt-5 text-center">
                    <a href="#CharitiesProject" class="btn btn-outline-info btn_1 " style="cursor: pointer;">المشاريع الخيرية</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Charity Info End-->

    <!-- Projects To Charity start-->
    <section id="CharitiesProject" class="charities py-4">
        <div class="container pt-5">
            <div class="row">
                @foreach($charity->projects as $project)
                    <div class="col-md-4 p-3">
                        <a href="{{route('campaign.create',['project'=>$project->name ,  'section'=>3 ])}}">
                            <div class="border p-4 text-center text-white  " style="cursor: pointer; background-color: rgb(0, 196, 36);">
                                    <h5 class="text-white py-2">{{$project->name}}</h5>


                                        <h3 class="text-white">
                                            {{$project->objective}}
                                            ج.م
                                        </h3>
                            </div>
                        </a>

                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Charity Info End-->

@endsection
