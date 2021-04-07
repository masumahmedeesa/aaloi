@extends('layouts.originalLayout')

@section('extra')
<!-- <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500" rel="stylesheet" /> -->
<!-- <link href="https://fonts.googleapis.com/css?family=Roboto:300i,400,500" rel="stylesheet" /> -->
<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css" />
@endsection

@section('insideHead')
<link rel="stylesheet" href="{{asset('css/navFooter.css')}}" />
<!-- <link rel="stylesheet" href="{{asset('css/style.css')}}" />  -->
<link rel="stylesheet" href="{{asset('css/onlyFarm.css')}}" />
<!-- <link rel="stylesheet" href="{{asset('css/sparsh/style.css')}}" /> -->
<style type="text/css">
    #map {
      height: 300px;  /* The height is 400 pixels */
      width: 100%;  /* The width is the width of the web page */
     }
    p {
        color: rgba(255, 255, 255, 0.5);
    }

</style>

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
                        <h2>{{$farm->farmName}}</h2>
                        <a>Location : {{$farm->farmContactInformation}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- breadcrumb start-->

<div class="m-4" style="text-align: center;">
    <h2 class="title_man">{{$farm->farmName}}</h2>
    <!-- <b class="location_man">{{$farm->farmContactInformation}}</b> -->
</div>

<!-- sparsh start -->

<section class="about mb-3">
    <div class="container">
        <div class="row">
            <div class="col-md-5 p-3 bg-transparent">
                <div class="about__img text-center text-md-left">
                    <img style="border-radius:10px;height:352px;width:100%;" class="img-fluid"
                        src="/storage/farm_images/{{$farm->farmPhoto}}" alt="" />
                    <a class="about__img__date text-center">
                        <h3>{{$farm->farmEstd}}</h3>
                        <p style="color:blueviolet;">
                            YEARS <br />
                            OF CREATIVITY
                        </p>
                    </a>
                </div>
            </div>
            <div class="col-md-7 p-3">
                <div class="section-intro">
                    <h4 style="font-size:25px;" class="section-intro__title">| About</h4>
                    <div class="section-intro__subtitle mt-4">
                        <div>
                            <span style="color: #f9cc41;">
                            Firm Type
                            </span>
                            <span class="pl-1" style="color: #bbb;">
                            {{$farm->farmType}}
                            </span>
                        </div>
                        <div>
                            <span style="color: #f9cc41;">
                            Founder
                            </span>
                            <span class="pl-1" style="color: #bbb;">
                            {{$farm->farmManager}}
                            </span>
                        </div>
                        
                        @if($farm->farmConsultant != null)
                        <div>
                            <span style="color: #f9cc41;">
                            Consultant
                            </span>
                            <span class="pl-1" style="color: #bbb;">
                            {{$farm->farmConsultant}}
                            </span>
                        </div>
                        @endif

                        @if($farm->farmPhone != null)
                        <div>
                            <span style="color: #f9cc41;">
                            Phone
                            </span>
                            <span class="pl-1" style="color: #bbb;">
                            {{$farm->farmPhone}}
                            </span>
                        </div>
                        @endif

                        @if($farm->farmEmail != null)
                        <div>
                            <span style="color: #f9cc41;">
                            Email
                            </span>
                            <span class="pl-1" style="color: #bbb;">
                            {{$farm->farmEmail}}
                            </span>
                        </div>
                        @endif

                        <div>
                            <span style="color: #f9cc41;">
                            Estd
                            </span>
                            <span class="pl-1" style="color: #bbb;">
                            {{$farm->farmEstd}}
                            </span>
                        </div>

                        @if($farm->farmWebsite != null)
                        <div>
                            <span style="color: #f9cc41;">
                            Website
                            </span>
                            <span class="pl-1" style="color: #bbb;">
                            {{$farm->farmWebsite}}
                            </span>
                        </div>
                        @endif

                        @if($farm->farmContactInformation != null)
                        <div>
                            <span style="color: #f9cc41;">
                            Address
                            </span>
                            <span class="pl-1" style="color: #bbb;">
                            {{$farm->farmContactInformation}}
                            </span>
                        </div>
                        @endif
                    </div>
                </div>
                <!-- <a class="btn btn--rightBorder" href="#">Read More</a> -->
            </div>
        </div>
    </div>
</section>

<section class="overview">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 mb-4 mb-xl-0">
                <div class="media align-items-center overview__single">
                    <span class="overview__single__icon"><i class="ti-crown"></i></span>
                    <div class="media-body">
                        <h3>{{$farm->farmTasks}}+</h3>
                        <h3
                            style="font-size:20px; font-weight:200; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
                            All Projects</h3>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 mb-4 mb-xl-0">
                <div class="media align-items-center overview__single">
                    <span class="overview__single__icon"><i class="ti-face-smile"></i></span>
                    <div class="media-body">
                        <h3>{{$farm->farmTasks - $farm->farmTasksOn }}+</h3>
                        <h3
                            style="font-size:20px; font-weight:200; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
                            Projects Done</h3>
                    </div>
                </div>
            </div>

            <!-- ID 01 -->

            <div class="col-sm-4 mb-4 mb-xl-0">
                <div class="media align-items-center overview__single">
                    <span class="overview__single__icon"><i class="ti-gift"></i></span>
                    <div class="media-body">
                        <h3>{{$farm->farmTasksOn}}+</h3>
                        <h3
                            style="font-size:20px; font-weight:200; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
                            Project Ongoing</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="portfolio section-margin">
    <div class="container">
        <div class="section-intro">
            <h4 style="font-size:25px;" class="section-intro__title">| PORTFOLIO</h4>
            <h2 class="section-intro__subtitle bottom-border">
                Latest Completed Projects ({{count($projects)}})
                @if(Auth::guard('admin')->check())
                <a href="/farmNo/{{$farm->farmId}}/addProjects" class="ml-2 btn btn-sm btn-outline-success">A D D</a>
                @endif
            </h2>
        </div>

        @if(count($projects)>0)
        @for($i=0;$i<count($projects);$i=$i+2)
        @if($i+1<count($projects))
        <div class="row align-items-end pb-md-5 mb-4">
            <div class="col-md-7 p-3">
                <div>
                    <img class="img-fluid shadow" style="border-radius:10px; height:330px; width:620px;"
                        src="/storage/project_images/{{$projects[$i]->farmId}}/{{$projects[$i]->projectName}}/{{$projects[$i]->projectPhoto1}}"
                        alt="" />
                </div>
            </div>
            <div class="col-md-5 p-3">
                <h4 class="section-intro__title left-border">{{$projects[$i]->estdDate}}</h4>
                <h2 style="font-size:25px;font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;"
                    class="section-intro__subtitle small">
                    {{$projects[$i]->projectName}}
                </h2>
                <p
                    style="font-size:20px;font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">
                    <b style="font-weight:100;">Client </b>{{$projects[$i]->description}} <br>
                    <b style="font-weight:100;">Location </b>{{$projects[$i]->location}}
                </p>
                <a class="btn btn--rightBorder" href="/projects/{{$projects[$i]->projectId}}">Read More</a>
            </div>
        </div>

    <div class="row align-items-end pb-md-5 mb-4">
        <div class="col-md-5 p-3">
            <h4 class="section-intro__title left-border">{{$projects[$i+1]->estdDate}}</h4>

            <h2 style="font-size:25px;font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;"
                class="section-intro__subtitle small">
                {{$projects[$i+1]->projectName}}
            </h2>
            <p
                style="font-size:20px;font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">
                <b style="font-weight:100;">Client </b>{{$projects[$i+1]->description}} <br>
                <b style="font-weight:100;">Location </b>{{$projects[$i+1]->location}}
            </p>

            <a class="btn btn--rightBorder mt-3" href="/projects/{{$projects[$i+1]->projectId}}">Read More</a>
        </div>
        <div class="col-md-7 p-3">
            <div>
                <img class="img-fluid shadow" style="border-radius:10px; height:330px; width:620px;"
                    src="/storage/project_images/{{$projects[$i+1]->farmId}}/{{$projects[$i+1]->projectName}}/{{$projects[$i+1]->projectPhoto1}}"
                    alt="" />
            </div>
        </div>
    </div>

    @else

    <div class="row align-items-end pb-md-5 mb-4">
        <div class="col-md-7 p-3">
            <div>
                <img style="border-radius:10px;height:330px;width:650px;" class="img-fluid shadow"
                    src="/storage/project_images/{{$projects[$i]->farmId}}/{{$projects[$i]->projectName}}/{{$projects[$i]->projectPhoto1}}"
                    alt="" />
            </div>
        </div>
        <div class="col-md-5 p-3">
            <h4 class="section-intro__title left-border">{{$projects[$i]->estdDate}}</h4>
            <h2 style="font-size:25px;font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;"
                class="section-intro__subtitle small">
                {{$projects[$i]->projectName}}
            </h2>
            <p
                style="font-size:20px;font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">
                <b style="font-weight:100;">Client </b>{{$projects[$i]->description}} <br>
                <b style="font-weight:100;">Location </b>{{$projects[$i]->location}}
            </p>
            <a class="btn btn--rightBorder" href="/projects/{{$projects[$i]->projectId}}">Read More</a>
        </div>
    </div>

    @endif
    @endfor

    <div class="d-flex justify-content-center">
        {{$projects->links()}}
    </div>

    @else
    <h1 style="color:wheat;">No Projects Added Yet ! </h1>
    @endif

    <!-- ID 02 -->

    </div>
</section>


<section class="testimonial section-margin">
    <div class="container">
        <div class="section-intro">
            <h4 style="font-size:25px;" class="section-intro__title">
                MEMBER | TEAM
                @if(Auth::guard('admin')->check())
                <a href="/farmNo/{{$farm->farmId}}/addTeams" class="ml-2 btn btn-sm btn-outline-success">A D D</a>
                @endif
            </h4>
            <h2 style="font-size:20px;font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif"
                class="section-intro__subtitle bottom-border">
                Scroll Right or Left To View All
            </h2>
        </div>

        <div class="owl-carousel owl-theme testimonialCarousel">
            @if(count($teams)>0)
            @foreach($teams as $team)
            <div class="item">
                <div class="media testimonial__slide">
                    @if($team->memberPhoto != null)
                    <img class="mr-4" src="/storage/project_images/{{$team->farmId}}/teamPhoto/{{$team->memberPhoto}}"
                        width="120" height="125" alt="" />
                    @else
                    <img class="mr-4" src="/storage/project_images/grey.png" width="120" height="125" alt="" />
                    @endif
                    <div class="media-body">
                        <blockquote>
                            {!!$team->description!!}
                        </blockquote>
                        <h3>{{$team->memberName}} | {{$team->position}} </h3>
                        <p>{{$team->degree}}
                            @if(Auth::guard('admin')->check())
                            <a href="/teams/{{$team->memberId}}/edit">EDIT</a>
                            {{Form::open(['action' => ['TeamsController@destroy',$team->memberId], 'method' => 'POST']) }}
                            {{Form::hidden('_method','DELETE')}}
                            {{Form::submit('D E L E T E')}}
                            {{ Form::close() }}
                            @endif
                        </p>
                    </div>
                </div>
            </div>

            @endforeach
            @else
            <p style="color:white;"> No Member Included yet !</p>
            @endif

        </div>
    </div>
</section>

<!-- <section class="portfolio mb-5">
    <div style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;"
        class="container">

        <div class="section-intro">
            <h4 style="font-size:25px;" class="section-intro__title">| M A P S</h4>
        </div>

        <div class="row align-items-center pb-md-5 mb-4">
            <div class="col-12 p-3">

                <div style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;"
                    class="section-intro__subtitle small mb-3">
                    Location : Shahjalal University of Science and Technology
                </div>

                <div id="map"></div>

                <script>
                  function initMap() {
                    var uluru = {lat: -25.344, lng: 131.036};
                    var map = new google.maps.Map(
                        document.getElementById('map'), {zoom: 8, center: uluru});
                    var marker = new google.maps.Marker({position: uluru, map: map});
                  }
                </script>

                <script async defer
                  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCLNwKLd-OVkNUmFYLOuRH8BbkhnszeyUY&callback=initMap">
                </script>

            </div>

        </div>

    </div>
</section> -->

<section class="tips tips-bg mb-2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-10">
                <h2 class="section-intro__subtitle">
                    Write us everything you want to say.
                </h2>

                <form action="{{route('comments.store')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                <input type="hidden" name="farmId" class="form-control" value="{{$farm->farmId}}" />
                @if(Auth::guard()->check())
                <input type="hidden" name="userId" class="form-control" value="{{auth()->user()->id}}" />
                @else
                <input type="hidden" name="userId" class="form-control" value="0" />
                @endif
                <textarea id="articleCkeditor" style="color:yellow;" name="commentDesc" placeholder="Write Everything"></textarea>

            </div>
            <div class="col-md-2 mt-2 text-center text-lg-right">
                @if(Auth::guard()->check())
                <button type="submit" class="btn btn-dark btn--leftBorder btn--rightBorder">SEND</button>
                </form>
                @else
                <a class="btn btn-sm btn-dark btn--leftBorder btn--rightBorder">Login First To Send</a>
                @endif

            </div>


        </div>
    </div>
</section>

<!-- sparsh end -->


@endsection


@section('queryQuota')
<!-- <script type="text/javascript" src="{{asset('js/project.js')}}"></script> -->
<script>
    var testimonialCarousel = $(".testimonialCarousel");
    testimonialCarousel.owlCarousel({
        loop: true,
        margin: 50,
        autoplay: true,
        nav: false,
        dots: true,
        smartSpeed: 500,
        responsive: {
            0: {
                items: 1
            },
            1000: {
                items: 2,
                loop: true
            }
        }
    });
</script>
@endsection