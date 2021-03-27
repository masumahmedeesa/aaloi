@extends('layouts.originalLayout')

@section('insideHead')
    <link rel="stylesheet" href="{{asset('css/navFooter.css')}}" />
    <link rel="stylesheet" href="{{asset('css/farmList.css')}}" />
    <!-- <link rel="stylesheet" href="css/style.css"/> -->
    <!-- <link rel="stylesheet" href="css/Texa/style.css"/> -->
    <!-- <link rel="stylesheet" href="css/balita/style.css"/> -->
@endsection

@section('system')

    <!-- breadcrumb start-->
    <section class="special"></section>
    <!-- <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2 style="font-size: 35px; font-family:Ubuntu;">Prominent ARCHITECTURAL | DESIGN Farms</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- breadcrumb start-->

    <!-- texa start -->
    <div class="m-4">
    <h4 style="text-align: center;">Prominent Farms</h4>
    </div>
    <!--================ Start Trip Package Area =================-->
    <section class="package-area">
        
        <div class="mt-5"></div>
        <div class="container">
            
            {{-- <div class="row d-flex justify-content-center">
                <div class="col-lg-12">
                    <div class="main_title">
                        <p>We’re Offering these</p>
                        <h1>Prominent ARCHITECTURE | Design Farms</h1>
                        <span class="title-widget-bg"></span>
                    </div>
                </div>
            </div> --}}


            {{-- <div class="row">
                @if(count($farms)>0)
                @foreach($farms as $farm)

                <div class="col-lg-6 col-md-8">
                    <div class="single-package">
                        <div class="thumb">
                            <img class="img-fluid" style="height:290px;" src="img/video_popup.png" alt="">
                        </div>
                    <p class="date"><span>{{$farm->farmName}}</span></p>
                        <div class="meta-top d-flex">
                            <p style="font-size:12px;"><span class="fa fa-location-arrow"></span> Amir Complex, Varsity
                                Gate, Sylhet</p>
                        </div>
                        <h4>Consultancy Farm | DESIGN <br> Starts at 20,000 BDT</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consecter adipisicing elit, sed do eiusmod tempor incididunt.
                        </p>
                        <a href="/farm" class="btn btn-sm btn-warning mt-3">Read More</a>
                    </div>
                </div>

                @endforeach
                {{$farms->links()}}
                @else
                <h1> No Company Inlcluded yet !</h1>

                @endif

        </div> --}}

        {{-- balita start --}}

        @if(count($farms)>0)
        @foreach($farms as $farm)

        <div class="row">
            <div class="col-12">
              <div class="post-entry-horzontal shadow">
                <a href="/farms/{{$farm->farmId}}">
                  <div class="image element-animate" data-animate-effect="fadeIn" style="background-image: url(storage/farm_images/{{$farm->farmPhoto}});"></div>
                  <span class="text">
                    <div class="d-flex justify-content-between">
                            <span class="category">{{$farm->farmType}}</span>
                            <h5> Est : {{$farm->farmEstd}} </h5>
                    </div>
                    <h3 class="mt-1 text-info">{{$farm->farmName}}</h3>
                    <h6>
                        According to Vitruvius, the architect should strive to fulfill each of these three attributes as well as possible. Leon Battista Alberti, who elaborates on the ideas of Vitruvius.<br>
                        <b>Phone </b>{{$farm->farmPhone}} <br>
                        <b>Email </b>{{$farm->farmEmail}} <br>
                        <b>Website </b>{{$farm->farmWebsite}}<br>
                        <b>Availability </b>Yes
                    </h6>
                    <span class="fa fa-location-arrow text-secondary"> {{$farm->farmContactInformation}}</span> 
                    @if(Auth::guard('admin')->check())
                    <div class="d-flex p-1">
                        <a href="/farms/{{$farm->farmId}}/edit" class="btn btn-primary btn-sm">EDIT</a>
                        {{Form::open(['action' => ['FarmsController@destroy',$farm->farmId], 'method' => 'POST']) }}
                        {{Form::hidden('_method','DELETE')}}
                        {{Form::submit('D E L E T E',['class' => 'ml-2 btn btn-danger btn-sm'])}}
                        {{ Form::close() }}
                    </div>
                    @endif
                  </span>
                </a>
              </div>
            </div>
        </div>

        @endforeach
        {{$farms->links()}}
        @else
        <h1> No Company Inlcluded yet !</h1>

        @endif

    </div>

        {{-- balia end --}}



    </section>
    <!--================ End Trip Package Area =================-->

    <!-- texa end -->

@endsection


@section('queryQuota')
    <script type="text/javascript" src="{{asset('js/project.js')}}">
    </script>
@endsection
