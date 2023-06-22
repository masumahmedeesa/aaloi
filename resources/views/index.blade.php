@extends('layouts.originalLayout')

@section('insideHead')

    <link rel="stylesheet" href="{{asset('css/navFooter.css')}}" />
    <link rel="stylesheet" href="{{asset('css/indexed.css')}}" />

{{--    <link rel="stylesheet" href="{{asset('css/style.css')}}" />--}}
{{--    <link rel="stylesheet" href="css/Texa/style.css" />--}}
{{--    <link rel="stylesheet" href="css/Interior/main.css" />--}}
{{--    <link rel="stylesheet" href="{{asset('css/Construction/main.css')}}"/>--}}
{{--    <link rel="stylesheet" href="{{asset('css/sparsh/style.css')}}" />--}}

@endsection

@section('system')

    <section class="banner_part">
        <div class="container">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h1>We Guide you</h1>
                            <h2>to build your dream</h2>
                            <h2>project, building or structure</h2>
                        </div>
                    </div>
        </div>
    </section>

    
    <section class="feature-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12 pb-40 header-text text-center">
                    <h1 class="text-white">Features that Made us Unique</h1>
                    <!-- <p class="text-white">
                        Who are in extremely love with eco friendly system.
                    </p> -->
                </div>
            </div>
            <div class="row">
                <!-- <div class="col-lg-4 col-md-6">
                    <div class="single-feature">
                        <a href="#" class="title d-flex flex-row align-items-center">
                            <span class="lnr lnr-user"></span>
                            <h4> Well-known Farms</h4>
                        </a>
                        <p>
                            Computer users and programmers have become so accustomed to
                            using Windows, even for the changing.
                        </p>
                    </div>
                </div> -->
                <!-- <div class="col-lg-4 col-md-6">
                    <div class="single-feature">
                        <a href="#" class="title d-flex flex-row align-items-center">
                            <span class="lnr lnr-license"></span>
                            <h4>Professional Service</h4>
                        </a>
                        <p>
                            Finding the perfect learning tool for Flash is a daunting task
                            to any novice web developer. One can find help.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature">
                        <a href="#" class="title d-flex flex-row align-items-center">
                            <span class="lnr lnr-phone"></span>
                            <h4>Great Support</h4>
                        </a>
                        <p>
                            While most people enjoy casino ambling, sports betting, lottery
                            and bingo playing for the fun and excitement.
                        </p>
                    </div>
                </div> -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature">
                        <img class="conversion" src="img/f4.png" alt="" />
                        <h4 class="pt-20 pb-10">Special Services</h4>
                        <p>
                        For your project, we interact with professional and experienced architects and civil engineers. They are both highly qualified and licensed engineers and designers. They plan, design, and supervise the operation and maintenance of building infrastructure and services in the built environment.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-feature">
                        <img src="img/f2.png" alt="" />
                        <h4 class="pt-20 pb-10">Excellent Support</h4>
                        <p>
                        Our services always aim to respond to their clients as soon as possible. We improve customer service by communicating to them and offering a smoother, longer service experience. In addition, we have 24/7 support to our potential clients.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature">
                            <img src="img/f3.png" alt="" />
                            <h4 class="pt-20 pb-10">Technical Expertise</h4>
                        <p>
                        Firm’s engineers and architects have a greater knowledge of advanced software and technology for design philosophy. They are practical and mostly implement to technological, material, mathematical or scientific activities. Firm’s geotechnical and surveying firm has a technological advantage. They are enriched by a modernized machine and equipment.
                        </p>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- feature section end -->



    <!-- <section class="blog_part">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">T R E N D I N G</h1>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">

            </div>
        </div>
    </section>  -->

    <section class="blog_part">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 mb-4 mb-xl-0">
                    <div class="media align-items-center overview__single">
              <span class="overview__single__icon"
              ><i class="ti-crown"></i
                  ></span>
                        <div class="media-body">
                            <h3>0+</h3>
                            <h3 style="font-size:20px; font-weight:200; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;"> All Projects</h3>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 mb-4 mb-xl-0">
                    <div class="media align-items-center overview__single">
              <span class="overview__single__icon"
              ><i class="ti-face-smile"></i
                  ></span>
                        <div class="media-body">
                            <h3>0+</h3>
                            <h3 style="font-size:20px; font-weight:200; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;"> Projects Done</h3>
                        </div>
                    </div>
                </div>


                <div class="col-sm-4 mb-4 mb-xl-0">
                    <div class="media align-items-center overview__single">
              <span class="overview__single__icon"
              ><i class="ti-gift"></i
                  ></span>
                        <div class="media-body">
                            <h3>0+</h3>
                            <h3 style="font-size:20px; font-weight:200; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;"> Project Ongoing</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start brand Area -->
    <!-- <section>
        <div class="container">
            <div class="row logo-wrap">
                <a class="col single-img" href="#">
                    <img class="d-block mx-auto" src="img/l1.png" alt="">
                </a>
                <a class="col single-img" href="#">
                    <img class="d-block mx-auto" src="img/l2.png" alt="">
                </a>
                <a class="col single-img" href="#">
                    <img class="d-block mx-auto" src="img/l3.png" alt="">
                </a>
                <a class="col single-img" href="#">
                    <img class="d-block mx-auto" src="img/l4.png" alt="">
                </a>
                <a class="col single-img" href="#">
                    <img class="d-block mx-auto" src="img/l5.png" alt="">
                </a>
            </div>
        </div>
    </section> -->
    <!-- End brand Area -->

@endsection

{{--@section('queryQuota')--}}
{{--    <script type="text/javascript" src="{{asset('js/project.js')}}">--}}
{{--    </script>--}}
{{--@endsection--}}
