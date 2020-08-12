
@section('content')
<!-- feature_part start-->
<section class="feature_part top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_tittle float-right">
                    <h2>اختر مشروع لتوجه تبرعات إليه</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <ul id="CreateCampaigns" class="nav nav-pills">

                @foreach($categories as $category)
                    <li class="nav-item">
                        <a href="#{{str_replace(' ', '', $category->name)}}" data-toggle="tab" class="nav-link" style="color: #00c424 ; font-size: 20px">
                            {{$category->name}}
                        </a>
                    </li>
                @endforeach
            </ul>
            <div class="tab-content justify-content-center text-center">

                @foreach($categories as $category)
                    <div class="tab-pane fade show pt-5" id="{{str_replace(' ', '', $category->name)}}">

                        @include('Campaign._Create_Campaign')

                    </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
<!-- feature_part start-->
@endsection
