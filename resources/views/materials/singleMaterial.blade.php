@extends('layouts.originalLayout')

@section('extra')
<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css" />
@endsection

@section('insideHead')
<link rel="stylesheet" href="{{asset('css/navFooter.css')}}" />
<link rel="stylesheet" href="{{asset('css/onlyFarm.css')}}" />
<style type="text/css">
    #map {
        height: 300px;
        width: 100%;
    }

    p {
        color: rgba(255, 255, 255, 0.5);
    }
</style>

@endsection

@section('system')

<section class="special"></section>

<div class="m-4" style="text-align: center;">
    <h2 class="title_man">name</h2>
</div>

<section class="about mb-3">
    <div class="container">
        <div class="row">
            <div class="col-md-5 p-3 bg-transparent">
                <div class="about__img text-center text-md-left">
                    <img style="border-radius:10px;height:352px;width:100%;" class="img-fluid"
                        src="/storage/farm_images/noimage.jpg" alt="" />
                    <a class="about__img__date text-center">
                        <h3>estd</h3>
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
                                type
                            </span>
                        </div>
                        <div>
                            <span style="color: #f9cc41;">
                                Founder
                            </span>
                            <span class="pl-1" style="color: #bbb;">
                                manager
                            </span>
                        </div>


                        <div>
                            <span style="color: #f9cc41;">
                                Consultant
                            </span>
                            <span class="pl-1" style="color: #bbb;">
                                Consultant
                            </span>
                        </div>



                        <div>
                            <span style="color: #f9cc41;">
                                Phone
                            </span>
                            <span class="pl-1" style="color: #bbb;">
                                Phone
                            </span>
                        </div>



                        <div>
                            <span style="color: #f9cc41;">
                                Email
                            </span>
                            <span class="pl-1" style="color: #bbb;">
                                Email
                            </span>
                        </div>


                        <div>
                            <span style="color: #f9cc41;">
                                Estd
                            </span>
                            <span class="pl-1" style="color: #bbb;">
                                Estd
                            </span>
                        </div>


                        <div>
                            <span style="color: #f9cc41;">
                                Website
                            </span>
                            <span class="pl-1" style="color: #bbb;">
                                Website
                            </span>
                        </div>


                        {{-- <!-- @if($farm) -->
                        <!-- @endif --> --}}

                        <div>
                            <span style="color: #f9cc41;">
                                Address
                            </span>
                            <span class="pl-1" style="color: #bbb;">
                                Address
                            </span>
                        </div>

                    </div>
                </div>
                <!-- <a class="btn btn--rightBorder" href="#">Read More</a> -->
            </div>
        </div>
    </div>
</section>


<section class="portfolio section-margin">
    <div class="container">
        <div class="section-intro">
            <h4 style="font-size:25px;" class="section-intro__title">| PRODUCTS</h4>
            <h2 class="section-intro__subtitle bottom-border">
                All products count
            </h2>
        </div>

        <div class="row align-items-end pb-md-5 mb-4">
            <div class="col-md-7 p-3">
                <div>
                    <img style="border-radius:10px;height:330px;width:650px;" class="img-fluid shadow"
                        src="/storage/project_images/noimage.jpg" alt="" />
                </div>
            </div>
            <div class="col-md-5 p-3">
                <h4 class="section-intro__title left-border">estd</h4>
                <h2 style="font-size:25px;font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;"
                    class="section-intro__subtitle small">
                    name
                </h2>
                <p
                    style="font-size:20px;font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">
                    <b style="font-weight:100;">Client </b>client <br>
                    <b style="font-weight:100;">Location </b>location
                </p>
                <a class="btn btn--rightBorder" href="#">Read More</a>
            </div>
        </div>

    </div>
</section>


<section class="tips tips-bg mb-2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-10">
                <h2 class="section-intro__subtitle">
                    Write us everything you want to say.
                </h2>

                <form action="{{route('comments.store')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <input type="hidden" name="farmId" class="form-control" value="#" />
                    @if(Auth::guard()->check())
                    <input type="hidden" name="userId" class="form-control" value="{{auth()->user()->id}}" />
                    @else
                    <input type="hidden" name="userId" class="form-control" value="0" />
                    @endif
                    <textarea id="articleCkeditor" style="color:yellow;" name="commentDesc"
                        placeholder="Write Everything"></textarea>

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


@endsection